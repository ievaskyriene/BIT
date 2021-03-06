<?php

namespace BIT\app;

use Symfony\Component\EventDispatcher\EventDispatcher;
use BIT\app\coreExeptions\wrongArgsTypeExeption;
use BIT\app\Attachment;
use BIT\events\PostSaveEvent;
use BIT\events\PostSaveSubscriber;
use BIT\models\IdeaPost;
use BIT\models\EventPost;
use BIT\models\NewsPost;
use BIT\models\AlbumPost;
use BIT\models\CacheConfig;

class Post
{

    protected $ID;
    protected static $type = 'post';
    public $attachments = [];
    // combines meta ant post tables

    public function __construct($post_id = 0)
    {
        if (is_object($post_id)) {
            $post_id = (string) $post_id;
        }
        if (!is_string($post_id) && !is_integer($post_id)) {
            $post_id = 0;
        }

        if ($post_id === 0 || $post_id === '0') {
            foreach (get_object_vars(new \WP_Post(new \stdClass())) as $var => $value) {
                $this->$var = $value;
            }
            if (isset(static::$type)) $this->post_type = static::$type;
        } elseif (strcmp($post_id, '0') !== 0) {
            foreach (get_object_vars(get_post($post_id)) as $var => $value) {
                $this->$var = $value;
            }
            foreach (get_post_meta($post_id) as $var => $value) {

                $this->$var = get_post_meta($post_id, $var, true);
            }
            $this->attachments = $this->getAttachments($this->ID);
        }
    }

    // returns Post object with common post and meta fields
    public static function get($post_id = 0)
    {
        $post_id = (int)$post_id;
        if (0 === $post_id || !get_post_status($post_id)) {
            return new static();
        }

        if ($post_id < 0 || (strcmp(get_post($post_id)->post_type, static::$type) != 0)) {
            throw new wrongArgsTypeExeption('Wrong $post_id args passed to Post::get($post_id)');
        }

        return new static($post_id);
    }

    // returns all Post model objects if no args bypassed
    // if args bypassed as objects variable - returns var values of all objects as array
    // if args bypassed as array of objects variable - returns var values of all objects as array
    public static function all($field = null, $indexes = false): Collection
    {
        $posts = get_posts(['posts_per_page' => -1, 'post_type' => static::$type]);
        $list = [];

        if (is_array($field)) {
            if (!$indexes) {
                foreach ($posts as $post) {
                    $list[$post->ID] = [];
                    foreach ($field as $value) {
                        $list[$post->ID][$value] = $post->$value;
                    }
                }
            } else {
                foreach ($posts as $post) {
                    $list[$post->ID] = [];
                    foreach ($field as $value) {
                        $list[$post->ID][] = $post->$value;
                    }
                }
            }
        } elseif (is_string($field)) {
            foreach ($posts as $post) {
                $list[$post->ID] = $post->$field;
            }
        } else {
            foreach ($posts as $post) {
                $list[$post->ID] = static::get($post->ID);
            }
        }
        return new Collection($list);
    }


    // inserts or updates new object to DB 
    public function save()
    {
        $metaVars = [];
        foreach (get_object_vars($this) as $var => $value) {
            if (!array_key_exists($var, get_object_vars(new \WP_Post(new \stdClass())))) {
                if (strcmp($var, 'attachments') == 0) {
                    continue;
                }
                $metaVars[$var] = $value;
            }
        }
        $post = (array)$this;
        $post['ID'] = $this->ID;
        $post['meta_input'] = $metaVars;

        if (isset($this->ID)) {
            wp_update_post($post);
        } else {
            $postID = wp_insert_post($post, true);
            $this->ID = $postID;
        }

        // dispachinam
        // $dispatcher = new EventDispatcher();
        // $event = new PostSaveEvent($this->ID);
        // // $dispatcher->addSubscriber(new PostSaveSubscriber());
        // $dispatcher->dispatch($event, PostSaveEvent::NAME);
        // end dispach
    }

    public function delete($force_delete = false)
    {

        if ($this->ID > 0) {
            wp_delete_post($this->ID, $force_delete);
        } else {
            throw new wrongArgsTypeExeption('Klaida: trinamas objektas neturi ID');
        }
    }

    //returns objects ID (protected)
    public function __get($prop)
    {
        if ('ID' == $prop) {
            return $this->ID;
        }
        return null;
    }

    protected function getAttachments($parent_id): array
    {
        $allAttachments = get_posts(['posts_per_page' => -1, 'post_type' => 'attachment', 'post_parent' => $parent_id]);
        $attachments = [];
        foreach ($allAttachments as $id => $attachment) {
            $attachments[$attachment->ID] = Attachment::get($attachment->ID);
        }
        return $attachments;
    }

    public static function getModel(\WP_Post $post)
    {

        switch ($post->post_type) {
            case 'post':
                return Post::get($post->ID);
            case 'idea':
                return IdeaPost::get($post->ID);
            case 'album':
                return AlbumPost::get($post->ID);
            case 'news':
                return NewsPost::get($post->ID);
            case 'event':
                return EventPost::get($post->ID);
            case 'page':
                return Page::get($post->ID);
            case 'menu':
                return FrontMenu::get($post->ID);
            case 'menu':
                return CacheConfig::get($post->ID);

            default:
                return null;
        }
    }
    public function getLink()
    {
        return get_permalink($this->ID);
    }
    // returns post Page
    public function getPage()
    {
        if ($this->post_parent) {
            return Page::get($this->post_parent);
        }
    }
}



// $idea_content;
// $idea_like;
// NewsPost.php Aiste Noreikaite
// $news_content;
// attach pic; //TODO
// AlbumPost.php Jul1u5.lt 
// $post_title;
// $album_description;
// $album_date;
// attach pic; //TODO
// naujas objektas - new EventPost(); arba new IdeaPost();
// pvz:
// $kazkas = new EventPost();
// $kazkas->event_description = ???tekstas is requesto, geto arba posto???;
// $kazkas->event_date = 'YYYY-MM-DD';
// $kazkas->save();
// editinam objekta taip pat taip pat, tik objekta pasiimam per ::get(), naujo nekuriam:
// $kazkas = EventPost::get($post_id);
// $kazkas->event_description = ???tekstas is requesto, geto arba posto???;
// $kazkas->event_date = 'YYYY-MM-DD';
// $kazkas->save();
// ::get($post_id) - grazins jusu objekta.
// ::all() - grazins Collection objekta.
// save() - irasys DB nauja objekta, arba editins jau esanti, pagal tai ar sukursite nauja obj, ar pakeisite lauku reiksmes jau esanciam obj.
// delete() - posto istrynimui.

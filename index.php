<?php

/**
 * Plugin Name: BIT First
 * Plugin URI: https://www.yourwebsiteurl.com/
 * Description: First.
 * Version: 1.0
 * Author: Your Name Here
 * Author URI: http://yourwebsiteurl.com/
 **/
use BIT\models\AlbumPost;
use BIT\app\App;
use BIT\app\Query;
use BIT\app\Post;
use BIT\app\RequestId;
use BIT\app\Cookie;
use BIT\app\Transient;
use BIT\app\Session;
use BIT\app\Category;
use BIT\app\View;
use BIT\app\Collection;
use BIT\controllers\NewsController;
use BIT\models\IdeaPost;
use BIT\app\modelTraits\Tcategory;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
use BIT\app\coreExeptions\wrongArgsTypeExeption;

require_once __DIR__.'/vendor/autoload.php';

define('PLUGIN_DIR_URL', plugin_dir_url(__FILE__));
define('PLUGIN_DIR_PATH', plugin_dir_path(__FILE__));

$app = App::start();
$query = new Query;

// _dc($query->postMeta('event_date', 'konkreti data, kurios reikia')->postSort('event_time')->getPost()->all());



// $getPostType = $query->postSort('date','DESC')->getPost();

// _dc($getPostType);

// _dc($app->getService('requestId'));
$category = new Category;
// _dc(View::adminRender('category.edit', ['url' => PLUGIN_DIR_URL, 'category' => $category]));

add_action('init', function() {
// $album = new AlbumPost;
// $album->save();
// // //      _dc( $album);
// // // $album->addTag(['atostogos', 'namai']);
// // // $album->addTag(['tttt']);
// $album->addCat('indai', 'maincat');
// $album->addCat('baldai', 'maincat');
// $album->addCat(['lekstutes', 'sauksteliai'], 'maincat', 45); //gl padaryti, kad ne is butu o stringas kaip kat
// $album->addCat([' mazo lekstutes', 'dideles lekstutes'], 'maincat', 53);
// // ($album->getCats());
// //  _dc($album->getChildCats([45, 0]
$category = new Category;
$category->deleteCatImage(78, 'my_term_key');
// _dc($category);
//  _dc($category->getTermId('stalai'));
// _dc(get_term_by('name', 'stalai', 'maincat'));
// $category->addCat('stalai', 'maincat');
// // $album->addTag('ooorrr');
// //     // echo '<pre>';    
   
//     // _dc( $album);
// //     // wp_remove_object_terms( '953', '27', 'hashtag');
// // $album->removeTag(['atostogos', 'namai']);
// // // 
// // 
// // $album->removeCat('Indai');

// // _dc($album->getChildCats([45]));
//  _dc($album->get_taxonomy_hierarchy('maincat', 45));
// // $album->get_taxonomy_hierarchy(['maincat', 45]);
// //  _dc($album->getCats());
// //

// // _dc($album->getTags()->sortBy('count', 'desc'));
// //     //  $idea = new IdeaPost;
// //     //  $idea->save();
// //     //  _dc( $idea);
// //     //  $idea->addTag('');
});



// $request = App::start()->getService('request');
// $request->attributes->set('mykey', 'myvalue');
// $parameters = $request->attributes->get('mykey', 'myvalue');

// _dc($parameters);






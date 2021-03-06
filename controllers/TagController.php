<?php

namespace BIT\controllers;

use BIT\app\View;
use BIT\app\Tag;
use BIT\app\Pagination;
use BIT\app\Session;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
// use Symfony\Component\HttpFoundation\BinaryFileResponse;


class TagController
{

    public function index()
    {
        return View::adminRender('tag.maintag');
    }

    public function create(Request $request, Session $session)
    {

        if ($request->request->get('pageSelected') != null) {
            $limit = $request->request->get('pageSelected');
        } else {
            $limit = 5;
        }

        if (is_int($request->request->get('pages')) || strlen($request->request->get('hash')) != 0) {
            $number = $request->request->get('hash');
        } else {
            $number = 1;
        }

        $total = wp_count_terms('hashtag', ['hide_empty' => false]);
        $pagination = new Pagination($limit, $number, $total);
        $tags = get_terms('hashtag', array('number' => $limit, 'hide_empty' => false, 'offset' => $pagination->offset));
        $success_message = '';
        $message  = '';
        if ($session->get('alert_message') != null) {
            $message = $session->get('alert_message');
        } else if ($session->get('success_message') != null) {
            $success_message = $session->get('success_message');
        } else {
            $message = "";
        }
        $output = View::adminRender('tag.tag',  ['tags' => $tags, 'nextpage' => $pagination->nextpage, 'prevpage' => $pagination->prevpage, 'limit' => $limit, 'pages' => $pagination->pages, 'lastpage' => $pagination->lastpage, 'firstpage' => $pagination->firstpage, 'message' => $message,  'success_message' => $success_message]);
        return new JsonResponse(['html' => $output]);
    }

    public function store(Request $request, Session $session)
    {
        $tag = new Tag;
        $name = $request->request->get('tag_name');
        $slug = $request->request->get('tag_slug');
        $description = $request->request->get('tag_description');
        if ($name == '') {
            $session->flash('alert_message', "??ra??ykite tag'o pavadinim??");
        } else {
            $session->flash('success_message', "tag'as s??kmingai sukurtas");
            $tag->addTagtoDB($name, $slug, $description);
        }
        return new Response;
    }

    public function edit(Request $request)
    {
        $id = $request->request->get('editID');
        $taxonomy_type = $request->request->get('taxonomy_type');
        $tag = Tag::getTag($id, $taxonomy_type);
        $output = View::adminRender('tag.edit',  ['tag' => $tag]);
        return new JsonResponse(['html' => $output]);
    }

    public function update(Request $request, Session $session)
    {
        $name = $request->request->get('tag_name');
        $slug = $request->request->get('tag_slug');
        $description = $request->request->get('tag_description');
        $id = $request->request->get('updateId');
        $session->flash('success_message', "tag'as s??kmingai pakoreguotas");
        Tag::updateTag($id, $name, $slug, $description);
        return new Response;
    }

    public function destroy(Request $request, Session $session)
    {
        $id = $request->request->get('deleteID');
        $taxonomy_type = $request->request->get('taxonomy_type');
        Tag::deleteTagFromDb($id, $taxonomy_type);
        $session->flash('success_message', "tag'as s??kmingai i??trintas");
        return new Response;
    }
}

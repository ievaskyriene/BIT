<?php

namespace BIT\controllers;

use BIT\app\View;
use BIT\app\Attachment;
use BIT\app\Query;
use BIT\models\NewsPost;
use BIT\app\RequestId;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;


class NewsController {

    public function index(){

        return View::adminRender('news.index');

    }

    public function list(){  
        // $html = require '/Applications/MAMP/htdocs/wordpress/wp-content/plugins/BIT_first/views/news/list.php';
        $news = NewsPost::all()->all();
        $html = View::adminRender('news.list', ["news" => $news]);   
        $response = new JsonResponse(['htmlString' => $html]);
		return $response;

    }

    public function create(Request $request) {
        return View::adminRender('news.create');

    }

    
    
    public function store(Request $request) { 
        // _dc($request);
        $news = new NewsPost;
        $news->post_title = $request->request->get('content');
        $news->date = $request->request->get('date');
        $news->save();
        $pic = new Attachment;
        $pic->save($request->files->get('newsImg'), $news->ID);

        return new Response();
   
    }


    public function show (){}

    public function edit (Request $request, NewsPost $newsPost, RequestId $requestId){
            while(true){}
    }

    public function update(Request $request, NewsPost $newsPost)
    {   
        $newsPost->news_content = $request->get('news-content');
        
        $newsPost->save();
        $newsPost;
        $news = NewsPost::all();
        $response = new Response;
        $response->prepare($request);
        $response->setContent(json_encode(['list' => 'hello']));
        // $response->setContent(json_encode(['list' => View::adminRender('news.list', ['news' => $news])]));
        return $response;
    }

    public function destroy(NewsPost $newsPost) {  
        $newsPost->delete();
		return new Response;
         
    }
    protected function decodeRequest($request){

		if (0 === strpos($request->headers->get('Content-Type'), 'application/json')) {
			$data = json_decode($request->getContent(), true);
			$request->request->replace(is_array($data) ? $data : array());
		}

        return $request;
	}
}
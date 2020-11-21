<?php

namespace BIT\controllers;

use BIT\app\Attachment;
use BIT\app\View;
use BIT\app\Page;
use BIT\models\AlbumPost;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class GalleryFrontController
{
	public function __construct()
	{

		// 		$attachment = new Attachment();
		// $attachment->save($request, $post_parent_id(optional)); -sukuria nauja, arba update’ina esanti.
		// $attachment->delete();
		// $attachment->getURL();
		// $attachment->geAttachmentDetails();
	}

	public function uploadeIndex()
	{
		return View::render('gallery.uploade-images');
	}

	public function store(Request $request)
	{
		var_dump($request->request);
		$album = new AlbumPost();
		foreach ($request->request as $key => $a) {
			if ($key == "album") {
				$page = new Page();
				$page->pageState = 'Album Page'; 
				$page->setRoute('all-album');
				$page->setTitle($a);

				$page->save();
				$album->post_parent = $page->ID;
				$album->savybe = 'album_title';
				$album->save();

			}
		}

		$count = 0;
		$tags = [];
		foreach ($request->request as $value) {
			$tags[] = trim($value);
		}

		foreach ($request->files->all() as $key => $filesArr) {
			if ($filesArr instanceof \Symfony\Component\HttpFoundation\File\UploadedFile) {
				$count++;
				$image = new Attachment();
				foreach ($tags as $key1 => $tag) {
					if ($key1 + 1 == $count) {

						$image->save($request->files->all()[$key], $album->ID);
					//	AlbumPost::get($image->ID);
					// echo" <pre>";
					// 	var_dump(AlbumPost::get($album->ID)->attachments);
						$image->addTag($tags[$key1]);
						// var_dump($image->save());
						$image->save();
					}
				}
			}
		}
		// } elseif (is_array($filesArr)) {
		// 	foreach ($filesArr as $file) {
		// 		$image = new Attachment();
		//$image->save($file);
		// $image->addTag('pridedamas tag');
		// $image->save();
		// }
		//$image->save($file, $post_id);

		//AlbumPost::get($post_id)->attachments; grazina albuma

		// 	}
		// }
		// $data = (Attachment::all())->all();
		// $new = new Attachment();
		// $tg = $new->getAllTags();
		// var_dump($tg);
		// post_name

		/** Example usage:
		 * $album = new AlbumPost;
		 * $album->save();
		 * $album->addCat('cat1', 'maincat'); or $album->addCat(['cat1', 'cat2', '........'], 'maincat', ID tevines kategorijos));*/

		// $album->save();
		// $album->addTag('pridedamas tag');
		// $album->getAllTags();
		// $album->getTags('maincat')->sortBy('count', 'desc');

		return new Response();
	}

	// private function getFilesFromRequest(Request $request){
	// 	foreach($request->files->all() as $filesArr) {
	// 		if($filesArr instanceof \Symfony\Component\HttpFoundation\File\UploadedFile){
	// 			$image = new Attachment();
	// 			$image->save($filesArr);
	// 		}elseif(is_array($filesArr)){
	// 			foreach ($filesArr as $file) {
	// 				$image = new Attachment();
	// 				$image->save($file);
	// 			}
	// 		}
	// 	}
	// }

	private function decodeRequest($request)
	{

		if (0 === strpos($request->headers->get('Content-Type'), 'application/json')) {
			$data = json_decode($request->getContent(), true);
			$request->request->replace(is_array($data) ? $data : array());
		}

		return $request;
	}
}

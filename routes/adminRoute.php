<?php

return [
	'admin' => 'AdminController@index',
	'news' => 'NewsController@index',
	'news@' => ['News List' => 'NewsController@index', 'Add New' => 'NewsController@create'],

	'idejos' => 'IdeAdminController@adminIndex',

	'galerija' => 'GalleryAdminController@adminIndex',

	'philosophy' => 'PhilosophyController@index',
];

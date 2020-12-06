<?php

return [
	'admin' => 'AdminController@index',
	'news' => 'NewsAdminController@index',
	'news@' => ['post' => 'NewsAdminController@index', 'edit-posts' => 'NewsAdminController@list'],

	'idejos' => 'IdeAdminController@adminIndex',

	'galerija' => 'GalleryAdminController@adminIndex',

	'kategorija' => 'CategoryFrontController@index',

	'kalendorius' => 'CalendarAdminController@adminIndex',

	// 'category' => 'CategoryAdminController@create',
	// 'category@' => ['list' =>'CategoryAdminController@create', 'category_store'=> 'CategoryAdminController@store','category_edit'=> 'CategoryAdminController@edit', 'category_destroy'=> 'CategoryAdminController@destroy', 'category_update'=> 'CategoryAdminController@update'],

	'category' => 'CategoryController@index',

	'page' => 'PageController@index',
	// 'page@' => ['list' =>'PageController@create', 'page_edit'=> 'PageController@edit', 'page_store'=> 'PageController@store', 'page_destroy'=> 'PageController@destroy', 'page_update'=> 'PageController@update'],

	'tag' => 'TagController@index',
	// 'tag@' => ['list' =>'TagController@create', 'tag_edit'=> 'TagController@edit', 'tag_store'=> 'TagController@store', 'tag_destroy'=> 'TagController@destroy', 'tag_update'=> 'TagController@update']
];

<?php

// example Controller names and functions
// 'event' (key) is part of URL http://.../bebras/api/?route=event
return [
	'event-create-front' => 'EventController@create',

	'calendar-create-front' => 'CalendarFrontController@create',

	// 'category-creat-front' => 'CategoryFrontController@create',

	'calendar-create-admin' => 'CalendarAdminController@create',
	'calendar-store-admin' => 'CalendarAdminController@store',
	'calendar-delete-admin' => 'CalendarAdminController@delete',

	'ideas-render-front' => 'IdeasController@render',
	'idea-create-front' => 'IdeaController@create',
	'idea-render-front' => 'IdeaController@render',

	'idea-render-admin' => 'IdeAdminController@render',
	'idea-edit-admin' => 'IdeAdminController@edit',
	'idea-create-admin' => 'IdeAdminController@create',
	'idea-delete-admin' => 'IdeAdminController@delete',

	'gallery-store-admin' => 'GalleryAdminController@store',
	'gallery-edit-admin' => 'GalleryAdminController@edit',
	'gallery-create-admin' => 'GalleryAdminController@create',
	'gallery-delete-admin' => 'GalleryAdminController@delete',

	'gallery-store-front' => 'GalleryFrontController@store',
	'gallery-create-front' => 'GalleryFrontController@create',

	'album-create-admin' => 'AlbumFrontController@create',

	'news-list' => 'NewsAdminController@createPost',
	'news-store' => 'NewsAdminController@store',
	'news-update' => 'NewsAdminController@update',
	'news-destroy' => 'NewsAdminController@destroy',
	'news-edit' => 'NewsAdminController@apiEditPost',

	'tag_create' => 'TagController@create',
	'tag_store' => 'TagController@store',
	'tag_update' => 'TagController@update',
	'tag_destroy' => 'TagController@destroy',
	'tag_edit' => 'TagController@edit',
	'tag_paging' => 'TagController@paging',

	'category_create' => 'CategoryController@create',
	'category_store' => 'CategoryController@store',
	'category_update' => 'CategoryController@update',
	'category_destroy' => 'CategoryController@destroy',
	'category_edit' => 'CategoryController@edit',

	'page_create' => 'PageController@create',
	'page_store' => 'PageController@store',
	'page_update' => 'PageController@update',
	'page_destroy' => 'PageController@destroy',
	'page_edit' => 'PageController@edit',

	'menu_create' => 'MenuController@create',
	'menu_store' => 'MenuController@store',
	'menu_update' => 'MenuController@update',
	'menu_destroy' => 'MenuController@destroy',
	'menu_edit' => 'MenuController@edit',
];

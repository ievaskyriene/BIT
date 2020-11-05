<?php

// example Controller names and functions
// 'event' (key) is provided for the shortcode as attribute
return [
    'event' => 'EventController@index',
    
    'uploade-images' => 'GalleryFrontController@uploadeIndex',
    'all-album' => 'AlbumFrontController@index',


    'kalendorius' => 'CalendarFrontController@index',

    'ideja' => 'IdeaController@frontIndex',
    'idejos' => 'IdeasController@index',
   
    'test' => 'TestController@front',
    'news' =>'NewsController@index',
];
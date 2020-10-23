<?php

return [
    // 'event' post_type args
    'event' => [
		'label'                 => __( 'Event', 'text_domain' ),
		'description'           => __( 'Event Description', 'text_domain' ),
        'labels'                => 
            [
                'name'                  => _x( 'Events', 'Event General Name', 'text_domain' ),
                'singular_name'         => _x( 'Event', 'Event Singular Name', 'text_domain' ),
                'menu_name'             => __( 'Events', 'text_domain' ),
                'name_admin_bar'        => __( 'Event', 'text_domain' ),
                'archives'              => __( 'Item Archives', 'text_domain' ),
                'attributes'            => __( 'Item Attributes', 'text_domain' ),
                'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
                'all_items'             => __( 'All Items', 'text_domain' ),
                'add_new_item'          => __( 'Add New Item', 'text_domain' ),
                'add_new'               => __( 'Add New', 'text_domain' ),
                'new_item'              => __( 'New Item', 'text_domain' ),
                'edit_item'             => __( 'Edit Item', 'text_domain' ),
                'update_item'           => __( 'Update Item', 'text_domain' ),
                'view_item'             => __( 'View Item', 'text_domain' ),
                'view_items'            => __( 'View Items', 'text_domain' ),
                'search_items'          => __( 'Search Item', 'text_domain' ),
                'not_found'             => __( 'Not found', 'text_domain' ),
                'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
                'featured_image'        => __( 'Featured Image', 'text_domain' ),
                'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
                'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
                'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
                'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
                'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
                'items_list'            => __( 'Items list', 'text_domain' ),
                'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
                'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
            ],
		'supports'              => ['title', 'editor', 'author', 'thumbnail' ],
		'taxonomies'            => [ 'category', 'post_tag' ],
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 20,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
    ],

    // 'news' post_type args
    'news' => [
		'label'                 => __( 'News', 'text_domain' ),
		'description'           => __( 'News Description', 'text_domain' ),
        'labels'                => 
            [
                'name'                  => _x( 'Newses', 'News General Name', 'text_domain' ),
                'singular_name'         => _x( 'News', 'News Singular Name', 'text_domain' ),
                'menu_name'             => __( 'Newses', 'text_domain' ),
                'name_admin_bar'        => __( 'News', 'text_domain' ),
                'archives'              => __( 'Item Archives', 'text_domain' ),
                'attributes'            => __( 'Item Attributes', 'text_domain' ),
                'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
                'all_items'             => __( 'All Items', 'text_domain' ),
                'add_new_item'          => __( 'Add New Item', 'text_domain' ),
                'add_new'               => __( 'Add New', 'text_domain' ),
                'new_item'              => __( 'New Item', 'text_domain' ),
                'edit_item'             => __( 'Edit Item', 'text_domain' ),
                'update_item'           => __( 'Update Item', 'text_domain' ),
                'view_item'             => __( 'View Item', 'text_domain' ),
                'view_items'            => __( 'View Items', 'text_domain' ),
                'search_items'          => __( 'Search Item', 'text_domain' ),
                'not_found'             => __( 'Not found', 'text_domain' ),
                'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
                'featured_image'        => __( 'Featured Image', 'text_domain' ),
                'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
                'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
                'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
                'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
                'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
                'items_list'            => __( 'Items list', 'text_domain' ),
                'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
                'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
            ],
		'supports'              => ['title', 'editor', 'author', 'thumbnail' ],
		'taxonomies'            => [ 'category', 'post_tag' ],
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 20,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
    ],

    // 'idea' post_type args
    'idea' => [
		'label'                 => __( 'Idea', 'text_domain' ),
		'description'           => __( 'Idea Description', 'text_domain' ),
        'labels'                => 
            [
                'name'                  => _x( 'Ideas', 'Idea General Name', 'text_domain' ),
                'singular_name'         => _x( 'Idea', 'Idea Singular Name', 'text_domain' ),
                'menu_name'             => __( 'Ideas', 'text_domain' ),
                'name_admin_bar'        => __( 'Idea', 'text_domain' ),
                'archives'              => __( 'Item Archives', 'text_domain' ),
                'attributes'            => __( 'Item Attributes', 'text_domain' ),
                'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
                'all_items'             => __( 'All Items', 'text_domain' ),
                'add_new_item'          => __( 'Add New Item', 'text_domain' ),
                'add_new'               => __( 'Add New', 'text_domain' ),
                'new_item'              => __( 'New Item', 'text_domain' ),
                'edit_item'             => __( 'Edit Item', 'text_domain' ),
                'update_item'           => __( 'Update Item', 'text_domain' ),
                'view_item'             => __( 'View Item', 'text_domain' ),
                'view_items'            => __( 'View Items', 'text_domain' ),
                'search_items'          => __( 'Search Item', 'text_domain' ),
                'not_found'             => __( 'Not found', 'text_domain' ),
                'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
                'featured_image'        => __( 'Featured Image', 'text_domain' ),
                'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
                'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
                'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
                'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
                'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
                'items_list'            => __( 'Items list', 'text_domain' ),
                'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
                'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
            ],
		'supports'              => ['title', 'editor', 'author', 'thumbnail' ],
		'taxonomies'            => [ 'category', 'post_tag' ],
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 20,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
        ],

//'album' post_type args
'album' => [
    'label'                 => __( 'Album', 'text_domain' ),
    'description'           => __( 'Album Description', 'text_domain' ),
    'labels'                => 
        [
            'name'                  => _x( 'Albums', 'Album General Name', 'text_domain' ),
            'singular_name'         => _x( 'Album', 'Album Singular Name', 'text_domain' ),
            'menu_name'             => __( 'Albums', 'text_domain' ),
            'name_admin_bar'        => __( 'Album', 'text_domain' ),
            'archives'              => __( 'Item Archives', 'text_domain' ),
            'attributes'            => __( 'Item Attributes', 'text_domain' ),
            'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
            'all_items'             => __( 'All Items', 'text_domain' ),
            'add_new_item'          => __( 'Add New Item', 'text_domain' ),
            'add_new'               => __( 'Add New', 'text_domain' ),
            'new_item'              => __( 'New Item', 'text_domain' ),
            'edit_item'             => __( 'Edit Item', 'text_domain' ),
            'update_item'           => __( 'Update Item', 'text_domain' ),
            'view_item'             => __( 'View Item', 'text_domain' ),
            'view_items'            => __( 'View Items', 'text_domain' ),
            'search_items'          => __( 'Search Item', 'text_domain' ),
            'not_found'             => __( 'Not found', 'text_domain' ),
            'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
            'featured_image'        => __( 'Featured Image', 'text_domain' ),
            'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
            'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
            'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
            'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
            'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
            'items_list'            => __( 'Items list', 'text_domain' ),
            'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
            'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
        ],
    'supports'              => ['title', 'editor', 'author', 'thumbnail' ],
    'taxonomies'            => [ 'category', 'post_tag', 'hashtag' ],
    'hierarchical'          => false,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 20,
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => true,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'capability_type'       => 'post',
    ],

// copy new post_type args here





];

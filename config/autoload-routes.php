<?php


return [

    /**
     * Paths
     *
     * It is a list of routes in which files will be searched to proceed with
     * their automatic loading. The keys of the first array are the middleware
     * groups (they must exist in your Kernel class), and its values is an array
     * of directories in which to search and load these files.
     *
     * IMPORTANT!!!!
     * It is not possible to indicate a route that already exists in the list of routes
     */

    'paths' => [
        'web' => [
            base_path('src/autoload/web')
        ],
        'api' => [
            base_path('src/autoload/api'),
        ],
    ],

    /**
     * Depth
     *
     * The depth indicates the maximum level at which
     * route files will be searched.
     */

    'depth' => 3,
];

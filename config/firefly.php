<?php

return [

    /*
    |--------------------------------------------------------------------------
    | User Model
    |--------------------------------------------------------------------------
    |
    | Set your eloquent model for your users.
    |
    */

    'user' => App\User::class,

    /*
    |--------------------------------------------------------------------------
    | Group Privatization
    |--------------------------------------------------------------------------
    |
    | Set the group privatization to "true" if you would like to allow the
    | creation of private groups.
    |
    */

    'private_groups' => false,

    /*
    |--------------------------------------------------------------------------
    | Pagination Limits
    |--------------------------------------------------------------------------
    |
    | Set the maximum number of resources that will be shown per page.
    |
    */

    'pagination' => [
        'view'        => 'firefly::pagination.default',
        'discussions' => 20,
        'posts'       => 15,
    ],

    /*
    |--------------------------------------------------------------------------
    | API and Web
    |--------------------------------------------------------------------------
    |
    | Include whichever middleware and namespace(s) you want here.
    |
    */

    'api' => [
        'enabled'    => true,
        'prefix'     => 'api/forum',
        'namespace'  => '\Firefly\Http\Controllers\Api',
        'middleware' => ['api', 'auth:api'],
    ],

    'web' => [
        'name'       => 'firefly.',
        'enabled'    => true,
        'prefix'     => 'forum',
        'namespace'  => '\Firefly\Http\Controllers',
        'middleware' => 'web',
    ],

];

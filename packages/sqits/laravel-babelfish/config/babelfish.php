<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Babelfish Domain
    |--------------------------------------------------------------------------
    |
    | This is the subdomain where Babelfish will be accessible from. If this
    | setting is null, Babelfish will reside under the same domain as the
    | application. Otherwise, this value will serve as the subdomain.
    |
    */

    'domain' => env('BABELFISH_DOMAIN'),

    /*
    |--------------------------------------------------------------------------
    | Babelfish Path
    |--------------------------------------------------------------------------
    |
    | This is the URI path where Babelfish will be accessible from. Feel free
    | to change this path to anything you like. Note that the URI will not
    | affect the paths of its internal API that aren't exposed to users.
    |
    */

    'path' => env('BABELFISH_PATH', 'babelfish'),

    /*
    |--------------------------------------------------------------------------
    | Babelfish Route Middleware
    |--------------------------------------------------------------------------
    |
    | These middleware will get attached onto each Babelfish route, giving you
    | the chance to add your own middleware to this list or change any of
    | the existing middleware. Or, you can simply stick with this list.
    |
    */

    'middleware' => ['web'],

];

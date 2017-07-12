<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Canonical Host
    |--------------------------------------------------------------------------
    |
    | Set the canonical host for your app that you would like to return a
    | permanent redirect to if another host is used.
    |
    */

    'host' => 'laravel.com',

    /*
    |--------------------------------------------------------------------------
    | Secure Request
    |--------------------------------------------------------------------------
    |
    | If the request it not already secure then issue a permanent redirect
    | to the secure version of your canonical host.
    |
    */

    'secure' => false,

    /*
    |--------------------------------------------------------------------------
    | Ignored Hosts
    |--------------------------------------------------------------------------
    |
    | Set hosts that you are happy to ignore and not perform a redirect for.,
    | for example an API subdomain.
    |
    */
    'ignore' = []

];

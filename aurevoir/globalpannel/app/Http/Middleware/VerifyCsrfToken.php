<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as BaseVerifier;

class VerifyCsrfToken extends BaseVerifier
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        //
        'createplan', 'createuser', 'bill', 'user', 'login', 'createnewsaction', 'createnotificationsaction', 'creategalleryaction', 'createcareeraction', 'passwordaction', 'updatenewsaction', 'updatenotificationsaction', 'updatecareeraction', 'updategalleryaction'
    ];
}

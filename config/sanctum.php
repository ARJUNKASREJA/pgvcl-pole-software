<?php

return [

    'stateful'=>[],

    'guard'=>['web'],

    'expiration'=>null,

    'middleware'=>[

        'verify_csrf_token'=>

        App\Http\Middleware\VerifyCsrfToken::class,

    ],

];
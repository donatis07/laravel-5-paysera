<?php
return [
    'projectid'     => '', // * REQUIRED
    'sign_password' => '', // * REQUIRED
    'currency'      => 'EUR',
    // Country can be ...
    'country'       => 'LT',

    // Test mode (sand box) 0 - off or 1 - on
    'test'          => 1,

    /*
     * Order model namespace
     * Package can automatically set order model status
     * If null, nothing gonna happen
     */
    'order_model_namespace' => \App\Order::class,

    /*
     * Routes where Paysera will send callback
     *
     * * REQUIRED
     *
     * PayseraMiddleWare will take care parsing data and etc.
     */
    'routes_names' => [
        'callback'  => 'paysera.callback',
        'accept'    => 'paysera.accept',
        'cancel'    => 'paysera.cancel'
    ],

    /*
     * !!! NOT NEEDED ANYMORE
     *
     * Used for get available payment methods
     * Here you can set what payment methods groupds should be return by default
     */
    //'payment_groups' => ['e-banking', 'e-money', 'other'],


];
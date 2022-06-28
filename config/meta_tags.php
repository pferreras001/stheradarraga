<?php

use Butschster\Head\MetaTags\Viewport;

return [
    /*
     * Meta title section
     */
    'title' => [
        'default' => "Sther Adarraga",
        'separator' => '-',
        'max_length' => 255,
    ],


    /*
     * Meta description section
     */
    'description' => [
        'default' => "Sther Adarraga, tu obrador de repostería hojaldrada en Donostia",
        'max_length' => 255,
    ],


    /*
     * Meta keywords section
     */
    'keywords' => [
        'default' => "Sther Adarraga, tarta adarraga donosti, tarta adarraga donostia,  tarta adarraga san sebastian, pasteleria donostia, pasteleria san sebastian, tarta adarraga",
        'max_length' => 1000
    ],

    /*
     * Default packages
     *
     * Packages, that should be included everywhere
     */
    'packages' => [
        // 'jquery', 'bootstrap', ...
    ],

    'charset' => 'utf-8',
    'robots' => null,
    'viewport' => Viewport::RESPONSIVE,
    'csrf_token' => true,
];
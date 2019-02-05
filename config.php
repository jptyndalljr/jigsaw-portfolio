<?php

return [
    'production' => false,
    'baseUrl' => '',
    'home' => '/',
    'siteName' => 'JP\'s Portfolio',
    'collections' => [
      'posts' => [
        'path' => 'blog/{date|Y-m-d}/{filename}'
      ],
    ],
];

<?php

if (!route(1)){
    $route[1] = 'index';
}

if (!file_exists(admin_controller(route(1)))){
    $route[1] = 'index';
}

if (!session('user_rank') || session('user_rank') == 3){
    $route[1] = 'login';
}

$menus = [
    [
        'url' => 'index',
        'title' => 'Əsas Səhifə',
        'icon' => 'tachometer',
        'permissions' => [
            'show' => 'Görüntülə'
        ]
    ],
    [
        'url' => 'users',
        'title' => 'İstifadəçilər',
        'icon' => 'user',
        'permissions' => [
            'show' => 'Görüntülə',
            'edit' => 'Düzənlə',
            'delete' => 'Silmə'
        ]
    ],
    [
        'url' => 'contact',
        'title' => 'Əlaqə Mesajları',
        'icon' => 'envelope',
        'permissions' => [
            'show' => 'Görüntülə',
            'edit' => 'Düzənlə',
            'send' => 'Göndərmə',
            'delete' => 'Silmə'
        ]
    ],
    [
        'url' => 'posts',
        'title' => 'Blog',
        'icon' => 'rss',
        'permissions' => [
            'show' => 'Görüntülə',
            'add' => 'Əlavə etmə',
            'edit' => 'Düzənlə',
            'delete' => 'Silmə'
        ],
        'submenu' => [
            [
                'url' => 'posts',
                'title' => 'Postlar'
            ],
            [
                'url' => 'tags',
                'title' => 'Etiketlər',
                'permissions' => [
                    'show' => 'Görüntülə',
                    'add' => 'Əlavə etmə',
                    'edit' => 'Düzənlə',
                    'delete' => 'Silmə'
                ]
            ],
            [
                'url' => 'categories',
                'title' => 'Kateqoriyalar',
                'permissions' => [
                    'show' => 'Görüntülə',
                    'add' => 'Əlavə etmə',
                    'edit' => 'Düzənlə',
                    'delete' => 'Silmə'
                ]
            ],
            [
                'url' => 'comments',
                'title' => 'Rəylər',
                'permissions' => [
                    'show' => 'Görüntülə',
                    'edit' => 'Düzənlə',
                    'delete' => 'Silmə'
                ]
            ]
        ]
    ],
    [
        'url' => 'reference',
        'title' => 'Referanslar',
        'icon' => 'photo',
        'permissions' => [
            'show' => 'Görüntülə',
            'add' => 'Əlavə etmə',
            'edit' => 'Düzənlə',
            'delete' => 'Silmə'
        ],
        'submenu' => [
            [
                'url' => 'reference-categories',
                'title' => 'Kateqoriyalar',
                'permissions' => [
                    'show' => 'Görüntülə',
                    'add' => 'Əlavə etmə',
                    'edit' => 'Düzənlə',
                    'delete' => 'Silmə'
                ]
            ]
        ]
    ],
    [
        'url' => 'pages',
        'title' => 'Səhifələr',
        'icon' => 'file',
        'permissions' => [
            'show' => 'Görüntülə',
            'add' => 'Əlavə etmə',
            'edit' => 'Düzənlə',
            'delete' => 'Silmə'
        ]
    ],
    [
        'url' => 'menu',
        'title' => 'Menyu İdarəsi',
        'icon' => 'bars',
        'permissions' => [
            'show' => 'Görüntülə',
            'add' => 'Əlavə etmə',
            'edit' => 'Düzənlə',
            'delete' => 'Silmə'
        ]
    ],
    [
        'url' => 'settings',
        'title' => 'Parametrlər',
        'icon' => 'cog',
        'permissions' => [
            'show' => 'Görüntülə',
            'edit' => 'Düzənlə'
        ]
    ]
];

require admin_controller(route(1));
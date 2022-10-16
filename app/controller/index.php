<?php

$meta = [
    'title' => setting('title'),
    'description' => setting('description'),
    'keywords' => setting('keywords')
];


//controller blog phpdəki DB məlumatlarını oxusun deyə)) başqa saytlarda eləmə poxu poxa qatarsan

require controller('blog');

//include_once 'blog.php' ;

require controller('referanslar');
//include_once 'referanslar.php';
//include_once '_referans-kategori.php';








require view('index');
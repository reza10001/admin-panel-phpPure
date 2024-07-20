<?php


$router->get('register','App\Controllers\RegisterController@create');
$router->post('register','App\Controllers\RegisterController@store');

$router->get('dashboard','App\Controllers\HomeController@home');

$router->get('create','App\Controllers\HomeController@create');
$router->post('home/delete/{id}','App\Controllers\HomeController@delete');

$router->post('home/posts','App\Controllers\HomeController@store');
$router->get('home/posts','App\Controllers\HomeController@index');

$router->get('home/profile','App\Controllers\profileController@index');
$router->post('home/profile','App\Controllers\profileController@update');


$router->get('login','App\Controllers\LoginController@login');
$router->post('login','App\Controllers\LoginController@auth');


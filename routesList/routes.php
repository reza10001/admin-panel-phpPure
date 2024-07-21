<?php


$router->get('register','App\Controllers\RegisterController@create');
$router->post('register','App\Controllers\RegisterController@store');

$router->get('home','App\Controllers\HomeController@index');

$router->get('login','App\Controllers\LoginController@login');
$router->post('login','App\Controllers\LoginController@auth');


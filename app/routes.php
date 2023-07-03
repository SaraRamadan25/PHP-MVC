<?php
//pages
$router->get('','PageController@home');
$router->get('about','PageController@about');
$router->get('contact','PageController@contact');
//articles
$router->get('articles/create','ArticleController@create');
$router->post('articles/store','ArticleController@store');

$router->get('articles','ArticleController@index');
$router->get('article','ArticleController@show');
$router->get('article/edit','ArticleController@edit');
$router->post('article/update','ArticleController@update');

$router->post('article/delete','ArticleController@delete');


//auth
$router->get('register','AuthController@register');
$router->post('register','AuthController@store');
$router->get('login','AuthController@login');
$router->post('login','AuthController@verify');
$router->get('logout','AuthController@logout');









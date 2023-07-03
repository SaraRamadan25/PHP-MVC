<?php

use core\App;
use core\database\Connection;
use core\database\QueryBuilder;

App::bind('config', require'config.php');
App::bind('database', new QueryBuilder(
    Connection::make(App::get('config')['database'])
));

function view($file,$data=[]){
    extract($data);
    return require "app/views/{$file}.view.php";

}
/*$app['database']->insert(
    'articles',
    [
        'name' => 'article2',
        'body' => 'body2'
    ]
);
var_dump($app['database']->selectAll('articles'));*/

/*var_dump($app['database']->select('articles',
    'id= ?',
    [1]
));*/

function redirect($path)
{
    header("Location: {$path}");
}

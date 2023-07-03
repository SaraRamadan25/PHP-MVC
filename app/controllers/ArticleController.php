<?php
namespace app\controllers;
use core\App;

class ArticleController
{
    public function create(){
        return view('articles/create');
    }
    public function store()
    {

        App::get('database')->insert('articles',
        [
            'name'=>$_POST['name'],
            'body'=>$_POST['body']
        ]);
        header('Location:/articles');
    }
    public  function  index(){
        $articles = App::get('database')->selectAll('articles');
        return view('articles/index',compact('articles'));
    }



    public function show()
    {
        $article = App::get('database')->select('articles',$_GET['id']);
        return view('articles/show',compact('article'));
    }


    public  function  edit(){
        $article = App::get('database')->select('articles',$_GET['id']);
        return view('articles/edit',compact('article'));
    }

    public  function  update(){
        App::get('database')->update(
            'articles',
            "name=?,body=?",
            "id=?",
            [
                $_POST['name'],
                $_POST['body'],
                $_POST['id']
            ]
        );
        header('Location:/articles');
    }

    public  function  delete(){
        App::get('database')->delete('articles',$_GET['id']);
        header('Location:/articles');
    }
}
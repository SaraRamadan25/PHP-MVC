<?php
namespace app\controllers;

class PageController{
    public function about()
    {
        $articles =[
            [
            'title' =>'About',
            'description' =>'description',
            'url' =>'url'
        ],

        [


            'title' =>'About2',
            'description' =>'description2',
            'url' =>'url2'

        ],
        ];

        return view('about',compact('articles'));

    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;


class ArticleController extends Controller
{
    public function index(){
        $articles = Article::get();
        return view("articles", compact('articles'));
    }

    public function post($id){
        $article = Article::where('id', '=', $id)->firstOrFail();
        return view("article", compact('article'));
    }
}

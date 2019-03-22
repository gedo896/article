<?php

namespace App\Http\Controllers\Admin;

use App\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $articles = Article::all();
        return view('admin.articles.index',compact('articles'));
    }

    public function show($id)
    {
        $articles = Article::all();
        $article = Article::where('id',$id)->first();
        return view('admin.articles.show',compact('article','articles'));
    }

    public function approved($id)
    {
        $article = Article::where('id',$id)->first();
        $article->status = 'approved';
        $article->update();

        return redirect()->route('articles.index');
    }

    public function rejected($id)
    {
        $article = Article::where('id',$id)->first();
        $article->status = 'rejected';
        $article->update();

        return redirect()->route('articles.index');
    }
}

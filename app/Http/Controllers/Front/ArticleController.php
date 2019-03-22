<?php

namespace App\Http\Controllers\Front;

use App\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::where('status','approved')->get();
        return view('front.article.index',compact('articles'));
    }

    public function create()
    {
        return view('front.article.create');
    }

    public function store(Request $request , Article $article)
    {
        // validation for article
        $request->validate([
            'title' => 'required',
            'avatar' => 'required',
            'content' => 'required',
        ]);
        // upload image file in 'public/uploads/articles'
        $avatar = $request->file('avatar')->store('articles');

        //  store article in database
        $article->title = $request->get('title');
        $article->avatar = $avatar;
        $article->content = $request->get('content');
        $article->user_id = auth()->user()->id;
        $article->save();

        //  return to article.create page
        return redirect()->route('article.create');
    }

    public function show($id)
    {
        $article = Article::find($id);
        return view('front.article.show',compact('article'));
    }
}

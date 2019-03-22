<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
//use Tymon\JWTAuth\JWTAuth;

//use Tymon\JWTAuth\Facades\JWTAuth;

class ArticlesController extends Controller
{

    public function __construct()
    {

    }

    public function index()
    {
        $articles = Article::all();

    }

    public function store(Request $request , Article $article)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'content' => 'required',
            'avatar' => 'required',
        ]);

        // if has error return json with error
        if ($validator->fails()) {
            return response()->json($validator->errors()->toJson(), 400);
        }

        // upload image file in 'public/uploads/articles'
        $avatar = $request->file('avatar')->store('articles');

        $article->title = $request->title;
        $article->content = $request->get('content');
        $article->avatar = $avatar;


        if ($this->user()->articles()->save($article))
            return response()->json([
                'success'   => true,
                'message'   =>  'Article wait admin Admin will be approve',
                'article'   => $article
            ]);

        else
            return response()->json([
                'success' => false,
                'message' => 'Sorry, article could not be added'
            ], 500);

    }

    public function show($id)
     {
        $product = $this->user()->articles()->find($id);

        if (!$product) {
            return response()->json([
                'success' => false,
                'message' => 'Sorry, articles with id ' . $id . ' cannot be found'
            ], 400);
        }

        return $product;
    }

    public function user()
    {
        return \JWTAuth::parseToken()->authenticate();
    }
}

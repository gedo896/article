@extends('admin.layout.app')

@section('title')
    Note
@stop

@section('style')
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/blog.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/color_skins.css') }}">
@stop

@section('content')
    <div id="main-content" class="blog-page">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-5 col-md-8 col-sm-12">
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a> Blog List</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('Admin') }}"><i class="icon-home"></i></a></li>
                            <li class="breadcrumb-item">Blog</li>
                            <li class="breadcrumb-item active">Blog List</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-lg-8 col-md-12 left-box">
                    <div class="card single_post">
                        <div class="body">
                            <div class="img-post">
                                <img class="d-block img-fluid" src="{{ asset('uploads/'.$article->avatar) }}" alt="First slide">
                            </div>
                            <h3>{{ $article->title }}</h3>
                            <p>{!! $article->content !!}</p>
                        </div>
                        <div class="footer">
                            <div class="actions">
                                <a href="{{ route('articles.approved',['article' => $article->id]) }}" class="btn btn-outline-secondary">Approved</a>
                                <a href="{{ route('articles.rejected',['article' => $article->id]) }}" class="btn btn-outline-secondary">rejected</a>
                            </div>
                            <ul class="stats">
                                <li><a href="javascript:void(0);">status: {{$article->status }}</a></li>
                                <li><a href="javascript:void(0);">by: {{ $article->user->name }}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 right-box">
                    <div class="card">
                        <div class="header">
                            <h2>Last Article Add</h2>
                        </div>
                        <div class="body widget popular-post">
                            <div class="row">
                                <div class="col-lg-12">
                                    @foreach($articles as $article)
                                        <div class="single_post">
                                            <p class="m-b-0">{{ $article->title }}</p>
                                            <span>{{ $article->created_at->diffForHumans() }}</span>
                                            <div class="img-post">
                                                <img src="{{ asset('uploads/'.$article->avatar) }}" alt="Awesome Image">
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
@stop

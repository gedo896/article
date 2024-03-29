@extends('front.layout.app')

@section('pageHeader')
    <div class="page-header" data-parallax="true" style="background-image: url('{{ asset('assetsA/img/daniel-olahh.jpg') }}');">
        <div class="filter"></div>
        <div class="container">
            <div class="motto text-center">
                <h1>All Articles</h1>
                <h3>Start designing your landing page here.</h3>
            </div>
        </div>
    </div>
@stop

@section('content')

    <div class="main">
        <div class="section text-center">
            <div class="container">

                <div class="row">

                    <!-- Blog Entries Column -->
                    <div class="col-md-8">

                        <h1 class="my-4">Page Heading
                            <small>Secondary Text</small>
                        </h1>

                        <!-- Blog Post -->
                        @foreach($articles as $article)
                        <div class="card mb-4">
                            <img class="card-img-top" src="{{ asset('uploads/'.$article->avatar) }}" alt="Card image cap">
                            <div class="card-body">
                                <h2 class="card-title">{{ $article->title }}</h2>
                                <p class="card-text">{!! $article->content !!}</p>
                                <a href="{{ route('article.show',['id'=>$article->id]) }}" class="btn btn-primary">Read More &rarr;</a>
                            </div>
                            <div class="card-footer text-muted">
                                Posted on {{ $article->created_at }}, by
                                <a href="#">{{ $article->user->name }}</a>
                            </div>
                        </div>
                        @endforeach

                        <!-- Pagination -->
                        <ul class="pagination justify-content-center mb-4">
                            <li class="page-item">
                                <a class="page-link" href="#">&larr; Older</a>
                            </li>
                            <li class="page-item disabled">
                                <a class="page-link" href="#">Newer &rarr;</a>
                            </li>
                        </ul>

                    </div>

                    <!-- Sidebar Widgets Column -->
                    <div class="col-md-4">

                        <!-- Search Widget -->
                        <div class="card my-4">
                            <h5 class="card-header">Search</h5>
                            <div class="card-body">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search for...">
                                    <span class="input-group-btn">
                                        <button class="btn btn-secondary" type="button">Go!</button>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <!-- Categories Widget -->
                        <div class="card my-4">
                            <h5 class="card-header">Categories</h5>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <ul class="list-unstyled mb-0">
                                            <li>
                                                <a href="#">Web Design</a>
                                            </li>
                                            <li>
                                                <a href="#">HTML</a>
                                            </li>
                                            <li>
                                                <a href="#">Freebies</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-6">
                                        <ul class="list-unstyled mb-0">
                                            <li>
                                                <a href="#">JavaScript</a>
                                            </li>
                                            <li>
                                                <a href="#">CSS</a>
                                            </li>
                                            <li>
                                                <a href="#">Tutorials</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Side Widget -->
                        <div class="card my-4">
                            <h5 class="card-header">Side Widget</h5>
                            <div class="card-body">
                                You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
                            </div>
                        </div>

                    </div>

                </div>
                <!-- /.row -->

            </div>
        </div>
    </div>
@stop
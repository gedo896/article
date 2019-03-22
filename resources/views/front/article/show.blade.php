@extends('front.layout.app')

@section('style')

@stop

@section('pageHeader')
    <div class="page-header" data-parallax="true" style="background-image: url('{{ asset('assetsA/img/daniel-olahh.jpg') }}');">
        <div class="filter"></div>
        <div class="container">
            <div class="motto text-center">
                <h1>Article page</h1>
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

                    <!-- Post Content Column -->
                    <div class="col-lg-12">

                        <!-- Title -->
                        <h1 class="mt-4">{{ $article->title }}</h1>

                        <!-- Author -->
                        <p class="lead">
                            by
                            <a href="#">{{ $article->user->name }}</a>
                        </p>

                        <hr>

                        <!-- Date/Time -->
                        <p>Posted on {{ $article->created_at }}</p>

                        <hr>

                        <!-- Preview Image -->
                        <img class="img-fluid rounded" src="{{ asset('uploads/'.$article->avatar) }}" alt="">

                        <hr>

                        <!-- Post Content -->
                        <p class="lead">
                        {!! $article->content !!}
                        </p>

                        <hr>

                    </div>

                    <!-- Sidebar Widgets Column -->
                    <!--<div class="col-md-4">

                      &lt;!&ndash; Search Widget &ndash;&gt;
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

                      &lt;!&ndash; Categories Widget &ndash;&gt;
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

                      &lt;!&ndash; Side Widget &ndash;&gt;
                      <div class="card my-4">
                        <h5 class="card-header">Side Widget</h5>
                        <div class="card-body">
                          You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
                        </div>
                      </div>

                    </div>-->

                </div>
                <!-- /.row -->

            </div>
        </div>
    </div>
@stop
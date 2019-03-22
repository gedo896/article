@extends('front.layout.app')


@section('pageHeader')
    <div class="page-header" data-parallax="true" style="background-image: url('{{ asset('assetsA/img/daniel-olahh.jpg') }}');">
        <div class="filter"></div>
        <div class="container">
            <div class="motto text-center">
                <h1>Add Article</h1>
                <h3>Start designing your landing page here.</h3>
            </div>
        </div>
    </div>
@stop

@section('content')
    <div class="main">
        <div class="section landing-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 ml-auto mr-auto">
                        <h2 class="text-center">Add Article</h2>
                        <form class="contact-form" method="post" action="{{ route('article.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <label>Title</label>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                        </span>
                                        <input type="text"
                                               value="{{ old('title') }}"
                                               class="form-control {{ $errors->has('title') ? ' is-invalid' : '' }}"
                                               name="title"
                                               placeholder="title"/>

                                        @if ($errors->has('title'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('title') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label>Avatar</label>
                                    <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="nc-icon nc-image"></i>
                                                </span>
                                        <input type="file"
                                               value="{{ old('avatar') }}"
                                               class="form-control {{ $errors->has('avatar') ? ' is-invalid' : '' }}"
                                               name="avatar"
                                               placeholder="Image"/>

                                        @if ($errors->has('avatar'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('avatar') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <label>Message</label>
                            <textarea
                                    id="summernote"
                                    name="content"
                                    class="form-control {{ $errors->has('content') ? ' is-invalid' : '' }}">
                                {{ old('content') }}
                            </textarea>
                            @if ($errors->has('content'))
                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('content') }}</strong>
                                            </span>
                            @endif
                            <div class="row">
                                <div class="col-md-4 ml-auto mr-auto">
                                    <button class="btn btn-danger btn-lg btn-fill">Add Article</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('scripts')
    <!-- include libraries(jQuery, bootstrap) -->

    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <!-- include summernote css/js -->
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.css" rel="stylesheet">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.js"></script>

    <script>
        $(document).ready(function() {
            $('#summernote').summernote();
        });
    </script>
@stop
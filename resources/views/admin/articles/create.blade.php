@extends('admin.layout.app')

@section('title')
    Note :: Create
@stop

@section('content')
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-5 col-md-8 col-sm-12">
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a> Form Validation</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
                            <li class="breadcrumb-item">Forms</li>
                            <li class="breadcrumb-item active">Form Validation</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2>Basic Validation</h2>
                        </div>
                        <form method="post" action="{{ route('notes.store') }}">
                            <div class="body">
                                <form id="basic-form" method="post" novalidate>
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input type="text" name="title" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Content</label>
                                        <textarea class="form-control" name="content" rows="5" cols="30" required></textarea>
                                    </div>
                                    {{csrf_field()}}
                                    <br>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
@stop

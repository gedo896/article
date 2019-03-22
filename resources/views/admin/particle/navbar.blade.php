<nav class="navbar navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-btn">
            <button type="button" class="btn-toggle-offcanvas"><i class="lnr lnr-menu fa fa-bars"></i></button>
        </div>

        <div class="navbar-brand">
            <a href="{{ route('Admin') }}"><img src="{{ asset('assets/images/mg2.png') }}" alt="Lucid Logo" class="img-responsive logo"></a>
        </div>

        <div class="navbar-right">
            {{--<form id="navbar-search" class="navbar-form search-form">
                <input value="" class="form-control" placeholder="Search here..." type="text">
                <button type="button" class="btn btn-default"><i class="icon-magnifier"></i></button>
            </form>--}}

            <div id="navbar-menu">
                <ul class="nav navbar-nav">

                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle icon-menu" data-toggle="dropdown">
                            <i class="icon-bell"></i>
                            <span class="{{--{{auth()->user()->unreadNotifications->count() > 0 ? 'notification-dot':''}}--}}"></span>
                        </a>
                        <ul class="dropdown-menu notifications">
                            <li class="header"><strong>You have {{--{{auth()->user()->unreadNotifications->count()}}--}} new Notifications</strong></li>
                            @foreach(auth()->user()->notifications as $data)
                            <li>
                                <a href="javascript:void(0);">
                                    <div class="media">
                                        <div class="media-left">
                                            <i class="icon-like text-success"></i>
                                        </div>
                                        <div class="media-body">
                                            <p class="text">You Add new note <strong> {{$data->data['title']}} </strong> .</p>
                                            <span class="timestamp">{{ $data->created_at->diffForHumans() }}</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            @endforeach
                            <li class="footer"><a href="javascript:void(0);" class="more">See all notifications</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="{{ route('logout') }}" class="icon-menu"><i class="icon-login"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<div id="left-sidebar" class="sidebar">
    <div class="sidebar-scroll">
        <div class="user-account">
            <img src="{{ asset('assets/images/user.png') }}" class="rounded-circle user-photo" alt="User Profile Picture">
            <div class="dropdown">
                <span>Welcome,</span>
                <a href="javascript:void(0);" class="dropdown-toggle user-name" data-toggle="dropdown"><strong>{{auth()->user()->name}}</strong></a>
                <ul class="dropdown-menu dropdown-menu-right account">
                    <li><a href="{{--{{ route('user.profile') }}--}}"><i class="icon-user"></i>My Profile</a></li>
                    <li><a href="#!"><i class="icon-envelope-open"></i>Messages</a></li>
                    <li><a href="javascript:void(0);"><i class="icon-settings"></i>Settings</a></li>
                    <li class="divider"></li>
                    <li><a href="{{ route('logout') }}"><i class="icon-power"></i>Logout</a></li>
                </ul>
            </div>
        </div>
        <!-- Tab panes -->
        <div class="tab-content p-l-0 p-r-0">
            <div class="tab-pane active" id="menu">
                <nav id="left-sidebar-nav" class="sidebar-nav">
                    <ul id="main-menu" class="metismenu">

                        <li class="{{Route::currentRouteName()=== 'Admin' ? 'active' : ''}}">
                            <a href="{{route('Admin')}}"><i class="icon-home"></i> <span>Dashboard</span></a>
                        </li>

                        <li class="{{Route::currentRouteName()=== 'users.index' ? 'active' : ''}}">
                            <a href="{{ route('users.index') }}"><i class="icon-users"></i> <span>Users</span></a>
                        </li>

                        <li class="{{Route::currentRouteName()=== 'articles.index' ? 'active' : ''}}">
                            <a href="{{ route('articles.index') }}"><i class=" icon-notebook"></i> <span>Articles</span></a>
                        </li>

                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
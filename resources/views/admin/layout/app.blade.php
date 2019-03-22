<!doctype html>
<html lang="en">

@include('admin.particle.head')

<body class="theme-cyan">

<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img src="{{ asset('assets/images/logo-icon.svg') }}" width="48" height="48" alt="Lucid"></div>
        <p>Please wait...</p>
    </div>
</div>
<!-- Overlay For Sidebars -->

<div id="wrapper">

    @include('admin.particle.navbar')

    @include('admin.particle.sidebar')

    @yield('content')

</div>

<!-- Javascript -->
@include('admin.particle.script')

</body>
</html>

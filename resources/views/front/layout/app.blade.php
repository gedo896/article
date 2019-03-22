<!doctype html>
<html lang="en">

@include('front.particle.head')

<body>

@include('front.particle.navbar')

@yield('pageHeader')

@yield('content')

@include('front.particle.footer')

</body>

@include('front.particle.script')

</html>

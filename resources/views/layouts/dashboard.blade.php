<!doctype html>
<html lang="en">
<head>
@include('includes.head')
</head>
<body>
<div class="container-fluid">
    @include('includes.navbar')
    @yield('content')
</div>

@yield('components')
@include('includes.page-js')
</body>
</html>

<meta charset="UTF-8">
<meta name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>@yield('title')</title>

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">

<link rel="stylesheet" href="{{asset('assets/bootstrap-4.6.0-dist/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/fontawesome/css/all.min.css')}}">
{{--Begin Page Level CSS--}}
@stack('styles')
{{--End Page Level CSS--}}
<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

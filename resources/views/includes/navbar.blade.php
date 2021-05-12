<nav class="navbar navbar-expand-lg navbar-light m-0 p-0">
    {{--            <div class="container-fluid">--}}
    <a class="navbar-brand" href="{{url('/')}}">
        <img src="{{asset('public/assets/images/logo.png')}}" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse flex-column" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto mb-2 mb-lg-0 top-nav">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">
                    <img src="{{asset('public/assets/images/icons/mail.png')}}" alt=""> Mail
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('/contacts')}}"><img src="{{asset('public/assets/images/icons/contact.png')}}" alt=""> Contacts</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><img src="{{asset('public/assets/images/icons/settings.png')}}" alt=""> Settings</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><img src="{{asset('public/assets/images/icons/logout.png')}}" alt=""> Logout</a>
            </li>
        </ul>
        @yield('navbar')
    </div>
    {{--            </div>--}}
</nav>

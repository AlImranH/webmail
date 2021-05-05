@extends('layouts.dashboard')
@section('title', 'Create new message')
@section('navbar')
    <nav class="navbar navbar-expand-lg navbar-light w-100 top-bottom-navbar m-0 p-0">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#" title="Check for new message"><img src="{{asset('public/assets/images/icons/check-message.png')}}" alt=""></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/create-new-message')}}" title="Create a new message"><img src="{{asset('public/assets/images/icons/create-message.png')}}" alt=""></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" title="Replay to sender"><img src="{{asset('public/assets/images/icons/reply-sender.png')}}" alt="" class="img-disabled"></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle open-dropdown" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" onclick="openDropdown()">
                        <img src="{{asset('public/assets/images/icons/replay-all.png')}}" alt="" class="img-disabled">
                    </a>
                    <div class="dropdown-menu dropdown-content open-dropdown-content m-0 p-0" id="dropdownContent" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item m-0 py-2 px-1" href="#">Replay all</a>
                        <a class="dropdown-item m-0 py-2 px-1" href="#">Replay list</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle forward-dropdown" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" onclick="forwardDropdown()">
                        <img src="{{asset('public/assets/images/icons/forward-message.png')}}" alt="" class="img-disabled">
                    </a>
                    <div class="dropdown-menu dropdown-content forward-dropdown-content m-0 p-0" id="forwarddropdown" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item m-0 py-1 px-1" href="#">Forward inline</a>
                        <a class="dropdown-item m-0 py-1 px-1" href="#">Forward as attachment</a>
                        <a class="dropdown-item m-0 py-1 px-1" href="#">Resend (bounce)</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle mark-dropdown" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" onclick="markDropdown()">
                        <img src="{{asset('public/assets/images/icons/mark-message.png')}}" alt="">
                    </a>
                    <div class="dropdown-menu dropdown-content mark-dropdown-content m-0 p-0" id="markDropdown" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item m-0 py-1 px-1" href="#"><img src="{{asset('public/assets/images/icons/as-read.png')}}" alt=""> As read</a>
                        <a class="dropdown-item m-0 py-1 px-1" href="#"><img src="{{asset('public/assets/images/icons/as-unread.png')}}" alt=""> As unread</a>
                        <a class="dropdown-item m-0 py-1 px-1" href="#"><img src="{{asset('public/assets/images/icons/as-flagged.png')}}" alt=""> As flagged</a>
                        <a class="dropdown-item m-0 py-1 px-1" href="#"><img src="{{asset('public/assets/images/icons/as-unflagged.png')}}" alt=""> As unflagged</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle action-dropdown" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" onclick="actionDropdown()">
                        <img src="{{asset('public/assets/images/icons/more-action.png')}}" alt="">
                    </a>
                    <div class="dropdown-menu dropdown-content mark-dropdown-content m-0 p-0" id="actionDropdown" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item m-0 py-1 px-1" href="#"><img src="{{asset('public/assets/images/icons/print.png')}}" alt=""> Print this message</a>
                        <a class="dropdown-item m-0 py-1 px-1" href="#"><img src="{{asset('public/assets/images/icons/download.png')}}" alt=""> Download (.eml)</a>
                        <a class="dropdown-item m-0 py-1 px-1" href="#"><img src="{{asset('public/assets/images/icons/pencil.png')}}" alt=""> Edit as new</a>
                        <a class="dropdown-item m-0 py-1 px-1" href="#"><img src="{{asset('public/assets/images/icons/moveto.png')}}" alt=""> Move to...</a>
                        <a class="dropdown-item m-0 py-1 px-1" href="#"><img src="{{asset('public/assets/images/icons/copyto.png')}}" alt=""> Copy to...</a>
                        <a class="dropdown-item m-0 py-1 px-1" href="#"><img src="{{asset('public/assets/images/icons/sourse.png')}}" alt=""> Show sourse</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item m-0 py-1 px-1" href="#"><img src="{{asset('public/assets/images/icons/open-new.png')}}" alt=""> Open in new window</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
@endsection

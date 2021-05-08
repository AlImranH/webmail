@extends('layouts.dashboard')
@section('title', "Webmail :: Draft")
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
                    <a class="nav-link dropdown-toggle open-dropdown" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" onclick="openDropdown()" title="Reply to list or to sender all recipients">
                        <img src="{{asset('public/assets/images/icons/replay-all.png')}}" alt="" class="img-disabled">
                    </a>
                    <div class="dropdown-menu dropdown-content open-dropdown-content m-0 p-0" id="dropdownContent" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item m-0 py-2 px-1" href="#">Replay all</a>
                        <a class="dropdown-item m-0 py-2 px-1" href="#">Replay list</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle forward-dropdown" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" onclick="forwardDropdown()" title="Forward the message">
                        <img src="{{asset('public/assets/images/icons/forward-message.png')}}" alt="" class="img-disabled">
                    </a>
                    <div class="dropdown-menu dropdown-content forward-dropdown-content m-0 p-0" id="forwarddropdown" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item m-0 py-1 px-1" href="#">Forward inline</a>
                        <a class="dropdown-item m-0 py-1 px-1" href="#">Forward as attachment</a>
                        <a class="dropdown-item m-0 py-1 px-1" href="#">Resend (bounce)</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" title="Move message to trash"><img src="{{asset('public/assets/images/icons/delete-message.png')}}" alt="" class="img-disabled"></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle mark-dropdown" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" onclick="markDropdown()" title="Mark messages">
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
                    <a class="nav-link dropdown-toggle action-dropdown" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" onclick="actionDropdown()" title="More actions...">
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
            <form class="form-inline my-2 my-lg-0 m-0 p-0 w-50 text-right ml-auto justify-content-end">
                <div class="form-group row">
                    <label for="inputPassword" class="col-md-1 col-form-label text-right">Filter:</label>
                    <div class="col-md-10">
                        <select name="" class="form-control-sm form-control" id="">
                            <option value="">All</option>
                            <option value="">Unread</option>
                            <option value="">Flagged</option>
                            <option value="">Unanswered</option>
                            <option value="">Deleted</option>
                            <option value="">Not Deleted</option>
                            <option value="">With Attachment</option>
                            <option value="">Priority: Highest</option>
                            <option value="">Priority: High</option>
                            <option value="">Priority: Normal</option>
                            <option value="">Priority: Low</option>
                            <option value="">Priority: Lowest</option>
                        </select>
                    </div>
                </div>
                &nbsp;
                <div class="input-group mb-3 rounded-pill mt-3">
                    <div class="input-group-prepend">
                        <button class="btn btn-outline-secondary dropdown-toggle m-0 p-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-search"></i></button>
                        <div class="dropdown-menu px-2">
                            <form action="">
                                <input type="checkbox" name="" id=""> From <br>
                                <input type="checkbox" name="" id=""> To <br>
                                <input type="checkbox" name="" id=""> Cc <br>
                                <input type="checkbox" name="" id=""> Bcc <br>
                                <input type="checkbox" name="" id=""> Body <br>
                                <input type="checkbox" name="" id=""> Entire Message <br>
                                Date
                                <select name="" id="">
                                    <option value=""></option>
                                    <option value="">younger than a week</option>
                                    <option value="">younger than a month</option>
                                    <option value="">younger than a year</option>
                                    <option value="">older than a week</option>
                                    <option value="">older than a month</option>
                                    <option value="">older than a year</option>
                                </select>
                            </form>
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                            <div role="separator" class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Separated link</a>
                        </div>
                    </div>
                    <input type="text" class="form-control form-control-sm" aria-label="Text input with dropdown button">
                </div>
                {{--<input class="form-control mr-sm-2 form-control-sm rounded-pill" type="search" placeholder="Search" aria-label="Search">--}}
            </form>
        </div>
    </nav>
@endsection
@section('content')
    <div class="row">
        <div class="col-md-2">
            <div class="card mailboxlist-container" style="bottom: 0px; height: 80vh">
                <div class="card-header boxtitle">
                    Folders
                </div>
                <div class="card-body p-0">
                    <ul class="list-unstyled m-0 p-0">
                        <li>
                            <a href="{{url('/')}}" class="text-decoration-none px-1 border-bottom d-block"><img src="{{asset('assets/images/icons/inbox.png')}}" alt=""> Inbox</a>
                        </li>
                        <li>
                            <a href="{{url('/drafts')}}" class="text-decoration-none px-1 border-bottom d-block active"><img src="{{asset('assets/images/icons/drafts.png')}}" alt=""> Drafts</a>
                        </li>
                        <li>
                            <a href="{{url('/sent')}}" class="text-decoration-none px-1 border-bottom d-block"><img src="{{asset('assets/images/icons/send.png')}}" alt=""> Sent</a>
                        </li>
                        <li>
                            <a href="" class="text-decoration-none px-1 border-bottom d-block"><i class="fas fa-archive"></i> Archieve </a>
                        </li>
                        <li>
                            <a href="" class="text-decoration-none px-1 border-bottom d-block"><i class="fas fa-hand-sparkles"></i> Anti spam </a>
                        </li>
                        <li>
                            <a href="" class="text-decoration-none px-1 border-bottom d-block"><i class="fas fa-address-book"></i> Contacts acceptation list </a>
                        </li>
                        <li>
                            <a href="" class="text-decoration-none px-1 border-bottom d-block"><i class="fas fa-address-book"></i> Contacts refusal list  </a>
                        </li>
                        <li>
                            <a href="" class="text-decoration-none px-1 border-bottom d-block"><i class="far fa-file"></i> Document Saver  </a>
                        </li>
                        <li>
                            <a href="" class="text-decoration-none px-1 border-bottom d-block"><i class="fas fa-trash-alt"></i> Delete  </a>
                        </li>
                    </ul>
                </div>
                <div class="card-footer p-0 d-flex">
                    <div class="dropdown">
                        <a class="dropdown-toggle d-block p-1 border-right rounded-0 border-dark border-top-0 border-bottom-0 border-left-0" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-cog"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center align-items-center">
                        <div class="w-75">
                            <input type="text" class="rounded-pill text-center" value="0%">
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card mailboxlist-container" style="bottom: 0px; height: 80vh">
                <div class="card-header boxtitle" >
                    <div class="row">
                        <div class="col-3">
                            <a href="javascript:" data-toggle="modal" data-target="#staticBackdrop" title="List options..."><img src="{{asset('assets/images/icons/list-options.png')}}" alt=""></a>
                        </div>
                        <div class="col-9 text-right">
                            Message 1 to 2 of 2
                            <a href=""><img src="{{asset('assets/images/icons/step-backforward.png')}}" alt="" class="p-1"></a>
                            <a href=""><img src="{{asset('assets/images/icons/caret-left.png')}}" alt="" class="p-1"></a>
                            <input type="text" value="1" class="pagejumper">
                            <a href=""><img src="{{asset('assets/images/icons/caret-right.png')}}" alt="" class="p-1"></a>
                            <a href=""><img src="{{asset('assets/images/icons/step-forward.png')}}" alt="" class="p-1"></a>
                        </div>
                    </div>
                </div>
                <div class="card-body p-0">
                    <ul class="p-0 m-0 list-unstyled message-list">
                        <li>
                            <a href="" class="d-flex justify-content-between text-decoration-none d-block px-2 border-bottom active">
                                <div>
                                    <small class="p-0 m-0">&nbsp;</small>
                                    <p class="m-0 pb-1">(no subject)</p>
                                </div>
                                <div>
                                    <small class="text-secondary">Today 23:09</small>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="" class="d-flex justify-content-between text-decoration-none d-block px-2 border-bottom">
                                <div>
                                    <small class="p-0 m-0">&nbsp;</small>
                                    <p class="m-0 pb-1">(no subject)</p>
                                </div>
                                <div>
                                    <small class="text-secondary">Today 23:09</small>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="card-footer d-flex justify-content-between">
                    <div>
                        Select :
                        <a href="" title="All">
                            <img src="{{asset('assets/images/icons/select-all.png')}}" alt="">
                        </a>
                        <a href="" title="Current page">
                            <img src="{{asset('assets/images/icons/select-current-page.png')}}" alt="">
                        </a>
                        <a href="" title="Unread">
                            <img src="{{asset('assets/images/icons/select-unread.png')}}" alt="">
                        </a>
                        <a href="" title="Invert">
                            <img src="{{asset('assets/images/icons/select-inver.png')}}" alt="">
                        </a>
                        <a href="" title="None">
                            <img src="{{asset('assets/images/icons/select-none.png')}}" alt="">
                        </a>
                    </div>
                    <div>
                        Threads:
                        <a href="" title="Expand All">
                            <img src="{{asset('assets/images/icons/expand-all.png')}}" alt="">
                        </a>
                        <a href="" title="Expand Unread">
                            <img src="{{asset('assets/images/icons/expand-unread.png')}}" alt="">
                        </a>
                        <a href="" title="Collapse All">
                            <img src="{{asset('assets/images/icons/collapse-all.png')}}" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="message-body p-2" style="bottom: 0px; height: 80vh">
                <div class="message-header">
                    <div class="table-responsive">
                        <table class="table p-0 m-0" style="background: #EBEBEB">
                            <tr class="m-0 p-0">
                                <td class="text-right w-auto px-1 py-0 header-title">From</td>
                                <td class="px-1 py-0">Asif Iqbal <i class="fas fa-user-tie"></i></td>
                            </tr>
                            <tr class="m-0 p-0">
                                <td class="text-right w-auto px-1 py-0 header-title">Date</td>
                                <td class="px-1 py-0">2021-04-12 17:02</td>
                            </tr>
                            <tr class="m-0 p-0">
                                <td class="text-right w-10 px-1 py-0 header-title">&nbsp;</td>
                                <td class="px-1 py-0"></td>
                            </tr>
                        </table>
                    </div>
                    <br>
                    --<br><br>
                    BFIN GROUP PLC. <br><br>

                    Reg. n° 12070052 <br><br>

                    England & Wales <br><br>

                    (HEAD OFFICE FINANCIAL MANAGEMENT) <br><br>
                </div>
            </div>
        </div>
    </div>
@endsection

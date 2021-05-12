@extends('layouts.dashboard')
@section('title', 'Contacts')
@section('navbar')
    <nav class="navbar navbar-expand-lg navbar-light w-100 top-bottom-navbar m-0 p-0">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#" title="Create new contact"><img src="{{asset('public/assets/images/icons/create-new-contact.png')}}" alt=""></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" title="Compose mail to"><img src="{{asset('public/assets/images/icons/create-message.png')}}" alt=""></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" title="Print contacts"><img src="{{asset('public/assets/images/icons/print-1.png')}}" alt="" class="img-disabled"></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" title="Delete selected contacts"><img src="{{asset('public/assets/images/icons/delete-message.png')}}" alt="" class="img-disabled"></a>
                </li>
                <li style="border-right: 1px dotted gray"></li>
                <li class="nav-item">
                    <a class="nav-link" href="#" title="Import contacts"><img src="{{asset('public/assets/images/icons/import-contact.png')}}" alt=""></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle open-dropdown" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" onclick="openDropdown()" title="Reply to list or to sender all recipients">
                        <img src="{{asset('public/assets/images/icons/export-contact.png')}}" alt="">
                    </a>
                    <div class="dropdown-menu dropdown-content open-dropdown-content m-0 p-0" id="dropdownContent" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item m-0 py-1 px-1" href="#">Export all</a>
                        <a class="dropdown-item m-0 py-1 px-1 disabled" href="#">Export selected</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" title="Move message to trash"><img src="{{asset('public/assets/images/icons/search.png')}}" alt=""></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle action-dropdown" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" onclick="actionDropdown()" title="More actions...">
                        <img src="{{asset('public/assets/images/icons/more-action.png')}}" alt="">
                    </a>
                    <div class="dropdown-menu dropdown-content mark-dropdown-content m-0 p-0" id="actionDropdown" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item m-0 py-1 px-1" href="#"><img src="{{asset('public/assets/images/icons/QR.png')}}" alt=""> QR Code</a>
                        <a class="dropdown-item m-0 py-1 px-1" href="#"><img src="{{asset('public/assets/images/icons/assign-group.png')}}" alt=""> Assign to group...</a>
                        <a class="dropdown-item m-0 py-1 px-1" href="#"><img src="{{asset('public/assets/images/icons/remove-group.png')}}" alt=""> Remove from group</a>
                    </div>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0 m-0 p-0 w-50 text-right ml-auto justify-content-end">
                <div class="input-group mb-3 rounded-pill mt-3">
                    <div class="input-group-prepend">
                        <button class="btn btn-outline-secondary dropdown-toggle m-0 p-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-search"></i></button>
                        <div class="dropdown-menu px-2">
                            <form action="">
                                <input type="checkbox" name="" id=""> Display Name <br>
                                <input type="checkbox" name="" id=""> First Name <br>
                                <input type="checkbox" name="" id=""> Last Name <br>
                                <input type="checkbox" name="" id=""> Email <br>
                                <input type="checkbox" name="" id=""> All fields <br>
                            </form>
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
    <div class="row mt-2" style="height: 80vh">
        <div class="col-md-2">
            <div class="card mailboxlist-container" style="bottom: 0px; height: 80vh">
                <div class="card-header boxtitle">
                    Folders
                </div>
                <div class="card-body p-0">
                    <ul class="list-unstyled m-0 p-0">
                        <li>
                            <a href="{{url('/')}}" class="text-decoration-none px-1 border-bottom d-block active"><img src="{{asset('assets/images/icons/inbox.png')}}" alt=""> Personal Addresses</a>
                        </li>
                    </ul>
                </div>
                <div class="card-footer p-0 d-flex">
                    <a href="" class="d-block py-1 px-2 border-right border-dark" data-toggle="modal" data-target="#staticBackdrop"><i class="fa fa-plus"></i></a>
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
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card mailboxlist-container" style="bottom: 0px; height: 80vh">
                <div class="card-header boxtitle">
                    Contacts
                </div>
                <div class="card-body p-0">
                    <ul class="list-unstyled m-0 p-0">
                        <li class="d-flex justify-content-between border-bottom px-1 active">
                            <a href="{{url('/')}}" class="text-decoration-none px-1  d-block">Asif Iqbal</a>
                            <div>
                                <a href="" title="Archive" class="px-1"><i class="fas fa-archive text-danger"></i></a>
                                <a href="" title="Refuse" class="px-1"><i class="fas fa-user-times text-warning"></i></a>
                            </div>
                        </li>
                        <li class="d-flex justify-content-between border-bottom px-1">
                            <a href="{{url('/')}}" class="text-decoration-none px-1  d-block">Brian bin</a>
                            <div>
                                <a href="" title="Archive" class="px-1"><i class="fas fa-archive text-danger"></i></a>
                                <a href="" title="Refuse" class="px-1"><i class="fas fa-user-times text-warning"></i></a>
                            </div>
                        </li>
                        <li class="d-flex justify-content-between border-bottom px-1">
                            <a href="{{url('/')}}" class="text-decoration-none px-1  d-block">Farzana Naomi</a>
                            <div>
                                <a href="" title="Archive" class="px-1"><i class="fas fa-archive text-danger"></i></a>
                                <a href="" title="Refuse" class="px-1"><i class="fas fa-user-times text-warning"></i></a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="card-footer py-0 px-2 d-flex">
                    <a href=""><img src="{{asset('assets/images/icons/step-backforward.png')}}" alt="" class="p-1 img-disabled"></a>
                    <a href=""><img src="{{asset('assets/images/icons/caret-left.png')}}" alt="" class="p-1 img-disabled"></a>
                    <span class="px-3">Message 1 to 3 of 3</span>
                    <a href=""><img src="{{asset('assets/images/icons/caret-right.png')}}" alt="" class="p-1 img-disabled"></a>
                    <a href=""><img src="{{asset('assets/images/icons/step-forward.png')}}" alt="" class="p-1 img-disabled"></a>
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="card mailboxlist-container">
                <div class="card-header boxtitle">Contact properties</div>
                <div class="card-body">
                    <div class="row justify-content-between">
                        <h5>Asif Iqbal</h5>
                        <img src="{{asset('public/assets/images/contactpic.png')}}" class="border" alt="Contact Picture">
                    </div>
                        <ul class="nav nav-tabs border-dark" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link py-0 px-1 border-dark border-bottom-0 rounded-0 active" id="properties-tab" data-toggle="tab" href="#properties" role="tab" aria-controls="properties" aria-selected="true">Properties</a>
                            </li>
                        </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active border border-top-0 border-dark p-2" id="properties" role="tabpanel" aria-labelledby="properties-tab">
                                    <table class="w-100">
                                        <tr>
                                            <td class="w-10 header-title"><small>Email</small><br>Home</td>
                                            <td><br><a href="">asifiqbal1537@gmail.com</a></td>
                                        </tr>
                                        <tr>
                                            <td class="w-10 header-title"><small>Phone</small><br>Home</td>
                                            <td><br>01611773666</td>
                                        </tr>
                                        <tr>
                                            <td class="w-10 header-title"><small>Address</small><br>Home</td>
                                            <td><br>Muktatagacha, Mymensingh, Dhaka
                                                Dhaka 2210
                                                Bangladesh</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                    <a href="{{url('/edit-contact')}}" class="btn border-dark mt-2 py-1 px-3">Edit contact</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <form action="">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Create new group</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" id="name" name="name" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn border">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

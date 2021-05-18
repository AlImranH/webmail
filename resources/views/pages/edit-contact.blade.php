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
            <form action="">
                <div class="card mailboxlist-container">
                    <div class="card-header boxtitle">Edit contact</div>
                    <div class="card-body overflow-auto">
                        <div class="row justify-content-between mb-2">
                            <div class="col-md-10">
                                <div class="row mb-2">
                                    <div class="col-md-2 d-none pr-1" id="prefix">
                                        <input type="text" class="font-size-20 px-1 w-100" placeholder="Prefix">
                                    </div>
                                    <div class="col-md-3 pr-1">
                                        <input type="text" class="font-size-20 px-1 w-100" value="Asif" placeholder="First name">
                                    </div>
                                    <div class="col-md-3 px-1 d-none" id="middlename">
                                        <input type="text" class="font-size-20 px-1 w-100" placeholder="Middle Name">
                                    </div>
                                    <div class="col-md-3 px-1">
                                        <input type="text" class="font-size-20 px-1 w-100" value="Iqbal" placeholder="Last name">
                                    </div>
                                    <div class="col-md-3 my-1 d-none" id="suffix">
                                        <input type="text" class="font-size-20 px-1 w-100" placeholder="Suffix">
                                    </div>
                                </div>
                                <div class="d-none my-1" id="display_name">
                                    <input type="text" class="w-50" placeholder="Display Name">
                                </div>
                                <div class="d-none my-1" id="nickname">
                                    <input type="text" class="w-50" placeholder="Nick Name">
                                </div>
                                <div class="d-none my-1" id="organization">
                                    <input type="text" class="w-50" placeholder="Organization">
                                </div>
                                <div class="d-none my-1" id="department">
                                    <input type="text" class="w-50" placeholder="Department">
                                </div>
                                <div class="d-none my-1" id="jobtitle">
                                    <input type="text" class="w-50" placeholder="Job Title">
                                </div>
                                <select name="" class="add-single-field" id="">
                                    <option value="">Add field...</option>
                                    <option value="prefix">Prefix</option>
                                    <option value="middlename">Middle Name</option>
                                    <option value="suffix">Suffix</option>
                                    <option value="display_name">Display Name</option>
                                    <option value="nickname">Nickname</option>
                                    <option value="organization">Organization</option>
                                    <option value="department">Department</option>
                                    <option value="jobtitle">Job Title</option>
                                </select>
                            </div>
                            <div class="col-md-2 text-center">
                                <img src="{{asset('public/assets/images/contactpic.png')}}" class="border" alt="Contact Picture"><br>
                                <label for="upload-photo" class="custom-label pt-1 pb-0 px-2 border-0 text-danger m-0">Add</label>
                                <input type="file" name="photo" id="upload-photo" style="width: 5px"/><br>
                                <a href="" class="m-0 p-0 disabled text-decoration-none text-secondary">Delete</a>
                            </div>
                        </div>
                        <ul class="nav nav-tabs border-dark" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link py-0 px-1 border-dark border-bottom-0 rounded-0 active" id="properties-tab" data-toggle="tab" href="#properties" role="tab" aria-controls="properties" aria-selected="true">Properties</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link py-0 px-1 border-dark border-bottom-0 rounded-0" id="personalInfo-tab" data-toggle="tab" href="#personalInfo" role="tab" aria-controls="personalInfo" aria-selected="true">Personal informations</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link py-0 px-1 border-dark border-bottom-0 rounded-0" id="notes-tab" data-toggle="tab" href="#notes" role="tab" aria-controls="notes" aria-selected="true">Notes</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active border border-top-0 border-dark p-2" id="properties" role="tabpanel" aria-labelledby="properties-tab">
                                <table class="w-100 properties">
                                    <tr id="emailRow">
                                        <td class="w-15 header-title"><small>Email</small><br>
                                            <select name="subtype_email[]" id="subtype_email" class="border-0 w-100">{{-- Don't remove id attribute or don't change id --}}
                                                <option value="home">Home</option>
                                                <option value="work">Work</option>
                                                <option value="other">Other</option>
                                            </select>
                                        </td>
                                        <td><br><a href=""><input type="text" name="email[]" id="email" class="px-2" value="asifiqbal1537@gmail.com"></a></td>{{-- Don't remove id attribute or don't change id --}}
                                    </tr>
                                    <tr id="phoneRow">
                                        <td class="w-10 header-title"><small>Phone</small><br>
                                            <select name="subtype_phone[]" id="subtype_phone" class="border-0 w-100">
                                                <option value="home" selected="selected">Home</option>
                                                <option value="home2">Home 2</option>
                                                <option value="work">Work</option>
                                                <option value="work2">Work 2</option>
                                                <option value="mobile">Mobile</option>
                                                <option value="main">Main</option>
                                                <option value="homefax">Home Fax</option>
                                                <option value="workfax">Work Fax</option>
                                                <option value="car">Car</option>
                                                <option value="pager">Pager</option>
                                                <option value="video">Video</option>
                                                <option value="assistant">Assistant</option>
                                            </select>
                                        </td>
                                        <td><br><input type="text" name="phone[]" id="phone" class="px-2" value="01611773666"></td>
                                    </tr>
                                    <tr id="addressRow">
                                        <td class="w-10 header-title"><small>Address</small><br>
                                            <select name="subtype_address[]" id="subtype_address" class="border-0 w-100">
                                                <option value="">Home</option>
                                                <option value="">Work</option>
                                                <option value="">Other</option>
                                            </select>
                                        </td>
                                        <td><br>
                                            <input type="text" name="street[]" id="street" class="px-2 my-1" placeholder="Street" value="Muktatagacha, Mymensingh, Dhaka"><br>
                                            <input type="text" name="city[]" id="city" class="px-2 my-1" placeholder="City" value="Dhaka">
                                            <input type="text" name="zip_code[]" id="zip_code" class="px-2 my-1 w-10" placeholder="ZIP Code" value="2210"><br>
                                            <input type="text" name="country[]" id="country" class="px-2 my-1" placeholder="Country" value="Bangladesh">
                                            <input type="text" name="state[]" id="state" class="px-2 my-1 w-15" placeholder="State/Province">
                                            </td>
                                    </tr>
                                    <tr id="addFieldRow">
                                        <td>
                                            <select name="" class="add-field">
                                                <option value="">Add field...</option>
                                                <option value="email">Email</option>
                                                <option value="phone">Phone</option>
                                                <option value="address">Address</option>
                                                <option value="website">Website</option>
                                                <option value="im">IM</option>
                                            </select>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="tab-pane fade show border border-top-0 border-dark p-2" id="personalInfo" role="tabpanel" aria-labelledby="personalInfo-tab">
                                <table class="w-100">
                                    <tr>
                                        <td class="header-title w-10">Gender</td>
                                        <td>
                                            <select name="" id="">
                                                <option value="">---</option>
                                                <option value="">Male</option>
                                                <option value="">Female</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="header-title w-10">Birthday</td>
                                        <td>
                                            <input type="date" name="" id="" placeholder="Birthday" class="mt-3">
                                        </td>
                                    </tr>
                                    <tr id="addFieldRow" class="addFieldRow">
                                        <td>
                                            <select name="" id="" class="add-single-field mt-3">
                                                <option value="">Add field...</option>
                                                <option value="maidenname">Maiden Name</option>
                                                <option value="anniversary">Anniversary</option>
                                                <option value="manager">Manager</option>
                                                <option value="assistant">Assistant</option>
                                                <option value="spouse">Spouse</option>
                                            </select>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="tab-pane fade show border border-top-0 border-dark p-2" id="notes" role="tabpanel" aria-labelledby="notes-tab">
                                <textarea name="" id="" class="form-control w-75" cols="30" rows="10"></textarea>
                            </div>
                        </div>
                        <input type="reset" class="text-secondary mt-2 px-2" value="Cancel">
                        <input type="submit" class="mt-2 px-2 font-weight-bold" value="Save">
                    </div>
                </div>
            </form>
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
@push('scripts')
    <script src="{{asset('public/assets/js/edit-contact.js')}}"></script>
@endpush

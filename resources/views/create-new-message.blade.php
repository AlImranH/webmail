@extends('layouts.dashboard')
@section('title', 'Create new message')
@section('navbar')
    <nav class="navbar navbar-expand-lg navbar-light w-100 top-bottom-navbar m-0 p-0">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{url('/')}}" title="Back to message list"><img src="{{asset('public/assets/images/icons/back.png')}}" alt=""></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/create-new-message')}}" title="Send message"><img src="{{asset('public/assets/images/icons/send-message.png')}}" alt=""></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" title="Attach a file"><img src="{{asset('public/assets/images/icons/attachment.png')}}" alt=""></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" title="Insert signature"><img src="{{asset('public/assets/images/icons/insert-signature.png')}}" alt=""></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" title="Save as draft"><img src="{{asset('public/assets/images/icons/save-as-draft.png')}}" alt=""></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle open-dropdown" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" onclick="openDropdown()">
                        <img src="{{asset('public/assets/images/icons/check-spelling.png')}}" alt="">
                    </a>
                    <div class="dropdown-menu dropdown-content open-dropdown-content m-0 p-0" id="dropdownContent" aria-labelledby="navbarDropdown" style="height: 400px; overflow: scroll">
                        <ul class="list-unstyled">
                            <li class="d-flex align-items-center">
                                <a class="dropdown-item m-0 py-1 px-1" href="#"><span class="pl-3">Afrikaans</span></a>
                            </li>
                            <li class="d-flex align-items-center"><a href="#" class="dropdown-item m-0 py-1 px-1"><span class="pl-3">Albanian</span></a>
                            </li>
                            <li class="d-flex align-items-center">
                                <a class="dropdown-item m-0 py-1 px-1"><span class="pl-3">Arabic</span></a>
                            </li>
                            <li class="d-flex align-items-center">
                                <a href="#" class="dropdown-item m-0 py-1 px-1"><span class="pl-3">Armenian</span></a>
                            </li>
                            <li class="d-flex align-items-center">
                                <a href="#" class="dropdown-item m-0 py-1 px-1"><span class="pl-3">Basque</span></a>
                            </li>
                            <li class="d-flex align-items-center">
                                <a href="#" class="dropdown-item m-0 py-1 px-1"><span class="pl-3">Bengali</span></a>
                            </li>
                            <li class="d-flex align-items-center">
                                <a href="#" class="dropdown-item m-0 py-1 px-1"><span class="pl-3">Bulgarian</span></a>
                            </li>
                            <li class="d-flex align-items-center">
                                <a href="#" class="dropdown-item m-0 py-1 px-1"><span class="pl-3">Catalan</span></a>
                            </li>
                            <li class="d-flex align-items-center">
                                <a href="#" class="dropdown-item m-0 py-1 px-1"><span class="pl-3">Cambodian</span></a>
                            </li>
                            <li class="d-flex align-items-center">
                                <a href="#" class="dropdown-item m-0 py-1 px-1"><span class="pl-3">Chinese (Mandarin)</span></a>
                            </li>
                            <li class="d-flex align-items-center">
                                <a href="#" class="dropdown-item m-0 py-1 px-1"><span class="pl-3">Croatian</span></a>
                            </li>
                            <li class="d-flex align-items-center">
                                <a href="#" class="dropdown-item m-0 py-1 px-1"><span class="pl-3">Czech</span></a>
                            </li>
                            <li class="d-flex align-items-center">
                                <a href="#" class="dropdown-item m-0 py-1 px-1"><span class="pl-3">Danish</span></a>
                            </li>
                            <li class="d-flex align-items-center">
                                <a href="#" class="dropdown-item m-0 py-1 px-1"><span class="pl-3">Dutch</span></a>
                            </li>
                            <li class="d-flex align-items-center">
                                <a href="#" class="dropdown-item m-0 py-1 px-1"><i class="fas fa-check"></i> <span>English</span></a>
                            </li>
                            <li class="d-flex align-items-center">
                                <a href="#" class="dropdown-item m-0 py-1 px-1"><span class="pl-3">Estonian</span></a>
                            </li>
                            <li class="d-flex align-items-center">
                                <a href="#" class="dropdown-item m-0 py-1 px-1"><span class="pl-3">Fiji</span></a>
                            </li>
                            <li class="d-flex align-items-center">
                                <a href="#" class="dropdown-item m-0 py-1 px-1"><span class="pl-3">Finnish</span></a>
                            </li>
                            <li class="d-flex align-items-center">
                                <a href="#" class="dropdown-item m-0 py-1 px-1"><span class="pl-3">Finnish</span></a>
                            </li>
                            <li class="d-flex align-items-center">
                                <a href="#" class="dropdown-item m-0 py-1 px-1"><span class="pl-3">Georgian</span></a>
                            </li>
                            <li class="d-flex align-items-center">
                                <a href="#" class="dropdown-item m-0 py-1 px-1"><span class="pl-3">German</span></a>
                            </li>
                            <li class="d-flex align-items-center">
                                <a href="#" class="dropdown-item m-0 py-1 px-1"><span class="pl-3">Greek</span></a>
                            </li>
                            <li class="d-flex align-items-center">
                                <a href="#" class="dropdown-item m-0 py-1 px-1"><span class="pl-3">Gujarati</span></a>
                            </li>
                            <li class="d-flex align-items-center">
                                <a href="#" class="dropdown-item m-0 py-1 px-1"><span class="pl-3">Hebrew</span></a>
                            </li>
                            <li class="d-flex align-items-center">
                                <a href="#" class="dropdown-item m-0 py-1 px-1"><span class="pl-3">Hindi</span></a>
                            </li>
                            <li class="d-flex align-items-center">
                                <a href="#" class="dropdown-item m-0 py-1 px-1"><span class="pl-3">Hungarian</span></a>
                            </li>
                            <li class="d-flex align-items-center">
                                <a href="#" class="dropdown-item m-0 py-1 px-1"><span class="pl-3">Icelandic</span></a>
                            </li>
                            <li class="d-flex align-items-center">
                                <a href="#" class="dropdown-item m-0 py-1 px-1"><span class="pl-3">Indonesian</span></a>
                            </li>
                            <li class="d-flex align-items-center">
                                <a href="#" class="dropdown-item m-0 py-1 px-1"><span class="pl-3">Irish</span></a>
                            </li>
                            <li class="d-flex align-items-center">
                                <a href="#" class="dropdown-item m-0 py-1 px-1"><span class="pl-3">Italian</span></a>
                            </li>
                            <li class="d-flex align-items-center">
                                <a href="#" class="dropdown-item m-0 py-1 px-1"><span class="pl-3">Japanese</span></a>
                            </li>
                            <li class="d-flex align-items-center">
                                <a href="#" class="dropdown-item m-0 py-1 px-1"><span class="pl-3">Javanese</span></a>
                            </li>
                            <li class="d-flex align-items-center">
                                <a href="#" class="dropdown-item m-0 py-1 px-1"><span class="pl-3">Korean</span></a>
                            </li>
                            <li class="d-flex align-items-center">
                                <a href="#" class="dropdown-item m-0 py-1 px-1"><span class="pl-3">Latin</span></a>
                            </li>
                            <li class="d-flex align-items-center">
                                <a href="#" class="dropdown-item m-0 py-1 px-1"><span class="pl-3">Latvian</span></a>
                            </li>
                            <li class="d-flex align-items-center">
                                <a href="#" class="dropdown-item m-0 py-1 px-1"><span class="pl-3">Lithuanian</span></a>
                            </li>
                            <li class="d-flex align-items-center">
                                <a href="#" class="dropdown-item m-0 py-1 px-1"><span class="pl-3">Macedonian</span></a>
                            </li>
                            <li class="d-flex align-items-center">
                                <a href="#" class="dropdown-item m-0 py-1 px-1"><span class="pl-3">Malay</span></a>
                            </li>
                            <li class="d-flex align-items-center">
                                <a href="#" class="dropdown-item m-0 py-1 px-1"><span class="pl-3">Malayalam</span></a>
                            </li>
                            <li class="d-flex align-items-center">
                                <a href="#" class="dropdown-item m-0 py-1 px-1"><span class="pl-3">Maltese</span></a>
                            </li>
                            <li class="d-flex align-items-center">
                                <a href="#" class="dropdown-item m-0 py-1 px-1"><span class="pl-3">Maori</span></a>
                            </li>
                            <li class="d-flex align-items-center">
                                <a href="#" class="dropdown-item m-0 py-1 px-1"><span class="pl-3">Marathi</span></a>
                            </li>
                            <li class="d-flex align-items-center">
                                <a href="#" class="dropdown-item m-0 py-1 px-1"><span class="pl-3">Mongolian</span></a>
                            </li>
                            <li class="d-flex align-items-center">
                                <a href="#" class="dropdown-item m-0 py-1 px-1"><span class="pl-3">Nepali</span></a>
                            </li>
                            <li class="d-flex align-items-center">
                                <a href="#" class="dropdown-item m-0 py-1 px-1"><span class="pl-3">Norwegian</span></a>
                            </li>
                            <li class="d-flex align-items-center">
                                <a href="#" class="dropdown-item m-0 py-1 px-1"><span class="pl-3">Persian</span></a>
                            </li>
                            <li class="d-flex align-items-center">
                                <a href="#" class="dropdown-item m-0 py-1 px-1"><span class="pl-3">Polish</span></a>
                            </li>
                            <li class="d-flex align-items-center">
                                <a href="#" class="dropdown-item m-0 py-1 px-1"><span class="pl-3">Punjabi</span></a>
                            </li>
                            <li class="d-flex align-items-center">
                                <a href="#" class="dropdown-item m-0 py-1 px-1"><span class="pl-3">Quechua</span></a>
                            </li>
                            <li class="d-flex align-items-center">
                                <a href="#" class="dropdown-item m-0 py-1 px-1"><span class="pl-3">Romanian</span></a>
                            </li>
                            <li class="d-flex align-items-center">
                                <a href="#" class="dropdown-item m-0 py-1 px-1"><span class="pl-3">Russian</span></a>
                            </li>
                            <li class="d-flex align-items-center">
                                <a href="#" class="dropdown-item m-0 py-1 px-1"><span class="pl-3">Samoan</span></a>
                            </li>
                            <li class="d-flex align-items-center">
                                <a href="#" class="dropdown-item m-0 py-1 px-1"><span class="pl-3">Serbian</span></a>
                            </li>
                            <li class="d-flex align-items-center">
                                <a href="#" class="dropdown-item m-0 py-1 px-1"><span class="pl-3">Slovak</span></a>
                            </li>
                            <li class="d-flex align-items-center">
                                <a href="#" class="dropdown-item m-0 py-1 px-1"><span class="pl-3">Slovenian</span></a>
                            </li>
                            <li class="d-flex align-items-center">
                                <a href="#" class="dropdown-item m-0 py-1 px-1"><span class="pl-3">Spanish</span></a>
                            </li>
                            <li class="d-flex align-items-center">
                                <a href="#" class="dropdown-item m-0 py-1 px-1"><span class="pl-3">Swahili</span></a>
                            </li>
                            <li class="d-flex align-items-center">
                                <a href="#" class="dropdown-item m-0 py-1 px-1"><span class="pl-3">Swedish</span> </a>
                            </li>
                            <li class="d-flex align-items-center">
                                <a href="#" class="dropdown-item m-0 py-1 px-1"><span class="pl-3">Tamil</span></a>
                            </li>
                            <li class="d-flex align-items-center">
                                <a href="#" class="dropdown-item m-0 py-1 px-1"><span class="pl-3">Tatar</span></a>
                            </li>
                            <li class="d-flex align-items-center">
                                <a href="#" class="dropdown-item m-0 py-1 px-1"><span class="pl-3">Telugu</span></a>
                            </li>
                            <li class="d-flex align-items-center">
                                <a href="#" class="dropdown-item m-0 py-1 px-1"><span class="pl-3">Thai</span></a>
                            </li>
                            <li class="d-flex align-items-center">
                                <a href="#" class="dropdown-item m-0 py-1 px-1"><span class="pl-3">Tibetan</span></a>
                            </li>
                            <li class="d-flex align-items-center">
                                <a href="#" class="dropdown-item m-0 py-1 px-1"><span class="pl-3">Tonga</span></a>
                            </li>
                            <li class="d-flex align-items-center">
                                <a href="#" class="dropdown-item m-0 py-1 px-1"><span class="pl-3">Turkish</span></a>
                            </li>
                            <li class="d-flex align-items-center">
                                <a href="#" class="dropdown-item m-0 py-1 px-1"><span class="pl-3">Ukrainian</span></a>
                            </li>
                            <li class="d-flex align-items-center">
                                <a href="#" class="dropdown-item m-0 py-1 px-1"><span class="pl-3">Urdu</span></a>
                            </li>
                            <li class="d-flex align-items-center">
                                <a href="#" class="dropdown-item m-0 py-1 px-1"><span class="pl-3">Uzbek</span></a>
                            </li>
                            <li class="d-flex align-items-center">
                                <a href="#" class="dropdown-item m-0 py-1 px-1"><span class="pl-3">Vietnamese</span></a>
                            </li>
                            <li class="d-flex align-items-center">
                                <a href="#" class="dropdown-item m-0 py-1 px-1"><span class="pl-3">Welsh</span></a>
                            </li>
                            <li class="d-flex align-items-center">
                                <a href="#" class="dropdown-item m-0 py-1 px-1"><span class="pl-3">Xhosa</span></a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle forward-dropdown" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" onclick="forwardDropdown()">
                        <img src="{{asset('public/assets/images/icons/insert-response.png')}}" alt="">
                    </a>
                    <div class="dropdown-menu dropdown-content forward-dropdown-content response-dropdown-content m-0 p-0" id="forwarddropdown" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item m-0 py-1 px-1 font-italic disabled" href="#">Insert a response</a>
                        <a class="dropdown-item m-0 py-1 px-1 disabled" href="#">Manage response</a>
                        <a class="dropdown-item m-0 py-1 px-1" href="#">Create new response</a>
                        <a class="dropdown-item m-0 py-1 px-1" href="#">Edit response</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle action-dropdown" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" onclick="actionDropdown()">
                        <img src="{{asset('public/assets/images/icons/more-action.png')}}" alt="">
                    </a>
                    <div class="dropdown-menu dropdown-content mark-dropdown-content m-0 px-2" id="actionDropdown" aria-labelledby="navbarDropdown" style="width: 270px;">
                        <form action="">
                            <table>
                                <tr>
                                    <td><label for="return">Return receipt: </label></td>
                                    <td><input type="checkbox" name="" id="return"></td>
                                </tr>
                                <tr>
                                    <td><label for="notification">Delivery status notification: </label> </td>
                                    <td><input type="checkbox" name="" id="notification"></td>
                                </tr>
                                <tr>
                                    <td><label for="priority">Priority: </label> </td>
                                    <td>
                                        <select name="" id="priority">
                                            <option value="">Lowest</option>
                                            <option value="">Low</option>
                                            <option value="">Normal</option>
                                            <option value="" selected>Highest</option>
                                            <option value="">High</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td><label for="priority">Save sent message in: </label> </td>
                                    <td>
                                        <select name="" id="priority">
                                            <option value="">- don't save -</option>
                                            <option value="">Inbox</option>
                                            <option value="">Draft</option>
                                            <option value="" selected>Sent</option>
                                            <option value="">Junk</option>
                                            <option value="">Trash</option>
                                        </select>
                                    </td>
                                </tr>
                            </table>
                            <br>

                        </form>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
@endsection
@section('content')
    <div class="row" style="height: 80vh">
        <div class="col-md-2">
            <div class="card mailboxlist-container" style="bottom: 0px; height: 100%">
                <div class="card-header boxtitle">
                    <div class="row">
                        <div class="col-3">
                            Contacts
                        </div>
                        <div class="col-9 text-right">
                            <a href=""><img src="{{asset('assets/images/icons/step-backforward.png')}}" alt="" class="p-1 img-disabled"></a>
                            <a href=""><img src="{{asset('assets/images/icons/caret-left.png')}}" alt="" class="p-1 img-disabled"></a>
                            <a href=""><img src="{{asset('assets/images/icons/caret-right.png')}}" alt="" class="p-1 img-disabled"></a>
                            <a href=""><img src="{{asset('assets/images/icons/step-forward.png')}}" alt="" class="p-1 img-disabled"></a>
                        </div>
                    </div>
                </div>
                <div class="card-body p-0">
                    <ul class="list-unstyled m-0 p-0">
                        <li class="border-bottom">

                            <form action="">
                                <div class="input-group m-1 p-0 search-box rounded-pill">
                                    <div class="input-group-prepend search-box">
                                        <span class="input-group-text input-group-icon border-right-0" id="basic-addon1"><i class="fas fa-search"></i></span>
                                    </div>
                                    <input type="text" class="form-control form-control-sm border-left-0 search-input" placeholder="Search..." >
                                </div>
                            </form>
                        </li>
                        <li>
                            <a href="" class="text-decoration-none px-1 border-bottom d-block"><i class="fas fa-address-book"></i> Personal Addresses</a>
                        </li>
                    </ul>
                </div>
                <div class="card-footer p-0">
                    <a href="" class="text-decoration-none d-inline-block p-1 font-weight-bold" style="border-right: 1px solid gray">To >></a>
                    <a href="" class="text-decoration-none d-inline-block p-1 font-weight-bold" style="border-right: 1px solid gray">Cc >></a>
                    <a href="" class="text-decoration-none d-inline-block p-1 font-weight-bold" style="border-right: 1px solid gray">Bcc >></a>
                </div>
            </div>
        </div>
        <div class="col-md-10">
            <form action="">
                <table class="w-100">
                    <tr>
                        <td class="w-10 font-bold header-title">From</td>
                        <td>
                            <select name="" id="from">
                                <option value="">tellpe@tellpe.com</option>
                            </select>
                            <span ><a href="" class="text-danger text-decoration-none">Edit identities</a></span>
                        </td>
                    </tr>
                    <tr>
                        <td class="w-10 font-bold header-title">To</td>
                        <td>
                            <textarea name="" id="" rows="1" class="w-100"></textarea>
                            <span class="text-danger cursor-pointer">Add Cc</span> | <span class="text-danger cursor-pointer">Add Bcc</span> | <span class="text-danger cursor-pointer">Add Replay-To</span> | <span class="text-danger cursor-pointer">Add Followup-To</span>
                        </td>
                    </tr>
                    <tr>
                        <td style="w-10 font-bold header-title">Subject</td>
                        <td><input type="text" class="w-100"></td>
                    </tr>
                </table>

                <div class="row mt-1" style="height:100%">
                    <div class="col-md-10">
                        <div class="card" style="height: 65vh">
                            <textarea name="" id="" cols="30" rows="10" class="w-100 border-0 message-box" style="">

--
BFIN GROUP PLC.

Reg. n° 12070052

England & Wales

(HEAD OFFICE FINANCIAL MANAGEMENT)
                            </textarea>
                            <div class="card-footer d-flex justify-content-between">
                                <div>
                                    <input type="submit" class="font-weight-bold py-0 px-1" value="Send message">
                                    <input type="reset" value="Cancel">
                                </div>
                                <div>
                                    <span class="text-secondary">Editor type:</span>
                                    <select name="" id="">
                                        <option value="">Plain text</option>
                                        <option value="">HTML</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="card mailboxlist-container" style="bottom: 0px; height: 100%">
                            <div class="card-header boxtitle">
                                Attachments
                            </div>
                            <div class="card-body"></div>
                            <div class="card-footer p-0">
                                <label for="upload-photo" class="custom-label py-1 px-2"><i class="fas fa-plus"></i></label>
                                <input type="file" class="w-75" name="photo" id="upload-photo" />
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

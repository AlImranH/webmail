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
                    <a href="" class="text-decoration-none px-1 border-bottom d-block"><img src="{{asset('assets/images/icons/send.png')}}" alt=""> Sent</a>
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

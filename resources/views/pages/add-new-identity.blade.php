@extends('layouts.dashboard')
@section('title', 'Add new identites')
@section('navbar')
    <div class="w-100">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="preferences-tab" data-toggle="tab" href="#preferences" role="tab" aria-controls="preferences" aria-selected="true">Preferences</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="folders-tab" data-toggle="tab" href="#folders" role="tab" aria-controls="folders" aria-selected="false">Folders</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link active" id="identities-tab" data-toggle="tab" href="#identities" role="tab" aria-controls="identities" aria-selected="false">Identities</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="responses-tab" data-toggle="tab" href="#responses" role="tab" aria-controls="responses" aria-selected="false">Responses</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="about-tab" data-toggle="tab" href="#about" role="tab" aria-controls="about" aria-selected="false">About</a>
            </li>
        </ul>
    </div>
@endsection
@section('content')
    <div class="tab-content w-100" id="myTabContent">
        <div class="tab-pane fade show" id="preferences" role="tabpanel" aria-labelledby="preferences-tab">
            Preference
        </div>
        <div class="tab-pane fade show" id="folders" role="tabpanel" aria-labelledby="folders-tab">
            Folders
        </div>
        <div class="tab-pane fade show active" id="identities" role="tabpanel" aria-labelledby="identities-tab">
            <div class="row mt-2" style="height: 80vh">
                <div class="col-md-3">
                    <div class="card mailboxlist-container" style="bottom: 0px; height: 100%">
                        <div class="card-header boxtitle">Identities</div>
                        <div class="card-body p-0">
                            <ul class="list-unstyled m-0 p-0">
                                <li>
                                    <a href="" class="text-decoration-none px-1 border-bottom d-block"> < tellpe@tellpe.com ></a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-footer p-0">
                            <a href="" class="py-1 px-2 d-inline-block border-right border-dark" title="Create new identity">
                                <i class="fas fa-plus"></i>
                            </a>
                            <a href="" class="py-1 px-2 d-inline-block border-right border-secondary text-secondary" title="Delete">
                                <i class="fas fa-ban"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="card mailboxlist-container">
                        <div class="card-header boxtitle">Add identity</div>
                        <div class="card-body">
                            <ul class="nav nav-tabs border-dark" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link py-0 px-1 border-dark border-bottom-0 rounded-0 active" id="settings-tab" data-toggle="tab" href="#settings" role="tab" aria-controls="settings" aria-selected="true">Settings</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link py-0 px-1 border-dark border-bottom-0 rounded-0" id="signature-tab" data-toggle="tab" href="#signature" role="tab" aria-controls="signature" aria-selected="false">Signature</a>
                                </li>
                            </ul>
                            <form action="">
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active border border-top-0 border-dark p-2" id="settings" role="tabpanel" aria-labelledby="settings-tab">
                                        <table class="w-100">
                                            <tr>
                                                <td class="font-bold header-title text-right w-10 py-1 px-2"><label for="display_name" class="p-0 m-0">Display Name</label></td>
                                                <td>
                                                    <input type="text" class="w-25" id="display_name">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="font-bold header-title text-right w-10 py-1 px-2"><label for="email" class="p-0 m-0">Email</label></td>
                                                <td>
                                                    <input type="email" class="w-25" id="email">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="font-bold header-title text-right w-10 py-1 px-2"><label for="organization" class="p-0 m-0">Organization</label></td>
                                                <td>
                                                    <input type="text" class="w-25" id="organization">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="font-bold header-title text-right w-10 py-1 px-2"><label for="reply-to" class="p-0 m-0">Reply-To</label></td>
                                                <td>
                                                    <input type="text" class="w-25" id="reply-to">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="font-bold header-title text-right w-10 py-1 px-2"><label for="bcc" class="p-0 m-0">Bcc</label></td>
                                                <td>
                                                    <input type="text" class="w-25" id="bcc">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="font-bold header-title text-right w-10 py-1 px-2"><label for="set-default" class="p-0 m-0">Set default</label></td>
                                                <td>
                                                    <input type="checkbox" id="set-default">
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="tab-pane fade show border border-top-0 border-dark p-2" id="signature" role="tabpanel" aria-labelledby="signature-tab">
                                        <table class="w-100">
                                            <tr>
                                                <td class="font-bold header-title text-right w-10 py-1 px-2"><label for="signature" class="p-0 m-0">Signature</label></td>
                                                <td>
                                                <textarea name="" id="signature" class="w-100 overflow-auto hei" rows="4"></textarea>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="font-bold header-title text-right w-10 py-1 px-2"><label for="html-signature" class="p-0 m-0">HTML signature</label></td>
                                                <td>
                                                    <input type="checkbox" id="html-signature">
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <input type="submit" class="px-2 mt-3 font-weight-bold" value="Save">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade show" id="responses" role="tabpanel" aria-labelledby="responses-tab">
            responses
        </div>
        <div class="tab-pane fade show" id="about" role="tabpanel" aria-labelledby="about-tab">
            about
        </div>
    </div>
@endsection

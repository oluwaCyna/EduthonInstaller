@extends('vendor.installer.layouts.master')

@section('sidenav1')
<div class="sidenav1">
    <div class="innerdiv2">
        <img src="{{ asset('installer/assets/logowhitelogo.png') }}" alt="" class="mainlogo">
        <p class="sidenavtext2">Installer</p>

        <p class="listedoptions"><i class='bx bx-check active'></i> Welcome</p>
        <p class="listedoptions"><i class='bx bx-check listicon'></i> Software License Agreement</p>
        <p class="listedoptions"><i class='bx bx-check listicon'></i> Verify Purchase Code</p>
        <p class="listedoptions"><i class='bx bx-check listicon'></i> Server Requirement</p>
        <p class="listedoptions"><i class='bx bx-check listicon'></i> Permissions</p>            
        <p class="listedoptions"><i class='bx bx-check listicon'></i> Pre-Data</p>
        <p class="listedoptions"><i class='bx bx-check listicon'></i> Configuration</p>
        <p class="listedoptions"><i class='bx bx-check listicon'></i> Installation Complete</p>

        <p class="listedoptions2"><i class='bx bx-question-mark listicon2'></i> Support</p>
    </div>            
</div>
@endsection

@section('sectionagree')
<div class="sectionagree">
    <img src="{{ asset('installer/assets/vector4.png') }}" alt="" class="image11">
    <img src="{{ asset('installer/assets/vector2.png') }}" alt="" class="image22">
    <img src="{{ asset('installer/assets/vector6.png') }}" alt="" class="image33">

    <div class="mainagree shadow rounded col-lg-10">
        <p class="agreehead">License Agreement</p>
        <hr class="agreehr">

        <p class="agreep1">The Regular License grants you, the purchaser, an ongoing, non-exclusive, worldwide license to make use of the digital work (Item) you have selected.</p>
        <p class="agreep1">You are licensed to use the item to create one single End Product for yourself or for one client (a "single application"), and the End Product can be distributed for Free.</p>
        <p class="agreep1">You can create one End Product for a client, and you can transfer that single End Product to your client for any fee. This license is then transferred to your client.</p>
        <p class="agreep1">You can't Sell the End Product, except to one client.</p>
        <p class="agreep1">You can't re-distribute the Item as stock, in a tool or template, or with source files. You can't do this with an Item either on its own or bundled with other items, and even if you modify the Item. You can't re-distribute or make available the Item as-is or with superficial modifications. These things are not allowed even if the re-distribution is for Free.</p>
        <p class="agreep1">Although you can modify the Item and therefore delete unwanted components before creating your single End Product, you can't extract and use a single component of an item on a stand-alone basis.</p>
        <p class="agreep1">His license can be terminated if you breach it. If that happens, you must stop making copies of or distributing the End Product until you remove the item from it.</p>
        <p class="agreep1">The author of the Item retains ownership of the Item but grants you the license on these terms. This license is between the author of the Item and you. Envato Pty Ltd is not a party to this license or the one giving you the license.</p>
        <p class="agreep1">Read The Full License Here - <a href="https//delwathon.com/licenses/standard" class="innerlink">https//delwathon.com/licenses/standard</a></p>

        <p class="space"></p>
        <p class="agreehead">About</p>
        <hr class="agreehr">
        <p class="agreep2">Application Name: <b>Eduthon</b></p>
        <p class="agreep2">Version: <b>v 1.0</b></p>
        <p class="agreep2">Release Date: <b>28th May, 2023</b></p>
        <p class="agreep2">By: <b>Delwathon IT Solutions</b></p>
        <hr class="agreehr">
    </div>

    <div class="sec1btns col-lg-10">
        <a href="{{ route('LaravelInstaller::welcome') }}" class="sec1btn">Previous</a>
        <a href="{{ route('LaravelInstaller::purchase') }}" class="sec1btn2">Next <i class='bx bx-right-arrow-alt' id="icon1"></i></a>
    </div>
</div>
@endsection

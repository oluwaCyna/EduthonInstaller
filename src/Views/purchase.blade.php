@extends('vendor.installer.layouts.master')

@section('sidenav1')
    <div class="sidenav1">
        <div class="innerdiv2">
            <img src="{{ asset('assets/logowhitelogo.png') }}" alt="" class="mainlogo">
            <p class="sidenavtext2">Installer</p>

            <p class="listedoptions"><i class='bx bx-check active'></i> Install</p>
            <p class="listedoptions"><i class='bx bx-check active'></i> Software License Agreement</p>
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

@section('section2')

    <div class="section2">
        <img src="{{ asset('assets/vector4.png') }}" alt="" class="image11">
        <img src="{{ asset('assets/vector2.png') }}" alt="" class="image22">
        <img src="{{ asset('assets/vector6.png') }}" alt="" class="image33">
        <h4 class="sec2h4">Verify Secret Key and Purchase Code</h4>
        <hr class="sec2hr">

        @if (session()->has('errors'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                <h4>
                    <i class="fa fa-fw fa-exclamation-triangle" aria-hidden="true"></i>
                    {{ trans('installer_messages.forms.errorTitle') }}
                </h4>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="post" action="{{ route('LaravelInstaller::verifyPurchase') }}" class="tabs-wrap">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <!-- 1111 -->
            <div class="form-group {{ $errors->has('secret_key') ? ' has-error ' : '' }}">
                <div class="sec2div1">
                    <label for="secret_key" class="sec2label1">
                        {{ trans('installer_messages.purchase.form.secret_key_label') }}
                    </label>
                    <div class="sec2inner">
                        <i class='bx bxs-lock in1icon'></i>
                        <input type="text" name="secret_key" id="secret_key" value="{{ old('secret_key') }}"
                            class="sec2in1"
                            placeholder="{{ trans('installer_messages.purchase.form.secret_key_placeholder') }}">
                    </div>
                    @if ($errors->has('secret_key'))
                        <span class="error-block">
                            <i class="bx bxs-error" aria-hidden="true"></i>
                            {{ $errors->first('secret_key') }}
                        </span>
                    @endif
                </div>
            </div>

            <!-- 2222 -->
            <div class="form-group {{ $errors->has('purchase_code') ? ' has-error ' : '' }}">
                <div class="sec2div1">
                    <label for="purchase_code" class="sec2label1">
                        {{ trans('installer_messages.purchase.form.purchase_code_label') }}
                    </label>
                    <div class="sec2inner">
                        <i class='bx bxs-lock in1icon'></i>
                        <input type="text" name="purchase_code" id="purchase_code" value="{{ old('purchase_code') }}"
                            class="sec2in1"
                            placeholder="{{ trans('installer_messages.purchase.form.purchase_code_placeholder') }}">
                    </div>
                    @if ($errors->has('purchase_code'))
                        <span class="error-block">
                            <i class="bx bxs-error" aria-hidden="true"></i>
                            {{ $errors->first('purchase_code') }}
                        </span>
                    @endif
                </div>
            </div>
            
            <!-- 333 -->
            <div class="sec2btns">
                <a href="{{ route('LaravelInstaller::license') }}" class="sec1btn">Previous</a>
                <button type="submit" class="sec1btn2">
                    {{ trans('installer_messages.purchase.form.buttons.install') }}
                    <i class='bx bx-right-arrow-alt' id="icon1"></i>
                </button>
            </div>
    </div>

@endsection


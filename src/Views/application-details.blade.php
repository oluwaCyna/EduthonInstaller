@extends('vendor.installer.layouts.master')

@section('sidenav1')
    <div class="sidenav1">
        <div class="innerdiv2">
            <img src="{{ asset('assets/logowhitelogo.png') }}" alt="" class="mainlogo">
            <p class="sidenavtext2">Installer</p>

            <p class="listedoptions"><i class='bx bx-check active'></i> Install</p>
            <p class="listedoptions"><i class='bx bx-check active'></i> Software License Agreement</p>
            <p class="listedoptions"><i class='bx bx-check active'></i> Verify Purchase Code</p>
            <p class="listedoptions"><i class='bx bx-check active'></i> Server Requirement</p>
            <p class="listedoptions"><i class='bx bx-check active'></i> Permissions</p>
            <p class="listedoptions"><i class='bx bx-check listicon'></i> Pre-Data</p>
            <p class="listedoptions"><i class='bx bx-check listicon'></i> Configuration</p>
            <p class="listedoptions"><i class='bx bx-check listicon'></i> Installation Complete</p>

            <p class="listedoptions2"><i class='bx bx-question-mark listicon2'></i> Support</p>
        </div>
    </div>
@endsection

@section('section8')
    <div class="section8">
        <div class="col-lg-8">
            <img src="{{ asset('assets/vector4.png') }}" alt="" class="image11">
            <img src="{{ asset('assets/vector2.png') }}" alt="" class="image22">
            <img src="{{ asset('assets/vector6.png') }}" alt="" class="image33">
            <h4 class="sec8h4">Pre-Data</h4>
            <hr class="sec2hr">
            <!-- <p class="sec8p1">Please fill in your school information details</p> -->
            <div class="shorttab">
                <div class="activetab" id="login">
                    <i class='bx bx-log-in'></i>
                    <p class="tablabel1">{{ trans('installer_messages.application_details.menu.tabs.login') }}</p>
                </div>
                <div id="info">
                    <i class='bx bx-infinite'></i>
                    <p class="tablabel1">{{ trans('installer_messages.application_details.menu.tabs.school_info') }}</p>
                </div>
                <div id="owner">
                    <i class='bx bxs-user'></i>
                    <p class="tablabel1">{{ trans('installer_messages.application_details.menu.tabs.school_owner') }}</p>
                </div>
            </div>
            <hr class="sec2hr">
        </div>
        <form method="post" action="{{ route('LaravelInstaller::applicationDetailsSave') }}" class="tabs-wrap">

            <div class="login">
                <div class="container">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="row">
                        <div class="sec8div1 col-12 col-sm-12 col-lg-8">
                            <div class="form-group {{ $errors->has('app_url') ? ' has-error ' : '' }}">
                                <label class="sec8label1" for="app_url">
                                    {{ trans('installer_messages.application_details.menu.form.app_url_label') }}
                                </label>
                                <input type="text" name="app_url" class="sec8in1" id="app_url"
                                    value="{{ old('app_url') }}"
                                    placeholder="{{ trans('installer_messages.application_details.menu.form.app_url_placeholder') }}" />
                                @if ($errors->has('app_url'))
                                    <span class="error-block">
                                        <i class="bx bxs-error" aria-hidden="true"></i>
                                        {{ $errors->first('app_url') }}
                                    </span>
                                @endif
                            </div>
                        </div>

                    </div>


                    <div class="row">
                        <div class="sec8div1 col-12 col-sm-12 col-lg-4">
                            <div class="form-group {{ $errors->has('app_email') ? ' has-error ' : '' }}">
                                <label class="sec8label1" for="app_email">
                                    {{ trans('installer_messages.application_details.menu.form.app_email_label') }}
                                </label>
                                <input type="text" name="app_email" class="sec8in1" id="app_email"
                                    value="{{ old('app_email') }}"
                                    placeholder="{{ trans('installer_messages.application_details.menu.form.app_email_placeholder') }}" />
                                @if ($errors->has('app_email'))
                                    <span class="error-block">
                                        <i class="bx bxs-error" aria-hidden="true"></i>
                                        {{ $errors->first('app_email') }}
                                    </span>
                                @endif
                            </div>

                        </div>
                        <div class="sec8div1 col-12 col-sm-12 col-lg-4">
                            <div class="form-group {{ $errors->has('app_password') ? ' has-error ' : '' }}">
                                <label class="sec8label1" for="app_password">
                                    {{ trans('installer_messages.application_details.menu.form.app_password_label') }}
                                </label>
                                <input type="text" name="app_password" class="sec8in1" id="app_password"
                                    value="{{ old('app_password') }}"
                                    placeholder="{{ trans('installer_messages.application_details.menu.form.app_password_placeholder') }}" />
                                @if ($errors->has('app_password'))
                                    <span class="error-block">
                                        <i class="bx bxs-error" aria-hidden="true"></i>
                                        {{ $errors->first('app_password') }}
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>



                <div class="sec2btns col-lg-8" style="margin-top: 30px;">
                    <a href="{{ route('LaravelInstaller::permissions') }}" class="sec1btn">Previous</a>
                    <a id="next11" class="sec1btn2">Setup School Information <i class='bx bx-right-arrow-alt'
                            id="icon1"></i></a>
                </div>
            </div>

            <!-- info -->
            <div class="info">
                <div class="container">
                    <div class="row">
                        <div class="sec8div1 col-12 col-sm-12 col-lg-4">
                            <div class="form-group {{ $errors->has('school_name') ? ' has-error ' : '' }}">
                                <label class="sec8label1" for="school_name">
                                    {{ trans('installer_messages.application_details.menu.form.school_name_label') }}
                                </label>
                                <input type="text" name="school_name" class="sec8in1" id="school_name"
                                    value="{{ old('school_name') }}"
                                    placeholder="{{ trans('installer_messages.application_details.menu.form.school_name_placeholder') }}" />
                                @if ($errors->has('school_name'))
                                    <span class="error-block">
                                        <i class="bx bxs-error" aria-hidden="true"></i>
                                        {{ $errors->first('school_name') }}
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="sec8div1 col-12 col-sm-12 col-lg-4">
                            <div class="form-group {{ $errors->has('site_title') ? ' has-error ' : '' }}">
                                <label class="sec8label1" for="site_title">
                                    {{ trans('installer_messages.application_details.menu.form.site_title_label') }}
                                </label>
                                <input type="text" name="site_title" class="sec8in1" id="site_title"
                                    value="{{ old('site_title') }}"
                                    placeholder="{{ trans('installer_messages.application_details.menu.form.site_title_placeholder') }}" />
                                @if ($errors->has('site_title'))
                                    <span class="error-block">
                                        <i class="bx bxs-error" aria-hidden="true"></i>
                                        {{ $errors->first('site_title') }}
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <!-- special -->
                        <div class="sec8div1 col-8">
                            <div class="form-group {{ $errors->has('site_desc') ? ' has-error ' : '' }}">
                                <label class="sec8label1" for="site_desc">
                                    {{ trans('installer_messages.application_details.menu.form.site_desc_label') }}
                                </label>
                                <textarea name="site_desc" id="site_desc" class="sec8in1" value="{{ old('site_desc') }}" rows="2"
                                    placeholder="{{ trans('installer_messages.application_details.menu.form.site_desc_placeholder') }} "></textarea>
                                @if ($errors->has('site_desc'))
                                    <span class="error-block">
                                        <i class="bx bxs-error" aria-hidden="true"></i>
                                        {{ $errors->first('site_desc') }}
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="sec8div1 col-8">
                            <div class="form-group {{ $errors->has('site_keyword') ? ' has-error ' : '' }}">
                                <label class="sec8label1" for="site_keyword">
                                    {{ trans('installer_messages.application_details.menu.form.site_keyword_label') }}
                                </label>
                                <input type="text" name="site_keyword" class="sec8in1" id="site_keyword"
                                    value="{{ old('site_keyword') }}"
                                    placeholder="{{ trans('installer_messages.application_details.menu.form.site_keyword_placeholder') }}" />
                                @if ($errors->has('site_keyword'))
                                    <span class="error-block">
                                        <i class="bx bxs-error" aria-hidden="true"></i>
                                        {{ $errors->first('site_keyword') }}
                                    </span>
                                @endif
                            </div>
                        </div>
                        <!--end  -->
                    </div>
                    <div class="row">
                        <div class="sec8div1 col-12 col-sm-12 col-lg-4">
                            <div class="form-group {{ $errors->has('support_email') ? ' has-error ' : '' }}">
                                <label class="sec8label1" for="support_email">
                                    {{ trans('installer_messages.application_details.menu.form.support_email_label') }}
                                </label>
                                <input type="text" name="support_email" class="sec8in1" id="support_email"
                                    value="{{ old('support_email') }}"
                                    placeholder="{{ trans('installer_messages.application_details.menu.form.support_email_placeholder') }}" />
                                @if ($errors->has('support_email'))
                                    <span class="error-block">
                                        <i class="bx bxs-error" aria-hidden="true"></i>
                                        {{ $errors->first('support_email') }}
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="sec8div1 col-12 col-sm-12 col-lg-4">
                            <div class="form-group {{ $errors->has('support_phone') ? ' has-error ' : '' }}">
                                <label class="sec8label1" for="support_phone">
                                    {{ trans('installer_messages.application_details.menu.form.support_phone_label') }}
                                </label>
                                <input type="text" name="support_phone" class="sec8in1" id="support_phone"
                                    value="{{ old('support_phone') }}"
                                    placeholder="{{ trans('installer_messages.application_details.menu.form.support_phone_placeholder') }}" />
                                @if ($errors->has('support_phone'))
                                    <span class="error-block">
                                        <i class="bx bxs-error" aria-hidden="true"></i>
                                        {{ $errors->first('support_phone') }}
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="sec8div1 col-12 col-sm-12 col-lg-4">
                            <div class="form-group {{ $errors->has('session') ? ' has-error ' : '' }}">
                                <label class="sec8label1" for="session">
                                    {{ trans('installer_messages.application_details.menu.form.session_label') }}
                                </label>
                                <input type="text" name="session" class="sec8in1" id="session"
                                    value="{{ old('session') }}"
                                    placeholder="{{ trans('installer_messages.application_details.menu.form.session_placeholder') }}" />
                                @if ($errors->has('session'))
                                    <span class="error-block">
                                        <i class="bx bxs-error" aria-hidden="true"></i>
                                        {{ $errors->first('session') }}
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="sec8div1 col-12 col-sm-12 col-lg-4">
                            <div class="form-group {{ $errors->has('currency') ? ' has-error ' : '' }}">
                                <label class="sec8label1" for="currency">
                                    {{ trans('installer_messages.application_details.menu.form.currency_label') }}
                                </label>
                                <select name="currency" class="sec8in1" id="currency">
                                    <option selected disabled>
                                        {{ trans('installer_messages.application_details.menu.form.currency_label_none') }}
                                    </option>
                                    <option value="1">
                                        {{ trans('installer_messages.application_details.menu.form.currency_label_naira') }}
                                    </option>
                                    <option value="2">
                                        {{ trans('installer_messages.application_details.menu.form.currency_label_usd') }}
                                    </option>
                                    <option value="3">
                                        {{ trans('installer_messages.application_details.menu.form.currency_label_euro') }}
                                    </option>
                                    <option value="4">
                                        {{ trans('installer_messages.application_details.menu.form.currency_label_pounds') }}
                                    </option>
                                </select>
                                @if ($errors->has('currency'))
                                    <span class="error-block">
                                        <i class="bx bxs-error" aria-hidden="true"></i>
                                        {{ $errors->first('currency') }}
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                <div class="sec2btns col-lg-8" style="margin-top: 30px;">
                    <a id="back1" class="sec1btn">Previous</a>
                    <a id="next22"
                        class="sec1btn2">{{ trans('installer_messages.application_details.menu.form.buttons.setup_owner_details') }}
                        <i class='bx bx-right-arrow-alt' id="icon1"></i></a>
                </div>
            </div>

            <!-- owner -->
            <div class="owner">
                <div class="container">
                    <div class="row">
                        <div class="sec8div1 col-12 col-sm-12 col-lg-4">
                            <div class="form-group {{ $errors->has('owner_fname') ? ' has-error ' : '' }}">
                                <label class="sec8label1" for="owner_fname">
                                    {{ trans('installer_messages.application_details.menu.form.owner_fname_label') }}
                                </label>
                                <input type="text" name="owner_fname" class="sec8in1" id="owner_fname"
                                    value="{{ old('owner_fname') }}"
                                    placeholder="{{ trans('installer_messages.application_details.menu.form.owner_fname_placeholder') }}" />
                                @if ($errors->has('owner_fname'))
                                    <span class="error-block">
                                        <i class="bx bxs-error" aria-hidden="true"></i>
                                        {{ $errors->first('owner_fname') }}
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="sec8div1 col-12 col-sm-12 col-lg-4">
                            <div class="form-group {{ $errors->has('owner_lname') ? ' has-error ' : '' }}">
                                <label class="sec8label1" for="owner_lname">
                                    {{ trans('installer_messages.application_details.menu.form.owner_lname_label') }}
                                </label>
                                <input type="text" name="owner_lname" class="sec8in1" id="owner_lname"
                                    value="{{ old('owner_lname') }}"
                                    placeholder="{{ trans('installer_messages.application_details.menu.form.owner_lname_placeholder') }}" />
                                @if ($errors->has('owner_lname'))
                                    <span class="error-block">
                                        <i class="bx bxs-error" aria-hidden="true"></i>
                                        {{ $errors->first('owner_lname') }}
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="sec8div1 col-12 col-sm-12 col-lg-4">
                            <div class="form-group {{ $errors->has('owner_gender') ? ' has-error ' : '' }}">
                                <label class="sec8label1" for="owner_gender">
                                    {{ trans('installer_messages.application_details.menu.form.owner_gender_label') }}
                                </label>
                                <select name="owner_gender" class="sec8in1" id="owner_gender">
                                    <option selected disabled>
                                        {{ trans('installer_messages.application_details.menu.form.owner_gender_label_none') }}
                                    </option>
                                    <option value="Male">
                                        {{ trans('installer_messages.application_details.menu.form.owner_gender_label_male') }}
                                    </option>
                                    <option value="Female">
                                        {{ trans('installer_messages.application_details.menu.form.owner_gender_label_female') }}
                                    </option>
                                </select>
                                @if ($errors->has('owner_gender'))
                                    <span class="error-block">
                                        <i class="bx bxs-error" aria-hidden="true"></i>
                                        {{ $errors->first('owner_gender') }}
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="sec8div1 col-12 col-sm-12 col-lg-4">
                            <div class="form-group {{ $errors->has('owner_phone') ? ' has-error ' : '' }}">
                                <label class="sec8label1" for="owner_phone">
                                    {{ trans('installer_messages.application_details.menu.form.owner_phone_label') }}
                                </label>
                                <input type="text" name="owner_phone" class="sec8in1" id="owner_phone"
                                    value="{{ old('owner_phone') }}"
                                    placeholder="{{ trans('installer_messages.application_details.menu.form.owner_phone_placeholder') }}" />
                                @if ($errors->has('owner_phone'))
                                    <span class="error-block">
                                        <i class="bx bxs-error" aria-hidden="true"></i>
                                        {{ $errors->first('owner_phone') }}
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                <div class="sec2btns col-lg-8" style="margin-top: 30px;">
                    <a id="back2" class="sec1btn">Previous</a>
                    <button type="submit"
                        class="sec1btn2">{{ trans('installer_messages.application_details.menu.form.buttons.save') }}
                        <i class='bx bx-right-arrow-alt' id="icon1"></i></button>
                </div>
            </div>
        </form>
    </div>
@endsection


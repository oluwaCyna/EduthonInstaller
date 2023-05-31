@extends('vendor.installer.layouts.master')

@section('template_title')
    {{ trans('installer_messages.application_details.menu.templateTitle') }}
@endsection

@section('title')
    <i class="fa fa-magic fa-fw" aria-hidden="true"></i>
    {!! trans('installer_messages.application_details.menu.title') !!}
@endsection

@section('container')
    <div class="tabs tabs-full">

        <input id="tab1" type="radio" name="tabs" class="tab-input" checked />
        <label for="tab1" class="tab-label">
            <i class="fa fa-cog fa-2x fa-fw" aria-hidden="true"></i>
            <br />
            {{ trans('installer_messages.application_details.menu.tabs.login') }}
        </label>

        <input id="tab2" type="radio" name="tabs" class="tab-input" />
        <label for="tab2" class="tab-label">
            <i class="fa fa-database fa-2x fa-fw" aria-hidden="true"></i>
            <br />
            {{ trans('installer_messages.application_details.menu.tabs.school_info') }}
        </label>

        <input id="tab3" type="radio" name="tabs" class="tab-input" />
        <label for="tab3" class="tab-label">
            <i class="fa fa-cogs fa-2x fa-fw" aria-hidden="true"></i>
            <br />
            {{ trans('installer_messages.application_details.menu.tabs.school_owner') }}
        </label>

        <form method="post" action="{{ route('LaravelInstaller::applicationDetailsSave') }}" class="tabs-wrap">
            <div class="tab" id="tab1content">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group {{ $errors->has('app_url') ? ' has-error ' : '' }}">
                    <label for="app_url">
                        {{ trans('installer_messages.application_details.menu.form.app_url_label') }}
                    </label>
                    <input type="url" name="app_url" id="app_url" value="" placeholder="{{ trans('installer_messages.application_details.menu.form.app_url_placeholder') }}" />
                    @if ($errors->has('app_url'))
                        <span class="error-block">
                            <i class="fa fa-fw fa-exclamation-triangle" aria-hidden="true"></i>
                            {{ $errors->first('app_url') }}
                        </span>
                    @endif
                </div>

                <div class="form-group {{ $errors->has('app_email') ? ' has-error ' : '' }}">
                    <label for="app_email">
                        {{ trans('installer_messages.application_details.menu.form.app_email_label') }}
                    </label>
                    <input type="text" name="app_email" id="app_email" value="" placeholder="{{ trans('installer_messages.application_details.menu.form.app_email_placeholder') }}" />
                    @if ($errors->has('app_email'))
                        <span class="error-block">
                            <i class="fa fa-fw fa-exclamation-triangle" aria-hidden="true"></i>
                            {{ $errors->first('app_email') }}
                        </span>
                    @endif
                </div>

                <div class="form-group {{ $errors->has('app_password') ? ' has-error ' : '' }}">
                    <label for="app_password">
                        {{ trans('installer_messages.application_details.menu.form.app_password_label') }}
                    </label>
                    <input type="password" name="app_password" id="app_password" value="" placeholder="{{ trans('installer_messages.application_details.menu.form.app_password_placeholder') }}" />
                    @if ($errors->has('app_password'))
                        <span class="error-block">
                            <i class="fa fa-fw fa-exclamation-triangle" aria-hidden="true"></i>
                            {{ $errors->first('app_password') }}
                        </span>
                    @endif
                </div>

                <div class="buttons">
                    <button class="button" onclick="showDatabaseSettings();return false">
                        {{ trans('installer_messages.application_details.menu.form.buttons.setup_school_info') }}
                        <i class="fa fa-angle-right fa-fw" aria-hidden="true"></i>
                    </button>
                </div>
            </div>
            <div class="tab" id="tab2content">

                <div class="form-group {{ $errors->has('school_name') ? ' has-error ' : '' }}">
                    <label for="school_name">
                        {{ trans('installer_messages.application_details.menu.form.school_name_label') }}
                    </label>
                    <input type="text" name="school_name" id="school_name" value="" placeholder="{{ trans('installer_messages.application_details.menu.form.school_name_placeholder') }}" />
                    @if ($errors->has('school_name'))
                        <span class="error-block">
                            <i class="fa fa-fw fa-exclamation-triangle" aria-hidden="true"></i>
                            {{ $errors->first('school_name') }}
                        </span>
                    @endif
                </div>

                <div class="form-group {{ $errors->has('site_title') ? ' has-error ' : '' }}">
                    <label for="site_title">
                        {{ trans('installer_messages.application_details.menu.form.site_title_label') }}
                    </label>
                    <input type="text" name="site_title" id="site_title" value="" placeholder="{{ trans('installer_messages.application_details.menu.form.site_title_placeholder') }}" />
                    @if ($errors->has('site_title'))
                        <span class="error-block">
                            <i class="fa fa-fw fa-exclamation-triangle" aria-hidden="true"></i>
                            {{ $errors->first('site_title') }}
                        </span>
                    @endif
                </div>

                <div class="form-group {{ $errors->has('site_desc') ? ' has-error ' : '' }}">
                    <label for="site_desc">
                        {{ trans('installer_messages.application_details.menu.form.site_desc_label') }}
                    </label>
                    <textarea name="site_desc" id="site_desc" value="" rows="2" >{{ trans('installer_messages.application_details.menu.form.site_desc_placeholder') }} </textarea>
                    @if ($errors->has('site_desc'))
                        <span class="error-block">
                            <i class="fa fa-fw fa-exclamation-triangle" aria-hidden="true"></i>
                            {{ $errors->first('site_desc') }}
                        </span>
                    @endif
                </div>

                <div class="form-group {{ $errors->has('site_keyword') ? ' has-error ' : '' }}">
                    <label for="site_keyword">
                        {{ trans('installer_messages.application_details.menu.form.site_keyword_label') }}
                    </label>
                    <input type="text" name="site_keyword" id="site_keyword" value="" placeholder="{{ trans('installer_messages.application_details.menu.form.site_keyword_placeholder') }}" />
                    @if ($errors->has('site_keyword'))
                        <span class="error-block">
                            <i class="fa fa-fw fa-exclamation-triangle" aria-hidden="true"></i>
                            {{ $errors->first('site_keyword') }}
                        </span>
                    @endif
                </div>

                <div class="form-group {{ $errors->has('support_email') ? ' has-error ' : '' }}">
                    <label for="support_email">
                        {{ trans('installer_messages.application_details.menu.form.support_email_label') }}
                    </label>
                    <input type="text" name="support_email" id="support_email" value="" placeholder="{{ trans('installer_messages.application_details.menu.form.support_email_placeholder') }}" />
                    @if ($errors->has('support_email'))
                        <span class="error-block">
                            <i class="fa fa-fw fa-exclamation-triangle" aria-hidden="true"></i>
                            {{ $errors->first('support_email') }}
                        </span>
                    @endif
                </div>

                <div class="form-group {{ $errors->has('support_phone') ? ' has-error ' : '' }}">
                    <label for="support_phone">
                        {{ trans('installer_messages.application_details.menu.form.support_phone_label') }}
                    </label>
                    <input type="text" name="support_phone" id="support_phone" value="" placeholder="{{ trans('installer_messages.application_details.menu.form.support_phone_placeholder') }}" />
                    @if ($errors->has('support_phone'))
                        <span class="error-block">
                            <i class="fa fa-fw fa-exclamation-triangle" aria-hidden="true"></i>
                            {{ $errors->first('support_phone') }}
                        </span>
                    @endif
                </div>

                <div class="form-group {{ $errors->has('session') ? ' has-error ' : '' }}">
                    <label for="session">
                        {{ trans('installer_messages.application_details.menu.form.session_label') }}
                    </label>
                    <input type="text" name="session" id="session" value="" placeholder="{{ trans('installer_messages.application_details.menu.form.session_placeholder') }}" />
                    @if ($errors->has('session'))
                        <span class="error-block">
                            <i class="fa fa-fw fa-exclamation-triangle" aria-hidden="true"></i>
                            {{ $errors->first('session') }}
                        </span>
                    @endif
                </div>

                <div class="form-group {{ $errors->has('currency') ? ' has-error ' : '' }}">
                    <label for="currency">
                        {{ trans('installer_messages.application_details.menu.form.currency_label') }}
                    </label>
                    <select name="currency" id="currency">
                        <option value="NGN" selected>{{ trans('installer_messages.application_details.menu.form.currency_label_naira') }}</option>
                    </select>
                    @if ($errors->has('currency'))
                        <span class="error-block">
                            <i class="fa fa-fw fa-exclamation-triangle" aria-hidden="true"></i>
                            {{ $errors->first('currency') }}
                        </span>
                    @endif
                </div>

                <div class="buttons">
                    <button class="button" onclick="showApplicationSettings();return false">
                        {{ trans('installer_messages.application_details.menu.form.buttons.setup_owner_details') }}
                        <i class="fa fa-angle-right fa-fw" aria-hidden="true"></i>
                    </button>
                </div>
            </div>
            <div class="tab" id="tab3content">
                
                <div class="form-group {{ $errors->has('owner_fname') ? ' has-error ' : '' }}">
                    <label for="owner_fname">
                        {{ trans('installer_messages.application_details.menu.form.owner_fname_label') }}
                    </label>
                    <input type="text" name="owner_fname" id="owner_fname" value="" placeholder="{{ trans('installer_messages.application_details.menu.form.owner_fname_placeholder') }}" />
                    @if ($errors->has('owner_fname'))
                        <span class="error-block">
                            <i class="fa fa-fw fa-exclamation-triangle" aria-hidden="true"></i>
                            {{ $errors->first('owner_fname') }}
                        </span>
                    @endif
                </div>

                <div class="form-group {{ $errors->has('owner_lname') ? ' has-error ' : '' }}">
                    <label for="owner_lname">
                        {{ trans('installer_messages.application_details.menu.form.owner_lname_label') }}
                    </label>
                    <input type="text" name="owner_lname" id="owner_lname" value="" placeholder="{{ trans('installer_messages.application_details.menu.form.owner_lname_placeholder') }}" />
                    @if ($errors->has('owner_lname'))
                        <span class="error-block">
                            <i class="fa fa-fw fa-exclamation-triangle" aria-hidden="true"></i>
                            {{ $errors->first('owner_lname') }}
                        </span>
                    @endif
                </div>

                <div class="form-group {{ $errors->has('owner_gender') ? ' has-error ' : '' }}">
                    <label for="owner_gender">
                        {{ trans('installer_messages.application_details.menu.form.owner_gender_label') }}
                    </label>
                    <select name="owner_gender" id="owner_gender">
                        <option selected disabled>{{ trans('installer_messages.application_details.menu.form.owner_gender_label_none') }}</option>
                        <option value="Male">{{ trans('installer_messages.application_details.menu.form.owner_gender_label_male') }}</option>
                        <option value="Female">{{ trans('installer_messages.application_details.menu.form.owner_gender_label_female') }}</option>
                    </select>
                    @if ($errors->has('owner_gender'))
                        <span class="error-block">
                            <i class="fa fa-fw fa-exclamation-triangle" aria-hidden="true"></i>
                            {{ $errors->first('owner_gender') }}
                        </span>
                    @endif
                </div>

                <div class="form-group {{ $errors->has('owner_phone') ? ' has-error ' : '' }}">
                    <label for="owner_phone">
                        {{ trans('installer_messages.application_details.menu.form.owner_phone_label') }}
                    </label>
                    <input type="text" name="owner_phone" id="owner_phone" value="" placeholder="{{ trans('installer_messages.application_details.menu.form.owner_phone_placeholder') }}" />
                    @if ($errors->has('owner_phone'))
                        <span class="error-block">
                            <i class="fa fa-fw fa-exclamation-triangle" aria-hidden="true"></i>
                            {{ $errors->first('owner_phone') }}
                        </span>
                    @endif
                </div>


                <div class="buttons">
                    <button class="button" type="submit">
                        {{ trans('installer_messages.application_details.menu.form.buttons.install') }}
                        <i class="fa fa-angle-right fa-fw" aria-hidden="true"></i>
                    </button>
                </div>
            </div>
        </form>

    </div>
@endsection

@section('scripts')
    <script type="text/javascript">
        function checkEnvironment(val) {
            var element=document.getElementById('environment_text_input');
            if(val=='other') {
                element.style.display='block';
            } else {
                element.style.display='none';
            }
        }
        function showDatabaseSettings() {
            document.getElementById('tab2').checked = true;
        }
        function showApplicationSettings() {
            document.getElementById('tab3').checked = true;
        }
    </script>
@endsection

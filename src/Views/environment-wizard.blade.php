@extends('vendor.installer.layouts.master')

@section('template_title')
    {{ trans('installer_messages.environment.wizard.templateTitle') }}
@endsection

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
            <p class="listedoptions"><i class='bx bx-check active'></i> Pre-Data</p>
            <p class="listedoptions"><i class='bx bx-check listicon'></i> Configuration</p>
            <p class="listedoptions"><i class='bx bx-check listicon'></i> Installation Complete</p>

            <p class="listedoptions2"><i class='bx bx-question-mark listicon2'></i> Support</p>
        </div>
    </div>
@endsection

@section('section5')
    <div class="section5">
        <div class="col-lg-8">
            <img src="{{ asset('assets/vector4.png') }}" alt="" class="image11">
            <img src="{{ asset('assets/vector2.png') }}" alt="" class="image22">
            <img src="{{ asset('assets/vector6.png') }}" alt="" class="image33">
            <h4 class="sec5h4">Configurations</h4>
            <hr class="sec2hr">
            <!-- tab -->
            <div class="shorttab">
                <div class="activetab" id="env">
                    <i class='bx bxs-cog'></i>
                    <p class="tablabel1">{{ trans('installer_messages.environment.wizard.tabs.environment') }}</p>
                </div>
                <div id="database">
                    <i class='bx bxs-data'></i>
                    <p class="tablabel1">{{ trans('installer_messages.environment.wizard.tabs.database') }}</p>
                </div>
                <div id="appl">
                    <i class='bx bxs-cloud'></i>
                    <p class="tablabel1">{{ trans('installer_messages.environment.wizard.tabs.application') }}</p>
                </div>
            </div>
            <!-- tab end -->
            <hr class="sec2hr">
            <form method="post" action="{{ route('LaravelInstaller::environmentSaveWizard') }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="env">
                    <div class="sec5div1">
                        <div class="form-group {{ $errors->has('app_name') ? ' has-error ' : '' }}">
                            <label class="sec5label1" for="app_name">
                                {{ trans('installer_messages.environment.wizard.form.app_name_label') }}
                            </label>
                            <input type="text" name="app_name" class="sec5in1" id="app_name"
                                value="{{ old('app_name') }}"
                                placeholder="{{ trans('installer_messages.environment.wizard.form.app_name_placeholder') }}" />
                            @if ($errors->has('app_name'))
                                <span class="error-block">
                                    <i class="bx bxs-error" aria-hidden="true"></i>
                                    {{ $errors->first('app_name') }}
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="sec5div1">
                        <div class="form-group {{ $errors->has('environment') ? ' has-error ' : '' }}">
                            <label class="sec5label1" for="environment">
                                {{ trans('installer_messages.environment.wizard.form.app_environment_label') }}
                            </label>
                            <select name="environment" class="sec5in1" id="environment"
                                onchange='checkEnvironment(this.value);'>
                                <option value="local" selected>
                                    {{ trans('installer_messages.environment.wizard.form.app_environment_label_local') }}
                                </option>
                                <option value="development">
                                    {{ trans('installer_messages.environment.wizard.form.app_environment_label_developement') }}
                                </option>
                                <option value="qa">
                                    {{ trans('installer_messages.environment.wizard.form.app_environment_label_qa') }}
                                </option>
                                <option value="production">
                                    {{ trans('installer_messages.environment.wizard.form.app_environment_label_production') }}
                                </option>
                                <option value="other">
                                    {{ trans('installer_messages.environment.wizard.form.app_environment_label_other') }}
                                </option>
                            </select>
                            <div id="environment_text_input" style="display: none;">
                                <input type="text" name="environment_custom" class="sec5in1" id="environment_custom"
                                    placeholder="{{ trans('installer_messages.environment.wizard.form.app_environment_placeholder_other') }}" />
                            </div>
                            @if ($errors->has('app_name'))
                                <span class="error-block">
                                    <i class="bx bxs-error" aria-hidden="true"></i>
                                    {{ $errors->first('app_name') }}
                                </span>
                            @endif
                        </div>
                    </div>
                    <!-- ss -->
                    <div class="sec5div101">
                        <div class="form-group {{ $errors->has('app_debug') ? ' has-error ' : '' }}">
                            <label class="sec5label1" for="app_debug">
                                {{ trans('installer_messages.environment.wizard.form.app_debug_label') }}
                            </label>
                            <label class="sec5label101" for="app_debug_true">
                                <input type="radio" name="app_debug" id="app_debug_true" value=true checked />
                                {{ trans('installer_messages.environment.wizard.form.app_debug_label_true') }}
                            </label>
                            <label class="sec5label101" for="app_debug_false">
                                <input type="radio" name="app_debug" id="app_debug_false" value=false />
                                {{ trans('installer_messages.environment.wizard.form.app_debug_label_false') }}
                            </label>
                            @if ($errors->has('app_debug'))
                                <span class="error-block">
                                    <i class="bx bxs-error" aria-hidden="true"></i>
                                    {{ $errors->first('app_debug') }}
                                </span>
                            @endif
                        </div>
                    </div>
                    <!-- ddd -->
                    <div class="sec5div1">
                        <div class="form-group {{ $errors->has('app_log_level') ? ' has-error ' : '' }}">
                            <label class="sec5label1" for="app_log_level">
                                {{ trans('installer_messages.environment.wizard.form.app_log_level_label') }}
                            </label>
                            <select name="app_log_level" class="sec5in1" id="app_log_level">
                                <option value="debug" selected>
                                    {{ trans('installer_messages.environment.wizard.form.app_log_level_label_debug') }}
                                </option>
                                <option value="info">
                                    {{ trans('installer_messages.environment.wizard.form.app_log_level_label_info') }}
                                </option>
                                <option value="notice">
                                    {{ trans('installer_messages.environment.wizard.form.app_log_level_label_notice') }}
                                </option>
                                <option value="warning">
                                    {{ trans('installer_messages.environment.wizard.form.app_log_level_label_warning') }}
                                </option>
                                <option value="error">
                                    {{ trans('installer_messages.environment.wizard.form.app_log_level_label_error') }}
                                </option>
                                <option value="critical">
                                    {{ trans('installer_messages.environment.wizard.form.app_log_level_label_critical') }}
                                </option>
                                <option value="alert">
                                    {{ trans('installer_messages.environment.wizard.form.app_log_level_label_alert') }}
                                </option>
                                <option value="emergency">
                                    {{ trans('installer_messages.environment.wizard.form.app_log_level_label_emergency') }}
                                </option>
                            </select>
                            @if ($errors->has('app_log_level'))
                                <span class="error-block">
                                    <i class="bx bxs-error" aria-hidden="true"></i>
                                    {{ $errors->first('app_log_level') }}
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="sec5div1">
                        <div class="form-group {{ $errors->has('app_url') ? ' has-error ' : '' }}">
                            <label class="sec5label1" for="app_url">
                                {{ trans('installer_messages.environment.wizard.form.app_url_label') }}
                            </label>
                            <input type="url" name="app_url" class="sec5in1" id="app_url"
                                value="http://localhost"
                                placeholder="{{ trans('installer_messages.environment.wizard.form.app_url_placeholder') }}" />
                            @if ($errors->has('app_url'))
                                <span class="error-block">
                                    <i class="bx bxs-error" aria-hidden="true"></i>
                                    {{ $errors->first('app_url') }}
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="sec2btns" style="margin-top: 50px;">
                        <a href="{{ route('LaravelInstaller::applicationDetails') }}" class="sec1btn">Previous</a>
                        <a id="next1"
                            class="sec1btn2">{{ trans('installer_messages.environment.wizard.form.buttons.setup_database') }}
                            <i class='bx bx-right-arrow-alt' id="icon1"></i></a>
                    </div>
                </div>

                <!-- data -->
                <div class="data">
                    <div class="sec5div1">
                        <div class="form-group {{ $errors->has('database_connection') ? ' has-error ' : '' }}">
                            <label class="sec5label1" for="database_connection">
                                {{ trans('installer_messages.environment.wizard.form.db_connection_label') }}
                            </label>
                            <select name="database_connection" class="sec5in1" id="database_connection">
                                <option value="mysql" selected>
                                    {{ trans('installer_messages.environment.wizard.form.db_connection_label_mysql') }}
                                </option>
                                <option value="sqlite">
                                    {{ trans('installer_messages.environment.wizard.form.db_connection_label_sqlite') }}
                                </option>
                                <option value="pgsql">
                                    {{ trans('installer_messages.environment.wizard.form.db_connection_label_pgsql') }}
                                </option>
                                <option value="sqlsrv">
                                    {{ trans('installer_messages.environment.wizard.form.db_connection_label_sqlsrv') }}
                                </option>
                            </select>
                            @if ($errors->has('database_connection'))
                                <span class="error-block">
                                    <i class="bx bxs-error" aria-hidden="true"></i>
                                    {{ $errors->first('database_connection') }}
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="sec5div1">
                        <div class="form-group {{ $errors->has('database_hostname') ? ' has-error ' : '' }}">
                            <label class="sec5label1" for="database_hostname">
                                {{ trans('installer_messages.environment.wizard.form.db_host_label') }}
                            </label>
                            <input type="text" name="database_hostname" class="sec5in1" id="database_hostname"
                                value="127.0.0.1"
                                placeholder="{{ trans('installer_messages.environment.wizard.form.db_host_placeholder') }}" />
                            @if ($errors->has('database_hostname'))
                                <span class="error-block">
                                    <i class="bx bxs-error" aria-hidden="true"></i>
                                    {{ $errors->first('database_hostname') }}
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="sec5div1">
                        <div class="form-group {{ $errors->has('database_port') ? ' has-error ' : '' }}">
                            <label class="sec5label1" for="database_port">
                                {{ trans('installer_messages.environment.wizard.form.db_port_label') }}
                            </label>
                            <input type="number" name="database_port" class="sec5in1" id="database_port"
                                value="3306"
                                placeholder="{{ trans('installer_messages.environment.wizard.form.db_port_placeholder') }}" />
                            @if ($errors->has('database_port'))
                                <span class="error-block">
                                    <i class="bx bxs-error" aria-hidden="true"></i>
                                    {{ $errors->first('database_port') }}
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="sec5div1">
                        <div class="form-group {{ $errors->has('database_name') ? ' has-error ' : '' }}">
                            <label class="sec5label1" for="database_name">
                                {{ trans('installer_messages.environment.wizard.form.db_name_label') }}
                            </label>
                            <input type="text" name="database_name" class="sec5in1" id="database_name"
                                value="{{ old('database_name') }}"
                                placeholder="{{ trans('installer_messages.environment.wizard.form.db_name_placeholder') }}" />
                            @if ($errors->has('database_name'))
                                <span class="error-block">
                                    <i class="bx bxs-error" aria-hidden="true"></i>
                                    {{ $errors->first('database_name') }}
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="sec5div1">
                        <div class="form-group {{ $errors->has('database_username') ? ' has-error ' : '' }}">
                            <label class="sec5label1" for="database_username">
                                {{ trans('installer_messages.environment.wizard.form.db_username_label') }}
                            </label>
                            <input type="text" name="database_username" class="sec5in1" id="database_username"
                                value="{{ old('database_username') }}"
                                placeholder="{{ trans('installer_messages.environment.wizard.form.db_username_placeholder') }}" />
                            @if ($errors->has('database_username'))
                                <span class="error-block">
                                    <i class="bx bxs-error" aria-hidden="true"></i>
                                    {{ $errors->first('database_username') }}
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="sec5div1">
                        <div class="form-group {{ $errors->has('database_password') ? ' has-error ' : '' }}">
                            <label class="sec5label1" for="database_password">
                                {{ trans('installer_messages.environment.wizard.form.db_password_label') }}
                            </label>
                            <input type="password" name="database_password" class="sec5in1" id="database_password"
                                value="{{ old('database_password') }}"
                                placeholder="{{ trans('installer_messages.environment.wizard.form.db_password_placeholder') }}" />
                            @if ($errors->has('database_password'))
                                <span class="error-block">
                                    <i class="bx bxs-error" aria-hidden="true"></i>
                                    {{ $errors->first('database_password') }}
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="sec2btns" style="margin-top: 50px;">
                        <a id="movetoenv" class="sec1btn">Previous</a>
                        <a id="next2"
                            class="sec1btn2">{{ trans('installer_messages.environment.wizard.form.buttons.setup_application') }}
                            <i class='bx bx-right-arrow-alt' id="icon1"></i></a>
                    </div>
                </div>

                <!--app  -->
                <div class="app">
                    <div class="sec7div2 col-lg-9">
                        <p class="sec7pp">Broadcasting, Cashing, Session, &amp; Queue</p>
                    </div>

                    <div class="row">
                        <div class="sec8div1 col-12 col-sm-12 col-lg-4">
                            <div class="form-group {{ $errors->has('broadcast_driver') ? ' has-error ' : '' }}">
                                <label class="sec5label1"
                                    for="broadcast_driver">{{ trans('installer_messages.environment.wizard.form.app_tabs.broadcasting_label') }}
                                    <sup>
                                        <a href="https://laravel.com/docs/5.4/broadcasting" target="_blank"
                                            title="{{ trans('installer_messages.environment.wizard.form.app_tabs.more_info') }}">
                                            <i class="bx bxs-info-circle" aria-hidden="true"></i>
                                        </a>
                                    </sup>
                                </label>
                                <input type="text" name="broadcast_driver" class="sec5in1" id="broadcast_driver"
                                    value="log"
                                    placeholder="{{ trans('installer_messages.environment.wizard.form.app_tabs.broadcasting_placeholder') }}" />
                                @if ($errors->has('broadcast_driver'))
                                    <span class="error-block">
                                        <i class="bx bxs-error" aria-hidden="true"></i>
                                        {{ $errors->first('broadcast_driver') }}
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="sec8div1 col-12 col-sm-12 col-lg-4">
                            <div class="form-group {{ $errors->has('cache_driver') ? ' has-error ' : '' }}">
                                <label class="sec5label1"
                                    for="cache_driver">{{ trans('installer_messages.environment.wizard.form.app_tabs.cache_label') }}
                                    <sup>
                                        <a href="https://laravel.com/docs/5.4/cache" target="_blank"
                                            title="{{ trans('installer_messages.environment.wizard.form.app_tabs.more_info') }}">
                                            <i class="bx bxs-info-circle" aria-hidden="true"></i>
                                        </a>
                                    </sup>
                                </label>
                                <input type="text" name="cache_driver" class="sec5in1" id="cache_driver"
                                    value="file"
                                    placeholder="{{ trans('installer_messages.environment.wizard.form.app_tabs.cache_placeholder') }}" />
                                @if ($errors->has('cache_driver'))
                                    <span class="error-block">
                                        <i class="bx bxs-error" aria-hidden="true"></i>
                                        {{ $errors->first('cache_driver') }}
                                    </span>
                                @endif
                            </div>
                            <label class="sec5label1">Cache Driver</label>
                            <input type="text" value="file" class="sec5in1">
                        </div>
                    </div>
                    <div class="row">
                        <div class="sec8div1 col-12 col-sm-12 col-lg-4">
                            <div class="form-group {{ $errors->has('session_driver') ? ' has-error ' : '' }}">
                                <label class="sec5label1"
                                    for="session_driver">{{ trans('installer_messages.environment.wizard.form.app_tabs.session_label') }}
                                    <sup>
                                        <a href="https://laravel.com/docs/5.4/session" target="_blank"
                                            title="{{ trans('installer_messages.environment.wizard.form.app_tabs.more_info') }}">
                                            <i class="bx bxs-info-circle" aria-hidden="true"></i>
                                        </a>
                                    </sup>
                                </label>
                                <input type="text" name="session_driver" class="sec5in1" id="session_driver"
                                    value="file"
                                    placeholder="{{ trans('installer_messages.environment.wizard.form.app_tabs.session_placeholder') }}" />
                                @if ($errors->has('session_driver'))
                                    <span class="error-block">
                                        <i class="bx bxs-error" aria-hidden="true"></i>
                                        {{ $errors->first('session_driver') }}
                                    </span>
                                @endif
                            </div>
                            <label class="sec5label1">Session Driver</label>
                            <input type="text" value="file" class="sec5in1">
                        </div>
                        <div class="sec8div1 col-12 col-sm-12 col-lg-4">
                            <div class="form-group {{ $errors->has('queue_driver') ? ' has-error ' : '' }}">
                                <label class="sec5label1"
                                    for="queue_driver">{{ trans('installer_messages.environment.wizard.form.app_tabs.queue_label') }}
                                    <sup>
                                        <a href="https://laravel.com/docs/5.4/queues" target="_blank"
                                            title="{{ trans('installer_messages.environment.wizard.form.app_tabs.more_info') }}">
                                            <i class="bx bxs-info-circle" aria-hidden="true"></i>
                                        </a>
                                    </sup>
                                </label>
                                <input type="text" name="queue_driver" class="sec5in1" id="queue_driver"
                                    value="sync"
                                    placeholder="{{ trans('installer_messages.environment.wizard.form.app_tabs.queue_placeholder') }}" />
                                @if ($errors->has('queue_driver'))
                                    <span class="error-block">
                                        <i class="bx bxs-error" aria-hidden="true"></i>
                                        {{ $errors->first('queue_driver') }}
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="sec7div2 col-lg-9">
                        <p class="sec7pp">Redis Driver</p>
                    </div>

                    <div class="row">
                        <div class="sec8div1 col-12 col-sm-12 col-lg-3">
                            <div class="form-group {{ $errors->has('redis_hostname') ? ' has-error ' : '' }}">
                                <label class="sec5label1" for="redis_hostname">
                                    {{ trans('installer_messages.environment.wizard.form.app_tabs.redis_host') }}
                                    <sup>
                                        <a href="https://laravel.com/docs/5.4/redis" target="_blank"
                                            title="{{ trans('installer_messages.environment.wizard.form.app_tabs.more_info') }}">
                                            <i class="bx bxs-info-circle" aria-hidden="true"></i>
                                        </a>
                                    </sup>
                                </label>
                                <input type="text" name="redis_hostname" class="sec5in1" id="redis_hostname"
                                    value="127.0.0.1"
                                    placeholder="{{ trans('installer_messages.environment.wizard.form.app_tabs.redis_host') }}" />
                                @if ($errors->has('redis_hostname'))
                                    <span class="error-block">
                                        <i class="bx bxs-error" aria-hidden="true"></i>
                                        {{ $errors->first('redis_hostname') }}
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="sec8div1 col-12 col-sm-12 col-lg-3">
                            <div class="form-group {{ $errors->has('redis_password') ? ' has-error ' : '' }}">
                                <label class="sec5label1"
                                    for="redis_password">{{ trans('installer_messages.environment.wizard.form.app_tabs.redis_password') }}</label>
                                <input type="password" name="redis_password" class="sec5in1" id="redis_password"
                                    value="null"
                                    placeholder="{{ trans('installer_messages.environment.wizard.form.app_tabs.redis_password') }}" />
                                @if ($errors->has('redis_password'))
                                    <span class="error-block">
                                        <i class="bx bxs-error" aria-hidden="true"></i>
                                        {{ $errors->first('redis_password') }}
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="sec8div1 col-12 col-sm-12 col-lg-3">
                            <div class="form-group {{ $errors->has('redis_port') ? ' has-error ' : '' }}">
                                <label class="sec5label1"
                                    for="redis_port">{{ trans('installer_messages.environment.wizard.form.app_tabs.redis_port') }}</label>
                                <input type="number" name="redis_port" class="sec5in1" id="redis_port" value="6379"
                                    placeholder="{{ trans('installer_messages.environment.wizard.form.app_tabs.redis_port') }}" />
                                @if ($errors->has('redis_port'))
                                    <span class="error-block">
                                        <i class="bx bxs-error" aria-hidden="true"></i>
                                        {{ $errors->first('redis_port') }}
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="sec7div2 col-lg-9">
                        <p class="sec7pp">Mail</p>
                    </div>

                    <div class="row">
                        <div class="sec8div1 col-12 col-sm-12 col-lg-3">
                            <div class="form-group {{ $errors->has('mail_driver') ? ' has-error ' : '' }}">
                                <label class="sec5label1" for="mail_driver">
                                    {{ trans('installer_messages.environment.wizard.form.app_tabs.mail_driver_label') }}
                                    <sup>
                                        <a href="https://laravel.com/docs/5.4/mail" target="_blank"
                                            title="{{ trans('installer_messages.environment.wizard.form.app_tabs.more_info') }}">
                                            <i class="bx bxs-info-circle" aria-hidden="true"></i>
                                        </a>
                                    </sup>
                                </label>
                                <input type="text" name="mail_driver" class="sec5in1" id="mail_driver"
                                    value="smtp"
                                    placeholder="{{ trans('installer_messages.environment.wizard.form.app_tabs.mail_driver_placeholder') }}" />
                                @if ($errors->has('mail_driver'))
                                    <span class="error-block">
                                        <i class="bx bxs-error" aria-hidden="true"></i>
                                        {{ $errors->first('mail_driver') }}
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="sec8div1 col-12 col-sm-12 col-lg-3">
                            <div class="form-group {{ $errors->has('mail_host') ? ' has-error ' : '' }}">
                                <label class="sec5label1"
                                    for="mail_host">{{ trans('installer_messages.environment.wizard.form.app_tabs.mail_host_label') }}</label>
                                <input type="text" name="mail_host" class="sec5in1" id="mail_host"
                                    value="smtp.mailtrap.io"
                                    placeholder="{{ trans('installer_messages.environment.wizard.form.app_tabs.mail_host_placeholder') }}" />
                                @if ($errors->has('mail_host'))
                                    <span class="error-block">
                                        <i class="bx bxs-error" aria-hidden="true"></i>
                                        {{ $errors->first('mail_host') }}
                                    </span>
                                @endif
                            </div>
                            <label class="sec5label1">SMTP Host</label>
                            <input type="password" value="mail.delwathon.com" class="sec5in1">
                        </div>
                        <div class="sec8div1 col-12 col-sm-12 col-lg-3">
                            <div class="form-group {{ $errors->has('mail_port') ? ' has-error ' : '' }}">
                                <label class="sec5label1"
                                    for="mail_port">{{ trans('installer_messages.environment.wizard.form.app_tabs.mail_port_label') }}</label>
                                <input type="number" name="mail_port" class="sec5in1" id="mail_port" value="2525"
                                    placeholder="{{ trans('installer_messages.environment.wizard.form.app_tabs.mail_port_placeholder') }}" />
                                @if ($errors->has('mail_port'))
                                    <span class="error-block">
                                        <i class="bx bxs-error" aria-hidden="true"></i>
                                        {{ $errors->first('mail_port') }}
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="sec8div1 col-12 col-sm-12 col-lg-3">
                            <div class="form-group {{ $errors->has('mail_username') ? ' has-error ' : '' }}">
                                <label class="sec5label1"
                                    for="mail_username">{{ trans('installer_messages.environment.wizard.form.app_tabs.mail_username_label') }}</label>
                                <input type="text" name="mail_username" class="sec5in1" id="mail_username"
                                    value="null"
                                    placeholder="{{ trans('installer_messages.environment.wizard.form.app_tabs.mail_username_placeholder') }}" />
                                @if ($errors->has('mail_username'))
                                    <span class="error-block">
                                        <i class="bx bxs-error" aria-hidden="true"></i>
                                        {{ $errors->first('mail_username') }}
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="sec8div1 col-12 col-sm-12 col-lg-3">
                            <div class="form-group {{ $errors->has('mail_password') ? ' has-error ' : '' }}">
                                <label class="sec5label1"
                                    for="mail_password">{{ trans('installer_messages.environment.wizard.form.app_tabs.mail_password_label') }}</label>
                                <input type="text" name="mail_password" class="sec5in1" id="mail_password"
                                    value="null"
                                    placeholder="{{ trans('installer_messages.environment.wizard.form.app_tabs.mail_password_placeholder') }}" />
                                @if ($errors->has('mail_password'))
                                    <span class="error-block">
                                        <i class="bx bxs-error" aria-hidden="true"></i>
                                        {{ $errors->first('mail_password') }}
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="sec8div1 col-12 col-sm-12 col-lg-3">
                            <div class="form-group {{ $errors->has('mail_encryption') ? ' has-error ' : '' }}">
                                <label class="sec5label1"
                                    for="mail_encryption">{{ trans('installer_messages.environment.wizard.form.app_tabs.mail_encryption_label') }}</label>
                                <input type="text" name="mail_encryption" class="sec5in1" id="mail_encryption"
                                    value="null"
                                    placeholder="{{ trans('installer_messages.environment.wizard.form.app_tabs.mail_encryption_placeholder') }}" />
                                @if ($errors->has('mail_encryption'))
                                    <span class="error-block">
                                        <i class="bx bxs-error" aria-hidden="true"></i>
                                        {{ $errors->first('mail_encryption') }}
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="sec7div2 col-lg-9">
                        <p class="sec7pp">Pusher</p>
                    </div>

                    <div class="row">
                        <div class="sec8div1 col-12 col-sm-12 col-lg-3">
                            <div class="form-group {{ $errors->has('pusher_app_id') ? ' has-error ' : '' }}">
                                <label class="sec5label1" for="pusher_app_id">
                                    {{ trans('installer_messages.environment.wizard.form.app_tabs.pusher_app_id_label') }}
                                    <sup>
                                        <a href="https://pusher.com/docs/server_api_guide" target="_blank"
                                            title="{{ trans('installer_messages.environment.wizard.form.app_tabs.more_info') }}">
                                            <i class="bx bxs-info-circle" aria-hidden="true"></i>

                                        </a>
                                    </sup>
                                </label>
                                <input type="text" name="pusher_app_id" class="sec5in1" id="pusher_app_id"
                                    value="{{ old('owner_fname') }}"
                                    placeholder="{{ trans('installer_messages.environment.wizard.form.app_tabs.pusher_app_id_palceholder') }}" />
                                @if ($errors->has('pusher_app_id'))
                                    <span class="error-block">
                                        <i class="bx bxs-error" aria-hidden="true"></i>
                                        {{ $errors->first('pusher_app_id') }}
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="sec8div1 col-12 col-sm-12 col-lg-3">
                            <div class="form-group {{ $errors->has('pusher_app_key') ? ' has-error ' : '' }}">
                                <label class="sec5label1"
                                    for="pusher_app_key">{{ trans('installer_messages.environment.wizard.form.app_tabs.pusher_app_key_label') }}</label>
                                <input type="text" name="pusher_app_key" class="sec5in1" id="pusher_app_key"
                                    value="{{ old('owner_fname') }}"
                                    placeholder="{{ trans('installer_messages.environment.wizard.form.app_tabs.pusher_app_key_palceholder') }}" />
                                @if ($errors->has('pusher_app_key'))
                                    <span class="error-block">
                                        <i class="bx bxs-error" aria-hidden="true"></i>
                                        {{ $errors->first('pusher_app_key') }}
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="sec8div1 col-12 col-sm-12 col-lg-3">
                            <div class="form-group {{ $errors->has('pusher_app_secret') ? ' has-error ' : '' }}">
                                <label class="sec5label1"
                                    for="pusher_app_secret">{{ trans('installer_messages.environment.wizard.form.app_tabs.pusher_app_secret_label') }}</label>
                                <input type="password" name="pusher_app_secret" class="sec5in1" id="pusher_app_secret"
                                    value="{{ old('owner_fname') }}"
                                    placeholder="{{ trans('installer_messages.environment.wizard.form.app_tabs.pusher_app_secret_palceholder') }}" />
                                @if ($errors->has('pusher_app_secret'))
                                    <span class="error-block">
                                        <i class="bx bxs-error" aria-hidden="true"></i>
                                        {{ $errors->first('pusher_app_secret') }}
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="sec2btns col-lg-9" style="margin-top: 50px;">
                        <a id="movetodb" class="sec1btn">Previous</a>
                        <button type="submit"
                            class="sec1btn2">{{ trans('installer_messages.environment.wizard.form.buttons.install') }}
                            <i class='bx bx-right-arrow-alt' id="icon1"></i></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
@section('scripts')
    <script type="text/javascript">
        function checkEnvironment(val) {
            var element = document.getElementById('environment_text_input');
            if (val == 'other') {
                element.style.display = 'block';
            } else {
                element.style.display = 'none';
            }
        }
    </script>
@endsection

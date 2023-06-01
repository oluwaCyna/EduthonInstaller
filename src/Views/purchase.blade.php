@extends('vendor.installer.layouts.master')

@section('template_title')
    {{ trans('installer_messages.purchase.menu.templateTitle') }}
@endsection

@section('title')
    <i class="fa fa-magic fa-fw" aria-hidden="true"></i>
    {!! trans('installer_messages.purchase.menu.title') !!}
@endsection

@section('container')

        <form method="post" action="{{ route('LaravelInstaller::verifyPurchase') }}" class="tabs-wrap">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group {{ $errors->has('secret_key') ? ' has-error ' : '' }}">
                    <label for="secret_key">
                        {{ trans('installer_messages.purchase.form.secret_key_label') }}
                    </label>
                    <input type="text" name="secret_key" id="secret_key" value="" placeholder="{{ trans('installer_messages.purchase.form.secret_key_placeholder') }}" />
                    @if ($errors->has('secret_key'))
                        <span class="error-block">
                            <i class="fa fa-fw fa-exclamation-triangle" aria-hidden="true"></i>
                            {{ $errors->first('secret_key') }}
                        </span>
                    @endif
                </div>

                <div class="form-group {{ $errors->has('purchase_code') ? ' has-error ' : '' }}">
                    <label for="purchase_code">
                        {{ trans('installer_messages.purchase.form.purchase_code_label') }}
                    </label>
                    <input type="text" name="purchase_code" id="purchase_code" value="" placeholder="{{ trans('installer_messages.purchase.form.purchase_code_placeholder') }}" />
                    @if ($errors->has('purchase_code'))
                        <span class="error-block">
                            <i class="fa fa-fw fa-exclamation-triangle" aria-hidden="true"></i>
                            {{ $errors->first('purchase_code') }}
                        </span>
                    @endif
                </div>

                <div class="buttons">
                    <button class="button" type="submit">
                        {{ trans('installer_messages.purchase.form.buttons.install') }}
                        <i class="fa fa-angle-right fa-fw" aria-hidden="true"></i>
                    </button>
                </div>
            </div>
        </form>

@endsection

@section('scripts')
    
@endsection

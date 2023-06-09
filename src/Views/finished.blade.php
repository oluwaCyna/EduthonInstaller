@extends('vendor.installer.layouts.master')

@section('template_title')
    {{ trans('installer_messages.final.templateTitle') }}
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
		<p class="listedoptions"><i class='bx bx-check active'></i> Configuration</p>
		<p class="listedoptions"><i class='bx bx-check active'></i> Installation Complete</p>

		<p class="listedoptions2"><i class='bx bx-question-mark listicon2'></i> Support</p>
	</div>            
</div>
@endsection

@section('section9')

<div class="section9">
	<div class="col-lg-10">
		<img src="{{ asset('assets/vector4.png') }}" alt="" class="image11">
		<img src="{{ asset('assets/vector2.png') }}" alt="" class="image22">
		<img src="{{ asset('assets/vector6.png') }}" alt="" class="image33">
		<div class="sec9div">
			@if(session('message')['dbOutputLog'])
		<p><strong><small>{{ trans('installer_messages.final.migration') }}</small></strong></p>
		<pre><code>{{ session('message')['dbOutputLog'] }}</code></pre>
	@endif

	<p><strong><small>{{ trans('installer_messages.final.console') }}</small></strong></p>
	<pre><code>{{ $finalMessages }}</code></pre>

	<p><strong><small>{{ trans('installer_messages.final.log') }}</small></strong></p>
	<pre><code>{{ $finalStatusMessage }}</code></pre>

	<p><strong><small>{{ trans('installer_messages.final.env') }}</small></strong></p>
	<pre><code>{{ $finalEnvFile }}</code></pre>

		</div>



		<div class="sec2btns" style="margin-top: 30px;">
			<a href="{{ url('/') }}" class="sec1btn2" style="background-color: green; color:white;">{{ trans('installer_messages.final.exit') }}</a>
		</div>
	</div>
</div>

@endsection

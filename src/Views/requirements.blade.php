@extends('vendor.installer.layouts.master')

@section('template_title')
    {{ trans('installer_messages.requirements.templateTitle') }}
@endsection

@section('sidenav1')
    <div class="sidenav1">
        <div class="innerdiv2">
            <img src="{{ asset('assets/logowhitelogo.png') }}" alt="" class="mainlogo">
            <p class="sidenavtext2">Installer</p>

            <p class="listedoptions"><i class='bx bx-check active'></i> Install</p>
            <p class="listedoptions"><i class='bx bx-check active'></i> Software License Agreement</p>
            <p class="listedoptions"><i class='bx bx-check active'></i> Verify Purchase Code</p>
            <p class="listedoptions"><i class='bx bx-check listicon'></i> Server Requirement</p>
            <p class="listedoptions"><i class='bx bx-check listicon'></i> Permissions</p>
            <p class="listedoptions"><i class='bx bx-check listicon'></i> Pre-Data</p>
            <p class="listedoptions"><i class='bx bx-check listicon'></i> Configuration</p>
            <p class="listedoptions"><i class='bx bx-check listicon'></i> Installation Complete</p>

            <p class="listedoptions2"><i class='bx bx-question-mark listicon2'></i> Support</p>
        </div>
    </div>
@endsection

@section('section3')
    <div class="section3">
        <img src="{{ asset('assets/vector4.png') }}" alt="" class="image11">
        <img src="{{ asset('assets/vector2.png') }}" alt="" class="image22">
        <img src="{{ asset('assets/vector6.png') }}" alt="" class="image33">
        <h4 class="sec3h4">Server Requirement</h4>
        <hr class="sec3hr">
        <h6 class="sec3h6">Please configure your PHP settings to match following requirements</h6>
        <hr class="sec3hr">
        <!-- table1 -->
        <table class="sec3table1">
            <thead>
                <tr class="sec3head1">
                    <th class="sec3th1">PHP Settings</th>
                    <th class="sec3th1">Current Version</th>
                    <th class="sec3th1">Required Version</th>
                    <th class="sec3th1">Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($requirements['requirements'] as $type => $requirement)
                    @if ($type == 'php')
                        <tr>
                            <td class="sec3td1">{{ strtoupper($type) }} Version</td>
                            <td class="sec3td1">{{ $phpSupportInfo['current'] }}</td>
                            <td class="sec3td1">{{ $phpSupportInfo['minimum'] }}+</td>
                            <td class="sec3td1">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"
                                    {{ $phpSupportInfo['supported'] ? 'checked' : '' }} disabled>
                            </td>
                        </tr>
                    @else
                        <tr>PHP is required on your server to install this application.</tr>
                    @endif
                @endforeach
            </tbody>
        </table>
        <!-- table1 end -->
        <h6 class="sec3h61">Please make sure the extension/settings listed below are installed/enabled</h6>
        <hr class="sec3hr">
        <!-- table 2 -->
        <table class="sec3table2">
            <thead>
                <tr>
                    <th class="sec3th2" scope="col">Extention</th>
                    <th class="sec3th2" scope="col">Current Settings</th>
                    {{-- <th class="sec3th2" scope="col">Required Settings</th> --}}
                    <th class="sec3th2" scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($requirements['requirements'][$type] as $extention => $enabled)
                    <tr>
                        <td class="sec3td1">{{ $extention }}</td>
                        <td class="sec3td1">{{ $enabled ? 'On' : 'Off' }}</td>
                        {{-- <td class="sec3td1">On</td> --}}
                        <td class="sec3td1">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"
                                {{ $enabled ? 'checked' : '' }} disabled>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
        <!-- table2 end -->
        
        <div class="sec2btns" style="margin-top: 10px;">
            <a href="{{ route('LaravelInstaller::purchase') }}" class="sec1btn">Previous</a>
            @if (!isset($requirements['errors']) && $phpSupportInfo['supported'])
                <div class="buttons">
                    <a class="button sec1btn2" href="{{ route('LaravelInstaller::permissions') }}">
                        {{ trans('installer_messages.requirements.next') }}
                        <i class='bx bx-right-arrow-alt' id="icon1"></i>
                    </a>
                </div>
            @endif
        </div>
    </div>
@endsection

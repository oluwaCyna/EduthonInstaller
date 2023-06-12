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
        <p class="listedoptions"><i class='bx bx-check listicon'></i> Permissions</p>
        <p class="listedoptions"><i class='bx bx-check listicon'></i> Pre-Data</p>
        <p class="listedoptions"><i class='bx bx-check listicon'></i> Configuration</p>
        <p class="listedoptions"><i class='bx bx-check listicon'></i> Installation Complete</p>

        <p class="listedoptions2"><i class='bx bx-question-mark listicon2'></i> Support</p>
    </div>            
</div>
@endsection

@section('section4')

<div class="section4">
    <img src="{{ asset('assets/vector4.png') }}" alt="" class="image11">
    <img src="{{ asset('assets/vector2.png') }}" alt="" class="image22">
    <img src="{{ asset('assets/vector6.png') }}" alt="" class="image33">
    <h4 class="sec4h4">Permissions</h4>
    <hr class="sec3hr">

    <h6 class="sec3h62">Please make sure you have set the writable permission on the following</h6>
        
    <table>
        <tbody>
            @foreach($permissions['permissions'] as $permission)
            <tr>
                <td class="sec4p">{{ $permission['folder'] }}</td>
                <td class="sec4p2">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" {{ $permission['isSet'] ? 'checked' : '' }} disabled>
                    <span>{{ $permission['permission'] }}</span>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
    <!-- 333 -->
    <div class="sec2btns">
        <a href="{{ route('LaravelInstaller::requirements') }}" class="sec1btn">Previous</a>

        @if ( ! isset($permissions['errors']))
        <div class="buttons">
            <a href="{{ route('LaravelInstaller::applicationDetails') }}" class="button sec1btn2">
                {{ trans('installer_messages.permissions.next') }}
                <i class='bx bx-right-arrow-alt' id="icon11"></i>
            </a>
        </div>
    @endif
    </div>
</div>

@endsection

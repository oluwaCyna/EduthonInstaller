@extends('vendor.installer.layouts.master')

@section('sidenav1')
<div class="sidenav1">
  <div class="innerdiv">
      <img src="{{ asset('installer/assets/logowhitelogo.png') }}" alt="" class="mainlogo">
      <p class="sidenavtext">Installer</p>
  </div>            
</div>
@endsection

@section('section1')
<div class="section1">
  <div class="row">
      <div class="col-12 col-lg-8">
          <img src="{{ asset('installer/assets/vector4.png') }}" alt="" class="image11">
          <img src="{{ asset('installer/assets/vector2.png') }}" alt="" class="image22">
          <img src="{{ asset('installer/assets/vector6.png') }}" alt="" class="image33">
          <p class="para1">Welcome To Delwathon IT Solutions Product Installer
              </p>
          <p class="para2">Delwathon IT Solutions Product Installer will install <span class="bluespan">Eduthon</span>
              on your web server. To continue, click Next.</p>
          <p class="para3"><b>PLEASE NOTE:</b> It is required that you obtain a valid <span class="bluespan">purchase code</span>
              and <span class="bluespan">secret key</span> to proceed with the
          software installation.
          </p>
          <p class="para4">
              <b>WARNING!</b> This software is protected by copy right law
              and international treats. By clicking the button below, you
              agree to our <span class="bluespan">Terms of Service</span> and <span class="bluespan">Privacy Policy</span>.
          </p>
          <div class="sec1btns">
              <a href="{{ route('LaravelInstaller::license') }}" class="sec1btn2">Next <i class='bx bx-right-arrow-alt' id="icon1"></i></a>
          </div>
      </div>
  </div>        
</div>
@endsection

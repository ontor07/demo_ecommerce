@extends('fronted.dashboard.layouts.master')
@section('content')
<div class="row">
    <div class="col-xl-9 col-xxl-10 col-lg-9 ms-auto">
      <div class="dashboard_content mt-2 mt-md-0">
        <h3><i class="far fa-user"></i> profile</h3>
        <div class="wsus__dashboard_profile">
          <div class="wsus__dash_pro_area">
            <h4>basic information</h4>
            <form action="{{ route('user.profile.update') }}" method="post" enctype="multipart/form-data">
              @csrf
              @method('PUT')
              <div class="row">
                <div class="col-xl-9">
                  <div class="row">
                    <div class="col-xl-12 col-md-12">
                      <div class="wsus__dash_pro_single">
                        <i class="fas fa-user-tie"></i>
                        <input type="text" placeholder="" value="{{ Auth::user()->name }}" name="name">
                      </div>
                    </div>
                    
                    <div class="col-xl-12 col-md-12">
                      <div class="wsus__dash_pro_single">
                        <i class="fal fa-envelope-open"></i>
                        <input type="email" placeholder="" value="{{ Auth::user()->email }}" name="email">
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-12 ">
                    <button class="common_btn mb-3 mt-5" type="submit">upload</button>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-md-6">
                  <div class="wsus__dash_pro_img w-75">

                    <img src="{{ asset("/uploads/user_profile") }}/{{ Auth::user()->image }}" id="blah" alt=""  class="img-fluid">
                    {{-- <img src="{{ Auth::user()->image ? asset('/uploads/user_profile') / Auth::user()->image : asset('fronted/images/ts-2.jpg') }}" alt="img" class="img-fluid "  id="blah" > --}}
                    <input type="file" id="imageFile" name="image" >
                  </div>
                </div>
                
           
              </div>
            </form>
          </div>

          <div class="wsus__dash_pro_area mt-3">
              <div class="wsus__dash_pass_change ">
              <form  method="post" 
              action="{{ route('user.profile.update.password') }}">

                @csrf
                
                <div class="row">
                  <h4>Update Password</h4>
                  <div class="col-xl-4 col-md-6">
                    <div class="wsus__dash_pro_single">
                      <i class="fas fa-unlock-alt"></i>
                      <input type="password" placeholder="Current Password" name="current_password">
                    </div>
                  </div>
                  <div class="col-xl-4 col-md-6">
                    <div class="wsus__dash_pro_single">
                      <i class="fas fa-lock-alt"></i>
                      <input type="password" placeholder="New Password" name="password">
                    </div>
                  </div>
                  <div class="col-xl-4">
                    <div class="wsus__dash_pro_single">
                      <i class="fas fa-lock-alt"></i>
                      <input type="password" placeholder="Confirm Password" name="password_confirmation">
                    </div>
                  </div>
                  <div class="col-xl-12">
                    <button class="common_btn" type="submit">upload</button>
                  </div>
                </div>
              </form>
              </div>
            
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
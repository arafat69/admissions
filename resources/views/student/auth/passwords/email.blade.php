@extends('student.layouts.auth')
@section('title')
Student | Email
@endsection
@section('content')
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
      <div class="container-fluid">
        <script>
          var isFluid = JSON.parse(localStorage.getItem('isFluid'));
          if (isFluid) {
            var container = document.querySelector('[data-layout]');
            container.classList.remove('container');
            container.classList.add('container-fluid');
          }
        </script>
        <div class="row min-vh-100 bg-100">

          <div class="col-sm-10 col-md-6 px-sm-0 align-self-center mx-auto py-5">
            <div class="row justify-content-center g-0">
              <div class="col-lg-9 col-xl-8 col-xxl-6">
                <img src="{{ asset('hria/assets/img/logos/log.png') }}" width="100px" />
                <div class="card">

                  <div class="card-body p-4">
                    <div class="row flex-between-center">
                      <div class="col-auto pt-3">
                        <h3>Reset Password</h3>
                        <span class="mb-0 fw-semi-bold">New here?</span> <span><a href="{{ route('student.register') }}"><b>Create Account</b></a></span>
                      </div>
                    </div>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('student.password.email') }}" aria-label="{{ __('Reset Password') }}">
                        @csrf

                      <div class="mb-3 mt-3"><label class="form-label" for="split-login-email">Email</label>
                        <input id="email" type="email" placeholder="Enter your email address" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" id="split-login-email" name="email" value="{{ old('email') }}" required autofocus>
                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>

                      <div class="row flex-between-center">
                        <div class="col-auto">
                          <div class="form-check mb-0"></div>
                        </div>
                        <div class="col-auto"><a class="fs--1" href="{{ route('student.login') }}"><b>Have an Account? Sign In</b></a></div>
                      </div>
                      <div class="mb-3"><button class="btn btn-primary d-block mt-3" type="submit" >Send Password Reset Link</button></div>
                    </form>

                    <p class="mt-5" style="font-size: 13px">© 2023 | Hizb ur Rahman Islamic Academy (HRIA) Pakistan
                        All Rights Reserved.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-6 d-none d-lg-block position-relative">
            <div class="bg-holder" style="background-image:url({{ asset('hria/assets/img/generic/1.png') }});background-position: 50% 20%;"></div>
            <!--/.bg-holder-->
          </div>

        </div>
      </div>
    </main><!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->

    @endsection

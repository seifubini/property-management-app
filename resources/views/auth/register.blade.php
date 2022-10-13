@extends('layouts.auth-master')

@section('content')
    <!--begin::Main-->
        <div class="d-flex flex-column flex-root">
            <!--begin::Login-->
            <div class="login login-1 login-signin-on d-flex flex-column flex-lg-row flex-column-fluid bg-white" id="kt_login">
                <!--begin::Aside-->
                <div class="login-aside d-flex flex-column flex-row-auto" style="background-color: #F2C98A;">
                    <!--begin::Aside Top-->
                    <div class="d-flex flex-column-auto flex-column pt-lg-40 pt-15">
                        <!--begin::Aside header-->
                        <a href="{{ route('home.index') }}" class="text-center mb-10">
                            <img src="{!! url('assets/media/logos/das-logo.png') !!}" class="max-h-70px" alt="" />
                        </a>
                        <!--end::Aside header-->
                        <!--begin::Aside title-->
                        <h3 class="font-weight-bolder text-center font-size-h4 font-size-h1-lg" style="color: #986923;">Discover Amazing Features
                        <br />with great user experience</h3>
                        <!--end::Aside title-->
                    </div>
                    <!--end::Aside Top-->
                    <!--begin::Aside Bottom-->
                    <div class="aside-img d-flex flex-row-fluid bgi-no-repeat bgi-position-y-bottom bgi-position-x-center" style="background-image: url({!! url('assets/media/svg/illustrations/login-visual-1.svg') !!})"></div>
                    <!--end::Aside Bottom-->
                </div>
                <!--begin::Aside-->
                <!--begin::Content-->
                <div class="login-content flex-row-fluid d-flex flex-column justify-content-center position-relative overflow-hidden p-7 mx-auto">
                    <!--begin::Content body-->
                    <div class="d-flex flex-column-fluid flex-center">
                        <!--begin::Signup-->
                        <div class="login-form ">
                            <!--begin::Form-->
                            <form method="post" action="{{ route('register.perform') }}">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                @include('layouts.partials.messages')
                                @if (count($errors) > 0)
                                    <div class="alert alert-custom alert-light-danger fade show mb-5" role="alert">
                                        <div class="alert-icon"><i class="flaticon-warning"></i></div>
                                        <div class="alert-text">    
                                            <strong>Whoops!</strong> There were some problems with your input.<br>
                                        <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}!</li>
                                        @endforeach
                                        </ul>
                                        </div>
                                        <div class="alert-close">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true"><i class="ki ki-close"></i></span>
                                            </button>
                                        </div>
                                    </div>
                                @endif
                                <!--begin::Title-->
                                <div class="pb-13 pt-lg-0 pt-5">
                                    <h3 class="font-weight-bolder text-dark font-size-h4 font-size-h1-lg">Sign Up</h3>
                                    <p class="text-muted font-weight-bold font-size-h4">Enter your details to create your account</p>
                                    <span class="text-muted font-weight-bold font-size-h4">Already a member?
                                    <a href="{{ route('login.perform') }}" class="text-primary font-weight-bolder">Sign In</a></span>
                                </div>
                                <!--end::Title-->
                                <!--begin::Form group-->
                                <div class="form-group">
                                    <input class="form-control form-control-solid h-auto py-6 px-6 rounded-lg font-size-h6" type="text" name="username" value="{{ old('username') }}" placeholder="Username" required="required" autocomplete="off" />
                                    @if ($errors->has('username'))
                                        <span class="text-danger text-left">{{ $errors->first('username') }}</span>
                                    @endif
                                </div>
                                <!--end::Form group-->
                                <!--begin::Form group-->
                                <div class="form-group">
                                    <input class="form-control form-control-solid h-auto py-6 px-6 rounded-lg font-size-h6" type="email" name="email" value="{{ old('email') }}" placeholder="name@example.com" required="required" autocomplete="off" />
                                    @if ($errors->has('email'))
                                        <span class="text-danger text-left">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                                <!--end::Form group-->
                                <!--begin::Form group-->
                                <div class="form-group">
                                    <input class="form-control form-control-solid h-auto py-6 px-6 rounded-lg font-size-h6" type="password" name="password" value="{{ old('password') }}" placeholder="Password" required="required" autocomplete="off" />
                                    @if ($errors->has('password'))
                                        <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                                    @endif
                                </div>
                                <!--end::Form group-->
                                <!--begin::Form group-->
                                <div class="form-group">
                                    <input class="form-control form-control-solid h-auto py-6 px-6 rounded-lg font-size-h6" type="password" name="password_confirmation" value="{{ old('password_confirmation') }}" placeholder="Confirm Password" required="required" autocomplete="off" />
                                    @if ($errors->has('password_confirmation'))
                                        <span class="text-danger text-left">{{ $errors->first('password_confirmation') }}</span>
                                    @endif
                                </div>
                                <!--end::Form group-->
                                <!--begin::Form group-->
                                <div class="form-group">
                                    <label class="checkbox mb-0">
                                        <input type="checkbox" name="agree" />
                                        <span></span>
                                        <div class="ml-2">I Agree the
                                        <a href="#">terms and conditions</a>.</div>
                                    </label>
                                </div>
                                <!--end::Form group-->
                                <!--begin::Form group-->
                                <div class="form-group d-flex flex-wrap pb-lg-0 pb-3">
                                    <button type="submit" class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-4">Submit</button>
                                </div>
                                <!--end::Form group-->
                            </form>
                            <!--end::Form-->
                        </div>
                        <!--end::Signup-->
                    </div>
                    <!--end::Content body-->
                    <!--begin::Content footer-->
                    <div class="d-flex justify-content-lg-start justify-content-center align-items-end py-7 py-lg-0">
                        <a href="#" class="text-primary font-weight-bolder font-size-lg">Terms</a>
                        <a href="#" class="text-primary ml-5 font-weight-bolder font-size-lg">Plans</a>
                        <a href="#" class="text-primary ml-5 font-weight-bolder font-size-lg">Contact Us</a>
                    </div>
                    <!--end::Content footer-->
                </div>
                <!--end::Content-->
            </div>
            <!--end::Login-->
        </div>
        <!--end::Main-->
@endsection

<!--begin::Signup-->
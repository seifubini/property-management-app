@extends('layouts.form-master')

@section('content')
<div class="d-flex flex-column flex-column-fluid py-5 py-lg-10 gutter-b" id="kt_content">
    <div class="container">
        <!--begin::Notice-->
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
        <!--end::Notice-->
    </div>

    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <!--begin::Profile Change Password-->
            <div class="d-flex flex-row">
                <!--begin::Aside-->
                <div class="flex-row-auto offcanvas-mobile w-250px w-xxl-350px" id="kt_profile_aside">
                    <!--begin::Profile Card-->
                    <div class="card card-custom card-stretch">
                        <!--begin::Body-->
                        <div class="card-body pt-4">
                            <!--begin::User-->
                            <div class="d-flex align-items-center">
                                <div class="symbol symbol-60 symbol-xxl-100 mr-5 align-self-start align-self-xxl-center">
                                    <div class="symbol-label" style="background-image:url('assets/media/users/300_21.jpg')"></div>
                                    <i class="symbol-badge bg-success"></i>
                                </div>
                                <div>
                                    <a href="#" class="font-weight-bolder font-size-h5 text-dark-75 text-hover-primary">{{auth()->user()->name}}</a>
                                    <div class="text-muted">
                                        @foreach(auth()->user()->roles as $role)
                                            {{ $role->name }}
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <!--end::User-->
                            <!--begin::Contact-->
                            <div class="py-9">
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <span class="font-weight-bold mr-2">Email:</span>
                                    <a href="#" class="text-muted text-hover-primary">{{auth()->user()->email}}</a>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <span class="font-weight-bold mr-2">Username:</span>
                                    <span class="text-muted">{{auth()->user()->username}}</span>
                                </div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <span class="font-weight-bold mr-2">Member Since:</span>
                                    <span class="text-muted">{{auth()->user()->created_at}}</span>
                                </div>
                            </div>
                            <!--end::Contact-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Profile Card-->
                </div>
                <!--end::Aside-->
                <!--begin::Content-->
                <div class="flex-row-fluid ml-lg-8">
                    <!--begin::Card-->
                    <div class="card card-custom">
                        <!--begin::Header-->
                        <div class="card-header py-3">
                            <div class="card-title align-items-start flex-column">
                                <h3 class="card-label font-weight-bolder text-dark">Change Password</h3>
                                <span class="text-muted font-weight-bold font-size-sm mt-1">Change your account password</span>
                            </div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Form-->
                        <form class="form" method="POST" action="{{ route('accounts.update', auth()->user()->id) }}" 
                            enctype="multipart/form-data">
                            <div class="card-body">
                                @csrf
                                @method('patch')
                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label text-alert">New Password</label>
                                    <div class="col-lg-9 col-xl-6">
                                        <input type="password" class="form-control form-control-lg form-control-solid" 
                                            name="password" placeholder="New password" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-xl-3 col-lg-3 col-form-label text-alert">Verify Password</label>
                                    <div class="col-lg-9 col-xl-6">
                                        <input type="password" class="form-control form-control-lg form-control-solid" 
                                            name="password_confirmation" placeholder="Verify password" />
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary mr-2">Update Changes</button>
                                    <button type="reset" class="btn btn-secondary">Cancel</button>
                            </div>
                            </div>
                        </form>
                        <!--end::Form-->
                    </div>
                </div>
                <!--end::Content-->
            </div>
            <!--end::Profile Change Password-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->

</div>

@endsection
@extends('layouts.form-master')

@section('content')
<div class="d-flex flex-column-fluid py-5 py-lg-10 gutter-b">
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
    <div class="row">
        <div class="col-lg-12">
            <!-- begin crad -->
            <div class="card card-custom gutter-b example example-compact">
                <div class="card-header">
                    <h3 class="card-title">Add New User</h3>
                </div>
                <!--begin::Form-->
                <form class="form" method="POST" action="{{ route('users.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group row">
                            <div class="col-lg-6">
                                <label>Name:</label>
                                <input type="text" class="form-control" name="name" placeholder="Enter full name" required>
                                <span class="form-text text-muted">Please enter user name</span>
                            </div>
                            <div class="col-lg-6">
                                <label>Username:</label>
                                <input type="text" class="form-control" name="username" placeholder="Enter username" required>
                                <span class="form-text text-muted">Please enter user username</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-6">
                                <label>Email:</label>
                                <input type="email" class="form-control" name="email" placeholder="Enter email address" required>
                                <span class="form-text text-muted">Please enter email address</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-lg-6">
                                <button type="submit" class="btn btn-primary mr-2">Save</button>
                                <button type="reset" class="btn btn-secondary">Cancel</button>
                            </div>
                        </div>
                    </div>
                </form>
                <!--end::Form-->
            </div>
            <!-- end card -->
        </div>
    </div>
</div>
</div>
@endsection
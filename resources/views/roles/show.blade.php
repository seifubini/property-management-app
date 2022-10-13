@extends('layouts.portal-master')

@section('content')
    <div class="content d-flex flex-column flex-column-fluid py-5 py-lg-10 gutter-b" id="kt_content">
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class="container">
                <!--begin::Notice-->
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                        </ul>
                    </div>
                @endif
                <!--end::Notice-->
                <!--begin::Card-->
                <div class="card card-custom">
                    <div class="card-header">
                        <div class="card-title">
                            <span class="card-icon">
                                <i class="flaticon2-favourite text-primary"></i>
                            </span>
                            <h3 class="card-label">{{ ucfirst($role->name) }} Role</h3>
                        </div>
                    </div>
                    <div class="card-body">

                        <label for="permissions" class="form-label">Permissions List</label>

                        <!--begin: Datatable-->
                        <table class="table table-bordered table-hover table-checkable" id="kt_datatable" style="margin-top: 13px !important">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Permission Name</th>
                                    <th>Guard</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($rolePermissions as $permission)
                                    <tr>
                                        <td>{{++$i}}</td>
                                        <td>{{ $permission->name }}</td>
                                        <td>{{ $permission->guard_name }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <!--end: Datatable-->
                        <div class="card-footer">
                            <a href="{{ route('roles.edit', $role->id) }}">
                            <button type="button" class="btn btn-primary mr-2">
                                Edit
                            </button>
                            </a>
                           <a href="{{ route('roles.index') }}" >
                            <button type="button" class="btn btn-secondary">
                                Back
                           </button>
                           </a>
                        </div>                       
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
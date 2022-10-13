@extends('layouts.portal-master')

@section('content')

    <!--begin::Content-->
    <div class="content d-flex flex-column flex-column-fluid py-5 py-lg-10 gutter-b" id="kt_content">
        <!--begin::Entry-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class="container">
                <!--begin::Notice-->
                @include('layouts.partials.messages')
                <!--end::Notice-->
                <!--begin::Card-->
                <div class="card card-custom col-lg-10 col-md-12 col-sm-12">
                    <div class="card-header">
                        <div class="card-title">
                            <span class="card-icon">
                                <i class="flaticon2-favourite text-primary"></i>
                            </span>
                            <h3 class="card-label">User Roles</h3>
                        </div>
                        <div class="card-toolbar">
                            <!--begin::Button-->
                            <a href="{{ route('roles.create') }}" class="btn btn-primary font-weight-bolder">
                            <i class="la la-plus"></i>Add New Role</a>
                            <!--end::Button-->
                        </div>
                    </div>
                    <div class="card-body">
                        <!--begin: Datatable-->
                        <table class="table table-bordered table-hover table-checkable" id="kt_datatable" style="margin-top: 13px !important">
                            <thead>
                                <tr>
                                    <th>Record ID</th>
                                    <th>Role Name</th>
                                    <th>View Record</th>
                                    <th>Edit Record</th>
                                    <th>Delete Record</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($roles as $key => $role)
                                <tr>
                                    <td>{{++$i}}</td>
                                    <td>{{ $role->name }}</td>
                                    <td>
                                        <a href="{{ route('roles.show', $role->id) }}" title="View Record" class="btn btn-info font-weight-bolder">
                                            <i class="la la-eye"></i> View
                                        </a>
                                    <td>
                                        <a href="{{ route('roles.edit', $role->id) }}" title="Edit Record" class="btn btn-primary font-weight-bolder">
                                            <i class="la la-edit"></i> Edit
                                        </a>
                                    </td>
                                    <td>
                                        <a href="javascript:;" title="Delete Record" class="btn btn-danger font-weight-bolder" 
                                            data-toggle="modal" data-target="#modal-danger{{$role->id}}">
                                            <i class="la la-trash"></i> Delete
                                        </a>
                                    </td>
                                </tr>
                                <!-- Modal Starts Here-->
                                <div class="modal fade" id="modal-danger{{$role->id}}">
                                    <div class="modal-dialog">
                                      <div class="modal-content bg-danger">
                                        <div class="modal-header">
                                          <h4 class="modal-title">Are you sure you want to delete <br> <strong>"{{ $role->name }}"</strong> ?</h4>
                                        </div>

                                        <form action="{{ route('roles.destroy',$role->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                        <div class="modal-footer justify-content-between">
                                          <button type="button" class="btn btn-outline-light" data-dismiss="modal">Cancel</button>
                                          <button type="submit" class="btn btn-outline-light">Delete</button>
                                        </div>
                                        </form>
                                      </div>
                                      <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>
                                <!-- /.modal -->
                                @endforeach
                            </tbody>
                        </table>
                        <!--end: Datatable-->
                    </div>
                </div>
                <!--end::Card-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Entry-->
    </div>
<!--end::Content-->
@endsection
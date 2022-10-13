@extends('layouts.form-master')

@section('content')
    <div class="content d-flex flex-column flex-column-fluid py-5 py-lg-10 gutter-b" id="kt_content">
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class="container">
                <!--begin::Notice-->
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
                <!--begin::Card-->
                <div class="card card-custom">
                    <div class="card-header">
                        <div class="card-title">
                            <span class="card-icon">
                                <i class="flaticon2-favourite text-primary"></i>
                            </span>
                            <h3 class="card-label">Add new role and assign permissions</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('roles.store') }}">
                            @csrf
                            <div class="form-group">
                                <label>Name <span class="form-label">*</span></label>
                                <input value="{{ old('name') }}" 
                                        type="text" class="form-control" name="name" placeholder="Enter name" required />
                           </div>

                            <label for="permissions" class="form-label">Assign Permissions</label>

                            <table class="table table-bordered table-hover table-checkable" style="margin-top: 13px !important">
                                <thead>
                                    <th>#</th>
                                    <th width="1%"><input type="checkbox" name="all_permission"></th>
                                    <th>Permission Name</th>
                                    <th>Guard</th> 
                                </thead>
                                <tbody>
                                @foreach($permissions as $permission)
                                    <tr>
                                        <td>{{++$i}}</td>
                                        <td width="1%">
                                            <input type="checkbox" 
                                            name="permission[{{ $permission->name }}]"
                                            value="{{ $permission->name }}"
                                            class='permission checkbox checkbox-outline'>
                                        </td>
                                        <td>{{ $permission->name }}</td>
                                        <td>{{ $permission->guard_name }}</td>
                                    </tr>
                                </tbody>
                                @endforeach
                            </table>

                            <div class="card-footer">
                               <button type="submit" class="btn btn-primary mr-2">Save changes</button>
                               <button type="reset" class="btn btn-secondary">Cancel</button>
                            </div>                        
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

@section('scripts')
    <script type="text/javascript">
        $(document).ready(function() {
            $('[name="all_permission"]').on('click', function() {

                if($(this).is(':checked')) {
                    $.each($('.permission'), function() {
                        $(this).prop('checked',true);
                    });
                } else {
                    $.each($('.permission'), function() {
                        $(this).prop('checked',false);
                    });
                }

            });
        });
    </script>
@endsection
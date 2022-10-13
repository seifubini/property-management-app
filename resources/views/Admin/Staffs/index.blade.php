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
							<h3 class="card-label">Staffs Listed</h3>
						</div>
						<div class="card-toolbar">
							<!--begin::Dropdown-->
							<div class="dropdown dropdown-inline mr-2">
								<button type="button" class="btn btn-light-primary font-weight-bolder dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="la la-download"></i>Export</button>
								<!--begin::Dropdown Menu-->
								<div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
									<ul class="nav flex-column nav-hover">
										<li class="nav-header font-weight-bolder text-uppercase text-primary pb-2">Choose an option:</li>
										<li class="nav-item">
											<a href="#" class="nav-link">
												<i class="nav-icon la la-print"></i>
												<span class="nav-text">Print</span>
											</a>
										</li>
										<li class="nav-item">
											<a href="#" class="nav-link">
												<i class="nav-icon la la-copy"></i>
												<span class="nav-text">Copy</span>
											</a>
										</li>
										<li class="nav-item">
											<a href="#" class="nav-link">
												<i class="nav-icon la la-file-excel-o"></i>
												<span class="nav-text">Excel</span>
											</a>
										</li>
										<li class="nav-item">
											<a href="#" class="nav-link">
												<i class="nav-icon la la-file-text-o"></i>
												<span class="nav-text">CSV</span>
											</a>
										</li>
										<li class="nav-item">
											<a href="#" class="nav-link">
												<i class="nav-icon la la-file-pdf-o"></i>
												<span class="nav-text">PDF</span>
											</a>
										</li>
									</ul>
								</div>
								<!--end::Dropdown Menu-->
							</div>
							<!--end::Dropdown-->
							<!--begin::Button-->
							<a href="{{ route('staffs.create') }}" class="btn btn-primary font-weight-bolder">
							<i class="la la-plus"></i>Add New Staff</a>
							<!--end::Button-->
						</div>
					</div>
					<div class="card-body">
						<!--begin: Datatable-->
						<table class="table table-bordered table-hover table-checkable" id="kt_datatable" style="margin-top: 13px !important">
							<thead>
								<tr>
									<th>#</th>
									<th>Name</th>
									<th>Email</th>
									<th>Phone Number</th>
									<th>Id Number</th>
									<th>Gender</th>
									<th>Position</th>
									<th>Picture</th>
									<th>Joining Date</th>
									<th>Status</th>
									<th>Actions</th>
								</tr>
							</thead>
							<tbody>
								@foreach($staffs as $staff)
								<tr>
									<td>{{++$i}}</td>
									<td>{{$staff->name}}</td>
									<td>{{$staff->email}}</td>
									<td>{{$staff->phone_number}}</td>
									<td>{{$staff->id_number}}</td>
									<td>{{$staff->gender}}</td>
									<td>{{$staff->position}}</td>
									<td>{{date_format(date_create($staff->joining_date), 'jS M Y')}}</td>
									<td>
										<img src="{!! url('images/staffs') !!}/{{$staff->picture}}" style="border-radius: 5;" 
										width="100" height="100">
									</td>
									<td>
										@if($staff->status == "Active")
										<span class="dtr-data">
											<span class="label label-lg font-weight-bold label-light-success label-inline">Active</span>
										</span>
										@elseif($staff->status == "InActive")
										<span class="dtr-data">
											<span class="label label-lg font-weight-bold label-light-danger label-inline">InActive</span>
										</span>
										@endif
									</td>
									<td>
										<a href="{{ route('staffs.edit', $staff->id) }}" title="Edit Record" class="btn btn-sm btn-clean btn-icon">
											<i class="la la-edit"></i>
										</a>
										<a href="javascript:;" class="btn btn-sm btn-clean btn-icon" title="Delete Record" 
											data-toggle="modal" data-target="#modal-danger{{$staff->id}}">
											<i class="la la-trash"></i>
										</a>
									</td>
								</tr>
								<!-- Modal Starts Here-->
								<div class="modal fade" id="modal-danger{{$staff->id}}">
									<div class="modal-dialog">
									  <div class="modal-content bg-danger">
									    <div class="modal-header">
									      <h4 class="modal-title">Are you sure you want to delete <br> <strong>"{{ $staff->name }}/ {{ $staff->position }}"</strong> ?</h4>
									    </div>

									    <form action="{{ route('staffs.destroy',$staff->id) }}" method="POST">
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
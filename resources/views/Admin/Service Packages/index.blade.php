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
							<h3 class="card-label">Services Listed</h3>
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
							<a href="javascript:;" class="btn btn-primary font-weight-bolder" title="Add Record" 
											data-toggle="modal" data-target="#ServiceModal">
							<i class="la la-plus"></i>Add New Service Package</a>
							<!--end::Button-->
						</div>
					</div>
					<div class="card-body">
						<!--begin: Datatable-->
						<table class="table table-bordered table-hover table-checkable" id="kt_datatable" style="margin-top: 13px !important">
							<thead>
								<tr>
									<th>#</th>
									<th>Package Name</th>
									<th>Package Code</th>
									<th>Created Date</th>
									<th>Status</th>
									<th>Actions</th>
								</tr>
							</thead>
							<tbody>
								@foreach($service_packages as $service_package)
								<tr>
									<td>{{++$i}}</td>
									<td>{{$service_package->package_name}}</td>
									<td>{{$service_package->package_code}}</td>
									<td>{{ date_format(date_create($service_package->created_at), 'jS M Y') }}</td>
									<td>
										@if($service_package->package_status == "Active")
										<span class="dtr-data">
											<span class="label label-lg font-weight-bold label-light-success label-inline">Active</span>
										</span>
										@elseif($service_package->package_status == "InActive")
										<span class="dtr-data">
											<span class="label label-lg font-weight-bold label-light-danger label-inline">InActive</span>
										</span>
										@endif
									<td>
										<a href="javascript:;" title="Edit Record" class="btn btn-sm btn-clean btn-icon" 
											title="Edit Record" data-toggle="modal" data-target="#EditServiceModal{{$service_package->id}}">
											<i class="la la-edit"></i>
										</a>
										<a href="javascript:;" class="btn btn-sm btn-clean btn-icon" title="Delete Record" 
											data-toggle="modal" data-target="#modal-danger{{$service_package->id}}">
											<i class="la la-trash"></i>
										</a>
									</td>
								</tr>

		<!-- Edit Service Package Modal-->
		<div class="modal fade" id="EditServiceModal{{$service_package->id}}" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
		    <div class="modal-dialog modal-lg" role="document">
		        <div class="modal-content">
		            <div class="modal-header">
		                <h5 class="modal-title" id="exampleModalLabel">Edit Services Package</h5>
		                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		                    <i aria-hidden="true" class="ki ki-close"></i>
		                </button>
		            </div>
		            <div class="modal-body">
		                <div class="row">
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
							<div class="col-lg-12">
								<!-- begin crad -->
								<div class="card card-custom gutter-b example example-compact">
									<!--begin::Form-->
									<div class="card-body">
									<form class="form" method="POST" action="{{ route('service_packages.update', $service_package->id) }}" enctype="multipart/form-data">
				                        @csrf
				                        @method('patch')
				                        <div class="form-group row">
											<div class="col-lg-6">
												<label>Package Name:</label>
												<input type="text" class="form-control" name="package_name" value="{{$service_package->package_name}}" required>
											</div>
											<div class="col-lg-6">
												<label>Select Services:</label>
												<br>
												<select class="input-group" name="service_id" id="exampleSelect3" required>
													@foreach($services as $service)
													<option value="{{$service->id}}">{{$service->service_name}}</option>
													@endforeach
											    </select>
											</div>
										</div>
										<div class="form-group row">
											<div class="col-lg-6">
												<label>Package Description:</label>
												<div class="input-group">
			    									<textarea class="form-control" name="package_description" id="exampleTextarea" 
			    										placeholder="Enter Package Description" rows="3" maxlength="500">{{$service_package->package_description}}</textarea>
												</div>
											</div>
											<div class="col-lg-6">
												<label>Package Status:</label>
												<select class="form-control" name="package_status" id="exampleSelect1" required>
													<option selected value="{{$service_package->package_status}}">{{$service_package->package_status}}</option>
													<option value="Active">Active</option>
													<option value="InActive">InActive</option>
											    </select>
											</div>
										</div>
										<div class="card-footer">
											<div class="col-lg-8">
												<button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
		            							<button type="submit" class="btn btn-primary font-weight-bold">Save changes</button>
											</div>
										</div>
				                    </form>
				                    </div>
								</div>
							</div>
						</div>
		            </div>
		        </div>
		    </div>
		</div>
		<!-- Modal End -->

		<!-- Delete Modal Starts Here-->
		<div class="modal fade" id="modal-danger{{$service_package->id}}">
			<div class="modal-dialog">
			  <div class="modal-content bg-danger">
			    <div class="modal-header">
			      <h4 class="modal-title">Are you sure you want to delete <br> <strong>"{{ $service_package->package_name }} - {{ $service_package->package_code }}"</strong> ?</h4>
			    </div>

			    <form action="{{ route('service_packages.destroy',$service_package->id) }}" method="POST">
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


<!-- New Service Package Modal-->
<div class="modal fade" id="ServiceModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New Services Package</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
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
					<div class="col-lg-12">
						<!-- begin crad -->
						<div class="card card-custom gutter-b example example-compact">
							<!--begin::Form-->
							<div class="card-body">
							<form class="form" method="POST" action="{{ route('service_packages.store') }}" enctype="multipart/form-data">
		                        @csrf
		                        <div class="form-group row">
									<div class="col-lg-6">
										<label>Package Name:</label>
										<input type="text" class="form-control" name="package_name" placeholder="Please Enter Package name" required>
									</div>
									<div class="col-lg-6">
										<label>Select Services:</label>
										<br>
										<select class="input-group" name="service_id" id="exampleSelect2" required>
											@foreach($services as $service)
											<option value="{{$service->id}}">{{$service->service_name}}</option>
											@endforeach
									    </select>
									</div>
								</div>
								<div class="form-group row">
									<div class="col-lg-6">
										<label>Package Description:</label>
										<div class="input-group">
	    									<textarea class="form-control" name="package_description" id="exampleTextarea" 
	    										placeholder="Enter Package Description" rows="3" maxlength="500"></textarea>
										</div>
									</div>
									<div class="col-lg-6">
										<label>Package Status:</label>
										<select class="form-control" name="package_status" id="exampleSelect1" required>
											<option selected disabled>Select Package Status</option>
											<option value="Active">Active</option>
											<option value="InActive">InActive</option>
									    </select>
									</div>
								</div>
								<div class="card-footer">
									<div class="col-lg-8">
										<button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
            							<button type="submit" class="btn btn-primary font-weight-bold">Save changes</button>
									</div>
								</div>
		                    </form>
		                    </div>
						</div>
					</div>
				</div>
            </div>
        </div>
    </div>
</div>
<!-- Modal End -->

@endsection
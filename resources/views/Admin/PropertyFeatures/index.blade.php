@extends('layouts.form-master')

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
							<h3 class="card-label">Property Feature Listed</h3>
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
											data-toggle="modal" data-target="#PropertyFeatureModal">
							<i class="la la-plus"></i>Add New Property Feature</a>
							<!--end::Button-->
						</div>
					</div>
					<div class="card-body">
						<!--begin: Datatable-->
						<table class="table table-bordered table-hover table-checkable" id="kt_datatable" style="margin-top: 13px !important">
							<thead>
								<tr>
									<th>#</th>
									<th>Property Feature Name</th>
									<th>Property Feature Icon</th>
									<th>Status</th>
									<th>Actions</th>
								</tr>
							</thead>
							<tbody>
								@foreach($property_features as $property_feature)
								<tr>
									<td>{{++$i}}</td>
									<td>{{$property_feature->name}}</td>
									<td><i class="{{$property_feature->icon}}"></i>  {{$property_feature->icon}}</td>
									<td>
										@if($property_feature->published == "Yes")
										<span class="dtr-data">
											<span class="label label-lg font-weight-bold label-light-success label-inline">Published</span>
										</span>
										@elseif($property_feature->published == "No")
										<span class="dtr-data">
											<span class="label label-lg font-weight-bold label-light-danger label-inline">Unpublished</span>
										</span>
										@endif
									<td>
										<a href="javascript:;" title="Edit Record" class="btn btn-sm btn-clean btn-icon" 
											title="Edit Record" data-toggle="modal" data-target="#EditPropertyFeatureModal{{$property_feature->id}}">
											<i class="la la-edit"></i>
										</a>
										<a href="javascript:;" class="btn btn-sm btn-clean btn-icon" title="Delete Record" 
											data-toggle="modal" data-target="#modal-danger{{$property_feature->id}}">
											<i class="la la-trash"></i>
										</a>
									</td>
								</tr>

				<!-- Edit Property Feature Modal-->
				<div class="modal fade" id="EditPropertyFeatureModal{{$property_feature->id}}" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
				    <div class="modal-dialog modal-lg" role="document">
				        <div class="modal-content">
				            <div class="modal-header">
				                <h5 class="modal-title" id="exampleModalLabel">Add New Property Feature</h5>
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
											<form class="form" method="POST" action="{{ route('property_features.update', $property_feature->id) }}" enctype="multipart/form-data">
						                        @csrf
						                        @method('patch')
						                        <div class="form-group row">
													<div class="col-lg-6">
														<label>Feature Name:</label>
														<input type="text" class="form-control" name="name" value="{{$property_feature->name}}" required>
													</div>
													<div class="col-lg-6">
								                        <label>Select Icon</label>
								                        <div class="input-group mb-3">
								            <span class="input-group-text" id="basic-addon1">Icon</span>
								            <!-- Create An Input Field For The Icon Picker -->
								            <input type="text" class="form-control iconpicker" name="icon" placeholder="Icon Picker"
								            	value="{{$property_feature->icon}}" aria-label="Icone Picker" 
								            	aria-describedby="basic-addon1" required>
								        </div>
								                    </div>
												</div>
												<div class="form-group row">
													<div class="col-lg-6">
														<label>Published:</label>
														<select class="form-control" name="published" id="exampleSelect1" required>
															<option selected value="{{$property_feature->published}}">{{$property_feature->published}}</option>
															<option value="Yes">Yes</option>
															<option value="No">No</option>
													    </select>
													</div>
												</div>
												<div class="card-footer">
													<div class="col-lg-8">
														<button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
				            							<button type="submit" class="btn btn-primary font-weight-bold">Update changes</button>
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
							<div class="modal fade" id="modal-danger{{$property_feature->id}}">
								<div class="modal-dialog">
								  <div class="modal-content bg-danger">
								    <div class="modal-header">
								      <h4 class="modal-title">Are you sure you want to delete <br> <strong>"{{ $property_feature->name }}"</strong> ?</h4>
								    </div>

								    <form action="{{ route('property_features.destroy',$property_feature->id) }}" method="POST">
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

<!-- New Property Feature Modal-->
<div class="modal fade" id="PropertyFeatureModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New Property Feature</h5>
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
							<form class="form" method="POST" action="{{ route('property_features.store') }}" enctype="multipart/form-data">
		                        @csrf
		                        <div class="form-group row">
									<div class="col-lg-6">
										<label>Feature Name:</label>
										<input type="text" class="form-control" name="name" placeholder="Please Enter Feature name" required>
									</div>
									<div class="col-lg-6">
				                        <label>Select Icon</label>
				                        <div class="input-group">
								            <span class="input-group-text" id="basic-addon1">Icon</span>
								            <!-- Create An Input Field For The Icon Picker -->
								            <input type="text" class="form-control iconpicker" name="icon" placeholder="Icon Picker" 
								            	aria-label="Icone Picker" aria-describedby="basic-addon1" required>
								        </div>
				                    </div>
								</div>
								<div class="form-group row">
									<div class="col-lg-6">
										<label>Published:</label>
										<select class="form-control" name="published" id="exampleSelect1" required>
											<option selected disabled>Select Status</option>
											<option value="Yes">Yes</option>
											<option value="No">No</option>
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
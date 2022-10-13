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
							<h3 class="card-label">Cases Listed</h3>
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
											data-toggle="modal" data-target="#CaseModal">
							<i class="la la-plus"></i>Add New Case</a>
							<!--end::Button-->
						</div>
					</div>
					<div class="card-body">
						<!--begin: Datatable-->
						<table class="table table-bordered table-hover table-checkable" id="kt_datatable" style="margin-top: 13px !important">
							<thead>
								<tr>
									<th>#</th>
									<th>Case Name</th>
									<th>Case ID</th>
									<th>Client Name</th>
									<th>Property ID</th>
									<th>Contract ID</th>
									<th>Status</th>
									<th>Actions</th>
								</tr>
							</thead>
							<tbody>
								@foreach($cases as $case)
								<tr>
									<td>{{++$i}}</td>
									<td>{{$case->case_name}}</td>
									<td>{{$case->case_id}}</td>
									<td>{{$case->customer_name}}</td>
									<td>{{$case->name}}</td>
									<td>{{$case->contract_id}}</td>
									<td>
										@if($case->case_status == "Active")
										<span class="dtr-data">
											<span class="label label-lg font-weight-bold label-light-success label-inline">Active</span>
										</span>
										@elseif($case->case_status == "InActive")
										<span class="dtr-data">
											<span class="label label-lg font-weight-bold label-light-danger label-inline">InActive</span>
										</span>
										@endif
									</td>
									<td>
										@role('vendor')
										<a href="javascript:;" title="Show Record" class="btn btn-sm btn-clean btn-icon" 
											data-toggle="modal" data-target="#showCaseModal{{$case->id}}">
											<i class="la la-eye"></i>
										</a>
										@endrole
										@role('property manager')
										<a href="javascript:;" title="Edit Record" class="btn btn-sm btn-clean btn-icon" 
											data-toggle="modal" data-target="#EditCaseModal{{$case->id}}">
											<i class="la la-edit"></i>
										</a>
										<a href="javascript:;" class="btn btn-sm btn-clean btn-icon" title="Delete Record" 
											data-toggle="modal" data-target="#modal-danger{{$case->id}}">
											<i class="la la-trash"></i>
										</a>
										@endrole
									</td>
								</tr>

<!-- Show Case Modal-->
<div class="modal fade" id="showCaseModal{{$case->id}}" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Case - {{$case->case_id}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
					<div class="col-lg-12">
						<!-- begin crad -->
						<div class="card card-custom gutter-b example example-compact">
							<!--begin::Form-->
							<div class="card-body">
								<div class="d-flex">
									<!--begin: Pic-->
									<div class="flex-shrink-0 mr-7 mt-lg-0 mt-3">
										<div class="symbol symbol-50 symbol-lg-120">
											<img alt="Pic" src="{!! url('images/properties') !!}/{{$case->images}}">
										</div>
										<div class="symbol symbol-50 symbol-lg-120 symbol-primary d-none">
											<span class="font-size-h3 symbol-label font-weight-boldest">JM</span>
										</div>
									</div>
									<!--end: Pic-->
									<!--begin: Info-->
									<div class="flex-grow-1">
										<!--begin: Title-->
										<div class="d-flex align-items-center justify-content-between flex-wrap">
											<div class="mr-3">
												<!--begin::Name-->
												<a href="#" class="d-flex align-items-center text-dark text-hover-primary font-size-h5 font-weight-bold mr-3">{{$case->name}} - {{$case->unique_id}}
												<i class="flaticon2-correct text-success icon-md ml-2"></i></a>
												<!--end::Name-->
												<!--begin::Contacts-->
												<div class="d-flex flex-wrap my-2">
													<a href="#" class="text-muted text-hover-primary font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2">
													<span class="svg-icon svg-icon-md svg-icon-gray-500 mr-1">
														<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Mail-notification.svg-->
														<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
															<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																<rect x="0" y="0" width="24" height="24"></rect>
																<path d="M21,12.0829584 C20.6747915,12.0283988 20.3407122,12 20,12 C16.6862915,12 14,14.6862915 14,18 C14,18.3407122 14.0283988,18.6747915 14.0829584,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,8 C3,6.8954305 3.8954305,6 5,6 L19,6 C20.1045695,6 21,6.8954305 21,8 L21,12.0829584 Z M18.1444251,7.83964668 L12,11.1481833 L5.85557487,7.83964668 C5.4908718,7.6432681 5.03602525,7.77972206 4.83964668,8.14442513 C4.6432681,8.5091282 4.77972206,8.96397475 5.14442513,9.16035332 L11.6444251,12.6603533 C11.8664074,12.7798822 12.1335926,12.7798822 12.3555749,12.6603533 L18.8555749,9.16035332 C19.2202779,8.96397475 19.3567319,8.5091282 19.1603533,8.14442513 C18.9639747,7.77972206 18.5091282,7.6432681 18.1444251,7.83964668 Z" fill="#000000"></path>
																<circle fill="#000000" opacity="0.3" cx="19.5" cy="17.5" r="2.5"></circle>
															</g>
														</svg>
														<!--end::Svg Icon-->
													</span>{{$case->category}}</a>
													<a href="#" class="text-muted text-hover-primary font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2">
													<span class="svg-icon svg-icon-md svg-icon-gray-500 mr-1">
														<!--begin::Svg Icon | path:assets/media/svg/icons/General/Lock.svg-->
														<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
															<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																<mask fill="white">
																	<use xlink:href="#path-1"></use>
																</mask>
																<g></g>
																<path d="M7,10 L7,8 C7,5.23857625 9.23857625,3 12,3 C14.7614237,3 17,5.23857625 17,8 L17,10 L18,10 C19.1045695,10 20,10.8954305 20,12 L20,18 C20,19.1045695 19.1045695,20 18,20 L6,20 C4.8954305,20 4,19.1045695 4,18 L4,12 C4,10.8954305 4.8954305,10 6,10 L7,10 Z M12,5 C10.3431458,5 9,6.34314575 9,8 L9,10 L15,10 L15,8 C15,6.34314575 13.6568542,5 12,5 Z" fill="#000000"></path>
															</g>
														</svg>
														<!--end::Svg Icon-->
													</span>{{$case->status}}</a>
												</div>
												<!--end::Contacts-->
											</div>
										</div>
										<!--end: Title-->
										<!--begin: Content-->
										<div class="d-flex align-items-center flex-wrap justify-content-between">
											<div class="flex-grow-1 font-weight-bold text-dark-50 py-5 py-lg-2 mr-5">{{$case->description}}
											</div>
										</div>
										<div class="d-flex align-items-center flex-wrap justify-content-between">
											<div class="flex-grow-1 font-weight-bold text-dark-50 py-5 py-lg-2 mr-5">
												Location: {{$case->country}}, {{$case->city}}, {{$case->Address}}/ {{$case->zone}}
											</div>
											<div class="flex-grow-1 font-weight-bold text-dark-50 py-5 py-lg-2 mr-5">
												Case Description: {{$case->case_description}}
											</div>
										</div>
										<!--end: Content-->
									</div>
									<!--end: Info-->
								</div>
								<br>
								<div class="card-footer">
									<div class="col-lg-8">
										<button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
										<a href="{{ route('quotations.submit_quotation', $case->id) }}" class="text-muted text-hover-primary font-weight-bold">
            							<button type="button" class="btn btn-primary font-weight-bold">Submit Bid</button>
            							</a>
									</div>
								</div>
		                    </div>
						</div>
					</div>
				</div>
            </div>
        </div>
    </div>
</div>
<!-- Modal End -->

<!-- Edit Case Modal-->
<div class="modal fade" id="EditCaseModal{{$case->id}}" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Case - {{$case->case_id}}</h5>
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
							<form class="form" method="POST" action="{{ route('cases.update', $case->id) }}" enctype="multipart/form-data">
		                        @csrf
		                        @method('patch')
		                        <div class="form-group row">
									<div class="col-lg-6">
										<label>Case Name:</label>
										<input type="text" class="form-control" name="case_name" value="{{$case->case_name}}" required>
										<input type="hidden" name="case_id" value="{{$case->id}}" required>
									</div>
									<div class="col-lg-6">
										<label>Client:</label>
										<select class="form-control" name="client_id" id="exampleSelect1" required>
											<option selected disabled>Select Client</option>
											@foreach($customers as $customer)
											@if($customer->id == $case->client_id)
											<option value="{{$customer->id}}" selected>{{$customer->name}}</option>
											@else
											<option value="{{$customer->id}}">{{$customer->name}}</option>
											@endif
											@endforeach
									    </select>
									</div>
								</div>
								<div class="form-group row">
									<div class="col-lg-6">
										<label>Property:</label>
										<select class="form-control" name="property_id" id="exampleSelect1" readonly required>
											<option selected disabled>Select Property</option>
											@foreach($properties as $property)
											@if($property->id == $case->property_id)
											<option value="{{$property->id}}" selected>{{$property->name}}/ {{$property->unique_id}}</option>
											@else
											<option value="{{$property->id}}">{{$property->name}}/ {{$property->unique_id}}</option>
											@endif
											@endforeach
									    </select>
									</div>
									<div class="col-lg-6">
										<label>Service:</label>
										<select class="form-control" name="service_id" id="exampleSelect1" required>
											<option selected disabled>Select Service</option>
											@foreach($services as $service)
											@if($service->id == $case->service_id)
											<option value="{{$service->id}}" selected>{{$service->service_name}}</option>
											@else
											<option value="{{$service->id}}">{{$service->service_name}}</option>
											@endif
											@endforeach
									    </select>
									</div>
								</div>
								<div class="form-group row">
									<div class="col-lg-6">
										<label>Case Description:</label>
										<div class="input-group">
	    									<textarea class="form-control" name="case_description" id="exampleTextarea" 
	    										placeholder="Enter Case Description" rows="3" maxlength="500">{{$case->case_description}}</textarea>
										</div>
									</div>
									<div class="col-lg-6">
										<label>Case Status:</label>
										<select class="form-control" name="case_status" id="exampleSelect1" required>
											<option selected value="{{$case->case_status}}">{{$case->case_status}}</option>
											<option value="Active">Active</option>
											<option value="InActive">InActive</option>
									    </select>
									</div>
								</div>
								<div class="form-group row">
									<div class="col-lg-6">
										<label>Select Vendors to bid:</label>
										<select class="form-control" name="vendor_id[]" multiple id="exampleSelect1">
											<option value="">Select Vendors</option>
											@foreach($vendors as $vendor)
											<option value="{{$vendor->user_id}}">{{$vendor->name}}/ {{$vendor->email}}</option>
											@endforeach
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
								<div class="modal fade" id="modal-danger{{$case->id}}">
									<div class="modal-dialog">
									  <div class="modal-content bg-danger">
									    <div class="modal-header">
									      <h4 class="modal-title">Are you sure you want to delete <br> <strong>"{{ $case->case_name }} - {{$case->case_id}}"</strong> ?</h4>

									    </div>

									    <form action="{{ route('cases.destroy',$case->id) }}" method="POST">
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

<!-- New Case Modal-->
<div class="modal fade" id="CaseModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New Case</h5>
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
							<form class="form" method="POST" action="{{ route('cases.store') }}" enctype="multipart/form-data">
		                        @csrf
		                        <div class="form-group row">
									<div class="col-lg-6">
										<label>Case Name:</label>
										<input type="text" class="form-control" name="case_name" placeholder="Please Enter Service name" required>
									</div>
									<div class="col-lg-6">
										<label>Client:</label>
										<select class="form-control" name="client_id" id="exampleSelect1" required>
											<option selected disabled>Select Client</option>
											@foreach($customers as $customer)
											<option value="{{$customer->id}}">{{$customer->name}}</option>
											@endforeach
									    </select>
									</div>
								</div>
								<div class="form-group row">
									<div class="col-lg-6">
										<label>Property:</label>
										<select class="form-control" name="property_id" id="exampleSelect1" required>
											<option selected disabled>Select Property</option>
											@foreach($properties as $property)
											<option value="{{$property->id}}">{{$property->name}}/ {{$property->unique_id}}</option>
											@endforeach
									    </select>
									</div>
									<div class="col-lg-6">
										<label>Service:</label>
										<select class="form-control" name="service_id" id="exampleSelect1" required>
											<option selected disabled>Select Service</option>
											@foreach($services as $service)
											<option value="{{$service->id}}">{{$service->service_name}}</option>
											@endforeach
									    </select>
									</div>
								</div>
								<div class="form-group row">
									<div class="col-lg-6">
										<label>Case Description:</label>
										<div class="input-group">
	    									<textarea class="form-control" name="case_description" id="exampleTextarea" 
	    										placeholder="Enter Case Description" rows="3" maxlength="500"></textarea>
										</div>
									</div>
									<div class="col-lg-6">
										<label>Case Status:</label>
										<select class="form-control" name="case_status" id="exampleSelect1" required>
											<option selected disabled>Select Service Status</option>
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
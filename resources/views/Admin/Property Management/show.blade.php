@extends('layouts.form-master')

@section('content')

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

<div class="subheader py-2 py-lg-4 subheader-transparent" id="kt_subheader">
	<div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
		<!--begin::Details-->
		<div class="d-flex align-items-center flex-wrap mr-2">
			<!--begin::Title-->
			<h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Property - {{$property->unique_id}}</h5>
			<!--end::Title-->
			<!--begin::Separator-->
			<div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-5 bg-gray-200"></div>
			<!--end::Separator-->
		</div>
		<!--end::Details-->
		<!--begin::Toolbar-->
		<div class="d-flex align-items-center">
			<!--begin::Button-->
			@role('property manager')
			<a href="{{ url('/cases') }}" class="btn btn-primary font-weight-bold ml-2" title="View Record">
				<i class="la la-eye"></i>View Cases</a>
			@endrole
			@role('tenant')
			<a href="javascript:;" class="btn btn-primary font-weight-bold ml-2" title="View Record" 
				data-toggle="modal" data-target="#ViewCaseModal"><i class="la la-eye"></i>View Cases</a>
			<a href="javascript:;" class="btn btn-primary font-weight-bold ml-2" title="Add Record" 
				data-toggle="modal" data-target="#CaseModal"><i class="la la-plus"></i>Add Case</a>
			@endrole
			<!--end::Button-->
			@role('administrator')
			<!--begin::Button-->
			<a href="{{ route('properties.edit', $property->id) }}" class="btn btn-light-primary font-weight-bold ml-2">Edit Property</a>
			<!--end::Button-->
			@endrole
		</div>
		<!--end::Toolbar-->
	</div>
</div>

<div class="d-flex flex-column-fluid">
	<!--begin::Container-->
	<div class="container-fluid">
		<!--begin::Card-->
		<div class="card card-custom gutter-b">
			<div class="card-body">
				<div class="d-flex">
					<!--begin: Pic-->
					<div class="flex-shrink-0 mr-7 mt-lg-0 mt-3">
						<div class="symbol symbol-50 symbol-lg-120">
							<img alt="Pic" src="{!! url('images/properties') !!}/{{$property->images}}">
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
								<a href="#" class="d-flex align-items-center text-dark text-hover-primary font-size-h5 font-weight-bold mr-3">{{$property->name}}
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
									</span>{{$property->category}}</a>
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
									</span>{{$property->status}}</a>
									<a href="#" class="text-muted text-hover-primary font-weight-bold">
									<span class="svg-icon svg-icon-md svg-icon-gray-500 mr-1">
										<!--begin::Svg Icon | path:assets/media/svg/icons/Map/Marker2.svg-->
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<rect x="0" y="0" width="24" height="24"></rect>
												<path d="M9.82829464,16.6565893 C7.02541569,15.7427556 5,13.1079084 5,10 C5,6.13400675 8.13400675,3 12,3 C15.8659932,3 19,6.13400675 19,10 C19,13.1079084 16.9745843,15.7427556 14.1717054,16.6565893 L12,21 L9.82829464,16.6565893 Z M12,12 C13.1045695,12 14,11.1045695 14,10 C14,8.8954305 13.1045695,8 12,8 C10.8954305,8 10,8.8954305 10,10 C10,11.1045695 10.8954305,12 12,12 Z" fill="#000000"></path>
											</g>
										</svg>
										<!--end::Svg Icon-->
									</span>{{$agent_name}}</a>
								</div>
								<!--end::Contacts-->
							</div>
						</div>
						<!--end: Title-->
						<!--begin: Content-->
						<div class="d-flex align-items-center flex-wrap justify-content-between">
							<div class="flex-grow-1 font-weight-bold text-dark-50 py-5 py-lg-2 mr-5">{{$property->description}}
							</div>
							<div class="d-flex flex-wrap align-items-center py-2">
								<div class="d-flex align-items-center mr-10">
									<div class="mr-6">
										<div class="font-weight-bold mb-2">Price</div>
										<span class="btn btn-sm btn-text btn-light-primary text-uppercase font-weight-bold">{{ $property->Price }} {{ $property->currency }}</span>
									</div>
									<div class="">
										<div class="font-weight-bold mb-2">Rent Period</div>
										<span class="btn btn-sm btn-text btn-light-danger text-uppercase font-weight-bold">{{$property->rent_period}}</span>
									</div>
								</div>
								<!-- 
								<div class="flex-grow-1 flex-shrink-0 w-150px w-xl-300px mt-4 mt-sm-0">
									<span class="font-weight-bold">Progress</span>
									<div class="progress progress-xs mt-2 mb-2">
										<div class="progress-bar bg-success" role="progressbar" style="width: 63%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<span class="font-weight-bolder text-dark">78%</span>
								</div> -->
							</div>
						</div>
						<!--end: Content-->
					</div>
					<!--end: Info-->
					<div class="flex-shrink-0 mr-3 mt-lg-0 mt-2">
						<div class="mapouter"><div class="gmap_canvas"><iframe width="300" height="200" id="gmap_canvas" src="https://maps.google.com/maps?q=2880%20Broadway,%20New%20York&t=&z=11&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-a.com"></a><br><style>.mapouter{position:relative;text-align:right;height:200px;width:300px;}</style><a href="https://www.embedgooglemap.net">google maps widget</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:200px;width:300px;}</style></div></div>
						<div class="flex-grow-1 font-weight-bold text-dark-50 py-5 py-lg-2 mr-5">
							<a href="#" class="text-muted text-hover-primary font-weight-bold">
									<span class="svg-icon svg-icon-md svg-icon-gray-500 mr-1">
										<!--begin::Svg Icon | path:assets/media/svg/icons/Map/Marker2.svg-->
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<rect x="0" y="0" width="24" height="24"></rect>
												<path d="M9.82829464,16.6565893 C7.02541569,15.7427556 5,13.1079084 5,10 C5,6.13400675 8.13400675,3 12,3 C15.8659932,3 19,6.13400675 19,10 C19,13.1079084 16.9745843,15.7427556 14.1717054,16.6565893 L12,21 L9.82829464,16.6565893 Z M12,12 C13.1045695,12 14,11.1045695 14,10 C14,8.8954305 13.1045695,8 12,8 C10.8954305,8 10,8.8954305 10,10 C10,11.1045695 10.8954305,12 12,12 Z" fill="#000000"></path>
											</g>
										</svg>
										<!--end::Svg Icon-->
									</span>{{$property->country}}, {{$property->city}}, {{$property->Address}}/ {{$property->zone}}</a>
							</div>
					</div>
					<div class="flex-shrink-0 mr-3 mt-lg-0 mt-2">
						<video width="300" height="200" controls>
						  <source src="{{$property->video_url}}" type="video/mp4">
							Your browser does not support the video tag.
						</video>
						<div class="flex-grow-1 font-weight-bold text-dark-50 py-5 py-lg-2 mr-5">{{$property->video_description}}
							</div>
					</div>
					
				</div>
				<div class="separator separator-solid my-7"></div>
				<!--begin: Items-->
				<div class="d-flex align-items-center flex-wrap">
					<!--begin: Item-->
					<div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
						<span class="mr-4">
							<i class="flaticon-piggy-bank icon-2x text-muted font-weight-bold"></i>
						</span>
						<div class="d-flex flex-column text-dark-75">
							<span class="font-weight-bolder font-size-sm">Property Size</span>
							<span class="font-weight-bolder font-size-h5">
							<span class="text-dark-50 font-weight-bold">{{$property->property_size}}</span>
						</div>
					</div>
					<!--end: Item-->
					<!--begin: Item-->
					<div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
						<span class="mr-4">
							<i class="flaticon-confetti icon-2x text-muted font-weight-bold"></i>
						</span>
						<div class="d-flex flex-column text-dark-75">
							<span class="font-weight-bolder font-size-sm">Bedrooms</span>
							<span class="font-weight-bolder font-size-h5">
							<span class="text-dark-50 font-weight-bold">{{$property->bed_rooms}}</span>
						</div>
					</div>
					<!--end: Item-->
					<!--begin: Item-->
					<div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
						<span class="mr-4">
							<i class="flaticon-pie-chart icon-2x text-muted font-weight-bold"></i>
						</span>
						<div class="d-flex flex-column text-dark-75">
							<span class="font-weight-bolder font-size-sm">Bathrooms</span>
							<span class="font-weight-bolder font-size-h5">
							<span class="text-dark-50 font-weight-bold">{{$property->baths}}</span>
						</div>
					</div>
					<!--end: Item-->
					<!--begin: Item-->
					<div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
						<span class="mr-4">
							<i class="flaticon-pie-chart icon-2x text-muted font-weight-bold"></i>
						</span>
						<div class="d-flex flex-column text-dark-75">
							<span class="font-weight-bolder font-size-sm">Garages</span>
							<span class="font-weight-bolder font-size-h5">
							<span class="text-dark-50 font-weight-bold">{{$property->garages}}</span>
						</div>
					</div>
					<!--end: Item-->
					<!--begin: Item-->
					<div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
						<span class="mr-4">
							<i class="flaticon-pie-chart icon-2x text-muted font-weight-bold"></i>
						</span>
						<div class="d-flex flex-column text-dark-75">
							<span class="font-weight-bolder font-size-sm">Floors</span>
							<span class="font-weight-bolder font-size-h5">
							<span class="text-dark-50 font-weight-bold">{{$property->floors}}</span>
						</div>
					</div>
					<!--end: Item-->
					<!--begin: Item-->
					<div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
						<span class="mr-4">
							<i class="flaticon-file-2 icon-2x text-muted font-weight-bold"></i>
						</span>
						<div class="d-flex flex-column flex-lg-fill">
							<span class="text-dark-75 font-weight-bolder font-size-sm">73 Tasks</span>
							<a href="#" class="text-primary font-weight-bolder">View</a>
						</div>
					</div>
					<!--end: Item-->
					<!--begin: Item-->
					<div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
						<span class="mr-4">
							<i class="flaticon-chat-1 icon-2x text-muted font-weight-bold"></i>
						</span>
						<div class="d-flex flex-column">
							<span class="text-dark-75 font-weight-bolder font-size-sm">648 Comments</span>
							<a href="#" class="text-primary font-weight-bolder">View</a>
						</div>
					</div>
					<!--end: Item-->
				</div>
				<!--begin: Items-->
			</div>
		</div>
		<!--end::Card-->
		<!--begin::Row-->
		<div class="row">
			<div class="col-lg-12">
				<!--begin::Advance Table Widget 3-->
				<div class="card card-custom card-stretch gutter-b">
					<!--begin::Header-->
					<div class="card-header border-0 py-5">
						<h3 class="card-title align-items-start flex-column">
							<span class="card-label font-weight-bolder text-dark">Tenants Contract List</span>
						</h3>
						@role('administrator')
						<div class="card-toolbar">
							<a href="#" class="btn btn-success font-weight-bolder font-size-sm" data-toggle="modal" data-target="#TenantContractModal">
							<span class="svg-icon svg-icon-md svg-icon-white">
								<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Add-user.svg-->
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
									<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
										<polygon points="0 0 24 0 24 24 0 24"></polygon>
										<path d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
										<path d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero"></path>
									</g>
								</svg>
								<!--end::Svg Icon-->
							</span>Add New Tenant Contract</a>
						</div>
						@endrole
					</div>
					<!--end::Header-->
					<!--begin::Body-->
					<div class="card-body pt-0 pb-3">
						<!--begin: Datatable-->
						<table class="table table-bordered table-hover table-checkable" id="kt_datatable" style="margin-top: 13px !important">
							<thead>
								<tr>
									<th>#</th>
									<th>Contract Code</th>
									<th>Tenant Name</th>
									<th>Owner Email</th>
									<th>Place of reference</th>
									<th>Purpose</th>
									<th>Floor range</th>
									<th>Delivery Time</th>
									<th>Preference Area</th>
									<th>Status</th>
									@role('administrator')
									<th>Actions</th>
									@endrole
								</tr>
							</thead>
							<tbody>
								@foreach($tenants as $tenant)
								<tr>
									<th>{{++$i}}</th>
									<td>{{$tenant->contract_code}}</td>
									<td>{{$tenant->name}}</td>
									<td>{{$tenant->owner_email}}</td>
									<td>{{$tenant->place_of_reference}}</td>
									<td>{{$tenant->property_purpose}}</td>
									<td>{{$tenant->property_floor_range}}</td>
									<td>
										@if($tenant->delivery_time == "Immediate")
										<span class="dtr-data">
											<span class="label label-lg font-weight-bold label-light-warning label-inline">Immediate</span>
										</span>
										@elseif($tenant->delivery_time == "Delayed")
										<span class="dtr-data">
											<span class="label label-lg font-weight-bold label-light-info label-inline">Delayed</span>
										</span>
										@endif
									</td>
									<td>{{$tenant->preference_area}} (Sqm.)</td>
									<td>
										@if($tenant->contract_status == "Cancelled")
										<span class="dtr-data">
											<span class="label label-lg font-weight-bold label-light-danger label-inline">Cancelled</span>
										</span>
										@elseif($tenant->contract_status == "Pending")
										<span class="dtr-data">
											<span class="label label-lg font-weight-bold label-light-warning label-inline">Pending</span>
										</span>
										@elseif($tenant->contract_status == "Confirmed")
										<span class="dtr-data">
											<span class="label label-lg font-weight-bold label-light-success label-inline">Confirmed</span>
										</span>
										@endif
									</td>
									@role('administrator')
									<td>
										<a href="javascript:;" title="Edit Record" class="btn btn-sm btn-clean btn-icon" data-toggle="modal" data-target="#edit_tenant_modal{{$tenant->id}}">
											<i class="la la-edit"></i>
										</a>
										<a href="javascript:;" class="btn btn-sm btn-clean btn-icon" title="Delete Record" data-toggle="modal" data-target="#delete_tenant_modal{{$tenant->id}}">
											<i class="la la-trash"></i>
										</a>
									</td>
									@endrole
								</tr>

								<!-- Edit Tenant Modal-->
								<div class="modal fade" id="edit_tenant_modal{{$tenant->id}}" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
								    <div class="modal-dialog modal-lg" role="document">
								        <div class="modal-content">
								            <div class="modal-header">
								                <h5 class="modal-title" id="exampleModalLabel">Edit Tenant Contract - {{$tenant->contract_code}}</h5>
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
						<form class="form" method="POST" action="{{ route('tenants.update', $property->id) }}" enctype="multipart/form-data">
	                        @csrf
	                        @method('patch')
	                        <div class="form-group row">
								<div class="col-lg-6">
									<label>Property Name:</label>
									<input type="text" class="form-control" name="property_name" value="{{$property->name}}" readonly>
									<input type="hidden" name="property_id" value="{{$property->id}}" style="display: none;">
								</div>
								<div class="col-lg-6">
									<label>Property Code:</label>
									<input type="text" class="form-control" name="property_code" value="{{$property->unique_id}}" readonly>
								</div>
							</div>
							<div class="form-group row">
								<div class="col-lg-6">
									<label>Customer Name:</label>
									<select class="form-control" name="customer_id" id="exampleSelect1" readonly required>
										@foreach($customers as $customer)
										@if($customer->id == $tenant->customer_id)
										<option value="{{$customer->id}}" selected>{{$customer->name}}/ {{$customer->email}}</option>
										@else
										<option value="{{$customer->id}}">{{$customer->name}}/ {{$customer->email}}</option>
										@endif
										@endforeach
								    </select>
								</div>
								<div class="col-lg-6">
									<label>Owner Address (Kebele/K.K/House No.)</label>
									<input type="text" class="form-control" name="owner_address" value="{{$tenant->owner_address}}" required>
								</div>
							</div>
							<div class="form-group row">
								<div class="col-lg-6">
									<label>Owner Email:</label>
									<input type="email" class="form-control" name="owner_email" value="{{$tenant->owner_email}}" required>
									<input type="hidden" name="owner_id" value="{{$property->owner_id}}" style="display: none;">
								</div>
								<div class="col-lg-6">
									<label>Place of Reference</label>
									<input type="text" class="form-control" name="place_of_reference" 
										value="{{$tenant->place_of_reference}}" required>
								</div>
							</div>
							<div class="form-group row">
								<div class="col-lg-6">
									<label>Purpose:</label>
									<select class="form-control" name="property_purpose" id="exampleSelect1" required>
										<option selected value="{{$tenant->property_purpose}}">{{$tenant->property_purpose}}</option>
										<option value="Office">Office</option>
										<option value="Shop">Shop</option>
										<option value="G+ House">G+ House</option>
										<option value="Living Apartment">Living Apartment</option>
										<option value="Villa">Villa</option>
										<option value="Warehouse">Warehouse</option>
										<option value="Other">Other</option>
								    </select>
								</div>
								<div class="col-lg-6">
									<label>Apartment Floor Range</label>
									<input type="text" class="form-control" name="property_floor_range" 
										value="{{$tenant->property_floor_range}}" required>
								</div>
							</div>
							<div class="form-group row">
								<div class="col-lg-6">
									<label>Delivery Time:</label>
									<select class="form-control" name="delivery_time" id="exampleSelect1" required>
										<option selected value="{{$tenant->delivery_time}}">{{$tenant->delivery_time}}</option>
										<option value="Immediate">Immediate</option>
										<option value="Delayed">Delayed</option>
								    </select>
								</div>
								<div class="col-lg-6">
									<label>Bedrooms Number</label>
									<input type="text" class="form-control" name="bedrooms_number" 
										value="{{$tenant->bedrooms_number}}" required>
								</div>
							</div>
							<div class="form-group row">
								<div class="col-lg-6">
									<label>Preference Area:</label>
									<div class='input-group'>
										<input type="text" class="form-control" name="preference_area" value="{{$tenant->preference_area}}" required>
										<div class="input-group-append">
									       <span class="input-group-text">(Sqm)</span>
									    </div>
									</div>
								</div>
								<div class="col-lg-6">
									<label>Agent Name:</label>
									<select class="form-control" name="agent_id" id="exampleSelect1" required>
										@foreach($agents as $agent)
										@if($agent->id == $tenant->agent_id)
										<option value="{{$agent->id}}" selected>{{$agent->name}}/ {{$agent->email}}</option>
										@else
										<option value="{{$agent->id}}">{{$agent->name}}/ {{$agent->email}}</option>
										@endif
										@endforeach
								    </select>
								</div>
							</div>
							<span><h3>Client's Vision</h3></span>
							<hr>
							<div class="form-group row">
								<div class="col-lg-6">
									<label>Rent Fee looking for:</label>
									<input type="text" class="form-control" name="rent_fee" value="{{$tenant->rent_fee}}" required>
									<div class="input-group-append">
								       <select class="form-control" name="rent_fee_currency" id="exampleSelect1" required>
											<option selected value="{{$tenant->rent_fee_currency}}">{{$tenant->rent_fee_currency}}</option>
											<option value="AFN">Afghan Afghani</option>
										    <option value="ALL">Albanian Lek</option>
										    <option value="DZD">Algerian Dinar</option>
										    <option value="AOA">Angolan Kwanza</option>
										    <option value="ARS">Argentine Peso</option>
										    <option value="AMD">Armenian Dram</option>
										    <option value="AWG">Aruban Florin</option>
										    <option value="AUD">Australian Dollar</option>
										    <option value="AZN">Azerbaijani Manat</option>
										    <option value="BSD">Bahamian Dollar</option>
										    <option value="BHD">Bahraini Dinar</option>
										    <option value="BDT">Bangladeshi Taka</option>
										    <option value="BBD">Barbadian Dollar</option>
										    <option value="BYR">Belarusian Ruble</option>
										    <option value="BEF">Belgian Franc</option>
										    <option value="BZD">Belize Dollar</option>
										    <option value="BMD">Bermudan Dollar</option>
										    <option value="BTN">Bhutanese Ngultrum</option>
										    <option value="BTC">Bitcoin</option>
										    <option value="BOB">Bolivian Boliviano</option>
										    <option value="BAM">Bosnia-Herzegovina Convertible Mark</option>
										    <option value="BWP">Botswanan Pula</option>
										    <option value="BRL">Brazilian Real</option>
										    <option value="GBP">British Pound Sterling</option>
										    <option value="BND">Brunei Dollar</option>
										    <option value="BGN">Bulgarian Lev</option>
										    <option value="BIF">Burundian Franc</option>
										    <option value="KHR">Cambodian Riel</option>
										    <option value="CAD">Canadian Dollar</option>
										    <option value="CVE">Cape Verdean Escudo</option>
										    <option value="KYD">Cayman Islands Dollar</option>
										    <option value="XOF">CFA Franc BCEAO</option>
										    <option value="XAF">CFA Franc BEAC</option>
										    <option value="XPF">CFP Franc</option>
										    <option value="CLP">Chilean Peso</option>
										    <option value="CNY">Chinese Yuan</option>
										    <option value="COP">Colombian Peso</option>
										    <option value="KMF">Comorian Franc</option>
										    <option value="CDF">Congolese Franc</option>
										    <option value="CRC">Costa Rican ColÃ³n</option>
										    <option value="HRK">Croatian Kuna</option>
										    <option value="CUC">Cuban Convertible Peso</option>
										    <option value="CZK">Czech Republic Koruna</option>
										    <option value="DKK">Danish Krone</option>
										    <option value="DJF">Djiboutian Franc</option>
										    <option value="DOP">Dominican Peso</option>
										    <option value="XCD">East Caribbean Dollar</option>
										    <option value="EGP">Egyptian Pound</option>
										    <option value="ERN">Eritrean Nakfa</option>
										    <option value="EEK">Estonian Kroon</option>
										    <option value="ETB">Ethiopian Birr</option>
										    <option value="EUR">Euro</option>
										    <option value="FKP">Falkland Islands Pound</option>
										    <option value="FJD">Fijian Dollar</option>
										    <option value="GMD">Gambian Dalasi</option>
										    <option value="GEL">Georgian Lari</option>
										    <option value="DEM">German Mark</option>
										    <option value="GHS">Ghanaian Cedi</option>
										    <option value="GIP">Gibraltar Pound</option>
										    <option value="GRD">Greek Drachma</option>
										    <option value="GTQ">Guatemalan Quetzal</option>
										    <option value="GNF">Guinean Franc</option>
										    <option value="GYD">Guyanaese Dollar</option>
										    <option value="HTG">Haitian Gourde</option>
										    <option value="HNL">Honduran Lempira</option>
										    <option value="HKD">Hong Kong Dollar</option>
										    <option value="HUF">Hungarian Forint</option>
										    <option value="ISK">Icelandic KrÃ³na</option>
										    <option value="INR">Indian Rupee</option>
										    <option value="IDR">Indonesian Rupiah</option>
										    <option value="IRR">Iranian Rial</option>
										    <option value="IQD">Iraqi Dinar</option>
										    <option value="ILS">Israeli New Sheqel</option>
										    <option value="ITL">Italian Lira</option>
										    <option value="JMD">Jamaican Dollar</option>
										    <option value="JPY">Japanese Yen</option>
										    <option value="JOD">Jordanian Dinar</option>
										    <option value="KZT">Kazakhstani Tenge</option>
										    <option value="KES">Kenyan Shilling</option>
										    <option value="KWD">Kuwaiti Dinar</option>
										    <option value="KGS">Kyrgystani Som</option>
										    <option value="LAK">Laotian Kip</option>
										    <option value="LVL">Latvian Lats</option>
										    <option value="LBP">Lebanese Pound</option>
										    <option value="LSL">Lesotho Loti</option>
										    <option value="LRD">Liberian Dollar</option>
										    <option value="LYD">Libyan Dinar</option>
										    <option value="LTL">Lithuanian Litas</option>
										    <option value="MOP">Macanese Pataca</option>
										    <option value="MKD">Macedonian Denar</option>
										    <option value="MGA">Malagasy Ariary</option>
										    <option value="MWK">Malawian Kwacha</option>
										    <option value="MYR">Malaysian Ringgit</option>
										    <option value="MVR">Maldivian Rufiyaa</option>
										    <option value="MRO">Mauritanian Ouguiya</option>
										    <option value="MUR">Mauritian Rupee</option>
										    <option value="MXN">Mexican Peso</option>
										    <option value="MDL">Moldovan Leu</option>
										    <option value="MNT">Mongolian Tugrik</option>
										    <option value="MAD">Moroccan Dirham</option>
										    <option value="MZM">Mozambican Metical</option>
										    <option value="MMK">Myanmar Kyat</option>
										    <option value="NAD">Namibian Dollar</option>
										    <option value="NPR">Nepalese Rupee</option>
										    <option value="ANG">Netherlands Antillean Guilder</option>
										    <option value="TWD">New Taiwan Dollar</option>
										    <option value="NZD">New Zealand Dollar</option>
										    <option value="NIO">Nicaraguan CÃ³rdoba</option>
										    <option value="NGN">Nigerian Naira</option>
										    <option value="KPW">North Korean Won</option>
										    <option value="NOK">Norwegian Krone</option>
										    <option value="OMR">Omani Rial</option>
										    <option value="PKR">Pakistani Rupee</option>
										    <option value="PAB">Panamanian Balboa</option>
										    <option value="PGK">Papua New Guinean Kina</option>
										    <option value="PYG">Paraguayan Guarani</option>
										    <option value="PEN">Peruvian Nuevo Sol</option>
										    <option value="PHP">Philippine Peso</option>
										    <option value="PLN">Polish Zloty</option>
										    <option value="QAR">Qatari Rial</option>
										    <option value="RON">Romanian Leu</option>
										    <option value="RUB">Russian Ruble</option>
										    <option value="RWF">Rwandan Franc</option>
										    <option value="SVC">Salvadoran ColÃ³n</option>
										    <option value="WST">Samoan Tala</option>
										    <option value="SAR">Saudi Riyal</option>
										    <option value="RSD">Serbian Dinar</option>
										    <option value="SCR">Seychellois Rupee</option>
										    <option value="SLL">Sierra Leonean Leone</option>
										    <option value="SGD">Singapore Dollar</option>
										    <option value="SKK">Slovak Koruna</option>
										    <option value="SBD">Solomon Islands Dollar</option>
										    <option value="SOS">Somali Shilling</option>
										    <option value="ZAR">South African Rand</option>
										    <option value="KRW">South Korean Won</option>
										    <option value="XDR">Special Drawing Rights</option>
										    <option value="LKR">Sri Lankan Rupee</option>
										    <option value="SHP">St. Helena Pound</option>
										    <option value="SDG">Sudanese Pound</option>
										    <option value="SRD">Surinamese Dollar</option>
										    <option value="SZL">Swazi Lilangeni</option>
										    <option value="SEK">Swedish Krona</option>
										    <option value="CHF">Swiss Franc</option>
										    <option value="SYP">Syrian Pound</option>
										    <option value="STD">São Tomé and Príncipe Dobra</option>
										    <option value="TJS">Tajikistani Somoni</option>
										    <option value="TZS">Tanzanian Shilling</option>
										    <option value="THB">Thai Baht</option>
										    <option value="TOP">Tongan pa'anga</option>
										    <option value="TTD">Trinidad & Tobago Dollar</option>
										    <option value="TND">Tunisian Dinar</option>
										    <option value="TRY">Turkish Lira</option>
										    <option value="TMT">Turkmenistani Manat</option>
										    <option value="UGX">Ugandan Shilling</option>
										    <option value="UAH">Ukrainian Hryvnia</option>
										    <option value="AED">United Arab Emirates Dirham</option>
										    <option value="UYU">Uruguayan Peso</option>
										    <option value="USD">US Dollar</option>
										    <option value="UZS">Uzbekistan Som</option>
										    <option value="VUV">Vanuatu Vatu</option>
										    <option value="VEF">Venezuelan BolÃ­var</option>
										    <option value="VND">Vietnamese Dong</option>
										    <option value="YER">Yemeni Rial</option>
										    <option value="ZMK">Zambian Kwacha</option>
									    </select>
								    </div>
								</div>
								<div class="col-lg-6">
								<label>Rent Period:</label>
							     <div class='input-group' id='kt_daterangepicker_2'>
							      <input type='text' class="form-control" name="rent_duration" value="{{$tenant->rent_duration}}" required/>
							      <div class="input-group-append">
							       <span class="input-group-text"><i class="la la-calendar-check-o"></i></span>
							      </div>
							     </div>
							    </div>
							</div>
							<div class="form-group row">
								<div class="col-lg-6">
									<label>Site visit vehicle</label>
									<select class="form-control" name="site_visit_vehicle" id="exampleSelect1" required>
										<option selected value="{{$tenant->site_visit_vehicle}}">{{$tenant->site_visit_vehicle}}</option>
										<option value="Own">Own</option>
										<option value="Rent">Rent</option>
								    </select>
								</div>
								<div class="col-lg-6">
									<label>Upload Client ID: </label>
									<div class="input-group">
										<div></div>
									    <div class="custom-file">
									     <input type="file" name="client_id_card" class="custom-file-input" id="customFile" 
									     	value="{{$tenant->client_id_card}}" />
									     <label class="custom-file-label" for="customFile">Attach file</label>
									    </div>
									</div>
								</div>
							</div>
							<div class="form-group row">
								<div class="col-lg-6">
									<label>Client Comment:</label>
									<div class="input-group">
    									<textarea class="form-control" name="client_comment" id="exampleTextarea" placeholder="Enter Client Comment" rows="3" maxlength="500">{{$tenant->client_comment}}</textarea>
									</div>
								</div>
								<div class="col-lg-6">
									<label>Client Remark:</label>
									<div class="input-group">
    									<textarea class="form-control" name="client_remark" id="exampleTextarea" placeholder="Enter Client Remark" rows="3" maxlength="500">{{$tenant->client_remark}}</textarea>
									</div>
								</div>
							</div>
							<div class="form-group row">
								<div class="col-lg-6">
									<label>Contract Status:</label>
									<select class="form-control" name="contract_status" id="exampleSelect1" required>
										<option selected value="{{$tenant->contract_status}}">{{$tenant->contract_status}}</option>
										<option value="Confirmed">Confirmed</option>
										<option value="Pending">Pending</option>
										<option value="Cancelled">Cancelled</option>
								    </select>
								</div>
							</div>
							<div class="card-footer">
								<div class="col-lg-6">
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
								<div class="modal fade" id="delete_tenant_modal{{$tenant->id}}">
									<div class="modal-dialog">
									  <div class="modal-content bg-danger">
									    <div class="modal-header">
									      <h4 class="modal-title">Are you sure you want to delete <br> <strong>"{{ $tenant->name }}/ {{$tenant->contract_code}}"</strong> ?</h4>

									    </div>

									    <form action="{{ route('tenants.destroy',$tenant->id) }}" method="POST">
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
					<!--end::Body-->
				</div>
				<!--end::Advance Table Widget 3-->
			</div>
		</div>
		<!--end::Row-->
	</div>
	<!--end::Container-->
</div>

<!-- New Tenant Modal-->
<div class="modal fade" id="TenantContractModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New Tenant Contract</h5>
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
							<form class="form" method="POST" action="{{ route('tenants.store') }}" enctype="multipart/form-data">
		                        @csrf
		                        <div class="form-group row">
									<div class="col-lg-6">
										<label>Property Name:</label>
										<input type="text" class="form-control" name="property_name" value="{{$property->name}}" readonly>
										<input type="hidden" name="property_id" value="{{$property->id}}" style="display: none;">
									</div>
									<div class="col-lg-6">
										<label>Property Code:</label>
										<input type="text" class="form-control" name="property_code" value="{{$property->unique_id}}" readonly>
									</div>
								</div>
								<div class="form-group row">
									<div class="col-lg-6">
										<label>Customer Name:</label>
										<select class="form-control" name="customer_id" id="exampleSelect1" required>
											<option selected disabled>Select Customer</option>
											@foreach($customers as $customer)
											<option value="{{$customer->id}}">{{$customer->name}}/ {{$customer->email}}</option>
											@endforeach
									    </select>
									</div>
									<div class="col-lg-6">
										<label>Owner Address (Kebele/K.K/House No.)</label>
										<input type="text" class="form-control" name="owner_address" placeholder="Please Enter Owner Address" required>
									</div>
								</div>
								<div class="form-group row">
									<div class="col-lg-6">
										<label>Owner Email:</label>
										<input type="email" class="form-control" name="owner_email" placeholder="Please Enter Owner Email" required>
										<input type="hidden" name="owner_id" value="{{$property->owner_id}}" style="display: none;">
									</div>
									<div class="col-lg-6">
										<label>Place of Reference</label>
										<input type="text" class="form-control" name="place_of_reference" placeholder="Please Enter Place of Reference" required>
									</div>
								</div>
								<div class="form-group row">
									<div class="col-lg-6">
										<label>Purpose:</label>
										<select class="form-control" name="property_purpose" id="exampleSelect1" required>
											<option selected disabled>Select Purpose</option>
											<option value="Office">Office</option>
											<option value="Shop">Shop</option>
											<option value="G+ House">G+ House</option>
											<option value="Living Apartment">Living Apartment</option>
											<option value="Villa">Villa</option>
											<option value="Warehouse">Warehouse</option>
											<option value="Other">Other</option>
									    </select>
									</div>
									<div class="col-lg-6">
										<label>Apartment Floor Range</label>
										<input type="text" class="form-control" name="property_floor_range" placeholder="Please Enter Apartment Floor Range" required>
									</div>
								</div>
								<div class="form-group row">
									<div class="col-lg-6">
										<label>Delivery Time:</label>
										<select class="form-control" name="delivery_time" id="exampleSelect1" required>
											<option selected disabled>Select Delivery Time</option>
											<option value="Immediate">Immediate</option>
											<option value="Delayed">Delayed</option>
									    </select>
									</div>
									<div class="col-lg-6">
										<label>Bedrooms Number</label>
										<input type="text" class="form-control" name="bedrooms_number" placeholder="Please Enter Bedrooms Number" required>
									</div>
								</div>
								<div class="form-group row">
									<div class="col-lg-6">
										<label>Preference Area:</label>
										<div class='input-group'>
											<input type="text" class="form-control" name="preference_area" placeholder="Please Enter Preference Area" required>
											<div class="input-group-append">
										       <span class="input-group-text">(Sqm)</span>
										    </div>
										</div>
									</div>
									<div class="col-lg-6">
										<label>Agent Name:</label>
										<select class="form-control" name="agent_id" id="exampleSelect1" required>
											<option selected disabled>Select Agent</option>
											@foreach($agents as $agent)
											<option value="{{$agent->id}}">{{$agent->name}}/ {{$agent->email}}</option>
											@endforeach
									    </select>
									</div>
								</div>
								<span><h3>Client's Vision</h3></span>
								<hr>
								<div class="form-group row">
									<div class="col-lg-6">
										<label>Rent Fee looking for:</label>
										<input type="text" class="form-control" name="rent_fee" placeholder="Please Enter Rent Fee" required>
										<div class="input-group-append">
									       <select class="form-control" name="rent_fee_currency" id="exampleSelect1" required>
												<option selected disabled>Select Currency</option>
												<option value="AFN">Afghan Afghani</option>
											    <option value="ALL">Albanian Lek</option>
											    <option value="DZD">Algerian Dinar</option>
											    <option value="AOA">Angolan Kwanza</option>
											    <option value="ARS">Argentine Peso</option>
											    <option value="AMD">Armenian Dram</option>
											    <option value="AWG">Aruban Florin</option>
											    <option value="AUD">Australian Dollar</option>
											    <option value="AZN">Azerbaijani Manat</option>
											    <option value="BSD">Bahamian Dollar</option>
											    <option value="BHD">Bahraini Dinar</option>
											    <option value="BDT">Bangladeshi Taka</option>
											    <option value="BBD">Barbadian Dollar</option>
											    <option value="BYR">Belarusian Ruble</option>
											    <option value="BEF">Belgian Franc</option>
											    <option value="BZD">Belize Dollar</option>
											    <option value="BMD">Bermudan Dollar</option>
											    <option value="BTN">Bhutanese Ngultrum</option>
											    <option value="BTC">Bitcoin</option>
											    <option value="BOB">Bolivian Boliviano</option>
											    <option value="BAM">Bosnia-Herzegovina Convertible Mark</option>
											    <option value="BWP">Botswanan Pula</option>
											    <option value="BRL">Brazilian Real</option>
											    <option value="GBP">British Pound Sterling</option>
											    <option value="BND">Brunei Dollar</option>
											    <option value="BGN">Bulgarian Lev</option>
											    <option value="BIF">Burundian Franc</option>
											    <option value="KHR">Cambodian Riel</option>
											    <option value="CAD">Canadian Dollar</option>
											    <option value="CVE">Cape Verdean Escudo</option>
											    <option value="KYD">Cayman Islands Dollar</option>
											    <option value="XOF">CFA Franc BCEAO</option>
											    <option value="XAF">CFA Franc BEAC</option>
											    <option value="XPF">CFP Franc</option>
											    <option value="CLP">Chilean Peso</option>
											    <option value="CNY">Chinese Yuan</option>
											    <option value="COP">Colombian Peso</option>
											    <option value="KMF">Comorian Franc</option>
											    <option value="CDF">Congolese Franc</option>
											    <option value="CRC">Costa Rican ColÃ³n</option>
											    <option value="HRK">Croatian Kuna</option>
											    <option value="CUC">Cuban Convertible Peso</option>
											    <option value="CZK">Czech Republic Koruna</option>
											    <option value="DKK">Danish Krone</option>
											    <option value="DJF">Djiboutian Franc</option>
											    <option value="DOP">Dominican Peso</option>
											    <option value="XCD">East Caribbean Dollar</option>
											    <option value="EGP">Egyptian Pound</option>
											    <option value="ERN">Eritrean Nakfa</option>
											    <option value="EEK">Estonian Kroon</option>
											    <option value="ETB">Ethiopian Birr</option>
											    <option value="EUR">Euro</option>
											    <option value="FKP">Falkland Islands Pound</option>
											    <option value="FJD">Fijian Dollar</option>
											    <option value="GMD">Gambian Dalasi</option>
											    <option value="GEL">Georgian Lari</option>
											    <option value="DEM">German Mark</option>
											    <option value="GHS">Ghanaian Cedi</option>
											    <option value="GIP">Gibraltar Pound</option>
											    <option value="GRD">Greek Drachma</option>
											    <option value="GTQ">Guatemalan Quetzal</option>
											    <option value="GNF">Guinean Franc</option>
											    <option value="GYD">Guyanaese Dollar</option>
											    <option value="HTG">Haitian Gourde</option>
											    <option value="HNL">Honduran Lempira</option>
											    <option value="HKD">Hong Kong Dollar</option>
											    <option value="HUF">Hungarian Forint</option>
											    <option value="ISK">Icelandic KrÃ³na</option>
											    <option value="INR">Indian Rupee</option>
											    <option value="IDR">Indonesian Rupiah</option>
											    <option value="IRR">Iranian Rial</option>
											    <option value="IQD">Iraqi Dinar</option>
											    <option value="ILS">Israeli New Sheqel</option>
											    <option value="ITL">Italian Lira</option>
											    <option value="JMD">Jamaican Dollar</option>
											    <option value="JPY">Japanese Yen</option>
											    <option value="JOD">Jordanian Dinar</option>
											    <option value="KZT">Kazakhstani Tenge</option>
											    <option value="KES">Kenyan Shilling</option>
											    <option value="KWD">Kuwaiti Dinar</option>
											    <option value="KGS">Kyrgystani Som</option>
											    <option value="LAK">Laotian Kip</option>
											    <option value="LVL">Latvian Lats</option>
											    <option value="LBP">Lebanese Pound</option>
											    <option value="LSL">Lesotho Loti</option>
											    <option value="LRD">Liberian Dollar</option>
											    <option value="LYD">Libyan Dinar</option>
											    <option value="LTL">Lithuanian Litas</option>
											    <option value="MOP">Macanese Pataca</option>
											    <option value="MKD">Macedonian Denar</option>
											    <option value="MGA">Malagasy Ariary</option>
											    <option value="MWK">Malawian Kwacha</option>
											    <option value="MYR">Malaysian Ringgit</option>
											    <option value="MVR">Maldivian Rufiyaa</option>
											    <option value="MRO">Mauritanian Ouguiya</option>
											    <option value="MUR">Mauritian Rupee</option>
											    <option value="MXN">Mexican Peso</option>
											    <option value="MDL">Moldovan Leu</option>
											    <option value="MNT">Mongolian Tugrik</option>
											    <option value="MAD">Moroccan Dirham</option>
											    <option value="MZM">Mozambican Metical</option>
											    <option value="MMK">Myanmar Kyat</option>
											    <option value="NAD">Namibian Dollar</option>
											    <option value="NPR">Nepalese Rupee</option>
											    <option value="ANG">Netherlands Antillean Guilder</option>
											    <option value="TWD">New Taiwan Dollar</option>
											    <option value="NZD">New Zealand Dollar</option>
											    <option value="NIO">Nicaraguan CÃ³rdoba</option>
											    <option value="NGN">Nigerian Naira</option>
											    <option value="KPW">North Korean Won</option>
											    <option value="NOK">Norwegian Krone</option>
											    <option value="OMR">Omani Rial</option>
											    <option value="PKR">Pakistani Rupee</option>
											    <option value="PAB">Panamanian Balboa</option>
											    <option value="PGK">Papua New Guinean Kina</option>
											    <option value="PYG">Paraguayan Guarani</option>
											    <option value="PEN">Peruvian Nuevo Sol</option>
											    <option value="PHP">Philippine Peso</option>
											    <option value="PLN">Polish Zloty</option>
											    <option value="QAR">Qatari Rial</option>
											    <option value="RON">Romanian Leu</option>
											    <option value="RUB">Russian Ruble</option>
											    <option value="RWF">Rwandan Franc</option>
											    <option value="SVC">Salvadoran ColÃ³n</option>
											    <option value="WST">Samoan Tala</option>
											    <option value="SAR">Saudi Riyal</option>
											    <option value="RSD">Serbian Dinar</option>
											    <option value="SCR">Seychellois Rupee</option>
											    <option value="SLL">Sierra Leonean Leone</option>
											    <option value="SGD">Singapore Dollar</option>
											    <option value="SKK">Slovak Koruna</option>
											    <option value="SBD">Solomon Islands Dollar</option>
											    <option value="SOS">Somali Shilling</option>
											    <option value="ZAR">South African Rand</option>
											    <option value="KRW">South Korean Won</option>
											    <option value="XDR">Special Drawing Rights</option>
											    <option value="LKR">Sri Lankan Rupee</option>
											    <option value="SHP">St. Helena Pound</option>
											    <option value="SDG">Sudanese Pound</option>
											    <option value="SRD">Surinamese Dollar</option>
											    <option value="SZL">Swazi Lilangeni</option>
											    <option value="SEK">Swedish Krona</option>
											    <option value="CHF">Swiss Franc</option>
											    <option value="SYP">Syrian Pound</option>
											    <option value="STD">São Tomé and Príncipe Dobra</option>
											    <option value="TJS">Tajikistani Somoni</option>
											    <option value="TZS">Tanzanian Shilling</option>
											    <option value="THB">Thai Baht</option>
											    <option value="TOP">Tongan pa'anga</option>
											    <option value="TTD">Trinidad & Tobago Dollar</option>
											    <option value="TND">Tunisian Dinar</option>
											    <option value="TRY">Turkish Lira</option>
											    <option value="TMT">Turkmenistani Manat</option>
											    <option value="UGX">Ugandan Shilling</option>
											    <option value="UAH">Ukrainian Hryvnia</option>
											    <option value="AED">United Arab Emirates Dirham</option>
											    <option value="UYU">Uruguayan Peso</option>
											    <option value="USD">US Dollar</option>
											    <option value="UZS">Uzbekistan Som</option>
											    <option value="VUV">Vanuatu Vatu</option>
											    <option value="VEF">Venezuelan BolÃ­var</option>
											    <option value="VND">Vietnamese Dong</option>
											    <option value="YER">Yemeni Rial</option>
											    <option value="ZMK">Zambian Kwacha</option>
										    </select>
									    </div>
									</div>
									<div class="col-lg-6">
									<label>Rent Period:</label>
								     <div class='input-group' id='kt_daterangepicker_2'>
								      <input type='text' class="form-control" name="rent_duration" required placeholder="Please Enter Rent Period"/>
								      <div class="input-group-append">
								       <span class="input-group-text"><i class="la la-calendar-check-o"></i></span>
								      </div>
								     </div>
								    </div>
								</div>
								<div class="form-group row">
									<div class="col-lg-6">
										<label>Site visit vehicle</label>
										<select class="form-control" name="site_visit_vehicle" id="exampleSelect1" required>
											<option selected disabled>Select Site visit vehicle</option>
											<option value="Own">Own</option>
											<option value="Rent">Rent</option>
									    </select>
									</div>
									<div class="col-lg-6">
										<label>Upload Client ID: </label>
										<div class="input-group">
											<div></div>
										    <div class="custom-file">
										     <input type="file" name="client_id_card" class="custom-file-input" id="customFile" required />
										     <label class="custom-file-label" for="customFile">Attach file</label>
										    </div>
										</div>
									</div>
								</div>
								<div class="form-group row">
									<div class="col-lg-6">
										<label>Client Comment:</label>
										<div class="input-group">
	    									<textarea class="form-control" name="client_comment" id="exampleTextarea" placeholder="Enter Client Comment" rows="3" maxlength="500"></textarea>
										</div>
									</div>
									<div class="col-lg-6">
										<label>Client Remark:</label>
										<div class="input-group">
	    									<textarea class="form-control" name="client_remark" id="exampleTextarea" placeholder="Enter Client Remark" rows="3" maxlength="500"></textarea>
										</div>
									</div>
								</div>
								<div class="form-group row">
									<div class="col-lg-6">
										<label>Contract Status:</label>
										<select class="form-control" name="contract_status" id="exampleSelect1" required>
											<option selected disabled>Select Contract Status</option>
											<option value="Confirmed">Confirmed</option>
											<option value="Pending">Pending</option>
											<option value="Cancelled">Cancelled</option>
									    </select>
									</div>
								</div>
								<div class="card-footer">
									<div class="col-lg-6">
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
											<option value="">Select Client</option>
											@foreach($customers as $customer)
											@if(auth()->user()->id == $customer->user_id)
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
											<option value="{{$property->id}}" selected>{{$property->name}}/ {{$property->unique_id}}</option>
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

<!-- View Cases Modal-->
<div class="modal fade" id="ViewCaseModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">View Cases</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <div class="modal-body">
                <!--begin::Card-->
				<div class="card card-custom">
					<div class="card-header">
						<div class="card-title">
							<span class="card-icon">
								<i class="flaticon2-favourite text-primary"></i>
							</span>
							<h3 class="card-label">Cases Listed</h3>
						</div>
					</div>
					<div class="card-body">
						<!--begin: Datatable-->
						<table class="table table-bordered table-hover table-checkable" id="kt_datatable" style="margin-top: 13px !important">
							<thead>
								<tr>
									<th>Case ID</th>
									<th>Case Name</th>
									<th>Client Name</th>
									<th>Property ID</th>
									<th>Contract ID</th>
									<th>Status</th>
								</tr>
							</thead>
							<tbody>
								@foreach($cases as $case)
								<tr>
									<td>{{$case->case_id}}</td>
									<td>{{$case->case_name}}</td>
									<td>{{$case->customer_name}}</td>
									<td>{{$property->name}}</td>
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
								</tr>
								@endforeach
							</tbody>
						</table>
						<!--end: Datatable-->
					</div>
				</div>
				<!--end::Card-->
            </div>
        </div>
    </div>
</div>
<!-- Modal End -->
@endsection
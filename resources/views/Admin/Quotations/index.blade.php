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
							<h3 class="card-label">Quotations Listed</h3>
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
						</div>
					</div>
					<div class="card-body">
						<!--begin: Datatable-->
						<table class="table table-bordered table-hover table-checkable" id="kt_datatable" style="margin-top: 13px !important">
							<thead>
								<tr>
									<th>#</th>
									<th>Quotation ID</th>
									<th>Property Name</th>
									<th>Case Name</th>
									<th>Case ID</th>
									<th>Vendor Name</th>
									<th>Bid Price</th>
									<th>Delivery Time</th>
									<th>Status</th>
									<th>Actions</th>
								</tr>
							</thead>
							<tbody>
								@foreach($quotations as $quotation)
								<tr>
									<td>{{++$i}}</td>
									<td>{{$quotation->quotation_id}}</td>
									<td>{{$quotation->name}}</td>
									<td>{{$quotation->case_name}}</td>
									<td>{{$quotation->case_id}}</td>
									<td>{{$quotation->vendor_name}}</td>
									<td>{{$quotation->bid_price}} {{$quotation->bid_currency}}</td>
									<td>{{ date_format(date_create($quotation->delivery_time), 'jS M Y')}}</td>
									<td>
										@if($quotation->quotation_status == "Accepted")
										<span class="dtr-data">
											<span class="label label-lg font-weight-bold label-light-success label-inline">Accepted</span>
										</span>
										@elseif($quotation->quotation_status == "Pending")
										<span class="dtr-data">
											<span class="label label-lg font-weight-bold label-light-info label-inline">Pending</span>
										</span>
										@elseif($quotation->quotation_status == "Rejected")
										<span class="dtr-data">
											<span class="label label-lg font-weight-bold label-light-danger label-inline">Rejected</span>
										</span>
										@endif
									</td>
									<td>
										@role('property manager')
										<a href="javascript:;" title="View Record" class="btn btn-sm btn-clean btn-icon" 
											title="Edit Record" data-toggle="modal" data-target="#viewBidModal{{$quotation->id}}">
											<i class="la la-eye"></i>
										</a>
										@endrole
										@role('vendor')
										<a href="javascript:;" title="Edit Record" class="btn btn-sm btn-clean btn-icon" 
											data-toggle="modal" data-target="#editBidModal{{$quotation->id}}">
											<i class="la la-edit"></i>
										</a>
										<a href="javascript:;" class="btn btn-sm btn-clean btn-icon" title="Delete Record" 
											data-toggle="modal" data-target="#modal-danger{{$quotation->id}}">
											<i class="la la-trash"></i>
										</a>
										@endrole
									</td>
								</tr>

								<!-- View Quotation Modal-->
				<div class="modal fade" id="viewBidModal{{$quotation->id}}" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
				    <div class="modal-dialog modal-lg" role="document">
				        <div class="modal-content">
				            <div class="modal-header">
				                <h5 class="modal-title" id="exampleModalLabel">Take Action on this Bid Quotation - {{$quotation->quotation_id}}</h5>
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
											<form class="form" method="POST" action="{{ route('quotations.update', $quotation->id) }}" enctype="multipart/form-data">
						                        @csrf
						                        @method('patch')
						                        <div class="form-group row">
													<div class="col-lg-6">
														<label>Property Name</label>
														<input type="text" class="form-control" readonly value="{{$quotation->name}}" required>
														<input type="hidden" name="quotation_id" value="{{$quotation->id}}">
													</div>
													<div class="col-lg-6">
								                        <label>Case Name</label>
								                        <input class="form-control" value="{{$quotation->case_name}}" type="text" required readonly />
								                    </div>
												</div>
												<div class="form-group row">
													<div class="col-lg-6">
														<label>Case ID</label>
														<input type="text" class="form-control" name="case_id" value="{{$quotation->case_id}}" readonly required>
													</div>
													<div class="col-lg-6">
								                        <label>Delivery Date</label>
								                        <input class="form-control" readonly value="{{ date_format(date_create($quotation->delivery_time), 'jS M Y')}}" type="text" required />
								                    </div>
												</div>
												<div class="form-group row">
													<div class="col-lg-6">
														<label>Price</label>
														<div class="input-group">
														<input type="text" class="form-control" readonly value="{{$quotation->bid_price}}" required>
														<div class="input-group-append">
															<span class="input-group-text">
																{{$quotation->bid_currency}}
															</span>
														</div>
														</div>
													</div>
													<div class="col-lg-6">
								                        <label>Vendor Name</label>
								                        <input class="form-control" readonly 
								                        	value="{{$quotation->vendor_name}}" type="text" required />
								                    </div>
												</div>
												<div class="form-group row">
													<div class="col-lg-6">
								                        <label>Status</label>
								                        <select class="form-control" name="quotation_status" required id="exampleSelect1">
								                        	<option value="{{$quotation->quotation_status}}" selected>{{$quotation->quotation_status}}</option>
								                        	<option value="Approved">Approved</option>
								                        	<option value="Pending">Pending</option>
								                        	<option value="Rejected">Rejected</option>
								                        </select>
								                    </div>
												</div>
												<div class="card-footer">
													<div class="col-lg-8">
								                    	<button type="button" class="btn btn-light-primary font-weight-bold">Cancel</button>
				            							<button type="submit" class="btn btn-primary font-weight-bold">Submit</button>
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

								<!-- Modal Starts Here-->
								<div class="modal fade" id="modal-danger{{$quotation->id}}">
									<div class="modal-dialog">
									  <div class="modal-content bg-danger">
									    <div class="modal-header">
									      <h4 class="modal-title">Are you sure you want to delete <br> <strong>"{{ $quotation->quotation_id }} - {{$quotation->case_name}}"</strong> ?</h4>

									    </div>

									    <form action="{{ route('quotations.destroy',$quotation->id) }}" method="POST">
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
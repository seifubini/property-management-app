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
			<!--begin::inspection calendar-->
			<div class="card card-custom">
				<div class="card-header">
				  <div class="card-title">
				   <h3 class="card-label">
				    Inspection Calendar
				   </h3>
				  </div>
				  <div class="card-toolbar">
				   <a href="javascript:;" class="btn btn-primary font-weight-bold" 
				   title="Add New Inspection" data-toggle="modal" data-target="#InspectionModal">
				   <i class="ki ki-plus "></i> Add New Inspection
				   </a>
				  </div>
				</div>
				<div class="card-body">
				  <div id="kt_calendar"></div>
				</div>
			</div>
			<!--end::calendar-->
		</div>
	</div>
</div>

<!-- New Inspection Modal-->
<div class="modal fade" id="InspectionModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New Inspection</h5>
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
							<form class="form" method="POST" action="{{ route('inspections.store') }}" enctype="multipart/form-data">
		                        @csrf
		                        <div class="form-group row">
									<div class="col-lg-6">
										<label>Inspection Date:</label>
										<input type="date" class="form-control" name="inspection_date" id="inspection_date" required>
									</div>
									<div class="col-lg-6">
				                        <label>Select Property</label>
				                        <select class="form-control" name="property_id" id="exampleSelect1" required>
											<option selected >Select Property</option>
											@foreach($properties as $property)
											<option value="{{$property->id}}">{{$property->name}}/ {{$property->unique_id}}</option>
											@endforeach
									    </select>
				                    </div>
								</div>
								<div class="form-group row">
									<div class="col-lg-6">
										<label>Comment:</label>
										<div class="input-group">
	    									<textarea class="form-control" name="inspection_comment" id="exampleTextarea" 
	    										placeholder="Enter Inspection Comment" rows="3" maxlength="500"></textarea>
										</div>
									</div>
									<div class="col-lg-6">
										<label>Description:</label>
										<div class="input-group">
	    									<textarea class="form-control" name="inspection_description" id="exampleTextarea" 
	    										placeholder="Enter Inspection Description" rows="3" maxlength="500"></textarea>
										</div>
									</div>
								</div>
								<div class="form-group row">
									<div class="col-lg-6">
										<label>Inspection Image: </label>
										<div class="input-group">
											<div></div>
										    <div class="custom-file">
										     <input type="file" name="inspection_image" class="custom-file-input" id="customFile"/>
										     <label class="custom-file-label" for="customFile">Choose files</label>
										    </div>
										</div>
									</div>
									<div class="col-lg-6">
										<label>Inspection Attachment: </label>
										<div class="input-group">
											<div></div>
										    <div class="custom-file">
										     <input type="file" name="inspection_attachment" class="custom-file-input" id="customFile"/>
										     <label class="custom-file-label" for="customFile">Choose files</label>
										    </div>
										</div>
									</div>
								</div>
								<div class="form-group row">
									<div class="col-lg-6">
										<label>Owner Comment:</label>
										<div class="input-group">
	    									<textarea class="form-control" name="owner_comment" id="exampleTextarea" 
	    										placeholder="Enter Inspection Description" rows="3" maxlength="500"></textarea>
										</div>
									</div>
									<div class="col-lg-6">
				                        <label>Performed by</label>
				                        <select class="form-control" name="staff_id" id="exampleSelect1" required>
											<option selected >Select Staff</option>
											@foreach($staffs as $staff)
											<option value="{{$staff->user_id}}">{{$staff->name}}</option>
											@endforeach
									    </select>
				                    </div>
								</div>
								<div class="form-group row">
									<div class="col-lg-6">
				                        <label>Inspection Status</label>
				                        <select class="form-control" name="inspection_status" id="exampleSelect1" required>
											<option selected >Select Status</option>
											<option value="Confirmed">Confirmed</option>
											<option value="Pending">Pending</option>
											<option value="Completed">Completed</option>
											<option value="Cancelled">Cancelled</option>
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
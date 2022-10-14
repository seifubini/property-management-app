@extends('layouts.form-master')

@section('content')
<div class="content d-flex flex-column flex-column-fluid py-5 py-lg-10 gutter-b" id="kt_content">
	<!--begin::Entry-->
	<div class="d-flex flex-column-fluid">
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
		<div class="row">
			<div class="col-lg-12">
				<!-- begin crad -->
				<div class="card card-custom">
					<div class="card-header">
						<h3 class="card-title">Edit Inspection - {{$inspection->inspection_id}}</h3>
					</div>
					<!--begin::Form-->
					<div class="card-body">
					<form class="form" method="POST" action="{{ route('inspections.update', $inspection->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('patch')
                        <div class="form-group row">
							<div class="col-lg-6">
								<label>Inspection Date:</label>
								<input type="date" class="form-control" name="inspection_date" 
									value="{{$inspection->inspection_date}}" required>
							</div>
							<div class="col-lg-6">
		                        <label>Select Property</label>
		                        <select class="form-control" name="property_id" id="exampleSelect1" required>
									@foreach($properties as $property)
									@if($property->id == $inspection->property_id)
									<option value="{{$property->id}}" selected>{{$property->name}}/ {{$property->unique_id}}</option>
									@else
									<option value="{{$property->id}}">{{$property->name}}/ {{$property->unique_id}}</option>
									@endif
									@endforeach
							    </select>
		                    </div>
						</div>
						<div class="form-group row">
							<div class="col-lg-6">
								<label>Comment:</label>
								<div class="input-group">
									<textarea class="form-control" name="inspection_comment" id="exampleTextarea" 
										placeholder="Enter Inspection Comment" rows="3" maxlength="500">{{$inspection->inspection_comment}}</textarea>
								</div>
							</div>
							<div class="col-lg-6">
								<label>Description:</label>
								<div class="input-group">
									<textarea class="form-control" name="inspection_description" id="exampleTextarea" 
										placeholder="Enter Inspection Description" rows="3" maxlength="500">{{$inspection->inspection_description}}</textarea>
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
										placeholder="Enter Inspection Description" rows="3" maxlength="500">{{$inspection->owner_comment}}</textarea>
								</div>
							</div>
							<div class="col-lg-6">
		                        <label>Performed by</label>
		                        <select class="form-control" name="staff_id" id="exampleSelect1" required>
									@foreach($staffs as $staff)
									@if($staff->id == $inspection->staff_id)
									<option value="{{$staff->user_id}}" selected>{{$staff->name}}</option>
									@else
									<option value="{{$staff->user_id}}">{{$staff->name}}</option>
									@endif
									@endforeach
							    </select>
		                    </div>
						</div>
						<div class="form-group row">
							<div class="col-lg-6">
		                        <label>Inspection Status</label>
		                        <select class="form-control" name="inspection_status" id="exampleSelect1" required>
									<option value="{{$inspection->inspection_status}}" selected>{{$inspection->inspection_status}}</option>
									<option value="Confirmed">Confirmed</option>
									<option value="Pending">Pending</option>
									<option value="Completed">Completed</option>
									<option value="Cancelled">Cancelled</option>
							    </select>
		                    </div>
						</div>
						<div class="card-footer">
							<div class="col-lg-8">
								<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-danger">Delete</button>
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

<!-- Modal Starts Here-->
<div class="modal fade" id="modal-danger">
	<div class="modal-dialog">
	  <div class="modal-content bg-danger">
	    <div class="modal-header">
	      <h4 class="modal-title">Are you sure you want to delete <br> <strong>"{{ $inspection->inspection_id }}"</strong> ?</h4>

	    </div>

	    <form action="{{ route('inspections.destroy',$inspection->id) }}" method="POST">
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

@endsection
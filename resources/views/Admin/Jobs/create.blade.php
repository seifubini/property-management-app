@extends('layouts.form-master')

@section('content')
<div class="d-flex flex-column-fluid py-5 py-lg-10 gutter-b">
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
				<div class="card card-custom gutter-b example example-compact">
					<div class="card-header">
						<h3 class="card-title">Assign Job</h3>
					</div>
					<!--begin::Form-->
						<div class="card-body">
							<form class="form" method="POST" action="{{ route('jobs.store') }}" enctype="multipart/form-data">
		                        @csrf
		                        <div class="form-group row">
									<div class="col-lg-6">
										<label>Quotation ID</label>
										<input type="text" class="form-control" name="quotation_id" readonly
											value="{{$quotation->quotation_id}}" required>
									</div>
									<div class="col-lg-6">
				                        <label>Case ID</label>
				                        <input class="form-control" name="case_id" value="{{$quotation->case_id}}" type="text" required readonly />
				                        <input type="hidden" name="vendor_id" value="{{$quotation->vendor_id}}" style="display: none;" />
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
				                        <label>Delivery Date</label>
				                        <input class="form-control" readonly value="{{ date_format(date_create($quotation->delivery_time), 'jS M Y')}}" type="text" required />
				                    </div>
								</div>
								<hr>
								<div class="form-group row">
									<div class="col-lg-6">
				                        <label>Scope of Work</label>
				                        <input type="text" class="form-control" name="scope_of_work" placeholder="Enter Scope of Work" required>
				                    </div>
				                    <div class="col-lg-6">
				                        <label>Prepared By</label>
				                        <input type="text" class="form-control" value="{{Auth::user()->name}}" disabled required>
				                    </div>
								</div>
								<div class="form-group row">
									<div class="col-lg-6">
				                        <label>Approved by Client</label>
				                        <select class="form-control" name="client_approval" required id="exampleSelect1">
				                        	<option value="Yes">Yes</option>
				                        	<option value="No">No</option>
				                        </select>
				                    </div>
				                    <div class="col-lg-6">
				                        <label>Approved by Management</label>
				                        <select class="form-control" name="management_approval" required id="exampleSelect1">
				                        	<option value="Yes">Yes</option>
				                        	<option value="No">No</option>
				                        </select>
				                    </div>
								</div>
								<div class="form-group row">
									<div class="col-lg-6">
				                        <label>Agreement</label>
				                        <input type="text" class="form-control" name="agreement" placeholder="Enter Agreement" required>
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
					<!--end::Form-->
			</div>
				<!-- end card -->
		</div>
	</div>
</div>

@endsection
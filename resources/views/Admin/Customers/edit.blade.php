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
						<h3 class="card-title">Edit Customer</h3>
					</div>
					<!--begin::Form-->
					<form class="form" method="POST" action="{{ route('customers.update', $customer->id) }}" enctype="multipart/form-data">
						@method('patch')
                        @csrf
						<div class="card-body">
							<div class="form-group row">
								<div class="col-lg-6">
									<label>Name:</label>
									<input type="text" class="form-control" name="name" value="{{$customer->name}}">
									<span class="form-text text-muted">Please enter customer name</span>
								</div>
								<div class="col-lg-6">
									<label>Username:</label>
									<input type="text" class="form-control" name="username" value="{{$username}}" disabled>
									<span class="form-text text-muted">Please enter customer username</span>
								</div>
							</div>
							<div class="form-group row">
								<div class="col-lg-6">
									<label>Email:</label>
									<input type="email" class="form-control" name="email" value="{{$customer->email}}" disabled>
									<span class="form-text text-muted">Please enter email address</span>
								</div>
								<div class="col-lg-6">
									<label>Phone Number:</label>
									<div class="input-group">
										<input type="text" class="form-control" name="phone_number" value="{{$customer->phone_number}}">
									</div>
									<span class="form-text text-muted">Please enter phone number</span>
								</div>
							</div>
							<div class="form-group row">
								<div class="col-lg-6">
									<div class="image_increment">
										<label>Gender: </label>
										<select class="form-control" name="gender" id="exampleSelect1">
											<option value="{{$customer->gender}}" selected>{{$customer->gender}}</option>
										    <option value="Male">Male</option>
										    <option value="Female">Female</option>
									    </select>
										<span class="form-text text-muted">please select gender</span>
									</div>
								</div>
								<div class="col-lg-4">
									<div class="image_increment">
										<label>Customer Image: </label>
										<div class="input-group">
											<div></div>
										    <div class="custom-file">
										     <input type="file" name="picture" class="custom-file-input" id="customFile"/>
										     <label class="custom-file-label" for="customFile">Choose file</label>
										    </div>
										</div>
										<span class="form-text text-muted">attach customer image</span>
									</div>
								</div>
								<div class="col-lg-2">
									<img src="{!! url('images/customers') !!}/{{$customer->picture}}" style="border-radius: 5;" 
										width="100" height="100">
								</div>
							</div>
						</div>
						<div class="card-footer">
							<div class="row">
								<div class="col-lg-6">
									<button type="submit" class="btn btn-primary mr-2">Save</button>
									<button type="reset" class="btn btn-secondary">Cancel</button>
								</div>
							</div>
						</div>
					</form>
					<!--end::Form-->
				</div>
				<!-- end card -->
			</div>
		</div>
	</div>
</div>

@endsection
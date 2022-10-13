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
							<i class="la la-plus"></i>Add New Service</a>
							<!--end::Button-->
						</div>
					</div>
					<div class="card-body">
						<!--begin: Datatable-->
						<table class="table table-bordered table-hover table-checkable" id="kt_datatable" style="margin-top: 13px !important">
							<thead>
								<tr>
									<th>#</th>
									<th>Service ID</th>
									<th>Service Name</th>
									<th>Unit</th>
									<th>Unit Price</th>
									<th>Status</th>
									<th>Actions</th>
								</tr>
							</thead>
							<tbody>
								@foreach($services as $service)
								<tr>
									<td>{{++$i}}</td>
									<td>{{$service->service_id}}</td>
									<td>{{$service->service_name}}</td>
									<td>{{$service->unit}}</td>
									<td>{{$service->unit_price}} {{$service->unit_price_currency}}</td>
									<td>
										@if($service->status == "Active")
										<span class="dtr-data">
											<span class="label label-lg font-weight-bold label-light-success label-inline">Active</span>
										</span>
										@elseif($service->status == "InActive")
										<span class="dtr-data">
											<span class="label label-lg font-weight-bold label-light-danger label-inline">InActive</span>
										</span>
										@endif
									<td>
										<a href="javascript:;" title="Edit Record" class="btn btn-sm btn-clean btn-icon" 
											title="Edit Record" data-toggle="modal" data-target="#EditServiceModal{{$service->id}}">
											<i class="la la-edit"></i>
										</a>
										<a href="javascript:;" class="btn btn-sm btn-clean btn-icon" title="Delete Record" 
											data-toggle="modal" data-target="#modal-danger{{$service->id}}">
											<i class="la la-trash"></i>
										</a>
									</td>
								</tr>

								<!-- Edit Service Modal-->
<div class="modal fade" id="EditServiceModal{{$service->id}}" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Service</h5>
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
							<form class="form" method="POST" action="{{ route('services.update', $service->id) }}" enctype="multipart/form-data">
		                        @csrf
		                        @method('patch')
		                        <div class="form-group row">
									<div class="col-lg-6">
										<label>Service Name:</label>
										<input type="text" class="form-control" name="service_name" value="{{$service->service_name}}" required>
									</div>
									<div class="col-lg-6">
										<label>Unit:</label>
										<input type="text" class="form-control" name="unit" value="{{$service->unit}}" required>
									</div>
								</div>
								<div class="form-group row">
									<div class="col-lg-6">
										<label>Unit Price:</label>
										<input type="text" class="form-control" name="unit_price" value="{{$service->unit_price}}" required>
										<div class="input-group-append">
									       <select class="form-control" name="unit_price_currency" id="exampleSelect1" required>
												<option selected value="{{$service->unit_price_currency}}">{{$service->unit_price_currency}}</option>
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
										<label>Service Status:</label>
										<select class="form-control" name="status" id="exampleSelect1" required>
											<option selected value="{{$service->status}}">{{$service->status}}</option>
											<option value="Active">Active</option>
											<option value="InActive">InActive</option>
									    </select>
									</div>
								</div>
								<div class="form-group row">
									<div class="col-lg-12">
										<label>Service Description:</label>
										<div class="input-group">
	    									<textarea class="form-control" name="service_description" id="exampleTextarea" 
	    										placeholder="Enter Service Description" rows="3" 
	    										maxlength="500">{{$service->service_description}}</textarea>
										</div>
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
								<div class="modal fade" id="modal-danger{{$service->id}}">
									<div class="modal-dialog">
									  <div class="modal-content bg-danger">
									    <div class="modal-header">
									      <h4 class="modal-title">Are you sure you want to delete <br> <strong>"{{ $service->service_name }} - {{ $service->service_id }}"</strong> ?</h4>
									    </div>

									    <form action="{{ route('services.destroy',$service->id) }}" method="POST">
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


<!-- New Service Modal-->
<div class="modal fade" id="ServiceModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New Service</h5>
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
							<form class="form" method="POST" action="{{ route('services.store') }}" enctype="multipart/form-data">
		                        @csrf
		                        <div class="form-group row">
									<div class="col-lg-6">
										<label>Service Name:</label>
										<input type="text" class="form-control" name="service_name" placeholder="Please Enter Service name" required>
									</div>
									<div class="col-lg-6">
										<label>Unit:</label>
										<input type="text" class="form-control" name="unit" placeholder="Please Enter unit" required>
									</div>
								</div>
								<div class="form-group row">
									<div class="col-lg-6">
										<label>Unit Price:</label>
										<input type="text" class="form-control" name="unit_price" placeholder="Please Enter unit price" required>
										<div class="input-group-append">
									       <select class="form-control" name="unit_price_currency" id="exampleSelect1" required>
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
										<label>Service Status:</label>
										<select class="form-control" name="status" id="exampleSelect1" required>
											<option selected disabled>Select Service Status</option>
											<option value="Active">Active</option>
											<option value="InActive">InActive</option>
									    </select>
									</div>
								</div>
								<div class="form-group row">
									<div class="col-lg-12">
										<label>Service Description:</label>
										<div class="input-group">
	    									<textarea class="form-control" name="service_description" id="exampleTextarea" 
	    										placeholder="Enter Service Description" rows="3" maxlength="500"></textarea>
										</div>
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
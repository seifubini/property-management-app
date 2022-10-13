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
						<h3 class="card-title">Edit Property</h3>
					</div>
					<!--begin::Form-->
					<form class="form" method="POST" action="{{ route('properties.update', $property->id) }}" enctype="multipart/form-data">
						@method('patch')
                        @csrf
						<div class="card-body">
							<span><h3>Basic Property Information</h3></span>
							<div class="form-group row">
								<div class="col-lg-6">
									<label>Property Name:</label>
									<input type="text" class="form-control" name="name" value="{{$property->name}}">
									<span class="form-text text-muted">Please enter your property name</span>
								</div>
								<div class="col-lg-6">
									<label>Category:</label>
									<select class="form-control" name="category" value="{{$property->category}}" id="exampleSelect1">
									     <option value="{{$property->category}}" selected>{{$property->category}}</option>
									     <option value="House for Rent">House for Rent</option>
									     <option value="House for Sale">House for Sale</option>
									     <option value="Apartment for Rent">Apartment for Rent</option>
									     <option value="Apartment for Sale">Apartment for Sale</option>
									     <option value="Commercial Property for Rent">Commercial Property for Rent</option>
									     <option value="Commercial Property for Sale">Commercial Property for Sale</option>
									     <option value="Warehouse for Rent">Warehouse for Rent</option>
									     <option value="Warehouse for Sale">Warehouse for Sale</option>
									     <option value="Land for Sale">Land for Sale</option>
									     <option value="Bedsitter $ Rooms for Rent">Bedsitter $ Rooms for Rent</option>
								    </select>
								</div>
							</div>
							<div class="form-group row">
								<div class="col-lg-6">
									<label>Status:</label>
									<select class="form-control" name="status" value="{{$property->status}}" id="exampleSelect1">
									     <option value="{{$property->status}}" selected>{{$property->status}}</option>
									     <option value="Rent">Rent</option>
									     <option value="Sell">Sell</option>
									     <option value="In Hold">In Hold</option>
									     <option value="Pending">Pending</option>
									     <option value="Sold">Sold</option>
									     <option value="Under Offer">Under Offer</option>
								    </select>
								</div>
								<div class="col-lg-6">
									<label>Rent Period:</label>
									<input type="text" class="form-control" name="rent_period" value="{{$property->rent_period}}">
									<span class="form-text text-muted">Please enter property rent period</span>
								</div>
							</div>
							<div class="form-group row">
								<div class="col-lg-6">
									<label>Price:</label>
									<div class="input-group">
								     <div class="input-group-prepend">
								      <span class="input-group-text">{{$property->currency}}</span>
								     </div>
								     <input type="text" class="form-control" name="Price" value="{{$property->Price}}" />
								     <div class="input-group-append">
									    <select class="form-control" name="currency" id="exampleSelect1" required>
											<option selected value="{{$property->currency}}">{{$property->currency}}</option>
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
								    <span class="form-text text-muted">Please enter price</span>
								</div>
								<div class="col-lg-6">
									<label>Agent:</label>
									<select class="form-control" name="agent" value="{{$property->agent}}" id="exampleSelect1">
									     @foreach($agents as $agent)
									     @if($agent->id == $property->agent)
									     <option value="{{$agent->user_id}}" selected>{{$agent->name}}/ {{$agent->email}}</option>
									     @else
									     <option value="{{$agent->user_id}}">{{$agent->name}}/ {{$agent->email}}</option>
									     @endif
									     @endforeach
								    </select>
								</div>
							</div>
							<div class="form-group row">
								<div class="col-lg-6">
									<label>Phone Number:</label>
									<div class="input-group">
										<input type="text" class="form-control" name="phone_number" value="{{$property->phone_number}}" placeholder="Enter your phone number">
									</div>
									<span class="form-text text-muted">Please enter your phone number</span>
								</div>
								<div class="col-lg-6">
									<div class="image_increment">
										<label>Upload Images: </label>
										<div class="input-group">
											<div></div>
										    <div class="custom-file">
										     <input type="file" name="images" class="custom-file-input" id="customFile"/>
										     <label class="custom-file-label" for="customFile">Choose files</label>
										    </div>
										</div>
										<span class="form-text text-muted">can attach multiple files</span>
									</div>
								</div>
							</div>
							<div class="form-group row">
								<div class="col-lg-6">
									<label>Desciption:</label>
									<div class="input-group">
    									<textarea class="form-control" name="description" id="exampleTextarea" placeholder="Enter your property description" rows="3">{{$property->description}}</textarea>
									</div>
								</div>
							</div>
							<hr>
							<span><h3>Property Location</h3></span>
							<div class="form-group row">
								<div class="col-lg-6">
									<label>Country:</label>
									<select class="form-control" name="country" id="exampleSelect1">
										<option value="{{$property->country}}" selected>{{$property->country}}</option>
									    <option value="Afghanistan">Afghanistan</option>
	                                    <option value="Albania">Albania</option>
	                                    <option value="Algeria">Algeria</option>
	                                    <option value="American Samoa">American Samoa</option>
	                                    <option value="Andorra">Andorra</option>
	                                    <option value="Angola">Angola</option>
	                                    <option value="Anguilla">Anguilla</option>
	                                    <option value="Antigua & Barbuda">Antigua & Barbuda</option>
	                                    <option value="Argentina">Argentina</option>
	                                    <option value="Armenia">Armenia</option>
	                                    <option value="Aruba">Aruba</option>
	                                    <option value="Australia">Australia</option>
	                                    <option value="Austria">Austria</option>
	                                    <option value="Azerbaijan">Azerbaijan</option>
	                                    <option value="Bahamas">Bahamas</option>
	                                    <option value="Bahrain">Bahrain</option>
	                                    <option value="Bangladesh">Bangladesh</option>
	                                    <option value="Barbados">Barbados</option>
	                                    <option value="Belarus">Belarus</option>
	                                    <option value="Belgium">Belgium</option>
	                                    <option value="Belize">Belize</option>
	                                    <option value="Benin">Benin</option>
	                                    <option value="Bermuda">Bermuda</option>
	                                    <option value="Bhutan">Bhutan</option>
	                                    <option value="Bolivia">Bolivia</option>
	                                    <option value="Bonaire">Bonaire</option>
	                                    <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
	                                    <option value="Botswana">Botswana</option>
	                                    <option value="Brazil">Brazil</option>
	                                    <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
	                                    <option value="Brunei">Brunei</option>
	                                    <option value="Bulgaria">Bulgaria</option>
	                                    <option value="Burkina Faso">Burkina Faso</option>
	                                    <option value="Burundi">Burundi</option>
	                                    <option value="Cambodia">Cambodia</option>
	                                    <option value="Cameroon">Cameroon</option>
	                                    <option value="Canada">Canada</option>
	                                    <option value="Canary Islands">Canary Islands</option>
	                                    <option value="Cape Verde">Cape Verde</option>
	                                    <option value="Cayman Islands">Cayman Islands</option>
	                                    <option value="Central African Republic">Central African Republic</option>
	                                    <option value="Chad">Chad</option>
	                                    <option value="Channel Islands">Channel Islands</option>
	                                    <option value="Chile">Chile</option>
	                                    <option value="China">China</option>
	                                    <option value="Christmas Island">Christmas Island</option>
	                                    <option value="Cocos Island">Cocos Island</option>
	                                    <option value="Colombia">Colombia</option>
	                                    <option value="Comoros">Comoros</option>
	                                    <option value="Congo">Congo</option>
	                                    <option value="Cook Islands">Cook Islands</option>
	                                    <option value="Costa Rica">Costa Rica</option>
	                                    <option value="Cote DIvoire">Cote DIvoire</option>
	                                    <option value="Croatia">Croatia</option>
	                                    <option value="Cuba">Cuba</option>
	                                    <option value="Curaco">Curacao</option>
	                                    <option value="Cyprus">Cyprus</option>
	                                    <option value="Czech Republic">Czech Republic</option>
	                                    <option value="Denmark">Denmark</option>
	                                    <option value="Djibouti">Djibouti</option>
	                                    <option value="Dominica">Dominica</option>
	                                    <option value="Dominican Republic">Dominican Republic</option>
	                                    <option value="East Timor">East Timor</option>
	                                    <option value="Ecuador">Ecuador</option>
	                                    <option value="Egypt">Egypt</option>
	                                    <option value="El Salvador">El Salvador</option>
	                                    <option value="Equatorial Guinea">Equatorial Guinea</option>
	                                    <option value="Eritrea">Eritrea</option>
	                                    <option value="Estonia">Estonia</option>
	                                    <option value="Ethiopia">Ethiopia</option>
	                                    <option value="Falkland Islands">Falkland Islands</option>
	                                    <option value="Faroe Islands">Faroe Islands</option>
	                                    <option value="Fiji">Fiji</option>
	                                    <option value="Finland">Finland</option>
	                                    <option value="France">France</option>
	                                    <option value="French Guiana">French Guiana</option>
	                                    <option value="French Polynesia">French Polynesia</option>
	                                    <option value="French Southern Ter">French Southern Ter</option>
	                                    <option value="Gabon">Gabon</option>
	                                    <option value="Gambia">Gambia</option>
	                                    <option value="Georgia">Georgia</option>
	                                    <option value="Germany">Germany</option>
	                                    <option value="Ghana">Ghana</option>
	                                    <option value="Gibraltar">Gibraltar</option>
	                                    <option value="Great Britain">Great Britain</option>
	                                    <option value="Greece">Greece</option>
	                                    <option value="Greenland">Greenland</option>
	                                    <option value="Grenada">Grenada</option>
	                                    <option value="Guadeloupe">Guadeloupe</option>
	                                    <option value="Guam">Guam</option>
	                                    <option value="Guatemala">Guatemala</option>
	                                    <option value="Guinea">Guinea</option>
	                                    <option value="Guyana">Guyana</option>
	                                    <option value="Haiti">Haiti</option>
	                                    <option value="Hawaii">Hawaii</option>
	                                    <option value="Honduras">Honduras</option>
	                                    <option value="Hong Kong">Hong Kong</option>
	                                    <option value="Hungary">Hungary</option>
	                                    <option value="Iceland">Iceland</option>
	                                    <option value="Indonesia">Indonesia</option>
	                                    <option value="India">India</option>
	                                    <option value="Iran">Iran</option>
	                                    <option value="Iraq">Iraq</option>
	                                    <option value="Ireland">Ireland</option>
	                                    <option value="Isle of Man">Isle of Man</option>
	                                    <option value="Israel">Israel</option>
	                                    <option value="Italy">Italy</option>
	                                    <option value="Jamaica">Jamaica</option>
	                                    <option value="Japan">Japan</option>
	                                    <option value="Jordan">Jordan</option>
	                                    <option value="Kazakhstan">Kazakhstan</option>
	                                    <option value="Kenya">Kenya</option>
	                                    <option value="Kiribati">Kiribati</option>
	                                    <option value="Korea North">Korea North</option>
	                                    <option value="Korea Sout">Korea South</option>
	                                    <option value="Kuwait">Kuwait</option>
	                                    <option value="Kyrgyzstan">Kyrgyzstan</option>
	                                    <option value="Laos">Laos</option>
	                                    <option value="Latvia">Latvia</option>
	                                    <option value="Lebanon">Lebanon</option>
	                                    <option value="Lesotho">Lesotho</option>
	                                    <option value="Liberia">Liberia</option>
	                                    <option value="Libya">Libya</option>
	                                    <option value="Liechtenstein">Liechtenstein</option>
	                                    <option value="Lithuania">Lithuania</option>
	                                    <option value="Luxembourg">Luxembourg</option>
	                                    <option value="Macau">Macau</option>
	                                    <option value="Macedonia">Macedonia</option>
	                                    <option value="Madagascar">Madagascar</option>
	                                    <option value="Malaysia">Malaysia</option>
	                                    <option value="Malawi">Malawi</option>
	                                    <option value="Maldives">Maldives</option>
	                                    <option value="Mali">Mali</option>
	                                    <option value="Malta">Malta</option>
	                                    <option value="Marshall Islands">Marshall Islands</option>
	                                    <option value="Martinique">Martinique</option>
	                                    <option value="Mauritania">Mauritania</option>
	                                    <option value="Mauritius">Mauritius</option>
	                                    <option value="Mayotte">Mayotte</option>
	                                    <option value="Mexico">Mexico</option>
	                                    <option value="Midway Islands">Midway Islands</option>
	                                    <option value="Moldova">Moldova</option>
	                                    <option value="Monaco">Monaco</option>
	                                    <option value="Mongolia">Mongolia</option>
	                                    <option value="Montserrat">Montserrat</option>
	                                    <option value="Morocco">Morocco</option>
	                                    <option value="Mozambique">Mozambique</option>
	                                    <option value="Myanmar">Myanmar</option>
	                                    <option value="Nambia">Nambia</option>
	                                    <option value="Nauru">Nauru</option>
	                                    <option value="Nepal">Nepal</option>
	                                    <option value="Netherland Antilles">Netherland Antilles</option>
	                                    <option value="Netherlands">Netherlands (Holland, Europe)</option>
	                                    <option value="Nevis">Nevis</option>
	                                    <option value="New Caledonia">New Caledonia</option>
	                                    <option value="New Zealand">New Zealand</option>
	                                    <option value="Nicaragua">Nicaragua</option>
	                                    <option value="Niger">Niger</option>
	                                    <option value="Nigeria">Nigeria</option>
	                                    <option value="Niue">Niue</option>
	                                    <option value="Norfolk Island">Norfolk Island</option>
	                                    <option value="Norway">Norway</option>
	                                    <option value="Oman">Oman</option>
	                                    <option value="Pakistan">Pakistan</option>
	                                    <option value="Palau Island">Palau Island</option>
	                                    <option value="Palestine">Palestine</option>
	                                    <option value="Panama">Panama</option>
	                                    <option value="Papua New Guinea">Papua New Guinea</option>
	                                    <option value="Paraguay">Paraguay</option>
	                                    <option value="Peru">Peru</option>
	                                    <option value="Phillipines">Philippines</option>
	                                    <option value="Pitcairn Island">Pitcairn Island</option>
	                                    <option value="Poland">Poland</option>
	                                    <option value="Portugal">Portugal</option>
	                                    <option value="Puerto Rico">Puerto Rico</option>
	                                    <option value="Qatar">Qatar</option>
	                                    <option value="Republic of Montenegro">Republic of Montenegro</option>
	                                    <option value="Republic of Serbia">Republic of Serbia</option>
	                                    <option value="Reunion">Reunion</option>
	                                    <option value="Romania">Romania</option>
	                                    <option value="Russia">Russia</option>
	                                    <option value="Rwanda">Rwanda</option>
	                                    <option value="St Barthelemy">St Barthelemy</option>
	                                    <option value="St Eustatius">St Eustatius</option>
	                                    <option value="St Helena">St Helena</option>
	                                    <option value="St Kitts-Nevis">St Kitts-Nevis</option>
	                                    <option value="St Lucia">St Lucia</option>
	                                    <option value="St Maarten">St Maarten</option>
	                                    <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
	                                    <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
	                                    <option value="Saipan">Saipan</option>
	                                    <option value="Samoa">Samoa</option>
	                                    <option value="Samoa American">Samoa American</option>
	                                    <option value="San Marino">San Marino</option>
	                                    <option value="Sao Tome & Principe">Sao Tome & Principe</option>
	                                    <option value="Saudi Arabia">Saudi Arabia</option>
	                                    <option value="Senegal">Senegal</option>
	                                    <option value="Seychelles">Seychelles</option>
	                                    <option value="Sierra Leone">Sierra Leone</option>
	                                    <option value="Singapore">Singapore</option>
	                                    <option value="Slovakia">Slovakia</option>
	                                    <option value="Slovenia">Slovenia</option>
	                                    <option value="Solomon Islands">Solomon Islands</option>
	                                    <option value="Somalia">Somalia</option>
	                                    <option value="South Africa">South Africa</option>
	                                    <option value="Spain">Spain</option>
	                                    <option value="Sri Lanka">Sri Lanka</option>
	                                    <option value="Sudan">Sudan</option>
	                                    <option value="Suriname">Suriname</option>
	                                    <option value="Swaziland">Swaziland</option>
	                                    <option value="Sweden">Sweden</option>
	                                    <option value="Switzerland">Switzerland</option>
	                                    <option value="Syria">Syria</option>
	                                    <option value="Tahiti">Tahiti</option>
	                                    <option value="Taiwan">Taiwan</option>
	                                    <option value="Tajikistan">Tajikistan</option>
	                                    <option value="Tanzania">Tanzania</option>
	                                    <option value="Thailand">Thailand</option>
	                                    <option value="Togo">Togo</option>
	                                    <option value="Tokelau">Tokelau</option>
	                                    <option value="Tonga">Tonga</option>
	                                    <option value="Trinidad & Tobago">Trinidad & Tobago</option>
	                                    <option value="Tunisia">Tunisia</option>
	                                    <option value="Turkey">Turkey</option>
	                                    <option value="Turkmenistan">Turkmenistan</option>
	                                    <option value="Turks & Caicos Is">Turks & Caicos Is</option>
	                                    <option value="Tuvalu">Tuvalu</option>
	                                    <option value="Uganda">Uganda</option>
	                                    <option value="United Kingdom">United Kingdom</option>
	                                    <option value="Ukraine">Ukraine</option>
	                                    <option value="United Arab Erimates">United Arab Emirates</option>
	                                    <option value="United States of America">United States of America</option>
	                                    <option value="Uraguay">Uruguay</option>
	                                    <option value="Uzbekistan">Uzbekistan</option>
	                                    <option value="Vanuatu">Vanuatu</option>
	                                    <option value="Vatican City State">Vatican City State</option>
	                                    <option value="Venezuela">Venezuela</option>
	                                    <option value="Vietnam">Vietnam</option>
	                                    <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
	                                    <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
	                                    <option value="Wake Island">Wake Island</option>
	                                    <option value="Wallis & Futana Is">Wallis & Futana Is</option>
	                                    <option value="Yemen">Yemen</option>
	                                    <option value="Zaire">Zaire</option>
	                                    <option value="Zambia">Zambia</option>
	                                    <option value="Zimbabwe">Zimbabwe</option>
								    </select>
								    <span class="form-text text-muted">Please select your country</span>
								</div>
								<div class="col-lg-6">
									<label>City:</label>
									<div class="input-group">
										<input type="text" class="form-control" name="city" value="{{$property->city}}">
									</div>
									<span class="form-text text-muted">Please enter your city</span>
								</div>
							</div>
							<div class="form-group row">
								<div class="col-lg-6">
									<label>Address:</label>
									<div class="input-group">
										<input type="text" name="Address" class="form-control" value="{{$property->Address}}">
									</div>
									<span class="form-text text-muted">Please enter your address</span>
								</div>
								<div class="col-lg-6">
									<label>Subcity/ Kebele:</label>
									<div class="input-group">
										<input type="text" name="zone" class="form-control" value="{{$property->zone}}">
									</div>
									<span class="form-text text-muted">Please enter your zone or subcity</span>
								</div>
							</div>
							<div class="form-group row">
								<div class="col-lg-6">
									<label>Latitude:</label>
									<div class="input-group">
										<input type="text" name="latitude" class="form-control" value="{{$property->latitude}}">
										<div class="input-group-append">
											<span class="input-group-text">
												<i class="la la-map-marker"></i>
											</span>
										</div>
									</div>
									<span class="form-text text-muted">Please enter your address</span>
								</div>
								<div class="col-lg-6">
									<label>Longitude:</label>
									<div class="input-group">
										<input type="text" name="longitude" class="form-control" value="{{$property->longitude}}">
										<div class="input-group-append">
											<span class="input-group-text">
												<i class="la la-map-marker"></i>
											</span>
										</div>
									</div>
									<span class="form-text text-muted">Please enter your address</span>
								</div>
							</div>
							<hr>
							<span><h3>Property Details</h3></span>
							<div class="form-group row">
								<div class="col-lg-6">
									<label>Property Size:</label>
									<div class="input-group">
										<input type="text" class="form-control" name="property_size" value="{{$property->property_size}}">
										<div class="input-group-append">
									       <span class="input-group-text">(Sqm)</span>
									    </div>
									</div>
									<span class="form-text text-muted">Please enter your property size</span>
								</div>
								<div class="col-lg-6">
									<label>Bed Rooms:</label>
									<div class="input-group">
										<input type="number" class="form-control" name="bed_rooms" value="{{$property->bed_rooms}}">
									</div>
									<span class="form-text text-muted">Please enter number of bedrooms</span>
								</div>
							</div>
							<div class="form-group row">
								<div class="col-lg-6">
									<label>Baths:</label>
									<div class="input-group">
										<input type="text" class="form-control" name="baths" value="{{$property->baths}}">
									</div>
									<span class="form-text text-muted">Please enter number of baths</span>
								</div>
								<div class="col-lg-6">
									<label>Garages:</label>
									<div class="input-group">
										<input type="number" class="form-control" name="garages" value="{{$property->garages}}">
									</div>
									<span class="form-text text-muted">Please enter number of garages</span>
								</div>
							</div>
							<div class="form-group row">
								<div class="col-lg-6">
									<label>Floor & Flat No:</label>
									<div class="input-group">
										<input type="number" class="form-control" name="floors" value="{{$property->floors}}">
									</div>
									<span class="form-text text-muted">Please enter number of floors</span>
								</div>
								<div class="col-lg-6">
									<label>Building Year:</label>
									<div class="input-group">
										<input type="text" class="form-control" name="building_year" value="{{$property->building_year}}">
									</div>
									<span class="form-text text-muted">Please enter building year</span>
								</div>
							</div>
							<div class="form-group row">
								<div class="col-lg-6">
									<label>Video Description:</label>
									<div class="input-group">
										<input type="text" class="form-control" name="video_description" value="{{$property->video_description}}">
									</div>
									<span class="form-text text-muted">Please enter property video description</span>
								</div>
								<div class="col-lg-6">
									<label>Video URL:</label>
									<div class="input-group">
										<input type="text" class="form-control" name="video_url" value="{{$property->video_url}}">
									</div>
									<span class="form-text text-muted">Please enter property video link</span>
								</div>
							</div>
							<div class="form-group row">
								<div class="col-lg-6">
									<label>Floor Plan Description:</label>
									<div class="input-group">
										<input type="text" class="form-control" name="floor_plan_description" 
											value="{{$property->floor_plan_description}}">
									</div>
									<span class="form-text text-muted">Please enter floor plan description</span>
								</div>
								<div class="col-lg-6">
									<label>Add Floor Plans: </label>
									<div class="input-group">
										<div></div>
									    <div class="custom-file">
									     <input type="file" name="floor_plans" class="custom-file-input" id="customFile"/>
									     <label class="custom-file-label" for="customFile">Choose files</label>
									    </div>
									</div>
									<span class="form-text text-muted">can attach multiple files</span>
								</div>
							</div>
							<div class="form-group row">
								<div class="col-lg-12">
						        <label>Property Features: </label>
						        <div class="input-group">
							        <div class="checkbox-inline">
						            	@foreach($property_features as $property_feature)
											<label class="checkbox">
											<input type="checkbox" name="features_text[]"
		                                        value="{{ $property_feature->id }}" {{ in_array($property_feature->id, $features) 
                                                ? 'checked' : '' }}>
		                                        <span></span>
		                                        {{ $property_feature->name }}
		                                    </label>
	                                    @endforeach
							        </div>
						    	</div>
						    	<span class="form-text text-muted">Select Property Features</span>
						    	</div>
						    </div>
							<div class="form-group row">
								<div class="col-lg-6">
								    <label>Published:</label>
								    <div class="radio-inline">
								     <label class="radio radio-solid">
								      <input type="radio" name="published" checked="checked" value="yes"/>
								      <span></span>
								      Yes
								     </label>
								     <label class="radio radio-solid">
								      <input type="radio" name="published" value="no"/>
								      <span></span>
								      No
								     </label>
								    </div>
								</div>
							</div>
						</div>
						<div class="card-footer">
							<div class="row">
								<div class="col-lg-6">
									<button type="submit" class="btn btn-primary mr-2">Update</button>
									<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-danger">Delete</button>
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

<!-- Modal Starts Here-->
<div class="modal fade" id="modal-danger">
	<div class="modal-dialog">
	  <div class="modal-content bg-danger">
	    <div class="modal-header">
	      <h4 class="modal-title">Are you sure you want to delete <br> <strong>"{{ $property->name }}"</strong> ?</h4>

	    </div>

	    <form action="{{ route('properties.destroy',$property->id) }}" method="POST">
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
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
            <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">{{$case->name}} - {{$case->unique_id}}</h5>
            <!--end::Title-->
            <!--begin::Separator-->
            <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-5 bg-gray-200"></div>
            <!--end::Separator-->
        </div>
        <!--end::Details-->
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
                                <a href="#" class="d-flex align-items-center text-dark text-hover-primary font-size-h5 font-weight-bold mr-3">{{$case->name}}
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
                            <div class="d-flex flex-wrap align-items-center py-2">
                                <div class="d-flex align-items-center mr-10">
                                    <div class="mr-6">
                                        <div class="font-weight-bold mb-2">Price</div>
                                        <span class="btn btn-sm btn-text btn-light-primary text-uppercase font-weight-bold">{{ $case->Price }} {{ $case->currency }}</span>
                                    </div>
                                    <div class="">
                                        <div class="font-weight-bold mb-2">Rent Period</div>
                                        <span class="btn btn-sm btn-text btn-light-danger text-uppercase font-weight-bold">{{$case->rent_period}}</span>
                                    </div>
                                </div>
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
                                    </span>{{$case->country}}, {{$case->city}}, {{$case->Address}}/ {{$case->zone}}</a>
                            </div>
                    </div>
                    <div class="flex-shrink-0 mr-3 mt-lg-0 mt-2">
                        <video width="300" height="200" controls>
                          <source src="{{$case->video_url}}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                        <div class="flex-grow-1 font-weight-bold text-dark-50 py-5 py-lg-2 mr-5">{{$case->video_description}}
                            </div>
                    </div>
                </div>                
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
                            <span class="card-label font-weight-bolder text-dark">Submit Quotation for {{$case->case_name}}</span>
                        </h3>
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body pt-0 pb-3">
                        <form class="form" method="POST" action="{{ route('quotations.store') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row">
                                    <div class="col-lg-6">
                                        <label>Case Name:</label>
                                        <input type="text" class="form-control" value="{{$case->case_name}}" disabled>
                                        <input type="hidden" name="case_id" value="{{$case->id}}" style="display: none;">
                                    </div>
                                    <div class="col-lg-6">
                                        <label>Case ID:</label>
                                        <input type="text" class="form-control" value="{{$case->case_id}}" disabled>
                                        <input type="hidden" name="property_id" value="{{$case->property_id}}" style="display: none;">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-12">
                                        <label>Case Description:</label>
                                        <div class="input-group">
                                            <div class="flex-grow-1 font-weight-bold text-dark-50 py-5 py-lg-2 mr-5">{{$case->case_description}}</div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="form-group row">
                                    <div class="col-lg-6">
                                        <label>Vendor Name:</label>
                                        <select class="form-control" name="vendor_id" id="exampleSelect1" required>
                                            @foreach($vendors as $vendor)
                                            @if($vendor->user_id == auth()->user()->id)
                                            <option value="{{$vendor->user_id}}" selected>{{$vendor->name}}/ {{$vendor->email}}</option>
                                            @else
                                            <option value="{{$vendor->user_id}}">{{$vendor->name}}/ {{$vendor->email}}</option>
                                            @endif
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-lg-6">
                                        <label>Price</label>
                                        <input type="text" class="form-control" name="bid_price" placeholder="Please Enter Price" required>
                                        <div class="input-group-append">
                                           <select class="form-control" name="bid_currency" id="exampleSelect1" required>
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
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-6">
                                    <label>Delivery Date</label>
                                     <div class='input-group'>
                                      <input type='date' class="form-control" name="delivery_time" required placeholder="Please Enter Delivery Date"/>
                                     </div>
                                    </div>
                                    @role('vendor')
                                    <div class="col-lg-6">
                                        <label>Quotation Status</label>
                                        <select class="form-control" name="quotation_status" disabled id="exampleSelect1">
                                            <option value="Accepted">Accepted</option>
                                            <option selected value="Pending">Pending</option>
                                            <option value="Rejected">Rejected</option>
                                        </select>
                                    </div>
                                    @endrole
                                    @role('property manager')
                                    <div class="col-lg-6">
                                        <label>Quotation Status</label>
                                        <select class="form-control" name="quotation_status" disabled id="exampleSelect1">
                                            <option value="Accepted">Accepted</option>
                                            <option value="Pending">Pending</option>
                                            <option value="Rejected">Rejected</option>
                                        </select>
                                    </div>
                                    @endrole
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

@endsection
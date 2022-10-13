@extends('layouts.dashboard-master')

@section('content')

<div class="content d-flex flex-column flex-column-fluid py-5 py-lg-10 gutter-b" id="kt_content">
	<!--begin::Subheader-->
	
	<!--end::Subheader-->
	<!--begin::Entry-->
	<div class="d-flex flex-column-fluid">
		<!--begin::Container-->
		<div class="container">
			<!--begin::Dashboard-->
			<!--begin::Row-->
			<div class="row">
				<div class="col-xl-4">
					<!--begin::Tiles Widget 8-->
					<div class="card card-custom gutter-b card-stretch">
						<!--begin::Header-->
						<div class="card-header border-0 pt-5">
							<div class="card-title">
								<div class="card-label">
									<div class="font-weight-bolder">Weekly Sales Stats</div>
									<div class="font-size-sm text-muted mt-2">890,344 Sales</div>
								</div>
							</div>
							<div class="card-toolbar">
								<div class="dropdown dropdown-inline">
									<a href="#" class="btn btn-clean btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<i class="ki ki-bold-more-hor"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
										<!--begin::Navigation-->
										<ul class="navi navi-hover py-5">
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-icon">
														<i class="flaticon2-drop"></i>
													</span>
													<span class="navi-text">New Group</span>
												</a>
											</li>
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-icon">
														<i class="flaticon2-list-3"></i>
													</span>
													<span class="navi-text">Contacts</span>
												</a>
											</li>
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-icon">
														<i class="flaticon2-rocket-1"></i>
													</span>
													<span class="navi-text">Groups</span>
													<span class="navi-link-badge">
														<span class="label label-light-primary label-inline font-weight-bold">new</span>
													</span>
												</a>
											</li>
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-icon">
														<i class="flaticon2-bell-2"></i>
													</span>
													<span class="navi-text">Calls</span>
												</a>
											</li>
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-icon">
														<i class="flaticon2-gear"></i>
													</span>
													<span class="navi-text">Settings</span>
												</a>
											</li>
											<li class="navi-separator my-3"></li>
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-icon">
														<i class="flaticon2-magnifier-tool"></i>
													</span>
													<span class="navi-text">Help</span>
												</a>
											</li>
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-icon">
														<i class="flaticon2-bell-2"></i>
													</span>
													<span class="navi-text">Privacy</span>
													<span class="navi-link-badge">
														<span class="label label-light-danger label-rounded font-weight-bold">5</span>
													</span>
												</a>
											</li>
										</ul>
										<!--end::Navigation-->
									</div>
								</div>
							</div>
						</div>
						<!--end::Header-->
						<!--begin::Body-->
						<div class="card-body d-flex flex-column p-0" style="position: relative;">
							<!--begin::Items-->
							<div class="flex-grow-1 card-spacer">
								<!--begin::Item-->
								<div class="d-flex align-items-center justify-content-between mb-10">
									<div class="d-flex align-items-center mr-2">
										<div class="symbol symbol-40 symbol-light-primary mr-3 flex-shrink-0">
											<div class="symbol-label">
												<span class="svg-icon svg-icon-lg svg-icon-primary">
													<!--begin::Svg Icon | path:assets/media/svg/icons/Home/Library.svg-->
													<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
														<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
															<rect x="0" y="0" width="24" height="24"></rect>
															<path d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z" fill="#000000"></path>
															<rect fill="#000000" opacity="0.3" transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519)" x="16.3255682" y="2.94551858" width="3" height="18" rx="1"></rect>
														</g>
													</svg>
													<!--end::Svg Icon-->
												</span>
											</div>
										</div>
										<div>
											<a href="#" class="font-size-h6 text-dark-75 text-hover-primary font-weight-bolder">Top Authors</a>
											<div class="font-size-sm text-muted font-weight-bold mt-1">Ricky Hunt, Sandra Trepp</div>
										</div>
									</div>
									<div class="label label-light label-inline font-weight-bold text-dark-50 py-4 px-3 font-size-base">+90$</div>
								</div>
								<!--end::Item-->
								<!--begin::Item-->
								<div class="d-flex align-items-center justify-content-between mb-10">
									<div class="d-flex align-items-center mr-2">
										<div class="symbol symbol-40 symbol-light-warning mr-3 flex-shrink-0">
											<div class="symbol-label">
												<span class="svg-icon svg-icon-lg svg-icon-warning">
													<!--begin::Svg Icon | path:assets/media/svg/icons/Devices/Mic.svg-->
													<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
														<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
															<rect x="0" y="0" width="24" height="24"></rect>
															<path d="M12.9975507,17.929461 C12.9991745,17.9527631 13,17.9762852 13,18 L13,21 C13,21.5522847 12.5522847,22 12,22 C11.4477153,22 11,21.5522847 11,21 L11,18 C11,17.9762852 11.0008255,17.9527631 11.0024493,17.929461 C7.60896116,17.4452857 5,14.5273206 5,11 L7,11 C7,13.7614237 9.23857625,16 12,16 C14.7614237,16 17,13.7614237 17,11 L19,11 C19,14.5273206 16.3910388,17.4452857 12.9975507,17.929461 Z" fill="#000000" fill-rule="nonzero"></path>
															<rect fill="#000000" opacity="0.3" transform="translate(12.000000, 8.000000) rotate(-360.000000) translate(-12.000000, -8.000000)" x="9" y="2" width="6" height="12" rx="3"></rect>
														</g>
													</svg>
													<!--end::Svg Icon-->
												</span>
											</div>
										</div>
										<div>
											<a href="#" class="font-size-h6 text-dark-75 text-hover-primary font-weight-bolder">Top Sales</a>
											<div class="font-size-sm text-muted font-weight-bold mt-1">PitStop Emails</div>
										</div>
									</div>
									<div class="label label-light label-inline font-weight-bold text-dark-50 py-4 px-3 font-size-base">+4500$</div>
								</div>
								<!--end::Item-->
								<!--begin::Item-->
								<div class="d-flex align-items-center justify-content-between mb-10">
									<div class="d-flex align-items-center mr-2">
										<div class="symbol symbol-40 symbol-light-success mr-3 flex-shrink-0">
											<div class="symbol-label">
												<span class="svg-icon svg-icon-lg svg-icon-success">
													<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group-chat.svg-->
													<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
														<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
															<rect x="0" y="0" width="24" height="24"></rect>
															<path d="M16,15.6315789 L16,12 C16,10.3431458 14.6568542,9 13,9 L6.16183229,9 L6.16183229,5.52631579 C6.16183229,4.13107011 7.29290239,3 8.68814808,3 L20.4776218,3 C21.8728674,3 23.0039375,4.13107011 23.0039375,5.52631579 L23.0039375,13.1052632 L23.0206157,17.786793 C23.0215995,18.0629336 22.7985408,18.2875874 22.5224001,18.2885711 C22.3891754,18.2890457 22.2612702,18.2363324 22.1670655,18.1421277 L19.6565168,15.6315789 L16,15.6315789 Z" fill="#000000"></path>
															<path d="M1.98505595,18 L1.98505595,13 C1.98505595,11.8954305 2.88048645,11 3.98505595,11 L11.9850559,11 C13.0896254,11 13.9850559,11.8954305 13.9850559,13 L13.9850559,18 C13.9850559,19.1045695 13.0896254,20 11.9850559,20 L4.10078614,20 L2.85693427,21.1905292 C2.65744295,21.3814685 2.34093638,21.3745358 2.14999706,21.1750444 C2.06092565,21.0819836 2.01120804,20.958136 2.01120804,20.8293182 L2.01120804,18.32426 C1.99400175,18.2187196 1.98505595,18.1104045 1.98505595,18 Z M6.5,14 C6.22385763,14 6,14.2238576 6,14.5 C6,14.7761424 6.22385763,15 6.5,15 L11.5,15 C11.7761424,15 12,14.7761424 12,14.5 C12,14.2238576 11.7761424,14 11.5,14 L6.5,14 Z M9.5,16 C9.22385763,16 9,16.2238576 9,16.5 C9,16.7761424 9.22385763,17 9.5,17 L11.5,17 C11.7761424,17 12,16.7761424 12,16.5 C12,16.2238576 11.7761424,16 11.5,16 L9.5,16 Z" fill="#000000" opacity="0.3"></path>
														</g>
													</svg>
													<!--end::Svg Icon-->
												</span>
											</div>
										</div>
										<div>
											<a href="#" class="font-size-h6 text-dark-75 text-hover-primary font-weight-bolder">Bestsellers</a>
											<div class="font-size-sm text-muted font-weight-bold mt-1">Pitstop Email Marketing</div>
										</div>
									</div>
									<div class="label label-light label-inline font-weight-bold text-dark-50 py-4 px-3 font-size-base">+75$</div>
								</div>
								<!--end::Item-->
							</div>
							<!--end::Items-->
							<!--begin::Chart-->
							<div id="kt_tiles_widget_8_chart" class="card-rounded-bottom" data-color="warning" style="height: 150px; min-height: 150px;"><div id="apexchartstwt2c8dd" class="apexcharts-canvas apexchartstwt2c8dd apexcharts-theme-light" style="width: 847px; height: 150px;"><svg id="SvgjsSvg1100" width="847" height="150" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1102" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs1101"><clipPath id="gridRectMasktwt2c8dd"><rect id="SvgjsRect1105" width="854" height="153" x="-3.5" y="-1.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMasktwt2c8dd"><rect id="SvgjsRect1106" width="851" height="154" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG1113" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1114" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG1116" class="apexcharts-grid"><g id="SvgjsG1117" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine1119" x1="0" y1="0" x2="847" y2="0" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1120" x1="0" y1="15" x2="847" y2="15" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1121" x1="0" y1="30" x2="847" y2="30" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1122" x1="0" y1="45" x2="847" y2="45" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1123" x1="0" y1="60" x2="847" y2="60" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1124" x1="0" y1="75" x2="847" y2="75" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1125" x1="0" y1="90" x2="847" y2="90" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1126" x1="0" y1="105" x2="847" y2="105" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1127" x1="0" y1="120" x2="847" y2="120" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1128" x1="0" y1="135" x2="847" y2="135" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1129" x1="0" y1="150" x2="847" y2="150" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line></g><g id="SvgjsG1118" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine1131" x1="0" y1="150" x2="847" y2="150" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine1130" x1="0" y1="1" x2="0" y2="150" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG1107" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG1108" class="apexcharts-series" seriesName="NetxProfit" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath1111" d="M 0 150L 0 83.33333333333333C 59.29 83.33333333333333 110.11000000000001 83.33333333333333 169.4 83.33333333333333C 228.69 83.33333333333333 279.51 50 338.8 50C 398.09 50 448.91 100 508.2 100C 567.49 100 618.3100000000001 16.666666666666657 677.6 16.666666666666657C 736.89 16.666666666666657 787.71 50 847 50C 847 50 847 50 847 150M 847 50z" fill="rgba(255,244,222,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMasktwt2c8dd)" pathTo="M 0 150L 0 83.33333333333333C 59.29 83.33333333333333 110.11000000000001 83.33333333333333 169.4 83.33333333333333C 228.69 83.33333333333333 279.51 50 338.8 50C 398.09 50 448.91 100 508.2 100C 567.49 100 618.3100000000001 16.666666666666657 677.6 16.666666666666657C 736.89 16.666666666666657 787.71 50 847 50C 847 50 847 50 847 150M 847 50z" pathFrom="M -1 150L -1 150L 169.4 150L 338.8 150L 508.2 150L 677.6 150L 847 150"></path><path id="SvgjsPath1112" d="M 0 83.33333333333333C 59.29 83.33333333333333 110.11000000000001 83.33333333333333 169.4 83.33333333333333C 228.69 83.33333333333333 279.51 50 338.8 50C 398.09 50 448.91 100 508.2 100C 567.49 100 618.3100000000001 16.666666666666657 677.6 16.666666666666657C 736.89 16.666666666666657 787.71 50 847 50" fill="none" fill-opacity="1" stroke="#ffa800" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMasktwt2c8dd)" pathTo="M 0 83.33333333333333C 59.29 83.33333333333333 110.11000000000001 83.33333333333333 169.4 83.33333333333333C 228.69 83.33333333333333 279.51 50 338.8 50C 398.09 50 448.91 100 508.2 100C 567.49 100 618.3100000000001 16.666666666666657 677.6 16.666666666666657C 736.89 16.666666666666657 787.71 50 847 50" pathFrom="M -1 150L -1 150L 169.4 150L 338.8 150L 508.2 150L 677.6 150L 847 150"></path><g id="SvgjsG1109" class="apexcharts-series-markers-wrap" data:realIndex="0"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1137" r="0" cx="0" cy="0" class="apexcharts-marker w6b28cr0j no-pointer-events" stroke="#ffa800" fill="#fff4de" fill-opacity="1" stroke-width="3" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG1110" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine1132" x1="0" y1="0" x2="847" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1133" x1="0" y1="0" x2="847" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1134" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1135" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1136" class="apexcharts-point-annotations"></g></g><g id="SvgjsG1115" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG1103" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend"></div><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: Poppins; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(255, 244, 222);"></span><div class="apexcharts-tooltip-text" style="font-family: Poppins; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light"><div class="apexcharts-xaxistooltip-text" style="font-family: Poppins; font-size: 12px;"></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
							<!--end::Chart-->
						<div class="resize-triggers"><div class="expand-trigger"><div style="width: 848px; height: 411px;"></div></div><div class="contract-trigger"></div></div></div>
						<!--end::Body-->
					</div>
					<!--end::Tiles Widget 8-->
				</div>
				<div class="col-xl-8">
					<!--begin::Advance Table Widget 10-->
					<div class="card card-custom gutter-b card-stretch">
						<!--begin::Header-->
						<div class="card-header border-0 py-5">
							<h3 class="card-title align-items-start flex-column">
								<span class="card-label font-weight-bolder text-dark">New Arrivals</span>
								<span class="text-muted mt-3 font-weight-bold font-size-sm">More than 400+ new members</span>
							</h3>
							<div class="card-toolbar">
								<a href="#" class="btn btn-info font-weight-bolder font-size-sm">New Report</a>
							</div>
						</div>
						<!--end::Header-->
						<!--begin::Body-->
						<div class="card-body py-0">
							<!--begin::Table-->
							<div class="table-responsive">
								<table class="table table-head-custom table-vertical-center" id="kt_advance_table_widget_4">
									<thead>
										<tr class="text-left">
											<th class="pl-0" style="width: 30px">
												<label class="checkbox checkbox-lg checkbox-inline mr-2">
													<input type="checkbox" value="1">
													<span></span>
												</label>
											</th>
											<th class="pl-0" style="min-width: 120px">Order id</th>
											<th style="min-width: 110px">Country</th>
											<th style="min-width: 110px">
												<span class="text-info">Date</span>
												<span class="svg-icon svg-icon-sm svg-icon-primary">
													<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Down-2.svg-->
													<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
														<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
															<polygon points="0 0 24 0 24 24 0 24"></polygon>
															<rect fill="#000000" opacity="0.3" x="11" y="4" width="2" height="10" rx="1"></rect>
															<path d="M6.70710678,19.7071068 C6.31658249,20.0976311 5.68341751,20.0976311 5.29289322,19.7071068 C4.90236893,19.3165825 4.90236893,18.6834175 5.29289322,18.2928932 L11.2928932,12.2928932 C11.6714722,11.9143143 12.2810586,11.9010687 12.6757246,12.2628459 L18.6757246,17.7628459 C19.0828436,18.1360383 19.1103465,18.7686056 18.7371541,19.1757246 C18.3639617,19.5828436 17.7313944,19.6103465 17.3242754,19.2371541 L12.0300757,14.3841378 L6.70710678,19.7071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 15.999999) scale(1, -1) translate(-12.000003, -15.999999)"></path>
														</g>
													</svg>
													<!--end::Svg Icon-->
												</span>
											</th>
											<th style="min-width: 120px">Company</th>
											<th style="min-width: 120px">Status</th>
											<th class="pr-0 text-right" style="min-width: 160px">Action</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td class="pl-0 py-6">
												<label class="checkbox checkbox-lg checkbox-inline">
													<input type="checkbox" value="1">
													<span></span>
												</label>
											</td>
											<td class="pl-0">
												<a href="#" class="text-dark-75 font-weight-bolder text-hover-primary font-size-lg">56037-XDER</a>
											</td>
											<td>
												<span class="text-dark-75 font-weight-bolder d-block font-size-lg">Brasil</span>
												<span class="text-muted font-weight-bold">Code: BR</span>
											</td>
											<td>
												<span class="text-info font-weight-bolder d-block font-size-lg">05/28/2020</span>
												<span class="text-muted font-weight-bold">Paid</span>
											</td>
											<td>
												<span class="text-dark-75 font-weight-bolder d-block font-size-lg">Intertico</span>
												<span class="text-muted font-weight-bold">Web, UI/UX Design</span>
											</td>
											<td>
												<span class="label label-lg label-light-primary label-inline">Approved</span>
											</td>
											<td class="pr-0 text-right">
												<a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
													<span class="svg-icon svg-icon-md svg-icon-primary">
														<!--begin::Svg Icon | path:assets/media/svg/icons/General/Settings-1.svg-->
														<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
															<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																<rect x="0" y="0" width="24" height="24"></rect>
																<path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000"></path>
																<path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3"></path>
															</g>
														</svg>
														<!--end::Svg Icon-->
													</span>
												</a>
												<a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
													<span class="svg-icon svg-icon-md svg-icon-primary">
														<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
														<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
															<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																<rect x="0" y="0" width="24" height="24"></rect>
																<path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)"></path>
																<path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
															</g>
														</svg>
														<!--end::Svg Icon-->
													</span>
												</a>
												<a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
													<span class="svg-icon svg-icon-md svg-icon-primary">
														<!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->
														<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
															<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																<rect x="0" y="0" width="24" height="24"></rect>
																<path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"></path>
																<path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"></path>
															</g>
														</svg>
														<!--end::Svg Icon-->
													</span>
												</a>
											</td>
										</tr>
										<tr>
											<td class="pl-0 py-6">
												<label class="checkbox checkbox-lg checkbox-inline">
													<input type="checkbox" value="1">
													<span></span>
												</label>
											</td>
											<td class="pl-0">
												<a href="#" class="text-dark-75 font-weight-bolder text-hover-primary font-size-lg">05822-FXSP</a>
											</td>
											<td>
												<span class="text-dark-75 font-weight-bolder d-block font-size-lg">Belarus</span>
												<span class="text-muted font-weight-bold">Code: BY</span>
											</td>
											<td>
												<span class="text-info font-weight-bolder d-block font-size-lg">02/04/2020</span>
												<span class="text-muted font-weight-bold">Rejected</span>
											</td>
											<td>
												<span class="text-dark-75 font-weight-bolder d-block font-size-lg">Agoda</span>
												<span class="text-muted font-weight-bold">Houses &amp; Hotels</span>
											</td>
											<td>
												<span class="label label-lg label-light-warning label-inline">In Progress</span>
											</td>
											<td class="pr-0 text-right">
												<a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
													<span class="svg-icon svg-icon-md svg-icon-primary">
														<!--begin::Svg Icon | path:assets/media/svg/icons/General/Settings-1.svg-->
														<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
															<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																<rect x="0" y="0" width="24" height="24"></rect>
																<path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000"></path>
																<path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3"></path>
															</g>
														</svg>
														<!--end::Svg Icon-->
													</span>
												</a>
												<a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
													<span class="svg-icon svg-icon-md svg-icon-primary">
														<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
														<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
															<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																<rect x="0" y="0" width="24" height="24"></rect>
																<path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)"></path>
																<path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
															</g>
														</svg>
														<!--end::Svg Icon-->
													</span>
												</a>
												<a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
													<span class="svg-icon svg-icon-md svg-icon-primary">
														<!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->
														<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
															<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																<rect x="0" y="0" width="24" height="24"></rect>
																<path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"></path>
																<path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"></path>
															</g>
														</svg>
														<!--end::Svg Icon-->
													</span>
												</a>
											</td>
										</tr>
										<tr>
											<td class="pl-0 py-6">
												<label class="checkbox checkbox-lg checkbox-inline">
													<input type="checkbox" value="1">
													<span></span>
												</label>
											</td>
											<td class="pl-0">
												<a href="#" class="text-dark-75 font-weight-bolder text-hover-primary ont-size-lg">00347-BCLQ</a>
											</td>
											<td>
												<span class="text-dark-75 font-weight-bolder d-block font-size-lg">Phillipines</span>
												<span class="text-muted font-weight-bold">Code: PH</span>
											</td>
											<td>
												<span class="text-info font-weight-bolder d-block font-size-lg">23/12/2020</span>
												<span class="text-muted font-weight-bold">Paid</span>
											</td>
											<td>
												<span class="text-dark-75 font-weight-bolder d-block font-size-lg">RoadGee</span>
												<span class="text-muted font-weight-bold">Transportation</span>
											</td>
											<td>
												<span class="label label-lg label-light-success label-inline">Success</span>
											</td>
											<td class="pr-0 text-right">
												<a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
													<span class="svg-icon svg-icon-md svg-icon-primary">
														<!--begin::Svg Icon | path:assets/media/svg/icons/General/Settings-1.svg-->
														<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
															<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																<rect x="0" y="0" width="24" height="24"></rect>
																<path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000"></path>
																<path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3"></path>
															</g>
														</svg>
														<!--end::Svg Icon-->
													</span>
												</a>
												<a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
													<span class="svg-icon svg-icon-md svg-icon-primary">
														<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
														<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
															<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																<rect x="0" y="0" width="24" height="24"></rect>
																<path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)"></path>
																<path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
															</g>
														</svg>
														<!--end::Svg Icon-->
													</span>
												</a>
												<a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
													<span class="svg-icon svg-icon-md svg-icon-primary">
														<!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->
														<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
															<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																<rect x="0" y="0" width="24" height="24"></rect>
																<path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"></path>
																<path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"></path>
															</g>
														</svg>
														<!--end::Svg Icon-->
													</span>
												</a>
											</td>
										</tr>
										<tr>
											<td class="pl-0 py-6">
												<label class="checkbox checkbox-lg checkbox-inline">
													<input type="checkbox" value="1">
													<span></span>
												</label>
											</td>
											<td class="pl-0">
												<a href="#" class="text-dark font-weight-bolder text-hover-primary font-size-lg">4472-QREX</a>
											</td>
											<td>
												<span class="text-dark-75 font-weight-bolder d-block font-size-lg">Argentina</span>
												<span class="text-muted font-weight-bold">Code: AR</span>
											</td>
											<td>
												<span class="text-info font-weight-bolder d-block font-size-lg">17/09/2021</span>
												<span class="text-muted font-weight-bold">Pending</span>
											</td>
											<td>
												<span class="text-dark-75 font-weight-bolder d-block font-size-lg">The Hill</span>
												<span class="text-muted font-weight-bold">Insurance</span>
											</td>
											<td>
												<span class="label label-lg label-light-danger label-inline">Rejected</span>
											</td>
											<td class="pr-0 text-right">
												<a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
													<span class="svg-icon svg-icon-md svg-icon-primary">
														<!--begin::Svg Icon | path:assets/media/svg/icons/General/Settings-1.svg-->
														<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
															<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																<rect x="0" y="0" width="24" height="24"></rect>
																<path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000"></path>
																<path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3"></path>
															</g>
														</svg>
														<!--end::Svg Icon-->
													</span>
												</a>
												<a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
													<span class="svg-icon svg-icon-md svg-icon-primary">
														<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
														<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
															<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																<rect x="0" y="0" width="24" height="24"></rect>
																<path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)"></path>
																<path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
															</g>
														</svg>
														<!--end::Svg Icon-->
													</span>
												</a>
												<a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
													<span class="svg-icon svg-icon-md svg-icon-primary">
														<!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->
														<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
															<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																<rect x="0" y="0" width="24" height="24"></rect>
																<path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"></path>
																<path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"></path>
															</g>
														</svg>
														<!--end::Svg Icon-->
													</span>
												</a>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
							<!--end::Table-->
						</div>
						<!--end::Body-->
					</div>
					<!--end::Advance Table Widget 10-->
				</div>
			</div>
			<!--end::Row-->
			<div class="row">
				<div class="col-xl-4">
					<!--begin::List Widget 16-->
					<div class="card card-custom gutter-b card-stretch">
						<!--begin::Header-->
						<div class="card-header border-0">
							<h3 class="card-title font-weight-bolder text-dark">Properties</h3>
							<div class="card-toolbar">
								<div class="dropdown dropdown-inline">
									<a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<i class="ki ki-bold-more-ver"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
										<!--begin::Navigation-->
										<ul class="navi navi-hover py-5">
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-icon">
														<i class="flaticon2-drop"></i>
													</span>
													<span class="navi-text">New Group</span>
												</a>
											</li>
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-icon">
														<i class="flaticon2-list-3"></i>
													</span>
													<span class="navi-text">Contacts</span>
												</a>
											</li>
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-icon">
														<i class="flaticon2-rocket-1"></i>
													</span>
													<span class="navi-text">Groups</span>
													<span class="navi-link-badge">
														<span class="label label-light-primary label-inline font-weight-bold">new</span>
													</span>
												</a>
											</li>
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-icon">
														<i class="flaticon2-bell-2"></i>
													</span>
													<span class="navi-text">Calls</span>
												</a>
											</li>
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-icon">
														<i class="flaticon2-gear"></i>
													</span>
													<span class="navi-text">Settings</span>
												</a>
											</li>
											<li class="navi-separator my-3"></li>
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-icon">
														<i class="flaticon2-magnifier-tool"></i>
													</span>
													<span class="navi-text">Help</span>
												</a>
											</li>
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-icon">
														<i class="flaticon2-bell-2"></i>
													</span>
													<span class="navi-text">Privacy</span>
													<span class="navi-link-badge">
														<span class="label label-light-danger label-rounded font-weight-bold">5</span>
													</span>
												</a>
											</li>
										</ul>
										<!--end::Navigation-->
									</div>
								</div>
							</div>
						</div>
						<!--end:Header-->
						<!--begin::Body-->
						<div class="card-body pt-2">
							<!--begin::Item-->
							<div class="d-flex flex-wrap align-items-center pb-10">
								<!--begin::Symbol-->
								<div class="symbol symbol-50 symbol-2by3 flex-shrink-0 mr-4">
									<div class="symbol-label" style="background-image: url('assets/media/stock-600x400/img-17.jpg')"></div>
								</div>
								<!--end::Symbol-->
								<!--begin::Title-->
								<div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 mr-2">
									<a href="#" class="text-dark font-weight-bold text-hover-primary mb-1 font-size-lg">BlueSky Apartments</a>
									<span class="text-muted font-weight-bold">2 bed, 1 bath, 1 carpark</span>
								</div>
								<!--end::Title-->
								<!--begin::Btn-->
								<a href="#" class="btn btn-icon btn-light btn-sm">
									<span class="svg-icon svg-icon-success">
										<span class="svg-icon svg-icon-md">
											<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<polygon points="0 0 24 0 24 24 0 24"></polygon>
													<rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1"></rect>
													<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)"></path>
												</g>
											</svg>
											<!--end::Svg Icon-->
										</span>
									</span>
								</a>
								<!--end::Btn-->
							</div>
							<!--end::Item-->
							<!--begin::Item-->
							<div class="d-flex flex-wrap align-items-center pb-10">
								<!--begin::Symbol-->
								<div class="symbol symbol-50 symbol-2by3 flex-shrink-0 mr-4">
									<div class="symbol-label" style="background-image: url('assets/media/stock-600x400/img-1.jpg')"></div>
								</div>
								<!--end::Symbol-->
								<!--begin::Title-->
								<div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 mr-2">
									<a href="#" class="text-dark font-weight-bold text-hover-primary mb-1 font-size-lg">Yellow Apartments</a>
									<span class="text-muted font-weight-bold">2 bed, 2 bath, 1 carpark</span>
								</div>
								<!--end::Title-->
								<!--begin::Btn-->
								<a href="#" class="btn btn-icon btn-light btn-sm">
									<span class="svg-icon svg-icon-success">
										<span class="svg-icon svg-icon-md">
											<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<polygon points="0 0 24 0 24 24 0 24"></polygon>
													<rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1"></rect>
													<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)"></path>
												</g>
											</svg>
											<!--end::Svg Icon-->
										</span>
									</span>
								</a>
								<!--end::Btn-->
							</div>
							<!--end::Item-->
							<!--begin::Item-->
							<div class="d-flex flex-wrap align-items-center pb-10">
								<!--begin::Symbol-->
								<div class="symbol symbol-50 symbol-2by3 flex-shrink-0 mr-4">
									<div class="symbol-label" style="background-image: url('assets/media/stock-600x400/img-22.jpg')"></div>
								</div>
								<!--end::Symbol-->
								<!--begin::Title-->
								<div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 mr-2">
									<a href="#" class="text-dark font-weight-bold text-hover-primary mb-1 font-size-lg">421 Avenue</a>
									<span class="text-muted font-weight-bold">3 bed, 1 bath, 1 carpark</span>
								</div>
								<!--end::Title-->
								<!--begin::Btn-->
								<a href="#" class="btn btn-icon btn-light btn-sm">
									<span class="svg-icon svg-icon-success">
										<span class="svg-icon svg-icon-md">
											<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<polygon points="0 0 24 0 24 24 0 24"></polygon>
													<rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1"></rect>
													<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)"></path>
												</g>
											</svg>
											<!--end::Svg Icon-->
										</span>
									</span>
								</a>
								<!--end::Btn-->
							</div>
							<!--end::Item-->
							<!--begin::Item-->
							<div class="d-flex flex-wrap align-items-center pb-10">
								<!--begin::Symbol-->
								<div class="symbol symbol-50 symbol-2by3 flex-shrink-0 mr-4">
									<div class="symbol-label" style="background-image: url('assets/media/stock-600x400/img-9.jpg')"></div>
								</div>
								<!--end::Symbol-->
								<!--begin::Title-->
								<div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 mr-2">
									<a href="#" class="text-dark font-weight-bold text-hover-primary mb-1 font-size-lg">Glassbricks</a>
									<span class="text-muted font-weight-bold">2 bed, 2 bath, 1 carpark</span>
								</div>
								<!--end::Title-->
								<!--begin::Btn-->
								<a href="#" class="btn btn-icon btn-light btn-sm">
									<span class="svg-icon svg-icon-success">
										<span class="svg-icon svg-icon-md">
											<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<polygon points="0 0 24 0 24 24 0 24"></polygon>
													<rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1"></rect>
													<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)"></path>
												</g>
											</svg>
											<!--end::Svg Icon-->
										</span>
									</span>
								</a>
								<!--end::Btn-->
							</div>
							<!--end::Item-->
							<!--begin::Item-->
							<div class="d-flex flex-wrap align-items-center">
								<!--begin::Symbol-->
								<div class="symbol symbol-50 symbol-2by3 flex-shrink-0 mr-4">
									<div class="symbol-label" style="background-image: url('assets/media/stock-600x400/img-11.jpg')"></div>
								</div>
								<!--end::Symbol-->
								<!--begin::Title-->
								<div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 mr-2">
									<a href="#" class="text-dark font-weight-bold text-hover-primary mb-1 font-size-lg">RollerCoaster</a>
									<span class="text-muted font-weight-bold">4 bed, 3 bath, 1 carpark</span>
								</div>
								<!--end::Title-->
								<!--begin::Btn-->
								<a href="#" class="btn btn-icon btn-light btn-sm">
									<span class="svg-icon svg-icon-success">
										<span class="svg-icon svg-icon-md">
											<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<polygon points="0 0 24 0 24 24 0 24"></polygon>
													<rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1"></rect>
													<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)"></path>
												</g>
											</svg>
											<!--end::Svg Icon-->
										</span>
									</span>
								</a>
								<!--end::Btn-->
							</div>
							<!--end::Item-->
						</div>
						<!--end::Body-->
					</div>
					<!--end::List Widget 13-->
				</div>
				<div class="col-xl-4">
					<!--begin::Mixed Widget 5-->
					<div class="card card-custom bg-radial-gradient-primary gutter-b card-stretch">
						<!--begin::Header-->
						<div class="card-header border-0 py-5">
							<h3 class="card-title font-weight-bolder text-white">Sales Progress</h3>
							<div class="card-toolbar">
								<div class="dropdown dropdown-inline">
									<a href="#" class="btn btn-text-white btn-hover-white btn-sm btn-icon border-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<i class="ki ki-bold-more-hor"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
										<!--begin::Navigation-->
										<ul class="navi navi-hover">
											<li class="navi-header font-weight-bold py-4">
												<span class="font-size-lg">Choose Label:</span>
												<i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="" data-original-title="Click to learn more..."></i>
											</li>
											<li class="navi-separator mb-3 opacity-70"></li>
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-text">
														<span class="label label-xl label-inline label-light-success">Customer</span>
													</span>
												</a>
											</li>
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-text">
														<span class="label label-xl label-inline label-light-danger">Partner</span>
													</span>
												</a>
											</li>
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-text">
														<span class="label label-xl label-inline label-light-warning">Suplier</span>
													</span>
												</a>
											</li>
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-text">
														<span class="label label-xl label-inline label-light-primary">Member</span>
													</span>
												</a>
											</li>
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-text">
														<span class="label label-xl label-inline label-light-dark">Staff</span>
													</span>
												</a>
											</li>
											<li class="navi-separator mt-3 opacity-70"></li>
											<li class="navi-footer py-4">
												<a class="btn btn-clean font-weight-bold btn-sm" href="#">
												<i class="ki ki-plus icon-sm"></i>Add new</a>
											</li>
										</ul>
										<!--end::Navigation-->
									</div>
								</div>
							</div>
						</div>
						<!--end::Header-->
						<!--begin::Body-->
						<div class="card-body d-flex flex-column p-0" style="position: relative;">
							<!--begin::Chart-->
							<div id="kt_mixed_widget_5_chart" style="height: 200px; min-height: 200px;"><div id="apexchartslwf5oux6" class="apexcharts-canvas apexchartslwf5oux6 apexcharts-theme-light" style="width: 847px; height: 200px;"><svg id="SvgjsSvg1138" width="847" height="200" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1140" class="apexcharts-inner apexcharts-graphical" transform="translate(20, 0)"><defs id="SvgjsDefs1139"><linearGradient id="SvgjsLinearGradient1143" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1144" stop-opacity="0.4" stop-color="rgba(216,227,240,0.4)" offset="0"></stop><stop id="SvgjsStop1145" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop><stop id="SvgjsStop1146" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop></linearGradient><clipPath id="gridRectMasklwf5oux6"><rect id="SvgjsRect1148" width="812" height="201" x="-2.5" y="-0.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMasklwf5oux6"><rect id="SvgjsRect1149" width="811" height="204" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><rect id="SvgjsRect1147" width="17.292857142857144" height="200" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke-dasharray="3" fill="url(#SvgjsLinearGradient1143)" class="apexcharts-xcrosshairs" y2="200" filter="none" fill-opacity="0.9"></rect><g id="SvgjsG1169" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1170" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG1172" class="apexcharts-grid"><g id="SvgjsG1173" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine1175" x1="0" y1="0" x2="807" y2="0" stroke="#ecf0f3" stroke-dasharray="4" class="apexcharts-gridline"></line><line id="SvgjsLine1176" x1="0" y1="20" x2="807" y2="20" stroke="#ecf0f3" stroke-dasharray="4" class="apexcharts-gridline"></line><line id="SvgjsLine1177" x1="0" y1="40" x2="807" y2="40" stroke="#ecf0f3" stroke-dasharray="4" class="apexcharts-gridline"></line><line id="SvgjsLine1178" x1="0" y1="60" x2="807" y2="60" stroke="#ecf0f3" stroke-dasharray="4" class="apexcharts-gridline"></line><line id="SvgjsLine1179" x1="0" y1="80" x2="807" y2="80" stroke="#ecf0f3" stroke-dasharray="4" class="apexcharts-gridline"></line><line id="SvgjsLine1180" x1="0" y1="100" x2="807" y2="100" stroke="#ecf0f3" stroke-dasharray="4" class="apexcharts-gridline"></line><line id="SvgjsLine1181" x1="0" y1="120" x2="807" y2="120" stroke="#ecf0f3" stroke-dasharray="4" class="apexcharts-gridline"></line><line id="SvgjsLine1182" x1="0" y1="140" x2="807" y2="140" stroke="#ecf0f3" stroke-dasharray="4" class="apexcharts-gridline"></line><line id="SvgjsLine1183" x1="0" y1="160" x2="807" y2="160" stroke="#ecf0f3" stroke-dasharray="4" class="apexcharts-gridline"></line><line id="SvgjsLine1184" x1="0" y1="180" x2="807" y2="180" stroke="#ecf0f3" stroke-dasharray="4" class="apexcharts-gridline"></line><line id="SvgjsLine1185" x1="0" y1="200" x2="807" y2="200" stroke="#ecf0f3" stroke-dasharray="4" class="apexcharts-gridline"></line></g><g id="SvgjsG1174" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine1187" x1="0" y1="200" x2="807" y2="200" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine1186" x1="0" y1="1" x2="0" y2="200" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG1150" class="apexcharts-bar-series apexcharts-plot-series"><g id="SvgjsG1151" class="apexcharts-series" rel="1" seriesName="NetxProfit" data:realIndex="0"><path id="SvgjsPath1153" d="M 40.35 200L 40.35 133.8232142857143Q 48.496428571428574 126.17678571428573 56.642857142857146 133.8232142857143L 56.642857142857146 133.8232142857143L 56.642857142857146 200L 56.642857142857146 200z" fill="rgba(255,255,255,0.25)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasklwf5oux6)" pathTo="M 40.35 200L 40.35 133.8232142857143Q 48.496428571428574 126.17678571428573 56.642857142857146 133.8232142857143L 56.642857142857146 133.8232142857143L 56.642857142857146 200L 56.642857142857146 200z" pathFrom="M 40.35 200L 40.35 200L 56.642857142857146 200L 56.642857142857146 200L 56.642857142857146 200L 40.35 200" cy="130" cx="155.1357142857143" j="0" val="35" barHeight="70" barWidth="17.292857142857144"></path><path id="SvgjsPath1154" d="M 155.6357142857143 200L 155.6357142857143 73.82321428571429Q 163.78214285714287 66.17678571428571 171.92857142857144 73.82321428571429L 171.92857142857144 73.82321428571429L 171.92857142857144 200L 171.92857142857144 200z" fill="rgba(255,255,255,0.25)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasklwf5oux6)" pathTo="M 155.6357142857143 200L 155.6357142857143 73.82321428571429Q 163.78214285714287 66.17678571428571 171.92857142857144 73.82321428571429L 171.92857142857144 73.82321428571429L 171.92857142857144 200L 171.92857142857144 200z" pathFrom="M 155.6357142857143 200L 155.6357142857143 200L 171.92857142857144 200L 171.92857142857144 200L 171.92857142857144 200L 155.6357142857143 200" cy="70" cx="270.4214285714286" j="1" val="65" barHeight="130" barWidth="17.292857142857144"></path><path id="SvgjsPath1155" d="M 270.9214285714286 200L 270.9214285714286 53.823214285714286Q 279.0678571428572 46.176785714285714 287.2142857142857 53.823214285714286L 287.2142857142857 53.823214285714286L 287.2142857142857 200L 287.2142857142857 200z" fill="rgba(255,255,255,0.25)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasklwf5oux6)" pathTo="M 270.9214285714286 200L 270.9214285714286 53.823214285714286Q 279.0678571428572 46.176785714285714 287.2142857142857 53.823214285714286L 287.2142857142857 53.823214285714286L 287.2142857142857 200L 287.2142857142857 200z" pathFrom="M 270.9214285714286 200L 270.9214285714286 200L 287.2142857142857 200L 287.2142857142857 200L 287.2142857142857 200L 270.9214285714286 200" cy="50" cx="385.70714285714286" j="2" val="75" barHeight="150" barWidth="17.292857142857144"></path><path id="SvgjsPath1156" d="M 386.20714285714286 200L 386.20714285714286 93.82321428571429Q 394.3535714285714 86.17678571428571 402.5 93.82321428571429L 402.5 93.82321428571429L 402.5 200L 402.5 200z" fill="rgba(255,255,255,0.25)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasklwf5oux6)" pathTo="M 386.20714285714286 200L 386.20714285714286 93.82321428571429Q 394.3535714285714 86.17678571428571 402.5 93.82321428571429L 402.5 93.82321428571429L 402.5 200L 402.5 200z" pathFrom="M 386.20714285714286 200L 386.20714285714286 200L 402.5 200L 402.5 200L 402.5 200L 386.20714285714286 200" cy="90" cx="500.99285714285713" j="3" val="55" barHeight="110" barWidth="17.292857142857144"></path><path id="SvgjsPath1157" d="M 501.49285714285713 200L 501.49285714285713 113.82321428571429Q 509.63928571428573 106.17678571428571 517.7857142857142 113.82321428571429L 517.7857142857142 113.82321428571429L 517.7857142857142 200L 517.7857142857142 200z" fill="rgba(255,255,255,0.25)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasklwf5oux6)" pathTo="M 501.49285714285713 200L 501.49285714285713 113.82321428571429Q 509.63928571428573 106.17678571428571 517.7857142857142 113.82321428571429L 517.7857142857142 113.82321428571429L 517.7857142857142 200L 517.7857142857142 200z" pathFrom="M 501.49285714285713 200L 501.49285714285713 200L 517.7857142857142 200L 517.7857142857142 200L 517.7857142857142 200L 501.49285714285713 200" cy="110" cx="616.2785714285715" j="4" val="45" barHeight="90" barWidth="17.292857142857144"></path><path id="SvgjsPath1158" d="M 616.7785714285715 200L 616.7785714285715 83.82321428571429Q 624.9250000000001 76.17678571428571 633.0714285714287 83.82321428571429L 633.0714285714287 83.82321428571429L 633.0714285714287 200L 633.0714285714287 200z" fill="rgba(255,255,255,0.25)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasklwf5oux6)" pathTo="M 616.7785714285715 200L 616.7785714285715 83.82321428571429Q 624.9250000000001 76.17678571428571 633.0714285714287 83.82321428571429L 633.0714285714287 83.82321428571429L 633.0714285714287 200L 633.0714285714287 200z" pathFrom="M 616.7785714285715 200L 616.7785714285715 200L 633.0714285714287 200L 633.0714285714287 200L 633.0714285714287 200L 616.7785714285715 200" cy="80" cx="731.5642857142858" j="5" val="60" barHeight="120" barWidth="17.292857142857144"></path><path id="SvgjsPath1159" d="M 732.0642857142858 200L 732.0642857142858 93.82321428571429Q 740.2107142857144 86.17678571428571 748.3571428571429 93.82321428571429L 748.3571428571429 93.82321428571429L 748.3571428571429 200L 748.3571428571429 200z" fill="rgba(255,255,255,0.25)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMasklwf5oux6)" pathTo="M 732.0642857142858 200L 732.0642857142858 93.82321428571429Q 740.2107142857144 86.17678571428571 748.3571428571429 93.82321428571429L 748.3571428571429 93.82321428571429L 748.3571428571429 200L 748.3571428571429 200z" pathFrom="M 732.0642857142858 200L 732.0642857142858 200L 748.3571428571429 200L 748.3571428571429 200L 748.3571428571429 200L 732.0642857142858 200" cy="90" cx="846.8500000000001" j="6" val="55" barHeight="110" barWidth="17.292857142857144"></path></g><g id="SvgjsG1160" class="apexcharts-series" rel="2" seriesName="Revenue" data:realIndex="1"><path id="SvgjsPath1162" d="M 57.642857142857146 200L 57.642857142857146 123.82321428571429Q 65.78928571428571 116.17678571428571 73.93571428571428 123.82321428571429L 73.93571428571428 123.82321428571429L 73.93571428571428 200L 73.93571428571428 200z" fill="rgba(255,255,255,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasklwf5oux6)" pathTo="M 57.642857142857146 200L 57.642857142857146 123.82321428571429Q 65.78928571428571 116.17678571428571 73.93571428571428 123.82321428571429L 73.93571428571428 123.82321428571429L 73.93571428571428 200L 73.93571428571428 200z" pathFrom="M 57.642857142857146 200L 57.642857142857146 200L 73.93571428571428 200L 73.93571428571428 200L 73.93571428571428 200L 57.642857142857146 200" cy="120" cx="172.42857142857144" j="0" val="40" barHeight="80" barWidth="17.292857142857144"></path><path id="SvgjsPath1163" d="M 172.92857142857144 200L 172.92857142857144 63.823214285714286Q 181.07500000000002 56.176785714285714 189.2214285714286 63.823214285714286L 189.2214285714286 63.823214285714286L 189.2214285714286 200L 189.2214285714286 200z" fill="rgba(255,255,255,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasklwf5oux6)" pathTo="M 172.92857142857144 200L 172.92857142857144 63.823214285714286Q 181.07500000000002 56.176785714285714 189.2214285714286 63.823214285714286L 189.2214285714286 63.823214285714286L 189.2214285714286 200L 189.2214285714286 200z" pathFrom="M 172.92857142857144 200L 172.92857142857144 200L 189.2214285714286 200L 189.2214285714286 200L 189.2214285714286 200L 172.92857142857144 200" cy="60" cx="287.7142857142857" j="1" val="70" barHeight="140" barWidth="17.292857142857144"></path><path id="SvgjsPath1164" d="M 288.2142857142857 200L 288.2142857142857 43.823214285714286Q 296.36071428571427 36.176785714285714 304.50714285714287 43.823214285714286L 304.50714285714287 43.823214285714286L 304.50714285714287 200L 304.50714285714287 200z" fill="rgba(255,255,255,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasklwf5oux6)" pathTo="M 288.2142857142857 200L 288.2142857142857 43.823214285714286Q 296.36071428571427 36.176785714285714 304.50714285714287 43.823214285714286L 304.50714285714287 43.823214285714286L 304.50714285714287 200L 304.50714285714287 200z" pathFrom="M 288.2142857142857 200L 288.2142857142857 200L 304.50714285714287 200L 304.50714285714287 200L 304.50714285714287 200L 288.2142857142857 200" cy="40" cx="403" j="2" val="80" barHeight="160" barWidth="17.292857142857144"></path><path id="SvgjsPath1165" d="M 403.5 200L 403.5 83.82321428571429Q 411.6464285714286 76.17678571428571 419.79285714285714 83.82321428571429L 419.79285714285714 83.82321428571429L 419.79285714285714 200L 419.79285714285714 200z" fill="rgba(255,255,255,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasklwf5oux6)" pathTo="M 403.5 200L 403.5 83.82321428571429Q 411.6464285714286 76.17678571428571 419.79285714285714 83.82321428571429L 419.79285714285714 83.82321428571429L 419.79285714285714 200L 419.79285714285714 200z" pathFrom="M 403.5 200L 403.5 200L 419.79285714285714 200L 419.79285714285714 200L 419.79285714285714 200L 403.5 200" cy="80" cx="518.2857142857142" j="3" val="60" barHeight="120" barWidth="17.292857142857144"></path><path id="SvgjsPath1166" d="M 518.7857142857142 200L 518.7857142857142 103.82321428571429Q 526.9321428571428 96.17678571428571 535.0785714285714 103.82321428571429L 535.0785714285714 103.82321428571429L 535.0785714285714 200L 535.0785714285714 200z" fill="rgba(255,255,255,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasklwf5oux6)" pathTo="M 518.7857142857142 200L 518.7857142857142 103.82321428571429Q 526.9321428571428 96.17678571428571 535.0785714285714 103.82321428571429L 535.0785714285714 103.82321428571429L 535.0785714285714 200L 535.0785714285714 200z" pathFrom="M 518.7857142857142 200L 518.7857142857142 200L 535.0785714285714 200L 535.0785714285714 200L 535.0785714285714 200L 518.7857142857142 200" cy="100" cx="633.5714285714287" j="4" val="50" barHeight="100" barWidth="17.292857142857144"></path><path id="SvgjsPath1167" d="M 634.0714285714287 200L 634.0714285714287 73.82321428571429Q 642.2178571428573 66.17678571428571 650.3642857142859 73.82321428571429L 650.3642857142859 73.82321428571429L 650.3642857142859 200L 650.3642857142859 200z" fill="rgba(255,255,255,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasklwf5oux6)" pathTo="M 634.0714285714287 200L 634.0714285714287 73.82321428571429Q 642.2178571428573 66.17678571428571 650.3642857142859 73.82321428571429L 650.3642857142859 73.82321428571429L 650.3642857142859 200L 650.3642857142859 200z" pathFrom="M 634.0714285714287 200L 634.0714285714287 200L 650.3642857142859 200L 650.3642857142859 200L 650.3642857142859 200L 634.0714285714287 200" cy="70" cx="748.8571428571429" j="5" val="65" barHeight="130" barWidth="17.292857142857144"></path><path id="SvgjsPath1168" d="M 749.3571428571429 200L 749.3571428571429 83.82321428571429Q 757.5035714285715 76.17678571428571 765.6500000000001 83.82321428571429L 765.6500000000001 83.82321428571429L 765.6500000000001 200L 765.6500000000001 200z" fill="rgba(255,255,255,1)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMasklwf5oux6)" pathTo="M 749.3571428571429 200L 749.3571428571429 83.82321428571429Q 757.5035714285715 76.17678571428571 765.6500000000001 83.82321428571429L 765.6500000000001 83.82321428571429L 765.6500000000001 200L 765.6500000000001 200z" pathFrom="M 749.3571428571429 200L 749.3571428571429 200L 765.6500000000001 200L 765.6500000000001 200L 765.6500000000001 200L 749.3571428571429 200" cy="80" cx="864.1428571428573" j="6" val="60" barHeight="120" barWidth="17.292857142857144"></path></g><g id="SvgjsG1152" class="apexcharts-datalabels" data:realIndex="0"></g><g id="SvgjsG1161" class="apexcharts-datalabels" data:realIndex="1"></g></g><line id="SvgjsLine1188" x1="0" y1="0" x2="807" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1189" x1="0" y1="0" x2="807" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1190" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1191" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1192" class="apexcharts-point-annotations"></g></g><g id="SvgjsG1171" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG1141" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend"></div><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: Poppins; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(255, 255, 255);"></span><div class="apexcharts-tooltip-text" style="font-family: Poppins; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="order: 2;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(255, 255, 255);"></span><div class="apexcharts-tooltip-text" style="font-family: Poppins; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
							<!--end::Chart-->
							<!--begin::Stats-->
							<div class="card-spacer bg-white card-rounded flex-grow-1">
								<!--begin::Row-->
								<div class="row m-0">
									<div class="col px-8 py-6 mr-8">
										<div class="font-size-sm text-muted font-weight-bold">Average Sale</div>
										<div class="font-size-h4 font-weight-bolder">$650</div>
									</div>
									<div class="col px-8 py-6">
										<div class="font-size-sm text-muted font-weight-bold">Commission</div>
										<div class="font-size-h4 font-weight-bolder">$233,600</div>
									</div>
								</div>
								<!--end::Row-->
								<!--begin::Row-->
								<div class="row m-0">
									<div class="col px-8 py-6 mr-8">
										<div class="font-size-sm text-muted font-weight-bold">Annual Taxes</div>
										<div class="font-size-h4 font-weight-bolder">$29,004</div>
									</div>
									<div class="col px-8 py-6">
										<div class="font-size-sm text-muted font-weight-bold">Annual Income</div>
										<div class="font-size-h4 font-weight-bolder">$1,480,00</div>
									</div>
								</div>
								<!--end::Row-->
							</div>
							<!--end::Stats-->
						<div class="resize-triggers"><div class="expand-trigger"><div style="width: 848px; height: 403px;"></div></div><div class="contract-trigger"></div></div></div>
						<!--end::Body-->
					</div>
					<!--end::Mixed Widget 5-->
				</div>
				<div class="col-xl-4">
					<!--begin::Tiles Widget 15-->
					<div class="card card-custom gutter-b card-stretch">
						<!--begin::Header-->
						<div class="card-header border-0 pt-5">
							<div class="card-title">
								<div class="card-label">
									<div class="font-weight-bolder">Weekly Sales Stats</div>
									<div class="font-size-sm text-muted mt-2">890,344 Sales</div>
								</div>
							</div>
							<div class="card-toolbar">
								<div class="dropdown dropdown-inline">
									<a href="#" class="btn btn-clean btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<i class="ki ki-bold-more-hor"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
										<!--begin::Navigation-->
										<ul class="navi navi-hover py-5">
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-icon">
														<i class="flaticon2-drop"></i>
													</span>
													<span class="navi-text">New Group</span>
												</a>
											</li>
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-icon">
														<i class="flaticon2-list-3"></i>
													</span>
													<span class="navi-text">Contacts</span>
												</a>
											</li>
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-icon">
														<i class="flaticon2-rocket-1"></i>
													</span>
													<span class="navi-text">Groups</span>
													<span class="navi-link-badge">
														<span class="label label-light-primary label-inline font-weight-bold">new</span>
													</span>
												</a>
											</li>
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-icon">
														<i class="flaticon2-bell-2"></i>
													</span>
													<span class="navi-text">Calls</span>
												</a>
											</li>
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-icon">
														<i class="flaticon2-gear"></i>
													</span>
													<span class="navi-text">Settings</span>
												</a>
											</li>
											<li class="navi-separator my-3"></li>
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-icon">
														<i class="flaticon2-magnifier-tool"></i>
													</span>
													<span class="navi-text">Help</span>
												</a>
											</li>
											<li class="navi-item">
												<a href="#" class="navi-link">
													<span class="navi-icon">
														<i class="flaticon2-bell-2"></i>
													</span>
													<span class="navi-text">Privacy</span>
													<span class="navi-link-badge">
														<span class="label label-light-danger label-rounded font-weight-bold">5</span>
													</span>
												</a>
											</li>
										</ul>
										<!--end::Navigation-->
									</div>
								</div>
							</div>
						</div>
						<!--end::Header-->
						<!--begin::Body-->
						<div class="card-body d-flex flex-column">
							<!--begin::Items-->
							<div class="flex-grow-1">
								<!--begin::Item-->
								<div class="d-flex align-items-center justify-content-between mb-10">
									<div class="d-flex align-items-center mr-2">
										<div class="symbol symbol-50 symbol-light mr-3 flex-shrink-0">
											<div class="symbol-label">
												<img src="assets/media/svg/misc/006-plurk.svg" alt="" class="h-50">
											</div>
										</div>
										<div>
											<a href="#" class="font-size-h6 text-dark-75 text-hover-primary font-weight-bolder">Top Authors</a>
											<div class="font-size-sm text-muted font-weight-bold mt-1">Ricky Hunt, Sandra Trepp</div>
										</div>
									</div>
									<div class="label label-light label-inline font-weight-bold text-dark-50 py-4 px-3 font-size-base">+105$</div>
								</div>
								<!--end::Item-->
								<!--begin::Item-->
								<div class="d-flex align-items-center justify-content-between mb-10">
									<div class="d-flex align-items-center mr-2">
										<div class="symbol symbol-50 symbol-light mr-3 flex-shrink-0">
											<div class="symbol-label">
												<img src="assets/media/svg/misc/015-telegram.svg" alt="" class="h-50">
											</div>
										</div>
										<div>
											<a href="#" class="font-size-h6 text-dark-75 text-hover-primary font-weight-bolder">Top Sales</a>
											<div class="font-size-sm text-muted font-weight-bold mt-1">PitStop Emails</div>
										</div>
									</div>
									<div class="label label-light label-inline font-weight-bold text-dark-50 py-4 px-3 font-size-base">+60$</div>
								</div>
								<!--end::Item-->
								<!--begin::Item-->
								<div class="d-flex align-items-center justify-content-between mb-10">
									<div class="d-flex align-items-center mr-2">
										<div class="symbol symbol-50 symbol-light mr-3 flex-shrink-0">
											<div class="symbol-label">
												<img src="assets/media/svg/misc/003-puzzle.svg" alt="" class="h-50">
											</div>
										</div>
										<div>
											<a href="#" class="font-size-h6 text-dark-75 text-hover-primary font-weight-bolder">Bestsellers</a>
											<div class="font-size-sm text-muted font-weight-bold mt-1">Pitstop Email Marketing</div>
										</div>
									</div>
									<div class="label label-light label-inline font-weight-bold text-dark-50 py-4 px-3 font-size-base">+75$</div>
								</div>
								<!--end::Item-->
								<!--begin::Item-->
								<div class="d-flex align-items-center justify-content-between">
									<div class="d-flex align-items-center mr-2">
										<div class="symbol symbol-50 symbol-light mr-3 flex-shrink-0">
											<div class="symbol-label">
												<img src="assets/media/svg/misc/009-hot-air-balloon.svg" alt="" class="h-50">
											</div>
										</div>
										<div>
											<a href="#" class="font-size-h6 text-dark-75 text-hover-primary font-weight-bolder">Top Engagement</a>
											<div class="font-size-sm text-muted font-weight-bold mt-1">KT.com solutions</div>
										</div>
									</div>
									<div class="label label-light label-inline font-weight-bold text-dark-50 py-4 px-3 font-size-base">+75$</div>
								</div>
								<!--end::Item-->
							</div>
							<!--end::Items-->
							<!--begin::Action-->
							<div class="pt-10 pb-5 text-center">
								<a href="#" class="btn btn-primary font-weight-bold px-5 py-3">Create Report</a>
							</div>
							<!--end::Action-->
						</div>
						<!--end::Body-->
					</div>
					<!--end::Tiles Widget 15-->
				</div>
			</div>
			<!--end::Row-->
			<!--end::Dashboard-->
		</div>
		<!--end::Container-->
	</div>
	<!--end::Entry-->
</div>

@endsection
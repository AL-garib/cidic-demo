@extends('layouts.control-panel.master-panel')


@section('content')

    	<!-- Main content -->
	<div class="main-content">
		<h1 class="page-title">@lang('dashboard.dashboard')</h1>
		<div class="row">
			<div class="col-lg-3 col-md-6 animatedParent animateOnce z-index-50">
				<div class="panel minimal panel-default animated fadeInUp">
					<div class="panel-heading clearfix"> 
						<div class="panel-title">الموظفيين</div> 
						<ul class="panel-tool-options"> 
							<li class="dropdown">
								<a data-toggle="dropdown" class="dropdown-toggle" href="#" aria-expanded="false"><i class="icon-cog"></i></a>
								<ul class="dropdown-menu dropdown-menu-right">
									<li><a href="#"><i class="icon-arrows-ccw"></i> Update data</a></li>
								</ul>
							 </li>
						</ul>
					</div> 
					<!-- panel body --> 
					<div class="panel-body">
						<div class="stack-order"> 
							<h1 class="no-margins">{{ number_format($posterLatest) }}</h1>
							<small>الموظفيين المضافة منذ</small>
						</div>
						<div class="bar-chart-icon"></div>
					</div> 
				</div>
			</div>
			<div class="col-lg-3 col-md-6 animatedParent animateOnce z-index-49">
				<div class="panel minimal panel-default animated fadeInUp">
					<div class="panel-heading clearfix"> 
						<div class="panel-title"> تم قبولهم </div> 
						<ul class="panel-tool-options"> 
							<li class="dropdown">
								<a data-toggle="dropdown" class="dropdown-toggle" href="#" aria-expanded="false"><i class="icon-cog"></i></a>
								<ul class="dropdown-menu dropdown-menu-right">
									<li><a href="#"><i class="icon-arrows-ccw"></i> Update data</a></li>
								</ul>
							 </li>
						</ul> 
					</div> 
					<!-- panel body --> 
					<div class="panel-body"> 
						<div class="stack-order">
							<h1 class="no-margins">{{ number_format($userLatest) }}</h1>
							<small>الموظفيين الذين تم قبولهم .</small>
						</div>
						<div class="bar-chart-icon"></div>
					</div> 
				</div>
			</div>
			<div class="col-lg-3 col-md-6 animatedParent animateOnce z-index-48">
				<div class="panel minimal panel-default animated fadeInUp">
					<div class="panel-heading clearfix"> 
						<div class="panel-title"> مرشحيين للمقابلة </div> 
						<ul class="panel-tool-options"> 
							<li class="dropdown">
								<a data-toggle="dropdown" class="dropdown-toggle" href="#" aria-expanded="false"><i class="icon-cog"></i></a>
								<ul class="dropdown-menu dropdown-menu-right">
									<li><a href="#"><i class="icon-arrows-ccw"></i> Update data</a></li>
								</ul>
							 </li>
						</ul>
					</div> 
					<!-- panel body --> 
					<div class="panel-body"> 
						<div class="stack-order">
							<h1 class="no-margins">{{ number_format($userCountBlocked) }}</h1>
							<small>الموظفيين الذين تم ترشيحهم.</small>
						</div>
						<div class="bar-chart-icon"></div>
					</div> 
				</div>
			</div>
			<div class="col-lg-3 col-md-6 animatedParent animateOnce z-index-47">
				<div class="panel minimal panel-default animated fadeInUp">
					<div class="panel-heading clearfix"> 
						<div class="panel-title">
							محظوريين
						</div> 
						<ul class="panel-tool-options"> 
							<li class="dropdown">
								<a data-toggle="dropdown" class="dropdown-toggle" href="#" aria-expanded="false"><i class="icon-cog"></i></a>
								<ul class="dropdown-menu dropdown-menu-right">
									<li><a href="#"><i class="icon-arrows-ccw"></i> Update data</a></li>
								</ul>
							 </li>
						</ul>
					</div> 
					<!-- panel body --> 
					<div class="panel-body"> 
						<div class="stack-order">
							<h1 class="no-margins">759</h1>
							<small>الموظفيين الذين تم حظرهم.</small>
						</div>
						<div class="bar-chart-icon"></div>
					</div> 
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6 animatedParent animateOnce z-index-46">
				<div class="panel-group animated fadeInUp">
					<div class="panel panel-invert">
						<div class="panel-heading no-border clearfix"> 
							<h2 class="panel-title"> احصائيات </h2>
							<ul class="panel-tool-options">
								<li><a href="#" id="Revenuelines"><i class="icon-chart-line icon-2x"></i></a></li>
								<li class="dropdown">
									<a data-toggle="dropdown" class="dropdown-toggle" href="#" aria-expanded="false"><i class="icon-cog icon-2x"></i></a>
									<ul class="dropdown-menu dropdown-menu-right">
										<li><a href="#"><i class="icon-arrows-ccw"></i> Update data</a></li>
									</ul>
								 </li>
							</ul>
						</div>
						<div class="panel-body">
							<div class="flot-chart float-chart-lg">
								<div id="Revenue-lines" class="flot-chart-content"></div>
							</div>
							<div id="placeholder_overview" style="width:100%; height: 65px;"></div>
						</div>
					</div>
					<div class="panel">
						<div class="panel-body">
							<div class="panel-update-content">
								{{-- <div class="row-revenue clearfix">
									<div class="col-xs-6">
										<h5>@lang('dashboard.revenue_gross')</h5>
										<h1>9,362.74</h1>
									</div>
									<div class="col-xs-6">
										<h5>@lang('dashboard.revenue_net')</h5>
										<h1>6,734.89</h1>
									</div>
								</div> --}}
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6 animatedParent animateOnce z-index-45">
				<div class="panel panel-default animated fadeInUp">
					<div class="panel-body">
						<h2>اخر الموظفيين المسجليين</h2>
						<ul class="feed-item-list removeable-list">
							@foreach($posters as $poster)
							<li>
								<div class="feed-element">
									<div class="feed-title">{{ $poster->created_at->toFormattedDateString() }} - {{ $poster->created_at->diffForHumans() }}</div>
									<div class="feed-content">
										<p>{{ $poster->poster_title }}</p>
									</div>
									<div class="feed-meta">بواسطة {{ $poster->user->name }}</div>
								</div>
								<div class="feed-footer">
								<a href="{{ route('poster.approve', $poster->id ) }}" class="btn btn-sm btn-primary">تأكيد</a>
								<form class="inline-form" action="{{ route('poster.destroy',$poster->id) }}" method="post">
									@csrf 
									{{ method_field('DELETE') }}
										<button type="submit" class="btn btn-sm btn-red">حذف</button>
									</form>
								</div>
								<a class="remove" href="#/"><img title="حذف" alt="حذف" src="images/icon-close.png"></a>
							</li>
							@endforeach
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6 animatedParent animateOnce z-index-44">
				<div class="panel panel-default animated fadeInUp">
					<div class="panel-heading no-border clearfix"> 
						<h3 class="panel-title">{{ __('dashboard.latestPosters') }}</h3>
						<ul class="panel-tool-options"> 
							<li class="dropdown">
								<a data-toggle="dropdown" class="dropdown-toggle" href="#" aria-expanded="false"><i class="icon-cog icon-2x"></i></a>
								<ul class="dropdown-menu dropdown-menu-right">
									<li><a href="#"><i class="icon-arrows-ccw"></i> Update data</a></li>
								</ul>
							 </li>
						</ul> 
					</div> 
					<!-- panel body --> 
					<div class="panel-body"> 
						<div class="canvas-chart has-doughnut-legend">
							<canvas id="doughnutChart" height="325" width="365"></canvas>
						</div>
						<div class="height-15"></div>
					</div> 
				</div>
			</div>
			<div class="col-lg-6">
				<div class="row">
					<div class="col-lg-12 animatedParent animateOnce z-index-43">
						<div class="panel panel-default animated fadeInUp">
							<div class="panel-body">
								<div class="speed-analyzer">
									<div class="speed-analyzer-text">
										<h4>Download Speed Analyzer</h4>
										<p>Speed test run on different anlayzers including google and YSlow.</p>
									</div>
									<div class="speed-score">
										<strong class="score">82</strong>
										<span class="uppercase">Google Score</span>
									</div>
									<div class="speed-score">
										<strong class="score">73</strong>
										<span class="uppercase">YSlow Score</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					{{-- <div class="col-lg-12 animatedParent animateOnce z-index-42">
						<div class="panel panel-default animated fadeInUp">
							<div class="panel-heading no-border clearfix"> 
								<h2 class="panel-title">{{ __('dashboard.user') }}</h2>
							</div>
							<div class="panel-body">
								<div class="carousel slide" id="carousel2">
									<div class="carousel-inner">
										<div class="item gallery active">
											<div class="row">
												@foreach($users as $user)
												<div class="col-sm-6">
													<div class="user-view">
														<div class="user-avatar">
														<img title="" alt="" class="img-circle avatar" src="{{ $user->thumbnail }}">
														</div>
														<div class="user-detail">
														<h5>{{ $user->name }}</h5>
														<p>انظم {{ $user->created_at->diffForHumans() }}.</p>
														</div>
													</div>
												</div>
												@endforeach
											</div>
										</div>
										<div class="carousel-footer">
											<div class="carousel-controller">	
												<a data-slide="prev" href="#carousel2" class="btn-carousel"><i class="icon-left-open-big"></i></a>
												<a data-slide="next" href="#carousel2" class="btn-carousel"><i class="icon-right-open-big"></i></a>
											</div>
											<strong><a href="#/" class="link uppercase">Show all</a></strong>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div> --}}
				</div>
			</div>
		</div>	
		<!-- Footer -->
		<footer class="animatedParent animateOnce z-index-10"> 
			<div class="footer-main animated fadeInUp slow">&copy; 2016 <strong>~</strong> by <a target="_blank" href="https://instagram.com/gw8">Zymawy</a> </div>
		</footer>	
		<!-- /footer -->
		
	  </div>
	  <!-- /main content -->

@endsection

@section('js')
<!--ChartJs-->
<script src="{{ asset('js/plugins/chartjs/Chart.min.js') }}"></script>
<script>
	$(document).ready(function () {
		var previousPoint = null;
		$('#graph-bars, #graph-lines').bind('plothover', function (event, pos, item) {
			if (item) {
				if (previousPoint != item.dataIndex) {
					previousPoint = item.dataIndex;
					$('#flotTip').remove();
					var x = item.datapoint[0],
							y = item.datapoint[1];
					showTooltip(item.pageX, item.pageY, y + ' visitors at ' + x + '.00h');
				}
			} else {
				$('#flotTip').remove();
				previousPoint = null;
			}
		});

		var graphData = [{
				// Visits
				data: [[6, 1300], [7, 1600], [8, 1900], [9, 2100], [10, 2500], [11, 2200], [12, 2000], [13, 1950], [14, 1900], [15, 2000]],
				color: '#71c73e'
			}, {
				// Returning Visits
				data: [[6, 500], [7, 600], [8, 550], [9, 600], [10, 800], [11, 900], [12, 800], [13, 850], [14, 830], [15, 1000]],
				color: '#77b7c5',
				points: {radius: 4, fillColor: '#77b7c5'}
			}
		];
		// Lines
		$.plot($('#graph-lines'), graphData, {
			series: {
				points: {
					show: true,
					radius: 5
				},
				lines: {
					show: true
				},
				shadowSize: 0
			},
			grid: {
				color: '#646464',
				borderColor: 'transparent',
				borderWidth: 20,
				hoverable: true
			},
			xaxis: {
				tickColor: 'transparent',
				tickDecimals: 2
			},
			yaxis: {
				tickSize: 1000
			}
		});

		// Bars
		$.plot($('#graph-bars'), graphData, {
			series: {
				bars: {
					show: true,
					barWidth: .9,
					align: 'center'
				},
				shadowSize: 0
			},
			grid: {
				color: '#646464',
				borderColor: 'transparent',
				borderWidth: 20,
				hoverable: true
			},
			xaxis: {
				tickColor: 'transparent',
				tickDecimals: 2
			},
			yaxis: {
				tickSize: 1000
			}
		});

		var $graphBar = $('#graph-bars'), $graphLine = $('#graph-lines'), $linkLine = $('#lines'), $linkBar = $('#bars');
		$graphBar.hide();
		$linkLine.on('click', function (e) {
			e.preventDefault();

			$linkBar.removeClass('active');
			$graphBar.fadeOut(function () {
				$(this).addClass('active');
				$graphLine.fadeIn();
			});
		});
		$linkBar.on('click', function (e) {
			e.preventDefault();

			$linkLine.removeClass('active');
			$graphLine.fadeOut(function () {
				$(this).addClass('active');
				$graphBar.fadeIn();
			});
		});

		var revenueData = [{
				// Visits
				data: [[1475280000000, 400.05], [1475366400000, 1600.32], [1475452800000, 900.35], [1475539200000, 2100.31], [1475625600000, 1800.55], [1475712000000, 900.42], [1475798400000, 2885.01], [1475884800000, 1870.97], [1475971200000, 2145.14], [1476057600000, 1130.14], [1476144000000, 1490.02], [1476230400000, 740.74], [1476316800000, 1280.88], [1476403200000, 1157.71], [1476489600000, 599.71], [1476576000000, 2159.89], [1476662400000, 1557.81], [1476748800000, 959.06], [1476835200000, 158.00], [1476921600000, 757.99], [1477008000000, 800], [1477094400000, 950.25], [1477180800000, 1289.22], [1477267200000, 400.52], [1477353600000, 2425], [1477440000000, 1300.35], [1477526400000, 1600.20], [1477612800000, 890.65], [1477699200000, 2165.29], [1477785600000, 1566.22], [1477872000000, 2064.33]],
				//data: [[6, 400], [7, 1600], [8, 900], [9, 2100], [10, 1200], [12, 1800]],
				//data: [[1167692400000, 1600.05], [1167778800000, 5800.32], [1167865200000, 570.35], [1167951600000, 5600.31], [1168210800000, 1155.55], [1168297200000, 2255.64], [1168383600000, 5334.02], [1168470000000, 1151.88], [1168556400000, 3352.99], [1168815600000, 2652.99], [1168902000000, 3251.21], [1168988400000, 4152.24], [1169074800000, 4450.48], [1169161200000, 7751.99], [1169420400000, 5851.13], [1169506800000, 1555.04], [1169593200000, 55.37], [1169679600000, 54.23], [1169766000000, 55.42], [1170025200000, 54.01], [1170111600000, 56.97], [1170198000000, 58.14], [1170284400000, 58.14], [1170370800000, 59.02], [1170630000000, 58.74], [1170716400000, 58.88], [1170802800000, 57.71], [1170889200000, 59.71], [1170975600000, 59.89], [1171234800000, 57.81], [1171321200000, 59.06], [1171407600000, 58.00], [1171494000000, 57.99], [1171580400000, 59.39], [1171839600000, 59.39], [1171926000000, 58.07], [1172012400000, 60.07], [1172098800000, 61.14], [1172444400000, 61.39], [1172530800000, 61.46], [1172617200000, 61.79], [1172703600000, 62.00], [1172790000000, 60.07], [1173135600000, 60.69], [1173222000000, 61.82], [1173308400000, 60.05], [1173654000000, 58.91], [1173740400000, 57.93], [1173826800000, 58.16], [1173913200000, 57.55], [1173999600000, 57.11], [1174258800000, 56.59], [1174345200000, 59.61], [1174518000000, 61.69], [1174604400000, 62.28], [1174860000000, 62.91], [1174946400000, 62.93], [1175032800000, 64.03], [1175119200000, 66.03], [1175205600000, 65.87], [1175464800000, 64.64], [1175637600000, 64.38], [1175724000000, 64.28], [1175810400000, 64.28], [1176069600000, 61.51], [1176156000000, 61.89], [1176242400000, 62.01], [1176328800000, 63.85], [1176415200000, 63.63], [1176674400000, 63.61], [1176760800000, 63.10], [1176847200000, 63.13], [1176933600000, 61.83], [1177020000000, 63.38], [1177279200000, 64.58], [1177452000000, 65.84], [1177538400000, 65.06], [1177624800000, 66.46], [1177884000000, 64.40], [1178056800000, 63.68], [1178143200000, 63.19], [1178229600000, 61.93], [1178488800000, 61.47], [1178575200000, 61.55], [1178748000000, 61.81], [1178834400000, 62.37], [1179093600000, 62.46], [1179180000000, 63.17], [1179266400000, 62.55], [1179352800000, 64.94], [1179698400000, 66.27], [1179784800000, 65.50], [1179871200000, 65.77], [1179957600000, 64.18], [1180044000000, 65.20], [1180389600000, 63.15], [1180476000000, 63.49], [1180562400000, 65.08], [1180908000000, 66.30], [1180994400000, 65.96], [1181167200000, 66.93], [1181253600000, 65.98], [1181599200000, 65.35], [1181685600000, 66.26], [1181858400000, 68.00], [1182117600000, 69.09], [1182204000000, 69.10]],
				color: '#fff',
				dashes: {show: true}
			}
		];

		var monthNames = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
		$('#placeholder_overview, #Revenue-lines').bind('plothover', function (event, pos, item) {
			if (item) {
				if (previousPoint != item.dataIndex) {
					previousPoint = item.dataIndex;
					$('#flotTip').remove();
					var x = item.datapoint[0],
							y = item.datapoint[1];
					//showTooltip(item.pageX, item.pageY, y + ' visitors at ' + x + '.00h');

					var color = item.series.color;
					var day = new Date(x).getDate();
					var month = monthNames[new Date(x).getMonth()];
					var year = new Date(x).getFullYear();
					showTooltip(item.pageX,
							item.pageY,
							day + ' ' + month + ',' + year
							+ " : <strong>" + y +
							"($)</strong>");
				}
			} else {
				$('#flotTip').remove();
				previousPoint = null;
			}
		});

		var options = {
			series: {
				points: {
					show: false,
					radius: 5
				},
				lines: {
					show: true,
					lineWidth: 5
				},
				shadowSize: 0
			},
			grid: {
				color: '#646464',
				borderColor: 'transparent',
				borderWidth: 20,
				hoverable: true,
				tickColor: "rgba(255,255,255,0.05)",
				markingsColor: "rgba(255,255,255,0.05)",
				markingsLineWidth: 5,
				/*backgroundColor: {
					colors: ["rgba(54,58,60,0.05)", "rgba(0,0,0,0.2)"]
				}*/
			},
			xaxis: {
				mode: 'time',
				font: {
					weight: "bold"
				},
				color: "#D6D8DB",
				tickColor: 'transparent',
				tickDecimals: 2
			},
			selection: {
				mode: "x"
			},
			yaxis: {
				font: {
					weight: "bold"
				},
				color: "#D6D8DB",
				tickSize: 500
			}
		};

		// Lines
		var plot = $.plot($('#Revenue-lines'), revenueData, options);

		// Bars
		var overview = $.plot($("#placeholder_overview"), revenueData, {
			colors: ["#edc240", "#5eb95e"],
			series: {
				bars: {
					show: true,
					lineWidth: 5,
					fillColor: "#5eb95e"
				},
				shadowSize: 2,
				grow: {
					active: false
				}
			},
			legend: {
				show: false
			},
			xaxis: {
				ticks: [],
				mode: "time"
			},
			yaxis: {
				ticks: [],
				min: 0,
				autoscaleMargin: 0.1
			},
			selection: {
				mode: "x"
			},
			grid: {
				color: "#D6D8DB",
				borderColor: 'transparent',
				markingsColor: "rgba(255,255,255,0.05)",
				/*backgroundColor: {
					colors: ["rgba(54,58,60,0.05)", "rgba(0,0,0,0.2)"]
				}*/
			}
		});

		$("#Revenue-lines").bind("plotselected", function (event, ranges) {
			// do the zooming
			plot = $.plot($("#Revenue-lines"), revenueData,
					$.extend(true, {}, options, {
						xaxis: {
							min: ranges.xaxis.from,
							max: ranges.xaxis.to
						}
					}));

			// don't fire event on the overview to prevent eternal loop
			overview.setSelection(ranges, true);
		});

		$("#placeholder_overview").bind("plotselected", function (event, ranges) {
			plot.setSelection(ranges);
		});

		$("#Revenuelines").click(function (event) {
			event.preventDefault();
			overview.clearSelection();
			$.plot($("#Revenue-lines"), revenueData, options);
		});

		// pie graph
		var doughnutData = [
			{
				value: 5742,
				color: "#2bbfba",
				highlight: "#1fb3ae",
				label: "@lang('visitStats_purchased')"
			},
			{
				value: 2496,
				color: "#00b8ce",
				highlight: "#00acc2",
				label: "@lang('visitStats_purchased')"
			},
			{
				value: 1762,
				color: "#e5e8eb",
				highlight: "#d9dcdf",
				label: "{{ __('visitStats_bounced') }}"
			}
		];
		var doughnutOptions = {
			segmentShowStroke: true,
			segmentStrokeColor: "#fff",
			segmentStrokeWidth: 4,
			percentageInnerCutout: 60, // This is 0 for Pie charts
			animationSteps: 100,
			animationEasing: "easeOutBounce",
			animateRotate: true,
			animateScale: false,
			responsive: true,
			//String - A legend template
			legendTemplate : "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<segments.length; i++){%><li><span style=\"background-color:<%=segments[i].fillColor%>\"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>"
		};
		
		var canvas = document.getElementById("doughnutChart");
		var helpers = Chart.helpers;
		//var ctx = document.getElementById("doughnutChart").getContext("2d");
		var moduleDoughnut = new Chart(canvas.getContext("2d")).Doughnut(doughnutData, doughnutOptions);
		var legendHolder = document.createElement('div');
legendHolder.innerHTML = moduleDoughnut.generateLegend();
		helpers.each(legendHolder.firstChild.childNodes, function(legendNode, index){
	helpers.addEvent(legendNode, 'mouseover', function(){
		var activeSegment = moduleDoughnut.segments[index];
		activeSegment.save();
		activeSegment.fillColor = activeSegment.highlightColor;
		moduleDoughnut.showTooltip([activeSegment]);
		activeSegment.restore();
	});
});
helpers.addEvent(legendHolder.firstChild, 'mouseout', function(){
	moduleDoughnut.draw();
});
		canvas.parentNode.parentNode.appendChild(legendHolder.firstChild);
	});
</script>
@endsection
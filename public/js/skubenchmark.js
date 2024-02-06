// console.log('API_URL',API_URL);

$(document).ready(function(){
	main_skubenchmark();
	
	function main_skubenchmark(){

		var shiseido_brand = 3;
		var shiseido_sku = 'Franchise 1 SKU 3';
		var comp1_brand = 4;
		var comp1_sku = 'Franchise 1 SKU 4';
		var comp2_brand = 4;
		var comp2_sku = 'Franchise 2 SKU 43';
		var comp3_brand = 4;
		var comp3_sku = 'Franchise 3 SKU 82';
		var comp4_brand = 4;
		var comp4_sku = 'Franchise 4 SKU 100';

		// console.log('timeperiod',timeperiod);

		// var checkData1 = "&country=" + country + "&category=" + category + "&channel=" + channel ;
		var checkData1 = {
			"shiseido_brand" : shiseido_brand,
			"shiseido_sku" : shiseido_sku,
			"comp1_brand" : comp1_brand,
			"comp1_sku" : comp1_sku,
			"comp2_brand" : comp2_brand,
			"comp2_sku" : comp2_sku,
			"comp3_brand" : comp3_brand,
			"comp3_sku" : comp3_sku,
			"comp4_brand" : comp4_brand,
			"comp4_sku" : comp4_sku
		};
		// console.log('country',country);
		// console.log('category',category);

		$.ajax({
			type: "POST",
			url: API_URL+'get_all_data_skubenchmark',
			data: checkData1,
			dataType:'json',
			// async: false,
			// beforeSend: function(){
	  //         	$.LoadingOverlay("show");
	  //       },
			success: function (data) 
			{
				skubenchmark_chart_ploying_data = data.skubenchmark_chart_data;
				// console.log('skubenchmark_chart_ploying_data',skubenchmark_chart_ploying_data);
				skubenchmark_table_ploying_data = data.skubenchmark_table_data;
				// console.log('skubenchmark_table_ploying_data',skubenchmark_table_ploying_data);

				skubenchmark_chart_plot(skubenchmark_chart_ploying_data);
				skubenchmark_table_plot(skubenchmark_table_ploying_data);
			},
			error: function (textStatus, errorThrown) {
			// alert
			$.LoadingOverlay("hide");
			swal({title: "Error!",
			  text: "No Data Found Try Another filter!",
			  type: "error",
			  confirmButtonText: "OK"
			});
			
			}
			
	    });
	}
});

function skubenchmark_chart_plot(result){
	// console.log('result',result);
	var brand_sku_names = result.chart_xaxis;
	var ytdvalue_trend_data = result.yearly_data;
	
	Highcharts.chart('skubenchmarkchart', {
		chart: {
			type: 'column',
			height: 320,
			marginTop: 60,
			marginBottom: 80,
			// marginLeft: 300,
			
		},
		colors: ['#1D5B00','#c00000','#811331','#808080','#EAC117','#0e48c7','#480ca8','#560bad','#4e148c','#461177','#3d0e61','#431259','#03045e'],
		title: {
			text: ''
		},
		credits: {
			enabled: false
		},
		// subtitle: {
			// text: 'Source: WorldClimate.com'
		// },
		// legend: {
			// align: 'top',
		// },
		xAxis: {
			categories : brand_sku_names,
			labels: {
				step: 1,
				rotation: 0,
				style: {
					fontSize: '11px',
					fontFamily: 'Segoe UI Emoji'
				}
			},
			// tickPixelInterval: 1000,
			// min: 0,
			// max: 9
			// crosshair: true
		},
		yAxis: {
			title: '',
			title: {
	            text: 'Retail value sales(USD)'
	        },
			visible: true
		},
		legend: {
			align: 'center',
            verticalAlign: 'top',
			itemStyle: {
				fontSize:'11px',
				font: 'Segoe UI Emoji'
			},
            floating: true,
            x: 0,
            y: 0
		},
		scrollbar: {
            enabled: false
        },
		tooltip: {
			headerFormat: '<span style="font-size:11px">{point.key}</span><table>',
			pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
				'<td style="padding:0"><b>{point.y:.1f} </b></td></tr>',
			footerFormat: '</table>',
			shared: true,
			useHTML: true,
			style: {
				fontSize: '11px',
				fontFamily: 'Segoe UI Emoji'
			}
	},
		plotOptions: {
			column: {
				pointPadding: 0.2,
				borderWidth: 0
			}
		},
		exporting: {
			chartOptions: {
				xAxis: {
					scrollbar: {
					enabled: false
					},
				min: undefined,
				max: undefined
				}
			},
			buttons: {
				contextButton: {
					menuItems: [
						{
                        text: 'Export XLSX',
                        onclick: function() {
                            TrendviewExportToExcel('brand');
                        }
						},
						{
                        text: 'Export PPT',
                        onclick: function() {
                            TrendviewExportToPPT('brand');
                        }
						},
					]
				}
			}, 
			/* csv: {
				columnHeaderFormatter: function(item, key) {
					if (!key) {
						return 'Brand'
					}
					return false
				}
			}, */
			filename: 'Brand Trend'
		},
		series: ytdvalue_trend_data
	});
}

function skubenchmark_table_plot(result){
	// console.log('result',result);
	var tbl_header = result.tbl_header;
	var yearly_data = result.yearly_data;

	var appendcanvas='';

	appendcanvas += '<table class="table table-bordered table-hover text-dark table-hover text-center" style="font-size: 12px;"><tr><th class="internal-data bg-danger" rowspan="1" style="color: white; vertical-align: middle;">Product</th>';

	$.each(tbl_header,function (k,v) {

		$.each(v,function (k1,v1) {
			appendcanvas += '<th class="internal-data bg-danger text-center" colspan="1" style="color: white;">'+k+' '+v1+'</th>';
		});
	});
	appendcanvas += '</tr>';

	$.each(yearly_data,function (k,v) {
		appendcanvas += '<tr><td class="internal-data" style="text-align: left;background-color: #eaeaea;">'+k+'</td>';
		$.each(v,function (k1,v1) {

			$.each(v1,function (k2,v2) {
				ytdval = parseFloat(v2).toFixed(1);;
				appendcanvas += '<td class="internal-data">'+ytdval+' %</td>';
			});

		});

		appendcanvas += '</tr>';
	});

	appendcanvas += '</table>';
	// appendcanvas += footnote;

	$("#br_sku_benchmark_tbl").html(appendcanvas);

	$.LoadingOverlay("hide",true);
}
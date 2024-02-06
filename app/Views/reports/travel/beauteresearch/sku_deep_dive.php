<?= $this->extend("layout/main"); ?>

<?= $this->section("body") ?>

    <!-- main containe section start -->
    <?= view('layout/breadcrumb'); ?>

    <div class="bg-white fadeInUp m-0 mt-2 p-3 row wow">
      <div class="col-md-12 d-flex p-0">
        <div class="dropdown px-3">
          <button class="bg-white border-danger btn btn-secondary dropdown-toggle p-1 rounded" type="button"
            data-toggle="dropdown" aria-expanded="false" style="color: black;">
            Year
            <img src="<?=base_url() ?>public/images/select-icon.png">
          </button>
          <div class="dropdown-menu">
          		<?php
	          	if(isset($yearFilter))
	          	{
	          		if(empty($yearFilter))
	          		{
	          			echo '<a class="dropdown-item" href="#">No Year Found</a>';
	          		}
	          		else
	          		{
	          			foreach ($yearFilter as $key => $value) 
		          		{
		          			if($key == 1)
		          			{
		          				echo '<a class="dropdown-item" href="#" selected>'.$value['datayear'].'</a>';
		          			}
		          			else
		          			{
		          				echo '<a class="dropdown-item" href="#">'.$value['datayear'].'</a>';
		          			}
		          			
		          		}
	          		}
	          	}
	          	?>
          </div>
        </div>
        <div class="dropdown px-3">
          <button class="bg-white border-danger btn btn-secondary dropdown-toggle p-1 rounded" type="button"
            data-toggle="dropdown" aria-expanded="false" style="color: black;">
            Period
            <img src="<?=base_url() ?>public/images/select-icon.png">
          </button>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </div>
        <div class="dropdown px-3">
          <button class="bg-white border-danger btn btn-secondary dropdown-toggle p-1 rounded" type="button"
            data-toggle="dropdown" aria-expanded="false" style="color: black;">
            Market
            <img src="<?=base_url() ?>public/images/select-icon.png">
          </button>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </div>
        <div class="dropdown px-3">
          <button class="bg-white border-danger btn btn-secondary dropdown-toggle p-1 rounded" type="button"
            data-toggle="dropdown" aria-expanded="false" style="color: black;">
            Category
            <img src="<?=base_url() ?>public/images/select-icon.png">
          </button>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </div>
      
		<div class="dropdown px-3">
			<button class="bg-white border-danger btn btn-secondary dropdown-toggle p-1 rounded" type="button"
			data-toggle="dropdown" aria-expanded="false" style="color: black;">
			Sub-Category
				<img src="<?=base_url() ?>public/images/select-icon.png">
			</button>
			<div class="dropdown-menu">
				<a class="dropdown-item" href="#">Action</a>
				<a class="dropdown-item" href="#">Another action</a>
				<a class="dropdown-item" href="#">Something else here</a>
			</div>
		</div>

      <div class="dropdown px-3">
        <button class="bg-white border-danger btn btn-secondary dropdown-toggle p-1 rounded" type="button"
          data-toggle="dropdown" aria-expanded="false" style="color: black;">
          Detailed-Subcategory
          <img src="<?=base_url() ?>public/images/select-icon.png">
        </button>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </div>
    

    <div class="dropdown px-3">
      <button class="bg-white border-danger btn btn-secondary dropdown-toggle p-1 rounded" type="button"
        data-toggle="dropdown" aria-expanded="false" style="color: black;">
        Brand
        <img src="<?=base_url() ?>public/images/select-icon.png">
      </button>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Action</a>
        <a class="dropdown-item" href="#">Another action</a>
        <a class="dropdown-item" href="#">Something else here</a>
      </div>
    </div>
  </div>

      <!-- <div class="col-md-12 text-center mt-2">
        <img src="images/basic-bar-graph.png" class="w-50">
      </div> -->
      <br><br>
      <div class="col-md-12 mt-3">

        <table class="table table-bordered table-hover text-dark table-hover text-center" style="font-size: 12px;">
          <thead>
            <tr>
              <th class="internal-data bg-danger" rowspan="2" style="color: white; vertical-align: middle;">
                Group</th>
              <th class="internal-data bg-danger" rowspan="2" style="color: white; vertical-align: middle;">
                  Brand</th>
              <th class="internal-data bg-danger" rowspan="2" style="color: white; vertical-align: middle;">
                    SKU</th>
              <th class="internal-data bg-danger text-center" colspan="1" style="color: white;">
                2022 Q2
              </th>
              <th class="internal-data bg-danger text-center" colspan="1" style="color: white;">
                2021 Q2
              </th>
              <th class="internal-data bg-danger text-center" rowspan="2" style="color: white; vertical-align: middle;">
                2022 Q2 vs 2021 Evolution
              </th>
              <th class="internal-data bg-danger text-center" rowspan="2" style="color: white; vertical-align: middle;">
                SKU Contribution to Market Growth
              </th>
            </tr>
            <tr>
              <td class="internal-data bg-danger text-center" style="color: white;">Sales ('000 USD)</td>
              <!-- <td class="internal-data bg-danger text-center" style="color: white;">MOB
              </td> -->
              <td class="internal-data bg-danger text-center" style="color: white;">Sales ('000 USD)</td>
              <!-- <td class="internal-data bg-danger text-center" style="color: white;">MOB
              </td> -->
            </tr>
          </thead>
          <tbody id="sku_table_data"></tbody>

          

          

          <?php
          // foreach ($sku_data['sku_data'] as $key => $value) 
          // {
          // 	echo '<tr>
  				// <td class="internal-data" style="text-align: left;background-color: #eaeaea;">'.$value['groupname'] .'
	        //     </td>
	        //     <td class="internal-data">'.$value['brandname'] .'</td>
	        //     <td class="internal-data">'.$value['product'] .'</td>
	        //     <td class="internal-data">'.number_format((float)$value['sales'], 1, '.', '') .'</td>
	        //     <td class="internal-data chart1"><li data-data="'.$value['pre_sales'].'">'.number_format((float)$value['pre_sales'], 1, '.', '') .'</td>
	        //     <td class="internal-data">'.number_format((float)$value['evolution'], 1, '.', '') .'%</td>
	        //     <td class="internal-data">'.number_format((float)$value['market_growth'], 1, '.', '') .'%</td>';
          			
          // }
          ?>
        </table>
      </div>

    </div>

  <?= $this->endSection() ?>   

  <?= $this->section('extra_foot'); ?>


  <script src="<?=base_url()?>public/js/hBarChart.js"></script>

  <script type="text/javascript">
      
    $(document).ready(function()
    {
      //get sku data start

        getSkuData();

        // hbChart('chart1');  

      //get sku data end
    });

    function getSkuData()
    {
      $.ajax({
                url:"<?php echo base_url('/getSkuDeepdiveData'); ?>",
                method:"POST",
                dataType:'json',
                // data:{"period":period,'viewingperiod':viewingperiod},
                beforeSend: function() {
                  $.LoadingOverlay("show");
                },
                success:function(data)
                {
                  // $.LoadingOverlay("hide");

                  // console.log(data);

                    displayReportDatatoTable(data);

                  // $.LoadingOverlay("hide");
                },
                error: function (textStatus, errorThrown) 
                {

                  $.LoadingOverlay("hide");
                    swal({title: "Please try another filter!",
                      text: "No Data Found!",
                      type: "error",
                      confirmButtonText: "OK"
                    });
                }

              });
    }

    function displayReportDatatoTable(result_data)
    {
      var sku_data = result_data.sku_data;
      var total_sku_data = result_data.total_sku_data;

      $("#sku_table_data").empty();

      var appendtabledata = '';

      appendtabledata += '<tr>';

      appendtabledata += '<td class="internal-data text-center font-weight-bold bg-grey" style="text-align: left;" colspan="3">Total</td>';

      appendtabledata += processDataFormat(total_sku_data.sales,'sales','total');

      appendtabledata += processDataFormat(total_sku_data.pre_sales,'pre_sales','total');

      appendtabledata += processDataFormat(total_sku_data.evolution,'evolution','total');

      appendtabledata += processDataFormat(total_sku_data.market_growth,'market_growth','total');

      appendtabledata += '</tr>';

      $.each(sku_data,function (k,v) 
      {
          appendtabledata += '<tr>';

          appendtabledata += '<td class="internal-data" style="text-align: left;">'+v.groupname+'</td>';

          appendtabledata += '<td class="internal-data" style="text-align: left;">'+v.brandname+'</td>';

          appendtabledata += '<td class="internal-data" style="text-align: left;">'+v.product+'</td>';

          appendtabledata += processDataFormat(v.sales,'sales','normal');

          appendtabledata += processDataFormat(v.pre_sales,'pre_sales','normal');

          appendtabledata += processDataFormat(v.evolution,'evolution','normal');

          appendtabledata += processDataFormat(v.market_growth,'market_growth','normal');

          appendtabledata += '</tr>';
      });

      $("#sku_table_data").append(appendtabledata);   
      hbChart('chart1');  
      // $(".chart1").hBarChart();
      $.LoadingOverlay("hide"); 
    }

    function hbChart(classname)
    {
      $(".chart1").hBarChart(
      {
        bgColor: '#6495ED',
        textColor: '#000000',
        show: '',
        sorting: false,
        maxStyle: {
          bg: '#6495ED',
          text: '#000000'
        },
        minStyle: {
         bg: '#6495ED',
          text: '#000000'
        }
      });
    }

    function processDataFormat(data,data_label,data_of)
    {
      var formatted_value = '';
      var percent_symbol = '%';
      var fontColorClass = '';
      var fontboldclass  = '';
      var bggreyclass  = '';

      if(data_of == 'total')
      {
        fontboldclass  = 'font-weight-bold';
        bggreyclass  = 'bg-grey';
      }

      if(data_label == 'evolution')
      {
        if (data != "") 
        {
          formatted_value = number_format(data,1);

          // fontColorClass = getColorClassByNegativePositivevalue(formatted_value);
          arrowSymbol = getSymbolByNegativePositivevalue(formatted_value);

          formatted_value = '<td class="internal-data '+fontColorClass+' '+bggreyclass+' ">'+arrowSymbol+ '<span style="text-align: center;">'+formatted_value+percent_symbol+'</span></td>';
        } 
        else
        {
          formatted_value = '<td class="internal-data '+fontboldclass+' '+bggreyclass+'" style="text-align: left;">-</td>';
        }
      }
      else if(data_label == 'market_growth')
      {
        if (data != "") 
        {
          formatted_value = number_format(data,1);
          arrowSymbol = getSymbolByNegativePositivevalue(formatted_value);

          formatted_value = '<td class="internal-data '+fontColorClass+' '+bggreyclass+'">'+arrowSymbol+'<span style="text-align: center;">'+formatted_value+percent_symbol+'</td>';
        } 
        else
        {
          formatted_value = '<td class="internal-data '+fontboldclass+' '+bggreyclass+'" style="text-align: left;background-color: #eaeaea;">-</td>';
        }
      }
      else
      {
        formatted_value = number_format(data,1);
        
        formatted_value = '<td class="internal-data  '+fontboldclass+' '+bggreyclass+' " style="text-align: left;">'+thousandSeparatorValueConversion(formatted_value)+'</td>';
      }
      // else if(data_label == 'sales')
      // {
      //   formatted_value = number_format(data,1);
        
      //   formatted_value = '<td class="internal-data  '+fontboldclass+' '+bggreyclass+' chart2" style="text-align: left;"><li data-data="'+formatted_value+'">'+thousandSeparatorValueConversion(formatted_value)+'</li>'+thousandSeparatorValueConversion(formatted_value)+'</td>';
      // }

      return formatted_value;
    }

    function number_format(number, decimals) 
    {
      number = parseFloat(number).toFixed(decimals);
      return number;
    }

    function getColorClassByNegativePositivevalue(value)
    {
      var fontclass = '';

      if(Math.sign(value) === 1)
      {
        fontclass = 'text-success';
      }
      else if(Math.sign(value) === -1)
      {
        fontclass = 'text-danger';
      }

      return fontclass;

    }

    function getSymbolByNegativePositivevalue(value)
    {
      var arrowSymbol = '';
      let pattern = new RegExp(/^-\d*\.?\d+$/); 

      if(Math.sign(value) === 1)
      {
        arrowSymbol = '<span class="text-success" style="float: left;">▲</span>';
      }
      else if(Math.sign(value) === -1)
      {
        arrowSymbol = '<span class="text-danger" style="float: left;">▼</span>';
      }
      else if(Math.sign(value) === 0)
      {
        // console.log(value+' '+Object.is(value, -0));

        if(pattern.test(value))
        {
          arrowSymbol = '<span class="text-danger" style="float: left;">▼</span>';
        }
        else
        {
          arrowSymbol = '<span class="text-success" style="float: left;">▲</span>';
        }
        
      }

      return arrowSymbol;

    }

    function thousandSeparatorValueConversion(n) 
    {
      var parts = n.toString().split(".");
      const numberPart = parts[0];
      const decimalPart = parts[1];
      const thousands = /\B(?=(\d{3})+(?!\d))/g;
      // console.log(numberPart.replace(thousands, ",") + (decimalPart ? "." + decimalPart : ""));
      return numberPart.replace(thousands, ",") + (decimalPart ? "." + decimalPart : "");
    }

    function ExportToExcel() 
    {
        $.ajax({
                  url:"<?php echo base_url('/exportSkuDeepdiveData'); ?>",
                  method:"POST",
                  dataType:'json',
                  // data:{"period":period,'viewingperiod':viewingperiod},
                  beforeSend: function() {
                    $.LoadingOverlay("show");
                  },
                  success:function(resp)
                  {
                      var $a = $("<a>");
                      $a.attr("href",resp.file);
                      $("body").append($a);
                      $a.attr("download",resp.file_name);
                      $a[0].click();
                      $a.remove();
                      $.LoadingOverlay("hide");
                  },
                  error: function (textStatus, errorThrown) 
                  {

                    $.LoadingOverlay("hide");
                      swal({title: "Please try another filter!",
                        text: "No Data Found!",
                        type: "error",
                        confirmButtonText: "OK"
                      });
                  }

                });
    }

  </script>

  <?= $this->endSection() ?>  
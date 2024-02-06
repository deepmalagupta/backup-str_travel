<?= $this->extend("layout/main"); ?>

<?= $this->section("body") ?>

        <!-- main containe section start -->
        <?= view('layout/breadcrumb'); ?>

        <div class="bg-white fadeInUp m-0 mt-2 p-3 row wow rounded shadow">
          <div class="col-md-6 d-flex px-0">
          <div class="dropdown px-3">
              <button class="bg-white border-danger btn btn-secondary dropdown-toggle p-1 rounded" type="button" data-toggle="dropdown" aria-expanded="false" style="color: black;">
                Year
                <img src="<?=base_url()?>public/images/select-icon.png">
              </button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </div>
            <div class="dropdown px-3">
              <button class="bg-white border-danger btn btn-secondary dropdown-toggle p-1 rounded" type="button" data-toggle="dropdown" aria-expanded="false" style="color: black;">
                Region
                <img src="<?=base_url()?>public/images/select-icon.png">
              </button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </div>
            <div class="dropdown px-3">
              <button class="bg-white border-danger btn btn-secondary dropdown-toggle p-1 rounded" type="button" data-toggle="dropdown" aria-expanded="false" style="color: black;">
                Market
                <img src="<?=base_url()?>public/images/select-icon.png">
              </button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex justify-content-end">
          <button type="button" class="btn btn-primary w-auto">Submit</button>
          </div>
        </div>
        
        <div class="bg-white d-block fadeInUp m-0 mt-2 p-3 rounded row shadow wow">
          
          <div class="col-md-12 text-center mt-2">
          <!-- <div class="d-flex justify-content-end">
          <div class="custom-control custom-switch mx-5">
            <input type="checkbox" class="custom-control-input" id="customSwitch1">
            <label class="custom-control-label" for="customSwitch1"></label>
          </div>
        </div> -->
          </div>
          <div class="mb-3 row">
            <div class="col-md-6">
              <p style="text-align:center; font-weight: bold;" class="d-flex justify-content-center">China P&C – Category Movement</p>
              <div class=" d-flex justify-content-center" id="category_channel_chart1">
              <!-- <img src="<?=IMG?>basic-bar-graph.png" class="w-75"> -->
              </div>
            </div>
            <div class="col-md-6">
            <p style="text-align:center; font-weight: bold;">China P&C – Channel Movement</p>
            <div class=" d-flex justify-content-center" id="category_channel_chart2">
              <!-- <img src="<?=IMG?>basic-bar-graph.png" class="w-75"> -->
            </div>
            </div>
          </div>
          <div class="col-md-12">
          
            <table class="table table-bordered table-hover text-dark table-hover text-center" style="font-size: 12px;">
              <tr>
                 <th class="internal-data bg-danger" rowspan="2" style="color: white; vertical-align: middle;"> Category </th>
                 <th class="internal-data bg-danger text-center" colspan="3" style="color: white;">
                    2022
                 </th>
                 <th class="internal-data bg-danger text-center" colspan="3" style="color: white;">
                    2021
                 </th>   
              </tr>

              <tr>
                 <td class="internal-data bg-danger text-center" style="color: white; font-weight: bold;">Sales (Mn USD)
                 </td>
                 <td class="internal-data bg-danger text-center" style="color: white; font-weight: bold;">%Growth vs LY 
                 </td> 
                 <td class="internal-data bg-danger text-center" style="color: white; font-weight: bold;">Market share
                 </td>
                 <td class="internal-data bg-danger text-center" style="color: white; font-weight: bold;">Sales (Mn USD)
                 </td>
                 <td class="internal-data bg-danger text-center" style="color: white; font-weight: bold;">%Growth vs LY 
                 </td>
                 <td class="internal-data bg-danger text-center" style="color: white; font-weight: bold;">Market share
                 </td>
              </tr>
              <tr>
                 <td class="text-left">Fragrance</td>
                 <td >323.4</td>
                 <td >35.0%</td>
                 <td >1.0% </td> 
                 <td >239.5</td>  
                 <td >-25.9%</td> 
                 <td>0.7%</td>      
              </tr>
               <tr>
                 <td class="text-left">Make-up</td>
                 <td >12,352.9</td>
                 <td >32.2%</td>
                 <td >36.4%</td> 
                 <td >9,344.1 </td>  
                 <td >10.7%</td> 
                 <td>28.9%</td>      
              </tr>
               <tr>
                 <td class="text-left">Skincare</td>
                 <td >92.5</td>
                 <td >137.7%</td>
                 <td >0.3% </td> 
                 <td >38.9 </td>  
                 <td >-18.6%</td>   
                 <td>0.1%</td>      
              </tr>
               <tr>
                 <td class="font-weight-bold internal-data" style="text-align:  left;background-color: #eaeaea;"class="internal-data">Grand Total </td>
                 <td class="font-weight-bold internal-data" style="text-align:  center left;background-color: #eaeaea;"class="internal-data">33,909.0</td>
                 <td class="font-weight-bold internal-data" style="text-align:  center left;background-color: #eaeaea;"class="internal-data">5.0%</td>
                 <td class="font-weight-bold internal-data" style="text-align:  center left;background-color: #eaeaea;"class="internal-data">- </td> 
                 <td class="font-weight-bold internal-data" style="text-align:  center left;background-color: #eaeaea;"class="internal-data">32,298.5</td>  
                 <td class="font-weight-bold internal-data" style="text-align:  center left;background-color: #eaeaea;"class="internal-data">16.4%</td> 
                 <td class="font-weight-bold internal-data" style="text-align:  center left;background-color: #eaeaea;"class="internal-data">-</td> 
              </tr>
              
              
              </tr>
              
            </table>
          </div>
          <div class="col-md-12">
            <table class="table table-bordered table-hover text-dark table-hover text-center" style="font-size: 12px;">
              <tr>
                 <th class="internal-data bg-danger" rowspan="2" style="color: white; vertical-align: middle;"> Channel </th>
                 <th class="internal-data bg-danger text-center" colspan="3" style="color: white;">
                    2022
                 </th>
                 <th class="internal-data bg-danger text-center" colspan="3" style="color: white;">
                    2021
                 </th>   
              </tr>

              <tr>
                 <td class="internal-data bg-danger text-center" style="color: white; font-weight: bold;">Sales (Mn USD)
                 </td>
                 <td class="internal-data bg-danger text-center" style="color: white; font-weight: bold;">%Growth vs LY 
                 </td> 
                 <td class="internal-data bg-danger text-center" style="color: white; font-weight: bold;">Market share
                 </td>
                 <td class="internal-data bg-danger text-center" style="color: white; font-weight: bold;">Sales (Mn USD)
                 </td>
                 <td class="internal-data bg-danger text-center" style="color: white; font-weight: bold;">%Growth vs LY 
                 </td>
                 <td class="internal-data bg-danger text-center" style="color: white; font-weight: bold;">Market share
                 </td>
              </tr>
              <tr>
                 <td class="text-left">Airlines</td>
                 <td >323.4</td>
                 <td >35.0%</td>
                 <td >1.0% </td> 
                 <td >239.5</td>  
                 <td >-25.9%</td> 
                 <td>0.7%</td>      
              </tr>
               <tr>
                 <td class="text-left">Airports</td>
                 <td >12,352.9</td>
                 <td >32.2%</td>
                 <td >36.4%</td> 
                 <td >9,344.1 </td>  
                 <td >10.7%</td> 
                 <td>28.9%</td>      
              </tr>
               <tr>
                 <td class="text-left">Cruises</td>
                 <td >92.5</td>
                 <td >137.7%</td>
                 <td >0.3% </td> 
                 <td >38.9 </td>  
                 <td >-18.6%</td>   
                 <td>0.1%</td>      
              </tr>
              <tr>
                 <td class="text-left">Downtown Shops</td>
                 <td >20,225.6</td>
                 <td >-7.9%</td>
                 <td >59.6%</td> 
                 <td >21,954.6 </td>  
                 <td >20.1%</td>   
                 <td>68.0%</td>      
              </tr>

               <tr>
                 <td class="font-weight-bold internal-data" style="text-align:  left;background-color: #eaeaea;"class="internal-data">Grand Total </td>
                 <td class="font-weight-bold internal-data" style="text-align:  center left;background-color: #eaeaea;"class="internal-data">33,909.0</td>
                 <td class="font-weight-bold internal-data" style="text-align:  center left;background-color: #eaeaea;"class="internal-data">5.0%</td>
                 <td class="font-weight-bold internal-data" style="text-align:  center left;background-color: #eaeaea;"class="internal-data">- </td> 
                 <td class="font-weight-bold internal-data" style="text-align:  center left;background-color: #eaeaea;"class="internal-data">32,298.5</td>  
                 <td class="font-weight-bold internal-data" style="text-align:  center left;background-color: #eaeaea;"class="internal-data">16.4%</td> 
                 <td class="font-weight-bold internal-data" style="text-align:  center left;background-color: #eaeaea;"class="internal-data">-</td>      
              </tr>
              
              
              </tr>
              
            </table>
          </div>
        </div>
      <?= $this->endSection() ?>   

<?= $this->section('extra_foot'); ?>

    <script>
    var API_URL = "<?php echo BASEURL; ?>";
    // console.log('API_URL',API_URL);
    </script>
    <script src="<?php echo BASEURL; ?>highcharts/highstock/highstock.js"></script>
    <script src="<?php echo BASEURL; ?>highcharts/highstock/highcharts-more.js"></script>
    <script src="<?php echo BASEURL; ?>highcharts/highstock/exporting.js"></script>
    <script src="<?php echo BASEURL; ?>highcharts/highstock/export-data.js"></script>
    <script src="<?php echo BASEURL; ?>highcharts/highstock/accessibility.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/gasparesganga-jquery-loading-overlay@2.1.7/dist/loadingoverlay.min.js"></script>

    <!-- <script src="<?php echo BASEURL; ?>public/js/skubenchmark.js"></script> -->
    <script>
        $(document).ready(function(){
            Highcharts.chart('category_channel_chart1', {
                chart: {
                    type: 'column'
                },
                credits: {
                        enabled: false
                    },
                colors: ['#c00000','#F984F0','#808080','#EAC117','#0e48c7','#480ca8','#560bad','#4e148c','#461177','#3d0e61','#431259','#03045e'],
                title: {
                    text: ''
                },
                xAxis: {
                    categories: ['2017', '2018', '2019', '2020', '2021','2022']
                },
                yAxis: {
                        visible: false,
                    min: 0,
                    title: {
                        text: 'Goals'
                    }
                },
                legend: {
                        verticalAlign: 'top',
                    //reversed: true
                },
                plotOptions: {
                    series: {
                        stacking: 'normal',
                        dataLabels: {
                            enabled: false
                        }
                    }
                },
                series: [{
                    name: 'Skincare',
                    data: [3014,2800, 5400, 6488.5, 3808.6, 4589.7]
                }, {
                    name: 'Make-up',
                    data: [2100.5,1700.8, 2400, 1488.5, 1101.6,1498.7]
                }, {
                    name: 'Fragrance',
                    data: [2176, 1113.4, 1234.4, 1567, 1598.5, 2224.5]
                }]
            });

            Highcharts.chart('category_channel_chart2', {
                chart: {
                    type: 'column'
                },
                credits: {
                        enabled: false
                    },
                colors: ['#244541','#56A299','#389DEA','#8BDBD1','#0e48c7','#480ca8','#560bad','#4e148c','#461177','#3d0e61','#431259','#03045e'],
                title: {
                    text: ''
                },
                xAxis: {
                    categories: ['2017', '2018', '2019', '2020', '2021','2022']
                },
                yAxis: {
                        visible: false,
                    min: 0,
                    title: {
                        text: 'Goals'
                    }
                },
                legend: {
                        verticalAlign: 'top',
                    //reversed: true
                },
                plotOptions: {
                    series: {
                        stacking: 'normal',
                        dataLabels: {
                            enabled: false
                        }
                    }
                },
                series: [{
                    name: 'Airlines',
                    data: [3014,2800, 5400, 6488.5, 3808.6, 4589.7]
                }, {
                    name: 'Airport',
                    data: [2100.5,1700.8, 2400, 1488.5, 1101.6,1498.7]
                }, {
                    name: 'Downtown',
                    data: [2176, 1113.4, 1234.4, 1567, 1598.5, 2224.5]
                }, {
                    name: 'Others',
                    data: [2109, 2113.4, 1734.4, 1597, 1398.5, 2724.5]
                }]
            });
        });
    </script>

<?= $this->endSection(); ?>  
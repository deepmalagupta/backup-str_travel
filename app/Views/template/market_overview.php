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
                Period
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
          <div><img class="mb-2" src="<?=base_url()?>public/images/excel_icon.png"></div>
          <div><img src="<?=base_url()?>public/images/ppt_icon.png" class="px-3"></div>
          <button type="button" class="btn btn-primary w-auto">Submit</button>
          </div>
        </div>

        <div class="bg-white fadeInUp m-0 mt-2 p-3 row wow rounded shadow">
          
          <div class="col-md-12 text-center mt-2">
          <div class="d-flex justify-content-end" id="marketoverview_chart">
          <!-- <div class="custom-control custom-switch mx-5">
            <input type="checkbox" class="custom-control-input" id="customSwitch1">
            <label class="custom-control-label" for="customSwitch1"></label>
          </div> -->
          </div>
            <!-- <img src="<?=base_url()?>public/images/basic-bar-graph.png" class="w-50"> -->
          </div>

          <div class="col-md-12">
          
            <table class="table table-bordered table-hover text-dark table-hover text-center" style="font-size: 12px;">

              <tr>
                 <th class="internal-data bg-danger" rowspan="2" style="color: white; vertical-align: middle;">
                    Category Split</th>
                 <th class="internal-data bg-danger text-center" colspan="3" style="color: white;">
                    2023 Q2
                 </th>
                 <!-- <th class="internal-data" colspan="2" style="background-color: #e98c85;color: white;">
                          Price/UC</th> -->
                 <th class="internal-data bg-danger text-center" colspan="3" style="color: white;">
                    2022 Q2
                 </th>
                 <!-- <th class="internal-data" colspan="2" style="background-color: #e36d63;color: white;">OI/UC
                       </th> -->
                 
              </tr>
              <tr>
                 <td class="internal-data bg-danger text-center" style="color: white;">Sales (Mn USD)</td>
                 <td class="internal-data bg-danger text-center" style="color: white;">MOB
                 </td>
                 
                 <!-- <td class="internal-data" style="background-color: #e98c85;color: white;">2022 Price (in $)
                       </td>
                       <td class="internal-data" style="background-color: #e98c85;color: white;">2021-2022 Price
                          growth
                       </td> -->
                 <td class="internal-data bg-danger text-center" style="color: white;">% vs LY</td>
                 <td class="internal-data bg-danger text-center" style="color: white;">Sales (Mn USD)</td>
                 <td class="internal-data bg-danger text-center" style="color: white;">MOB
                 </td>
                 
                 <!-- <td class="internal-data" style="background-color: #e98c85;color: white;">2022 Price (in $)
                       </td>
                       <td class="internal-data" style="background-color: #e98c85;color: white;">2021-2022 Price
                          growth
                       </td> -->
                 <td class="internal-data bg-danger" style="color: white;">% vs LY</td>
                 <!-- <td class="internal-data" style="background-color: #e36d63;color: white;">2022 OI/UC</td>
                       <td class="internal-data" style="background-color: #e36d63;color: white;">2021-2022 OI/UC
                          growth
                       </td> -->
                 
              </tr>
              <tr>
                 <td class="font-weight-bold internal-data" style="text-align: left;background-color: #eaeaea;">Japan
                 </td>
                 <td class="font-weight-bold internal-data" style="text-align:center left;background-color: #eaeaea;">56</td>
               
                 <td class="font-weight-bold internal-data" style="text-align:center left;background-color: #eaeaea;">100%</td>
                 <td class="font-weight-bold internal-data" style="text-align:center left;background-color: #eaeaea;">505.0%</td>
                 <td class="font-weight-bold internal-data" style="text-align:center left;background-color: #eaeaea;">15.9</td> 
                 <td class="font-weight-bold internal-data" style="text-align:center left;background-color: #eaeaea;">100%</td>
                 <td class="font-weight-bold internal-data" style="text-align:center left;background-color: #eaeaea;">25.4%</td> 
              </tr>
              <tr>
                 <td class="text-left">Skin Care
                 <td >10</td>
                 <td >50%</td>
                 <td >528.8%</td>
                 <td >10</td> 
                 <td >50%</td>
                 <td >10.1%</td> 
                 
              </tr>
              <tr>
                <td class="text-left">Make-up
                 <td >20</td>
                 <td >25%</td>
                 <td >590.2%</td>
                 <td >20</td> 
                 <td >25%</td>
                 <td >8.5%</td> 
                 
              </tr>
              <tr>
                 <td class="text-left">Fragrance</td>
                 <td >26</td>
                 <td >25%</td>
                 <td >386.8%</td>
                 <td >26</td> 
                 <td >25%</td>
                 <td >128.7%</td>  
              </tr>  
           </table>

           <table class="table table-bordered table-hover text-dark table-hover text-center" style="font-size: 12px;">

              <tr>
                 <th class="internal-data bg-danger" rowspan="2" style="color: white; vertical-align: middle;">
                   Channel</th>
                 <th class="internal-data bg-danger text-center" colspan="3" style="color: white;">
                    2023 Q2
                 </th>
                 <!-- <th class="internal-data" colspan="2" style="background-color: #e98c85;color: white;">
                          Price/UC</th> -->
                 <th class="internal-data bg-danger text-center" colspan="3" style="color: white;">
                    2022 Q2
                 </th>
                 <!-- <th class="internal-data" colspan="2" style="background-color: #e36d63;color: white;">OI/UC
                       </th> -->
                 
              </tr>
              <tr>
                 <td class="internal-data bg-danger text-center" style="color: white;">Sales (Mn USD)</td>
                 <td class="internal-data bg-danger text-center" style="color: white;">MOB
                 </td>
                 
                 <!-- <td class="internal-data" style="background-color: #e98c85;color: white;">2022 Price (in $)
                       </td>
                       <td class="internal-data" style="background-color: #e98c85;color: white;">2021-2022 Price
                          growth
                       </td> -->
                 <td class="internal-data bg-danger text-center" style="color: white;">% vs LY</td>
                 <td class="internal-data bg-danger text-center" style="color: white;">Sales (Mn USD)</td>
                 <td class="internal-data bg-danger text-center" style="color: white;">MOB
                 </td>
                 <td class="internal-data bg-danger" style="color: white;">% vs LY</td> 
              </tr>
               <tr>
                 <td class="font-weight-bold internal-data" style="text-align: left;background-color: #eaeaea;">Japan
                 </td>
                 <td class="font-weight-bold internal-data" style="text-align: center left;background-color: #eaeaea;">95.9</td>
                 <td class="font-weight-bold internal-data" style="text-align: center left;background-color: #eaeaea;">100%</td>
                 <td class="font-weight-bold internal-data" style="text-align:center left;background-color: #eaeaea;">505.0%</td>
                 <td class="font-weight-bold internal-data" style="text-align:center left;background-color: #eaeaea;" >15.9</td> 
                 <td class="font-weight-bold internal-data" style="text-align:center left;background-color: #eaeaea;" >100%</td>
                 <td class="font-weight-bold internal-data" style="text-align:center left;background-color: #eaeaea;">25.4%</td> 
              </tr>
              <tr>
                 <td class="text-left">Airline</td>
                 <td class="text-centre">10</td>
                 <td >50%</td>
                 <td >528.8%</td>
                 <td >10</td> 
                 <td >50%</td>
                 <td >10.1%</td> 
                 
              </tr>
              <tr>
                 <td class="text-left">Airport</td>
                 <td >20</td>
                 <td >25%</td>
                 <td >590.2%</td>
                 <td >20</td> 
                 <td >25%</td>
                 <td >8.5%</td> 
                 
              </tr>
              <tr>
                 <td class="text-left">Downtown Stores</td>
                 <td >26</td>
                 <td >25%</td>
                 <td >386.8%</td>
                 <td >26</td> 
                 <td >25%</td>
                 <td >128.7%</td>  
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
            Highcharts.chart('marketoverview_chart', {
            chart: {
                    //zoomType: 'xy',
                    //  height: 700,
                    marginTop: 100
                },
                colors: ['#4cc9f0','#4895ef','#3f37c9','#702b9e','#35034f','#b5179e','#ff8fa3','#e574bc','#dc97ff','#fad2e1','#03045e'],
                title: {
                    text: ''
                },
                credits: {
                    enabled: false
                },
                xAxis: [{
                     categories: ["Q1'2021", "Q2'2021", "Q3'2021", "Q4'2021","Q1'2022","Q2'2022","Q3'2022","Q4'2022","Q1'2023","Q2'2023"],
                    //categories: tbl_header,
                    crosshair: true
                }],
                yAxis: [{ // Primary yAxis
                    labels: {
                        format: '{value}',
                        style: {
                            color: Highcharts.getOptions().colors[1]
                        }
                    },
                    title: {
                        text: 'st_bar_chart',
                        enabled: false,
                        style: {
                            color: Highcharts.getOptions().colors[1]
                        }
                    }
                }, { // Secondary yAxis
                    title: {
                        text: 'line_chart',
                        enabled: false,
                        style: {
                            color: Highcharts.getOptions().colors[0]
                        }
                    },
                    labels: {
                        format: '{value}%',
                        style: {
                            color: Highcharts.getOptions().colors[0]
                        }
                    },
                    opposite: true
                }],
                tooltip: {
                    shared: true
                },
                plotOptions: {
                    series: {
                        dataLabels: {
                            enabled: true,
                            format: '{y}',
                        },
                        pointWidth: 70
                    },
                    column: {
                        stacking: 'normal'
                    }
                },
                legend: {
                    align: 'center',
                    verticalAlign: 'top',
                    floating: true,
                    x: 0,
                    y: 0,
                    itemStyle: {
                        fontSize:'11px',
                        font: 'Segoe UI Emoji'
                        // color: '#A0A0A0'
                    },
                },
                exporting: {
                    filename: 'Ecom Channel Split',
                    buttons: {
                        contextButton: {
                            menuItems: [
                                {
                                text: 'Export XLSX',
                                onclick: function() {
                                    EC_PlatformExcel(3);
                                }
                                },
                                {
                                text: 'Export PPT',
                                onclick: function() {
                                    EC_PlatformExportToPPT(result);
                                }
                                },
                            ]
                        }
                    }, 
                },
                series: [{
                    name: "Sales(Mn USD)",
                    type: "column",
                    data: [2362,2526,2457,3320,2873,2318,2622,3389,3071,2315],
                    tooltip: {
                      valueSuffix: ""
                    }
                },
                {
                    name: "%Growth vs LY",
                    type: "line",
                    yAxis: 1,
                    data: [30,24,-30,-25,20,14,-10,-5,50,67],
                    tooltip: {
                      valueSuffix: "%"
                    },
                    dataLabels: {
                      enabled: true,
                      format: "{y}%"
                    }
                }]
            });
        });
    </script>

<?= $this->endSection(); ?>  
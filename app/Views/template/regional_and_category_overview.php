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
              <p style="text-align:center; font-weight: bold;" class="justify-content-end px-4">Global P&C Region Split</p>
              <div class=" d-flex justify-content-between"  id="region_split_piechart">
              <!-- <img src="<?=IMG?>pie_chart.png" class="w-50"> -->
              </div>
            </div>
            <div class="col-md-6">
            <p style="text-align:center; font-weight: bold;">Global P&C Category Split</p>
            <div class=" d-flex justify-content-between"  id="category_split_piechart">
              <!-- <img src="<?=base_url()?>public/images/pie_chart.png" class="w-50"> -->
            </div>
            </div>
          </div>
          <div class="col-md-12">
          
            <table class="table table-bordered table-hover text-dark table-hover text-center" style="font-size: 12px;">

              <tr>
                 <th class="internal-data bg-danger" rowspan="2" style="color: white; vertical-align: middle;">
                    Category </th>
                 <th class="internal-data bg-danger text-center" colspan="3" style="color: white;">
                    2022
                 </th>
                 
                 <th class="internal-data bg-danger text-center" colspan="3" style="color: white;">
                    2021
                 </th>
                 
                  <th class="internal-data bg-danger text-center" colspan="3" style="color: white;">
                    2020
                 </th>
                 <th class="internal-data bg-danger text-center" colspan="3" style="color: white;">
                    2019
                 </th>
                 
              </tr>

              
              <tr>
                 <td class="internal-data bg-danger text-center font-weight-bold" style="color: white;">Sales(Mn USD)</td>
                 <td class="internal-data bg-danger text-center font-weight-bold" style="color: white;">% Growth vs LY
                 </td>
                 <td class="internal-data bg-danger text-center font-weight-bold" style="color: white;">Market share (%)</td>
                 <td class="internal-data bg-danger text-center font-weight-bold" style="color: white;">Sales (Mn USD)</td>
                 <td class="internal-data bg-danger text-center font-weight-bold" style="color: white;">% Growth vs LY
                 </td>
                 <td class="internal-data bg-danger font-weight-bold" style="color: white;">Market share (%)</td>

                 <td class="internal-data bg-danger text-center font-weight-bold" style="color: white;">Sales (Mn USD)
                 </td>
                 <td class="internal-data bg-danger text-center font-weight-bold" style="color: white;">% Growth vs LY</td>
                 <td class="internal-data bg-danger text-center font-weight-bold" style="color: white;">Market share (%)
                 </td>
                 <td class="internal-data bg-danger text-center font-weight-bold" style="color: white;">Sales (Mn USD)</td>
                 <td class="internal-data bg-danger text-center font-weight-bold" style="color: white;">% Growth vs LY</td>
                 <td class="internal-data bg-danger text-center font-weight-bold" style="color: white;">Market share (%)
                 </td>   
              </tr>
              <tr>
                  <td class="font-weight-bold internal-data" style="text-align: left;background-color: #eaeaea;">Grand Total
                 </td>
                  <td class="font-weight-bold internal-data" style="text-align: left;background-color: #eaeaea;">33,909.0
                 </td>
                  <td class="font-weight-bold internal-data" style="text-align: left;background-color: #eaeaea;">5.0%
                 </td>
                  <td class="font-weight-bold internal-data" style="text-align: left;background-color: #eaeaea;">-
                 </td>
                  <td class="font-weight-bold internal-data" style="text-align: left;background-color: #eaeaea;">32,298.5
                 </td>
                  <td class="font-weight-bold internal-data" style="text-align: left;background-color: #eaeaea;">16.4%
                 </td>
                  <td class="font-weight-bold internal-data" style="text-align: left;background-color: #eaeaea;">-
                 </td>
                  <td class="font-weight-bold internal-data" style="text-align: left;background-color: #eaeaea;">32,298.5
                 </td>
                  <td class="font-weight-bold internal-data" style="text-align: left;background-color: #eaeaea;">16.4%
                 </td>
                 <td class="font-weight-bold internal-data" style="text-align: left;background-color: #eaeaea;">-
                 </td>
                 <td class="font-weight-bold internal-data" style="text-align: left;background-color: #eaeaea;">32,298.5
                 </td>
                 <td class="font-weight-bold internal-data" style="text-align: left;background-color: #eaeaea;">16.4%
                 </td>
                 <td class="font-weight-bold internal-data" style="text-align: left;background-color: #eaeaea;">-
                 </td>  
              </tr>
               <tr>
                 <td class="text-left font-weight-bold">Americas</td>
                 <td class="text-center font-weight-bold">1,894.3</td>
                 <td class="text-center font-weight-bold">52.0%</td>
                 <td class="text-center font-weight-bold" >5.6%</td>      
                 <td class="text-center font-weight-bold">1,246.2 </td>
                 <td class="text-center font-weight-bold">25.8%</td>
                 <td class="text-center font-weight-bold">3.9%</td>
                 <td class="text-center font-weight-bold">1,246.2</td> 
                 <td class="text-center font-weight-bold">25.8%</td>
                 <td class="text-center font-weight-bold">3.9%</td>
                 <td class="text-center font-weight-bold">1,246.2</td>
                 <td class="text-center font-weight-bold" >25.8%</td>      
                 <td class="text-center font-weight-bold">3.9%</td>     
              </tr>
              <tr>
                 <td class="text-left">Fragrance</td>
                 <td class="text-center"></td>
                 <td class="text-center"></td>
                 <td class="text-center" ></td>      
                 <td class="text-center"></td>
                 <td class="text-center"></td>
                 <td class="text-center"></td>
                 <td class="text-center"></td> 
                 <td class="text-center"></td>
                 <td class="text-center"></td>
                 <td class="text-center"></td>
                 <td class="text-center" ></td>      
                 <td class="text-center"></td>
                      
              </tr>

               <tr>
                 <td class="text-left">Make-up</td>
                 <td class="text-center" >26,761.3</td>      
                 <td class="text-center">-3.7%</td>
                 <td class="text-center">78.9%</td>
                 <td class="text-center">27,801.8</td>
                 <td class="text-center">13.3%</td> 
                 <td class="text-center">86.1%</td>
                 <td class="text-center">27,801.8 </td>
                 <td class="text-center">13.3%</td>
                 <td class="text-center">86.1%</td>      
                 <td class="text-center">27,801.8</td>
                 <td class="text-center">13.3%</td>
                 <td class="text-center">86.1%</td>
                      
              </tr>
              
              <tr>
                 <td class="text-left">Skincare</td>
                 <td class="text-center">5,253.4</td>
                 <td class="text-center">61.6%</td>
                 <td class="text-center" >15.5%</td>      
                 <td class="text-center">3,250.4</td>
                 <td class="text-center">46.4%</td>
                 <td class="text-center">10.1%</td>
                 <td class="text-center">3,250.4</td> 
                 <td class="text-center">46.4%</td>
                 <td class="text-center">10.1%</td>
                 <td class="text-center">3,250.4</td>
                 <td class="text-center">46.4%</td>      
                 <td class="text-center">10.1%</td>   
              </tr>

              <tr>
                 <td class="text-left font-weight-bold">APAC</td>
                 <td class="text-center font-weight-bold">1,894.3</td>
                 <td class="text-center font-weight-bold">52.0%</td>
                 <td class="text-center font-weight-bold" >5.6%</td>      
                 <td class="text-center font-weight-bold">1,246.2 </td>
                 <td class="text-center font-weight-bold">25.8%</td>
                 <td class="text-center font-weight-bold">3.9%</td>
                 <td class="text-center font-weight-bold">1,246.2 </td> 
                 <td class="text-center font-weight-bold">25.8%</td>
                 <td class="text-center font-weight-bold">3.9%</td>
                 <td class="text-center font-weight-bold">1,246.2 </td>
                 <td class="text-center font-weight-bold">25.8%</td>      
                 <td class="text-center font-weight-bold">3.9%</td>      
              </tr>
             <tr>
                 <td class="text-left">Fragrance</td>
                 <td class="text-center"></td>
                 <td class="text-center"></td>
                 <td class="text-center" ></td>      
                 <td class="text-center"></td>
                 <td class="text-center"></td>
                 <td class="text-center"></td>
                 <td class="text-center"></td> 
                 <td class="text-center"></td>
                 <td class="text-center"></td>
                 <td class="text-center"></td>
                 <td class="text-center" ></td>      
                 <td class="text-center"></td>
                      
              </tr>

              <tr>
                 <td class="text-left">Make-up </td>
                 <td class="text-center">26,761.3</td>
                 <td class="text-center">-3.7%</td>
                 <td class="text-center">78.9%</td>      
                 <td class="text-center">27,801.8</td>
                 <td class="text-center">13.3%</td>
                 <td class="text-center">86.1%</td>
                 <td class="text-center">27,801.8</td> 
                 <td class="text-center">13.3%</td>
                 <td class="text-center">86.1%</td>
                 <td class="text-center">27,801.8</td>
                 <td class="text-center">13.3%</td>      
                 <td class="text-center">86.1%</td>     
              </tr>

              <tr>
                 <td class="text-left">Skincare</td>
                 <td class="text-center">5,253.4</td>
                 <td class="text-center">61.6%</td>
                 <td class="text-center">15.5%</td>      
                 <td class="text-center">3,250.4</td>
                 <td class="text-center">46.4%</td>
                 <td class="text-center">10.1%</td>
                 <td class="text-center">3,250.4</td> 
                 <td class="text-center">46.4%</td>
                 <td class="text-center">10.1%</td>
                 <td class="text-center">3,250.4</td>
                 <td class="text-center">46.4%</td>      
                 <td class="text-center">10.1%</td>     
              </tr>

              <tr>
                 <td class="text-left font-weight-bold">EMEA</td>
                 <td class="text-center font-weight-bold">1,894.3</td>
                 <td class="text-center font-weight-bold">52.0%</td>
                 <td class="text-center font-weight-bold">5.6%</td>      
                 <td class="text-center font-weight-bold">1,246.2 </td>
                 <td class="text-center font-weight-bold">25.8%</td>
                 <td class="text-center font-weight-bold">3.9%</td>
                 <td class="text-center font-weight-bold">1,246.2</td> 
                 <td class="text-center font-weight-bold">25.8%</td>
                 <td class="text-center font-weight-bold">3.9%</td>
                 <td class="text-center font-weight-bold">1,246.2 </td>
                 <td class="text-center font-weight-bold">25.8%</td>      
                 <td class="text-center font-weight-bold">3.9%</td>      
              </tr>

               <tr>
                 <td class="text-left">Fragrance</td>
                 <td class="text-center"></td>
                 <td class="text-center"></td>
                 <td class="text-center" ></td>      
                 <td class="text-center"></td>
                 <td class="text-center"></td>
                 <td class="text-center"></td>
                 <td class="text-center"></td> 
                 <td class="text-center"></td>
                 <td class="text-center"></td>
                 <td class="text-center"></td>
                 <td class="text-center" ></td>      
                 <td class="text-center"></td>
                      
              </tr>

              <tr>
                 <td class="text-left">Make-up</td>
                 <td class="text-center">26,761.3</td>
                 <td class="text-center">-3.7%</td>
                 <td class="text-center">78.9%</td>      
                 <td class="text-center">27,801.8 </td>
                 <td class="text-center">13.3%</td>
                 <td class="text-center">86.1%</td>
                 <td class="text-center">27,801.8</td> 
                 <td class="text-center">13.3%</td>
                 <td class="text-center">86.1%</td>
                 <td class="text-center">27,801.8</td>
                 <td class="text-center">13.3%</td>      
                 <td class="text-center">86.1%</td>       
              </tr>

              <tr>
                 <td class="text-left">Skincar</td>
                 <td class="text-center">5,253.4 </td>
                 <td class="text-center">61.6%</td>
                 <td class="text-center" >15.5%</td>      
                 <td class="text-center">3,250.4</td>
                 <td class="text-center">46.4%</td>
                 <td class="text-center">10.1%</td>
                 <td class="text-center">3,250.4</td> 
                 <td class="text-center">46.4%</td>
                 <td class="text-center">10.1%</td>
                 <td class="text-center">3,250.4</td>
                 <td class="text-center" >46.4%</td>      
                 <td class="text-center">10.1%</td>        
              </tr>
             
           </table>
          </div>
        </div>
<?= $this->endSection() ?>   

<?= $this->section('extra_foot'); ?>

    <script>
        // var API_URL = "<?php echo BASEURL; ?>";
        // console.log('API_URL',API_URL);
    </script>
    <script src="<?php echo BASEURL; ?>highcharts/highstock/highstock.js"></script>
    <script src="<?php echo BASEURL; ?>highcharts/highstock/highcharts-more.js"></script>
    <script src="<?php echo BASEURL; ?>highcharts/highstock/exporting.js"></script>
    <script src="<?php echo BASEURL; ?>highcharts/highstock/export-data.js"></script>
    <script src="<?php echo BASEURL; ?>highcharts/highstock/accessibility.js"></script>

    <!-- <script src="https://cdn.jsdelivr.net/npm/gasparesganga-jquery-loading-overlay@2.1.7/dist/loadingoverlay.min.js"></script> -->

    <!-- <script src="<?php echo BASEURL; ?>public/js/skubenchmark.js"></script> -->
    <script>
        $(document).ready(function(){
            Highcharts.chart('region_split_piechart', {
                chart: {
                    plotBackgroundColor: null,
                    plotBorderWidth: null,
                    plotShadow: false,
                    type: 'pie',
                    height: 250
                },
                credits: {
                    enabled: false
                },
                colors: ['#1D5B00','#7FC160','#378F0E','#c00000','#811331','#808080','#EAC117','#0e48c7','#480ca8','#560bad','#4e148c','#461177','#3d0e61','#431259','#03045e'],
                title: {
                    text: '',//'Global P&C Region Split',
                    align: 'center'
                },
                legend: {
                    align: 'left',
                    verticalAlign: 'middle',
                    layout: 'vertical',
                    symbolRadius: 0,
                    floating:true,
                    padding:60
                },
                tooltip: {
                    pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                },
                accessibility: {
                    point: {
                        valueSuffix: '%'
                    }
                },
                plotOptions: {
                    pie: {
                        allowPointSelect: true,
                        cursor: 'pointer',
                        dataLabels: {
                            enabled: false
                        },
                        showInLegend: true
                    }
                },
                series: [{
                    name: 'Category',
                    colorByPoint: true,
                    data: [{
                        name: 'APAC',
                        y: 75,
                        //sliced: true,
                        //selected: true
                    },  {
                        name: 'Americas',
                        y: 10
                    },  {
                        name: 'EMEA',
                        y: 15
                    }]
                }]
            });

            Highcharts.chart('category_split_piechart', {
                chart: {
                    plotBackgroundColor: null,
                    plotBorderWidth: null,
                    plotShadow: false,
                    type: 'pie',
                    height: 250
                },
                credits: {
                    enabled: false
                },
                colors: ['#c00000','#F984F0','#808080','#EAC117','#0e48c7','#480ca8','#560bad','#4e148c','#461177','#3d0e61','#431259','#03045e'],
                title: {
                    text: '',//'Global P&C Category Split',
                    align: 'center'
                },
                legend: {
                    align: 'left',
                    verticalAlign: 'middle',
                    layout: 'vertical',
                    symbolRadius: 0,
                    floating:true,
                    padding:60
                },
                tooltip: {
                    pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                },
                accessibility: {
                    point: {
                        valueSuffix: '%'
                    }
                },
                plotOptions: {
                    pie: {
                        allowPointSelect: true,
                        cursor: 'pointer',
                        dataLabels: {
                            enabled: false
                        },
                        showInLegend: true
                    }
                },
                series: [{
                    name: 'Category',
                    colorByPoint: true,
                    data: [{
                        name: 'Fragrance',
                        y: 75,
                        //sliced: true,
                        //selected: true
                    },  {
                        name: 'Make-up',
                        y: 10
                    },  {
                        name: 'Skincare',
                        y: 15
                    }]
                }]
            });
        });
    </script>

<?= $this->endSection(); ?>

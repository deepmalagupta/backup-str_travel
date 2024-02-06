<?= $this->extend("layout/main"); ?>

<?= $this->section("body") ?>

        <!-- main containe section start -->

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
                Category
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
          </div>
          <div class="col-md-6 d-flex justify-content-end">
          <button type="button" class="btn btn-primary w-auto">Submit</button>
          </div>
        </div>
        
        <div class="bg-white fadeInUp m-0 mt-2 p-3 row wow rounded shadow">
          
          <div class="col-md-12 text-center mt-2">
          <!-- <div class="d-flex justify-content-end">
          <div class="custom-control custom-switch mx-5">
            <input type="checkbox" class="custom-control-input" id="customSwitch1">
            <label class="custom-control-label" for="customSwitch1"></label>
          </div>
        </div> -->
          </div>
          
          <div class="col-md-6">
          
            <table class="table table-bordered table-hover text-dark table-hover text-center" style="font-size: 12px;">
                <th></th>
                <th></th>
                    <th class="internal-data bg-danger" colspan="3" style="color: white; vertical-align: center;" >2022</th>
                     <th class="internal-data bg-danger" colspan="3" style="color: white; vertical-align: center;" >2021</th>

              <tr>
                 <th class="internal-data bg-danger"  style="color: white; vertical-align: center;">
                    Rank 2022</th>
                 <th class="internal-data bg-danger text-left"  style="color: white;">
                   Region > Country
                 </th>
                 
                 <th class="internal-data bg-danger text-center"  style="color: white;">
                    Sales (MnUSD)
                 </th>

                 
                  <th class="internal-data bg-danger text-center"  style="color: white;">
                    %Growth vs LY</th>

                 <th class="internal-data bg-danger text-center"  style="color: white;">
                    Market share
                 </th>
                 <th class="internal-data bg-danger text-center"  style="color: white;">
                     Sales (MnUSD)
                 </th>
                 <th class="internal-data bg-danger text-center"  style="color: white;">
                     %Growth vs LY
                 </th>
                 <th class="internal-data bg-danger text-center"  style="color: white;">
                    Market share
                 </th>
                 
              </tr>


              
              <tr>
                  <td class="font-weight-bold internal-data text-center" style="text-align: left;background-color: #eaeaea;">Total
                 </td>
                 <td class="font-weight-bold internal-data" style="text-align: left;background-color: #eaeaea;">Global
                 </td>
                  <td class="font-weight-bold internal-data text-center" style="text-align: left;background-color: #eaeaea;">33,909.0
                 </td>
                  <td class="font-weight-bold internal-data text-center" style="text-align: left;background-color: #eaeaea;">5.0%
                 </td>
                  <td class="font-weight-bold internal-data text-center" style="text-align: left;background-color: #eaeaea;">100.0%
                 </td>
                  <td class="font-weight-bold internal-data text-center" style="text-align: left;background-color: #eaeaea;">32,298.5
                 </td>
                 <td class="font-weight-bold internal-data text-center" style="text-align: left;background-color: #eaeaea;">16.4%
                 </td>
                 <td class="font-weight-bold internal-data text-center" style="text-align: left;background-color: #eaeaea;">100.0%
              </tr>
              <tr>
                 <td class="text-center">1</td>
                 <td class="text-left ">CHINA MAINLAND</td>
                 <td class="text-center">12,477.2</td>
                 <td class="text-center" >5.1%</td>      
                 <td class="text-center">36.8%</td>
                 <td class="text-center">11,874.2</td>
                 <td class="text-center">41.4%</td>
                 <td class="text-center">36.8%</td>      
              </tr>
              <tr>
                 <td class="text-center">2</td>
                 <td class="text-left">CHINA HAINAN</td>
                 <td class="text-center"></td>
                 <td class="text-center"></td>     
                 <td class="text-center"></td>
                 <td class="text-center"></td>
                 <td class="text-center"></td>
                 <td class="text-center"></td>      
              </tr>
               <tr>
                 <td class="text-center">3</td>
                 <td class="text-left"> SOUTH KOREA</td>
                 <td class="text-center">11,668.4</td>
                 <td class="text-center">-11.5%</td>     
                 <td class="text-center">34.4%</td>
                 <td class="text-center">13,186.9</td>
                 <td class="text-center">8.4%</td>
                 <td class="text-center">40.8%</td>      
              </tr> 
               <tr>
                 <td class="text-center">4</td>
                 <td class="text-left">HONG KONG</td>
                 <td class="text-center">1,245.9</td>
                 <td class="text-center">-11.3%</td>     
                 <td class="text-center">3.7%</td>
                 <td class="text-center">1,404.1</td>
                 <td class="text-center">-34.8%</td>
                 <td class="text-center">4.3%</td>      
              </tr>
               <tr>
                 <td class="text-center">5</td>
                 <td class="text-left">UNITED KINGDOM</td>
                 <td class="text-center">723.8 </td>
                 <td class="text-center">145.5%</td>     
                 <td class="text-center">2.1%</td>
                 <td class="text-center">294.8</td>
                 <td class="text-center">19.1%</td>
                 <td class="text-center">0.9%</td>      
              </tr>
               <tr>
                 <td class="text-center">6</td>
                 <td class="text-left">USA</td>
                 <td class="text-center">651.5</td>
                 <td class="text-center">42.9%</td>     
                 <td class="text-center">1.9%</td>
                 <td class="text-center">456.1</td>
                 <td class="text-center">13.5%</td>
                 <td class="text-center">1.4%</td>      
              </tr>
               <tr>
                 <td class="text-center">7</td>
                 <td class="text-left">UNITED ARAB EMIRATES</td>
                 <td class="text-center">498.1</td>
                 <td class="text-center">34.1%</td>     
                 <td class="text-center">1.5%</td>
                 <td class="text-center">371.4</td>
                 <td class="text-center">66.2%</td>
                 <td class="text-center">1.1%</td>      
              </tr>
               <tr>
                 <td class="text-center">8</td>
                 <td class="text-left">TURKEY</td>
                 <td class="text-center">448.3 </td>
                 <td class="text-center">56.7%</td>     
                 <td class="text-center">1.3%</td>
                 <td class="text-center">286.1</td>
                 <td class="text-center">106.9%</td>
                 <td class="text-center">0.9%</td>      
              </tr>
               <tr>
                 <td class="text-center">9</td>
                 <td class="text-left">FRANCE</td>  
                 <td class="text-center">444.4 </td>
                 <td class="text-center">71.3%</td>
                 <td class="text-center">1.3%</td>     
                 <td class="text-center">259.4</td>
                 <td class="text-center">37.7%</td>
                 <td class="text-center">0.8%</td>
                     
              </tr>
               <tr>
                 <td class="text-center">10</td>
                 <td class="text-left">NORDIC COUNTRIES</td>
                 <td class="text-center">437.8</td>
                 <td class="text-center">74.4%</td>     
                 <td class="text-center">1.3%</td>
                 <td class="text-center">251.1 </td>
                 <td class="text-center">31.3%</td>
                 <td class="text-center">0.8%</td>      
              </tr>
               <tr>
                 <td class="text-center">11</td>
                 <td class="text-left">MACAU </td>
                 <td class="text-center">378.4 </td>
                 <td class="text-center">-36.6%</td>     
                 <td class="text-center">1.1%</td>
                 <td class="text-center">596.9</td>
                 <td class="text-center">29.6%</td>
                 <td class="text-center">1.8%</td>      
              </tr>
               <tr>
                 <td class="text-center">12</td>
                 <td class="text-left">SPAIN </td>
                 <td class="text-center">298.1</td>
                 <td class="text-center">77.1%</td>     
                 <td class="text-center">0.9%</td>
                 <td class="text-center">168.3</td>
                 <td class="text-center">43.6% </td>
                 <td class="text-center">0.5%</td>      
              </tr>
               <tr>
                 <td class="text-center">13</td>
                 <td class="text-left">THAILAND</td>
                 <td class="text-center">263.5 </td>
                 <td class="text-center">-5.4%</td>     
                 <td class="text-center">0.8%</td>
                 <td class="text-center">278.6</td>
                 <td class="text-center">-49.5%</td>
                 <td class="text-center">0.9%</td>      
              </tr>
               <tr>
                 <td class="text-center">14</td>
                 <td class="text-left">CARIBBEAN </td>
                 <td class="text-center">262.3</td>
                 <td class="text-center">33.9%</td>     
                 <td class="text-center">0.8%</td>
                 <td class="text-center">195.9</td>
                 <td class="text-center">16.2%</td>
                 <td class="text-center">0.6%</td>      
              </tr> 
                <tr>
                 <td class="text-center">15</td>
                 <td class="text-left">GERMANY</td>
                 <td class="text-center">260.0</td>
                 <td class="text-center">58.7%</td>     
                 <td class="text-center">0.8% </td>
                 <td class="text-center">163.8</td>
                 <td class="text-center">17.9%</td>
                 <td class="text-center">0.5%</td>      
              </tr> 
                <tr>
                 <td class="text-center">16</td>
                 <td class="text-left">SINGAPORE</td>
                 <td class="text-center">242.9</td>
                 <td class="text-center">42.5%</td>     
                 <td class="text-center">0.7%</td>
                 <td class="text-center">170.5</td>
                 <td class="text-center">-16.4%</td>
                 <td class="text-center">0.5%</td>      
              </tr> 
                <tr>
                 <td class="text-center">17</td>
                 <td class="text-left">EASTERN EUROPE</td>
                 <td class="text-center">217.1</td>
                 <td class="text-center">24.5%</td>     
                 <td class="text-center">0.6%</td>
                 <td class="text-center">174.3</td>
                 <td class="text-center">54.2%</td>
                 <td class="text-center">0.5%</td>      
              </tr> 
                 <tr>
                 <td class="text-center">18</td>
                 <td class="text-left">ARGENTINA</td>
                 <td class="text-center">216.7 </td>
                 <td class="text-center">218.4%</td>     
                 <td class="text-center">0.6%</td>
                 <td class="text-center">68.1 </td>
                 <td class="text-center">10.7%</td>
                 <td class="text-center">0.2%</td>      
              </tr> 
                <tr>
                 <td class="text-center">19</td>
                 <td class="text-left">ISRAEL</td>
                 <td class="text-center">201.5</td>
                 <td class="text-center">64.3%</td>     
                 <td class="text-center">0.4%</td>
                 <td class="text-center">72.4</td>
                 <td class="text-center">12.4</td>
                 <td class="text-center">0.3%</td>      
              </tr> 
                <tr>
                 <td class="text-center">20</td>
                 <td class="text-left">REST OF MIDDLE EAST</td>
                 <td class="text-center">187.4</td>
                 <td class="text-center">34.6%</td>     
                 <td class="text-center">0.8%</td>
                 <td class="text-center">56.3</td>
                 <td class="text-center">14.5</td>
                 <td class="text-center">0.4%</td>      
              </tr>   
            </table>
          </div>
          <div class="col-md-6" id="marketregion_chart">

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
            var dataset = [{split: 36.8, y:12477.2},{split: 34.4, y:11668.4},{split: 3.7, y:1245.9},{split: 2.1, y:723.8},{split: 1.9, y:651.5},{split: 1.5, y:498.1},{split: 1.3, y:448.3},{split: 1.3, y:444.4},{split: 1.3, y:437.8},{split: 1.1, y:378.4}];
 
            // Data retrieved from: https://www.uefa.com/uefachampionsleague/history/
            Highcharts.chart('marketregion_chart', {
                chart: {
                    type: 'bar'
                },
                credits: {
                    enabled: false
                },
                title: {
                    text: 'Global Top 10 Countries'
                },
                xAxis: {
                    categories: ['CHINA', 'SOUTH KOREA', 'HONG KONG', 'UNITED KINGDOM', 'USA', 'UNITED ARAB EMIRATES', 'TURKEY', 'FRANCE', 'NORDIC COUNTRIES', 'MACAU']
                },
                yAxis: {
                    labels: {
                        enabled: false
                    },
                    title: {
                        text: null
                    },
                    gridLineColor: 'transparent',
                },
                legend: {
                    reversed: true
                },
                plotOptions: {
                    series: {
                        stacking: 'normal',
                        dataLabels: {
                            enabled: true,
                            // formatter: function() {return this.name+''+this.y},
                            format: '{point.split}%<br>' + '{point.y}',
                            inside: false
                        }
                    }
                },
                colors: ['rgb(192,192,192)','rgb(236, 141, 105)'],
                series: [{
                    showInLegend: false, 
                    data: dataset
                }]
            });
         
        });
    </script>

<?= $this->endSection(); ?>  
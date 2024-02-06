<?= $this->extend("layout/main"); ?>

<?= $this->section("body") ?>

        <!-- main containe section start -->
        <?= view('layout/breadcrumb'); ?>

        <div class="bg-white fadeInUp m-0 mt-2 p-3 row wow rounded shadow">
          <div class="col-md-6 d-flex px-0">
          <div class="px-3">
            <select class="custom-select">
              <option selected>Year</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
          </div>
          <div class="">
            <select class="custom-select">
              <option selected>Region</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
          </div>
          <div class="px-3">
            <select class="custom-select">
              <option selected>Market</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
          </div>

          <div>
          <select id="multiple-checkboxes" multiple="multiple" class="border custom-select" data-placeholder="Category">
        <option value="php">PHP</option>
        <option value="javascript">JavaScript</option>
        <option value="java">Java</option>
        <option value="sql">SQL</option>
        <option value="jquery">Jquery</option>
        <option value=".net">.Net</option>
    </select>
</div>
          </div>
          <div class="col-md-6 d-flex justify-content-end">
          <button type="button" class="btn btn-primary w-auto">Submit</button>
          </div>
        </div>
        
        <div class="bg-white fadeInUp m-0 mt-2 p-3 row wow rounded shadow">
          
          <!-- <div class="col-md-12 text-center mt-2">
          <div class="d-flex justify-content-end">
          <div class="custom-control custom-switch mx-5">
            <input type="checkbox" class="custom-control-input" id="customSwitch1">
            <label class="custom-control-label" for="customSwitch1"></label>
          </div>
        </div>
          </div> -->
          <!-- <div class="mb-3 row">
            <div class="col-md-12">
            <div class=" d-flex justify-content-center mx-5">
              <img src="<?=IMG?>basic-bar-graph.png" class="w-75">
            </div>
            </div>
          </div> -->

          <div class="col-md-12" id="brandchart_div">
            
          </div>
          <div class="col-md-12">
          
            <table class="table table-bordered text-dark text-center" style="font-size: 12px;">

              <tr>
                    <th colspan="4" class="border-light"></th>
                    
                 <!-- <th class="internal-data bg-danger" rowspan="2" style="color: white; vertical-align: middle;">
                    Category Split</th> -->
                 <th class="internal-data bg-danger text-center" colspan="2" style="color: white;">
                    2022
                 </th>
                 
                 <th class="internal-data bg-danger text-center" colspan="2" style="color: white;">
                    2021
                 </th>
                 
                
                 <th class="internal-data bg-danger text-center" style="vertical-align: middle;"rowspan="2" style="color: white;">
                    % Growth vs LY
                 </th>                 
                 
              </tr>

              
              <tr>
                <td class="internal-data bg-danger text-center" style="color: white;">2022 Rank</td>
                 <td class="internal-data bg-danger text-center" style="color: white;">2021 Rank</td>
                 <td class="internal-data bg-danger text-center" style="color: white;">Change in Rank
                 </td>
                 
                 
                 <td class="internal-data bg-danger text-center" style="color: white;">Brands</td>
                 <td class="internal-data bg-danger text-center" style="color: white;">Sales (Mn USD)</td>
                 <td class="internal-data bg-danger text-center" style="color: white;">Market share
                 </td>
                 
                 
                 <td class="internal-data bg-danger" style="color: white;">Sales (Mn USD)</td>
                 <td class="internal-data bg-danger text-center" style="color: white;">Market share</td>
                 <!-- <td class="internal-data bg-danger text-center" style="color: white;">% Growth vs LY</td> -->
                 
                 
              </tr>

              <tr style="background: #e7e6e6;">
                  <th>Total</th>
                  <th>Total</th>
                  <th>-</th>
                  <th>Total</th>
                  <th>33,909.0</th>
                  <th>100.0%</th>
                  <th>32,298.5</th>
                  <th>100.0%</th>
                  <th>50.0%</th>
              </tr>
              <tr>
                 <!-- <td class="internal-data" style="text-align: left;background-color: #eaeaea;">Japan
                 </td> -->
                 <td class="internal-data">1</td>
                 <td class="internal-data">1</td>
                 <td class="internal-data"></td>
                 <td class="internal-data">ESTÉE LAUDER</td>
                 <td class="internal-data">4,608.2 </td>
                 <td class="internal-data">13.6%</td>
                 <td class="internal-data">4,193.9</td>
                 <td class="internal-data">13.0%</td>
                 <td class="internal-data">9.9%</td>
                 <!-- <td class="internal-data">8.9%</td> -->
                 <!-- <td class="internal-data">8.9%</td> -->
                       <!-- <td class="internal-data">8.9%</td>
                       <td class="internal-data">8.9%</td>
                       <td class="internal-data">8.9%</td> --> 
                 
              </tr>
              <tr>
                 <!-- td class="internal-data" style="text-align: left;background-color: #eaeaea;">Skin Care
                 </td> -->
                 <td class="internal-data">2</td>
                 <td class="internal-data">3</td>
                 <td class="internal-data">1</td>
                 <td class="internal-data">CRÈME DE LA MER</td>
                 <td class="internal-data">2,606.0</td>
                 <td class="internal-data">7.7%</td>
                 <td class="internal-data">2,162.6</td>
                   <td class="internal-data">6.7%</td> 
                   <td class="internal-data">20.5%</td>
                   <!-- <td class="internal-data">8.9%</td> -->
                       <!-- <td class="internal-data">8.9%</td> -->
                       <!-- <td class="internal-data">8.9%</td> -->
                       <!-- <td class="internal-data">8.9%</td> -->
                       <!-- <td class="internal-data">8.9%</td>  -->
                 
              </tr>
              <tr>
                 <!-- <td class="internal-data" style="text-align: left;background-color: #eaeaea;">Make-up
                 </td -->
                 <td class="internal-data">3</td>
                 <td class="internal-data">2</td>
                 <td class="internal-data">-1</td>
                 <td class="internal-data">SK-II</td>
                 <td class="internal-data">2,209.4</td>
                 <td class="internal-data">6.5%</td>
                  <td class="internal-data">2,390.9</td>
                       <td class="internal-data">7.4%</td>
                       <td class="internal-data">-7.6%</td>
                       <!-- <td class="internal-data">8.9%</td> -->
                       <!-- <td class="internal-data">8.9%</td> 
                       <td class="internal-data">8.9%</td>
                       <td class="internal-data">8.9%</td>
                       <td class="internal-data">8.9%</td> -->
              </tr>
              <tr>
                 <!-- <td class="internal-data" style="text-align: left;background-color: #eaeaea;">Fragrance
                 </td> -->
                 <td class="internal-data">4</td>
                 <td class="internal-data">4</td>
                 <td class="internal-data"></td>
                 <td class="internal-data">LANCÔME</td>
                 <td class="internal-data">2,129.6</td>
                 <td class="internal-data">6.3%</td>
                  <td class="internal-data">2,142.5</td>
                       <td class="internal-data">6.6%</td>
                       <td class="internal-data">-0.6%</td>
                       <!-- <td class="internal-data">8.9%</td> -->
                       <!-- <td class="internal-data">8.9%</td>
                       <td class="internal-data">8.9%</td>
                       <td class="internal-data">8.9%</td>
                       <td class="internal-data">8.9%</td> --> 
              </tr>

              <tr>
                 <!-- <td class="internal-data" style="text-align: left;background-color: #eaeaea;">Fragrance
                 </td> -->
                 <td class="internal-data">8</td>
                 <td class="internal-data">5</td>
                 <td class="internal-data"></td>
                 <td class="internal-data">KIEHL'S</td>
                 <td class="internal-data">989.4</td>
                 <td class="internal-data">2.9%</td>
                 <td class="internal-data">1,081.3</td>
                 <td class="internal-data">3.3%</td>
                 <td class="internal-data">-8.5%</td>
                       <!-- <td class="internal-data">8.9%</td> -->
                       <!-- <td class="internal-data">8.9%</td>
                       <td class="internal-data">8.9%</td>
                       <td class="internal-data">8.9%</td>
                       <td class="internal-data">8.9%</td> --> 
              </tr>

               <tr>
                 <!-- <td class="internal-data" style="text-align: left;background-color: #eaeaea;">Fragrance
                 </td> -->
                 <td class="internal-data">29</td>
                 <td class="internal-data">6</td>
                 <td class="internal-data"></td>
                 <td class="internal-data">GIORGIO ARMANI</td>
                 <td class="internal-data">945.7</td>
                 <td class="internal-data">2.8%</td>
                 <td class="internal-data">938.5</td>
                 <td class="internal-data">2.9%</td>
                 <td class="internal-data">0.8%</td>
                       <!-- <td class="internal-data">8.9%</td> -->
                       <!-- <td class="internal-data">8.9%</td>
                       <td class="internal-data">8.9%</td>
                       <td class="internal-data">8.9%</td>
                       <td class="internal-data">8.9%</td> --> 
              </tr>
               <tr>
                 <!-- <td class="internal-data" style="text-align: left;background-color: #eaeaea;">Fragrance
                 </td> -->
                 <td class="internal-data">7</td>
                 <td class="internal-data">7</td>
                 <td class="internal-data"></td>
                 <td class="internal-data">YSL</td>
                 <td class="internal-data">904.7</td>
                 <td class="internal-data">2.7%</td>
                 <td class="internal-data">817.7</td>
                 <td class="internal-data">2.5%</td>
                 <td class="internal-data">10.6%</td>
                       <!-- <td class="internal-data">8.9%</td> -->
                       <!-- <td class="internal-data">8.9%</td>
                       <td class="internal-data">8.9%</td>
                       <td class="internal-data">8.9%</td>
                       <td class="internal-data">8.9%</td> --> 
              </tr>
               <tr>
                 <!-- <td class="internal-data" style="text-align: left;background-color: #eaeaea;">Fragrance
                 </td> -->
                 <td class="internal-data">8</td>
                 <td class="internal-data">9</td>
                 <td class="internal-data">1</td>
                 <td class="internal-data">DIOR</td>
                 <td class="internal-data">900.8</td>
                 <td class="internal-data">2.7%</td>
                 <td class="internal-data">786.8</td>
                 <td class="internal-data">2.4%</td>
                 <td class="internal-data">14.5%</td>
                       <!-- <td class="internal-data">8.9%</td> -->
                       <!-- <td class="internal-data">8.9%</td>
                       <td class="internal-data">8.9%</td>
                       <td class="internal-data">8.9%</td>
                       <td class="internal-data">8.9%</td> --> 
              </tr>
               <tr>
                 <!-- <td class="internal-data" style="text-align: left;background-color: #eaeaea;">Fragrance
                 </td> -->
                 <td class="internal-data">5</td>
                 <td class="internal-data">8</td>
                 <td class="internal-data">-1</td>
                 <td class="internal-data">CLÉ DE PEAU BEAUTÉ </td>
                 <td class="internal-data">874.2</td>
                 <td class="internal-data">2.6%</td>
                 <td class="internal-data">788.6</td>
                 <td class="internal-data">2.4%</td>
                 <td class="internal-data">10.9%</td>
                       <!-- <td class="internal-data">8.9%</td> -->
                       <!-- <td class="internal-data">8.9%</td>
                       <td class="internal-data">8.9%</td>
                       <td class="internal-data">8.9%</td>
                       <td class="internal-data">8.9%</td> --> 
              </tr>
               <tr>
                 <!-- <td class="internal-data" style="text-align: left;background-color: #eaeaea;">Fragrance
                 </td> -->
                 <td class="internal-data">10</td>
                 <td class="internal-data">16</td>
                 <td class="internal-data">6</td>
                 <td class="internal-data">CHANEL</td>
                 <td class="internal-data">874.1</td>
                 <td class="internal-data">2.6%</td>
                 <td class="internal-data">556.1</td>
                 <td class="internal-data">1.7%</td>
                 <td class="internal-data">57.2%</td>
                       <!-- <td class="internal-data">8.9%</td> -->
                       <!-- <td class="internal-data">8.9%</td>
                       <td class="internal-data">8.9%</td>
                       <td class="internal-data">8.9%</td>
                       <td class="internal-data">8.9%</td> --> 
              </tr>
               <tr>
                 <!-- <td class="internal-data" style="text-align: left;background-color: #eaeaea;">Fragrance
                 </td> -->
                 <td class="internal-data">11</td>
                 <td class="internal-data">14</td>
                 <td class="internal-data">3</td>
                 <td class="internal-data">HELENA RUBINSTEIN</td>
                 <td class="internal-data">805.4</td>
                 <td class="internal-data">2.5%</td>
                 <td class="internal-data">523.7</td>
                 <td class="internal-data">1.7%</td>
                 <td class="internal-data">51.6%</td>
                       <!-- <td class="internal-data">8.9%</td> -->
                       <!-- <td class="internal-data">8.9%</td>
                       <td class="internal-data">8.9%</td>
                       <td class="internal-data">8.9%</td>
                       <td class="internal-data">8.9%</td> --> 
              </tr>
               <tr>
                 <!-- <td class="internal-data" style="text-align: left;background-color: #eaeaea;">Fragrance
                 </td> -->
                 <td class="internal-data">6</td>
                 <td class="internal-data">12</td>
                 <td class="internal-data"></td>
                 <td class="internal-data">SHISEIDO</td>
                 <td class="internal-data">798.8</td>
                 <td class="internal-data">2.2%</td>
                 <td class="internal-data">510.5</td>
                 <td class="internal-data">1.5%</td>
                 <td class="internal-data">50.5%</td>
                       <!-- <td class="internal-data">8.9%</td> -->
                       <!-- <td class="internal-data">8.9%</td>
                       <td class="internal-data">8.9%</td>
                       <td class="internal-data">8.9%</td>
                       <td class="internal-data">8.9%</td> --> 
              </tr>
               <tr>
                 <!-- <td class="internal-data" style="text-align: left;background-color: #eaeaea;">Fragrance
                 </td> -->
                 <td class="internal-data">13</td>
                 <td class="internal-data">13</td>
                 <td class="internal-data"></td>
                 <td class="internal-data">CLARINS</td>
                 <td class="internal-data">777.3</td>
                 <td class="internal-data">2.1%</td>
                 <td class="internal-data">509.3</td>
                 <td class="internal-data">1.3%</td>
                 <td class="internal-data">48.9%</td>
                       <!-- <td class="internal-data">8.9%</td> -->
                       <!-- <td class="internal-data">8.9%</td>
                       <td class="internal-data">8.9%</td>
                       <td class="internal-data">8.9%</td>
                       <td class="internal-data">8.9%</td> --> 
              </tr>

              <tr>
                 <!-- <td class="internal-data" style="text-align: left;background-color: #eaeaea;">Fragrance
                 </td> -->
                 <td class="internal-data">14</td>
                 <td class="internal-data">10</td>
                 <td class="internal-data">-4</td>
                 <td class="internal-data">DECORTE</td>
                 <td class="internal-data">771.8</td>
                 <td class="internal-data">2.0%</td>
                 <td class="internal-data">501.3</td>
                 <td class="internal-data">1.2%</td>
                 <td class="internal-data">46.5%</td>
                       <!-- <td class="internal-data">8.9%</td> -->
                       <!-- <td class="internal-data">8.9%</td>
                       <td class="internal-data">8.9%</td>
                       <td class="internal-data">8.9%</td>
                       <td class="internal-data">8.9%</td> --> 
              </tr>

              <tr>
                 <!-- <td class="internal-data" style="text-align: left;background-color: #eaeaea;">Fragrance
                 </td> -->
                 <td class="internal-data">15</td>
                 <td class="internal-data">17</td>
                 <td class="internal-data">2</td>
                 <td class="internal-data">CLINIQUE</td>
                 <td class="internal-data">765.4</td>
                 <td class="internal-data">1.9%</td>
                 <td class="internal-data">501.7</td>
                 <td class="internal-data">1.2%</td>
                 <td class="internal-data">44.5%</td>
                       <!-- <td class="internal-data">8.9%</td> -->
                       <!-- <td class="internal-data">8.9%</td>
                       <td class="internal-data">8.9%</td>
                       <td class="internal-data">8.9%</td>
                       <td class="internal-data">8.9%</td> --> 
              </tr>

              <tr>
                 <!-- <td class="internal-data" style="text-align: left;background-color: #eaeaea;">Fragrance
                 </td> -->
                 <td class="internal-data">21</td>
                 <td class="internal-data">15</td>
                 <td class="internal-data">-1</td>
                 <td class="internal-data">LA PRAIRIE</td>
                 <td class="internal-data">761.2</td>
                 <td class="internal-data">1.8%</td>
                 <td class="internal-data">488.3</td>
                 <td class="internal-data">1.1%</td>
                 <td class="internal-data">44.3%</td>
                       <!-- <td class="internal-data">8.9%</td> -->
                       <!-- <td class="internal-data">8.9%</td>
                       <td class="internal-data">8.9%</td>
                       <td class="internal-data">8.9%</td>
                       <td class="internal-data">8.9%</td> --> 
              </tr>

              <tr>
                 <!-- <td class="internal-data" style="text-align: left;background-color: #eaeaea;">Fragrance
                 </td> -->
                 <td class="internal-data">17</td>
                 <td class="internal-data">18</td>
                 <td class="internal-data">1</td>
                 <td class="internal-data">TOM FORD</td>
                 <td class="internal-data">758.9</td>
                 <td class="internal-data">1.6%</td>
                 <td class="internal-data">472.9</td>
                 <td class="internal-data">1%</td>
                 <td class="internal-data">43.9%</td>
                       <!-- <td class="internal-data">8.9%</td> -->
                       <!-- <td class="internal-data">8.9%</td>
                       <td class="internal-data">8.9%</td>
                       <td class="internal-data">8.9%</td>
                       <td class="internal-data">8.9%</td> --> 
              </tr>

              <tr>
                 <!-- <td class="internal-data" style="text-align: left;background-color: #eaeaea;">Fragrance
                 </td> -->
                 <td class="internal-data">18</td>
                 <td class="internal-data">19</td>
                 <td class="internal-data">1</td>
                 <td class="internal-data">GUERLAIN</td>
                 <td class="internal-data">601.5</td>
                 <td class="internal-data">1.5%</td>
                 <td class="internal-data">359.2</td>
                 <td class="internal-data">0.9%</td>
                 <td class="internal-data">43.8%</td>
                       <!-- <td class="internal-data">8.9%</td> -->
                       <!-- <td class="internal-data">8.9%</td>
                       <td class="internal-data">8.9%</td>
                       <td class="internal-data">8.9%</td>
                       <td class="internal-data">8.9%</td> --> 
              </tr>

              <tr>
                 <!-- <td class="internal-data" style="text-align: left;background-color: #eaeaea;">Fragrance
                 </td> -->
                 <td class="internal-data">19</td>
                 <td class="internal-data">23</td>
                 <td class="internal-data">4</td>
                 <td class="internal-data">JO MALONE</td>
                 <td class="internal-data">430.4</td>
                 <td class="internal-data">1.3%</td>
                 <td class="internal-data">299.7</td>
                 <td class="internal-data">0.9%</td>
                 <td class="internal-data">43.6%</td>
                       <!-- <td class="internal-data">8.9%</td> -->
                       <!-- <td class="internal-data">8.9%</td>
                       <td class="internal-data">8.9%</td>
                       <td class="internal-data">8.9%</td>
                       <td class="internal-data">8.9%</td> --> 
              </tr>

              <tr>
                 <!-- <td class="internal-data" style="text-align: left;background-color: #eaeaea;">Fragrance
                 </td> -->
                 <td class="internal-data">20</td>
                 <td class="internal-data">11</td>
                 <td class="internal-data">-9</td>
                 <td class="internal-data">SUI WHASOO</td>
                 <td class="internal-data">422.1</td>
                 <td class="internal-data">1.2%</td>
                 <td class="internal-data">769.72</td>
                 <td class="internal-data">2.4%</td>
                 <td class="internal-data">-45.2%</td>
                       <!-- <td class="internal-data">8.9%</td> -->
                       <!-- <td class="internal-data">8.9%</td>
                       <td class="internal-data">8.9%</td>
                       <td class="internal-data">8.9%</td>
                       <td class="internal-data">8.9%</td> --> 
              </tr>
              
           </table>
          </div>
        </div>
      <?= $this->endSection() ?>   

      <?= $this->section('extra_foot'); ?>   
 
      <script src="<?php echo base_url(); ?>/highcharts/highcharts.js"></script>
      <script type="text/javascript">

        Highcharts.chart('brandchart_div', {
    chart: {
        zoomType: 'xy'
    },
    title: {
        text: 'Global Top 10 P&C Brands',
        align: 'center'
    },
    
    xAxis: [{
        categories: ["Estee Lauder", "CRÈME DE LA MER", "SK-II", "LANCÔME", "KIEHL'S", "GIORGIO ARMANI",
            "YSL", "DIOR", "CLÉ DE PEAU BEAUTE", "CHANEL"],
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

            text: null,
            style: {
                color: Highcharts.getOptions().colors[1]
            }
        }
    }, { // Secondary yAxis
        title: {
            text: null,
            style: {
                color: Highcharts.getOptions().colors[0]
            }
        },
        labels: {
            format: '{value}% ',
            style: {
                color: Highcharts.getOptions().colors[0]
            }
        },
        opposite: true
    }],
    tooltip: {
        shared: true
    },
    legend: {
        align: 'left',
        x: 80,
        verticalAlign: 'top',
        y: 60,
        floating: true,
        backgroundColor:
            Highcharts.defaultOptions.legend.backgroundColor || // theme
            'rgba(255,255,255,0.25)'
    },
    series: [
    {
        showInLegend: false,
        name: 'Precipitation',
        type: 'column',
        
        data: [4608.2, 2606.0, 2209.4, 2129.6, 989.4, 945.7, 904.7, 900.8,874.2,
            874.1],
        tooltip: {
            valueSuffix: ' '
        }
    },
{
        showInLegend: false,
        name: 'Temperature',
        type: 'spline',
        yAxis: 1,
        data: [9.9, 20.5, -7.6, -0.6, -8.5, 0.8, 10.6, 10.8, 14.5,
            10.9],
        tooltip: {
            valueSuffix: ''
        }

    
        
    }]
});
        
      </script>
      <?= $this->endSection() ?>
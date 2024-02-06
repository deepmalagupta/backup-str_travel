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
                Group
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
                Category
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
      </div>
      <div class="dropdown px-3">
        <button class="bg-white border-danger btn btn-secondary dropdown-toggle p-1 rounded" type="button" data-toggle="dropdown" aria-expanded="false" style="color: black;">
          Group
          <img src="<?=IMG?>select-icon.png">
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
          <img src="<?=IMG?>select-icon.png">
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
          <img src="<?=IMG?>select-icon.png">
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
    
    <!-- <div class="col-md-12 text-center mt-2">
      <div class="d-flex justify-content-end">
        <div class="custom-control custom-switch mx-5">
          <input type="checkbox" class="custom-control-input" id="customSwitch1">
          <label class="custom-control-label" for="customSwitch1"></label>
        </div>
      </div>
    </div> -->

    <div class="col-md-8">
    
      <table class="table table-bordered table-hover text-dark table-hover text-center" style="font-size: 12px;">

        <tr>
           <th class="internal-data" rowspan="2" colspan="2" style="color: white; vertical-align: middle;"></th>
           
           <th class="internal-data bg-danger text-center" colspan="5" style="color: white;">
              SHISEIDO GROUP
           </th>
        </tr>

        
        <tr>
           <td class="internal-data bg-danger text-center" colspan="2" style="color: white;">2022</td>
           <td class="internal-data bg-danger text-center" colspan="2" style="color: white;">2021
           </td>
           
           <td class="internal-data bg-danger text-center" rowspan="2" style="color: white;vertical-align: middle;">Growth vs LY %</td>
          
        </tr>

        <tr>
          <th class="internal-data bg-danger" style="color: white; vertical-align: middle;">
              Rank 2022</th>
            <th class="internal-data bg-danger text-center"  style="color: white;vertical-align: middle;">
              Brand
           </th>
           <td class="internal-data bg-danger text-center" style="color: white;">Sales (Mn USD)</td>
           <td class="internal-data bg-danger text-center" style="color: white;">Brand Split
           </td>
           <td class="internal-data bg-danger text-center" style="color: white;">Sales (Mn USD)</td>
           <td class="internal-data bg-danger text-center" style="color: white;">Brand Split
           </td>
          
        </tr>

        <tr>
          <td class="internal-data" style="text-align: left;background-color: #eaeaea;">
          </td>
          <td class="internal-data" style="text-align: left;background-color: #eaeaea;font-weight: bold;">Total</td>
          <td class="internal-data" style="background-color: #eaeaea;font-weight: bold;">2,541.9</td>
          <td class="internal-data" style="background-color: #eaeaea;font-weight: bold;">100.0%</td>
          <td class="internal-data" style="background-color: #eaeaea;font-weight: bold;">2,451.7</td>
          <td class="internal-data" style="background-color: #eaeaea;font-weight: bold;">100.0%</td>
          <td class="internal-data" style="background-color: #eaeaea;font-weight: bold;">3.7%</td>
        </tr>
        <tr>
          <td class="internal-data">1
          </td>
          <td class="internal-data"  style="text-align: left;">CLE DE PEAU BEAUTE</td>
          <td class="internal-data">874.2</td>
          <td class="internal-data">34.4%</td>
          <td class="internal-data">788.6</td>
          <td class="internal-data">32.2%</td>
          <td class="internal-data">10.9%</td>
        </tr>
        <tr>
          <td class="internal-data">2
          </td>
          <td class="internal-data" style="text-align: left;">SHISEIDO</td>
          <td class="internal-data">741.2</td>
          <td class="internal-data">29.2%</td>
          <td class="internal-data">762.3</td>
          <td class="internal-data">31.1%</td>
          <td class="internal-data">-2.8%</td>
        </tr>
        <tr>
          <td class="internal-data">3
          </td>
          <td class="internal-data" style="text-align: left;">NARS</td>
          <td class="internal-data">233.4</td>
          <td class="internal-data">9.2%</td>
          <td class="internal-data">220.9</td>
          <td class="internal-data">9.0%</td>
          <td class="internal-data">5.7%</td>
        </tr>
        <tr>
          <td class="internal-data">4
          </td>
          <td class="internal-data" style="text-align: left;">ANESSA</td>
          <td class="internal-data">201.4</td>
          <td class="internal-data">7.9%</td>
          <td class="internal-data">220.5</td>
          <td class="internal-data">9.0%</td>
          <td class="internal-data">-8.6%</td>
        </tr>
        <tr>
          <td class="internal-data">5
          </td>
          <td class="internal-data" style="text-align: left;">DOLCE & GABBANA</td>
          <td class="internal-data">162.5</td>
          <td class="internal-data">6.4%</td>
          <td class="internal-data">173.6</td>
          <td class="internal-data">7.1%</td>
          <td class="internal-data">-6.4%</td>
        </tr>
        <tr>
          <td class="internal-data">6
          </td>
          <td class="internal-data" style="text-align: left;">IPSA</td>
          <td class="internal-data">134.2</td>
          <td class="internal-data">5.3%</td>
          <td class="internal-data">108.9</td>
          <td class="internal-data">4.4%</td>
          <td class="internal-data">23.2%</td>
        </tr>
        <tr>
          <td class="internal-data">7
          </td>
          <td class="internal-data" style="text-align: left;">ELIXIR</td>
          <td class="internal-data">55.6</td>
          <td class="internal-data">2.2%</td>
          <td class="internal-data">54.7</td>
          <td class="internal-data">2.2%</td>
          <td class="internal-data">1.7%</td>
        </tr>
        <tr>
          <td class="internal-data">8
          </td>
          <td class="internal-data" style="text-align: left;">NARCISO RODRIGUEZ</td>
          <td class="internal-data">51.4</td>
          <td class="internal-data">2.0%</td>
          <td class="internal-data">45.9</td>
          <td class="internal-data">1.9%</td>
          <td class="internal-data">12.0%</td>
        </tr>
        <tr>
          <td class="internal-data">9
          </td>
          <td class="internal-data" style="text-align: left;">ISSEY MIYAKE</td>
          <td class="internal-data">49.5</td>
          <td class="internal-data">1.9%</td>
          <td class="internal-data">46.2</td>
          <td class="internal-data">1.9%</td>
          <td class="internal-data">7.2%</td>
        </tr>
        <tr>
          <td class="internal-data">10
          </td>
          <td class="internal-data" style="text-align: left;">SHISEIDO OTHERS</td>
          <td class="internal-data">12.2</td>
          <td class="internal-data">0.5%</td>
          <td class="internal-data">16.2</td>
          <td class="internal-data">0.7%</td>
          <td class="internal-data">-25.0%</td>
        </tr>
        <tr>
          <td class="internal-data">11
          </td>
          <td class="internal-data" style="text-align: left;">DRUNK ELEPHANT</td>
          <td class="internal-data">8.9</td>
          <td class="internal-data">0.3%</td>
          <td class="internal-data">3.3</td>
          <td class="internal-data">0.1%</td>
          <td class="internal-data">172.4%</td>
        </tr>
        <tr>
          <td class="internal-data">12
          </td>
          <td class="internal-data" style="text-align: left;">SERGE LUTENS</td>
          <td class="internal-data">7.3</td>
          <td class="internal-data">0.3%</td>
          <td class="internal-data">0.4</td>
          <td class="internal-data">0.0%</td>
          <td class="internal-data">1788.3%</td>
        </tr>
        <tr>
          <td class="internal-data">13
          </td>
          <td class="internal-data" style="text-align: left;">LAURA MERCIER</td>
          <td class="internal-data">5.3</td>
          <td class="internal-data">0.2%</td>
          <td class="internal-data">6.9</td>
          <td class="internal-data">0.3%</td>
          <td class="internal-data">-23.1%</td>
        </tr>
        
     </table>
    </div>

    <div class="col-md-4" id="container"></div>

  </div>

<?= $this->endSection() ?>

<?= $this->section('extra_foot'); ?>   

  <script src="<?php echo base_url(); ?>/highcharts/highcharts.js"></script>

  <script type="text/javascript">

    var dataset = [{split: 34.4, y:874.2},{split: 29.2, y:741.2},{split: 9.2, y:233.4},{split: 7.9, y:201.4},{split: 6.4, y:162.5},{split: 5.3, y:134.2},{split: 2.2, y:55.6},{split: 2.0, y:51.4},{split: 1.9, y:49.5},{split: 0.5, y:12.2}];

    // Data retrieved from: https://www.uefa.com/uefachampionsleague/history/
    Highcharts.chart('container', {
        chart: {
            type: 'bar'
        },
        title: {
            text: 'Top 10 Brands'
        },
        xAxis: {
            categories: ['CLE DE PEAU BEAUTE', 'SHISEIDO', 'NARS', 'ANESSA', 'DOLCE & GABBANA', 'IPSA', 'ELIXIR', 'NARCISO RODRIGUEZ', 'ISSEY MIYAKE', 'SHISEIDO OTHERS']
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


  </script>

<?= $this->endSection() ?>
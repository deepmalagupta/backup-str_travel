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
          Market
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


    <div id="piechart_div" class="col-md-4"></div>
    <div id="barchart_div" class="col-md-8"></div>

    <!-- <div class="col-md-4 d-flex h-100 justify-content-end mt-5"><img src="<?=IMG?>pie_chart.png" class="w-50"></div> -->

    <!-- <div class="col-md-8"><img src="<?=IMG?>basic-bar-graph.png" class="w-75"></div> -->

    <div class="col-md-12">
      <h5><u>Top 20 Brands and Shiseido Brands</u></h5>
      <table class="table table-bordered table-hover text-dark table-hover text-center" style="font-size: 12px;">
        <tr>
          <th class="internal-data" rowspan="2" style="color: white; vertical-align: middle;"></th>
          <th class="internal-data bg-danger" colspan="6">Retail Sales (Mn USD)</th>
          <th class="internal-data bg-danger" style="vertical-align: middle;" rowspan="2" colspan="2">% TREX</th>

          <th class="internal-data bg-danger text-center" rowspan="2" colspan="3" style="color: white;vertical-align: middle;">
              % Growth vs LY
           </th>

        </tr>

        <tr>
           
           <th class="internal-data bg-danger text-center" colspan="3" style="color: white;">
              2022 Q3
           </th>
           
           <th class="internal-data bg-danger text-center" colspan="3" style="color: white;">
              2021 Q3
           </th>
           
        </tr>

        
        <tr>
          <th class="internal-data bg-danger" style="color: white; vertical-align: middle;">
              Brands</th>
           <td class="internal-data bg-danger text-center" style="color: white;">Non-TREX</td>
           <td class="internal-data bg-danger text-center" style="color: white;">TREX
           </td>
           <td class="internal-data bg-danger text-center" style="color: white;">Total
           </td>

           <td class="internal-data bg-danger text-center" style="color: white;">Non-TREX</td>
           <td class="internal-data bg-danger text-center" style="color: white;">TREX
           </td>
           <td class="internal-data bg-danger text-center" style="color: white;">Total
           </td>
          
           <td class="internal-data bg-danger text-center" style="color: white;">2022</td>
           <td class="internal-data bg-danger text-center" style="color: white;">2021</td>
           

           <td class="internal-data bg-danger text-center" style="color: white;">Non-TREX</td>
           <td class="internal-data bg-danger text-center" style="color: white;">TREX
           </td>
           <td class="internal-data bg-danger text-center" style="color: white;">Total
           </td>
           
        </tr>
        <tr>
          <td class="internal-data" style="text-align: left;background-color: #eaeaea;font-weight: bold;">Americas - Fragrance
          </td>
          <td class="internal-data" style="background-color: #eaeaea;font-weight: bold;">23393</td>
          <td class="internal-data" style="background-color: #eaeaea;font-weight: bold;">10515</td>
          <td class="internal-data" style="background-color: #eaeaea;font-weight: bold;">33909</td>
          <td class="internal-data" style="background-color: #eaeaea;font-weight: bold;">XX</td>
          <td class="internal-data" style="background-color: #eaeaea;font-weight: bold;">XX</td>
          <td class="internal-data" style="background-color: #eaeaea;font-weight: bold;">XX</td>
          <td class="internal-data" style="background-color: #eaeaea;font-weight: bold;">31%</td>
          <td class="internal-data" style="background-color: #eaeaea;font-weight: bold;">35%</td>
          <td class="internal-data" style="background-color: #eaeaea;font-weight: bold;">5.8%</td>
          <td class="internal-data" style="background-color: #eaeaea;font-weight: bold;">3.2%</td>
          <td class="internal-data" style="background-color: #eaeaea;font-weight: bold;">5.0%</td>
        </tr>
        
        <tr>
          <td class="internal-data" style="text-align: left;">ESTEE LAUDER
          </td>
          <td class="internal-data">911.8</td>
          <td class="internal-data">3,696.4</td>
          <td class="internal-data">4,608.2</td>
          <td class="internal-data">992.6</td>
          <td class="internal-data">3,201.3</td>
          <td class="internal-data">4,193.9</td>
          <td class="internal-data">80.2%</td>
          <td class="internal-data">76.3%</td>
          <td class="internal-data">-8.1%</td>
          <td class="internal-data">15.5%</td>
          <td class="internal-data">9.9%</td>
        </tr>

        <tr>
          <td class="internal-data" style="text-align: left;">CREME DE LA MER
          </td>
          <td class="internal-data">2,372.3</td>
          <td class="internal-data">233.8</td>
          <td class="internal-data">2,606.0</td>
          <td class="internal-data">1,875.4</td>
          <td class="internal-data">287.2</td>
          <td class="internal-data">2,162.6</td>
          <td class="internal-data">9.0%</td>
          <td class="internal-data">13.3%</td>
          <td class="internal-data">26.5%</td>
          <td class="internal-data">-18.6%</td>
          <td class="internal-data">20.5%</td>
        </tr>

        <tr>
          <td class="internal-data" style="text-align: left;">SK-II 
          </td>
          <td class="internal-data">417.7</td>
          <td class="internal-data">1,791.7</td>
          <td class="internal-data">2,209.4</td>
          <td class="internal-data">497.4</td>
          <td class="internal-data">1,893.6</td>
          <td class="internal-data">2,390.9</td>
          <td class="internal-data">81.1%</td>
          <td class="internal-data">79.2%</td>
          <td class="internal-data">-16.0%</td>
          <td class="internal-data">-5.4%</td>
          <td class="internal-data">-7.6%</td>
        </tr>

        <tr>
          <td class="internal-data" style="text-align: left;">LANCOME 
          </td>
          <td class="internal-data">1,020.4</td>
          <td class="internal-data">1,109.2</td>
          <td class="internal-data">2,129.6</td>
          <td class="internal-data">820.9</td>
          <td class="internal-data">1,321.6</td>
          <td class="internal-data">2,142.5</td>
          <td class="internal-data">52.1%</td>
          <td class="internal-data">61.7%</td>
          <td class="internal-data">24.3%</td>
          <td class="internal-data">-16.1%</td>
          <td class="internal-data">-0.6%</td>
        </tr>

        <tr>
          <td class="internal-data" style="text-align: left;">KIEHL'S 
          </td>
          <td class="internal-data">862.2</td>
          <td class="internal-data">127.2</td>
          <td class="internal-data">989.4</td>
          <td class="internal-data">944.8</td>
          <td class="internal-data">136.5</td>
          <td class="internal-data">1,081.3</td>
          <td class="internal-data">12.9%</td>
          <td class="internal-data">12.6%</td>
          <td class="internal-data">-8.7%</td>
          <td class="internal-data">-6.8%</td>
          <td class="internal-data">-8.5%</td>
        </tr>

        <tr>
          <td class="internal-data" style="text-align: left;">GIORGIO ARMANI
          </td>
          <td class="internal-data">856.6</td>
          <td class="internal-data">89.1</td>
          <td class="internal-data">945.7</td>
          <td class="internal-data">881.8</td>
          <td class="internal-data">56.7</td>
          <td class="internal-data">938.5</td>
          <td class="internal-data">9.4%</td>
          <td class="internal-data">6.0%</td>
          <td class="internal-data">-2.9%</td>
          <td class="internal-data">57.2%</td>
          <td class="internal-data">0.8%</td>
        </tr>

        <tr>
          <td class="internal-data" style="text-align: left;">YSL
          </td>
          <td class="internal-data">880.1</td>
          <td class="internal-data">24.7</td>
          <td class="internal-data">904.7</td>
          <td class="internal-data">793.5</td>
          <td class="internal-data">24.1</td>
          <td class="internal-data">817.7</td>
          <td class="internal-data">2.7%</td>
          <td class="internal-data">3.0%</td>
          <td class="internal-data">10.9%</td>
          <td class="internal-data">2.2%</td>
          <td class="internal-data">10.6%</td>
        </tr>

        <tr>
          <td class="internal-data" style="text-align: left;">DIOR
          </td>
          <td class="internal-data">818.4</td>
          <td class="internal-data">82.4</td>
          <td class="internal-data">900.8</td>
          <td class="internal-data">690.7</td>
          <td class="internal-data">96.1</td>
          <td class="internal-data">786.8</td>
          <td class="internal-data">9.1%</td>
          <td class="internal-data">12.2%</td>
          <td class="internal-data">18.5%</td>
          <td class="internal-data">-14.3%</td>
          <td class="internal-data">14.5%</td>
        </tr>

        <tr>
          <td class="internal-data" style="text-align: left;">CLE DE PEAU BEAUTE
          </td>
          <td class="internal-data">631.8</td>
          <td class="internal-data">242.4</td>
          <td class="internal-data">874.2</td>
          <td class="internal-data">576.1</td>
          <td class="internal-data">212.5</td>
          <td class="internal-data">788.6</td>
          <td class="internal-data">27.7%</td>
          <td class="internal-data">26.9%</td>
          <td class="internal-data">9.7%</td>
          <td class="internal-data">14.1%</td>
          <td class="internal-data">10.9%</td>
        </tr>

        <tr>
          <td class="internal-data" style="text-align: left;">CHANEL
          </td>
          <td class="internal-data">874.1</td>
          <td class="internal-data">0.0</td>
          <td class="internal-data">874.1</td>
          <td class="internal-data">556.1</td>
          <td class="internal-data">0.0</td>
          <td class="internal-data">556.1</td>
          <td class="internal-data">0.0%</td>
          <td class="internal-data">0.0%</td>
          <td class="internal-data">57.2%</td>
          <td class="internal-data">0.0%</td>
          <td class="internal-data">57.2%</td>
        </tr>

        <tr>
          <td class="internal-data" style="text-align: left;">SHISEIDO
          </td>
          <td class="internal-data">405.4</td>
          <td class="internal-data">335.8</td>
          <td class="internal-data">741.2</td>
          <td class="internal-data">409.1</td>
          <td class="internal-data">353.2</td>
          <td class="internal-data">762.3</td>
          <td class="internal-data">45.3%</td>
          <td class="internal-data">46.3%</td>
          <td class="internal-data">-0.9%</td>
          <td class="internal-data">-4.9%</td>
          <td class="internal-data">-2.8%</td>
        </tr>
        
     </table>
    </div>

  </div>
<?= $this->endSection() ?>   

<?= $this->section('extra_foot'); ?>   

  <script src="<?php echo base_url(); ?>/highcharts/highcharts.js"></script>

  <script type="text/javascript">
    
    // Build the chart
    Highcharts.chart('piechart_div', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie',
            spacingTop:50,
        },
        title: {
            text: '',
            align: 'left'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage}%</b>'
        },
        accessibility: {
            point: {
                valueSuffix: '%'
            }
        },
        plotOptions: {
            pie: {
              size:'62%',
                allowPointSelect: true,
                cursor: 'pointer',
                colors: ['rgb(236, 141, 105)','rgb(233, 236, 239)'],
                borderRadius: 5,
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b><br>{point.percentage} %',
                    distance: -50,
                    filter: {
                        property: 'percentage',
                        operator: '>',
                        value: 4
                    }
                }
            }
        },
        series: [{
            name: 'Share',
            data: [
                { name: 'TREX', y: 6 },
                { name: 'Non-TREX', y: 94 }
            ]
        }]
    });

  </script>

  <script type="text/javascript">
    
    // Highcharts.setOptions({
    //  colors: ['rgb(233, 236, 239)','rgb(236, 141, 105)']
    // });

    Highcharts.chart('barchart_div', {
        chart: {
            type: 'column',
        },
        title: {
            text: 'Top 10 Brands –TREX % Split',
            align: 'center',
            style: {
                textDecoration: 'underline'
            }
        },
        xAxis: {
            categories: ['CAROLINA HERRERA', 'CHANEL', 'DIOR', 'PACO RABANNE', 'GIORGIO ARMANI', 'DOLCE & GABBANA', 'LANCOME', 'YSL', 'CALVIN KLEIN', 'RALPH LAUREN', 'NARCISO RODRIGUEZ','ISSEY MIYAKE'],
            labels: {

                step: 1,
                formatter: function () {
                    return this.value.replace(/ /g, '<br />');
                },
                autoRotation: [0, 180]
            },
            
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
            align: 'left',
            x: 70,
            verticalAlign: 'top',
            y: 70,
            floating: true,
            backgroundColor:
                Highcharts.defaultOptions.legend.backgroundColor || 'white',
            borderColor: '#CCC',
            borderWidth: 1,
            shadow: false
        },
        tooltip: {
            headerFormat: '<b>{point.x}</b><br/>',
            pointFormat: '{series.name}: {point.y}%<br/>'
        },
        plotOptions: {
            column: {
                stacking: 'normal',
                dataLabels: {
                    enabled: true,
                    formatter: function() {return this.y +'%'}
                },

            },
        },
        colors: ['rgb(233, 236, 239)','rgb(236, 141, 105)'],
        series: [
        {
            showInLegend: false, 
            name: 'Non-TREX',
            data: [95, 100, 97, 95, 90, 84, 81, 95, 97, 89, 100, 83]
        },{
            showInLegend: false, 
            name: 'TREX',
            data: [5, 0, 3, 5, 10, 16, 19, 5, 3, 11, 0, 17]
        }]
    });


  </script>

<?= $this->endSection() ?>   
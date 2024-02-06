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
        
        <div class="bg-white fadeInUp m-0 mt-2 p-3 row wow rounded shadow">
          
          <!-- <div class="col-md-12 text-center mt-2">
          <div class="d-flex justify-content-end">
          <div class="custom-control custom-switch mx-5">
            <input type="checkbox" class="custom-control-input" id="customSwitch1">
            <label class="custom-control-label" for="customSwitch1"></label>
          </div>
        </div>
          </div>  -->
          <div class="col-md-12" id="brandchart_div">
            
          </div>       
          <div class="col-md-12">          
            <table class="table table-bordered text-dark text-center" style="font-size: 12px;">

              <tr>
                <th colspan="3" class="border-light"></th>
                
                 <th class="internal-data bg-danger"  style="color: white; vertical-align: middle;">
                    Global P&C</th>
                 <th class="internal-data bg-danger text-center" colspan="2" style="color: white;">
                    2022
                 </th>
                 <th class="internal-data bg-danger text-center" style="color: white;">
                    
                 </th>

                 
                 <th class="internal-data bg-danger text-center" colspan="2" style="color: white;">
                    2021
                 </th>

                 
              </tr>

              
              <tr>
                 <td class="internal-data bg-danger text-center" style="color: white;">2022 Rank</td>
                 <td class="internal-data bg-danger text-center" style="color: white;">2021 Rank
                 </td>
                 <td class="internal-data bg-danger text-center" style="color: white;">Change in Rank</td>
                 
                 <!-- <td class="internal-data" style="background-color: #e98c85;color: white;">2022 Price (in $)
                       </td>
                       <td class="internal-data" style="background-color: #e98c85;color: white;">2021-2022 Price
                          growth
                       </td> -->
                 <td class="internal-data bg-danger text-center" style="color: white;">Company</td>
                 <td class="internal-data bg-danger text-center" style="color: white;">Sales (Mn USD)</td>
                 <td class="internal-data bg-danger text-center" style="color: white;">Market share
                 </td>
                 
                 <!-- <td class="internal-data" style="background-color: #e98c85;color: white;">2022 Price (in $)
                       </td>
                       <td class="internal-data" style="background-color: #e98c85;color: white;">2021-2022 Price
                          growth
                       </td> -->
                 <td class="internal-data bg-danger" style="color: white;">% Growth vs LY</td>
                 <td class="internal-data bg-danger text-center" style="color: white;">Sales (Mn USD)</td>
                 <td class="internal-data bg-danger text-center" style="color: white;">Market share</td>
                 <!-- <td class="internal-data bg-danger text-center" style="color: white;">MOB
                 </td> -->
                 <!-- <td class="internal-data bg-danger text-center" style="color: white;">% vs LY</td> -->
                 <!-- <td class="internal-data bg-danger text-center" style="color: white;">Sales (Mn USD)</td> -->
                 <!-- <td class="internal-data bg-danger text-center" style="color: white;">MOB
                 </td -->
                 <!-- <td class="internal-data" style="background-color: #e36d63;color: white;">2022 OI/UC</td>
                       <td class="internal-data" style="background-color: #e36d63;color: white;">2021-2022 OI/UC
                          growth
                       </td> -->
                 
              </tr>
              <tr>
                  <th style="background: #e7e6e6;">Total</th>
                  <th style="background: #e7e6e6;">Total</th>
                  <th style="background: #e7e6e6;">-</th>
                  <th style="background: #e7e6e6;">Total</th>
                  <th style="background: #e7e6e6;">33,909.0</th>
                  <th style="background: #e7e6e6;">100.0%</th>
                  <th style="background: #e7e6e6;"></th>
                  <th style="background: #e7e6e6;">32,298.5</th>
                  <th style="background: #e7e6e6;">100.0%</th>
              </tr>

              <tr>
                 <!-- <td class="internal-data" style="text-align: left;background-color: #eaeaea;">Japan
                 </td> -->
                 <td class="internal-data">1</td>
                 <td class="internal-data">1</td>
                 <td></td>
                 <td class="internal-data">ESTEE LAUDER COMPANIES</td>
                 <td class="internal-data">9,838.6</td>
                 <td class="internal-data">29.0%</td>
                 <td class="internal-data">20% </td>
                 <td class="internal-data">8,785.7</td>
                 <td class="internal-data">27.2%</td>
                       <!-- <td class="internal-data">8.9%</td>
                       <td class="internal-data">8.9%</td>
                       <td class="internal-data">8.9%</td>
                       <td class="internal-data">8.9%</td> --> 
                 
              </tr>
              <tr>
                 <!-- <td class="internal-data" style="text-align: left;background-color: #eaeaea;">Skin Care
                 </td> -->
                 <td class="internal-data">2</td>
                 <td class="internal-data">2</td>
                 <td class="internal-data"></td>
                       <td class="internal-data">L'OREAL GROUP</td>
                 <td class="internal-data">7,002.1</td>
                 <td class="internal-data">20.6%</td>
                 <td class="internal-data">10%</td>
                 <td class="internal-data">6,569.1 </td> 
                 <td class="internal-data">20.3%</td>
                 <!-- <td class="internal-data">8.9%</td> -->
                       <!-- <td class="internal-data">8.9%</td> -->
                       <!-- <td class="internal-data">8.9%</td>
                       <td class="internal-data">8.9%</td>
                       <td class="internal-data">8.9%</td> --> 
                 
              </tr>
              <tr>
                 <!-- <td class="internal-data" style="text-align: left;background-color: #eaeaea;">Make-up
                 </td> -->
                 <td class="internal-data">3</td>
                 <td class="internal-data">3</td>
                 <td class="internal-data"></td>
                 <td class="internal-data">SHISEIDO GROUP</td>
                 <td class="internal-data">2,541.9</td>
                 <td class="internal-data">7.5%</td>
                 <td class="internal-data">4%</td>
                 <td class="internal-data">2,451.7 </td>
                 <td class="internal-data">7.6%</td>
                 <!-- <td class="internal-data">8.9%</td> -->
                       <!-- <td class="internal-data">8.9%</td> -->
                       <!-- <td class="internal-data">8.9%</td>
                       <td class="internal-data">8.9%</td>
                       <td class="internal-data">8.9%</td>  -->
              </tr>
              <tr>
                 <!-- <td class="internal-data" style="text-align: left;background-color: #eaeaea;">Fragrance
                 </td> -->
                 <td class="internal-data">4</td>
                 <td class="internal-data">5</td>
                 <td class="internal-data">1</td>
                 <td class="internal-data">LVMH</td>
                 <td class="internal-data">2,349.8</td>
                 <td class="internal-data">6.9%</td>
                 <td class="internal-data">6%</td>
                 <td class="internal-data">2,353.7</td>
                 <td class="internal-data">7.3%</td>
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
                 <td class="internal-data">4</td>
                 <td class="internal-data">-1</td>
                 <td class="internal-data">SK-II</td>
                 <td class="internal-data">2,209.4</td>
                 <td class="internal-data">6.5%</td>
                 <td class="internal-data">6%</td>
                 <td class="internal-data">2,390.9</td>
                 <td class="internal-data">7.4%</td>
                  
              </tr>

              <tr>
                 <!-- <td class="internal-data" style="text-align: left;background-color: #eaeaea;">Fragrance
                 </td> -->
                 <td class="internal-data">6</td>
                 <td class="internal-data">8</td>
                 <td class="internal-data">2</td>
                 <td class="internal-data">COTY</td>
                 <td class="internal-data">1,268.8</td>
                 <td class="internal-data">3.7%</td>
                 <td class="internal-data">8%</td>
                 <td class="internal-data">768.9</td>
                 <td class="internal-data">2.4%</td>
                  
              </tr>

              <tr>
                 <!-- <td class="internal-data" style="text-align: left;background-color: #eaeaea;">Fragrance
                 </td> -->
                 <td class="internal-data">7</td>
                 <td class="internal-data">11</td>
                 <td class="internal-data">4</td>
                 <td class="internal-data">CHANEL GROUP</td>
                 <td class="internal-data">874.1</td>
                 <td class="internal-data">2.6%</td>
                 <td class="internal-data">21%</td>
                 <td class="internal-data">556.1</td>
                 <td class="internal-data">1.7%</td>
                  
              </tr>

              <tr>
                 <!-- <td class="internal-data" style="text-align: left;background-color: #eaeaea;">Fragrance
                 </td> -->
                 <td class="internal-data">8</td>
                 <td class="internal-data">12</td>
                 <td class="internal-data">4</td>
                 <td class="internal-data">PUIG</td>
                 <td class="internal-data">856.0</td>
                 <td class="internal-data">2.5%</td>
                 <td class="internal-data">3%</td>
                 <td class="internal-data">532.9</td>
                 <td class="internal-data">1.6%</td>
                  
              </tr>

              <tr>
                 <!-- <td class="internal-data" style="text-align: left;background-color: #eaeaea;">Fragrance
                 </td> -->
                 <td class="internal-data">9</td>
                 <td class="internal-data">7</td>
                 <td class="internal-data">-2</td>
                 <td class="internal-data">KOSE CORPORATION</td>
                 <td class="internal-data">716.8</td>
                 <td class="internal-data">2.1%</td>
                 <td class="internal-data">-10%</td>
                 <td class="internal-data">809.2</td>
                 <td class="internal-data">2.5%</td>
                  
              </tr>

              <tr>
                 <!-- <td class="internal-data" style="text-align: left;background-color: #eaeaea;">Fragrance
                 </td> -->
                 <td class="internal-data">10</td>
                 <td class="internal-data">9</td>
                 <td class="internal-data">-1</td>
                 <td class="internal-data">CLARINS</td>
                 <td class="internal-data">695.6</td>
                 <td class="internal-data">2.1%</td>
                 <td class="internal-data">-4%</td>
                 <td class="internal-data">635.5</td>
                 <td class="internal-data">2.0%</td>
                  
              </tr>

              <tr>
                 <!-- <td class="internal-data" style="text-align: left;background-color: #eaeaea;">Fragrance
                 </td> -->
                 <td class="internal-data">11</td>
                 <td class="internal-data">6</td>
                 <td class="internal-data">-5</td>
                 <td class="internal-data">AMORE PACIFIC</td>
                 <td class="internal-data">678.5</td>
                 <td class="internal-data">2.0%</td>
                 <td class="internal-data">5%</td>
                 <td class="internal-data">1,326.9</td>
                 <td class="internal-data">4.1%</td>
                  
              </tr>

              <tr>
                 <!-- <td class="internal-data" style="text-align: left;background-color: #eaeaea;">Fragrance
                 </td> -->
                 <td class="internal-data">12</td>
                 <td class="internal-data">10</td>
                 <td class="internal-data">-2</td>
                 <td class="internal-data">LA PRAIRIE</td>
                 <td class="internal-data">540.4</td>
                 <td class="internal-data">1.6%</td>
                 <td class="internal-data">2%</td>
                 <td class="internal-data">557.8</td>
                 <td class="internal-data">1.7%</td>
                  
              </tr>

              <tr>
                 <!-- <td class="internal-data" style="text-align: left;background-color: #eaeaea;">Fragrance
                 </td> -->
                 <td class="internal-data">13</td>
                 <td class="internal-data">13</td>
                 <td class="internal-data"></td>
                 <td class="internal-data">JOHNSON & JOHNSON</td>
                 <td class="internal-data">16.1</td>
                 <td class="internal-data">0.0%</td>
                 <td class="internal-data">3%</td>
                 <td class="internal-data">12.9</td>
                 <td class="internal-data">0.0%</td>
                  
              </tr>

              
              
           </table>
          </div>
        </div>

      <?= $this->endSection() ?>   
      
      
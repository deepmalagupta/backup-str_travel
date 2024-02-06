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
                Sub-Category
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
                Detailed- SubCategory
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
          <div class="d-flex justify-content-end">
          <!-- <div class="custom-control custom-switch mx-5">
            <input type="checkbox" class="custom-control-input" id="customSwitch1">
            <label class="custom-control-label" for="customSwitch1"></label>
          </div> -->
        </div>
          </div>
          <div class="mb-3 row">
            <div class="col-md-12">
            <div class=" d-flex justify-content-center mx-5">
              <img src="<?=base_url()?>public/images/basic-bar-graph.png" class="w-75">
            </div>
            </div>
          </div>
          <div class="col-md-12">
          
            <table class="table table-bordered table-hover text-dark table-hover text-center" style="font-size: 12px;">

              <tr>
                <th class="internal-data bg-danger" rowspan="2" style="color: white; vertical-align: middle;">
                    Rank</th>
                 <th class="internal-data bg-danger" rowspan="2" style="color: white; vertical-align: middle;">
                    Brands</th>
                 <th class="internal-data bg-danger text-center" colspan="2" style="color: white;">
                    2023 Q3
                 </th>
                 
                 <th class="internal-data bg-danger text-center" colspan="2" style="color: white;">
                    2022 Q2
                 </th>
                 
                 <th class="internal-data bg-danger" rowspan="2" style="color: white; vertical-align: middle;">
                     % Growth vs LY</th>     
              </tr>

              
              <tr>
                 <td class="internal-data bg-danger text-center" style="color: white;">Sales (Mn USD)</td>
                 <td class="internal-data bg-danger text-center" style="color: white;">Panel Share
                 </td>
                 
                 <td class="internal-data bg-danger text-center" style="color: white;">Sales (Mn USD)
                 </td>
                 <td class="internal-data bg-danger text-center" style="color: white;">Panel Share
                 </td>
                 
              </tr>
              <tr>
                <td class="internal-data text-center font-weight-bold bg-grey" style="text-align: left;" ></td>
                <td class="internal-data text-center font-weight-bold bg-grey" style="text-align: left;" >Total</td>
                <td class="internal-data text-center font-weight-bold bg-grey" style="text-align: left;" >33,909.0</td>
                <td class="internal-data text-center font-weight-bold bg-grey" style="text-align: left;" >100.0%</td>
                <td class="internal-data text-center font-weight-bold bg-grey" style="text-align: left;" >32,298.5</td>
                <td class="internal-data text-center font-weight-bold bg-grey" style="text-align: left;" >100.0%</td>
                <td class="internal-data text-center font-weight-bold bg-grey" style="text-align: left;" >5.0%</td>
              </tr>
              <tr>
                 <td class="internal-data">1</td>
                 <td class="internal-data">BrandX</td>
                 <td class="internal-data">10</td>
                 <td class="internal-data">13.6%</td>
                 <td class="internal-data">4,193.9</td>
                 <td class="internal-data">13.0%</td>
                 <td class="internal-data">9.9%</td>
              </tr>
              <tr>
                 <td class="internal-data">2</td>
                 <td class="internal-data">BrandX</td>
                 <td class="internal-data">9</td>
                 <td class="internal-data">7.7%</td>
                 <td class="internal-data">2,162.6</td>
                 <td class="internal-data">6.7%</td>
                 <td class="internal-data">20.5%</td>
              </tr>
              <tr>
                 <td class="internal-data">3</td>
                 <td class="internal-data">BrandX</td>
                 <td class="internal-data">8</td>
                 <td class="internal-data">6.5%</td>
                 <td class="internal-data">2,390.9</td>
                 <td class="internal-data">7.4%</td>
                 <td class="internal-data">7.6%</td>
              </tr>
              <tr>
                 <td class="internal-data">4</td>
                 <td class="internal-data">BrandX</td>
                 <td class="internal-data">7</td>
                 <td class="internal-data">13.6%</td>
                 <td class="internal-data">4,193.9</td>
                 <td class="internal-data">13.0%</td>
                 <td class="internal-data">9.9%</td>
              </tr>
              <tr>
                 <td class="internal-data">5</td>
                 <td class="internal-data">BrandX</td>
                 <td class="internal-data">6</td>
                 <td class="internal-data">6.3%</td>
                 <td class="internal-data">2,142.5</td>
                 <td class="internal-data">6.6%</td>
                 <td class="internal-data">0.6%</td>
              </tr>
              <tr>
                 <td class="internal-data">6</td>
                 <td class="internal-data">BrandX</td>
                 <td class="internal-data">5</td>
                 <td class="internal-data">2.9%</td>
                 <td class="internal-data">1,081.3</td>
                 <td class="internal-data">3.3%</td>
                 <td class="internal-data">8.5%</td>
              </tr>
              <tr>
                 <td class="internal-data">7</td>
                 <td class="internal-data">BrandX</td>
                 <td class="internal-data">4</td>
                 <td class="internal-data">2.8%</td>
                 <td class="internal-data">938.5</td>
                 <td class="internal-data">2.9%</td>
                 <td class="internal-data">0.8%</td>
              </tr>
              <tr>
                 <td class="internal-data">8</td>
                 <td class="internal-data">BrandX</td>
                 <td class="internal-data">3</td>
                 <td class="internal-data">2.7%</td>
                 <td class="internal-data">817.7</td>
                 <td class="internal-data">2.5%</td>
                 <td class="internal-data">10.6%</td>
              </tr>
              <tr>
                 <td class="internal-data">9</td>
                 <td class="internal-data">CLE DE PEAU BEAUTE</td>
                 <td class="internal-data">2</td>
                 <td class="internal-data">2.6%</td>
                 <td class="internal-data">788.6</td>
                 <td class="internal-data">2.4%</td>
                 <td class="internal-data">10.9%</td>
              </tr>
              <tr>
                 <td class="internal-data">10</td>
                 <td class="internal-data">BrandX</td>
                 <td class="internal-data">1</td>
                 <td class="internal-data">2.6%</td>
                 <td class="internal-data">556.1</td>
                 <td class="internal-data">1.7%</td>
                 <td class="internal-data">57.2%</td>
              </tr>
              <tr>
                 <td class="internal-data">11</td>
                 <td class="internal-data">BrandX</td>
                 <td class="internal-data">0.9</td>
                 <td class="internal-data">2.2%</td>
                 <td class="internal-data">588.8</td>
                 <td class="internal-data">1.8%</td>
                 <td class="internal-data">28.0%</td>
              </tr>
              <tr>
                 <td class="internal-data">12</td>
                 <td class="internal-data">SHISEIDO</td>
                 <td class="internal-data">0.8</td>
                 <td class="internal-data">2.2%</td>
                 <td class="internal-data">762.3</td>
                 <td class="internal-data">2.4%</td>
                 <td class="internal-data">2.8%</td>
              </tr>
              <tr>
                 <td class="internal-data">13</td>
                 <td class="internal-data">BrandX</td>
                 <td class="internal-data">0.6</td>
                 <td class="internal-data">2.1%</td>
                 <td class="internal-data">635.5</td>
                 <td class="internal-data">2.0%</td>
                 <td class="internal-data">9.5%</td>
              </tr>
              <tr>
                 <td class="internal-data">14</td>
                 <td class="internal-data">BrandX</td>
                 <td class="internal-data">0.6</td>
                 <td class="internal-data">2.0%</td>
                 <td class="internal-data">780.8</td>
                 <td class="internal-data">2.4%</td>
                 <td class="internal-data">12.4%</td>
              </tr>
              <tr>
                 <td class="internal-data">15</td>
                 <td class="internal-data">BrandX</td>
                 <td class="internal-data">0.6</td>
                 <td class="internal-data">1.9%</td>
                 <td class="internal-data">503.2</td>
                 <td class="internal-data">1.6%</td>
                 <td class="internal-data">26.9%</td>
              </tr>
              <tr>
                 <td class="internal-data">16</td>
                 <td class="internal-data">BrandX</td>
                 <td class="internal-data">0.6</td>
                 <td class="internal-data">1.6%</td>
                 <td class="internal-data">557.8</td>
                 <td class="internal-data">1.7%</td>
                 <td class="internal-data">3.1%</td>
              </tr>
              <tr>
                 <td class="internal-data">17</td>
                 <td class="internal-data">BrandX</td>
                 <td class="internal-data">0.6</td>
                 <td class="internal-data">1.5%</td>
                 <td class="internal-data">494.9</td>
                 <td class="internal-data">1.5%</td>
                 <td class="internal-data">1.5%</td>
              </tr>
              <tr>
                 <td class="internal-data">18</td>
                 <td class="internal-data">BrandX</td>
                 <td class="internal-data">0.6</td>
                 <td class="internal-data">1.4%</td>
                 <td class="internal-data">493.5</td>
                 <td class="internal-data">1.5%</td>
                 <td class="internal-data">1.6%</td>
              </tr>
              <tr>
                 <td class="internal-data">19</td>
                 <td class="internal-data">BrandX</td>
                 <td class="internal-data">0.6</td>
                 <td class="internal-data">1.3%</td>
                 <td class="internal-data">299.7</td>
                 <td class="internal-data">0.9%</td>
                 <td class="internal-data">43.6%</td>
              </tr>
              <tr>
                 <td class="internal-data">20</td>
                 <td class="internal-data">BrandX</td>
                 <td class="internal-data">0.6</td>
                 <td class="internal-data">1.2%</td>
                 <td class="internal-data">769.7</td>
                 <td class="internal-data">2.4%</td>
                 <td class="internal-data">45.2%</td>
              </tr>
              
           </table>
          </div>
        </div>
      <?= $this->endSection() ?>   
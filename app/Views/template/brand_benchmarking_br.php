<?= $this->extend("layout/main"); ?>

<?= $this->section("body") ?>

        <!-- main containe section start -->
        <?= view('layout/breadcrumb'); ?>

        <div class="bg-white fadeInUp m-0 mt-2 p-3 row wow rounded shadow">
          <div class="col-md-10 px-0">
            <div class="row">
              <div class="col-md-3">
              <div><p class="m-0 mb-2" style="font-size:11px;">Choose Shiseido Brand of ineterest</div>
              <div class="dropdown">
              <button class="bg-white border-danger btn btn-secondary dropdown-toggle p-1 rounded" type="button" data-toggle="dropdown" aria-expanded="false" style="color: black;">
                Brand
                <img src="<?=base_url()?>public/images/select-icon.png">
              </button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </div>
              </div>
              <div class="col-md-1 d-flex justify-content-center mt-4">VS</div>
              <div class="col-md-3">
              <div><p class="m-0 mb-2" style="font-size:11px;">Choose Competitor Brand of ineterest</div>
              <div class="dropdown">
              <button class="bg-white border-danger btn btn-secondary dropdown-toggle p-1 rounded" type="button" data-toggle="dropdown" aria-expanded="false" style="color: black;">
                Brand
                <img src="<?=base_url()?>public/images/select-icon.png">
              </button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </div>
              </div>
              <div class="col-md-5 d-flex mt-2">
              <div class="dropdown mt-3 px-3">
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
            <div class="dropdown mt-3 px-3">
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
            <div class="dropdown mt-3 px-3">
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
              
            </div>
          </div>
          <div class="col-md-2 d-flex justify-content-end mt-3">
          <button type="button" class="btn btn-primary h1 w-50">Submit</button>
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
          
          <div class="col-md-12">
          
            <table class="table table-bordered table-hover text-dark table-hover text-center" style="font-size: 12px;">

              <tr>
                 <th class="internal-data bg-danger" rowspan="2" style="color: white; vertical-align: middle;">
                    Category</th>
                 <th class="internal-data bg-danger text-center" colspan="3" style="color: white;">
                    Sales Mn(USD)
                 </th>
                 
                 <th class="internal-data bg-danger text-center" colspan="3" style="color: white;">
                    Vs LY
                 </th>
                 
                  <th class="internal-data bg-danger text-center" colspan="3" style="color: white;">
                    MOB
                 </th>                 
              </tr>

              
              <tr>
                 <td class="internal-data bg-danger text-center" style="color: white;">Shiseido Brand</td>
                 <td class="internal-data bg-danger text-center" style="color: white;">Brand X
                 </td>
                 <td class="internal-data bg-danger text-center" style="color: white;">Brand Y</td>
                 <td class="internal-data bg-danger text-center" style="color: white;">Shiseido Brand</td>
                 <td class="internal-data bg-danger text-center" style="color: white;">Brand X
                 </td>
                 <td class="internal-data bg-danger text-center" style="color: white;">Brand Y</td>
                 <td class="internal-data bg-danger text-center" style="color: white;">Shiseido Brand</td>
                 <td class="internal-data bg-danger text-center" style="color: white;">Brand X
                 </td>
                 <td class="internal-data bg-danger text-center" style="color: white;">Brand Y</td>
                 
              </tr>
              <tr style="text-align: center;background-color: #eaeaea;">
                 <td class="internal-data" >Fragrance Total</td>
                 <td class="internal-data">1,452.8</td>
                 <td class="internal-data">1,763.3</td>
                 <td class="internal-data">4,138.1</td>
                 <td class="internal-data"></td>
                 <td class="internal-data"></td>
                 <td class="internal-data"></td>
                 <td class="internal-data"></td>
                 <td class="internal-data"></td>
                 <td class="internal-data"></td>
              </tr>
              <tr>
                 <td class="internal-data" >Coffrets</td>
                 <td class="internal-data">9.2</td>
                 <td class="internal-data">24.3</td>
                 <td class="internal-data">39.9</td>
                 <td class="internal-data"></td>
                 <td class="internal-data"></td>
                 <td class="internal-data"></td>
                 <td class="internal-data"></td>
                 <td class="internal-data"></td>
                 <td class="internal-data"></td>
              </tr>
              <tr>
                <td class="internal-data" >Men's Fragrances - Regular</td>
                 <td class="internal-data">593.0</td>
                 <td class="internal-data">244.0</td>
                 <td class="internal-data">1,477.1</td>
                 <td class="internal-data"></td>
                 <td class="internal-data"></td>
                 <td class="internal-data"></td>
                 <td class="internal-data"></td>
                 <td class="internal-data"></td>
                 <td class="internal-data"></td>      
              </tr>
              <tr>
                <td class="internal-data" >Men's Fragrances - Sets</td>
                 <td class="internal-data">38.5</td>
                 <td class="internal-data">15.8</td>
                 <td class="internal-data">49.2</td>
                 <td class="internal-data"></td>
                 <td class="internal-data"></td>
                 <td class="internal-data"></td>
                 <td class="internal-data"></td>
                 <td class="internal-data"></td>
                 <td class="internal-data"></td>
              </tr>
              <tr>
                <td class="internal-data" >Women & Unisex Fragrances - Sets</td>
                 <td class="internal-data">52.6</td>
                 <td class="internal-data">90.5</td>
                 <td class="internal-data">113.5</td>
                 <td class="internal-data"></td>
                 <td class="internal-data"></td>
                 <td class="internal-data"></td>
                 <td class="internal-data"></td>
                 <td class="internal-data"></td>
                 <td class="internal-data"></td>
              </tr>
              <tr>
                <td class="internal-data" >Women & Unisex Fragrances Regular</td>
                 <td class="internal-data">759.4</td>
                 <td class="internal-data">1,388.6</td>
                 <td class="internal-data">2,458.5</td>
                 <td class="internal-data"></td>
                 <td class="internal-data"></td>
                 <td class="internal-data"></td>
                 <td class="internal-data"></td>
                 <td class="internal-data"></td>
                 <td class="internal-data"></td>
              </tr>
              <tr style="text-align: center;background-color: #eaeaea;">
                 <td class="internal-data" >Make-up Total</td>
                 <td class="internal-data">152.1</td>
                 <td class="internal-data">4,838.5</td>
                 <td class="internal-data">455.8</td>
                 <td class="internal-data"></td>
                 <td class="internal-data"></td>
                 <td class="internal-data"></td>
                 <td class="internal-data"></td>
                 <td class="internal-data"></td>
                 <td class="internal-data"></td>
              </tr>
              <tr>
                <td class="internal-data" >Make-up Eyes Regular</td>
                 <td class="internal-data">35.7</td>
                 <td class="internal-data">249.4</td>
                 <td class="internal-data">128.4</td>
                 <td class="internal-data"></td>
                 <td class="internal-data"></td>
                 <td class="internal-data"></td>
                 <td class="internal-data"></td>
                 <td class="internal-data"></td>
                 <td class="internal-data"></td>
              </tr>
              <tr>
                <td class="internal-data" >Make-up Eyes Sets</td>
                 <td class="internal-data">7.0</td>
                 <td class="internal-data">26.2</td>
                 <td class="internal-data">30.0</td>
                 <td class="internal-data"></td>
                 <td class="internal-data"></td>
                 <td class="internal-data"></td>
                 <td class="internal-data"></td>
                 <td class="internal-data"></td>
                 <td class="internal-data"></td>
              </tr>
              <tr>
                <td class="internal-data" >Make-up Face - Regular</td>
                 <td class="internal-data">61.8</td>
                 <td class="internal-data">2,717.9</td>
                 <td class="internal-data">152.1</td>
                 <td class="internal-data"></td>
                 <td class="internal-data"></td>
                 <td class="internal-data"></td>
                 <td class="internal-data"></td>
                 <td class="internal-data"></td>
                 <td class="internal-data"></td>
              </tr>
              <tr>
                <td class="internal-data" >Make-up Face - Sets</td>
                 <td class="internal-data">1.8</td>
                 <td class="internal-data">292.5</td>
                 <td class="internal-data">9.9</td>
                 <td class="internal-data"></td>
                 <td class="internal-data"></td>
                 <td class="internal-data"></td>
                 <td class="internal-data"></td>
                 <td class="internal-data"></td>
                 <td class="internal-data"></td>
              </tr>
              <tr>
                <td class="internal-data" >Make-up Lips - Regular</td>
                 <td class="internal-data">35.7</td>
                 <td class="internal-data">1,456.3</td>
                 <td class="internal-data">87.9</td>
                 <td class="internal-data"></td>
                 <td class="internal-data"></td>
                 <td class="internal-data"></td>
                 <td class="internal-data"></td>
                 <td class="internal-data"></td>
                 <td class="internal-data"></td>
              </tr>
              <tr>
                <td class="internal-data" >Make-up Lips - Sets</td>
                 <td class="internal-data">4.5</td>
                 <td class="internal-data">51.0</td>
                 <td class="internal-data">18.5</td>
                 <td class="internal-data"></td>
                 <td class="internal-data"></td>
                 <td class="internal-data"></td>
                 <td class="internal-data"></td>
                 <td class="internal-data"></td>
                 <td class="internal-data"></td>
              </tr>
              <tr>
                <td class="internal-data" >Make-up Nails - Regular</td>
                 <td class="internal-data">1.1</td>
                 <td class="internal-data">3.7</td>
                 <td class="internal-data">8.0</td>
                 <td class="internal-data"></td>
                 <td class="internal-data"></td>
                 <td class="internal-data"></td>
                 <td class="internal-data"></td>
                 <td class="internal-data"></td>
                 <td class="internal-data"></td>
              </tr>
              <tr>
                <td class="internal-data" >Make-up Nails - Sets</td>
                 <td class="internal-data">0.1</td>
                 <td class="internal-data">0.6</td>
                 <td class="internal-data">1.1</td>
                 <td class="internal-data"></td>
                 <td class="internal-data"></td>
                 <td class="internal-data"></td>
                 <td class="internal-data"></td>
                 <td class="internal-data"></td>
                 <td class="internal-data"></td>
              </tr>
              <tr>
                <td class="internal-data" >Make-up Nails - Others</td>
                 <td class="internal-data">4.5</td>
                 <td class="internal-data">41.1</td>
                 <td class="internal-data">20.0</td>
                 <td class="internal-data"></td>
                 <td class="internal-data"></td>
                 <td class="internal-data"></td>
                 <td class="internal-data"></td>
                 <td class="internal-data"></td>
                 <td class="internal-data"></td>
              </tr>
              <tr style="text-align: center;background-color: #eaeaea;">
                 <td class="internal-data" >Skin Care Total</td>
                 <td class="internal-data">289.4</td>
                 <td class="internal-data">20,159.5</td>
                 <td class="internal-data">659.5</td>
                 <td class="internal-data"></td>
                 <td class="internal-data"></td>
                 <td class="internal-data"></td>
                 <td class="internal-data"></td>
                 <td class="internal-data"></td>
                 <td class="internal-data"></td>
              </tr>
              <tr>
                <td class="internal-data" >Skin Care Body</td>
                 <td class="internal-data">12.3</td>
                 <td class="internal-data">128.3</td>
                 <td class="internal-data">69.4</td>
                 <td class="internal-data"></td>
                 <td class="internal-data"></td>
                 <td class="internal-data"></td>
                 <td class="internal-data"></td>
                 <td class="internal-data"></td>
                 <td class="internal-data"></td>
              </tr>
              <tr>
                <td class="internal-data" >Skin Care Face</td>
                 <td class="internal-data">212.6</td>
                 <td class="internal-data">15,606.4</td>
                 <td class="internal-data">403.0</td>
                 <td class="internal-data"></td>
                 <td class="internal-data"></td>
                 <td class="internal-data"></td>
                 <td class="internal-data"></td>
                 <td class="internal-data"></td>
                 <td class="internal-data"></td>
              </tr>
              <tr>
                <td class="internal-data" >Skin Care Face - Eye & Lip</td>
                 <td class="internal-data">27.8</td>
                 <td class="internal-data">1,948.9</td>
                 <td class="internal-data">47.0</td>
                 <td class="internal-data"></td>
                 <td class="internal-data"></td>
                 <td class="internal-data"></td>
                 <td class="internal-data"></td>
                 <td class="internal-data"></td>
                 <td class="internal-data"></td>
              </tr>
              <tr>
                <td class="internal-data" >Skin Care Hair</td>
                 <td class="internal-data">5.4</td>
                 <td class="internal-data">134.5</td>
                 <td class="internal-data">10.7</td>
                 <td class="internal-data"></td>
                 <td class="internal-data"></td>
                 <td class="internal-data"></td>
                 <td class="internal-data"></td>
                 <td class="internal-data"></td>
                 <td class="internal-data"></td>
              </tr>
              <tr>
                <td class="internal-data" >Skin Care Men</td>
                 <td class="internal-data">9.4</td>
                 <td class="internal-data">251.9</td>
                 <td class="internal-data">46.8</td>
                 <td class="internal-data"></td>
                 <td class="internal-data"></td>
                 <td class="internal-data"></td>
                 <td class="internal-data"></td>
                 <td class="internal-data"></td>
                 <td class="internal-data"></td>
              </tr>
              <tr>
                <td class="internal-data" >Skin Care Sun</td>
                 <td class="internal-data">9.2</td>
                 <td class="internal-data">437.5</td>
                 <td class="internal-data">44.3</td>
                 <td class="internal-data"></td>
                 <td class="internal-data"></td>
                 <td class="internal-data"></td>
                 <td class="internal-data"></td>
                 <td class="internal-data"></td>
                 <td class="internal-data"></td>
              </tr>
              <tr>
                <td class="internal-data" >Skin Care Whitening Products</td>
                 <td class="internal-data">2.1</td>
                 <td class="internal-data">210.3</td>
                 <td class="internal-data">2.7</td>
                 <td class="internal-data"></td>
                 <td class="internal-data"></td>
                 <td class="internal-data"></td>
                 <td class="internal-data"></td>
                 <td class="internal-data"></td>
                 <td class="internal-data"></td>
              </tr>
              <tr>
                <td class="internal-data" >Skin Care Others</td>
                 <td class="internal-data">10.7</td>
                 <td class="internal-data">1,441.7</td>
                 <td class="internal-data">35.6</td>
                 <td class="internal-data"></td>
                 <td class="internal-data"></td>
                 <td class="internal-data"></td>
                 <td class="internal-data"></td>
                 <td class="internal-data"></td>
                 <td class="internal-data"></td>
              </tr>
              <tr style="text-align: center;background-color: #eaeaea;">
                 <td class="internal-data" >Grand Total</td>
                 <td class="internal-data">1,894.3</td>
                 <td class="internal-data">26,761.3</td>
                 <td class="internal-data">5,253.4</td>
                 <td class="internal-data"></td>
                 <td class="internal-data"></td>
                 <td class="internal-data"></td>
                 <td class="internal-data"></td>
                 <td class="internal-data"></td>
                 <td class="internal-data"></td>
              </tr>
           </table>
          </div>
        </div>
      <?= $this->endSection() ?>   
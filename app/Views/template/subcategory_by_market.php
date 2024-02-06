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
        
        <div class="bg-white fadeInUp m-0 mt-2 p-3 row wow rounded shadow">
          
          <div class="col-md-12 text-center mt-2">
          <!-- <div class="d-flex justify-content-end">
          <div class="custom-control custom-switch mx-5">
            <input type="checkbox" class="custom-control-input" id="customSwitch1">
            <label class="custom-control-label" for="customSwitch1"></label>
          </div>
          </div> -->
          </div>
          
          <div class="col-md-12">
          
            <table class="table table-bordered table-hover text-dark table-hover text-center" style="font-size: 12px;">
                <tr>
                    <th></th>
                    <th class="internal-data bg-danger" colspan="3" style="color: white; vertical-align: middle;" >2022</th>
                </tr>

              <tr>
                 <th class="internal-data bg-danger"  style="color: white; vertical-align: middle;">
                    Category </th>
                 <th class="internal-data bg-danger text-center"  style="color: white;">
                    CHIINA (SALES Mn USD)
                 </th>
                 
                 <th class="internal-data bg-danger text-center"  style="color: white;">
                    % SHARE
                 </th>
                 
                  <th class="internal-data bg-danger text-center"  style="color: white;">
                    % Growth vs LY
                 </th>    
              </tr>
              <tr>
                 <td class="font-weight-bold internal-data" style="text-align: left;background-color: #eaeaea;">Fragrance Total Total
                 </td>
                 <td class="font-weight-bold internal-data" style="text-align:  center left;background-color: #eaeaea;"class="internal-data">1,452.8</td>
                 <td class="font-weight-bold internal-data" style="text-align:  center left;background-color: #eaeaea;"class="internal-data">100%</td>
                 <td class="font-weight-bold internal-data" style="text-align:  center left;background-color: #eaeaea;"class="internal-data">100%</td>      
              </tr>
              <tr>
                 <td class="text-left">&nbsp&nbsp&nbspCoffrets</td>
                 <td >9.2</td>
                 <td >20%</td>
                 <td >20%</td>      
              </tr>
              <tr>
                 <td class="text-left" >&nbsp&nbsp&nbspMen's Fragrances - Regular</td>
                 <td >593.0</td>
                 <td >10%</td>
                 <td >10%</td>      
              </tr>
              <tr>
                 <td class="text-left">&nbsp&nbsp&nbspMen's Fragrances - Sets</td>
                 <td >38.5</td>
                 <td >5%</td>
                 <td >5%</td>     
              </tr>
               <tr>
                 <td class="text-left">&nbsp&nbsp&nbspWomen & Unisex Fragrances - Set</td>
                 <td >52.6</td>
                 <td >30%</td>
                 <td >30%</td>      
              </tr>
              <tr>
                 <td class="text-left">&nbsp&nbsp&nbspWomen & Unisex Fragrances Regular</td>
                 <td >759.4</td>
                 <td >35%</td>
                 <td >35%</td>      
              </tr>
               <tr>
                 <td class="internal-data font-weight-bold" style="text-align: left;background-color: #eaeaea;">Make-up Total
                 </td>
                 <td class="internal-data font-weight-bold" style="text-align: center  left;background-color: #eaeaea;"class="internal-data">152.1 </td>
                 <td class="internal-data font-weight-bold" style="text-align: center left;background-color: #eaeaea;"class="internal-data">100%</td>
                 <td class="internal-data font-weight-bold" style="text-align: center left;background-color: #eaeaea;"class="internal-data">100%</td>      
              </tr>
              <tr>
                 <td class="text-left">&nbsp&nbsp&nbspMake-up Eyes Regula</td>
                 <td >35.7</td>
                 <td >10%</td>
                 <td >10%</td>      
              </tr>
              <tr>
                 <td class="text-left">&nbsp&nbsp&nbspMake-up Eyes Sets</td>
                 <td >7.0</td>
                 <td >5%</td>
                 <td >5%</td>      
              </tr>
               <tr>
                 <td class="text-left">&nbsp&nbsp&nbspMake-up Face - Regular</td>
                 <td >61.8</td>
                 <td >25%</td>
                 <td >25%</td>      
              </tr>
               <tr>
                 <td class="text-left">&nbsp&nbsp&nbspMake-up Face - Sets</td>
                 <td >1.8</td>
                 <td >5%</td>
                 <td >5%</td>      
              </tr>
               <tr>
                 <td class="text-left">Make-up Lips - Regular</td>
                 <td >35.7</td>
                 <td >30%</td>
                 <td >30%</td>      
              </tr>
               <tr>
                 <td class="text-left">&nbsp&nbsp&nbspMake-up Lips - Sets</td>
                 <td >4.5</td>
                 <td >5%</td>
                 <td >5%</td>     
              </tr>
                <tr>
                 <td class="text-left">&nbsp&nbsp&nbspMake-up Nails - Regular</td>
                 <td >1.1</td>
                 <td >5%</td>
                 <td >5%</td>      
              </tr>
                <tr>
                 <td class="text-left">&nbsp&nbsp&nbspMake-up Nails - Sets </td>
                 <td >0.1</td>
                 <td >5%</td>
                 <td >5%</td>      
              </tr>
                <tr>
                 <td class="text-left">&nbsp&nbsp&nbspMake-up Others</td>
                 <td >4.5</td>
                 <td >10%</td>
                 <td >10%</td>      
              </tr>
              <tr>
                 <td class="internal-data font-weight-bold" style="text-align: left;background-color: #eaeaea;">Skin Care Total 
                 </td>
                 <td class="internal-data font-weight-bold" style="text-align: center left;background-color: #eaeaea;"class="internal-data">289.4</td>
                 <td class="internal-data font-weight-bold" style="text-align: center left;background-color: #eaeaea;"class="internal-data">100%</td>
                 <td class="internal-data font-weight-bold" style="text-align: center left;background-color: #eaeaea;"class="internal-data">100%</td>      
              </tr>
              <tr>
                 <td class="text-left">&nbsp&nbsp&nbspSkin Care Body</td>
                 <td >12.3</td>
                 <td >5%</td>
                 <td >5%</td>      
              </tr>
              <tr>
                 <td class="text-left">&nbsp&nbsp&nbspSkin Care Face</td>
                 <td >212.6 </td>
                 <td >60%</td>
                 <td >60%</td>      
              </tr>
              <tr>
                 <td class="text-left">&nbsp&nbsp&nbspSkin Care Face - Eye & Lip</td>
                 <td >27.8</td>
                 <td >10%</td>
                 <td >10%</td>      
              </tr>

              <tr>
                 <td class="text-left">&nbsp&nbsp&nbspSkin Care Hair</td>
                 <td >5.4</td>
                 <td >5%</td>
                 <td >5%</td>      
              </tr>
              <tr>
                 <td class="text-left" >&nbsp&nbsp&nbspSkin Care Men</td>
                 <td >9.4</td>
                 <td >5%</td>
                 <td >5%</td>      
              </tr>
              <tr>
                 <td class="text-left">&nbsp&nbsp&nbspSkin Care Sun</td>
                 <td >9.2</td>
                 <td >5%</td>
                 <td >5%</td>      
              </tr>
              <tr>
                 <td class="text-left" >&nbsp&nbsp&nbspSkin Care Whitening Products </td>
                 <td >2.1</td>
                 <td >5%</td>
                 <td >5%</td>      
              </tr>
                <tr>
                 <td class="text-left">&nbsp&nbsp&nbspSkin Care Others</td>
                 <td >10.7</td>
                 <td >5%</td>
                 <td >5%</td>      
              </tr>
               <tr>
                 <td class="internal-data font-weight-bold" style="text-align:  left;background-color: #eaeaea;">Market Total
                 </td>
                 <td class="internal-data font-weight-bold" style="text-align: center left;background-color: #eaeaea;"class="internal-data">1,894.3</td>
                 <td class="internal-data font-weight-bold" style="text-align: center left;background-color: #eaeaea;"class="internal-data font-weight-bold">26,761.3 </td>
                 <td class="internal-data font-weight-bold" style="text-align: center left;background-color: #eaeaea;"class="internal-data">5,253.4</td>      
              </tr>
              
            </table>
          </div>
        </div>
      <?= $this->endSection() ?>   

      
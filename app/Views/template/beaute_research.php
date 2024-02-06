<?= $this->extend("layout/main"); ?>

<?= $this->section("body") ?>

        <!-- main containe section start -->
        <div class="containe fadeInUp main-container-sec rounded shadow wow" data-wow-delay="0.1s">
          <h4 class="text-danger font-weight-bold">BEAUTE RESEARCH (TRAVEL RETAIL)</h4>
        </div>

        <div class="bg-white fadeInUp mt-2 p-4 wow rounded shadow">
          <div class="row">
            <div class="col-md-12">
              <p class="m-0">To be updated with data description & reports available</p>
            </div>
          </div>
          
          <div class="row">
            <div class="col-md-6 d-flex justify-content-end">
              <a class="border border-danger card1 p-lg-4 shadow text-center w-50 rounded-circle" href="<?=base_url()?>beaute_research/market_overview_template">
                <div class="d-block"><img class="icon_1" src="<?=base_url()?>public/images/annual_marketing_logo.png"></div>
                <h3 class="card_title mt-3">MARKET OVERVIEW</h3>
                <!-- <p class="small">Card description with lots of great facts and interesting details.</p> -->
                <div class="go-corner bg-danger" href="#">
                  <div class="go-arrow">
                    →
                  </div>
                </div>
              </a>
            </div>
            <div class="col-md-6">
              <a class="border border-danger card1 p-lg-4 shadow text-center w-50 rounded-circle" href="<?=base_url()?>beaute_research/group_analysis_br_template">
                <div class="d-block"><img class="icon_1" src="<?=base_url()?>public/images/group_performance_icon.png"></div>
                <h3 class="card_title mt-3">GROUP ANALYSIS</h3>
                <!-- <p class="small">Card description with lots of great facts and interesting details.</p> -->
                <div class="go-corner bg-danger" href="#">
                  <div class="go-arrow">
                    →
                  </div>
                </div>
              </a>
            </div>
          </div>

          <div class="row">
            <div class="col-md-4 d-flex justify-content-center mt-2">
              <a class="border border-danger card1 p-lg-4 shadow text-center w-75 rounded-circle" href="<?=base_url()?>beaute_research/brand_analysis_br_template">
                <div class="d-block"><img class="icon_1" src="<?=base_url()?>public/images/brand_performance_icon.png"></div>
                <h3 class="card_title mt-3">BRAND ANALYSIS</h3>
                <!-- <p class="small">Card description with lots of great facts and interesting details.</p> -->
                <div class="go-corner bg-danger" href="#">
                  <div class="go-arrow">
                    →
                  </div>
                </div>
              </a>
            </div>
            <div class="col-md-4 d-flex justify-content-center mt-2">
            
            </div>
            <div class="col-md-4 d-flex justify-content-center mt-2">
              <a class="border border-danger card1 p-lg-4 shadow text-center w-75 rounded-circle" href="<?=base_url()?>beaute_research/brand_benchmarking_br_template">
                <div class="d-block"><img class="icon_1" src="<?=base_url()?>public/images/brand_performance_icon.png"></div>
                <h3 class="card_title mt-3">BRAND BENCHMARKING</h3>
                <!-- <p class="small">Card description with lots of great facts and interesting details.</p> -->
                <div class="go-corner bg-danger" href="#">
                  <div class="go-arrow">
                    →
                  </div>
                </div>
              </a>
            </div>
          </div>


          <div class="row mt-2">
            <div class="col-md-6 d-flex justify-content-end">
              <a class="border border-danger card1 p-lg-4 shadow text-center w-50 rounded-circle" href="<?=base_url()?>beaute_research/sku_deep_dive_template">
                <div class="d-block"><img class="icon_1" src="<?=base_url()?>public/images/deep_dive_icon.png"></div>
                <h3 class="card_title mt-3">SKU DEEP-DIVE</h3>
                <!-- <p class="small">Card description with lots of great facts and interesting details.</p> -->
                <div class="go-corner bg-danger" href="#">
                  <div class="go-arrow">
                    →
                  </div>
                </div>
              </a>
            </div>
            <div class="col-md-6">
              <a class="border border-danger card1 p-lg-4 shadow text-center w-50 rounded-circle" href="<?=base_url()?>beaute_research/sku_benchmark_template">
                <div class="d-block"><img class="icon_1" src="<?=base_url()?>public/images/benchmarking_icon.png"></div>
                <h3 class="card_title mt-3">SKU BENCHMARKING</h3>
                <!-- <p class="small">Card description with lots of great facts and interesting details.</p> -->
                <div class="go-corner bg-danger" href="#">
                  <div class="go-arrow">
                    →
                  </div>
                </div>
              </a>
            </div>
          </div>

          

        </div>
      <?= $this->endSection() ?>   

<?= $this->extend("layout/main"); ?>

<?= $this->section("body") ?>
        <!-- main containe section start -->
        <div class="containe main-container-sec wow fadeInUp shadow rounded" data-wow-delay="0.1s">
          <h4 class="text-danger font-weight-bold">Generation</h4>
        </div>

        <div class="bg-white fadeInUp mt-2 p-4 wow shadow rounded generation_main">
          <div class="row">
            <div class="col-md-12">
              <p class="m-0">To be updated with data description & reports available</p>
            </div>
          </div>
          
          <div class="mt-xl-n2 row">
            <div class="col-md-3">
            <a href="<?=base_url()?>generation/regional_and_category_template" class="border border-danger card_gen_1 d-flex education mt-3 rounded shadow">
                <div class="mb-5 overlay"></div>          
                <img class="icon_gen_1 mr-1 mt-3" src="<?=base_url()?>public/images/annual_marketing_logo_white.png">
                <div><br>
                <p>REGIONAL & CATEGORY OVERVIEW</p>
                </div>
              </a>
            </div>
            <div class="col-md-3">
            <a href="<?=base_url()?>generation/market_by_region_template" class="border border-danger card_gen_1 d-flex education mt-3 rounded shadow">
                <div class="mb-5 overlay"></div>          
                <img class="icon_gen_1 mr-1 mt-3" src="<?=base_url()?>public/images/annual_marketing_logo_white.png">
                <div><br>
                <p>MARKET BY REGION</p>
                </div>
              </a>
            </div>
            <div class="col-md-3">
            <a href="<?=base_url()?>generation/category_and_channel_by_market_template" class="border border-danger card_gen_1 d-flex education mt-3 rounded shadow">
                <div class="mb-5 overlay"></div>          
                <img class="icon_gen_1 mr-1 mt-3" src="<?=base_url()?>public/images/category_overview_icon_white.png">
                <div><br>
                <p>CATEGORY AND CHANNEL BY MARKET</p>
                </div>
              </a>
            </div>
            <div class="col-md-3">
            <a href="<?=base_url()?>generation/subcategory_by_market_template" class="border border-danger card_gen_1 d-flex education mt-3 rounded shadow">
                <div class="mb-5 overlay"></div>          
                <img class="icon_gen_1 mr-1 mt-3" src="<?=base_url()?>public/images/channel_overview_icon_white.png">
                <div><br>
                <p>SUBCATEGORY BY MARKET</p>
                </div>
              </a>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3">
            <a href="<?=base_url()?>generation/group_analysis_template" class="border border-danger card_gen_1 d-flex education mt-4 rounded shadow">
                <div class="mb-5 overlay"></div>          
                <img class="icon_gen_1 mr-1 mt-3" src="<?=base_url()?>public/images/channel_overview_icon_white.png">
                <div><br>
                <p>GROUP ANALYSIS</p>
                </div>
              </a>
            </div>
            <div class="col-md-3">
            <a href="<?=base_url()?>generation/brand_analysis_template" class="border border-danger card_gen_1 d-flex education mt-4 rounded shadow">
                <div class="mb-5 overlay"></div>          
                <img class="icon_gen_1 mr-1 mt-3" src="<?=base_url()?>public/images/group_performance_icon_white.png">
                <div><br>
                <p>BRAND ANALYSIS</p>
                </div>
              </a>
            </div>
            <div class="col-md-3">
            <a href="<?=base_url()?>generation/brands_by_groups_template" class="border border-danger card_gen_1 d-flex education mt-4 rounded shadow">
                <div class="mb-5 overlay"></div>          
                <img class="icon_gen_1 mr-1 mt-3" src="<?=base_url()?>public/images/brand_performance_icon_white.png">
                <div><br>
                <p>BRANDS BY GROUPS</p>
                </div>
              </a>
            </div>
            <div class="col-md-3">
            <a href="<?=base_url()?>generation/trex_analysis_template" class="border border-danger card_gen_1 d-flex education mt-4 rounded shadow">
                <div class="mb-5 overlay"></div>          
                <img class="icon_gen_1 mr-1 mt-3" src="<?=base_url()?>public/images/comparison_icon_white.png">
                <div><br>
                <p>TREX ANALYSIS</p>
                </div>
              </a>
            </div>
          </div>
            


        </div>
        
      <?= $this->endSection() ?>  

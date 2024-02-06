<?= $this->extend("layout/main"); ?>

<?= $this->section("body") ?>
<div class="animated containe fadeInU main-container-sec rounded shadow wow" data-wow-delay="0.1s">
          <h4 class="text-danger font-weight-bold">Welcome to the STR Online Dashboard!</h4>
        </div>

        <div class="bg-white fadeInUp m-0 mt-2 p-3 row wow mid_section rounded shadow">
          <div class="col-md-4">
          <div class="accordion" id="accordionExample">
          <div class="card shadow-lg">
    <div class="card-header p-5 dashboard_1" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-block btn-link collapsed d-flex justify-content-center mt-4 text-decoration-none text-left text-white" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Travel Retail Sell-Out
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
        <p><i class="fa fa-minus text-danger" aria-hidden="true"></i> <a href="<?=base_url()?>generation" class="text-dark text-decoration-none">Generation</a></p>
        <p><i class="fa fa-minus text-danger" aria-hidden="true"></i> <a href="<?=base_url()?>beaute_research" class="text-dark text-decoration-none">Beaute Research</a></p>
      </div>
    </div>
  </div>
          </div>
          </div>
          <div class="col-md-4">
          <div class="accordion" id="accordionExample_1">
          <div class="card shadow-lg">
    <div class="card-header p-5 dashboard_2" id="headingThree">
      <h2 class="mb-0">
        <button class="btn btn-block btn-link collapsed d-flex justify-content-center mt-4 text-decoration-none text-left text-white" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Domestic Sell Out
        </button>
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample_1">
      <div class="card-body">
        Some placeholder content for the second accordion panel. This panel is hidden by default.
      </div>
    </div>
  </div>
          </div>
          </div>
          <div class="col-md-4">
          <div class="accordion" id="accordionExample_2">
          <div class="card shadow-lg">
    <div class="card-header p-5 dashboard_3" id="headingFour">
      <h2 class="mb-0">
        <button class="btn btn-block btn-link collapsed d-flex justify-content-center mt-4 text-decoration-none text-left text-white" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
          Passenger Air Traffic
        </button>
      </h2>
    </div>
    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample_2">
      <div class="card-body">
        Some placeholder content for the second accordion panel. This panel is hidden by default.
      </div>
    </div>
  </div>
          </div>
        </div>
<?= $this->endSection() ?>        
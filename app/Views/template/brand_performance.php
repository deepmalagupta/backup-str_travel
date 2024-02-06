<?= $this->extend("layout/main"); ?>

<?= $this->section("body") ?>
    <!-- main containe section start -->

    <div class="containe wow fadeInUp">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb m-0 pb-0">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item"><a href="#">Library</a></li>
          <li class="breadcrumb-item active" aria-current="page">Group Performance</li>
        </ol>
      </nav>
    </div>
    <div class="containe fadeInUp m-0 main-container-sec mt-2 row wow rounded shadow" data-wow-delay="0.1s">
      <div class="col-md-6">
        <h4 class="text-danger font-weight-bold">BRAND PERFORMANCE</h4>
      </div>
      <div class="col-md-6 d-flex justify-content-end">
        <!-- <div><img src="images/ppt_icon.png"></div> -->
        <div class="dropdown px-3">
          <button class="bg-white border-danger btn btn-secondary dropdown-toggle p-1 rounded" type="button"
            data-toggle="dropdown" aria-expanded="false" style="color: black;">
            Select a Report
            <img src="<?=IMG?>select-icon.png">
          </button>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </div>
      </div>
    </div>
    <div class="bg-white fadeInUp m-0 mt-2 p-3 row wow rounded shadow">
      <div class="col-md-10 d-flex p-0">
            <div class="dropdown px-3">
                <button class="bg-white border-danger btn btn-secondary dropdown-toggle p-1 rounded" type="button"
                  data-toggle="dropdown" aria-expanded="false" style="color: black;">
                  Year
                  <img src="<?=IMG?>select-icon.png">
                </button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </div>
              <div class="dropdown">
                <button class="bg-white border-danger btn btn-secondary dropdown-toggle p-1 rounded" type="button"
                  data-toggle="dropdown" aria-expanded="false" style="color: black;">
                  Period
                  <img src="<?=IMG?>select-icon.png">
                </button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </div>
              <div class="dropdown px-3">
                <button class="bg-white border-danger btn btn-secondary dropdown-toggle p-1 rounded" type="button"
                  data-toggle="dropdown" aria-expanded="false" style="color: black;">
                  Market
                  <img src="<?=IMG?>select-icon.png">
                </button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </div>
              <div class="dropdown">
                <button class="bg-white border-danger btn btn-secondary dropdown-toggle p-1 rounded" type="button"
                  data-toggle="dropdown" aria-expanded="false" style="color: black;">
                  Channel
                  <img src="<?=IMG?>select-icon.png">
                </button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </div>
              <div class="dropdown px-3">
                <button class="bg-white border-danger btn btn-secondary dropdown-toggle p-1 rounded" type="button"
                  data-toggle="dropdown" aria-expanded="false" style="color: black;">
                  Category
                  <img src="<?=IMG?>select-icon.png">
                </button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </div>
            

            <div class="dropdown">
              <button class="bg-white border-danger btn btn-secondary dropdown-toggle p-1 rounded" type="button"
                data-toggle="dropdown" aria-expanded="false" style="color: black;">
                Sub-Category
                <img src="<?=IMG?>select-icon.png">
              </button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </div>

            <div class="dropdown px-3">
              <button class="bg-white border-danger btn btn-secondary dropdown-toggle p-1 rounded" type="button"
                data-toggle="dropdown" aria-expanded="false" style="color: black;">
                Detailed-Subcategory
                <img src="<?=IMG?>select-icon.png">
              </button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </div>
      </div>
      <div class="col-md-2 d-flex justify-content-end">
      <button type="button" class="btn btn-primary w-auto">Submit</button>
      </div>
    </div>
    <div class="bg-white fadeInUp m-0 mt-2 p-3 row wow rounded shadow">
      <div class="col-md-12">
      <div class="px-3 d-flex justify-content-end mb-2"><img src="<?=IMG?>excel_icon.png"></div>
        <table class="table table-bordered table-hover text-dark table-hover text-center" style="font-size: 12px;">

          <tr>
            <th class="internal-data bg-danger" rowspan="2" style="color: white; vertical-align: middle;">
              Brand</th>
            <th class="internal-data bg-danger text-center" colspan="2" style="color: white;">
              2023 Q2
            </th>
            <th class="internal-data bg-danger text-center" colspan="2" style="color: white;">
              2022 Q2
            </th>
            <th class="internal-data bg-danger text-center" rowspan="2" style="color: white; vertical-align: middle;">
              2022 Q2
            </th>
            <th class="internal-data bg-danger text-center" rowspan="2" style="color: white; vertical-align: middle;">
              2022 Q2
            </th>
          </tr>
          <tr>
            <td class="internal-data bg-danger text-center" style="color: white;">Sales (Mn USD)</td>
            <td class="internal-data bg-danger text-center" style="color: white;">MOB
            </td>
            <td class="internal-data bg-danger text-center" style="color: white;">Sales (Mn USD)</td>
            <td class="internal-data bg-danger text-center" style="color: white;">MOB
            </td>
          </tr>
          <tr>
            <td class="internal-data" style="text-align: left;background-color: #eaeaea;">Japan
            </td>
            <td class="internal-data">833.9</td>
            <td class="internal-data">4.0%</td>
            <!-- <td class="internal-data">13.3</td> -->
            <td class="internal-data">13.3</td>
            <td class="internal-data">6.5%</td>
            <td class="internal-data">6.5%</td>
            <td class="internal-data">6.5%</td>
          </tr>

          <tr>
            <td class="internal-data" style="text-align: left;background-color: #eaeaea;">Skin Care
            </td>
            <td class="internal-data">238.0</td>
            <td class="internal-data">1.9%</td>
            <td class="internal-data">11.5%</td>
            <td class="internal-data">8.6%</td>
            <td class="internal-data">6.5%</td>
            <td class="internal-data">6.5%</td>
          </tr>

          <tr>
            <td class="internal-data" style="text-align: left;background-color: #eaeaea;">Make-up
            </td>
            <td class="internal-data">142.4</td>
            <td class="internal-data">4.3%</td>
            <td class="internal-data">10.4%</td>
            <td class="internal-data">6.4%</td>
            <td class="internal-data">6.5%</td>
            <td class="internal-data">6.5%</td>
          </tr>

          <tr>
            <td class="internal-data" style="text-align: left;background-color: #eaeaea;">Fragrance
            </td>
            <td class="internal-data">39.3</td>
            <td class="internal-data">3.9%</td>
            <td class="internal-data">30.8%</td>
            <td class="internal-data">4.9%</td>
            <td class="internal-data">6.5%</td>
            <td class="internal-data">6.5%</td>
          </tr>
        </table>
      </div>
    </div>
  <?= $this->endSection() ?>  
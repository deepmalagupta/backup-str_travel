<?= $this->extend("layout/main"); ?>

<?= $this->section("body") ?>

    <!-- main containe section start -->
    <?= view('layout/breadcrumb'); ?>

    <div class="bg-white fadeInUp m-0 mt-2 p-3 row wow">
      <div class="col-md-12 d-flex p-0">
        <?= view("layout/filter"); ?>
      </div>

      <div class="col-md-12 text-center mt-2">
        <!-- <img src="<?=IMG?>basic-bar-graph.png" class="w-50"> -->
      </div>

      <div class="col-md-12">

        <table class="table table-bordered table-hover text-dark table-hover text-center" style="font-size: 12px;">

          <tr>
            <th class="internal-data bg-danger" rowspan="2" style="color: white; vertical-align: middle;">
              Group</th>
            <th class="internal-data bg-danger text-center" colspan="1" style="color: white;">
              2023 Q2
            </th>
            <th class="internal-data bg-danger text-center" rowspan="1" style="color: white; vertical-align: middle;">
              2022 Q2
            </th>
            <th class="internal-data bg-danger text-center" rowspan="2" style="color: white; vertical-align: middle;">
               % Growth vs LY
            </th>
            <th class="internal-data bg-danger text-center" rowspan="2" style="color: white; vertical-align: middle;">              
               Group Contribution To Market Growth
            </th>
          </tr>
          <tr>
            <td class="internal-data bg-danger text-center" style="color: white;">Sales (Mn USD)</td>
            <td class="internal-data bg-danger text-center" style="color: white;">Sales (Mn USD)</td>
          </tr>
          <?php
          $total_row_data = $final_array['total_row_data'];
          $group_data = $final_array['group_data']; 
          ?>
          <tr>
                  <th style="background: #e7e6e6;">Total</th>
                  <th style="background: #e7e6e6;"><?= $total_row_data['cur_sales']; ?></th>
                  <th style="background: #e7e6e6;"><?= $total_row_data['pre_sales']; ?></th>
                  <th style="background: #e7e6e6;"><?= $total_row_data['growth']; ?></th>
                  <th style="background: #e7e6e6;"><?= $total_row_data['marketgrowth']; ?></th>
                  
              </tr>

          <?php
          foreach ($group_data as $groupname => $val): ?>
          <tr>
            <td><?= $groupname; ?></td>
            <td><?= $val['cur_sales']; ?></td>
            <td><?= $val['pre_sales']; ?></td>
            <td><?= $val['growth']; ?></td>
            <td><?= $val['marketgrowth']; ?></td>
          </tr>
             <?php endforeach; ?>
        </table>
      </div>
      <div class="col-md-12 mt-3">

        <table class="table table-bordered table-hover text-dark table-hover text-center" style="font-size: 12px;">

          <tr>
              <th class="border-light"></th>
              <th colspan="6" style="background: #e7e6e6;">SHISEIDO</th>
          </tr>

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
              2023 Q2 vs 2022 Q2 Evolution
            </th>
            <th class="internal-data bg-danger text-center" rowspan="2" style="color: white; vertical-align: middle;">
              Brand Contribution to Group Growth
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
            <td class="internal-data" style="text-align: left;background-color: #eaeaea;">Cle de Peau Beaute
            </td>
            <td class="internal-data">10</td>
            <td class="internal-data">46.5%</td>
            <!-- <td class="internal-data">13.3</td> -->
            <td class="internal-data">10</td>
            <td class="internal-data">45.4%</td>
            <td class="internal-data">24.3%</td>
            <td class="internal-data">51.8%</td>
          </tr>

          <tr>
            <td class="internal-data" style="text-align: left;background-color: #eaeaea;">Shiseido
            </td>
            <td class="internal-data">9</td>
            <td class="internal-data">23.2%</td>
            <td class="internal-data">9</td>
            <td class="internal-data">18.7%</td>
            <td class="internal-data">50.6%</td>
            <td class="internal-data">44.5%</td>
          </tr>

          <tr>
            <td class="internal-data" style="text-align: left;background-color: #eaeaea;">Anessa
            </td>
            <td class="internal-data">8</td>
            <td class="internal-data">16.1%</td>
            <td class="internal-data">8</td>
            <td class="internal-data">22.1%</td>
            <td class="internal-data">-11.9%</td>
            <td class="internal-data">-12.4%</td>
          </tr>

          <tr>
            <td class="internal-data" style="text-align: left;background-color: #eaeaea;">Nars
            </td>
            <td class="internal-data">7</td>
            <td class="internal-data">10.1%</td>
            <td class="internal-data">7</td>
            <td class="internal-data">6.6%</td>
            <td class="internal-data">84.6%</td>
            <td class="internal-data">26.3%</td>
          </tr>

          <tr>
            <td class="internal-data" style="text-align: left;background-color: #eaeaea;">IPSA
            </td>
            <td class="internal-data">6</td>
            <td class="internal-data">3.7%</td>
            <td class="internal-data">6</td>
            <td class="internal-data">6.5%</td>
            <td class="internal-data">-30.7%</td>
            <td class="internal-data">-9.4%</td>
          </tr>

          <tr>
            <td class="internal-data" style="text-align: left;background-color: #eaeaea;">Narciso Rodriguez 
            </td>
            <td class="internal-data">5</td>
            <td class="internal-data">0.2%</td>
            <td class="internal-data">5</td>
            <td class="internal-data">0.4%</td>
            <td class="internal-data">-38.6%</td>
            <td class="internal-data">-0.7%</td>
          </tr>

          <tr>
            <td class="internal-data" style="text-align: left;background-color: #eaeaea;"> Drunk Elephant Issey Miyake 
            </td>
            <td class="internal-data">4</td>
            <td class="internal-data">0.1%</td>
            <td class="internal-data">4</td>
            <td class="internal-data">0.2%</td>
            <td class="internal-data">-19.1%</td>
            <td class="internal-data">-0.2%</td>
          </tr>

          <tr>
            <td class="internal-data" style="text-align: left;background-color: #eaeaea;"> Issey Miyake 
            </td>
            <td class="internal-data">3</td>
            <td class="internal-data">0.1%</td>
            <td class="internal-data">3</td>
            <td class="internal-data">0.1%</td>
            <td class="internal-data">17.4%</td>
            <td class="internal-data">0.1%</td>
          </tr>
        </table>
      </div>
    </div>
  <?= $this->endSection() ?>
  <script type="text/javascript">
    
  </script>  
<?= $this->extend("layout/main"); ?>

<?= $this->section("body") ?>

  <!-- main containe section start -->
        <div class="containe main-container-sec wow fadeInUp row" data-wow-delay="0.1s">
          <div class="col-md-6">
            <h4 class="text-danger font-weight-bold">MARKET OVERVIEW</h4>
          </div>
          <div class="col-md-6 d-flex justify-content-end">
            <div class="px-3"><img src="./public/images/excel_icon.png"></div>
            <div><img src="./public/images/ppt_icon.png"></div>
            <div class="dropdown px-3">
              <button class="bg-white border-danger btn btn-secondary dropdown-toggle p-1 rounded" type="button" data-toggle="dropdown" aria-expanded="false" style="color: black;">
                Select a Report
                <img src="./public/images/select-icon.png">
              </button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </div>
          </div>
        </div>

        <div class="bg-white fadeInUp m-0 mt-2 p-3 row wow">
          <div class="col-md-12 d-flex">
            <div class="dropdown px-3">
              <button class="bg-white border-danger btn btn-secondary dropdown-toggle p-1 rounded" type="button" data-toggle="dropdown" aria-expanded="false" style="color: black;">
                 Year:
                <img src="./public/images/select-icon.png">
              </button>
              <div class="dropdown-menu">
                 <?php foreach ($datayear as $year): ?>
                    <a class="dropdown-item" href="#"><?php echo $year['datayear']; ?></a>
                <?php endforeach; ?>
              </div>
            </div>
            <div class="dropdown px-3">
              <button class="bg-white border-danger btn btn-secondary dropdown-toggle p-1 rounded" type="button" data-toggle="dropdown" aria-expanded="false" style="color: black;">
                Period
                <img src="./public/images/select-icon.png">
              </button>
              <div class="dropdown-menu">
                 <?php foreach ($period as $val): ?>
                    <a class="dropdown-item" href="#"><?php echo $val['period']; ?></a>
                <?php endforeach; ?>
              </div>
            </div>
        <div class="dropdown px-3">
          <button class="bg-white border-danger btn btn-secondary dropdown-toggle p-1 rounded" type="button"
            data-toggle="dropdown" aria-expanded="false" style="color: black;">
            Market:
            <img src="./public/images/select-icon.png">
          </button>
          <div class="dropdown-menu">
             <?php foreach ($marketname as $val): ?>
                    <a class="dropdown-item" href="#"><?php echo $val['marketname']; ?></a>
            <?php endforeach; ?>
          </div>
        </div>

          </div>

          <div class="col-md-12 text-center mt-2" id = "container">
            <!-- <img src="./public/images/basic-bar-graph.png" class="w-50"> -->
          </div>

          <div class="col-md-12">
            <table class="table table-bordered table-hover text-dark table-hover text-center" style="font-size: 12px;">

              <tr>
                 <th class="internal-data bg-danger" rowspan="2" style="color: white; vertical-align: middle;">
                    Category Split</th>
                 <th class="internal-data bg-danger text-center" colspan="3" style="color: white;">
                    2023 Q2
                 </th>

                 <th class="internal-data bg-danger text-center" colspan="3" style="color: white;">
                    2022 Q2
                 </th> 
              </tr>

              <tr>
                 <td class="internal-data bg-danger text-center" style="color: white;">Sales (Mn USD)
                 </td>

                 <td class="internal-data bg-danger text-center" style="color: white;">MOB
                 </td>

                 <td class="internal-data bg-danger text-center" style="color: white;">% Growth vs LY</td>

                 <td class="internal-data bg-danger text-center" style="color: white;">Sales (Mn USD)
                 </td>

                 <td class="internal-data bg-danger text-center" style="color: white;">MOB
                 </td>
                 
                 <td class="internal-data bg-danger" style="color: white;">% Growth vs LY</td>  
              </tr>

              <tr>
                 <?php foreach ($countrydata as $countryname => $val): ?>
              <tr>
                    <td class="font-weight-bold internal-data" style="text-align:  left;background-color: #eaeaea;"><?= $countryname; ?></td>
                  
                    <td class="font-weight-bold internal-data" style="text-align: center left;background-color: #eaeaea;"><?=round(floatval($val['cur_sales'])); ?></td>
                  
                    <td class="font-weight-bold internal-data" style="text-align: center left;background-color: #eaeaea;"><?=round(floatval($val['mob'])); ?>%</td>
                 
                    <td class="font-weight-bold internal-data" style="text-align: center left;background-color: #eaeaea;"><?=round(floatval($val['growth']));?>%</td>

                    <?php foreach ($pr_country_data as $countryname => $val): ?>
                  
                    <td class="font-weight-bold internal-data" style="text-align: center left;background-color: #eaeaea;"><?=round(floatval($val['pr_sales'])); ?></td>
                  
                    <td class="font-weight-bold internal-data" style="text-align: center left;background-color: #eaeaea;"><?=round(floatval($val['pr_mob'])); ?>%</td>
                 
                    <td class="font-weight-bold internal-data" style="text-align: center left;background-color: #eaeaea;"><?= round(floatval($val['pr_growth']));?>%</td>

                <?php endforeach; ?>
              </tr>

               <?php endforeach; ?>

          <tr>
            <?php foreach ($data as $categoryname => $val): ?>
           <tr>
                <td class="text-left"><?= $categoryname; ?></td>
                <td><?= round(floatval($val['cur_sales']),1);?></td>
                <td><?= round(floatval($val['mob'])); ?>%</td>
                <td><?= round(floatval($val['growth'])); ?>%</td>
                <td><?= round(floatval($val['pr_sales']),1);?></td>
                <td><?= round(floatval( $val['pr_mob'])); ?>%</td>
                <td><?= round(floatval( $val['pr_growth']));?>%</td>
          </tr>

             <?php endforeach; ?>
           </table>
          </div>
          <br>
          <br>

          <!-- //******************* Second table ******************************// -->
          <div class="col-md-12">
            <table class="table table-bordered table-hover text-dark table-hover text-center" style="font-size: 12px;">

              <tr>
                 <th class="internal-data bg-danger" rowspan="2" style="color: white; vertical-align: middle;">
                  Channel </th>
                 <th class="internal-data bg-danger text-center" colspan="3" style="color: white;">
                    2023 Q2
                 </th>
                
                 <th class="internal-data bg-danger text-center" colspan="3" style="color: white;">
                    2022 Q2
                 </th>
                
              </tr>
              <tr>
                 <td class="internal-data bg-danger text-center" style="color: white;">Sales (Mn USD)</td>
                 <td class="internal-data bg-danger text-center" style="color: white;">MOB
                 </td>
                 <td class="internal-data bg-danger text-center" style="color: white;">% Growth vs LY</td>
                 <td class="internal-data bg-danger text-center" style="color: white;">Sales (Mn USD)</td>
                 <td class="internal-data bg-danger text-center" style="color: white;">MOB
                 </td>
                 <td class="internal-data bg-danger" style="color: white;">% Growth vs LY</td>
                 
              </tr>
             <tr>
                 <?php foreach ($countrydata as $countryname => $val): ?>
              <tr>
                <td class="font-weight-bold internal-data" style="text-align: left;background-color: #eaeaea;"><?= $countryname; ?></td>
              
                <td class="font-weight-bold internal-data" style="text-align: center; left;background-color: #eaeaea;"><?=round(floatval($val['cur_sales']));?></td>
              
                <td class="font-weight-bold internal-data" style="text-align:center left;background-color: #eaeaea;"><?=round(floatval($val['mob']));?>%</td>
             
                <td class="font-weight-bold internal-data" style="text-align:center left;background-color: #eaeaea;"><?=round(floatval($val['growth'])); ?>%</td>

                <?php foreach ($pr_country_data as $countryname => $val): ?>
              
                <td class="font-weight-bold internal-data" style="text-align:center left;background-color: #eaeaea;"><?= round(floatval($val['pr_sales']),2);?></td>
              
                <td class="font-weight-bold internal-data" style="text-align: center left;background-color: #eaeaea;"><?= round(floatval($val['pr_mob'])); ?>%</td>
             
                <td class="font-weight-bold internal-data" style="text-align: center left;background-color: #eaeaea;"><?= round(floatval($val['pr_growth'])); ?>%</td>

               <?php endforeach; ?>
              </tr>
               <?php endforeach; ?>

              <tr>
            <?php foreach ($channel_data as $channelname => $val): ?>
              <tr>
                <td class="text-left"><?= $channelname; ?></td>
                <td ><?= round(floatval($val['cur_channel_sales']),2); ?></td>
                <td><?= round(floatval($val['mob']));?>%</td>
                <td><?= round(floatval($val['channel_growth']),2); ?></td>
                <td><?= round(floatval($val['pr_sales']),1); ?></td>
                <td><?= round(floatval($val['pr_mob'])); ?>%</td>
                <td ><?= round(floatval($val['pr_growth'])); ?>%</td>
              </tr>
             <?php endforeach; ?>
              
           </table>
          </div>
        </div>
      </section>

    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>
    <script type="text/javascript">
       
   <?= $this->endSection() ?> 

    <?= $this->endSection() ?> 
    

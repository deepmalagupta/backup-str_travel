<?php $uri = explode('/', $_SERVER['REQUEST_URI']);
$menu_data = getmenuname($uri[2]);
$menu = $menu_data['menu'];
$submenu = getmenuname($uri[2].'/'.$uri[3])['menu'];
$getallsubmenu = getallsubmenu($menu_data['id']);
 //echo '<pre>';print_r($getallsubmenu );exit();?>
<div class="containe wow fadeInUp">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb m-0 pb-0">
      <li class="breadcrumb-item"><a href="<?=base_url()?>home">Home</a></li>
      <li class="breadcrumb-item"><a href="<?= base_url().$uri[2]?>"><?=$menu?></a></li>
      <li class="breadcrumb-item active" aria-current="page"><?=$submenu?></li>
    </ol>
  </nav>
</div>

<div class="containe fadeInUp m-0 main-container-sec mt-2 row wow rounded shadow" data-wow-delay="0.1s">
  <div class="col-md-6">
    <h4 class="text-danger font-weight-bold"><?=strtoupper($submenu);?></h4>
    <!-- <p style="font-size: 13px;" class="m-0">This analysis looks at the brand performance across detailed filters at global, regional, and market level. -->
  </div>
  <div class="col-md-6 d-flex justify-content-end">
    <!-- <div><img src="<?=base_url()?>public/images/excel_icon.png" class="px-3"></div>
    <div><img src="<?=base_url()?>public/images/ppt_icon.png"></div> -->
    <div class="dropdown px-3">
      <button class="bg-white border-danger btn btn-secondary dropdown-toggle p-1 rounded" type="button" data-toggle="dropdown" aria-expanded="false" style="color: black;">
        Select a Report
        <img src="<?=base_url()?>public/images/select-icon.png">
      </button>
      <div class="dropdown-menu">
        <?php foreach($getallsubmenu as $key => $val){ 
          if($val['menu'] != $submenu){?>
        <a class="dropdown-item" href="<?=base_url().$val['pageurl']?>"><?= $val['menu']?></a>
        <!-- <a class="dropdown-item" href="#">Another action</a>
        <a class="dropdown-item" href="#">Something else here</a> -->
        <?php } } ?>
      </div>
    </div>
  </div>
</div>
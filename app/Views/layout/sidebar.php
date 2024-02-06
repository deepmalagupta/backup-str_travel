<?php $userdata = session()->userdata;
$access = json_decode($userdata['access'],true);
$access_module = array();
$access_menu = array();
if($access != null){
  foreach ($access as $key => $value) {
    $access_module[] = $key;
    foreach ($value as $key1 => $value1) {
      $access_menu[] = $key1;
    }
  }
}


$module = allmodule();  

 //echo '<pre>';print_r($module);exit(); ?>
<div class="sidebar">
      <div class="logo_details">
        <!-- <i class="bx bxl-audible icon"></i>
        <div class="logo_name">Code Effect</div> -->
        <i class="fa fa-bars bx bx-menu" id="btn" aria-hidden="true"></i>
        <!-- <i class="bx bx-menu" id="btn"></i> -->
      </div>
      <ul class="nav-list">
        <li>
          <a href="<?=base_url()?>home" class="active">
            <!-- <i class="bx bx-grid-alt"></i> -->
            <i class="fa fa-home active" aria-hidden="true"></i>
            <span class="link_name">Home</span>
          </a>
          <span class="tooltip">Home</span>
        </li>

        <?php 
        if($access != null){
        foreach($module as $key=>$value){
          if(in_array($value->id, $access_module)){?>
            <li class="menu-item">
          <a href="#">
            <!-- <i class="bx bx-grid-alt"></i> -->
            <?php if($value->module_name == 'User Management'){ ?>
            <i class="fa fa-user php_submenu" aria-hidden="true" id="btn_<?=$key+1?>"></i>
            <?php }elseif($value->module_name == 'Master'){?>
              <i class="fa fa-list php_submenu" aria-hidden="true" id="btn_<?=$key+1?>"></i>
              <?php }else{?>
                <i class="fa fa-plane php_submenu" aria-hidden="true" id="btn_<?=$key+1?>"></i>
              <?php } ?>
            <span class="link_name"><?= $value->module_name ?></span>
            <i class="fa fa-chevron-down arrow"></i>
          </a>
          <span class="tooltip"><?= $value->module_name ?></span>
          <ul class="px-1 submenu">
            <?php $menu = allmenu($value->id);
            foreach($menu as $k => $val){
              if(in_array($val->id, $access_menu)){ ?>
                <a href="<?=base_url() . $val->pageurl?>">
              <!-- <i class="bx bx-user"></i> -->
              <i class="fa fa-minus" aria-hidden="true"></i>
              <span class="link_name"><?= $val->menu?></span>
            </a>
            <?php  }
            } ?>
            
          </ul>
        </li>
        <?php }
        } }
        ?>

        
        <!-- <li class="menu-item">
          <a href="#">
            <i class="fa fa-plane" aria-hidden="true" id="btn_3"></i>
            <span class="link_name">Master</span>
            <i class="fa fa-chevron-down arrow"></i>
          </a>
          <span class="tooltip">Master</span>
          <ul class="px-1 submenu">
            <a href="listmodule">
              <i class="fa fa-minus" aria-hidden="true"></i>
              <span class="link_name">Module Master</span>
            </a>
            <a href="listmenu">
              <i class="fa fa-minus" aria-hidden="true"></i>
              <span class="link_name">Menu Master</span>
            </a>
          </ul>
        </li>
        <li class="menu-item">
          <a href="#">
            <i class="fa fa-plane" aria-hidden="true" id="btn_4"></i>
            <span class="link_name">Travel Retail CP</span>
            <i class="fa fa-chevron-down arrow"></i>
          </a>
          <span class="tooltip">Travel Retail CP</span>
          <ul class="px-1 submenu">
            <a href="generation_template">
              <i class="fa fa-minus" aria-hidden="true"></i>
              <span class="link_name">Generations</span>
            </a>
            <a href="beaute_research_template">
              <i class="fa fa-minus" aria-hidden="true"></i>
              <span class="link_name">Beaute Research</span>
            </a>
          </ul>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-map" aria-hidden="true"></i>
            <span class="link_name">Domestic CP</span>
          </a>
          <span class="tooltip">Domestic CP</span>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-users" aria-hidden="true"></i>
            <span class="link_name">Passenger Air Traffic</span>
          </a>
          <span class="tooltip">Analytics</span>
        </li> -->
      </ul>
    </div>
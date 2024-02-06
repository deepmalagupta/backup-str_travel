<?php $uri = explode('/', $_SERVER['REQUEST_URI']);
$menu_data = getmenuname($uri[2]);
$menu = $menu_data['menu'];
$submenu = getmenuname($uri[2].'/'.$uri[3])['menu'];
$getallsubmenu = getallsubmenu($menu_data['id']);
 
$filter_options = FILTER_OPTIONS;

$final_filter_options = $filter_options['Travel Retail CP'][$menu][$submenu];
// echo '<pre>';print_r($final_filter_options);exit();

if(in_array('year', $final_filter_options))
{ $datayear = yearFilter();?>
          <div class="px-3">
            <select class="custom-select">
              <option selected>Year</option>
              <?php foreach ($datayear as $year): ?>
                    <option value="<?= $year['datayear']; ?>"><?= $year['datayear']; ?></option>
                <?php endforeach; ?>
            </select>
          </div>
<?php
}if(in_array('period', $final_filter_options))
{ $period = periodFilter();?>
    <div class="px-3">
            <select class="custom-select">
              <option selected>Period</option>
              <?php foreach ($period as $val): ?>
                    <option value="<?= $val['period']; ?>"><?= $val['period']; ?></option>
                <?php endforeach; ?>
            </select>
          </div>
<?php }  
if(in_array('market', $final_filter_options))
{ $marketname = marketFilter();?>
    <div class="px-3">
            <select class="custom-select">
              <option selected>Market</option>
              <?php foreach ($marketname as $val): ?>
                    <option value="<?= $val['marketname']; ?>"><?= $val['marketname']; ?></option>
                <?php endforeach; ?>
            </select>
          </div>
<?php } 
if(in_array('category', $final_filter_options))
{ $categoryname = categoryFilter();?>
    <div class="px-3">
            <select class="custom-select">
              <option selected>Category</option>
              <?php foreach ($categoryname as $val): ?>
                    <option value="<?= $val['categoryname']; ?>"><?= $val['categoryname']; ?></option>
                <?php endforeach; ?>
            </select>
          </div>
<?php }   
?>


<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');
$routes->get('/', 'AuthController::login');

// $routes->get('/dashboard', 'DashboardController::index');
$routes->get('/login', 'AuthController::login');
$routes->add('/save_login', 'AuthController::processLogin');

$routes->get('logout', 'AuthController::logout');

/*route for user role*/
/*$routes->get('userrole', 'User::userrole');
$routes->add('/addrole', 'User::addrole');
$routes->post('/deleterole', 'User::deleterole');
$routes->post('/editrole', 'User::roleeditbyid');*/

/*route for accesscontrol*/
/*$routes->get('accesscontrol', 'User::accesscontrol');
$routes->post('/changeaccess', 'User::changeaccess');
$routes->post('/fetchroleaccess', 'User::fetchroleaccess');*/

/*route for users*/
$routes->get('userlist', 'User::userlist');
$routes->add('/adduser', 'User::adduser');
$routes->post('/deleteuser', 'User::deleteuser');
$routes->post('/usereditbyid', 'User::usereditbyid');

/*route for master module*/
$routes->get('listmodule', 'Mastermodule::listmodule');
$routes->add('/addmodule', 'Mastermodule::addmodule');
$routes->post('/deletemodule', 'Mastermodule::deletemodule');
$routes->post('/module_editbyid', 'Mastermodule::moduleeditbyid');

/*route for menu module*/
$routes->get('listmenu', 'MenuModule::listMenu');
$routes->add('/addmenu', 'MenuModule::addmenu');
$routes->post('/deletemenu', 'MenuModule::deletemenu');
$routes->post('/menu_editbyid', 'MenuModule::menueditbyid');
$routes->post('/fetchparent', 'MenuModule::fetchparent');

/*routes for temporary html pages*/
$routes->get('/beaute_research', 'Home::beaute_research_template');

$routes->get('beaute_research/market_overview_template', 'Home::market_overview_template');

$routes->get('beaute_research/brand_analysis_br_template', 'Home::brand_analysis_br_template');

$routes->get('beaute_research/group_analysis_br_template', 'BRGroupAnalysisController::index');

$routes->get('beaute_research/brand_benchmarking_br_template', 'Home::brand_benchmarking_br_template');

$routes->get('beaute_research/sku_deep_dive_template', 'TravelBeauteresearchController::skuDeepDive');

$routes->get('beaute_research/sku_benchmark_template', 'Home::sku_benchmark_template');

$routes->get('generation', 'Home::generation_template');

$routes->get('generation/regional_and_category_template', 'Home::regional_and_category_template');

$routes->get('generation/market_by_region_template', 'Home::market_by_region_template');

$routes->get('generation/category_and_channel_by_market_template', 'Home::category_and_channel_by_market_template');

$routes->get('generation/subcategory_by_market_template', 'Home::subcategory_by_market_template');

$routes->get('generation/group_analysis_template', 'Home::group_analysis_template');

$routes->get('generation/brand_analysis_template', 'Home::brand_analysis_template');

$routes->get('generation/brands_by_groups_template', 'Home::brands_by_groups_template');

$routes->get('generation/trex_analysis_template', 'Home::trex_analysis_template');

$routes->get('group_performance_template', function () {
    return view('template/group_performance');
});

$routes->get('brand_performance_template', function () {
    return view('template/brand_performance');
});

$routes->post('/getSkuDeepdiveData', 'TravelBeauteresearchController::getSkuDeepdiveData');
$routes->post('/exportSkuDeepdiveData', 'TravelBeauteresearchController::exportSkuDeepdiveData');

$routes->get('/home', 'Home::index');

// $routes->get('/brgroupanalysis', 'BRGroupAnalysisController::index');

$routes->post('/get_all_data_skubenchmark', 'BrSkuBenchmarkReport::get_all_data_skubenchmark');

$routes->get('/MarketOverview/', 'MarketOverViewController::index');

/********************** Routes For Market overview **************/
$routes->get('/MarketOverview/', 'MarketOverViewController::index');
// $routes->post('getCategoryData','MarketOverViewController::getCategoryData');


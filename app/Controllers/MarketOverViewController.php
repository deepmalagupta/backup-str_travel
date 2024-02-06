<?php
namespace App\Controllers;
use App\Models\MrkOverViewModel;
use CodeIgniter\Controller;
// ini_set('memory_limit', '1000M');
 ini_set('max_execution_time', 0); 
// ini_set('memory_limit','2048M');

  class MarketOverViewController extends Controller{

    public function __construct(){

        helper('common');
        $this->db = \Config\Database::connect('default');
    }

    public function index(){
        
        $data['datayear'] = yearFilter();
        $data['period'] = periodFilter();
        $data['marketname'] = marketFilter();
        // print_r($data);die;

        $MrkOverViewModel = new MrkOverViewModel();
        // echo "hi";die;

    // *************Get Catogry Data**********************//
            $cur_country_data = $MrkOverViewModel->getSingleMarketOverViewData(4, 2, 'Japan');

            // echo '<pre>';print_r($cur_country_data);die;
         
            $pre_country_data = $MrkOverViewModel->getSingleMarketOverViewData(3,2,'Japan');

            if($cur_country_data[0]['total_sale'] != 0 && $cur_country_data[0]['total_sale'] != " " && $pre_country_data[0]['total_sale'] != 0 && $pre_country_data[0]['total_sale'] != " ") {
                $growth = (($cur_country_data[0]['total_sale']/$pre_country_data[0]['total_sale']) -1) * 100;
                number_format((float)$growth, 1, '.', '');
                $countrygrowthset['Japan'] = array('growth'=>$growth);
            }else{
                $countrygrowthset['Japan'] = array('growth'=>'-');
                
            }
            $cur_count = round(($cur_country_data[0]['total_sale'] / 1000000),1);
            $countrydataset['Japan'] = array('cur_sales'=>$cur_count);
            

            $countrymobdata = $MrkOverViewModel->getSingleMarketOverViewData(4,2,'Japan');


            $countrymobdatacal = ($cur_country_data[0]['total_sale']/$countrymobdata[0]['total_sale']) * 100;
            $countrymobdataset['Japan'] = array('mob'=>$countrymobdatacal );

            $countrydataset1 = array_merge_recursive($countrydataset,$countrymobdataset);

            $pr_country_data = $MrkOverViewModel->getSingleMarketOverViewData(3,2,'Japan');

            
            $ls_country_data = $MrkOverViewModel->getSingleMarketOverViewData(2,2,'Japan');
             if($pr_country_data[0]['total_sale'] != 0 && $pr_country_data[0]['total_sale'] != " " && $ls_country_data[0]['total_sale'] != 0 && $ls_country_data[0]['total_sale'] != " "){
                $pr_growth = (($pr_country_data[0]['total_sale']/$ls_country_data[0]['total_sale']) -1) * 100;
                 number_format((float)$pr_growth, 1, '.', '');

                $prcountrygrowthset['Japan'] = array('pr_growth'=>$pr_growth);
            }else{
                $prcountrygrowthset['Japan'] = array('pr_growth'=>'-');
                
            }
            $precount = round(($pr_country_data[0]['total_sale'] / 1000000),1);
            $prcountrydataset['Japan'] = array('pr_sales'=>$precount);

            $prcountrymobdata = $MrkOverViewModel->getSingleMarketOverViewData(3,2,'Japan');
            $prcountrymobdatacal = ($pr_country_data[0]['total_sale']/$prcountrymobdata[0]['total_sale']) * 100;

            $prcountrymobdataset['Japan'] = array('pr_mob'=>$prcountrymobdatacal);

            $prcountrydataset1 = array_merge_recursive($prcountrydataset,$prcountrymobdataset);

            
            $cur_category = $MrkOverViewModel->getCategoryName(4,2,2);


            foreach($cur_category as $cd){
            $cur_data = $MrkOverViewModel->getMarketOverViewData(4,2,$cd['category_name']);  
            $pre_data = $MrkOverViewModel->getMarketOverViewData(3,2,$cd['category_name']); 

            if($cur_data[0]['total_sale'] != 0 && $cur_data[0]['total_sale'] != " " && $pre_data[0]['total_sale'] != 0 && $pre_data[0]['total_sale'] != " "){
                $growth = (($cur_data[0]['total_sale']/$pre_data[0]['total_sale']) -1) * 100;
                number_format((float)$growth, 1, '.', '');
                $growthset[$cd['category_name']] = array('growth'=>$growth);
            }else{
                $growthset[$cd['category_name']] = array('growth'=>'-');
            }

            // $cur_data = round(($cur_data[0]['total_sale'] / 1000000),1);
            // $curdataset[$cd['category_name']] = array('cur_sales'=>$cur_data);
            
            $curdataset[$cd['category_name']] = array('cur_sales'=>$cur_data[0]['total_sale']);

            $mobdata = $MrkOverViewModel->getMarketOverViewData(4,2,'all');

            $mobdatacal = ($cur_data[0]['total_sale']/$mobdata[0]['total_sale']) * 100;

            $mobdataset[$cd['category_name']] = array('mob'=>$mobdatacal);

            $dataset1 = array_merge_recursive($curdataset,$mobdataset);
            
        }

        $pre_category = $MrkOverViewModel->getCategoryName(3,2,2);
        foreach($pre_category as $cdpr){

            $pr_data = $MrkOverViewModel->getMarketOverViewData(3,2,$cdpr['category_name']);  
            $Last_data = $MrkOverViewModel->getMarketOverViewData(2,2,$cdpr['category_name']); 
            // echo "hi";die;

            if($pr_data[0]['total_sale'] != 0 && $pr_data[0]['total_sale'] != " " && $Last_data[0]['total_sale'] != 0 && $Last_data[0]['total_sale'] != " "){
                $growth = (($pr_data[0]['total_sale']/$Last_data[0]['total_sale']) -1) * 100;
                number_format((float)$growth, 1, '.', '');
                $pregrowthset[$cdpr['category_name']] = array('pr_growth'=>$growth);
            }else{
                $pregrowthset[$cdpr['category_name']] = array('pr_growth'=>'-');
            }

            $pre_data = round(($pr_data[0]['total_sale'] / 1000000),1);
            $crdataset[$cdpr['category_name']]  = array('pr_sales'=>$pre_data);
            // // print_r($curdataset);die;

            
           // $crdataset[$cdpr['category_name']] = array('pr_sales'=>$pr_data[0]['total_sale']);

            $mobdata = $MrkOverViewModel->getMarketOverViewData(3,2,'all');
          
            $prmobdatacal = ($pr_data[0]['total_sale']/$mobdata[0]['total_sale']) * 100;

            $prmobdataset[$cdpr['category_name']] = array('pr_mob'=>$prmobdatacal);

            $prdataset1 = array_merge_recursive($crdataset,$prmobdataset);
            
        }
       
        $data['crdata'] = array_merge_recursive($dataset1,$growthset);
        
        $data['prdata'] = array_merge_recursive($prdataset1,$pregrowthset);

        $data['data'] = array_merge_recursive($data['crdata'],$data['prdata']);

        $data['countrydata'] = array_merge_recursive($countrydataset1,$countrygrowthset);

        $data['pr_country_data'] = array_merge_recursive($prcountrydataset1,$prcountrygrowthset);
    // ******************** Catory data End************************//


    //******************** Get Channel data Start********************//

        $cur_country_data = $MrkOverViewModel->getSingleMarketOverViewData(4,2,'Japan');
        $pre_country_data = $MrkOverViewModel->getSingleMarketOverViewData(3,2,'Japan');

             if($cur_country_data[0]['total_sale'] != 0 && $cur_country_data[0]['total_sale'] != " " && $pre_country_data[0]['total_sale'] != 0 && $pre_country_data[0]['total_sale'] != " "){
                $growth = (($cur_country_data[0]['total_sale']/$pre_country_data[0]['total_sale']) -1) * 100;
                 number_format((float)$growth, 1, '.', '');

                $countrychannelgrowthset['Japan'] = array('growth'=>$growth);
            }else{
                $countrychannelgrowthset['Japan'] = array('growth'=>'-');
               
            }
            // print_r($countrychannelgrowthset);die;
            // $country_data = round(($cur_country_data[0]['total_sale'] / 1000000),1);
            // $countrydataset['Japan']  = array('cur_sales'=>$country_data);
            // // print_r($curdataset);die;
          
            $countrydataset['Japan'] = array('cur_sales'=>$cur_country_data[0]['total_sale']);

            $countrymobdata = $MrkOverViewModel->getSingleMarketOverViewData(4,2,'all');
            $countrymobdatacal = ($cur_country_data[0]['total_sale']/$countrymobdata[0]['total_sale']) * 100;
            $countrymobdataset['Japan'] = array('mob'=>$countrymobdatacal);
            $countrychanneldataset1 = array_merge_recursive($countrydataset,$countrymobdataset);


            $pr_country_data = $MrkOverViewModel->getSingleMarketOverViewData(3,2,'Japan');
            $ls_country_data = $MrkOverViewModel->getSingleMarketOverViewData(2,2,'Japan');
             
             if($pr_country_data[0]['total_sale'] != 0 && $pr_country_data[0]['total_sale'] != " " && $ls_country_data[0]['total_sale'] != 0 && $ls_country_data[0]['total_sale'] != " "){
                $pr_growth = (($pr_country_data[0]['total_sale']/$ls_country_data[0]['total_sale']) -1) * 100;
                 number_format((float)$pr_growth , 1, '.', '');
                $prcountrychnnelgrowthset['Japan'] = array('pr_growth'=>$pr_growth);
            }else{
                $prcountrychnnelgrowthset['Japan'] = array('pr_growth'=>'-');
                
            }
            // $precountry_data = round(($pr_country_data[0]['total_sale'] / 1000000),1);
            // $prcountrydataset['Japan']  = array('pr_sales'=>$precountry_data);

            
            $prcountrydataset['Japan'] = array('pr_sales'=>$pr_country_data[0]['total_sale']);

            $prcountrymobdata = $MrkOverViewModel->getSingleMarketOverViewData(3,2,'all');
          
            $prcountrymobdatacal = ($pr_country_data[0]['total_sale']/$prcountrymobdata[0]['total_sale']) * 100;

            $prcountrymobdataset['Japan'] = array('pr_mob'=>$prcountrymobdatacal);

            $prcountrychanneldataset1 = array_merge_recursive($prcountrydataset,$prcountrymobdataset);

            // Get the Current Channel name
            $cur_channel = $MrkOverViewModel->getChannelName(4,2);
            
            foreach($cur_channel as $channeldata){
                $cur_channel_data = $MrkOverViewModel->getMarketChannelOverViewData(4,2,$channeldata['channel_name']);  
                $pre_channel_data = $MrkOverViewModel->getMarketChannelOverViewData(3,2,$channeldata['channel_name']); 
                 

            if($cur_channel_data[0]['total_sale'] != 0 && $cur_channel_data[0]['total_sale'] != " " && $pre_channel_data[0]['total_sale'] != 0 && $pre_channel_data[0]['total_sale'] != " "){
                $growth = (($cur_channel_data[0]['total_sale']/$pre_channel_data[0]['total_sale']) -1) * 100;
                number_format((float)$growth , 1, '.', '');
                $channel_growthset[$channeldata['channel_name']] = array('channel_growth'=>$growth);

            }
            else
            {
                $channel_growthset[$channeldata['channel_name']] = array('channel_growth'=>'-');
            }
            
            $channel_curdataset[$channeldata['channel_name']] = array('cur_channel_sales'=>$cur_channel_data[0]['total_sale']);

            $channel_mobdata = $MrkOverViewModel->getMarketOverViewData(4,2,'all');
           
            $mobdatacal = ($cur_channel_data[0]['total_sale']/$channel_mobdata[0]['total_sale']) * 100;

            $channel_mobdataset[$channeldata['channel_name']] = array('mob'=>$mobdatacal);

            $channel_dataset = array_merge_recursive($channel_curdataset,$channel_mobdataset);
            
            
        }
        // print_r($channel_dataset);die;

        //  Get perivos chhanel data

        $pre_channel = $MrkOverViewModel->getChannelName(3,2);
        // print_r($pre_channel );die;


        foreach($pre_channel as $cpr){
            
            $pr_channel_data = $MrkOverViewModel->getMarketChannelOverViewData(3,2,$cpr['channel_name']);  
            $Last__channel_data = $MrkOverViewModel->getMarketChannelOverViewData(2,2,$cpr['channel_name']); 


            if($pr_channel_data[0]['total_sale'] != 0 && $pr_channel_data[0]['total_sale'] != " " && $Last__channel_data[0]['total_sale'] != 0 && $Last__channel_data[0]['total_sale'] != " "){
                $previos_channnel_growth = (($pr_channel_data[0]['total_sale']/$Last__channel_data[0]['total_sale']) -1) * 100;
                 number_format((float)$previos_channnel_growth , 1, '.', '');

                $pre_channel_growthset[$cpr['channel_name']] = array('pr_growth'=>$previos_channnel_growth);
            }else{
                $pre_channel_growthset[$cpr['channel_name']] = array('pr_growth'=>'-');
            }
            
            $cr_channel_dataset[$cpr['channel_name']] = array('pr_sales'=>$pr_channel_data[0]['total_sale']);

            $pre_channel_mobdata = $MrkOverViewModel->getMarketOverViewData(3,2,'all');
            
            $pr_channel_mobdatacal = ($pr_channel_data[0]['total_sale']/$pre_channel_mobdata[0]['total_sale']) * 100;

            $pr_channel_mobdataset[$cpr['channel_name']] = array('pr_mob'=>$pr_channel_mobdatacal);

            $pr_channel_dataset1 = array_merge_recursive($cr_channel_dataset,$pr_channel_mobdataset);
            
        }
        // print_r($pr_channel_dataset1);die;
       
        $data['cr_channel_data'] = array_merge_recursive($channel_dataset,$channel_growthset);
        
        $data['pr_channel_data'] = array_merge_recursive($pr_channel_dataset1,$pre_channel_growthset);

        $data['channel_data'] = array_merge_recursive($data['cr_channel_data'],$data['pr_channel_data']);
       // echo'<pre>'; print_r($data['channel_data'] );die;
        $data['channel_countrydata'] = array_merge_recursive($countrychanneldataset1,$countrychannelgrowthset);

        $data['channel_pr_country_data'] = array_merge_recursive($prcountrychanneldataset1,$prcountrychnnelgrowthset);

        // echo '<pre>'; print_r($data['channel_countrydata']);die;
        return view('marketoverview',  $data);

     }
     
}
  


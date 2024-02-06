<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\Model;
ini_set('memory_limit', '1000M');

class BRGroupAnalysisController extends Controller
{
    public function __construct(){
        helper('common');
        $this->db = \Config\Database::connect('default');
    }
    public function index(): string
    {
        
        $data['datayear'] = yearFilter();

        $data['period'] = periodFilter();

        $data['marketname'] = marketFilter();

        $data['categoryname'] = categoryFilter();

        $cur_data = $this->getBrGroupAnalysisData(3,2);
        
        $curdataset = $predataset =  $dataset1 = $growthset = $marketgrowthset = $dataset = array();
        foreach ($cur_data as $key => $value)
         {
            $curdataset[$value['group_name']] = array('cur_sales'=>number_format((float)$value['sales'], 2, '.', ''));
            
        }

        $pre_data = $this->getBrGroupAnalysisData(2,2);

        foreach ($pre_data as $keyp => $valuep)
        {
            $predataset[$valuep['group_name']] = array('pre_sales'=>number_format((float)$valuep['sales'], 2, '.', ''));
        }

        $dataset1 = array_merge_recursive($curdataset,$predataset);

        $total_cur_sales = (array_sum(array_column($curdataset, 'cur_sales')));

        $total_pre_sales = array_sum(array_column($predataset, 'pre_sales'));


        foreach ($dataset1 as $keyd => $valued) {
            // code...
            if($valued['cur_sales'] != 0 && $valued['cur_sales'] != " " && $valued['pre_sales'] != 0 && $valued['pre_sales'] != " ")
                {
                    $growth = (($valued['cur_sales']/$valued['pre_sales']) -1) * 100;
                    $growthset[$keyd] = array('growth'=>number_format((float)$growth, 2, '.', ''));
                }else{
                    $growthset[$keyd] = array('growth'=>'-');
                }

            $market_growth = "-";
            if($valued['cur_sales'] != 0 && $valued['cur_sales'] != " " && $valued['pre_sales'] != 0 && $valued['pre_sales'] != " ")
                {
                    $sale_diff = $valued['cur_sales'] - $valued['pre_sales'];
                    $total_sale_diff =  $total_cur_sales - $total_pre_sales;

                    if($sale_diff != 0 && $total_sale_diff != 0)
                    {
                        $market_growth = $sale_diff / $total_sale_diff;
                        $marketgrowthset[$keyd] = array('marketgrowth'=>number_format((float)$market_growth, 2, '.', ''));
                        
                    }else{
                        $marketgrowthset[$keyd] = array('marketgrowth'=>'-');
                        

                    }
                }  
        }
        
        $data['data'] = array_merge_recursive($dataset1,$growthset);
        
        $data['data'] = array_merge_recursive($data['data'],$marketgrowthset);
        
        $final_array['total_row_data']['cur_sales'] = $total_cur_sales;
        $final_array['total_row_data']['pre_sales'] = $total_pre_sales;
        $final_array['total_row_data']['growth'] = $total_sale_diff;
        $final_array['total_row_data']['marketgrowth'] = $market_growth;
        $final_array['group_data'] = $data['data'];
        $data['final_array'] = $final_array;

        return view('group_analysis', $data);
    }

    public function getBrGroupAnalysisData($datayear,$period)
    {
        $builder = $this->db->table('brdata');
        
        $groupQuery = $builder->select('groups.groupname as group_name,brdata.groupname as groupid, sum(sale) as sales');
                      $builder->where('datayear',$datayear);
                      $builder->where('period',$period);
                      // $builder->whereIn('country',array(1,2,3,4));
                      $builder->groupBy('groups.groupname');
                      $builder->join('groups', 'groups.id = brdata.groupname', 'left');
                        
        $data = $groupQuery->get()->getResultArray();
        return $data;
        
    }
    
}
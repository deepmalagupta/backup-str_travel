<?php
namespace App\Controllers;

use CodeIgniter\Controller;
// use App\Models\BeauteresearchDataModel;
use \Hermawan\DataTables\DataTable;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx; 
ini_set('max_execution_time', 0); 
ini_set('memory_limit','2048M');

class BrSkuBenchmarkReport extends Controller
{

	public function __construct()
    {
        // $this->beauteresearchdataobj = new BeauteresearchDataModel();
        $this->db = \Config\Database::connect(); 
    }

    //Br_sku_benchmark View, Sourav. Starts here
	    public function get_all_data_skubenchmark()
	    {
	    	$shiseido_brand = $this->request->getVar('shiseido_brand');
	        $shiseido_sku = $this->request->getVar('shiseido_sku');
	    	$comp1_brand = $this->request->getVar('comp1_brand');
	        $comp1_sku = $this->request->getVar('comp1_sku');
	        $comp2_brand = $this->request->getVar('comp2_brand');
	        $comp2_sku = $this->request->getVar('comp2_sku');
	        $comp3_brand = $this->request->getVar('comp3_brand');
	        $comp3_sku = $this->request->getVar('comp3_sku');
	        $comp4_brand = $this->request->getVar('comp4_brand');
	        $comp4_sku = $this->request->getVar('comp4_sku');
	        // print_r($comp4_brand.$comp4_sku);die;

	        $selected_brand_sku_array=array(array($shiseido_brand, $shiseido_sku),
	    									array($comp1_brand, $comp1_sku),
	    									array($comp2_brand, $comp2_sku),
	    									array($comp3_brand, $comp3_sku),
	    									array($comp4_brand, $comp4_sku));    

	        $latest_two_years = $this->getlatestyears();
	        foreach($latest_two_years as $LTY){
	        	$datayearidsarray[] = $LTY['id'];
	        }

	        $latest_two_years_period_array = $this->getlatestyearsperiodarray($datayearidsarray);
	        foreach($latest_two_years_period_array as $LTYPA){
	        	$datayear_period_array[$LTYPA['datayear']][] = $LTYPA['period'];
	        }
	        // print_r($datayear_period_array);die;

	        $data['skubenchmark_chart_data'] = $this->get_skubenchmark_chart_data($selected_brand_sku_array,$datayearidsarray,$datayear_period_array);

	        $data['skubenchmark_table_data'] = $this->get_skubenchmark_table_data($selected_brand_sku_array,$datayearidsarray,$datayear_period_array);
	            
	        // print_r($data);die;
	        echo json_encode($data,JSON_NUMERIC_CHECK);

	    }

	    public function get_skubenchmark_chart_data($selected_brand_sku_array,$datayearidsarray,$datayear_period_array)
	    {
	    	foreach($selected_brand_sku_array as $SBSA){
	    		$brandid = $SBSA[0];
	    		$productname = $SBSA[1];

	    		$years_period_data_array = $this->getyears_period_data_array($brandid,$productname,$datayearidsarray);
		        foreach($years_period_data_array as $YPDA){
		        	$all_data_datayear_period_array[$YPDA['datayear']][$YPDA['period']] = $YPDA['ytdvalue'];
		        }
		        // print_r($all_data_datayear_period_array);die;

		        foreach($datayear_period_array as $datayearkey => $DYPA){
		        	$curryear = $datayearkey;
		        	$previousyear = $datayearkey-1;
		        	foreach($DYPA as $value_periodname){
		        		$chart_xaxis_yearperiod[] = $curryear.' '.$value_periodname;

		        		$curr_ytdvalue = $all_data_datayear_period_array[$curryear][$value_periodname];
		        		$productnamewise_ytdvalue[] = $curr_ytdvalue;

		        		// $final_data_array[$productname][$curryear][$value_periodname] = $growth;
		        	}

		        }
		        $final_data_array[] = array('data' => $productnamewise_ytdvalue,
	                                    'name' => $productname);
		        unset($productnamewise_ytdvalue);
	    	}
	    	$chart_xaxis_yearperiod_unique = array_unique($chart_xaxis_yearperiod);

	    	$BR_Sku_Benchmark_chart_ResultArray = array(
	                                    'yearly_data' => $final_data_array,
	                                    'chart_xaxis' => $chart_xaxis_yearperiod_unique);

	        // print_r($Makeup_Segment_Product_ResultArray);die;
	        return $BR_Sku_Benchmark_chart_ResultArray;
	    }

	    public function get_skubenchmark_table_data($selected_brand_sku_array,$datayearidsarray,$datayear_period_array)
	    {
	    	foreach($selected_brand_sku_array as $SBSA){
	    		$brandid = $SBSA[0];
	    		$productname = $SBSA[1];

	    		$brandname_on_id_val = $this->getbrandname_on_id($brandid);
	    		foreach($brandname_on_id_val as $BOIV){
		        	$brandname_on_id= $BOIV['brandname'];
		        }

	    		$years_period_data_array = $this->getyears_period_data_array($brandid,$productname,$datayearidsarray);
		        foreach($years_period_data_array as $YPDA){
		        	$all_data_datayear_period_array[$YPDA['datayear']][$YPDA['period']] = $YPDA['ytdvalue'];
		        }
		        // print_r($datayear_period_array);die;

		        foreach($datayear_period_array as $datayearkey => $DYPA){
		        	$curryear = $datayearkey;
		        	$previousyear = $datayearkey-1;
		        	foreach($DYPA as $value_periodname){
		        		$curr_ytdvalue = $all_data_datayear_period_array[$curryear][$value_periodname];
		        		$previous_ytdvalue = $all_data_datayear_period_array[$previousyear][$value_periodname];

		        		if(!empty($curr_ytdvalue) && !empty($previous_ytdvalue)){
		        			$growth = (($curr_ytdvalue-$previous_ytdvalue)/$previous_ytdvalue)*100;
		        		}else{
		        			$growth = '';
		        		}
		        		
		        		$final_data_array[$brandname_on_id.' '.$productname][$curryear][$value_periodname] = $growth;
		        	}

		        }
	    	}
	    	// print_r($final_data_array);die;

	    	$BR_Sku_Benchmark_tbl_ResultArray = array(
	                                    'yearly_data' => $final_data_array,
	                                    'tbl_header' => $datayear_period_array);

	        // print_r($Makeup_Segment_Product_ResultArray);die;
	        return $BR_Sku_Benchmark_tbl_ResultArray;
	    }

    //Br_sku_benchmark View, Sourav. Ends here

    //SQL Queries for Br_sku_benchmark data. Starts here
	    public function getlatestyears()
	    {
	    	$query = "SELECT id,datayear FROM datayear ORDER BY datayear desc LIMIT 3";
	    	$mainquery=$this->db->query($query);

	        $result = $mainquery->getResultArray();
	        // print_r($data);die;
	        return $result;
	    }

	    public function getbrandname_on_id($brandid)
	    {
	    	$query = "SELECT brandname FROM brand WHERE id = $brandid";
	    	$mainquery=$this->db->query($query);

	        $result = $mainquery->getResultArray();
	        // print_r($result);die;
	        return $result;
	    }

	    public function getlatestyearsperiodarray($datayearidsarray)
	    {
	    	array_pop($datayearidsarray);
	    	$builder = $this->db->table('brdata');

	        $mainquery = $builder->select('datayear.datayear,period.period');
	                      $builder->whereIn('brdata.datayear',$datayearidsarray);
	                      $builder->groupBy(array('datayear','period'));
	                      $builder->join('datayear', 'datayear.id = brdata.datayear', 'left');
	                      $builder->join('period', 'period.id = brdata.period', 'left');
	                        
	        $result = $mainquery->get()->getResultArray();
	        // print_r($data);die;
	        return $result;
	    }

	    public function getyears_period_data_array($brandid,$productname,$datayearidsarray)
	    {
	    	$builder = $this->db->table('brdata');

	        $mainquery=	$builder->select('datayear.datayear,period.period,SUM(sale) AS ytdvalue');
	        			$builder->whereIn('brdata.brand',array($brandid));
	        			$builder->whereIn('brdata.product',array($productname));
	                    $builder->whereIn('brdata.datayear',$datayearidsarray);
	                  	$builder->groupBy(array('datayear','period'));
	                  	$builder->join('datayear', 'datayear.id = brdata.datayear', 'left');
	                  	$builder->join('period', 'period.id = brdata.period', 'left');
	                        
	        $result = $mainquery->get()->getResultArray();
	        // print_r($data);die;
	        return $result;
	    }
    //SQL Queries for Br_sku_benchmark data. Ends here

}

?>
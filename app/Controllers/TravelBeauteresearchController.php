<?php

namespace App\Controllers;

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;  

class TravelBeauteresearchController extends BaseController
{
    public function __construct()
    {
        $this->viewurl = TRAVEL_REPORTS_URL.'/beauteresearch/';
        $this->db = \Config\Database::connect();
    }

    public function index(): string
    {
        return view('dashboard');
    }

    public function skuDeepDive()
    {
        $data['yearFilter'] = yearFilter();
        $data['periodFilter'] = periodFilter();
        $data['marketFilter'] = marketFilter();
        $data['categoryFilter'] = categoryFilter();
        $data['subCategoryFilter'] = ['subcat1','subcat2'];
        $data['detailCategoryFilter'] = ['detailcat1','detailcat2'];
        $data['brandFilter'] = brandFilter();




        // echo '<pre>';
        // print_r($final_arr);die;


        // foreach ($cur_data as $key => $value)
        // {
        //     $cur_dataset[$value['groupname']][$value['brandname']][$value['product']] = array('cur_sales'=>$value['sales']);
        // }


        // $datayear = 2;
        // $period = 1;
        // $country = 2;

        // $pre_data = $this->getSkuDataByProduct($datayear,$period,$country);
        // $total_pre_sales = $this->getAllSkuDataSales($datayear,$period,$country);

        // foreach ($pre_data as $keyp => $valuep)
        // {
        //     $pre_dataset[$valuep['groupname']][$valuep['brandname']][$valuep['product']] = array('pre_sales'=>$valuep['sales']);
        // }

        // echo '<pre>';
        // print_r($sku_data);die;

        // $main_dataset = array_merge_recursive($cur_dataset,$pre_dataset);

        // foreach ($main_dataset as $dataset1_key => $dataset1_value) 
        // {
        //     foreach ($dataset1_value as $dataset2_key => $dataset2_value) 
        //     {
        //         foreach ($dataset2_value as $dataset3_key => $dataset3_value) 
        //         {
        //             if($dataset3_value['cur_sales'] != 0 && $dataset3_value['cur_sales'] != " " && $dataset3_value['pre_sales'] != 0 && $dataset3_value['pre_sales'] != " ")
        //             {
        //                 $growth = (($dataset3_value['cur_sales'] / $dataset3_value['pre_sales']) -1) * 100;

        //                 $main_dataset[$dataset1_key][$dataset2_key][$dataset3_key]['growth'] = $growth;
        //             }
        //             else
        //             {
        //                 $main_dataset[$dataset1_key][$dataset2_key][$dataset3_key]['growth'] = array('growth'=>'-');
        //             }

        //             $growth_contri = ($dataset3_value['cur_sales'] - $dataset3_value['pre_sales']) / ($total_cur_sales - $total_pre_sales) * 100;

        //             $main_dataset[$dataset1_key][$dataset2_key][$dataset3_key]['growth_contribution'] = $growth_contri;
        //         }
        //     }
        // }

        // $main_dataset['total_data']['total_cur_sales'] = $total_cur_sales;
        // $main_dataset['total_data']['total_cur_growth'] = (($total_cur_sales / $total_pre_sales) -1) * 100;
        // $main_dataset['total_data']['total_cur_growth_contri'] = ($total_cur_sales - $total_pre_sales) / ($total_cur_sales - $total_pre_sales) * 100;

        // echo '<pre>';
        // print_r($final_arr);die;

        $data['sku_data'] = json_decode($this->getSkuDeepdiveData(),true);

        // echo '<pre>';
        // print_r($data['sku_data']);die;

        return view($this->viewurl.'sku_deep_dive',$data);
    }

    public function getSkuDeepdiveData()
    {
        // $datayear = $this->request->getVar('datayear');

        $datayear = 3;
        $period = 1;
        $country = 2;
        $category = 1;

        $cur_data = $this->getSkuDataByProduct($datayear,$period,$country,$category);
        $total_cur_sales = $this->getAllSkuDataSales($datayear,$period,$country,$category);

        $datayear = 2;
        $period = 1;
        $country = 2;
        $category = 1;

        $pre_data = $this->getSkuDataByProduct($datayear,$period,$country,$category);
        $total_pre_sales = $this->getAllSkuDataSales($datayear,$period,$country,$category);
        


        foreach ($cur_data as $key => $value)
        {
            $cur_sales = $value['sales'];

            $pre_sales = $this->getValueByMultipleColumn($value['groupname'],$value['brandname'],$value['product'],$pre_data);

            $cur_data[$key]['sales'] = $cur_sales / 1000;

            $cur_data[$key]['pre_sales'] = $pre_sales / 1000;

            if($cur_sales != 0 && $cur_sales != " " && $pre_sales != 0 && $pre_sales != " ")
            {
                $cur_data[$key]['evolution'] = (($cur_sales / $pre_sales) - 1) * 100;
            }
            else
            {
                $cur_data[$key]['evolution'] = '-';
            }

            if($cur_sales != 0 && $cur_sales != " " && $pre_sales != 0 && $pre_sales != " " && $total_cur_sales != 0 && $total_cur_sales != " " && $total_pre_sales != 0 && $total_pre_sales != " ")
            {
                $cur_data[$key]['market_growth'] = ($cur_sales - $pre_sales) / ($total_cur_sales - $total_pre_sales) * 100;
            }
            else
            {
                $cur_data[$key]['market_growth'] = '-';
            }

            
        }

        $final_arr['sku_data'] = $cur_data;

        $final_arr['total_sku_data']['sales'] = $total_cur_sales;
        $final_arr['total_sku_data']['pre_sales'] = $total_pre_sales;


        if($total_cur_sales != 0 && $total_cur_sales != " " && $total_pre_sales != 0 && $total_pre_sales != " ")
        {
            $final_arr['total_sku_data']['evolution'] = (($total_cur_sales / $total_pre_sales) - 1) * 100;

            $final_arr['total_sku_data']['market_growth'] = ($total_cur_sales - $total_pre_sales) / ($total_cur_sales - $total_pre_sales) * 100;
        }
        else
        {
            $final_arr['total_sku_data']['evolution'] = '-';
            $final_arr['total_sku_data']['market_growth'] = '-';
        }

        return json_encode($final_arr);
        
    }

    public function exportSkuDeepdiveData()
    {
        $all_sku_data = json_decode($this->getSkuDeepdiveData(),true);

        $spreadsheet = new Spreadsheet();

        $NormalBoldFontStyleArray = array(
                                'font'  => array(
                                'bold'  => true,
                                'color' => array('rgb' => '000000'),
                                'size'  => 11,
                                'name'  => 'Calibri'
                            ));

        $sheet = $spreadsheet->getActiveSheet();

        $sheet->setCellValue('A1', 'GROUP');

        $sheet->setCellValue('B1', "BRAND");

        $sheet->setCellValue('C1', 'SKU');

        $sheet->setCellValue('D1', '2022 Q1');
        $sheet->setCellValue('D2', "Sales ('000 USD)");

        $sheet->setCellValue('E1', '2021 Q1');
        $sheet->setCellValue('E2', "Sales ('000 USD)");

        $sheet->setCellValue('F1', '2022 Q2 vs 2021 Evolution');
        $sheet->setCellValue('G1', 'SKU Contribution to Market Growth');

        $sheet->getStyle('A1')->applyFromArray($NormalBoldFontStyleArray);
        $sheet->getStyle('B1')->applyFromArray($NormalBoldFontStyleArray);
        $sheet->getStyle('C1')->applyFromArray($NormalBoldFontStyleArray);
        $sheet->getStyle('D1')->applyFromArray($NormalBoldFontStyleArray);
        $sheet->getStyle('D2')->applyFromArray($NormalBoldFontStyleArray);
        $sheet->getStyle('E1')->applyFromArray($NormalBoldFontStyleArray);
        $sheet->getStyle('E2')->applyFromArray($NormalBoldFontStyleArray);
        $sheet->getStyle('F1')->applyFromArray($NormalBoldFontStyleArray);
        $sheet->getStyle('G1')->applyFromArray($NormalBoldFontStyleArray);

        $sheet->mergeCells("A1:A2");
        $sheet->mergeCells("B1:B2");
        $sheet->mergeCells("C1:C2");
        $sheet->mergeCells("F1:F2");
        $sheet->mergeCells("G1:G2");

        $sheet->getStyle('A1')->getAlignment()->setHorizontal('center')->setVertical('center');
        $sheet->getStyle('B1')->getAlignment()->setHorizontal('center')->setVertical('center');
        $sheet->getStyle('C1')->getAlignment()->setHorizontal('center')->setVertical('center');
        $sheet->getStyle('F1')->getAlignment()->setHorizontal('center')->setVertical('center');
        $sheet->getStyle('G1')->getAlignment()->setHorizontal('center')->setVertical('center');

        $sku_data = $all_sku_data['sku_data'];
        $total_row_data = $all_sku_data['total_sku_data'];

        //total row start
        
            $sheet->setCellValue('A3', 'TOTAL');
            $sheet->mergeCells("A3:C3");
            $sheet->getStyle('A3')->getAlignment()->setHorizontal('center')->setVertical('center');
            $sheet->getStyle('A3')->applyFromArray($NormalBoldFontStyleArray);

            $sheet->setCellValue('D3', $total_row_data['sales']);
            $sheet->getStyle('D3')->applyFromArray($NormalBoldFontStyleArray);
            $sheet->getStyle('D3')->getNumberFormat()->setFormatCode('0.0');

            $sheet->setCellValue('E3', $total_row_data['pre_sales']);
            $sheet->getStyle('E3')->applyFromArray($NormalBoldFontStyleArray);
            $sheet->getStyle('E3')->getNumberFormat()->setFormatCode('0.0');

            $sheet->setCellValue('F3', $total_row_data['evolution']/100);
            $sheet->getStyle('F3')->applyFromArray($NormalBoldFontStyleArray);
            $sheet->getStyle('F3')->getNumberFormat()->setFormatCode(\PhpOffice\PhpSpreadsheet\Style\NumberFormat::FORMAT_PERCENTAGE_0);

            $sheet->setCellValue('G3', $total_row_data['market_growth']/100);
            $sheet->getStyle('G3')->applyFromArray($NormalBoldFontStyleArray);
            $sheet->getStyle('G3')->getNumberFormat()->setFormatCode(\PhpOffice\PhpSpreadsheet\Style\NumberFormat::FORMAT_PERCENTAGE_0);
            

        //total row end


        //sku data start

            $excel_row = 4;
            $excel_column = 'A';

            foreach ($sku_data as $key => $value) 
            {
                $excel_column = 'A';

                $sheet->setCellValue($excel_column.$excel_row, $value['groupname']);
                $excel_column++;

                $sheet->setCellValue($excel_column.$excel_row, $value['brandname']);
                $excel_column++;

                $sheet->setCellValue($excel_column.$excel_row, $value['product']);
                $excel_column++;

                $sheet->setCellValue($excel_column.$excel_row, $value['sales']);
                $sheet->getStyle($excel_column.$excel_row)->getNumberFormat()->setFormatCode('0.0');
                $excel_column++;

                $sheet->setCellValue($excel_column.$excel_row, $value['pre_sales']);
                $sheet->getStyle($excel_column.$excel_row)->getNumberFormat()->setFormatCode('0.0');
                $excel_column++;

                $sheet->setCellValue($excel_column.$excel_row, $value['evolution']/100);
                $sheet->getStyle($excel_column.$excel_row)->getNumberFormat()->setFormatCode(\PhpOffice\PhpSpreadsheet\Style\NumberFormat::FORMAT_PERCENTAGE_0);
                $excel_column++;

                $sheet->setCellValue($excel_column.$excel_row, $value['market_growth']/100);
                $sheet->getStyle($excel_column.$excel_row)->getNumberFormat()->setFormatCode(\PhpOffice\PhpSpreadsheet\Style\NumberFormat::FORMAT_PERCENTAGE_0);
                $excel_column++;


                $excel_row++;
            }

        //sku data end
        

        $writer = new Xlsx($spreadsheet);

        $file_name = "Sku-Deep-Dive_data.xlsx";

        header("Content-Type: application/vnd.ms-excel");
        header('Content-Disposition: attachment; filename="' . basename($file_name) . '"');

        $writer->save('php://output');
        $xlsData = ob_get_contents();
        ob_end_clean();

        $response =  array(
                'op' => 'ok',
                'file' => "data:application/vnd.ms-excel;base64,".base64_encode($xlsData),
                'file_name' => $file_name
            );

        die(json_encode($response));
    }

    public function getSkuDataByProduct($datayear,$period,$country,$category)
    {
        $table = $this->db->table('brdata');

        $where_array = ['datayear' => $datayear, 'period' => $period, 'country' => $country, 'category' => $category];

        $table->join('groups', 'groups.id = brdata.groupname', 'LEFT');
        $table->join('brand', 'brand.id = brdata.brand', 'LEFT');
        $table->select('groups.groupname AS groupname, brand.brandname as brandname, SUM(brdata.sale) AS sales,brdata.product as product, brdata.category as category')->where($where_array);

        $sku_data = $table->groupBy('brdata.groupname, brdata.brand, brdata.product');
        $sku_data = $table->orderBy('sales','DESC');

        $sku_data = $table->get()->getResultArray(); 

        // echo '<pre>';
        // print_r($sku_data);die;

        return $sku_data;

        // return $manufacturer;
    }

    public function getAllSkuDataSales($datayear,$period,$country,$category)
    {
        $table = $this->db->table('brdata');

        $where_array = ['datayear' => $datayear, 'period' => $period, 'country' => $country, 'category' => $category];

        $table->join('groups', 'groups.id = brdata.groupname', 'LEFT');
        $table->join('brand', 'brand.id = brdata.brand', 'LEFT');
        $table->select('SUM(brdata.sale) AS sales')->where($where_array);

        $sales = $table->get()->getResultArray(); 

        if(isset($sales[0]) && isset($sales[0]['sales']) != '')
        {
            return $sales[0]['sales'];
        }
        else
        {
            return 0;
        }
    }

    public function getValueByMultipleColumn($groupname,$brandname,$product,$arr)
    {
        foreach ($arr as $key => $value)
        {
            if($value['groupname'] == $groupname && $value['brandname'] == $brandname && $value['product'] == $product)
            {
                return $value['sales'];
            }
        }

    }
}

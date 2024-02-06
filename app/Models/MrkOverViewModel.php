<?php 
namespace App\Models;
 
use CodeIgniter\Model;
 
class MrkOverViewModel extends Model
{
    protected $DBGroup              = 'default';
    protected $table                = '';
    protected $primaryKey           = 'brdataid';
    protected $useAutoIncrement     = true;
    protected $insertID             = 0;
    protected $returnType           = 'array';
    protected $useSoftDelete        = false;
    protected $protectFields        = true;
    protected $allowedFields        = [
                  'id', 
                  'datayear', 
                  'period', 
                  'market',  
                  'category', 
                  'groupname',
                  'sale',
                ];
 
    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->builder = $this->db->table('brdata'); // tabel builders  
    }

    public function getMarketOverViewData($datayear,$period,$category_name)
    {
        $builder = $this->db->table('brdata');
        $data = $builder
                ->select('category.categoryname as category_name, brdata.category as categoryid, SUM(brdata.sale) AS total_sale')
                ->join('category', 'category.id = brdata.category', 'left')
                ->where('brdata.datayear', $datayear)
                ->where('brdata.period', $period); 
                if($category_name != 'all'){
                   $builder->where('category.categoryname', $category_name);
                }
                $builder->where('brdata.country', 4);  
                $data = $builder->get()->getResultArray();
        return $data;
         
    }

    public function getSingleMarketOverViewData($year,$period,$country){

        $builder = $this->db->table('brdata');
        $data = $builder
                ->select('market.marketname as market, brdata.country as countryid, SUM(brdata.sale) AS total_sale')
                ->join('market', 'market.id = brdata.country', 'left')
                ->where('brdata.datayear', $year)
                ->where('brdata.period', $period); 
                if($country != 'all'){
                   $builder->where('market.marketname', $country);
                }
                $data = $builder->get()->getResultArray();
               
        return $data;

    }

    public function getCategoryName($year,$period,$country)
    {
        $builder = $this->db->table('brdata');
        $data = $builder
                ->select('category.categoryname as category_name, brdata.category as categoryid')
                ->distinct()
                ->join('category', 'category.id = brdata.category', 'left')
                ->where('brdata.datayear', $year)
                ->where('brdata.period', $period)
                ->where('brdata.country', $country)   
                ->get()
                ->getResultArray();
               
        return $data;
         
    }

    public function getSingleMarketoverName($datayear,$period)
    {
        $builder = $this->db->table('brdata');
        $data = $builder
                ->select('market.marketname as market_name, brdata.country as country')
                ->distinct()
                ->join('market', 'market.id = brdata.country', 'left')
                ->where('brdata.datayear', $datayear)
                ->where('brdata.period', $period); 
                // ->where('brdata.country', $country)  
                $data = $builder->get()->getResultArray();
                
        return $data;
         
    }


     public function getChannelName($year,$period)
    {
        $builder = $this->db->table('brdata');
        $data = $builder
                ->select('channels.channelname as channel_name, brdata.channel as channel_id')
                ->distinct()
                ->join('channels', 'channels.id = brdata.channel', 'left')
                ->where('brdata.datayear', $year)
                ->where('brdata.period', $period)
                // ->where('brdata.country', $country)   
                ->get()
                ->getResultArray();
        return $data;
         
    }
    public function getMarketChannelOverViewData($datayear,$period,$channel_name)
    {
        $builder = $this->db->table('brdata');
        $data = $builder
                ->select('channels.channelname as channel_name, brdata.channel as channel_id, SUM(brdata.sale) AS total_sale')
                ->join('channels', 'channels.id = brdata.channel', 'left')
                ->where('brdata.datayear', $datayear)
                ->where('brdata.period', $period); 
                if($channel_name != 'all'){
                   $builder->where('channels.channelname', $channel_name);
                }
                $builder->where('brdata.country', 4);  
                $data = $builder->get()->getResultArray();
        return $data;
         
    }

    public function getDataForChart($datayear,$period,$country)
    {
        $builder = $this->db->table('brdata');
        $builder->select('period.period, datayear.datayear, SUM(sale) AS total_sale');
        $builder->distinct();
        $builder->join('period', 'period.id = brdata.period', 'LEFT');
        $builder->join('datayear', 'datayear.id = brdata.datayear', 'LEFT');
        $builder->where('brdata.country', $country);  
        $builder->groupBy('period.period, datayear.datayear');
        $builder->orderBy('datayear.datayear');
        $result = $builder->get()->getResultArray();
        return $result;

                 
    }


}




// SELECT DISTINCT category.categoryname, brdata.category FROM brdata LEFT JOIN category ON brdata.category = category.id WHERE period = 2 AND datayear = 3 AND country = 2;



// SELECT DISTINCT market.marketname, brdata.country FROM brdata LEFT JOIN category ON brdata.category = category.id WHERE period = 2 AND datayear = 3 AND country = 2;
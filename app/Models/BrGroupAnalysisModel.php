<?php 
namespace App\Models;
 
use CodeIgniter\Model;
 
class BrGroupAnalysisModel extends Model
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
                ];
 
    // Dates
    protected $useTimestamps        = false;
    protected $dateFormat           = 'datetime';
    protected $createdField         = 'created_at';
    protected $updatedField         = 'updated_at';
    protected $deletedField         = 'deleted_at';
 
    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;
 
    // Callbacks
    protected $allowCallbacks       = true;
    protected $beforeInsert         = [];
    protected $afterInsert          = [];
    protected $beforeUpdate         = [];
    protected $afterUpdate          = [];
    protected $beforeFind           = [];
    protected $afterFind            = [];
    protected $beforeDelete         = [];
    protected $afterDelete          = [];
 
    protected $db, $builder;
 
    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->builder = $this->db->table('beauteresearch_sellout_data'); // tabel builders  
    }
}
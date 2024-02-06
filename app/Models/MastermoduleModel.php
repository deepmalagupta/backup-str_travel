<?php

namespace App\Models;

use CodeIgniter\Model;

class MastermoduleModel extends Model
{
	protected $DBGroup              = 'default';
	protected $table                = '';
	protected $primaryKey           = 'id';
	protected $useAutoIncrement     = true;
	protected $insertID             = 0;
	protected $returnType           = 'array';
	protected $useSoftDelete        = false;
	protected $protectFields        = true;
	protected $allowedFields        = [
                  'module_name', 
                  'orderid', 
                  'status',
                  'isdeleted'
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

	
	public function selectdata($moduleid){
		// $data=$db->query("select * from module_master where moduleid=".$moduleid);
		// $result=$data->getResult();

		// echo json_encode($result[0]);
	}

}
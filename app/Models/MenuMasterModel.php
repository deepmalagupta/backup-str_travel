<?php

namespace App\Models;

use CodeIgniter\Model;

class MenuMasterModel extends Model
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
                  'menu', 
                  'pageurl', 
                  'moduleid',
                  'parentmenuid', 
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

	
	public function selectdata($menuid){
		// $data=$db->query("select * from menu_master where menuid=".$menuid);
		// $result=$data->getResult();

		// echo json_encode($result[0]);
	}

}
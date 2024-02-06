<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
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
                  'role', 
                  'access',
                  'market_id',
                  'isadmin', 
                  'roleid', 
                  'menuid', 
                  'read', 
                  'add', 
                  'edit', 
                  'remove', 
                  'status',
                  'isdeleted',
                  'fname',
                  'mname',
                  'lname',
                  'username',
                  'password',
                  'createdby'
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

    public function getroles(){
        // echo "In Get Roles";

        $db = db_connect();
        $dataArray = array();

        $data=$db->query("select id,role from userrole where isdeleted='0'");
        $result=$data->getResult();
        foreach($result as $key => $role) {
            array_push($dataArray, $role);
        }
        return json_encode($dataArray);
    }

    public function changeaccess($id,$roleid,$moduleid,$action,$value){
        // echo "In Get Roles";

        $db = db_connect();
        $dataArray = array();
        $accessArray = array('read' => 'readaccess', 'add' => 'addaccess', 'edit' => 'editaccess', 'delete' => 'deleteaccess');

        $data=$db->query("select id,readaccess,addaccess,editaccess,deleteaccess from accesscontrol where roleid=".$roleid." and menuid=".$id." and isdeleted='0'");
        $result=$data->getResult();
        // echo $db->last_query();
        foreach($result as $key => $accessdetails) {
            $dataArray = $accessdetails;
            // print_r($dataArray->id);
            
        }
        
        if(!empty($dataArray)){
            $addread=0;
            if($action!='read' && $dataArray->readaccess == '0' && $value=='1'){
                $addread=1;
            }

            if($addread==1){
                $data = [
                    'moduleid' => $moduleid,
                    $accessArray[$action] => $value,
                    'readaccess' => "1",
                ];
            }else{
                $data = [
                    'moduleid' => $moduleid,
                    $accessArray[$action] => $value,
                    
                ];
            }
            $user = $db->table('accesscontrol')->update($data,array('id'=>$dataArray->id));
           
        }else{
            $addread=0;
            if($action!='read' && $value=='1'){
                $addread=1;
            }

            if($addread==1){
                $data = [
                    'roleid' => $roleid,
                    'moduleid' => $moduleid,
                    'menuid' => $id,
                    $accessArray[$action] => $value,
                    'readaccess' => "1",
                ];
            }else{
                $data = [
                    'roleid' => $roleid,
                    'moduleid' => $moduleid,
                    'menuid' => $id,
                    $accessArray[$action] => $value,
                ];
            }
            $user = $db->table('accesscontrol')->insert($data);
           
        }

        $error = $db->error();
        
        if($error['code'] == 0){
            echo json_encode(array("status"=>200, "success"=>true, "msg"=>"Record Updated successfully","data" => $data));
        }else{
            echo json_encode(array("status"=>200, "success"=>false, "msg"=>"Error Occured","data" => $error));
        }
        
    }

}
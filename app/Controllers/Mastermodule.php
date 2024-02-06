<?php

namespace App\Controllers;
use App\Models\MastermoduleModel;


class Mastermodule extends BaseController
{
    public function __construct(array $param = [], ...$params) {
        

    }

    public function listmodule()
    {
        if(empty(session()->userdata)){
            return redirect()->to(base_url('login'));
            
        }

        $moduleModel = new MastermoduleModel();

        $moduleModel->setTable('module_master');
        
        $members=$moduleModel->where("isdeleted", "0")->get()->getResultArray();
        
        $userdata=session()->userdata;

        return view('module_master', [
            "members" => $members,
            "userdata" => $userdata,
            "pageTitle" => "Module Master"
        ]);
    }

    /**
     * Create a new module Name, from "posted" parameters
     *
     * @return mixed
     */
    public function addmodule()
    {
        if ($this->request->getMethod() == "post") {

            $rules = [
                "module" => "required|min_length[3]|max_length[40]",
                "order" => "required",
                "status" => "required",
            ];

            if (!$this->validate($rules)) {            
                return redirect()->to(base_url('listmodule'));
            } else {

                $moduleModel = new MastermoduleModel();
                $moduleModel->setTable('module_master');
                $id=$this->request->getVar('moduleid');


                $data = [
                    'module_name' => addslashes($this->request->getVar('module')),
                    'orderid' => addslashes($this->request->getVar('order')),
                    'status' => addslashes($this->request->getVar('status')),
                ];
                try {
                    if($id>0){
                        $user = $moduleModel->update($id,$data);
                    }else{
                        $user = $moduleModel->insert($data);
                    }
                } catch (\Exception $e) {
                    die($e->getMessage());
                }
                return redirect()->to(base_url('listmodule'));
            }
        }

    }

    public function moduleeditbyid()
    {

        if ($this->request->getMethod() == "post") {


                $moduleModel = new MastermoduleModel();
                $moduleModel->setTable('module_master');

                $moduleid = $this->request->getVar('id');
                
                try {
                    $members = $moduleModel->where("id", $moduleid)->first();
                } catch (\Exception $e) {
                    die($e->getMessage());
                }
                return json_encode($members);

        }
    }

    public function deletemodule()
    {
        if ($this->request->getMethod() == "post") {

            $moduleModel = new MastermoduleModel();
            $moduleModel->setTable('module_master');
            $moduleid=$this->request->getVar('moduleid');

            if($moduleid > 0){
                $data = [
                    'isdeleted' => "1",
                ];

                try {
                    $user = $moduleModel->update($moduleid,$data);
                } catch (\Exception $e) {
                    die($e->getMessage());
                }
            }

            return json_encode(array("status"=>200, "success"=>true, "msg"=>"Record deleted successfully"));
        }
    }
    
}

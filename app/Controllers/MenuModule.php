<?php

namespace App\Controllers;
use App\Models\MenuMasterModel;


class MenuModule extends BaseController
{
    public function __construct() {
    }

   
    public function listMenu()
    {
        if(empty(session()->userdata)){
            return redirect()->to(base_url('login'));
            
        }
        
        $menuModel = new MenuMasterModel();

        $menuModel->setTable('menu_master');
        
        $userdata=session()->userdata;
        
        $members=$menuModel->where("isdeleted", "0")->get()->getResultArray();


        return view('menu_master', [
            "members" => $members,
            "userdata" => $userdata,
            "pageTitle" => 'Menu Master',
        ]);
    }

    /**
     * Create a new Menu Name, from "posted" parameters
     *
     * @return mixed
     */
    public function addmenu()
    {
        if ($this->request->getMethod() == "post") {

            $rules = [
                "menu" => "required|min_length[3]|max_length[40]",
                "pageurl" => "required|min_length[3]|max_length[100]",
                "module" => "required",
                "parentmenu" => "required",
                "order" => "required",
                "status" => "required",
            ];

            if (!$this->validate($rules)) {
               
                return redirect()->to(base_url('listmenu'));
            } else {

                $menuModel = new MenuMasterModel();
                $menuModel->setTable('menu_master');
                $id=$this->request->getVar('menuid');

                $data = [
                    'menu' => $this->request->getVar('menu'),
                    'pageurl' => $this->request->getVar('pageurl'),
                    'moduleid' => $this->request->getVar('module'),
                    'parentmenuid' => $this->request->getVar('parentmenu'),
                    'orderid' => $this->request->getVar('order'),
                    'status' => $this->request->getVar('status'),
                ];

                try {
                    if($id>0){
                        $user = $menuModel->update($id,$data);
                    }else{
                        $user = $menuModel->insert($data);
                    }
                } catch (\Exception $e) {
                    die($e->getMessage());
                }

                return redirect()->to(base_url('listmenu'));
            }
        }

    }

    public function menueditbyid()
    {
        if ($this->request->getMethod() == "post") {

                $menuModel = new MenuMasterModel();
                $menuModel->setTable('menu_master');

                $menuid = $this->request->getVar('menuid');
                
                try {
                    $members = $menuModel->where("id", $menuid)->first();
                } catch (\Exception $e) {
                    die($e->getMessage());
                }
                return json_encode($members);
        }
    }

    public function fetchparent()
    {
        if ($this->request->getMethod() == "post") {
            $menuModel = new MenuMasterModel();
            $menuModel->setTable('menu_master');

            $moduleid = $this->request->getVar('moduleid');
            $members = $menuModel->select('id,menu')->where("moduleid", $moduleid)->get()->getResultArray();
             
            return json_encode(array("status"=>200, "success"=>true, "msg"=>$members));
        }
    }

    public function deletemenu()
    {
        if ($this->request->getMethod() == "post") {

            $menuModel = new MenuMasterModel();
            $menuModel->setTable('menu_master');
            $menuid=$this->request->getVar('menuid');

            if($menuid > 0){
                $data = [
                    'isdeleted' => "1",
                ];

                try {
                    $user = $menuModel->update($menuid,$data);
                } catch (\Exception $e) {
                    die($e->getMessage());
                }
            }

            return json_encode(array("status"=>200, "success"=>true, "msg"=>"Record deleted successfully"));
        }
    }
    
}

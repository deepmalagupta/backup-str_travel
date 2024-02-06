<?php

namespace App\Controllers;
use App\Models\UserModel;

class User extends BaseController
{
    public function __construct() {
        
    }

    /**
     * View All User Role.
     *
     * @return mixed
     */
    public function userrole()
    {
        if(empty(session()->userdata)){
            return redirect()->to(base_url('login'));
            
        }
        $userdata=session()->userdata;

        $roleModel = new UserModel();

        $roleModel->setTable('userrole');
        
        $datarow=$roleModel->where("isdeleted", "0")->get()->getResultArray();
        // $datarow=$roleModel->get()->getResultArray();
        return view('user/userrole', [
            "data" => $datarow,
            "userdata" => $userdata,
            "pageTitle" => "User Role Manager"
        ]);
    }

    /**
     * Create a new Role, from "posted" parameters
     *
     * @return mixed
     */
    public function addrole()
    {
        if ($this->request->getMethod() == "post") {

            $rules = [
                "role" => "required|min_length[3]|max_length[40]",
                "isadmin" => "required",
                "status" => "required",
            ];

            if (!$this->validate($rules)) {
                return redirect()->to(base_url('userrole'));
            } else {
                
                $roleModel = new UserModel();
                $roleModel->setTable('userrole');
                $id=$this->request->getVar('id');


                $data = [
                    'role' => addslashes($this->request->getVar('role')),
                    'isadmin' => addslashes($this->request->getVar('isadmin')),
                    'status' => addslashes($this->request->getVar('status')),
                ];
                try {
                    if($id>0){
                        $user = $roleModel->update($id,$data);
                    }else{

                        // $data['createdby'] = $this->session->userdata['id'];
                        $user = $roleModel->insert($data);
                    }
                } catch (\Exception $e) {
                    die($e->getMessage());
                }

                return redirect()->to(base_url('userrole'));
            }
        }

    }

    /**
     * Edit Role, from "posted" parameters
     *
     * @return mixed
     */
    public function deleterole()
    {
        if ($this->request->getMethod() == "post") {

            $roleModel = new UserModel();
            $roleModel->setTable('userrole');
            $id=$this->request->getVar('id');

            if($id > 0){
                $data = [
                    'isdeleted' => "1",
                ];

                try {
                    $user = $roleModel->update($id,$data);
                } catch (\Exception $e) {
                    die($e->getMessage());
                }
            }

            return json_encode(array("status"=>200, "success"=>true, "msg"=>"Record deleted successfully"));
        }
    }

    /**
     * Edit Role, from "posted" parameters
     *
     * @return mixed
     */
    public function roleeditbyid()
    {

        if ($this->request->getMethod() == "post") {


                $roleModel = new UserModel();
                $roleModel->setTable('userrole');

                $id = $this->request->getVar('id');
                
                try {
                    $members = $roleModel->where("id", $id)->first();
                } catch (\Exception $e) {
                    die($e->getMessage());
                }
                return json_encode($members);

        }
    }

    /**
     * View All User.
     *
     * @return mixed
     */
    public function userlist()
    {
        if(empty(session()->userdata)){
            return redirect()->to(base_url('login'));
            
        }
        $userdata=session()->userdata;

        $userModel = new UserModel();

        $userModel->setTable('user');
        
        $datarow=$userModel->where("isdeleted", "0")->get()->getResultArray();

        // $roles = $userModel->getroles();

        return view('user/usermaster', [
            "data" => $datarow,
            // "roles" => json_decode($roles),
            "userdata" => $userdata,
            "pageTitle" => 'User Master'
        ]);
    }


    /**
     * Add new User, from "posted" parameters
     *
     * @return mixed
     */
    public function adduser()
    {
        if ($this->request->getMethod() == "post") {
            // echo '<pre>';print_r($_POST);exit();
            $access = array();

            // Loop through each element in $_POST
            foreach ($_POST as $key => $value) {
                $value = explode('-', $value);
                // Check if the key contains the substring 'read'
                if (strpos($key, 'read') !== false) {
                    // echo '<pre>';print_r($value);exit();
                    $access[$value[0]][$value[1]] = $value[2];
                }

                if(strpos($key,'add') !== false){
                    if (isset($access[$value[0]][$value[1]])) {
                        // Key exists, add to the array
                        if (is_array($access[$value[0]][$value[1]])) {
                            $access[$value[0]][$value[1]][] = $value[2];
                        } else {
                            // Convert existing value to array and add new value
                            $access[$value[0]][$value[1]] = [$access[$value[0]][$value[1]], $value[2]];
                        }
                    } else {
                        // Key does not exist, create a new array
                        $access[$value[0]][$value[1]] = [$value[2]];
                    }
                }

                if(strpos($key,'edit') !== false){
                    if (isset($access[$value[0]][$value[1]])) {
                        // Key exists, add to the array
                        if (is_array($access[$value[0]][$value[1]])) {
                            $access[$value[0]][$value[1]][] = $value[2];
                        } else {
                            // Convert existing value to array and add new value
                            $access[$value[0]][$value[1]] = [$access[$value[0]][$value[1]], $value[2]];
                        }
                    } else {
                        // Key does not exist, create a new array
                        $access[$value[0]][$value[1]] = [$value[2]];
                    }
                }

                if(strpos($key,'delete') !== false){
                    if (isset($access[$value[0]][$value[1]])) {
                        // Key exists, add to the array
                        if (is_array($access[$value[0]][$value[1]])) {
                            $access[$value[0]][$value[1]][] = $value[2];
                        } else {
                            // Convert existing value to array and add new value
                            $access[$value[0]][$value[1]] = [$access[$value[0]][$value[1]], $value[2]];
                        }
                    } else {
                        // Key does not exist, create a new array
                        $access[$value[0]][$value[1]] = [$value[2]];
                    }
                }
            }
            // echo '<pre>';print_r($access);exit();
            $id=$this->request->getVar('id');
            if($id>0){
                $rules = [
                "fname" => "required|min_length[3]|max_length[40]",
                "username" => "required|valid_email",
                // "role" => "required",
                "market" => "required",
                ];
            }else{
                $rules = [
                "fname" => "required|min_length[3]|max_length[40]",
                "username" => "required|valid_email|is_unique[user.username,isdeleted,1]",
                // "role" => "required",
                "market" => "required",
                ];
            }
            $userdata=session()->userdata;
            $userModel = new UserModel();

            $userModel->setTable('user');
            $datarow=$userModel->where("isdeleted", "0")->get()->getResultArray();
            // $roles = $userModel->getroles();

            if (!$this->validate($rules)) {

                return view('user/usermaster', [
                    "data" => $datarow,
                    "validation" => $this->validator,
                    "userdata" => $userdata,
                    // "roles" => json_decode($roles),
                    "pageTitle" => 'User Master'
                ]);

                return redirect()->to(base_url('userlist'));
            } else {

                $userModel = new UserModel();
                $userModel->setTable('user');
                
                try {
                    if($id>0){
                        $data = [
                            'fname' => addslashes($this->request->getVar('fname')),
                            'lname' => addslashes($this->request->getVar('lname')),
                            // 'roleid' => addslashes($this->request->getVar('role')),
                            'username' => addslashes($this->request->getVar('username')),
                            'status' => addslashes($this->request->getVar('status')),
                            'access' => json_encode($access),
                            'market' => addslashes($this->request->getVar('market')),
                        ];
                        if($this->request->getVar('password') != ''){
                            $password = addslashes($this->request->getVar('fname')).'@'.date("Y");
                            $data['password'] = password_hash($password,PASSWORD_BCRYPT);
                        }
                        $user = $userModel->update($id,$data);
                    }else{
                        $password = addslashes($this->request->getVar('fname')).'@'.date("Y");

                        $data = [
                            'fname' => addslashes($this->request->getVar('fname')),
                            'lname' => addslashes($this->request->getVar('lname')),
                            // 'roleid' => addslashes($this->request->getVar('role')),
                            'username' => addslashes($this->request->getVar('username')),
                            'password' => password_hash($password,PASSWORD_BCRYPT),
                            'status' => addslashes($this->request->getVar('status')),
                            'access' => json_encode($access),
                            'market' => addslashes($this->request->getVar('market')),
                        ];
                        $user = $userModel->insert($data);
                    }
                } catch (\Exception $e) {
                    die($e->getMessage());
                }

                return redirect()->to(base_url('userlist'));
            }
        }

    }


    /**
     * Edit User details, from "posted" parameters
     *
     * @return mixed
     */
    public function usereditbyid()
    {

        if ($this->request->getMethod() == "post") {


                $userModel = new UserModel();
                $userModel->setTable('user');

                $id = $this->request->getVar('id');
                
                try {
                    $members = $userModel->where("id", $id)->first();
                } catch (\Exception $e) {
                    die($e->getMessage());
                }
                
                return json_encode($members);

        }
    }


    /**
     * Edit Userdetails, from "posted" parameters
     *
     * @return mixed
     */
    public function deleteuser()
    {
        if ($this->request->getMethod() == "post") {

            $userModel = new UserModel();
            $userModel->setTable('user');
            $id=$this->request->getVar('id');

            if($id > 0){
                $data = [
                    'isdeleted' => "1",
                ];

                try {
                    $user = $userModel->update($id,$data);
                } catch (\Exception $e) {
                    die($e->getMessage());
                }
            }

            return json_encode(array("status"=>200, "success"=>true, "msg"=>"Record deleted successfully"));
        }
    }

    /**
     * View All User Role Access.
     *
     * @return mixed
     */
    public function accesscontrol()
    {
        $accessModel = new UserModel();  

        $roles = $accessModel->getroles();
        $userdata=session()->userdata;
        if(empty($userdata)){
            return redirect()->to(base_url('login'));     
        }
        
        return view('user/accesscontrol', [
            "roles" => json_decode($roles),
            "userdata" => $userdata,
            "pageTitle" => "User Access Control",
        ]);
    }

    public function changeaccess()
    {
        $accessModel = new UserModel();

        $accessModel->setTable('accesscontrol');
        $id=$this->request->getVar('id');
        $roleid=$this->request->getVar('roleid');
        $moduleid=$this->request->getVar('moduleid');
        $action=$this->request->getVar('action');
        $value=$this->request->getVar('val');
        // echo '<pre>';print_r($_POST);exit();
        // $roles = $accessModel->getroles();
       
        $updateaccess = $accessModel->changeaccess($id,$roleid,$moduleid,$action,$value);
        return $updateaccess;

    }

    public function fetchroleaccess(){
        $accessModel = new UserModel();

        $roleid=$this->request->getVar('roleid');
        
        $accessModel->setTable('accesscontrol');
        $accessModel->select("id, roleid, menuid, moduleid, readaccess, addaccess, editaccess, deleteaccess, status");
        $accessModel->where("roleid", $roleid);
        $datarow=$accessModel->where("isdeleted", "0")->get()->getResultArray();
     
        return json_encode($datarow);
    }

}
?>
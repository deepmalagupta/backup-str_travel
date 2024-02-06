<?php 

if ( ! function_exists('modulenameByid'))
{
    function modulenameByid($moduleid)
    {
        $db = \Config\Database::connect('default');
        $data=$db->query("SELECT module_name from module_master where id='".$moduleid."' and isdeleted='0'");
        $result=$data->getResult();
        return $result[0]->module_name;
        
    }  
}

if ( ! function_exists('allmodule'))
{
    function allmodule()
    {
        $db = \Config\Database::connect('default');
        
        $data=$db->query("SELECT id,module_name from module_master where status='1' and isdeleted='0' order by orderid,module_name,id");
        $result=$data->getResult();
        return $result;
        
    }  
}

if ( ! function_exists('allmarket'))
{
    function allmarket()
    {
        $db = \Config\Database::connect('default');
        
        $data=$db->query("SELECT Distinct id,marketname from market where displayflag='1'");
        $result=$data->getResult();
        return $result;
        
    }   
}

if ( ! function_exists('allmenu'))
{
    function allmenu($moduleid)
    {
        $db = \Config\Database::connect('default');
        $data=$db->query("SELECT id,menu,pageurl from menu_master where status='1' and isdeleted='0' and moduleid=".$moduleid." and parentmenuid='0' order by moduleid,orderid");
        $result=$data->getResult();
        return $result;
    }   
}

if ( ! function_exists('getmenuname'))
{
    function getmenuname($url)
    {
        $db = \Config\Database::connect('default');
        $data=$db->query("SELECT id,menu from menu_master where pageurl='".$url."'");
        $result=$data->getResultArray();
        return $result[0];
    }   
}

if ( ! function_exists('getallsubmenu'))
{
    function getallsubmenu($parentid)
    {
        $db = \Config\Database::connect('default');
        $data=$db->query("SELECT id,menu,pageurl from menu_master where parentmenuid=".$parentid);
        $result=$data->getResultArray();
        return $result;
    }   
}

if ( ! function_exists('getaccesscontrol'))
{
    function getaccesscontrol($menuid,$roleid)
    {
        $session = \Config\Services::session();
        if(empty(session()->userdata['id'])){
            header("Location: ".base_url());
            die;
            
        }
        $db = \Config\Database::connect('default');
        $data=$db->query("SELECT readaccess, addaccess, editaccess, deleteaccess from accesscontrol where status='1' and isdeleted='0' and menuid=".$menuid." and roleid =".$roleid);
        $result=$data->getResult();
        return $result;
        
    }   
}

if ( ! function_exists('yearFilter'))
{
    function yearFilter($yearid=null)
    {
        $db = \Config\Database::connect('default');
        $data=$db->query("SELECT id,datayear from datayear where displayflag='1' order by displayorder,datayear");
        $result=$data->getResultArray();
        return $result;
    }   
}

if ( ! function_exists('periodFilter'))
{
    function periodFilter($periodid=null)
    {
        $db = \Config\Database::connect('default');
        $data=$db->query("SELECT id,period from period where displayflag='1' order by displayorder,period");
        $result=$data->getResultArray();
        return $result;
    }   
}

if ( ! function_exists('marketFilter'))
{
    function marketFilter($marketid=null)
    {
        $db = \Config\Database::connect('default');
        $data=$db->query("SELECT id,marketname from market where displayflag='1' order by displayorder,marketname");
        $result=$data->getResultArray();
        return $result;
    }
}

if ( ! function_exists('categoryFilter'))
{
    function categoryFilter($categoryid=null)
    {
        $db = \Config\Database::connect('default');
        $data=$db->query("SELECT GROUP_CONCAT(id) as id, categoryname from category where displayflag='1' group by categoryname order by displayorder,categoryname");
        $result=$data->getResultArray();
        return $result;
    }
}

if ( ! function_exists('brandFilter'))
{
    function brandFilter($brandid=null)
    {
        $db = \Config\Database::connect('default');
        $data=$db->query("SELECT id, brandname from brand where displayflag='1'order by displayorder,brandname");
        $result=$data->getResultArray();
       
        return $result;
    }
}

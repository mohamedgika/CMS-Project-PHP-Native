<?php
namespace CMS\models;
use CMS\core\db;

class settingmodel extends db{



    public function GetSetting($key){
       $setting = $this->sqlquery_select("SELECT `site_value` FROM `setting` WHERE `site_key`='$key'");
       return $setting[0]["site_value"];
    }


    //==============================================================================================================//

    public function UpdateTheme($site_value,$id){
        $setting = $this->update('setting',['site_value'=>$site_value,'id'=>$id]);
        return $setting;
    }


    public function UpdateSetting($site_value,$id){
        $setting = $this->update('setting',['site_value'=>$site_value,'id'=>$id]);
        return $setting;
    }

}
?>
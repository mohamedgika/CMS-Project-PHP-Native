<?php
namespace CMS\controller;
use CMS\core\veiw;
use CMS\models\settingmodel;
use CMS\core\helper;

class settingcontrol extends veiw{

    public function __construct(){
        session_start();
        if(empty($_SESSION['user'])){
            exit ('This Method Not Allow');
        }
    }


    public function theme(){
        $title ="Theme";
        return $this->veiw("Dashboard/setting/theme",['title'=>$title]);
    }


    public function posttheme(){
        $theme = new settingmodel();
        $theme ->UpdateTheme($_POST['site_value'],1);
        if($theme){
            helper::redirect("setting/theme");
        }
    }


    public function setting(){
        $title ="Setting";
        $setting = new settingmodel();

        $headline = $setting->GetSetting('headline');
        $title_page = $setting->GetSetting('title');
        $details = $setting->GetSetting('details');

        return $this->veiw("Dashboard/setting/setting",['title'=>$title ,'headline'=>$headline,'title_page'=>$title_page,'details'=>$details]);
    }

    public function postheadline(){
        $setting = new settingmodel();
        $setting ->UpdateSetting($_POST['headline'],2);
        helper::redirect("setting/setting");

    }

    public function postdetails(){
        $setting = new settingmodel();
        $setting ->UpdateSetting($_POST['details'],4);
        helper::redirect("setting/setting");
    }

    public function posttitle(){
        $setting = new settingmodel();
        $setting ->UpdateSetting($_POST['title'],3);
        helper::redirect("setting/setting");
    }
}
?>
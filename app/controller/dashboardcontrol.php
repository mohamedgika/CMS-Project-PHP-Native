<?php
namespace CMS\controller;
use CMS\core\veiw;
use CMS\models\categorymodel;
use CMS\core\helper;

class dashboardcontrol extends veiw{


    private $model;

    public function __construct(){ // Not Allow Any One To Access Method

        $this->model = new categorymodel();

      session_start();
        if(empty($_SESSION['user'])){
            exit ('This Method Not Allow');
        }
    }

    public function index(){
        
        $NumberOfCategory = $this->model->numcategory();

        $title ="Dashboard";
        return $this->veiw("Dashboard/dashboard",['title'=>$title,'NumberOfCategory'=>$NumberOfCategory]);
    }
}
?>
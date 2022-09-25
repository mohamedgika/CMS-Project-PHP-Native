<?php

namespace CMS\controller;
use CMS\core\veiw;
use CMS\models\categorymodel;
use CMS\core\helper;

class categorycontrol extends veiw{

  private $model;

  public function __construct(){ // Not Allow Any One To Access Method

    $this->model = new categorymodel();
  session_start();
    if(empty($_SESSION['user'])){
        exit ('This Method Not Allow');
    }
}


//Category index.php
public function index(){
  $categories = $this->model->GetAllCategory();
  $title = "Category";
  return $this->veiw('Dashboard//category//index',['title'=>$title,'categories'=>$categories]);
}

// Category index.php
public function update($id){
  $title = "Update Category";
  $category = $this->model->GetCategoryById($id);

  $action = helper::url("category/PostUpdate");
  return $this->veiw('Dashboard//category//update',['title'=>$title ,'category'=>$category,'action'=>$action]);

}

//Category index.php
public function PostUpdate(){
$category = $this->model->UpdateCategory($_POST);
if(empty($category)){
helper::redirect("category/index");
}
}


//Category index.php
public function delete($id){
  $category = $this->model->DeleteCategory($id);;
  if(empty($category)){
    helper::redirect("category/index");
  }
}




//=========================================================================//

// Category add.php
public function add(){
  $title = "Add New Category";
  return $this->veiw('Dashboard//category//add',['title'=>$title]);
}

//Category add.php
public function postadd(){
  $category = $this->model->AddNewCategory($_POST);
 if(empty($category)){
  helper::redirect("category/index");
 }else{
  helper::redirect("category/add");
}
}

}

?>
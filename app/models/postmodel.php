<?php
namespace CMS\models;
use CMS\core\db;

class postmodel extends db{

    private static $object;


    public function GetTitle($id){
        $title = $this->sqlquery_select("SELECT `title` FROM `post` WHERE `id`=$id");
        return $title[0]['title'];
    }

     public function GetDes($id){
        $description = $this->sqlquery_select("SELECT `description` FROM `post` WHERE `id`=$id");
        return $description[0]['description'];
    }

     public function GetCategory(){
        return $this->select('category');
    }

    public function GetImg($id){
        $img = $this->sqlquery_select("SELECT `img` FROM `post` WHERE `id`=$id");
        return $img[0]['img'];
    }


//====================================================================================================//


    public function UpdateTitle($title,$id){
        $setting = $this->update('post',['title'=>$title,'id'=>$id]);
        return $setting;
    }

    public function UpdateDes($description,$id){
        $data=['description'=>$description,'id'=>$id];
        $setting = $this->update('post',$data);
        return $setting;
    }

    public function UpdateCat($category_id,$id){
        $data=['category_id'=>$category_id,'id'=>$id];
        $setting = $this->update('post',$data);
        return $setting;
    }

    public function UpdateImg($img,$id){
        $data = ['img'=>$img,'id'=>$id];
        $setting = $this->update('post',$data);
        return $setting;
    }

}








?>
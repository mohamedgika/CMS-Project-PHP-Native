<?php
namespace CMS\models;
use CMS\core\db;

class categorymodel extends db{

    
    // Use Function index()  For  index.php
    public function GetAllCategory(){
        return $this->select('category');
    }


    
    // Use Function update()  For  index.php
    public function GetCategoryById($id){
        return $this->sqlquery_select("SELECT * FROM `category` WHERE `id`=$id");

    }



    // Use Function PostUpdate()  For  index.php
    public function UpdateCategory($data){
        return $this->update('category',$data);
    }



    // Use Function delete()  For  index.php
    public function DeleteCategory($id){
        return $this->delete('category',$id);
    }





//==================================================================================//

    // Use Function postadd()  For add.php
    public function AddNewCategory($data){
        return $this->insert($data);
    }


    // Use Function index For dashboard.php
    public function numcategory(){
        return $this->select_count();
    }




}
?>
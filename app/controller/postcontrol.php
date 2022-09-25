<?php
namespace CMS\controller;
use CMS\core\veiw;
use CMS\core\helper;
use CMS\models\postmodel;

class postcontrol extends veiw{

    public function __construct(){ // Not Allow Any One To Access Method
          session_start();
          if(empty($_SESSION['user']))
          {
            exit ('This Method Not Allow');
          }
      }
      
    public function index(){
      
    }


    public function postsetting(){
        
        $post = new postmodel();

        $title       = "Post";

        $title_post_1  = $post->GetTitle(1);
        $description_1 = $post->GetDes(1);
        $category_1    = $post->GetCategory();
        $image_1       = $post->GetImg(1);

        $title_post_2  = $post->GetTitle(2);
        $description_2 = $post->GetDes(2);
        $category_2    = $post->GetCategory();
        $image_2       = $post->GetImg(2);

        $title_post_3  = $post->GetTitle(3);
        $description_3 = $post->GetDes(3);
        $category_3    = $post->GetCategory();
        $image_3       = $post->GetImg(3);

       
        $data=
        [
            'title'=>$title,

            'title_post_1'=>$title_post_1,
            'description_1'=>$description_1,
            'category_1'=>$category_1,
            'image_1'=>$image_1,

            'title_post_2'=>$title_post_2,
            'description_2'=>$description_2,
            'category_2'=>$category_2,
            'image_2'=>$image_2,

            'title_post_3'=>$title_post_3,
            'description_3'=>$description_3,
            'category_3'=>$category_3,
            'image_3'=>$image_3
        ];

        return $this->veiw("Dashboard/post/post",$data);
    }

    public function postadd_1(){

        //Post_1
        $post = new postmodel();
        $post->UpdateTitle($_POST['title_1'],1);
        $post->UpdateDes($_POST['description_1'],1);
        $post->UpdateCat($_POST['category_1'],1);

        //img
        if(isset($_POST['img_1'])){
        $title_post_1  = $post->GetTitle(1);
        $tmp = $_FILES['img_1']['tmp_name']; // Image Path
        $type =$_FILES['img_1']['type'];     // Type Image Ex--> (image/png)
        $type_arr= explode("/",$type); // Function Divide Type in Arrays EX Array[0] = image , Array[1] = png
        $ext_img = $type_arr[1]; // Call Array[1] = png
        $full_name_img_1 = $title_post_1.".".$ext_img; // Varrable To Connect Name And Extaintion
        move_uploaded_file($tmp,"C:/xampp/htdocs/CMS Project/public/Website/post_img/assets/img/pego/".$full_name_img_1);
        $post->UpdateImg($full_name_img_1,1);
        helper::redirect("post/postsetting");
        }else{
        helper::redirect("post/postsetting");
        }
    }
    
    public function postadd_2(){

        //Post_2
        $post = new postmodel();
        $post->UpdateTitle($_POST['title_2'],2);
        $post->UpdateDes($_POST['description_2'],2);
        $post->UpdateCat($_POST['category_2'],2);


        //img
        if(isset($_POST['img_2'])){
        $title_post_2  = $post->GetTitle(2);
        $tmp = $_FILES['img_2']['tmp_name']; // Image Path
        $type =$_FILES['img_2']['type'];     // Type Image Ex--> (image/png)
        $type_arr= explode("/",$type); // Function Divide Type in Arrays EX Array[0] = image , Array[1] = png
        $ext_img = $type_arr[1]; // Call Array[1] = png
        $full_name_img_2 = $title_post_2.".".$ext_img; // Varrable To Connect Name And Extaintion
        move_uploaded_file($tmp,"C:/xampp/htdocs/CMS Project/public/Website/post_img/assets/img/bmw/".$full_name_img_2);
        $post->UpdateImg($full_name_img_2,2);
        helper::redirect("post/postsetting");
        }else{
        helper::redirect("post/postsetting");
        }
    }

    public function postadd_3(){

        //Post_3
        $post = new postmodel();
        $post->UpdateTitle($_POST['title_3'],3);
        $post->UpdateDes($_POST['description_3'],3);
        $post->UpdateCat($_POST['category_3'],3);

        //img
        if(isset($_POST['img_2'])){
        $title_post_3  = $post->GetTitle(3);
        $tmp = $_FILES['img_3']['tmp_name']; // Image Path
        $type =$_FILES['img_3']['type'];     // Type Image Ex--> (image/png)
        $type_arr= explode("/",$type); // Function Divide Type in Arrays EX Array[0] = image , Array[1] = png
        $ext_img = $type_arr[1]; // Call Array[1] = png
        $full_name_img_3 = $title_post_3.".".$ext_img; // Varrable To Connect Name And Extaintion
        move_uploaded_file($tmp,"C:/xampp/htdocs/CMS Project/public/Website/post_img/assets/img/mercedes/".$full_name_img_3);
        $post->UpdateImg($full_name_img_3,3);
        helper::redirect("post/postsetting");
        }else{
        helper::redirect("post/postsetting");
        }
    }


}
?>
<?php

namespace CMS\controller;
use CMS\core\veiw;
use CMS\models\categorymodel;
use CMS\models\postmodel;
use CMS\models\settingmodel;

class homecontrol extends veiw{

    public function index(){

        $setting = new settingmodel();

        $theme      = $setting->GetSetting('theme');
        $headline   = $setting->GetSetting('headline');
        $title_page = $setting->GetSetting('title');
        $details    = $setting->GetSetting('details');

//================================================================================================//

        $category = new categorymodel();

        $menu     = $category->GetAllCategory();

//================================================================================================//
        
        $post = new postmodel();

        $title_post_1  = $post->GetTitle(1);
        $description_1 = $post->GetDes(1);
        $image_1       = $post->GetImg(1);

        $title_post_2  = $post->GetTitle(2);
        $description_2 = $post->GetDes(2);
        $image_2       = $post->GetImg(2);

        $title_post_3  = $post->GetTitle(3);
        $description_3 = $post->GetDes(3);
        $image_3       = $post->GetImg(3);

//=================================================================================//

        $all_data=
        [
            'title_page'=>$title_page,
            'headline'=>$headline,
            'menu'=>$menu,
            'details'=>$details,

            'title_post_1'=>$title_post_1,
            'description_1'=>$description_1,
            'image_1'=>$image_1,

            'title_post_2'=>$title_post_2,
            'description_2'=>$description_2,
            'image_2'=>$image_2,

            'title_post_3'=>$title_post_3,
            'description_3'=>$description_3,
            'image_3'=>$image_3,

        ];

        return $this->veiw("Website/".$theme."/index",$all_data);
    }

    public function test(){
                $post = new postmodel();

        $image_1       = $post->GetImg(1);
        print_r("C:/xampp/htdocs/CMS Project/public/post_img/$image_1/");
    }

}

?>
<?php

class HomeController
{
    public function index()
    {
        $data2 = (new HomeModel)->allTrending1();
        // $data1 = (new HomeModel)->allBanner();
        $category = (new DetailsModel)->createDetailsModel();
        $views=(new HomeModel)->cateview();
        viewClient('Home', [ 'data2' => $data2, 'category' => $category,'views'=>$views]);
    }

    
}

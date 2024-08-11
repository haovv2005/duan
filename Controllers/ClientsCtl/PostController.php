<?php
class PostController
{
    public function showPostInCategory()
    {
        $id_cate = $_GET['id_category'];
        $data = (new HomeModel)->postIncategory($id_cate);
        $category = (new DetailsModel)->createDetailsModel();
        $name_category = (new DetailsModel)->find_one($id_cate)['name_category'];
        $views=(new HomeModel)->cateview();
        viewClient('detailsHome', ['data' => $data, 'category' => $category, 'name_category' => $name_category,'views'=>$views]);

    }

    public function show()
    {
        $category = (new DetailsModel)->createDetailsModel();
        // lấy thông tin
        $id_news = $_GET['id_news'];
        $post = (new HomeModel)->find_one($id_news);
        $views=(new HomeModel)->cateview();
        viewClient('Content', ['post' => $post, 'category' => $category,'views'=>$views]);
    }
    public function register(){
        // Lấy dữ liệu từ biểu mẫu
    if($_SERVER['REQUEST_METHOD']== 'POST'){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $id_role= 2;
        (new usersModel)->registerModel($username,$password,$id_role);
        header("Location:index.php?ctl=Login");
    }
         viewClient('dk',[
            'username'=>$username ?? '',
            'passwword'=> $password ?? ''
         ]);
    }
} 

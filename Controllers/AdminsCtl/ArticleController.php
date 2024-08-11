<?php
class ArticleController
{
    public function listArticle()
    {
        $message = $_SESSION['message'] ?? "";
        unset($_SESSION['message']);
        $data_list = (new ArticleModel)->createListModel();
        viewAdmin('list.Article', ['data_list' => $data_list, 'message' => $message]);
    }
    public function addArticle()
    {
        $detail = (new DetailsModel)->createDetailsModel();
        viewAdmin('add.Article', ['detail' => $detail]);
    }

    public function storeArticle()
    {
        $dataForm = $_POST;
        $image = "";
        $file_img = $_FILES['img_news'];

        //==========VALIDATE FORM===============//
        $errors = [];
        if (trim($dataForm['title_news']) == "" || trim($dataForm['title_news']) < 0) {
            $errors['title_news'] = "Vui lòng nhập tiêu đề bài viết &#10006";
        }
        if (trim($dataForm['writter_news']) == "" || trim($dataForm['writter_news']) < 0) {
            $errors['writter_news'] = "Vui lòng nhập tên tác giả &#10006";
        }
        if ($file_img['size'] > 0) {
            // file mở rộng được phép upload
            $img_ext = ['jpg', 'webp', 'png', 'gif', 'avif'];
            $ext = pathinfo($file_img['name'], PATHINFO_EXTENSION);
            if (!in_array($ext, $img_ext)) {
                $errors['img_news'] = "File ảnh không đúng định dạng &#10006";
            }
        }
        if (!empty($errors)) {
            $detail = (new DetailsModel())->createDetailsModel();
            return viewAdmin(
                'add.Article',
                [
                    'detail' => $detail,
                    'errors' => $errors,
                    'dataForm' => $dataForm
                ]
            );
        }
        //=====================================//
        if ($file_img['size'] > 0) {
            $image = "Common/assets/img/" . $file_img['name'];
            move_uploaded_file($file_img['tmp_name'], $image);
        }
        $dataForm['img_news'] = $image;
        (new ArticleModel)->insert($dataForm);
        header("location: index.php?ctl=List-atc");
        die;
    }
    //=================UPDATE SẢN PHẨM=================//

    public function editArticle()
    {
        $message = '';
        $errors = [];

        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $dataUD = $_POST;
            $file_ImgUD = $_FILES['img_news'];
            if ($file_ImgUD['size'] > 0) {
                $imageUD = 'Common/assets/img/' . $file_ImgUD['name'];
                $dataUD['img_news'] = $imageUD;
                move_uploaded_file($file_ImgUD['tmp_name'], $imageUD);
            }
            (new ArticleModel())->update($dataUD, $dataUD['id_news']);
            $message = '<script>alert("Cập nhật dữ liệu thành công"); window.location.href = "index.php?ctl=List-atc";</script>';
        }
        $detail = (new DetailsModel)->createDetailsModel();

        $id_news = $_GET['id_news'];
        $Article = (new ArticleModel)->findone($id_news);
        viewAdmin(
            'edit.Article',
            [
                'detail' => $detail,
                'Article' => $Article,
                'message' => $message,
                'errors' => $errors
            ]
        );
    }
    //================================================//
    //================DELETE SẢN PHẨM=================//
    public function deleteArticle()
    {
        $id_news = $_GET['id_news'];
        (new ArticleModel)->delete($id_news);
        $_SESSION['message'] = '<script>alert("Xóa dữ liệu thành công");</script>';
        header("location: index.php?ctl=List-atc");
        die;
    }
}

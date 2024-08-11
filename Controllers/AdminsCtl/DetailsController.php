<?php
class DetailsController
{
    public function listDetails()
    {
        $data_category = (new DetailsModel)->createDetailsModel();
        viewAdmin('list.Details', ['data_category' => $data_category]);
    }
    public function addDetails()
    {
        $category_add = (new DetailsModel)->createDetailsModel();
        viewAdmin('add.Details', ['category_add' => $category_add]);
    }

    public function storeDetails()
    {
        $dataForm = $_POST;
        (new DetailsModel)->insertCate($dataForm);
        header("location: index.php?ctl=List-details");
        die();
    }


    //========== UPDATE============//
    public function editDetails()
    {
        $message = '';
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $dataUD = $_POST;
            (new DetailsModel())->updateCate($dataUD, $dataUD['id_category']);
            $message = '<script>alert("Cập nhật dữ liệu thành công"); window.location.href = "index.php?ctl=List-details";</script>';
        }
        $detail = (new DetailsModel)->createDetailsModel();
        $id_category = $_GET['id_category'];
        $data_category = (new DetailsModel)->find_one($id_category);
        viewAdmin('edit.Details', ['data_category' => $data_category, 'message' => $message, 'detail' => $detail]);
    }
    //=============================//
    public function deleteDetails()
    {
        $id_category = $_GET['id_category'];
        (new DetailsModel)->deleteCate($id_category);
        header("location: index.php?ctl=List-details");
        die();
    }
}

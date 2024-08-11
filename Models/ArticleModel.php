<?php
// MODELS CỦA ADMIN
class ArticleModel
{
    public $conn = null;
    public function __construct()
    {
        $this->conn = connection();
    }
////// 
    public function createListModel()
    {

        $sql = "SELECT * FROM trending";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
////thêm
    public function insert($data_insert)
    {
        $sql = "INSERT INTO trending (title_news,img_news,desc_news,contents_news,writter_news,id_category) VALUES (:title_news,:img_news,:desc_news,:contents_news,:writter_news,:id_category)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute($data_insert);
    }
//// cập nhật
    public function update($data_update, $id_news)
    {

        $sql = "UPDATE trending SET title_news=:title_news,img_news=:img_news,desc_news=:desc_news,contents_news=:contents_news,writter_news=:writter_news,id_category=:id_category WHERE id_news=:id_news";
        $stmt = $this->conn->prepare($sql);
        $data_update['id_news'] = $id_news;
        $stmt->execute($data_update);
    }
///// lấy ra 1 sp
    public function findone($id_news)
    {
        $sql = "SELECT * FROM trending WHERE id_news =$id_news";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
//// xóa
    public function delete($id_news)
    {
        $sql = "DELETE FROM trending WHERE id_news = $id_news";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
    }
/////  hủy
    public function __destruct()
    {
        $this->conn = null;
    }
}

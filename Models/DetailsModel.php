<?php
// MODELS CỦA ADMIN
class DetailsModel
{
    public $conn = null;
    public function __construct()
    {
        $this->conn = connection();
    }

    public function createDetailsModel()
    {

        $sql = "SELECT * FROM category";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function find_one($id_category)
    {

        $sql = "SELECT * FROM category WHERE id_category = $id_category";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    public function insertCate($data_insert)
    {
        $sql = "INSERT INTO category (name_category) VALUES (:name_category)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute($data_insert);
    }

    public function updateCate($data_update, $id_category)
    {

        $sql = "UPDATE category SET name_category=:name_category WHERE id_category=:id_category";
        $stmt = $this->conn->prepare($sql);
        $data_update['id_category'] = $id_category;
        $stmt->execute($data_update);
    }

    public function deleteCate($id_category)
    {
        $sql = "DELETE FROM category WHERE id_category = $id_category";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
    }

    public function __destruct()
    {
        $this->conn = null;
    }
}

<?php
// MODEL CỦA CLIENTS
class HomeModel
{
    public $conn = null;
    public function __construct()
    {
        $this->conn = connection();
    }

    public function allTrending1()
    {

        $sql = "SELECT * FROM trending";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function allBanner()
    {
        $sql = "SELECT * FROM bannernews";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function postIncategory($id_category)
    {
        $sql = "SELECT * FROM trending WHERE id_category = $id_category ORDER BY id_news DESC";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

////// view
public function cateview(){
    $sql = "SELECT * FROM trending WHERE view > 0" ;
    $stmt = $this->conn->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
    public function find_one($id_news)
    {
        $sql = "SELECT * FROM trending WHERE id_news = $id_news";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    public function __destruct()
    {
        $this->conn = null;
    }
}

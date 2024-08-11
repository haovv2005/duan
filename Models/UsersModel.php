<?php
class usersModel
{
    public $conn = null;
    public function __construct()
    {
        $this->conn = connection();
    }


    /**
     * @method getUsers: lấy thông tin tài khoản theo tài khoản và mật khẩu
     * @param $username: tên tài khoản
     * @param $password: mật khẩu
     */

    public function getUsers($username)
    {
        $sql = "SELECT users.*,roles.name_role FROM users INNER JOIN roles ON users.id_role=roles.id_role WHERE username=:username ";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([':username' => $username]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    public function __destruct()
    {
        $this->conn = null;
    }
    public function registerModel($username,$password,$id_role){
        $sql = "INSERT INTO users (username,password,id_role) VALUES (:username,:password,:id_role) ";

        $stmt = $this->conn->prepare($sql);
        $stmt->execute(
            [':username' => $username,
            ':password'=>$password,
            ':id_role'=>$id_role
        ]);
    }
}

<?php
class usersController
{
    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $username = $_POST['username'];
            $password = $_POST['password'];
            //  $myself = $người dùng
            $myself = (new usersModel)->getUsers($username);
            if ($myself) {
                if ($myself['password'] == $password) {
                    $_SESSION['username'] = $myself;
                   if($myself['name_role']==='admin'){
                    header("Location:index.php?ctl=Admin");

                   }else{
                    header("Location:index.php");
                   }
                } 
                else {
                    $errors['username'] = "Tên đăng nhập và mật khẩu không đúng";
                }
            } else {
                $errors['username'] = "Tên đăng nhập và mật khẩu không đúng";
            }
        }

        viewAdmin('login', [
            'errors' => $errors ?? '',
            'username' => $username ?? ''
        ]);
    }

    public function logout()
    {
        unset($_SESSION['username']);
        header("location: index.php");
        die;
    }

    public function logout_Layout()
    {
        viewAdmin('logout');
    }
}

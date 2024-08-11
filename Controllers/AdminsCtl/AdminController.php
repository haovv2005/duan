<?php
class AdminController
{


    public function __construct()
    {
        if (!isset($_SESSION['username'])) {
            header("location: index.php?ctl=Login");
        }
    }
    public function index()
    {
        $username = $_SESSION['username'] ?? '';
        viewAdmin('admin', ['username' => $username]);
    }
}

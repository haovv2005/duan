<?php
session_start();
require_once './Common/connect.php';
// Phần Admin
require_once './Controllers/AdminsCtl/AdminController.php';
require_once './Controllers/AdminsCtl/ArticleController.php';
require_once './Controllers/AdminsCtl/DetailsController.php';
require_once './Controllers/AdminsCtl/UsersController.php';
// Phần Client
require_once './Controllers/ClientsCtl/HomeController.php';
require_once './Controllers/ClientsCtl/PostController.php';
// Phần Model
require_once './Models/HomeModel.php';
require_once './Models/ArticleModel.php';
require_once './Models/DetailsModel.php';
require_once './Models/UsersModel.php';
$ctl = $_GET['ctl'] ?? "";
connection();
match ($ctl) {
    // phần Admins

    "" => (new HomeController())->index(),
    "Admin" => (new AdminController())->index(),
    "Login" => (new usersController())->login(),
    "Register"=>(new PostController())->register(),
    "Logout" => (new usersController())->logout(),
    "Logout2" => (new usersController())->logout_Layout(),
    // Bảng sản phẩm
    "List-atc" => (new ArticleController())->listArticle(),
    "Add-atc" => (new ArticleController())->addArticle(),
    "Edit-atc" => (new ArticleController())->editArticle(),
    "Delete-atc" => (new ArticleController())->deleteArticle(),
    "Store-atc" => (new ArticleController())->storeArticle(),
    // Bảng danh mục
    "List-details" => (new DetailsController)->listDetails(),
    "Add-details" => (new DetailsController)->addDetails(),
    "Delete-details" => (new DetailsController)->deleteDetails(),
    "Store-details" => (new DetailsController)->storeDetails(),
    "Edit-details" => (new DetailsController())->editDetails(),
    // Phần client
    "Home" => (new HomeController())->index(),
    "DetailsHome" => (new PostController)->showPostInCategory(),
    "ContentHome" => (new PostController)->show(),
    default => include('./Views/ClientsView/404.php'),
};

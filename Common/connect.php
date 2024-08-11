<?php

function connection()
{
    $host = "localhost";
    $dbname = "assm";
    $username = "root";
    $pass = "0918783007";
    $port = "3306";
    try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname;port=$port;charset=utf8", $username, $pass);
        // kiểm soát ngoại lệ
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
        echo "Line: " . $e->getLine();
        echo "File: " . $e->getFile();
    }
}

function viewClient($view, $data = [])
{
    extract($data);
    include_once "./Views/ClientsView/$view.php";
}

function viewAdmin($view, $data = [])
{
    extract($data);
    include_once "./Views/AdminsView/$view.php";
}

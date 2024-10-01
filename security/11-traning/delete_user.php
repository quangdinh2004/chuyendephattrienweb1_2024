<?php
require_once 'models/UserModel.php';
$userModel = new UserModel();

$user = NULL; //Add new user
$id = NULL;

// Kiểm tra nếu người dùng đã đăng nhập và có quyền xóa
if (!isset($_SESSION['user_id'])) {
    // Chuyển hướng người dùng đến trang đăng nhập 
    header('Location: login.php');
    exit();
}

// Kiểm tra nếu token CSRF hợp lệ
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
        die('Yêu cầu xóa không hợp lệ');
    }

    if (!empty($_POST['id'])) {
        $id = $_POST['id'];
        $userModel->deleteUserById($id);
    }
    header('Location: list_users.php');
    exit();
}

// Tạo token CSRF
$_SESSION['csrf_token'] = bin2hex(random_bytes(32));

header('location: list_users.php');
?>
<?php
// Start the session
session_start();
require_once 'models/UserModel.php';
$userModel = new UserModel();

$user = NULL; //Add new user
$_id = NULL;

if (!empty($_GET['id'])) {
    $_id = base64_decode($_GET['id']); // Giải mã id từ URL nếu tồn tại
    if (!empty($_id)) {
        $user = $userModel->findUserById($_id); // Chỉ thực hiện tìm kiếm nếu id không rỗng
    }
}


$errors = [];
if (!empty($_POST['submit'])) {

    // Validate name
    if (empty($_POST['name'])) {
        $errors[] = "Vui lòng nhập tên";
    } else
        if (!preg_match('/^[A-Za-z0-9]{5,15}$/', $_POST['name'])) {
            $errors[] = "Tên phải dài từ 5 đến 15 kí tự, chỉ chứa chữ cái và số";
        }

    // Validate password
    if (empty($_POST['password'])) {
        $errors[] = "Vui lòng nhập password";
    } elseif (!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[~!@#$%^&*()])[A-Za-z\d~!@#$%^&*()]{5,10}$/', $_POST['password'])) {
        $errors[] = "Password phải dài từ 5 đến 10 kí tự, phải có ít nhất 1 chữ hoa, 1 chữ thường, 1 chữ số và 1 kí tự đặc biệt.";
    }

    // Nếu không có lỗi, thực hiện cập nhật hoặc thêm mới
    if (empty($errors)) {
        // Giải mã id từ form trước khi sử dụng
        $_id = !empty($_POST['id']) ? base64_decode($_POST['id']) : null;

        if (!empty($_id)) {
            $userModel->updateUser($_POST);
        } else {
            $userModel->insertUser($_POST);
        }

        header('location: list_users.php');
        exit;
    }
}


?>
<!DOCTYPE html>
<html>

<head>
    <title>User form</title>
    <?php include 'views/meta.php' ?>
</head>

<body>
    <?php include 'views/header.php' ?>
    <div class="container">
        <?php foreach ($errors as $error) {
            echo "<div class='alert alert-danger'>$error</div>";
        } ?>
        <?php if ($user || !isset($_id)) { ?>
            <div class="alert alert-warning" role="alert">
                User form
            </div>
            <form method="POST">
                <input type="hidden" name="id" value="<?php echo !empty($_id) ? base64_encode($_id) : '' ?>">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input class="form-control" name="name" placeholder="Name" value='<?php if (!empty($user[0]['name']))
                        echo $user[0]['name'] ?>'>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Password">
                    </div>

                    <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
                </form>
        <?php } else { ?>
            <div class="alert alert-success" role="alert">
                User not found!
            </div>
        <?php } ?>
    </div>
</body>

</html>
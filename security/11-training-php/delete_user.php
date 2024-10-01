<?php
session_start();
require_once 'models/UserModel.php';
$userModel = new UserModel();

// Kiểm tra phương thức gửi yêu cầu là POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Kiểm tra token CSRF
    if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
        die('Lỗi xác thực CSRF.');
    }

    // Xóa người dùng nếu có ID
    if (!empty($_POST['id'])) {
        $id = base64_decode($_POST['id']);
        $userModel->deleteUserById($id);
        // Chuyển hướng sau khi xóa
        header('Location: list_users.php');
        exit();
    }
}

// Tạo token CSRF
$_SESSION['csrf_token'] = bin2hex(random_bytes(32));
?>
<!DOCTYPE html>
<html>

<head>
    <title>Xóa Người Dùng</title>
    <?php include 'views/meta.php'; ?>
</head>

<body>
    <?php include 'views/header.php'; ?>
    <div class="container">
        <div class="alert alert-danger">
            Bạn có chắc chắn muốn xóa người dùng này không?
        </div>
        <form action="delete_user.php" method="POST">
            <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
            <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>"> <!-- Giữ nguyên mã hóa base64 -->
            <button type="submit" class="btn btn-danger">Xác nhận xóa</button>
        </form>
    </div>
</body>

</html>
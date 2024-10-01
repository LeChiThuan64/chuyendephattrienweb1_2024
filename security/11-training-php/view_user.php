<?php
require_once 'models/UserModel.php';
$userModel = new UserModel();

$user = NULL;
$id = NULL;

if (!empty($_GET['id'])) {
    // Decode the ID from the URL parameter
    $id = base64_decode($_GET['id']);
    $user = $userModel->findUserById($id);
}

if (!empty($_POST['submit'])) {
    if (!empty($id)) {
        $userModel->updateUser($_POST);
    } else {
        $userModel->insertUser($_POST);
    }
    header('location: list_users.php');
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>User Profile</title>
    <?php include 'views/meta.php'; ?>
</head>
<body>
<?php include 'views/header.php'; ?>
<div class="container">
    <?php if (!empty($user)) { ?>
        <div class="alert alert-warning" role="alert">
            User Profile
        </div>
        <form method="POST">
            <input type="hidden" name="id" value="<?php echo htmlspecialchars($id); ?>">
            <div class="form-group">
                <label for="name">Name</label>
                <span><?php echo htmlspecialchars($user[0]['name'] ?? 'N/A'); ?></span>
            </div>
            <div class="form-group">
                <label for="fullname">Fullname</label>
                <span><?php echo htmlspecialchars($user[0]['fullname'] ?? 'N/A'); ?></span>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <span><?php echo htmlspecialchars($user[0]['email'] ?? 'N/A'); ?></span>
            </div>
        </form>
    <?php } else { ?>
        <div class="alert alert-success" role="alert">
            User not found!
        </div>
    <?php } ?>
</div>
</body>
</html>

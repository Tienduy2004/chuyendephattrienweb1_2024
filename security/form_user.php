<?php
// Start the session
session_start();
require_once 'models/UserModel.php';
$userModel = new UserModel();

$user = NULL; //Add new user
$_id = NULL;
$errors = []; // Mảng chứa lỗi

if (!empty($_GET['id'])) {
    // Giải mã ID từ URL
    $_id = $userModel->decodeUserId($_GET['id']);
    $user = $userModel->findUserById($_id); 
}

if (!empty($_POST['submit'])) {
    // Kiểm tra dữ liệu đầu vào
    $name = $_POST['name'] ?? '';
    $password = $_POST['password'] ?? '';

    // Validate name
    if (empty($name)) {
        $errors['name'] = 'Chưa nhập tên';
    } elseif (!preg_match('/^[a-zA-Z0-9]{5,15}$/', $name)) {
        $errors['name'] = 'Tên không hợp lệ.';
    }

    if (empty($password)) {
        $errors['password'] = 'Chưa nhập mật khẩu.';
    } elseif (!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[~!@#$%^&*()])[A-Za-z\d~!@#$%^&*()]{5,10}$/', $password)) {
        $errors['password'] = 'Mật khẩu không hợp lệ.';
    }

    
    if (empty($errors)) {
        if (!empty($_POST['id'])) {
            $_id = $userModel->decodeUserId($_POST['id']);
            $_POST['id'] = $_id; 
        }
        
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
    <?php include 'views/header.php'?>
    <div class="container">
        <?php if ($user || !isset($_id)) { ?>
            <div class="alert alert-warning" role="alert">
                User form
            </div>
            <form method="POST">
                <input type="hidden" name="id" value="<?php echo $userModel->encodeUserId($_id); ?>">
                
                <div class="form-group">
                    <label for="name">Name</label>
                    <input class="form-control" name="name" placeholder="Name" value='<?php echo htmlspecialchars($user[0]['name'] ?? '', ENT_QUOTES, 'UTF-8'); ?>'>
                    <?php if (!empty($errors['name'])): ?>
                        <small class="text-danger"><?php echo $errors['name']; ?></small>
                    <?php endif; ?>
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password">
                    <?php if (!empty($errors['password'])): ?>
                        <small class="text-danger"><?php echo $errors['password']; ?></small>
                    <?php endif; ?>
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

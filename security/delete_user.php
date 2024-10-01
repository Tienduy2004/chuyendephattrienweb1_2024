<?php
// Start the session
session_start();
require_once 'models/UserModel.php';
$userModel = new UserModel();


$currentUserId = $_SESSION['user_id']; 

if (!empty($_GET['id'])) {
    $id = $_GET['id'];

    
    if ($currentUserId != $id) {
        
        echo "Bạn không có quyền xóa người dùng này.";
        exit;
    }

    
    $userModel->deleteUserById($id);
}


header('location: list_users.php');
?>

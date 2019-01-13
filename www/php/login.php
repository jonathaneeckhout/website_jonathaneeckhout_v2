<?php
require_once('config.php');

if(isset($_POST['username']) && isset($_POST['password'])) {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    if($user->login($username,$password)){
        header('Location: ../html/userIndex.html');
        exit;
    } else {
        $message = '<p class="error">Wrong username or password</p>';
        echo $message;
    }
}
?>

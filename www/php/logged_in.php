<?php
require_once('config.php');

if($user->is_logged_in()) {
    echo $_SESSION['username'];
} else {
    echo "";
}
?>

<?php
if(!$loggedIn) {
    header("Location: login.php#loginForm");
    die();
}
?>
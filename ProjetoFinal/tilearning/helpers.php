<?php
function redirect($url) {
    header("Location: " . $url);
    exit();
}

function isUserLoggedIn() {
    return isset($_SESSION['user_id']);
}
?>
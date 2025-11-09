<?php
require_once __DIR__ . '/init.php';

session_destroy();
redirect(BASE_URL . '/auth/login.php');
?>
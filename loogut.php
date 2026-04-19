<?php
session_start();

/* Xóa toàn bộ session */
$_SESSION = [];

/* Hủy session */
session_destroy();

/* Chuyển về trang chủ (trang nhập ID) */
header("Location: login.php");
exit;
<?php

//<!-- session_start(); -->

// 设置一个cookie
setcookie("username", "John Doe", time() + (86400 * 30), "/"); // 有效期为30天

echo $_COOKIE["username"]; // 输出 "John Doe"
?>
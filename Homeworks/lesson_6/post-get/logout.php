<?php
session_start();
session_destroy();
setcookie("firstname", '', time()-10000);
setcookie("lastname", '', time()-10000);
setcookie("login", '', time()-10000);
setcookie("password", '', time()-10000);
setcookie("email", '', time()-10000);
header("Location: index.php");

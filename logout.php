<?php
session_start();
session_destroy();

header("location: https://globalgraphicdesign.eu/blog/blog.php");
?>
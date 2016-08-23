<?php
session_start();
if(isset($_SESSION['ST_USER'])){
session_destroy();
header("Location:index.php");}
?>
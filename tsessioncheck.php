<?php
session_start();
if (isset($_SESSION['T_USER']))
{
}
else
{
    echo '<script>alert("Please Login!")</script>';
    header("Location:index.php");
}

?>
<?php
session_start();
if (isset($_SESSION['A_USER']))
{
}
else
{
    echo '<script>alert("Please Login!")</script>';
    header("Location:index.php");
}

?>
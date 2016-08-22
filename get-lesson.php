<?php
include 'functions/connect.php';

    $LID=$_GET['LES_ID'];
    $sel_user ="select * from lesson where LES_ID='$LID'";
    $run_user =mysqli_query($con,$sel_user);
    $check_user = mysqli_num_rows($run_user);


    while($row = $run_user->fetch_array())
        {
            $title=$row['LES_TITLE'];
            $content=$row['LES_CONTENT'];
            echo"<h1>$title</h1>";
            echo"$content";
        
        }

?>
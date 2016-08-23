<?php
include 'functions/connect.php';

    $SID=$_GET['SUB_ID'];
    $sel_user ="select * from subject where SUB_ID='$SID'";
    $run_user =mysqli_query($con,$sel_user);
    $check_user = mysqli_num_rows($run_user);

    while($row = $run_user->fetch_array())
        {
            $title=$row['SUB_NAME'];
            $content=$row['SUB_TEXT'];
            $sel_lessons="select * from lesson where SUB_ID='$SID'";
            $run_lessons=mysqli_query($con,$sel_lessons);
            
    echo "<h1>$title</h1>";
            while($lesrow = $run_lessons->fetch_array())
            {
              $lesid=$lesrow['LES_ID'];
              $lestitle=$lesrow['LES_TITLE'];
              echo "<h2><a href='les-content.php?LES_ID=".$lesid."' >$lestitle</a></h2><br>";
            }
        }

?>
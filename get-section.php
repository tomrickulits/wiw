<?php
include 'functions/connect.php';

    $osi=$_GET['osi'];
    $sel_user ="select * from open_subjects where OPEN_SUB_ID='$osi'";
    $run_user =mysqli_query($con,$sel_user);
    while($row=$run_user->fetch_array())
    {
        $subid=$row['SUB_ID'];
        $secid=$row['SEC_ID'];
        $osy=$row['OPEN_SUB_YEAR'];
        $sel_sub="select * from subject where SUB_ID=$subid";
        $sel_sec="select * from section where SEC_ID=$secid";
        $run_sub=mysqli_query($con,$sel_sub);
        $run_sec=mysqli_query($con,$sel_sec);
        while($subject=$run_sub->fetch_array())
        {
            $subname=$subject['SUB_NAME'];
        }
        while($section=$run_sec->fetch_array())
        {
            $secname=$section['SEC_NAME'];
        }
        
    echo "$subname,$secname:$osy";
    }



?>
<?php
include 'functions/connect.php';
if (isset($_SESSION['T_ID']))
{
    $TID=$_SESSION['T_ID'];
    $sel_teach="select * from open_subjects where t_id='$TID'";
    $run_teach=mysqli_query($con,$sel_teach);
    while($row=$run_teach->fetch_array())
    {
            $subid=$row['SUB_ID'];
            $secid=$row['SEC_ID'];
            $opsuby=$row['OPEN_SUB_YEAR'];
            $osi=$row['OPEN_SUB_ID'];
        $sel_sub="select * from subject where sub_id='$subid'";
        $sel_sec="select * from section where sec_id='$secid'";
        $run_sub=mysqli_query($con,$sel_sub);
        $run_sec=mysqli_query($con,$sel_sec);
        while($subj=$run_sub->fetch_array())
        {
            $subname=$subj['SUB_NAME'];
        }
        while($sect=$run_sec->fetch_array())
        {
            $secname=$sect['SEC_NAME'];
        }
        echo "<a href='class-content.php?osi=$osi' class ='list-group-item'>$subname:$secname-$opsuby</a><br>";
    }
    
    
}
?>
<?php
include 'functions/connect.php';

    $OSID=$_GET['OSUB_ID'];
    $sel_osub="select * from open_subjects where OPEN_SUB_ID='$OSID'";
    $run_osub=mysqli_query($con,$sel_osub);
    while($osubrow=$run_osub->fetch_array())
    {
        $subid=$osubrow['SUB_ID'];
        
        $sel_sub="select * from subject where SUB_ID='$subid'";
        $run_sub=mysqli_query($con,$sel_sub);
        while($subrow=$run_sub->fetch_array())
        {
            $subname=$subrow['SUB_NAME'];
            echo "<h1>$subname</h1>";
            
            $sel_les="select * from lesson where OPEN_SUB_ID='$OSID'";
            $run_les=mysqli_query($con,$sel_les);
            while($lesrow=$run_les->fetch_array())
            {
              $lesid=$lesrow['LES_ID'];
              $lestitle=$lesrow['LES_TITLE'];
              echo "<h2><a href='les-content.php?LES_ID=".$lesid."' >$lestitle</a></h2><br>";
                
            }
        }
        
    }

?>
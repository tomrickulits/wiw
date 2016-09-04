<?php 
include 'functions/connect.php';

    $SID=$_SESSION['ST_ID'];
    $sel_user ="select * from enroll_list where ST_ID='$SID'";
    $run_user =mysqli_query($con,$sel_user);
    $check_user = mysqli_num_rows($run_user);


        while($row = $run_user->fetch_array())
      {
          $subid=$row['OPEN_SUB_ID'];
            $sel_opsub = "select * from OPEN_SUBJECTS where OPEN_SUB_ID='$subid'";
            $run_opsub =mysqli_query($con,$sel_opsub);

            while ($subrow=$run_opsub->fetch_array())
            {
                $opsubid=$subrow['SUB_ID'];
                $sel_subj="select * from subject where SUB_ID='$opsubid'";
                $run_subj=mysqli_query($con,$sel_subj);

                while ($subject=$run_subj->fetch_array())
                {
                    $title=$subject['SUB_NAME'];
                    echo "<a href='subj-content.php?OSUB_ID=".$subid."' class ='list-group-item'>$title</a><br>";

                }


            }
      }

?>
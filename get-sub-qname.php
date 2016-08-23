<?php

        $SID=$_SESSION['ST_ID'];
        $sel_user ="select * from students where ST_ID='$SID'";
        $run_user =mysqli_query($con,$sel_user);
        $check_user = mysqli_num_rows($run_user);

        while($row = $run_user->fetch_array())
        {
            $sel_el ="select * from enroll_list where ST_ID='$SID'";
            $run_el =mysqli_query($con,$sel_el);
            while ($elrow=$run_el->fetch_array())
            {
                $opsubid=$elrow['OPEN_SUB_ID'];
                $sel_opsub="select * from open_subjects where OPEN_SUB_ID=$opsubid";
                $run_opsub=mysqli_query($con,$sel_opsub);
                while($opsubrow=$run_opsub->fetch_array())
                {
                    $secid=$opsubrow['SUB_ID'];
                    $sel_sec="select * from subject where SUB_ID=$secid";
                    $run_sec=mysqli_query($con,$sel_sec);
                    while($secrow=$run_sec->fetch_array())
                    {
                        $subname=$secrow['SUB_NAME'];
                    }

                }
            }
        }
        $QID=$_GET['quiz_id'];
        $sel_quiz="select * from quiz where quiz_id=$QID";
        $run_quiz=mysqli_query($con,$sel_quiz);
        while($quizrow=$run_quiz->fetch_array())
        {
            $quiztitle=$quizrow['QUIZ_TITLE'];
        }
?>
<?php
                                        
include "functions/connect.php";
$sel_os="select * from open_subjects";
$run_os=mysqli_query($con,$sel_os);

while($row=$run_os->fetch_array())
{
    $id = $row['OPEN_SUB_ID'];
    $id2=$row['SUB_ID'];
    $id3=$row['SEC_ID'];
    $id4=$row['T_ID'];
    $year=$row['OPEN_SUB_YEAR'];
    echo '<tr class="odd gradeX" id="rec">';
    echo "<td>".$id."</td>";
    $sel_sub="select * from subject where SUB_ID=$id2";
    $run_sub=mysqli_query($con,$sel_sub);
    
    while($subrow=$run_sub->fetch_array())
    {
        echo "<td>".$subrow['SUB_NAME']."</td>";
    }
     
    $sel_sec="select * from section where SEC_ID=$id3";
    $run_sec=mysqli_query($con,$sel_sec);
    
    while($secrow=$run_sec->fetch_array())
    {
        echo "<td>".$secrow['SEC_NAME']."</td>";
    }
    echo "<td>".$year."</td>"; 
    $sel_t="select * from teachers where T_ID=$id4";
    $run_t=mysqli_query($con,$sel_t);
    
    while($trow=$run_t->fetch_array())
    {
        echo "<td>".$trow['T_LNAME']."</td>";
    }
    

     echo "<td>".
    '
    <a href="edit-open-subject.php?lid='.$id.'"><button>Edit<i class="icon-plus icon-white"></i></button</a>
    <a href="delete-open-subject.php?lid='.$id.'"><button>Delete<i class="icon-plus icon-white"></i></button</a>
    </div>'
            ."</td>";   

    echo "</tr>";

}


?>
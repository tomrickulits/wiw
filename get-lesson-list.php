<?php
                                        
include "functions/connect.php";
$osid=$_GET['osi'];
$sel_less="select * from lesson where OPEN_SUB_ID=$osid";
$run_less=mysqli_query($con,$sel_less);

while($row=$run_less->fetch_array())
{
    $id = $row['OPEN_SUB_ID'];
    echo '<tr class="odd gradeX" id="rec">';
    echo "<td>".$row['LES_ID']."</td>";
    echo "<td>".$row['LES_TITLE']."</td>";
     echo "<td>".
    '
    <a href="edit-lesson.php?lid='.$row["LES_ID"].'"><button>Edit<i class="icon-plus icon-white"></i></button</a>
    <a href="delete-lesson.php?lid='.$row["LES_ID"].'&osi='.$row["OPEN_SUB_ID"].'"><button>Delete<i class="icon-plus icon-white"></i></button</a>
    </div>'
            ."</td>";

    echo "</tr>";


}


?>
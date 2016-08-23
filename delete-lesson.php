<?php 
include 'functions/connect.php';
$osid=$_GET['osi'];
$lesid=$_GET['lid'];
$sql = "delete from lesson where LES_ID=$lesid";

if ($con->query($sql) === TRUE) 
{
    echo "New record created successfully";
    header("Location:class-content.php?osi=$osid");
} 
else 
{
echo "Error: " . $sql . "<br>" . $con->error;
}$con->close();

echo '<h2>You posted:</h2><hr />'. $lestitle . '<hr />' . stripslashes($lescontent);
    
?>
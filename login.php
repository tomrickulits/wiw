<?php
if(session_id() == '' || !isset($_SESSION)) {
    // session isn't started
    session_start();
}
else
{
    session_destroy();
    session_start();
}
include 'functions/connect.php';
/*$username=$_POST['username'];
$password=$_POST['password'];

$username=mysql_real_escape_string($_POST['username']);
$password=mysql_real_escape_string($_POST['password']);

$query="SELECT * FROM students WHERE ST_USER='$username'AND ST_PASS='$password'";
$result = mysqli_query($con,$query) or die ("Verification Error");
$array=mysql_fetch_array($result);

mysqli_query($con,"SELECT * FROM Persons")


if($array['ST_USER']==$username)
{
    $_SESSION['ST_USER'] = $username;
    $_SESSION['ST_FNAME'] = $array['ST_FNAME'];
    $_SESSION['ST_MNAME'] = $array['ST_MNAME'];
    $_SESSION['ST_LNAME'] = $array['ST_LNAME'];
    $_SESSION['ST_ID'] = $array['ST_ID'];
    $_SESSION['SEC_ID'] = $array['SEC_ID'];
    header("Location:home.php");
}
else
{
    echo
        '<script language="javascript">
        alert("Incorrect Username or Password")
        </script>
        <meta http-equiv="refresh" content="0;url=index.php"/>';
}*/

if(isset($_POST['commit']))
{
$user = mysqli_real_escape_string($con,$_POST['username']);
$pass = mysqli_real_escape_string($con,$_POST['password']);
$sel_user ="select * from students where ST_USER='$user' AND ST_PASS='$pass'";
$run_user =mysqli_query($con,$sel_user);
$check_user = mysqli_num_rows($run_user);
    
    

$sel_teach ="select * from teachers where T_USER='$user' AND T_PASS='$pass'";
$run_teach =mysqli_query($con,$sel_teach);
$check_teach = mysqli_num_rows($run_teach);    
    
$sel_admin ="select * from administrators where A_USER='$user' AND A_PASS='$pass'";
$run_admin =mysqli_query($con,$sel_admin);
$check_admin = mysqli_num_rows($run_admin);    

    
if($check_user>0)
{
    while($row = $run_user->fetch_array())
  {
      $_SESSION['ST_USER']=$user;
      $_SESSION['ST_FNAME']=$row['ST_FNAME'];
      $_SESSION['ST_MNAME']=$row['ST_MNAME'];
      $_SESSION['ST_LNAME']=$row['ST_LNAME'];
      $_SESSION['ST_ID']=$row['ST_ID'];
  }
    $_SESSION['ST_USER']=$user;
    $_SESSION['type']='student';
    header("Location:subjects.php");
}
else if($check_teach>0)
{
    while($trow = $run_teach->fetch_array())
  {
      $_SESSION['T_USER']=$user;
      $_SESSION['T_FNAME']=$trow['T_FNAME'];
      $_SESSION['T_MNAME']=$trow['T_MNAME'];
      $_SESSION['T_LNAME']=$trow['T_LNAME'];
      $_SESSION['T_ID']=$trow['T_ID'];
  }
    $_SESSION['T_USER']=$user;
    $_SESSION['type']='teacher';
    header("Location:classes.php");
}
else if($check_admin>0)
{
    while($arow = $run_admin->fetch_array())
  {
      $_SESSION['A_USER']=$user;
      $_SESSION['A_FNAME']=$arow['A_FNAME'];
      $_SESSION['A_MNAME']=$arow['A_MNAME'];
      $_SESSION['A_LNAME']=$arow['A_LNAME'];
      $_SESSION['A_ID']=$arow['A_ID'];
  }
    $_SESSION['A_USER']=$user;
    $_SESSION['type']='admin';
    header("Location:admin.php");
}
else 
{

echo '<script>alert("Username or password is not correct, try again!")</script>';
header("Location:index.php");
}
}











?>
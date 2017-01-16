<?php
	include('connection.php');
	require_once('auth.php');
$name = $_SESSION['SESS_FIRST_NAME'];
$reg =  $_SESSION['SESS_MEMBER_ID'];
	$sql="INSERT INTO t_sub (`name`,`regno`,`q1`,`q2`,`q3`,`q4`,`q5`,`q6`,`q7`,`q8`,`q9`,`q10`)

VALUES

('$name','$reg','$_POST[group1]','$_POST[group2]','$_POST[group3]','$_POST[group4]','$_POST[group5]','$_POST[q6]','$_POST[q7]','$_POST[q8]','$_POST[q9]','$_POST[q10]')";

 

if (!mysqli_query($con,$sql))

  {

  die('Error: ' . mysqli_error($con));

  }


 

mysqli_close($con)
?>
<script type="text/javascript">location.href = 'main.php';</script>
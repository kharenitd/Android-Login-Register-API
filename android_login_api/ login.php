<?php
 $con = mysqli_connect("127.0.0.1","root","","BloodBankDB");
if (!$con)
	{
		die('Could not connect: ' . mysqli_error());
	}
if( isset($_POST["json"]) ) {
    $data = json_decode($_POST["json"]);
 
 $username="khare";
    $password="lovy";

 
 $sql = "select * from DonorInfo where username='$username' and password='$password'";
  $res=mysqli_query($con,$sql);
 
 $row=mysqli_fetch_array($res,MYSQLI_ASSOC);
$active=$row['active'];
$count=mysqli_num_rows($res);
if($count==1)
{
	echo "yes";
	$res= array(
		"status"=>'Logged in Successfully...');
	 	//echo json_encode($res);
}
else 
{
	echo "no";
$res= array(
		"status"=>'Invalid Username or Password');
	 	//echo json_encode($res);
}
 }
?>
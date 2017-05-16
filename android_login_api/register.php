<?php
 $con = mysqli_connect("127.0.0.1","root","","BloodBankDB");
if (!$con)
	{
		die('Could not connect: ' . mysqli_error());
	}

if( isset($_POST["json"]) ) {
    $data = json_decode($_POST["json"]);
    $name=$data->name;
 $email=$data->email;
 $phone=$data->phone;
    $address=$data->address;
    $city=$data->city;
    $username=$data->username;
    $password=$data->password;
    $id=$data->id;
    $gender=$data->gender;
$sql3="insert into DonorInfo values('".$id."','".$username."','".$password."','".$name."','".$email."','".$address."','".$city."','".$gender."','".$phone."')";
		$result3=mysqli_query($con,$sql3);

	
	  
		/*$sql3="CALL insertData('".$name."','".$email."','".$phone."')";
		$result3=mysqli_query($con,$sql3);
		if (mysqli_affected_rows($con) == 1) {
                          $res= array(
		"status"=>'Inserted');
			
		}
                   else
                      $res= array("status"=>'Failed');
              echo json_encode($res);*/
	

	/* $res= array(
		"status"=>$name);
	 echo json_encode($res);	*/

	}
 
	
	?>
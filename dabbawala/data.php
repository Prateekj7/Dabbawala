<?php

$con=mysqli_connect('localhost','id5251969_dabbawala','mohan1720');
if(!$con)
{
	echo 'Not Connected To Server';
}
if(!mysqli_select_db($con,'id5251969_project'))
{
	echo 'Database Not Selected';
}


if(isset($_POST['submit'])){
$Name=$_POST['fname'];
$Experience=$_POST['lname'];
$Present_Address=$_POST['psw'];
$Contact_Number=$_POST['Username'];
$Email_Address=$_POST['psw1'];

$subject1 = "Registration Details";
$body1 = "Hello $Name,Your registration as a vendor is under process.You will get a confirmation call from our office soon for further processes.\r\n\r\nFor any further query Call  +91 9678574031";
$from1 = "From: dabba.wala18@gmail.com";

$to2 = "dabba.wala18@gmail.com";
$subject2 = "New Vendor Registration";
$body2 = "Vendor $Name has registered with us.\r\n\r\nVendor Details\r\nName:$Name\r\nExperience:$Experience\r\nPresent Address:$Present_Address\r\nContact Number:$Contact_Number\r\nEmail Address:$Email_Address";
$from2 = "From: $Email_Address";

$sql="INSERT INTO dabbawala (Name,Experience,Present_Address,Contact_Number,Email_Address) VALUES ('$Name','$Experience','$Present_Address','$Contact_Number','$Email_Address')";

if(!mysqli_query($con,$sql))
{
	echo 'Not Inserted';
}
else
{
	mail($Email_Address,$subject1,$body1,$from1);
	mail($to2,$subject2,$body2,$from2);
		echo "<script>
		window.location.href='index.html';
		alert('Your registration as a vendor is under process.You will get a confirmation call from our office soon for further processes.');
		</script>";
}


}
else{
	echo 'Error';
}


?>
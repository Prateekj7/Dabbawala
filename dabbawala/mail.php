<?php



if(isset($_POST['submit'])){
$name=$_POST['fname'];
$order1=$_POST['1name'];
$order2=$_POST['2name'];
$order5=$_POST['5name'];
$order6=$_POST['6name'];
$order3=$_POST['3name'];
$order4=$_POST['4name'];
$order7=$_POST['7name'];
$order8=$_POST['8name'];
$contact=$_POST['Username'];
$address=$_POST['psw'];
$email=$_POST['psw1'];


$subject1 = "Thankyou for ordering";
$body1 = "Order Details\r\n\r\nName : $name\r\nOrder : $order1 - $order2 , $order5 - $order6 , $order3 - $order4, $order7 - $order8\r\nContact Number : $contact\r\nDelivery Address : $address\r\nE-mail Address : $email\r\n\r\nBill will be provided at the time of delivery\r\n\r\nFor any further query Call  +91 9678574031";
$from1 = "From: dabba.wala18@gmail.com";

$to2 = "dabba.wala18@gmail.com";
$subject2 = "You have a new order";
$body2 = "Order Details\r\n\r\nName : $name\r\nOrder : $order1 - $order2 , $order5 - $order6 , $order3 - $order4, $order7 - $order8\r\nContact Number : $contact\r\nDelivery Address : $address\r\nE-mail Address : $email";
$from2 = "From: $email";


$x=mail($email,$subject1,$body1,$from1);
$y=mail($to2,$subject2,$body2,$from2);
if($x==true && $y==true){
		echo "<script>
		window.location.href='index.html';
		alert('Your order has been placed successfully.');
		</script>";
}else{
	echo "Order is not placed";
}

}else{
	echo "Error";
}

?>


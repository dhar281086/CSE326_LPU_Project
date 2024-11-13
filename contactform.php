<?php
require("db.php");
$name=$ceamil=$mob=$sub=$msg="";


if(!empty($_POST['InputPhone']))
	$mob=mysql_escape_string($_POST['InputPhone']);


if((empty(mysql_escape_string($_POST['InputName'])))||(empty(mysql_escape_string($_POST['InputEmail'])))||(empty(mysql_escape_string($_POST['InputSubject'])))||(empty(mysql_escape_string($_POST['InputMessage'])))||(empty(mysql_escape_string($_POST['answer']))))
	{
		echo "<script>
				alert('Please enter the mandatory details!!');
				window.location.href='index.php';
			</script>";
    		exit();
	}
	else{
		$name=mysql_escape_string($_POST['InputName']);
		$cemail=mysql_escape_string($_POST['InputEmail']);
		$sub=mysql_escape_string($_POST['InputSubject']);
		$msg=mysql_escape_string($_POST['InputMessage']);
	}


$qr="insert into contact values (null,'$name','$cemail','$mob','$sub','$msg')";
	mysql_query($qr);

$email="dharmendra.pathak@cdgi.edu.in";
$headers = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
			// More headers
			$headers .= 'From: <dharmendra.pathak@cdgi.edu.in>' . "\r\n";
			$msg =  "Hello dharmendra! You have received a new message! Details are: Sender Name: $name, Email ID: $cemail, Mobile: $mob, Subject: $sub and Message is: $msg";
			mail($email,"Profile Visited",$msg,$headers);

	echo "<script>
	alert('Thanking you!! I will get back to you soon!!!!!');
	window.location.href='index.php';
	</script>";
    exit();

?>
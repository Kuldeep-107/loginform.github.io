<?php

//variable setting
 $name = $_REQUEST['name'];
 $email = $_REQUEST['Email'];
 $massage = $_REQUEST['Massage'];

 //check input field

 if (empty($name) || empty($email) || empty($massage)) 
 {
 	echo "Please fill all the fields";
 }
 else{
 	mail("kuldeep1071996@gmail.com", "E-bot massage", $message, "From: $name <$email>");
 	echo "<script type = 'text/javascript'>alert('Your massage submitted Succesfully');
    widow.history.log(-1);
 	</script>";
 }
?>
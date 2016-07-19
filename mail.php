<?php

/*http://52.24.237.138/croplyphpmail/mail.php?firstName=&lastName=&email=&phoneNumber=&ticketedSts=&ans1=&ans2=&ans3=&ans4=&ans5=*/
/*SEND DETAILS OF PROFILE AND QUESTIONS AS EMAIL*/

 $firstName			=$_REQUEST['firstName'];
 $lastName			=$_REQUEST['lastName'];
 $email				=$_REQUEST['email'];
 $phoneNumber		=$_REQUEST['phoneNumber'];
 $ticketedSts		=$_REQUEST['ticketedSts'];
 if($ticketedSts=="1")
 {
	 $ticketedSts='YES';
 }
 elseif($ticketedSts="NULL")
 {
	 $ticketedSts='NO';
 }
 else
 {
	  $ticketedSts='NO';
 }
 
 $ans1				=$_REQUEST['ans1'];
 $ans2				=$_REQUEST['ans2'];
 $ans3				=$_REQUEST['ans3'];
 $ans4				=$_REQUEST['ans4'];
 $ans5				=$_REQUEST['ans5'];
 if($firstName!=''&&$lastName!=''&&$email!=''&&$phoneNumber!=''&&$ticketedSts!=''&&$ans1!=''&&$ans2!=''&&$ans3!=''&&$ans4!=''&&$ans5!='')
 {
	//$to = "rajvir.k@iapptechnologies.com";
	$to = "dilip.k@iapptechnologies.com";
	$subject="Career Evaluator";
	$txt="First name:$firstName<br/><br/>";
	$txt.="Last name:$lastName<br/><br/>";
	$txt.="Email: $email<br/><br/>";
	$txt.="Phone Number: $phoneNumber<br/><br/>";
	$txt.="Subscribe to the Center for Strategic Communication Excellence:$ticketedSts<br/><br/>";
	$txt.="Answer1: $ans1<br/><br/>";
	$txt.="Answer2: $ans2<br/><br/>";
	$txt.="Answer3: $ans3<br/><br/>";
	$txt.="Answer4: $ans4<br/><br/>";
	$txt.="Answer5: $ans5<br/><br/>";
	//$txt.="<a href='https://www.google.co.in'>www.google.com</a>";
	$headers= "MIME-Version: 1.0" . "\r\n";
	$headers.= "Content-type:text/html;charset=UTF-8" . "\r\n";				
	$headers.= "From:Cropley" . "\r\n";
						
//////////////////////////////////////////////////////////////////
	$sendMail=mail($to,$subject,$txt,$headers);
	if($sendMail==true)
	{
		echo json_encode(array('success'=>'1','message'=>'Mail Sent Successfully.'));
	 	exit();
	}
	else
	{
		echo json_encode(array('success'=>'0','message'=>'Mail sending Failure'));
	 	exit();
	}

 }
 else
 {
	 echo json_encode(array('success'=>'0','message'=>'Please enter all fields.'));
	 exit();	
 }
?>
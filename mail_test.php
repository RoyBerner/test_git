<?php

	include ('../data/config.php');
	include('../data/conn.php');


    

//sendIcalEvent($from_name, $from_address, $to_name, $to_address, $startTime, $endTime, $subject, $description, $location);


$subject = 'test';  
$from_address   = 'r.berner@asre.nl';
$to_name   = 'Roy';
$to_address   = 'r.p.berner@me.com';
$to_address2   = 'r.berner@asre.nl';
$to_cc   = $_POST['email_secretaresse'];
$startTime = $_POST['startTime'];        
$endTime = $_POST['endTime'];  
$aanhef = 'Hey'; 
$tekst = 'Veel tekst'; 
$college = 'test college'; 
$datum = 'test datum'; 
$begintijd = '15:00'; 
$eindtijd = '17:00'; 
$bedrag = '500'; 
$reiskosten = $_POST['reiskosten']; 
$voornaam_medewerker = 'Roy'; 
$medewerker = $_POST['medewerker']; 
$collegezaal = $_POST['collegezaal']; 
    
   
		
	
		$message = "
$aanhef
$tekst
Alvast bedankt!
Hartelijke groet,
$voornaam_medewerker
College: $college
Datum: $datum
Tijd: $begintijd - $eindtijd
Vergoeding: $bedrag
Reiskosten: $reiskosten
";
		
		// Always set content-type when sending HTML email
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
		
		// More headers
		$headers = "From: ".$medewerker." <".$from_address.">\n";
    $headers .= "CC: ".$to_cc."\r\n";
    $headers .= "Reply-To: ".$medewerker." <".$from_address.">\n";
		
		$mail = mail($to_address, $subject, $message, $headers);


?>
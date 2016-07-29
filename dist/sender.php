<?php
	
	(isset($_POST['nnm'])) ? $name = substr(htmlspecialchars(trim($_POST['nnm'])),0,30) : $name = "-";
	(isset($_POST['mml'])) ? $email = substr(htmlspecialchars(trim($_POST['mml'])),0,30) : $email = "-";
	(isset($_POST['nph'])) ? $phone = substr(htmlspecialchars(trim($_POST['nph'])),0,30) : $phone = "-";

    $to  = "ctrl-break@mail.ru" ;
    $subject = "Заявка с сайта meo.su";
    $message = "
    		<html>	
    			<body>
    			Имя : ".$name." <br>
    			Телефон : ".$phone." <br>
    			Email : ".$email." </body></html>";

    $headers  = "Content-type: text/html; charset=utf-8 \r\n";

	if ( mail($to, $subject, $message, $headers) )
	{
		header('Location: /?message=1');
	} else 
	{
		header('Location: /?message=0');
	};
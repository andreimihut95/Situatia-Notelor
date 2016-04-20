<?php
	$nume = $_POST['nume'];
	$prenume = $_POST['prenume'];
	$adresa = $_POST['adresa'];
	$bday = $_POST['bday'];
	$cnp = $_POST['cnp'];
	$serie = $_POST['serie'];
	$mail = $_POST['email'];
	$telefon = $_POST['telefon'];
	$faculta = $_POST['faculta'];
	$sectia = $_POST['sectia'];
	$anul = $_POST['an'];
	$form_content = "Baza de date Facultatea Politehnica Timisoara\nNume: $nume\nPrenume: $prenume\nAdresa: $adresa\n
					 Data nasterii: $bday\nCNP:$cnp\nSerie buletin: $serie\n Mail: $mail\nTelefon: $telefon\n Facultatea: $faculta\n
					 Sectia: $sectia\nAnul: $anul";
	$subiect="Baza de date";
	$mailheader="De pe siteul smecher :)";
	$recipient="andrei.mihut95@gmail.com";
	mail($recipient, $subiect, $form_content, $mailheader) or die("Error!");
	header("location: Register#Success");
?>
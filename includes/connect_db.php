<?php
    try{
		  $db = new PDO('mysql:host=localhost;dbname=phpbb3.2', 'root', '');
	} catch(PDOexception $e){
		die('Erreur:' .$e->getMessage());
	}

?>
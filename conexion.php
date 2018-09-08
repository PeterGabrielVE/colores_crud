<?php

	$link = 'mysql:host=localhost;dbname=yt_colores';
	$usuario = 'root';
	$pass = '';

	try{

		$pdo = new PDO($link,$usuario,$pass);

		/*	foreach($pdo->query('SELECT * from `colores`') as $fila) {
        	print_r($fila);
    		} */
    	
		echo 'Conectado';

	}catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}

?>
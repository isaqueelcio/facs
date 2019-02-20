<?php

$alegria = $_POST["alegria"]; //1
$tristeza = $_POST["tristeza"]; //2
$desgosto = $_POST["desgosto"]; //3
$desprezo = $_POST["desprezo"]; //4
$raiva = $_POST["raiva"];   //5
$medo = $_POST["medo"];    //6
$surpresa = $_POST["surpresa"];  //7
$valencia = $_POST["valencia"];  //8
$engajamento = $_POST["engajamento"]; //9
$tempo = $_POST["tempo"];
$ID_experimento= '3';
$Id_usuario= '24';
$ID_Atividade= '3';

/*
 echo json_encode( array( "alegria" => $alegria, "tristeza" => $tristeza, "desgosto" => $desgosto, "desprezo" => $desprezo,"raiva" => $raiva, "medo" => $medo, "surpresa" => $surpresa, "valencia" => $valencia, "engajamento" => $engajamento, "tempo" => $tempo ));
*/
//conexão banco

$db = new  mysqli ('localhost', 'root','*Lifes16','emobd5');
   if (!$db) 
   {
	echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
   }
   		/*
        $alegria = '100'; //1
		$tristeza = '100'; //2
		$desgosto = '100'; //3
		$desprezo = '100'; //4
		$raiva = '100';   //5
		$medo = '100';    //6
		$surpresa = '100';  //7
		$valencia = '100';  //8
		$engajamento = '100'; //9
		$tempo = '12.12';
		$ID_experimento= '1';
		$Id_usuario= '1';
		$ID_Atividade= '1';

		*/
		
   $query = "INSERT INTO dadosemocao (alegria, tristeza, desgosto, desprezo, raiva, medo, surpresa, valencia, engajamento, tempo, ID_experimento,Id_usuario, ID_Atividade) VALUES ('$alegria', '$tristeza', '$desgosto', '$desprezo', '$raiva', '$medo', '$surpresa','$valencia', '$engajamento', '$tempo', '$ID_experimento','$Id_usuario', '$ID_Atividade')";
    $db->query($query);
   

    mysql_close($db);

?>

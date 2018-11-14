<?php
include ('bdd.inc.php');
	function SELECT()
	{
		if ($col == '*') 
		{
			$sql = "SELECT $colonne FROM $table WHERE $condition";
		}
	}

	function REQUETE($colonne,$table,$condition,$conn,$return)
	{
		$sql = "SELECT $colonne FROM $table WHERE $condition";
		$req = $conn->query($sql);
		if ($return == 1) 
		{
			$data = $req->fetch()
			return $data;
		}
	}

	REQUETE('code_commune_INSEE','commune','code_postal = 19100',$conn,1);
	// echo $data['nom_commune'];
	echo "function ne marche pas";



?>
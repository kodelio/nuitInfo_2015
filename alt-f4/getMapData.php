<?php

$result = array();
$i = 0;

$bdd = new PDO('mysql:host=localhost;dbname=gestioncrise_alt_f4;charset=utf8', 'root', '');

$myquery = $bdd->prepare("select LOCALISATION_X, LOCALISATION_Y, NOM, DESCRIPTION from crise");


$myquery->execute(array());

while($row = $myquery->fetch())
{
  $result[$i]["latLng"] = array($row["LOCALISATION_X"],$row["LOCALISATION_Y"]);
  $result[$i]["name"] = $row["NOM"];
  $result[$i]["details"] = $row["DESCRIPTION"];
  $i++;
}

//print_r($result);
echo json_encode($result);
/*
if($row != null) {
   echo json_encode($result);
}else{
   return null;
}*/
?>
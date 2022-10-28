<?php

if(!empty($_GET['id'])){
include_once('config.php');
 $Id =$_GET['id'];
$Select ="SELECT * FROM usuarios Where id=$Id";
$result = $conecta->query($Select);
if($result->num_rows>0){
$Delete ="DELETE FROM usuarios WHERE id=$Id";
$Dell2 =$conecta->query($Delete);

}



}

header('Location:sistema.php');
?>
<?php
$Dbhost='localhost';
$user='root';
$pass='';
$banco ='tb_usuarios';

$conecta = new mysqli($Dbhost,$user,$pass,$banco);

/*Verificação para saber se o se esta conectado ao banco de dados
if($conecta ->connect_errno){
echo "Error";
}
else{
    echo "Ta on pai ";
}
*/
?>
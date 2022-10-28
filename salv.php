<?php
include_once('config.php');


if(isset($_POST['update'])){
    $Id=$_POST['id'];
    $nome =$_POST['nome'];
    $email =$_POST['email'];
    $senha = $_POST['senha'];
    $telefone =$_POST['telefone'];
    $sexo = $_POST['genero'];
    $data_nasc = $_POST['data_nascimento'];
    $cidade = $_POST['cidade'];
    $estado =$_POST['estado'];
    $endereco = $_POST['endereco'];



    $sqlInsert = "UPDATE usuarios 
    SET nome='$nome',senha='$senha',email='$email',telefone='$telefone',sexo='$sexo',data_nasc='$data_nasc',cidade='$cidade',estado='$estado',endereco='$endereco'
    WHERE id=$Id";
    $result = $conecta->query($sqlInsert);
    print_r($result);

}

header('Location: sistema.php');
?>
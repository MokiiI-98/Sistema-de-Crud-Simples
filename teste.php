<?php
session_start();
// print_r($_REQUEST);
    if(isset($_POST['submit'])&& !empty($_POST['email'])&& !empty($_POST['senha'])){
// Acessa

include_once('config.php');
$email =$_POST['email'];
$senha=$_POST['senha'];

// print_r('Email:'.$email);
// print_r('<br><br>');
// print_r('Senha:'.$senha);

$sql="SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha' ";

$resulte = $conecta ->query($sql);
// print_r($sql);
// print_r('<br><br>');
// print_r($resulte);
        if(mysqli_num_rows($resulte)<1){

           unset($_SESSION['email']);
           unset($_SESSION['senha']);


            header('Location: login.php');
        }else{

            $_SESSION['email']= $email;
            $_SESSION['senha']= $senha;

            header('Location: sistema.php');
        }
    }else{
        // Não acessa
        header('Location: login.php');
    }

?>
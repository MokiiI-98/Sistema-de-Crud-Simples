
<?php

if(!empty($_GET['id']))
{
    

    include_once('config.php');

    $Id =$_GET['id'];
    $sqlSelect="SELECT * FROM usuarios Where id=$Id";

    $result = $conecta->query($sqlSelect);

 if($result ->num_rows>0){
    while($dados_usuario = mysqli_fetch_assoc($result)){
    $nome =$dados_usuario['nome'];
    $email =$dados_usuario['email'];
    $senha = $dados_usuario['senha'];
    $telefone =$dados_usuario['telefone'];
    $sexo = $dados_usuario['sexo'];
    $data_nasc = $dados_usuario['data_nasc'];
    $cidade = $dados_usuario['cidade'];
    $estado =$dados_usuario['estado'];
    $endereco = $dados_usuario['endereco'];
    }
 
 }else{
    header("Location:sistema.php");
 }

   
    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Formulário clientes</title>
<style>
    body{
        font-family: Arial, Helvetica, sans-serif;
        background-image: linear-gradient(to left, rgb(12, 92, 78), rgb(3, 51, 29));
    }
    .box{
        color: white;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
        background-color: rgba(0, 0, 0, 0.6);
        padding: 13px;
        border-radius: 16px;
        width: relative;
        
    }
    fieldset{
        border: 3px solid dodgerblue;
    }
    legend{
        border: 1px solid dodgerblue;
        padding: 10px;
        text-align: center;
        background-color: dodgerblue;
        border-radius: 19px;
    }
    .inputBox{
        position: absolute;
    }
    .inputUser{
        background: none;
        border: none;
        border-bottom: 1px solid white;
        outline: none;
        color: white;
        font-size: 15px;
        width: 100%;
        letter-spacing: 2px;
    }
    .labelInput{
        position: absolute;
        top: 0px;
        left: 0px;
        pointer-events: none;
        transition: .5s;
    }
    .inputUser:focus ~ .labelInput,
    .inputUser:valid ~ .labelInput{
        top: 20px;
        font-size: 12px;
        color: dodgerblue;
    }
    #data_nascimento{
        border: none;
        padding: 8px;
        border-radius: 10px;
        outline: none;
        font-size: 15px;
    }
    #submit{
        background-image: linear-gradient(to right,rgb(0, 92, 197), rgb(90, 20, 220));
        width: 100%;
        border: none;
        padding: 15px;
        color: white;
        font-size: 15px;
        cursor: pointer;
        border-radius: 10px;
    }
    #submit:hover{
        background-image: linear-gradient(to right,rgb(0, 80, 172), rgb(80, 19, 195));
    }
</style>
</head>
<body>
<div class="box">
    <form action="salv.php" method="POST">
        <fieldset>
            <legend><b>Form of Custumers</b></legend>
            <br>
            <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" value=<?php echo $nome;?> required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="senha" id="senha" class="inputUser" value=<?php echo $senha;?> required>
                    <label for="senha" class="labelInput">Senha</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" value=<?php echo $email;?> required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" value=<?php echo $telefone;?> required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>
                <p>Sexo:</p>
                <input type="radio" id="feminino" name="genero" value="feminino" <?php echo ($sexo == 'feminino') ? 'checked' : '';?> required>
                <label for="feminino">Feminino</label>
                <br>
                <input type="radio" id="masculino" name="genero" value="masculino" <?php echo ($sexo == 'masculino') ? 'checked' : '';?> required>
                <label for="masculino">Masculino</label>
                <br>
                <input type="radio" id="outro" name="genero" value="outro" <?php echo ($sexo == 'outro') ? 'checked' : '';?> required>
                <label for="outro">Outro</label>
                <br><br>
                <label for="data_nascimento"><b>Data de Nascimento:</b></label>
                <input type="date" name="data_nascimento" id="data_nascimento" value=<?php echo $data_nasc;?> required>
                <br><br><br>
                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" value=<?php echo $cidade;?> required>
                    <label for="cidade" class="labelInput">Cidade</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="estado" id="estado" class="inputUser" value=<?php echo $estado;?> required>
                    <label for="estado" class="labelInput">Estado</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" value=<?php echo $endereco;?> required>
                    <label for="endereco" class="labelInput">Endereço</label>
                </div>
                <br><br>
				<input type="hidden" name="id" value=<?php echo $Id;?>>
                <input type="submit" name="update" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>
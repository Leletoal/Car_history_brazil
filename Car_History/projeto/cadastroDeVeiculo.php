<?php
use Database\Database;
    include('config.php');
    require_once "../Database.php";
    
?>


<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>CRUD - Cadastrar </title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="form_cd">
        <?php

        if(isset($_POST['acao']) && $_POST ['form'] == 'f_form'){
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha =$_POST ['senha'];

        if($nome ==''){
            echo "NOME ESTÁ VAZIO";
        } else if ($email==''){
            echo "EMAIL ESTÁ VAZIO";

        }
        elseif($senha =''){
            echo "SENHA ESTÁ VAZIA";
        }else{
        echo "usuario, $nome Cadastrado com sucesso";
       
        
        }
        }
        if($nome!=null && $email!=null && $senha!=null) {
            $db = new Database();
                $db->insert (
                    "INSERT INTO formulario(nome, email, senha) VALUES('$nome', '$email', '$senha'); "
                );
            }
        ?> 
    
    
    <h2>Cadastro de usuario</h2>
<form method="POST">
   <div><input type="text" name="nome" placeholder="Nome"></div>
   <div><input type="text" name="email" placeholder="E-mail"></div>
   <div><input type="text" name="senha" placeholder="Senha"></div>
   <div><input type="submit" name="acao" value="Cadastrar"></div>
   <div><input type="hidden" name="form" value="f_form"></div>
   
</form> 
</div>   
    

 

</body>
</html>




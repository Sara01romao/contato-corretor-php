<?php

include('db_config.php');


if(isset($_POST['dataMensagem'])){
    $mensagem_obj = json_decode($_POST['dataMensagem'], true);
    
    $nome = $mensagem_obj['nome_contato'];
    $email = $mensagem_obj['email_contato'];
    $telefone = $mensagem_obj['telefone_contato'];
    $mensagem = $mensagem_obj['mensagem_contato'];

    
   

}



?>
<?php

include('db_config.php');


if(isset($_POST['dataMensagem'])){
    $mensagem_obj = json_decode($_POST['dataMensagem'], true);
    
    $nome = $mensagem_obj['nome_contato'];
    $email = $mensagem_obj['email_contato'];
    $telefone = $mensagem_obj['telefone_contato'];
    $mensagem = $mensagem_obj['mensagem_contato'];
    $idCorretor = $mensagem_obj['idCorretor'];

    
    $contato = preg_replace("/[^0-9]/", "", $telefone); 
    echo $contato;

    
    $sqlMensagem = "INSERT INTO mensagem (nome_contato, email_contato, telefone_contato, mensagem_contato, data_hora_contato, id_corretor_mensagem) VALUES ('$nome', '$email', '$contato', '$mensagem', NOW(), '$idCorretor')";

     $resultMensagem = mysqli_query($con, $sqlMensagem);

    //  if($resultMensagem){

    //     echo "ok";
    //  }else{
    //     echo "erro";
    //  }

    

}



?>
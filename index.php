<?php

include('db_config.php');

function formatar_telefone($telefone){
    
    $ddd = substr($telefone, 0, 2); //começa no 0 até o dois
    $parte1 = substr($telefone, 2, 5);;//do 2 ate o 5
    $parte2= substr($telefone, 7);//7 em diante
    return "($ddd) $parte1-$parte2";
  
  }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400;700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    

     <main>

        <div class="info-corretor">
            <h1>Fale com nosso corretor </h1>
            <p>Encontre sua casa dos sonhos! Dê o primeiro passo para a sua nova vida.</p>
      
             <?php
               
               $sqlCorretor = "SELECT * FROM corretor WHERE id_corretor = 1";
               $resultQuery = mysqli_query($con, $sqlCorretor);

               if($resultQuery){
                 $corretor = mysqli_fetch_assoc($resultQuery);
               }
                               
                
                 if(!empty($corretor["telefone_corretor"])){
                   $telefone = formatar_telefone($corretor["telefone_corretor"]);
                 }

                 
                 if(!empty($corretor["whatsapp_corretor"])){
                    $whatsapp = formatar_telefone($corretor["whatsapp_corretor"]);
                  }

             ?>

            <div class="txt-corretor">
                <img class="corretor-img" src="./img/corretor-img.png" alt="corretor">

                <div>
                    
                    <h3><?php echo $corretor["nome_corretor"]; ?></h3>
                    <p>Corretor</p>
                </div>
            </div>

            <p>Escolha seu meio de contato. Estou pronto para ouvir!</p>

            <div class="contatos-btn-container">
                <div>
                    <h4>WhatsApp</h4>
                    <a href="" class="btn-contato btn-whatsapp"> 
                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M18.5986 3.17871C16.5527 1.12793 13.8281 0 10.9326 0C4.95605 0 0.0927734 4.86328 0.0927734 10.8398C0.0927734 12.749 0.59082 14.6143 1.53809 16.2598L0 21.875L5.74707 20.3662C7.3291 21.2305 9.11133 21.6846 10.9277 21.6846H10.9326C16.9043 21.6846 21.875 16.8213 21.875 10.8447C21.875 7.94922 20.6445 5.22949 18.5986 3.17871ZM10.9326 19.8584C9.31152 19.8584 7.72461 19.4238 6.34277 18.6035L6.01562 18.4082L2.60742 19.3018L3.51562 15.9766L3.30078 15.6348C2.39746 14.1992 1.92383 12.5439 1.92383 10.8398C1.92383 5.87402 5.9668 1.83105 10.9375 1.83105C13.3447 1.83105 15.6055 2.76855 17.3047 4.47266C19.0039 6.17676 20.0488 8.4375 20.0439 10.8447C20.0439 15.8154 15.8984 19.8584 10.9326 19.8584ZM15.874 13.1104C15.6055 12.9736 14.2725 12.3193 14.0234 12.2314C13.7744 12.1387 13.5938 12.0947 13.4131 12.3682C13.2324 12.6416 12.7148 13.2471 12.5537 13.4326C12.3975 13.6133 12.2363 13.6377 11.9678 13.501C10.376 12.7051 9.33105 12.0801 8.28125 10.2783C8.00293 9.7998 8.55957 9.83398 9.07715 8.79883C9.16504 8.61816 9.12109 8.46191 9.05273 8.3252C8.98438 8.18848 8.44238 6.85547 8.21777 6.31348C7.99805 5.78613 7.77344 5.85938 7.60742 5.84961C7.45117 5.83984 7.27051 5.83984 7.08984 5.83984C6.90918 5.83984 6.61621 5.9082 6.36719 6.17676C6.11816 6.4502 5.41992 7.10449 5.41992 8.4375C5.41992 9.77051 6.3916 11.0596 6.52344 11.2402C6.66016 11.4209 8.43262 14.1553 11.1523 15.332C12.8711 16.0742 13.5449 16.1377 14.4043 16.0107C14.9268 15.9326 16.0059 15.3564 16.2305 14.7217C16.4551 14.0869 16.4551 13.5449 16.3867 13.4326C16.3232 13.3105 16.1426 13.2422 15.874 13.1104Z" fill="white"/>
                        </svg>
                            
                        <?php echo $whatsapp; ?>
                    </a>
                </div>

                <div>
                    <h4>Telefone</h4>
                    <a href=""  class="btn-contato btn-telefone"> 
                        <svg width="19" height="17" viewBox="0 0 19 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M18.4582 12.0128L14.3018 10.419C14.1243 10.3513 13.9269 10.3371 13.7395 10.3784C13.5521 10.4197 13.3848 10.5144 13.2628 10.6481L11.4221 12.6603C8.53335 11.4416 6.20858 9.36157 4.84657 6.77691L7.09544 5.13C7.24524 5.02099 7.35127 4.87127 7.39747 4.70352C7.44368 4.53577 7.42754 4.35911 7.3515 4.2003L5.57021 0.481485C5.48676 0.310289 5.33916 0.170514 5.15286 0.0862606C4.96656 0.00200721 4.75324 -0.0214431 4.54969 0.0199532L0.690246 0.816842C0.493997 0.85739 0.318903 0.956258 0.193542 1.09731C0.0681805 1.23836 -4.52078e-05 1.41326 2.24746e-08 1.59348C2.24746e-08 10.1102 7.71517 17 17.219 17C17.4205 17.0001 17.6161 16.9391 17.7738 16.8269C17.9315 16.7148 18.0421 16.5581 18.0874 16.3824L18.9781 12.9292C19.024 12.7462 18.9973 12.5546 18.9024 12.3873C18.8075 12.2201 18.6504 12.0876 18.4582 12.0128Z" fill="white"/>
                        </svg>
                            
                        <?php echo $telefone; ?>
                    </a>
                </div>

                <div>
                    <h4>Email</h4>
                    <a href=""  class="btn-contato"> 
                        <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M19.6211 4.95312C19.7734 4.83203 20 4.94531 20 5.13672V13.125C20 14.1602 19.1602 15 18.125 15H1.875C0.839844 15 0 14.1602 0 13.125V5.14062C0 4.94531 0.222656 4.83594 0.378906 4.95703C1.25391 5.63672 2.41406 6.5 6.39844 9.39453C7.22266 9.99609 8.61328 11.2617 10 11.2539C11.3945 11.2656 12.8125 9.97266 13.6055 9.39453C17.5898 6.5 18.7461 5.63281 19.6211 4.95312ZM10 10C10.9062 10.0156 12.2109 8.85938 12.8672 8.38281C18.0508 4.62109 18.4453 4.29297 19.6406 3.35547C19.8672 3.17969 20 2.90625 20 2.61719V1.875C20 0.839844 19.1602 0 18.125 0H1.875C0.839844 0 0 0.839844 0 1.875V2.61719C0 2.90625 0.132812 3.17578 0.359375 3.35547C1.55469 4.28906 1.94922 4.62109 7.13281 8.38281C7.78906 8.85938 9.09375 10.0156 10 10Z" fill="#007CEF"/>
                        </svg>
                            
                        <?php echo $corretor["email_corretor"]; ?>
                    </a>
                </div>
            </div>

            
        </div>


        <div class="form-contato">
            <img src="./img/ilustracao.png" alt="ilustraçao Casa">

            <form action="" >

               <div class="campo-form">
                  <label for="">Nome</label>
                  <input type="text" name="nome" placeholder="Seu nome">
               </div>

               <div class="campo-form">
                  <label for="">Email</label>
                  <input type="email" name="email" placeholder="contato@exemplo.com">
               </div>

               <div class="campo-form">
                  <label for="">Telefone</label>
                  <input type="text" name="telefone" placeholder="(11) 9999-9999" id="telefone">
               </div>

               <div class="campo-form">
                  <label for="">Mensagem</label>
                  <textarea name="mensagem" id="" placeholder="Como posso te ajudar?"></textarea>
               </div>

               <button type="submit">Enviar</button>

            </form>

            <img src="./img/ilustracao-aviao.png" alt="Ilustracao avião">
        </div>


     </main>

     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.8/jquery.inputmask.min.js"></script>
     <script>
         $(document).ready(function(){
            $("#telefone").inputmask('(99) 99999-9999')
        })
     </script>

          
</body>
</html>
<?php

$title = "Exercicio 7";
$retorno = 'Nenhuma Palavra digitada';

include_once('template-topo.php');


if(isset($_POST['hd_envia'])) {


    $text_entrada = $_POST['text_entrada'];
    $text_entrada2 = $_POST['text_entrada2'];
    
    if(!empty($text_entrada) && !empty($text_entrada2)) {
      
        // // valida se tem só número
        // $text_entrada = preg_replace('/\D/', '', $text_entrada);
        // $text_entrada2 = preg_replace('/\D/', '', $text_entrada2);

        // $arrayTextEntrada = str_split($text_entrada);


        $soma = 0;

        for($l = $text_entrada; $l <= $text_entrada2; $l++){ 
            $soma += $l;
            // echo($l . '</br>');
            
        }     
           
        // return;
        $retorno = "resultado: " . $soma;   

    } else {

        $retorno = 'Preencha os Valores para prosseguir';   

    }




}
    

?>


<body>

    <form class="frm-envio" action=""  method="POST">
        
        <input name="hd_envia" type="hidden" value="1">  
        
        <div class="row">
            <h1><?=$title?></h1>
        </div>
        
        <div class="row">
            <input class="input_entrada input_entrada_frm7" type="text" name="text_entrada">
            <input class="input_entrada input_entrada_frm7" type="text" name="text_entrada2">
            <button class="btn">Enviar</button>
        </div>

        <div class="row">
            <p><?=$retorno?></p>
        </div>

        <hr>
        <div class="row">
             <a href="index.php"><input class="btn_voltar" type="button" value="Voltar"></a>
        </div>
       



    </form>
    
</body>
</html>
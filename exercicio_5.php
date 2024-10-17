<?php

$title = "Exercicio 5";
$retorno = 'Nenhuma Palavra digitada';
$classPalidromo = "";

include_once('template-topo.php');


if(isset($_POST['hd_envia'])) {


    $text_entrada = $_POST['text_entrada'];
    
    if(!empty($text_entrada)) {
      
        // Inverte a string
        $stringInvertida = strrev($text_entrada);

        // Compara as strings
        if($text_entrada == $stringInvertida) {
            $textRetorno = "É um palíndromo";
            $classPalidromo = "isPalidromo";
        } else {            
            $textRetorno = "Não é um palíndromo";
            $classPalidromo = "notPalidromo";
            // echo('não é palindromo');
        }


        $retorno = "resultado: " . $textRetorno;   

    } else {

        $retorno = 'Preencha um Valor para prosseguir';   

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
            <input class="input_entrada" type="text" name="text_entrada">
            <button class="btn">Enviar</button>
        </div>

        <div class="row">
            <p class="<?=$classPalidromo?>"><?=$retorno?></p>
        </div>

        <hr>
        <div class="row">
             <a href="index.php"><input class="btn_voltar" type="button" value="Voltar"></a>
        </div>
       



    </form>
    
</body>
</html>
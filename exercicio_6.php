<?php

$title = "Exercicio 6";
$retorno = 'Nenhuma Palavra digitada';
$classPalidromo = "";

include_once('template-topo.php');


if(isset($_POST['hd_envia'])) {


    $text_entrada = $_POST['text_entrada'];
    
    if(!empty($text_entrada)) {
      


        // Inverte a string
        $stringInvertida = strrev($text_entrada);

        if($text_entrada == $stringInvertida) {

            // valida se já é um palidromo

            $textRetorno = "É um palíndromo";
            $classPalidromo = "isPalidromo";
        } else {  
            
            
            // testa se pode virar um palidromo

            $qtdCaracter = strlen($text_entrada);

            $validPalidromo = 0;
            for($l = 0;$l < $qtdCaracter; $l++ ) {
    
                $stringNova = substr($text_entrada, 0, $l) . substr($text_entrada, $l + 1);
                $stringInvertida = strrev($stringNova);
               
                if($stringNova == $stringInvertida) { 
                    $validPalidromo = 1;
                }
                    
            }

            if($validPalidromo ==1) {
                $textRetorno = "Pode virar um palíndromo";
                $classPalidromo = "isPalidromo";
            } else {
                $textRetorno = "Não é um palíndromo";
                $classPalidromo = "notPalidromo";
            }




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
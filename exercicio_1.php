<?php

$title = "Exercicio 1";
$retorno = 'Nenhuma Palavra digitada';

include_once('template-topo.php');


if(isset($_POST['hd_envia'])) {

    /*
         OPÇÃO 1
    */

    $text_entrada = $_POST['text_entrada'];
    
    if(!empty($text_entrada)) {
      
        
        /* ARRAY CARACTERES QUE SERÁ EXCLUÍDO */ 
        $arrayExcluir = ['A','E','I','O','U'];
        $textReplace = '';
        
        foreach ( $arrayExcluir as $row ) { 

            $textReplace =   str_replace($row, "", strtoupper($text_entrada));
            $text_entrada = $textReplace;
        }        
            
           

        if(empty($text_entrada)) {
            $text_entrada = "Nenhum Valor Localizado";
        }   

        $retorno = strtolower("resultado: " . $text_entrada);   

    } else {

        $retorno = 'Preencha um Valor para prosseguir';   

    }

       


    /*
    
        OPÇÃO 2
        - usar função preg_replace

        $text_entrada = preg_replace('/[aeiouAEIOU]/', '', $text_entrada);
        $retorno  =  $text_entrada;
    
    */




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
            <p><?=$retorno?></p>
        </div>
        
        <hr>
        <div class="row">
             <a href="index.php"><input class="btn_voltar" type="button" value="Voltar"></a>
        </div>


       



    </form>
    
</body>
</html>
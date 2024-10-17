<?php

$title = "Exercicio 2";
$retorno = 'Nenhuma Palavra digitada';

include_once('template-topo.php');


if(isset($_POST['hd_envia'])) {


    $text_entrada = $_POST['text_entrada'];
    
    if(!empty($text_entrada)) {
      
        
        $arrayTextEntrada = explode(" ", $text_entrada);

        $maiorValor = 0;
        $indx = 0;
        foreach ( $arrayTextEntrada as $row ) { 

               $qtdCaracteres = strlen($row); 

               $arrayRetorno[]  = array(
                    'nome_string' => $row,
                    'qtd_caract' => $qtdCaracteres
               );


               // DEFINE QUAL A MAIOR STRING, E MARCA O INDEX DO ARRAY COM A MAIOR STRING
               if($qtdCaracteres > $maiorValor) {
                    $indxMaiorValor = $indx;
                    $maiorValor = $qtdCaracteres; 
               }
            
               $indx ++;   
        }     
           

        $retorno = $arrayRetorno[$indxMaiorValor]['nome_string'];

        $retorno = "resultado: " . $retorno;   

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
            <p><?=$retorno?></p>
        </div>

        <hr>
        <div class="row">
             <a href="index.php"><input class="btn_voltar" type="button" value="Voltar"></a>
        </div>


       



    </form>
    
</body>
</html>
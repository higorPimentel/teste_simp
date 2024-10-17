<?php

$title = "Exercicio 4";
$retorno = 'Nenhuma Palavra digitada';

include_once('template-topo.php');


if(isset($_POST['hd_envia'])) {


    $text_entrada = $_POST['text_entrada'];
    
    if(!empty($text_entrada)) {
      
        // valida se tem só número
        $text_entrada = preg_replace('/\D/', '', $text_entrada);


        $textoExibicao = '</br>';
        for($n =1 ;$n <= $text_entrada; $n++) {


            if($n % 3 === 0 && $n % 5 === 0) {
                $textRetorno = 'HELLO WORLD';
            } else if($n % 3 === 0) {
                $textRetorno = 'HELLO';
            } else if($n % 5 === 0) { 
                $textRetorno = 'WORLD';                
            } else {
                $textRetorno = $n;
            }


            $textoExibicao .= $textRetorno . '</br>';

        }
           

        $retorno = "resultado: " . $textoExibicao;   

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
<?php

$title = "Exercicio 2";
$retorno = 'Nenhuma Palavra digitada';

include_once('template-topo.php');


if(isset($_POST['hd_envia'])) {

    /*
         OPÇÃO 1
    */

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

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">Acesso</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Nome 1</td>
      <td>Nome 1</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Nome 2</td>
      <td>Nome 2</td>
    </tr>
  </tbody>
</table>
    
</body>
</html>
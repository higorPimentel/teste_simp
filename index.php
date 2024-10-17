<?php

$title = "Lista de Exercicios";
$retorno = 'Nenhuma Palavra digitada';

include_once('template-topo.php');

?>

<body>
  <table class="table">
    <thead>
      <h2>Lista de Exercicios</h2>
      <div class="hs"></div>
      <tr>
        <th>#</th>
        <th>Nome</th>
        <th>Link Acesso</th>
      </tr>
    </thead>
    <tbody>
      <?php
          for($l = 1; $l < 8; $l ++) {
      ?>
      <tr>  
        <td><?=$l?></td>
        <td>Exercicio <?=$l?></td>
        <td><a href=<?="exercicio_$l.php"?>>Acessar</a></td>
      </tr>
      
      <?php }?>
      
    </tbody>
  </table>
</body>
</html>
    

    
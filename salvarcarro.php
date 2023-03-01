<?php 
 if (isset($_POST)) {
     foreach ($_POST as $value) {
         echo $value,"<br>";
     }
 }
?>
 <a href="cadastrarcarro.php">Voltar a cadastrar carro</a>
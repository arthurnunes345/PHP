<?php

session_start();





 ?>



 <!DOCTYPE html>
 <html lang="pt-br" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>

<form  method="POST">

<fieldset>
  <legend>tarefas do dia</legend>
  <label>
    Tarefa: <input type="text" name="novatarefa" value="">
  </label>
  <button type="submit" name="btn-adicionar">adicionar </button>
</fieldset>

</form>

<?php

if (isset($_GET['novatarefa'])) {

  $_SESSION['lista_tarefas'][] = $_GET['novatarefa'];
}
$lista_tarefas = array();

if(isset($_SESSION['lista_tarefas'])){
  $lista_tarefas = $_SESSION['lista_tarefas'];
}
 ?>

<table>
  <tr>
    <th>Tarefas:</th>
  </tr>

<?php foreach ($lista_tarefas as $Tarefas):  ?>

<tr>
  <td><?php  echo $tarefa; ?></td>
</tr>

<?php endforeach; ?>
</table>




   </body>
 </html>

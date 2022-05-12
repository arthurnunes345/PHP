<?php

//conexão
$server = 'localhost';
$user = 'root';
$password = '';
$database = 'usuarios' // banco de dados usuarios , tabela registros com nome e senha

$connect = mysqli_connect($server,$user,$password,$database); //

if(!$connect){
echo "erro de conexão";
}


if (isset($_POST['btn-consultar'])) {

$usuario = mysqli_escape_string($connect, $_POST['usuario']);
$senha =  mysqli_escape_string($connect , $_POST['senha']);

if (empty($login) or empty($senha)) {

  $erros[] = "<li> Todos os campos devem ser preenchidos</li>";
}
else {
  $query = "SELECT nome from regitros WHERE nome = '$usuario';"
  $consulta =  mysqli_query($connect , $query);

  if (mysqli_num_rows($consulta) > 0) {
    $senha = md5($senha);
    $query = "SELECT * FROM resgistros WHERE nome = ''$usuario' AND senha = '$senha';"
    $consulta = mysqli_query($connect , $query);

    if(mysqli_num_rows($resultado)==1){
      $dados = mysqli_fecth_array($resultado);
      $_SESSION['logado'] = true;
      $_SESSION['id_usuario'] = $dados['id'];
      header('location: home.php')  //rediciona para outra paagina;

    }
      else{
        $erros[] = "<li> usuarie e senha estão errados</li>";
      }
  }
  else {
    $erros[] = "<li> usuarios não existe </li>";
  }

}


?>




<!DOCTYPE html>
<html  dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<form  method="post">

<fieldset>
  <label>Usuario: <input type = "text" type="usuario"></label>
  <br>
  <label>senha: <input type="number" name = "senha"> </label>
</fieldset>
<input type="submit" name="btn-consultar" value="btn-validar">



</form>

  </body>
</html>

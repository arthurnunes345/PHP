<<?php

if (isset($_POST['btn-calcular'])) {

$resposta = "idade calculada com sucesso!"

$dataNascimento = $_POST['nascimento']; //pega a data
$formato = 'd/m/Y'; // formato que queremos
$dataNascimento = DateTime::createFromFormat($formato,$dataNascimento); //convertendo


$dataAtual = new DateTime('d/m/Y'); // data atual já convertida

$intervalo = $dataAtual->diff($entrada) ;

$ano =  $interval -> Y;
$dias = $interval -> d;
$horas = $interval -> h;
$minutos = $interval -> m;



}
else {
  $resposta = "idade não calculada";

}

 ?>


 <!DOCTYPE html>
 <html  dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
<form  action="index.html" method="POST">
<h3>calcular idade</h3>

  Data de nascimento: <input type="date" name="nascimento" value="">
  <br>
  <button type="submit" name="btn-calcular"></button>
  <br>
  <hr>
  <h4>Idade:<?php echo($resposta); ?></h4>
  <br>
  <h3>voce ja viveu:</h3>
  <br>
  <<?php

echo('voce tem'.$ano.'anos /n Dias:'.$dias.'/n horas:'.$horas.'/n minutos:'.$minutos);


   ?>
</form>

   </body>
 </html>

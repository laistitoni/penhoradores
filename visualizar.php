<!DOCTYPE html>
<?php
include 'conn.php';
//pega texto
if (isset($_POST["enviar"]) ){
$autor = $_POST['autor'];
$titulo = $_POST["titulo"];
$texto = $_POST['texto'];
$x = "INSERT INTO texto(autor, titulo, texto) VALUES('".$autor."','".$titulo."','".$texto."')";
$resultx = mysqli_query($conn1,$x);
echo "<script>alert('Agradecemos sua colaboração');</script>";
header('Location: index.php'); 
}

if (isset($_POST["visualizar"]) ){
$autor1 = $_POST['autor'];
$titulo1 = $_POST["titulo"];
$texto1 = $_POST['texto'];
}
?>
<html lang="pt-br">
<head>
  <title>Penhoradores</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light" rel="stylesheet">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <link rel="stylesheet" type="text/css" href="css1.css">

</head>
<body>
    <div class="cabeçalho">
   <h1>Penhoradores de Texto</h1> 
   </div>
<ul class="menu">
        <li><a href="index.php">Inicio</a></li> |
        <li><a href="envie.php">Envie seu texto</a></li> |
        <li><a href="entrar.php">Entrar</a></li>
    </ul>
       
 <div class="corpo">
     <span>
         <div id="c1" class="coluna">
             <h2> Textos da semana</h2>
             <hr>
             <h4><?php echo $titulo1;?></h4>
<?php echo "$texto1<br>";?>
 </div>
         <div id="c2" class="coluna">
              <h2> Textos mais curtidos</h2>
               <hr>
                    <h4>Cadê você?</h4>
Cadê você aqui na minha cama ?
Cadê você para me dar segurança ?
Não está longe, não está perto
Distante como as areias do deserto

O espaço não se pode medir
No tempo não se pode interferir
Não importa a distância e nem o tempo
Você me completa em todos os momentos

Por vezes, me sinto sem nada
Uma sensação que me cala
Depois disso acontecer
Eu tento aprender

Solitário, eu e meus pensamentos
Me trazem os meus sentimentos
Tudo o que eu faço ou tudo que faria
Só tem um motivo, a sua alegria

Seguro, solitário ou mesmo ninguém
Não sei o que poderia acontecer
Se eu não tivesse você
         </div></span>
 </div>
 
 

   
 <div class="rodape">
      <form  action='formulario.php' method='POST'> 
      <h4> fale conosco:</h4>
      <input type='email' value="Email" name='email-contato'> <br>
      <input type='text'value="Mensagem" name='mensagem-contato'> <br>
      <input type='submit' value='Enviar' name='botao-contato'>
      </form> 
      <div class="btn-group">
      <a href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2http://localhost/penhoradores-master/index.php"><img title="COMPARTILHAR" src="facebook.png"></a>
      <a href="https://www.twitter.com/sharer/sharer.php?u=http%3A%2F%2http://localhost/penhoradores-master/index.php"><img title="COMPARTILHAR" src="twitter.png"></a>
      </div>
     <h6 class="x">Desenvolvido por: Laís, Guilherme Gomes e Guilherme Kraemer </h6>
  </div>
</body>
</html>


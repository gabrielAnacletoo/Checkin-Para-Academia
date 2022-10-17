<?php
include('../session.php');
$user_check = $_SESSION['login_user'];
$nome = $user_check;
$horario = $_POST['horario'];
$dia = $_POST['dia'];

$connect = mysql_connect('Localhost','user','password');
$db = mysql_select_db('database');
//$query_select = "SELECT nome FROM clientes WHERE nome = '$nome', dia = '$dia'";
$query_select = mysql_query("SELECT * FROM clientes WHERE nome = '$nome' AND dia = '$dia'");

if(mysql_num_rows($query_select) == 1){    
  echo"<script language='javascript' type='text/javascript'>
          alert('Você ja fez o check-in Hoje!');window.location.
          href='checkin.php'</script>";
}else if(mysql_num_rows($query_select) == 0) {
  $query = "INSERT INTO clientes (nome, horario, dia) VALUES ('$nome','$horario', '$dia')";
  $insert = mysql_query($query,$connect);
} if($insert){
          echo"<script language='javascript' type='text/javascript'>
          alert('Check-in Feito com sucesso!');window.location.
          href='checkin.php'</script>";
        }
         else{
          echo"<script language='javascript' type='text/javascript'>
          alert('Não foi possível fazer o check-in');window.location
          .href='checkin.php'</script>";
        }

?>

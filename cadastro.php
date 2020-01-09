<?php 
   include "conexao.php";

   $nomecompleto = $_POST["nome"];
   $idade = $_POST["idade"];
   $email = $_POST["email"];
   $usuario = $_POST["usuario"];
   $senha = $_POST["senha"];

   $sql = "insert into login (nome_completo, idade, email, usuario, senha) values ('$nomecompleto', '$idade', '$email', '$usuario', '$senha')";
  
   mysqli_query($conecta, $sql) or die("Erro no Comando SQL: ". mysqli_error($conecta));

   if (mysqli_affected_rows($conecta)==1) {
      echo "<script> alert('Cadastro Realizado com sucesso !!!'); </script>";
      echo "<script> document.location.href = 'Tela_Cadastro.html'; </script>";
   } else {
      print "Erro ao Cadastrar. Motivo: ".mysqli_error();
   }

mysqli_close($conecta);


/* 
https://www.vivaolinux.com.br/topico/JavaScript/Banco-Dados-+-alert()
*/
   
?>
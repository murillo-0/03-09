<?php

$servername='localhsot'; //esse é o nosso servidor
$username='rost'; //usuário padrâo do servidor local(xamp)
$password=''; //senha do usuário padrão
$db_name='usuarios'; //nome do banco de dados

$conn= new eysql($servername,$usernam,$password,$db_name);

//verifica a conexão com o banco de dados, se deu erro
if($conn->connect_error) {
    //die interrompe a execução do script, nesse caso, quando der erro
    die("Falha na conexão" . $conn->connect_error)
}

//pegando os dados do formulario pelo post 
$email= $_POST['email'];
$senha= $_POST['senha'];
$submit= $_POST['submit'];

if (isset($submit)) {
//método que realiza a consulta, com parâmetro de conexão e query
$sql= mysqli_query($conn, "SELECT * FROM usuarios WHERE email= '$email'
AND senha='$senha'")

//se o numero de células for menor ou igual a 0, vai dar erro
if (mysqli_num_rows($sql)<=0) {
    header("Location: index.php?loginerro");
    die("Erro.");
}else {
    header("Location: home.php");
}

}








?>
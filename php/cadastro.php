<?php
require_once("config.php");

//recebendo dados do html
$nome = $_POST['nome'];
$nick = $_POST['nickname'];
$idade = $_POST['idade'];
$game = $_POST['games'];

if (isset($_POST['interesse'])){
    $interesse = $_POST['interesse']; 
}
$interesse2 = implode (', ', $interesse);

//gravando no banco
$stmt = $conn->prepare("INSERT INTO tb_nerds (nome,nick,idade,jogo,interesse) VALUES (:nome, :nick, :idade, :jogo, :interesse)");
$stmt -> bindParam(":nome", $nome);
$stmt -> bindParam(":nick", $nick);
$stmt -> bindParam(":idade", $idade);
$stmt -> bindParam(":jogo", $game);
$stmt -> bindParam(":interesse", $interesse2);


//testando gravação
if ($stmt -> execute()){
    echo "GRAVADO COM SUCESSO";
}
else{
    echo "ERRO DE GRAVAÇÃO";
}
?>
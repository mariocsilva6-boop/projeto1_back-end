<?php

require_once "funcoes.php";

$usuario = $_POST["usuario"] ?? "";
$senha = $_POST["senha"] ?? "";

if ($usuario == "admin" && $senha == "1234") {

    header("Location: nota.php");
    exit;

} else {

    echo "Usuário ou senha incorretos.";

}

?>
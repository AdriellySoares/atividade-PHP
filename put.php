<?php
include("./config/database.php");
if (isset($_GET['id'])) {
    if (isset($_POST['editar'])) {
        $nome = $_POST['nome'];
        $categoria = $_POST['categoria'];
        $valor = $_POST['valor'];
        $put = "UPDATE produtos SET nome ='{$nome}', categoria ='{$categoria}, valor ='{$valor}' WHERE idprodutos ='". $_GET['id']."'";
        mysqli_query($mysqli, $put);
    }
    $query = 'SELECT * FROM produtos WHERE idprodutos ='.$_GET['id'];
    $result = $mysqli->query($query);
    $produto;
    foreach($result as $prod){
        $produto = $prod;
    }
}
include "edit-form.php";
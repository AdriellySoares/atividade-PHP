<?php
include("./config/database.php");
if (isset($_GET['id'])) {
    try{
    if (isset($_POST['editar'])) {
        $nome = $_POST['nome'];
        $categoria = $_POST['categoria'];
        $valor = $_POST['valor'];
        $post = "UPDATE produtos SET nome ='{$nome}', categoria ='{$categoria}, valor ='{$valor}' WHERE idprodutos ='". $_GET['id']."'";
        mysqli_query($mysqli, $post);
    }
    $query = 'SELECT * FROM produtos WHERE idprodutos ='.$_GET['id'];
    $result = $mysqli->query($query);
    $produto;
    foreach($result as $prod){
        $produto = $prod;
    }
}catch(mysqli_sql_exception $e){
    var_dump($e);
    exit;
}
}
include "edit-form.php";
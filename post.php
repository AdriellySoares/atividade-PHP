<?php 
include ("./config/database.php");
if(isset($_POST['cadastrar'])){
    $nome = $_POST['nome'];
    $categoria = $_POST['categoria'];
    $valor = $_POST['valor'];
    $query = mysqli_query($mysqli, "INSERT INTO produtos(nome, categoria, valor)VALUES('$nome','$categoria','$valor')");
    if($query){
        echo "<h1>Cadastro efetuado com sucesso</h1>";
    }else{
        echo "<h1>Deu ruim</h1>";
    }
}
include "create-form.php";
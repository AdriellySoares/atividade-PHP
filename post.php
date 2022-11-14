<?php 
include ("./config/database.php");
if(isset($_POST['cadastrar'])){
    $nome = $_POST['nome'];
    $categoria = $_POST['categoria'];
    $valor = $_POST['valor'];
    $query = mysqli_query($mysqli, "INSERT INTO produtos(nome, categoria, valor)VALUES('$nome','$categoria','$valor')");
    if($query){
        echo "Cadastro efetuado com sucesso";
    }else{
        echo "Deu ruim";
    }
}
include "form.php";
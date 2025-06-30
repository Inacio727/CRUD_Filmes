<?php
include 'includes/header.php';
include 'includes/crud.php';

$id = $_GET['id'];
$filme = buscarFilme($id);

if ($_POST) {
    editarFilme($id, $_POST['titulo'], $_POST['diretor'], $_POST['ano'], $_POST['genero']);
    header("Location: index.php");
}
?>

<h2>Editar Filme</h2>


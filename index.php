<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: login.php');
    exit;
}
?>

<?php include "templates/header.php"; ?>

<style>
    /* Estilos adicionales para mejorar la apariencia */
    body {
        font-family: Arial, sans-serif;
        background-color: #f7f7f7;
    }

    .container {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
    }

    .center-align {
        text-align: center;
    }

    .left-align {
        text-align: left;
    }

    ul {
        list-style-type: none;
        padding: 0;
        margin: 0;
    }

    li {
        margin-bottom: 10px;
    }

    li a {
        display: block;
        padding: 10px 20px;
        background-color: #007bff; /* Azul */
        color: white;
        text-decoration: none;
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }

    li a:hover {
        background-color: #0056b3; /* Azul más oscuro */
    }
</style>

<div class="container">
 
<div class="center-align">
    <ul>
        <div class="left-align">
            <li><a href="read.php"><strong>Ver todos los productos</strong></a></li>
            <li><a href="insert.php"><strong>Ingresar producto</strong></a></li>
            <li><a href="update.php"><strong>Actualizar producto</strong></a></li>
            <li><a href="delete.php"><strong>Remover producto</strong></a></li>
            <li><a href="logout.php"><strong>Cerrar sesión</strong></a></li>
        </div>
    </ul>
</div>

<?php include "templates/footer.php"; ?>

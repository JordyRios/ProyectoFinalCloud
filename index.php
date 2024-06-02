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
        background-color: #4CAF50; /* Verde */
        color: white;
        text-decoration: none;
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }

    li a:hover {
        background-color: #45a049; /* Verde más oscuro */
    }
</style>

<div class="container">
    <div class="center-align">
        <ul>
            <li class="left-align"><a href="read.php"><strong>Ver catálogo</strong></a></li>
            <li class="left-align"><a href="insert.php"><strong>Agregar producto</strong></a></li>
            <li class="left-align"><a href="update.php"><strong>Actualizar producto</strong></a></li>
            <li class="left-align"><a href="delete.php"><strong>Remover producto</strong></a></li>
        </ul>
    </div>
</div>

<?php include "templates/footer.php"; ?>

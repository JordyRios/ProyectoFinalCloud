<?php
session_start();

// Definir usuario y contraseña
$stored_username = 'admin';
$stored_password = 'password';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Verificar usuario y contraseña
    if ($username === $stored_username && $password === $stored_password) {
        $_SESSION['loggedin'] = true;
        header('Location: index.php');
        exit;
    } else {
        $error = "Usuario o contraseña incorrectos";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <form action="login.php" method="post">
        <h2>Login</h2>
        <?php if (!empty($error)) : ?>
            <p style="color: red;"><?php echo $error; ?></p>
        <?php endif; ?>
        <label for="username">Usuario:</label>
        <input type="text" id="username" name="username" required>
        <br>
        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required>
        <br>
        <button type="submit">Ingresar</button>
    </form>
</body>
</html>


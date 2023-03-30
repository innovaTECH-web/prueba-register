<?php
if(isset($_POST['register'])) {
    // Obtener los datos del formulario
    $name = $_POST['name'];
    $email = $_POST['email'];
    $date = date('Y-m-d H:i:s');

    // Abrir el archivo CSV para escritura
    $file = fopen('data.csv', 'a'); // se abre el archivo data.csv

    // Escribir los datos en el archivo CSV
    fputcsv($file, [$name, $email, $date]);

    // Cerrar el archivo CSV
    fclose($file);

    // Mostrar un mensaje de éxito
    echo '<h2>Te has registrado correctamente</h2>';
}
?>

<form method="POST">
    <label for="name">Nombre:</label>
    <input type="text" name="name" required>

    <label for="email">Email:</label>
    <input type="email" name="email" required>

    <button type="submit" name="register">Registrarse</button>
</form>

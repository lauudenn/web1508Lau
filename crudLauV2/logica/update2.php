<?php
include('db.php');

if (!isset($_GET['id'])) {
    die("ID no especificado.");
}

$id = intval($_GET['id']); // Evita inyecciones

// Obtener datos del usuario
$sql = "SELECT * FROM usuarios WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 0) {
    die("Usuario no encontrado.");
}

$row = $result->fetch_assoc();

// Si se envió el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = trim($_POST['nombre']);
    $email = trim($_POST['email']);
    $telefono = trim($_POST['telefono']);

    // Actualizar con sentencias preparadas
    $update = "UPDATE usuarios SET nombre = ?, email = ?, telefono = ? WHERE id = ?";
    $stmt = $conn->prepare($update);
    $stmt->bind_param("sssi", $nombre, $email, $telefono, $id);

    if ($stmt->execute()) {
        // Redirige con un pequeño mensaje de éxito usando JS
        echo "<script>
                alert('Usuario actualizado correctamente');
                window.location.href = '../index.php';
              </script>";
        exit();
    } else {
        echo "<p style='color:red;'> Error al actualizar el usuario: " . $stmt->error . "</p>";
    }
}
?>

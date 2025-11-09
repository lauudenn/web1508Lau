<?php
include('db.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = trim($_POST['nombre']);
    $email = trim($_POST['email']);
    $telefono = trim($_POST['telefono']);

    
    $stmt = $conn->prepare("INSERT INTO usuarios (nombre, email, telefono) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $nombre, $email, $telefono);

    if ($stmt->execute()) {
        echo "<script>
                alert('Usuario agregado correctamente');
                window.location.href = '../index.php';
              </script>";
        exit();
    } else {
        echo "<p style='color:red;'>Error al agregar usuario: " . $stmt->error . "</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agregar Usuario</title>
    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #ffe6f2; /* fondo rosado suave */
            font-family: 'Poppins', sans-serif;
        }
        .card {
            margin-top: 50px;
            border-radius: 20px;
            background: #fff0f6;
        }
        .btn-pink {
            background-color: #ff80ab !important;
        }
        .btn-pink:hover {
            background-color: #ff4081 !important;
        }
        h4 {
            color: #d81b60;
            font-weight: 600;
        }
        label {
            color: #c2185b;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="card z-depth-3">
            <div class="card-content">
                <h4 class="center-align">💗 Agregar Usuario 💗</h4>
                <form method="POST" action="create.php">
                    <div class="input-field">
                        <input type="text" id="nombre" name="nombre" required>
                        <label for="nombre">Nombre</label>
                    </div>
                    <div class="input-field">
                        <input type="email" id="email" name="email" required>
                        <label for="email">Correo electrónico</label>
                    </div>
                    <div class="input-field">
                        <input type="text" id="telefono" name="telefono" required>
                        <label for="telefono">Teléfono</label>
                    </div>
                    <div class="center-align">
                        <button type="submit" class="btn btn-pink waves-effect waves-light">Agregar Usuario</button>
                    </div>
                </form>
                <div class="center-align" style="margin-top:20px;">
                    <a href="../index.php" class="pink-text text-darken-2">⬅ Volver a la lista</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Materialize JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>

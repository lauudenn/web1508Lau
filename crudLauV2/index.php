<?php
include('./logica/db.php');
$consulta = "SELECT * FROM usuarios";
$result = $conn->query($consulta);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Pagina Tuneada de Lau</title>
    <!-- Materialize CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #ffe6f2; /* Fondo rosita suave */
            font-family: 'Poppins', sans-serif;
        }
        h3 {
            color: #d81b60;
            text-align: center;
            margin-top: 40px;
            font-weight: 600;
        }
        .btn-pink {
            background-color: #ff80ab !important;
        }
        .btn-pink:hover {
            background-color: #ff4081 !important;
        }
        .table-container {
            margin-top: 40px;
        }
        table {
            border-radius: 15px;
            overflow: hidden;
        }
        th {
            background-color: #f8bbd0 !important;
            color: #880e4f;
        }
        td {
            background-color: #fff0f6 !important;
        }
        .actions a {
            margin-right: 10px;
            color: #d81b60;
            font-weight: 600;
        }
        .actions a:hover {
            color: #ad1457;
        }
        .floating-btn {
            position: fixed;
            bottom: 40px;
            right: 40px;
        }
    </style>
</head>
<body>

    <div class="container">
        <h3>🌸Lista users Lauu🌸</h3>

        <div class="table-container z-depth-3">
            <table class="highlight centered responsive-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Teléfono</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $result->fetch_assoc()) { ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo htmlspecialchars($row['nombre']); ?></td>
                        <td><?php echo htmlspecialchars($row['email']); ?></td>
                        <td><?php echo htmlspecialchars($row['telefono']); ?></td>
                        <td class="actions">
                            <a href="./logica/update2.php?id=<?php echo $row['id']; ?>" class="waves-effect">✏️ Editar</a>
                            <a href="./logica/delete.php?id=<?php echo $row['id']; ?>" class="waves-effect">🗑️ Eliminar</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

        <!-- Botón flotante para agregar -->
        <div class="floating-btn">
            <a href="./logica/create.php" class="btn-floating btn-large btn-pink waves-effect waves-light tooltipped" data-position="left" data-tooltip="Agregar nuevo usuario">
                <i class="material-icons">Agregar Usuarioo:D</i>
            </a>
        </div>
    </div>

    <!-- Materialize JS y Tooltips -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.tooltipped');
            M.Tooltip.init(elems);
        });
    </script>
</body>
</html>

<?php include('../head.php'); ?>

<div class="container">
  <div class="card pink lighten-4 z-depth-2" style="margin-top: 40px; border-radius: 20px;">
    <div class="card-content">
      <h4 class="center-align pink-text text-darken-2">
        <i class="material-icons">edit</i> Editar Usuario
      </h4>
      <form method="POST" action="../logica/update2.php?id=<?php echo $id; ?>">

        <div class="input-field">
          <i class="material-icons prefix pink-text text-darken-2">person</i>
          <input id="nombre" type="text" name="nombre" value="<?php echo $row['nombre']; ?>" required>
          <label for="nombre">Nombre</label>
        </div>

        <div class="input-field">
          <i class="material-icons prefix pink-text text-darken-2">email</i>
          <input id="email" type="email" name="email" value="<?php echo $row['email']; ?>" required>
          <label for="email">Correo electrónico</label>
        </div>

        <div class="input-field">
          <i class="material-icons prefix pink-text text-darken-2">phone</i>
          <input id="telefono" type="text" name="telefono" value="<?php echo $row['telefono']; ?>" required>
          <label for="telefono">Teléfono</label>
        </div>

        <div class="center-align" style="margin-top: 30px;">
          <button type="submit" class="btn waves-effect waves-light pink lighten-2 white-text" style="border-radius: 25px;">
            <i class="material-icons left">save</i> Actualizar Usuario
          </button>
        </div>
      </form>

      <div class="center-align" style="margin-top: 20px;">
        <a href="../index.php" class="btn-flat pink-text text-darken-2">
          <i class="material-icons left">arrow_back</i> Volver a la lista
        </a>
      </div>
    </div>
  </div>
</div>

<?php include('../footer.php'); ?>

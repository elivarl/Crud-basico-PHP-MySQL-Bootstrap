<div class="container">
  <h2>Registro de Alumno</h2>
  <form action="?controller=alumno&&action=save" method="POST">
    <div class="form-group">
      <label for="text">Nombres:</label>
      <input type="text" class="form-control" id="nombres" placeholder="Ingrese su Nombre" name="nombres">
    </div>

    <div class="form-group">
      <label for="text"></label>
      <input type="text" name="apellidos" class="form-control" placeholder="Ingrese su apellido">
    </div>
    <div class="check-box">
      <label>Activo <input type="checkbox" name="estado">  </label>      
    </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
  </form>
</div>
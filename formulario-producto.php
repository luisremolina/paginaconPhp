
<form action="GUARDADATOS.php" method="POST">
  <div class="mt-2 form-group">
    <label for="exampleInputEmail1"> Autor </label>
    <input type="text" class="form-control" name="autor" placeholder="Escriba el nombre del autor">
  </div>
  
  <div class="mt-2 form-group">
    <label for="producto_name">Nombre del producto</label>
    <input type="text" class="form-control" name="producto_name" placeholder="Escriba el nombre de su producto">
  </div>
  <div class="mt-2 form-group">
    <label for="descripcion">Descripcion</label>
    <textarea class="form-control" placeholder="Descripcion del producto" name="descripcion" rows="5"></textarea>
  </div>
  <div class="mt-2 form-group">
    <label for="precio">Precio</label>
    <input type="number" class="form-control" placeholder="Valor del producto" name="precio">
  </div>
  <div class="mt-2 form-group">
    <label for="contacto">Contacto</label>
    <input type="number" class="form-control" name="contacto" placeholder="Numero de contacto">
  </div>
  <div class="mt-2 form-group">
    <label for="img">Imagen</label>
    <input type="file" class="form-control" name="img">
  </div>
  <button type="submit" name="GUARDAR" class="btn btn-primary mt-5">Registrar</button>
</form>
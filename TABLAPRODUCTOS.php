<?php include("reutilizables/header.php"); ?>
<?php include("BASEDEDATOS.php"); ?>

<div class= "container" > 

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">AUTOR</th>
      <th scope="col">PRODUCTO</th>
      <th scope="col">DESCRIPCION</th>
      <th scope="col">PRECIO</th>
      <th scope="col">CONTACTO</th>
      <th width="50px" scope="col">IMAGEN</th>
      <th scope="col">OPCIONES</th>

    </tr>
  </thead>
  <tbody>
   
   <?php  

        $CONSULTA="select * from registro_producto ";
        $RESULTADO=mysqli_query($coneccion,$CONSULTA);

        while ( $columna=mysqli_fetch_assoc($RESULTADO)) {

        ?>
        <tr>
        	<td> <?php echo $columna['AUTOR'] ?> </td>
        	<td> <?php echo $columna['NOMBRE_DEL_PRODUCTO'] ?> </td>
        	<td> <?php echo $columna['DESCRIPCION'] ?> </td>
        	<td> <?php echo $columna['PRECIO'] ?> </td>
        	<td> <?php echo $columna['CONTACTO'] ?> </td>
        	<td>  <img width="100px" src="Imagenes/<?php echo $columna['IMAGEN_PRODUCTO'] ?>" class="" alt="Imagenes/<?php echo $columna['IMAGEN_PRODUCTO'] ?>"> </td>
        	<td> 
        		<a class="btn btn-danger" href=""> <i class="fas fa-trash-alt"></i> </a>
        		<a class="btn btn-secondary" href=""> <i class="fas fa-edit"></i> </a>

        	</td>
        </tr>





          <?php } ?>
    



  </tbody>
</table>

 </div>




<?php include("reutilizables/footer.php"); ?>


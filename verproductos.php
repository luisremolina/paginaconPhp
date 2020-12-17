<?php include("reutilizables/header.php"); ?>
<?php include("BASEDEDATOS.php"); ?>

<div class="container my-5">
    <div class="row">

        <?php  

        $CONSULTA="select * from registro_producto ";
        $RESULTADO=mysqli_query($coneccion,$CONSULTA);

        while ( $columna=mysqli_fetch_assoc($RESULTADO)) {

        ?>
    
                
                    <div class="col-4">
                        <div class="card">
                            <img style="object-fit: contain;" height="250px" src="Imagenes/<?php echo $columna['IMAGEN_PRODUCTO'] ?>" class="card-img-top" alt="Imagenes/<?php echo $columna['IMAGEN_PRODUCTO'] ?>">
                            <div class="card-body">
                                <h5 class="card-title"><?php// echo $columna['AUTOR'] ?></h5>
                                <h5 class=" lead"><?php echo $columna['NOMBRE_DEL_PRODUCTO'] ?></h5>
                                <h5 class=" badge badge-primary"> $.<?php echo $columna['PRECIO'] ?></h5>
                                <h5 class="card-text"><?php echo $columna['DESCRIPCION'] ?></h5>
                                 <h5 class="card-text"><?php echo $columna['CONTACTO'] ?></h5>

                            </div>
                        </div>
                    </div>
                    <?php } ?>
    </div>
</div>

<?php  include("reutilizables/footer.php"); ?>

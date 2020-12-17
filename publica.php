
<?php include("reutilizables/header.php"); ?>
<?php include("BASEDEDATOS.php"); ?>
<?php if (isset($_SESSION['message'])) { ?>
        <div class="alert alert-<?= $_SESSION['message_type'] ?> alert-dismissible fade show" role="alert">
                <?= $_SESSION['message']?>
  			   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    		          <span aria-hidden="true">&times;</span>
 			    </button>
		</div>
<?php session_unset(); }  ?>
<div class="container">
    <?php include("formulario-producto.php");?>
</div>
<?php include("reutilizables/footer.php");?>

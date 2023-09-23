
<div class="col">
<div class="card shadow p-3 mb-5  bg-danger rounded text-center">

    <div class="card shadow p-3 mb-5 bg-body-tertiary rounded text-center ">
        <img src="<?php echo $pokemon["imagen_path"] ?>" class="rounded" width='300'>

    </div>

     <div class="card-body bg-body-tertiary">
    <h5 class="card-title"><?php echo $pokemon["nombre"] ?></h5>
    <p class="card-text"><?php echo $pokemon["descripcion"] ?></p>
    <p class="card-text"><?php echo $pokemon["tipo"] ?></p>
      <p class="badge bg-primary text-wrap" style="width: 6rem;"># <?php echo $pokemon["id"] ?> </p>


</div>
</div>
</div>
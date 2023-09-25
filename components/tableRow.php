<?php 
$urlEdit = "/Pokedex/edit.php?id=".$pokemon["numero_identificador"];
$urlImgType = "imagenes/tipos/".$pokemon["tipo"].".jpg";
?>

<tr>
    <?php include 'components/table.php';?>

  <?php 
  if(isset($_SESSION['usuario'])){
    echo '<td colspan="1" >
    <div class="d-flex h-100 align-items-center"> 
    <a href='.$urlEdit.' class="btn btn-primary mx-2">Modificar</a>
    <a href="" class="btn btn-danger">Borrar</a>
    </div>
  </td>';
  }
  ?>
</tr>
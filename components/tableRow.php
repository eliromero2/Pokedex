<?php 
$urlEdit = "/Pokedex/edit.php?id=".$pokemon["numero_identificador"];
$urlImgType = "imagenes/tipos/".$pokemon["tipo"].".jpg";
?>

<tr>
    <?php include 'components/table.php';?>

  
  <?php if (isset($_SESSION['usuario'])): ?>
  <td colspan="1">
    <div class="d-flex h-100 align-items-center">
      <a href="<?php echo $urlEdit; ?>" class="btn btn-primary mx-2">Modificar</a>
      <form action="lib/deletePokemon.php" method="post">
        <input type="hidden" name="numero_identificador" value="<?php echo $pokemon['numero_identificador']; ?>">
        <button type="submit" class="btn btn-danger">Borrar</button>
      </form>
    </div>
  </td>
<?php endif; ?>
</tr>
<?php 
$urlEdit = "/Pokedex/edit.php?id=".$pokemon["numero_identificador"];
$urlImgType = "imagenes/tipos/".$pokemon["tipo"].".jpg";
?>

<tr>
  <th scope="row"><?php echo $pokemon["numero_identificador"] ?></th>
  <td colspan="1"><img src=<?php echo $pokemon["imagen_path"] ?> width='40'></td>
  <td colspan="1"><a href="detallePokemon.php?nombre=<?php echo $pokemon["nombre"] ?>"><?php echo $pokemon["nombre"] ?></td>
  <td colspan="1"><img src=<?php echo $urlImgType ?> width='40'></td>
  <td><?php echo $pokemon["descripcion"] ?></td>
  

  
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
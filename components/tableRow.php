<?php 
$urlEdit = "/Pokedex/edit.php?id=".$pokemon["numero_identificador"];
?>

<tr>
  <th scope="row"><?php echo $pokemon["numero_identificador"] ?></th>
  <td colspan="1"><img src=<?php echo $pokemon["imagen_path"] ?> width='40'></td>
  <td colspan="1"><a href="detallePokemon.php?nombre=<?php echo $pokemon["nombre"] ?>"><?php echo $pokemon["nombre"] ?></td>
  <td><?php echo $pokemon["descripcion"] ?></td>
  <td class="d-flex ">
    <a href=<?php echo $urlEdit; ?> class="btn btn-primary mx-2">Modificar</a>
    <a href="" class="btn btn-danger">Borrar</a>
  </td>
</tr>
<?php
$urlEdit = "/Pokedex/edit.php?id=".$pokemon["numero_identificador"];
?>

<tr>
  <th scope="row"><?php echo $pokemon["numero_identificador"] ?></th>
  <td colspan="1"><img src=<?php echo $pokemon["imagen_path"] ?> width='40'></td>
  <td colspan="1"><?php echo $pokemon["nombre"] ?></td>
  <td colspan="1"><img src=<?php echo $pokemon["tipo"] ?> width='40'></td>
  <td><?php echo $pokemon["descripcion"] ?></td>

</tr>

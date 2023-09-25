<th scope="row"><?php echo $pokemon["numero_identificador"] ?></th>
<td colspan="1"><img src=<?php echo $pokemon["imagen_path"] ?> width='40'></td>
<td colspan="1"><a href="detallePokemon.php?nombre=<?php echo $pokemon["nombre"] ?>"><?php echo $pokemon["nombre"] ?></td>
<td colspan="1"><img src=<?php echo $urlImgType ?> width='40'></td>
<td><?php echo substr($pokemon["descripcion"], 0, 100) ?> <a href="detallePokemon.php?nombre=<?php echo $pokemon["nombre"] ?>"><?php echo "...ver" ?></td>
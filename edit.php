<?php 
    include_once 'header.php'; 
    include_once 'lib/mysql.php';    
    $db = new MySQLDatabase();
    $pokemon = $db->fetchOne('select * from pokemon where numero_identificador ='.$_GET['id']);
    $types = array("Fuego", "Agua", "Planta", "Eléctrico", "Hielo", "Tierra", "Volador", "Psíquico", "Lucha", "Veneno", "Roca", "Bicho", "Fantasma", "Dragón", "Siniestro", "Acero", "Hada");

?>
<div class="container">
    <div class="row">
        <h1>Editar Pokemon <?php echo $pokemon['nombre']; ?></h1>
        <div class="col">
        <form id="updatePokemon" class="row g-3">
            <input type="hidden" name="id" value=<?php echo $pokemon['id'] ?>>
            <div class="col-12">
                <label for="formFile" class="form-label">Imagen</label>
                <input class="form-control" type="file" id="formFile" name="formFile">
            </div>
            <div class="col-md-6">
                <label for="numero_identificador" class="form-label">Numero Pokemon</label>
                <input type="text" class="form-control" name='numero_identificador' id="numero_identificador" value=<?php echo $pokemon['numero_identificador'] ?>>
            </div>
            <div class="col-md-6">
                <label for="name" class="form-label">Nombre</label>
                <input type="text" class="form-control" name='name' id="name" value=<?php echo $pokemon['nombre'] ?>>
            </div>
            <div class="col-md-6">
                <label for="habitad" class="form-label">Habitad</label>
                <input type="text" class="form-control" name='habitad' id="habitad" value=<?php echo $pokemon['habitad'] ?>>
            </div>
            <div class="col-md-6">
                <label for="type1" class="form-label">Primer Tipo</label>
                <select id="type1" class="form-select" name='type1'>
                <option selected>Seleccione Tipo</option>
                <?php foreach($types as $type): ?>
                    <option value="<?php echo $type; ?>" <?php if($pokemon['tipo'] == $type) echo 'selected'; ?>>
                        <?php echo $type; ?>
                    </option>
                <?php endforeach; ?>
                </select>
            </div>
            <div class="col-6">
            <label for="type2" class="form-label">Segundo Tipo</label>
                <select id="type2" name="type2" class="form-select">
                <option selected>Seleccione Tipo</option>
                <?php foreach($types as $type): ?>
                    <option value="<?php echo $type; ?>">
                        <?php echo $type; ?>
                    </option>
                <?php endforeach; ?>
                </select>
            </div>
            <div class="col-12">
                <label for="descripcion" class="form-label">Descripcion</label>
                <textarea class="form-control" id="descripcion" name="descripcion" rows="3" >
                <?php echo trim($pokemon['descripcion']); ?>
            </textarea>
            </div>
            <div class="col-md-6">
                <label for="weight" class="form-label">Peso</label>
                <input type="text" class="form-control" id="weight" name="weight" value=<?php echo $pokemon['peso'] ?>>
            </div>
            <div class="col-md-6">
                <label for="height" class="form-label">Altura</label>
                <input type="text" class="form-control" id="height" name="height" value=<?php echo $pokemon['altura'] ?>>
            </div>
            
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Actualizar</button>
            </div>
            </form>
        </div>
    </div>
</div>

<script>
    document.getElementById('updatePokemon').addEventListener('submit', function(event) {
    event.preventDefault();

    var formData = new FormData(this);

    fetch('lib/updatePokemon.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => window.location.href = 'home.php')
    .catch((error) => console.error('Error:', error));
});
</script>
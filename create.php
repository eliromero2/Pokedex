<?php 
    include_once 'header.php'; 
    include_once 'lib/mysql.php';    
    $db = new MySQLDatabase();
    $types = array("Fuego", "Agua", "Planta", "Eléctrico", "Hielo", "Tierra", "Volador", "Psíquico", "Lucha", "Veneno", "Roca", "Bicho", "Fantasma", "Dragón", "Siniestro", "Acero", "Hada");

?>
<div class="container">
    <div class="row">
        <h1>Crear Nuevo Pokemon</h1>
        <div class="col">
        <form id="createPokemon" action="lib/createPokemon.php" method="post" class="row g-3">
            <div class="col-12">
                <label for="formFile" class="form-label">Imagen</label>
                <input class="form-control" type="file" id="formFile" name="formFile">
            </div>
            <div class="col-md-6">
                <label for="numero_identificador" class="form-label">Numero Pokemon</label>
                <input type="text" class="form-control" name='numero_identificador' id="numero_identificador">
            </div>
            <div class="col-md-6">
                <label for="name" class="form-label">Nombre</label>
                <input type="text" class="form-control" name='name' id="name" >
            </div>
            <div class="col-md-6">
                <label for="habitad" class="form-label">Habitad</label>
                <input type="text" class="form-control" name='habitad' id="habitad" >
            </div>
            <div class="col-md-6">
                <label for="type1" class="form-label">Tipo</label>
                <select id="type1" class="form-select" name='type1'>
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
                <textarea class="form-control" id="descripcion" name="descripcion" rows="3" ></textarea>
            </div>
            <div class="col-md-6">
                <label for="weight" class="form-label">Peso</label>
                <input type="text" class="form-control" id="weight" name="weight" >
            </div>
            <div class="col-md-6">
                <label for="height" class="form-label">Altura</label>
                <input type="text" class="form-control" id="height" name="height">
            </div>
            
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Crear</button>
            </div>
            </form>
        </div>
    </div>
</div>
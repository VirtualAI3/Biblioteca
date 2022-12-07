<?=$cabecera ?>
    Formulario para crear
    
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Ingresar datos del libro</h5>
            <p class="card-text">
        <form method="post" action="<?=site_url('/guardar')?>" enctype="multipart/form-data">
        <div class="mb-3">
          <label for="nombre" class="form-label">Nombre:</label>
          <input type="text" value="<?=old('nombre')?>" name="nombre" id="nombre" class="form-control">
        </div>
        <div class="mb-3">
          <label for="nombre" class="form-label">Autor libro:</label>
          <input type="text" name="autor" id="autor" value="<?=old('autor')?>" class="form-control">
        </div>
        <div class="mb-3">
          <label for="imagen" class="form-label">Imagen:</label>
          <input type="file" class="form-control" name="imagen" id="imagen" placeholder="" aria-describedby="fileHelpId">
        </div>
        <button class="btn btn-success" type="submit">
            Guardar
        </button>
        <a href="<?=base_url('listar'); ?>" class="btn btn-info">Cancelar</a>
    </form>
            </p>
        </div>
    </div>
    
<?=$pie ?>
<?=$cabecera; ?>
<?php

?>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Modificar datos del libro</h5>
            <p class="card-text">
        <form method="post" action="<?=site_url('/actualizar')?>" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?=$libro['id']?>">
        <div class="mb-3">
          <label for="nombre" class="form-label">Nombre:</label>
          <input type="text" name="nombre" id="nombre" value="<?=$libro['nombre']?>" class="form-control">
        </div>
        <div class="mb-3">
          <label for="nombre" class="form-label">Autor libro:</label>
          <input type="text" name="autor" id="autor" value="<?=$libro['autor']?>" class="form-control">
        </div>
        <div class="mb-3">
          <label for="imagen" class="form-label">Imagen:</label>
          <br>
          <img src="<?=base_url()?>/uploads/<?=$libro['imagen']; ?>" width="100" alt="" class="img-thumbnail">
          <input type="file" class="form-control" name="imagen" id="imagen" placeholder="" aria-describedby="fileHelpId">
        </div>
        <button class="btn btn-success" type="submit">
            Actualizar
        </button>
        <a href="<?=base_url('listar'); ?>" class="btn btn-info">Cancelar</a>
    </form>
            </p>
        </div>
    </div>
<?=$pie; ?>
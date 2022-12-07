<?=$cabecera  ?>
<a href="<?=base_url('crear')?>" class="btn btn-success">Crear un libro</a>
<br>
<br>
        <table class="table table-light">
            <thead class="thead-light">
                <tr>
                    <th>#</th>
                    <th>Imagen</th>
                    <th>Nombres</th>
                    <th>Autor</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($libros as $libro): ?>
                    <tr>
                        <td><?=$libro['id']; ?>  </td>
                        
                        <td>
                            <img src="<?=base_url()?>/uploads/<?=$libro['imagen']; ?>" width="100" alt="" class="img-thumbnail">
                            
                        </td>
                        <td><?=$libro['nombre']; ?></td>
                        <td><?=$libro['autor']; ?></td>
                        <td>
                            <a href="<?=base_url('editar/'.$libro['id']);?>" type="button" class="btn btn-warning">Editar</a>
                            <a href="<?=base_url('borrar/'.$libro['id']);?>" type="button" class="btn btn-danger">Borrar</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?=$pie ?>
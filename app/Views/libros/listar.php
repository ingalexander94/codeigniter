<?= $cabecera ?>
       <a href="<?= base_url('libros/crear') ?>">Crear nuevo libro</a>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Imagen</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($libros as $index => $libro): ?>
            <tr>
                <td><?= $index + 1 ?></td>
                <td><?= $libro['nombre'] ?></td>
                <td><img src="<?= base_url('uploads/'.$libro['imagen']) ?>" alt="imagen" width="50" height="50"></td>
                <td><a href="<?= base_url('libros/eliminar/'.$libro['id']) ?>">Eliminar</a></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
        </table>

<?= $pie ?>

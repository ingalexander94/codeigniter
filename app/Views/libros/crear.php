<?= $cabecera ?>
    
    <h1>Formulario crear</h1>
    <form action="<?= base_url('libros/guardar') ?>" enctype="multipart/form-data" method="POST">
        <input id="nombre" autocomplete="off" autofocus="on" name="nombre" placeholder="Nombre" type="text">
        <input type="file" name="imagen" id="imagen">
        <button type="submit">Guardar</button>
    </form>

<?= $pie ?>

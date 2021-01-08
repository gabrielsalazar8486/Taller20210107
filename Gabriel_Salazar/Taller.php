
<html content="utf-8">
    <body style="align-items: center; text-align: center">
        <h1>Ejercicios 1º</h1>
        <form method="post" action="Controlador.php">
            <div>
                <label>Nombre</label>
                <input type="text" value="" name="nombre" required>
            </div>
            <div>
                <label>Edad</label>
                <input type="number" value="" name="edad" required>
            </div>
            <div>
                <label>Correo</label>
                <input type="email" value="" name="correo" required>
            </div>
            <div>
                <label>Telefono</label>
                <input type="tel" value="" name="telf" required>
            </div>
            <input type="submit" value="Guardar" required>
        </form>
        <?php
        require_once('Controlador.php');

        $directorio = new Directorio();
        $registros = $directorio->getDirectorio();

        if (!empty($registros)){
        ?>
        <table border="1"  style="margin-left: 500px">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Edad</th>
                    <th>Correo</th>
                    <th>Telefono</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($registros as $registro){
                $registro = json_decode($registro);
                ?>
                <tr>
                    <td><?php echo $registro->nombre ?></td>
                    <td><?php echo $registro->edad ?></td>
                    <td><?php echo $registro->correo ?></td>
                    <td><?php echo $registro->telf ?></td>
                </tr>
            <?php }?>
            </tbody>
        </table>
        <?php } ?>
    </body>
</html>

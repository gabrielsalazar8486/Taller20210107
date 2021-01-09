<html content="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <body>
        <div class="container">
            <h1 style="text-align: center">Filtro de registro</h1>
            <form method="post" action="ControllerRegister.php" class="form-inline">
                 <div class="row">
                    <div class="form-group col-3">
                        <label for="nombre" class="form-label">Nombre:</label>
                        <input class="form-control" id="nombre" type="text" name="nombre"/>
                    </div>
                    <div class="col-3">
                        <br>
                        <button type="submit" class="btn btn-primary btn-lg">Buscar</button>
                    </div>
                </div>
            </form>
        <?php
        require_once('ControllerRegister.php');

        $directorio = new ControllerRegister();
        $registros = $directorio->getDirectorio();

        if (!empty($registros)){
        ?>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Edad</th>
                    <th scope="col">Genero</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($registros as $registro){
                $registro = json_decode($registro);
                ?>
                <tr>
                <td><?php echo $registro->num ?></td>
                <td><?php echo $registro->nombre ?></td>
                <td><?php echo $registro->apellido ?></td>
                <td><?php echo $registro->edad ?></td>
                <td><?php echo $registro->genero ?></td>
                </tr>
            <?php }?>
            </tbody>
        </table>
        <?php } ?>
        </div>
    </body>

</html>


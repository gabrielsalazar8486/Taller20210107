<html content="utf-8">
    <body style="align-items: center; text-align: center">
    <div id="inverter">
{{title}}
    </div>
        <h1>Inversificador</h1>
        <form method="post" action="">
            <span>Ingresa cualquier palabra u oración</span>
            <br>
            <br>
            <div>
                <label>Texto</label>
                <input type="text" id="textToInvert" name="text" required>
            </div>
            <br>
            <div class="form-group col-xs-12 col-sm-6 col-md-2 col-lg-2">
            <button type="submit" id="invertirBtn" class="btn btn-success btn-block" >
                <i class="fa fa-save"></i> Invertir
            </button>
            </div>
        </form>
    <script src="inverter.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.5.16/dist/vue.js"></script>
    </body>
</html>

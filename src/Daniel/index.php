<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Assistant</title>
    </head>

    <body>
        <h1>¡Assistant!</h1>
        <form action="" id="form">
            <label for="">Escriba un texto cualquiera</label>
            <input type="text" name="message" id="message" required="true">
            <br>

            <p id="response" hidden></p>

            <input type="submit" id="submit">
        </form>

        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
        <script src="app.js"></script>
    </body>
</html>
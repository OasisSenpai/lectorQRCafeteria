<!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8" />
        <title>Lector Cafetería</title>
        <meta name="description" content="Lector Cafetería" />
        <!-- <meta name="herramienta" content="VS Code" /> -->
        <link rel="stylesheet" href="assets/css/index.css" />
        <link rel="stylesheet" href="assets/css/comun.css" />
        <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon" />
    </head>
    <body>
        <table border="0">
            <tr id="fila1">
                <td id="celda1">
                    <p class="textoInformativo" id="textoInformativo1">⬇⬇⬇⬇Pulsa para comenzar el escaneo⬇⬇⬇⬇</p>
                </td>
            </tr>
            <tr id="fila2">
                <td id="celda2">
                    <button id="buttonScanner" onclick="window.location='escaner.php'"><img id="imgScanner" src="assets/img/scaner.ico" alt="Imagen escaner" /></button>
                </td>
            </tr>
            <tr id="fila3">
                <td id="celda3">
                    <p class="textoInformativo" id="textoInformativo2">⬆⬆⬆⬆Pulsa para comenzar el escaneo⬆⬆⬆⬆</p>
                </td>
            </tr>
        </table>
    </body>
</html>
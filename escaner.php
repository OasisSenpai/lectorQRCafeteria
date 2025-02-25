<!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8" />
        <title>Escaner - Lector Cafetería</title>
        <meta name="description" content="Lector Cafetería" />
        <!-- <meta name="herramienta" content="VS Code" /> -->
        <link rel="stylesheet" href="assets/css/escaner.css" />
        <link rel="stylesheet" href="assets/css/comun.css" />
        <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon" />
        <script src="https://unpkg.com/html5-qrcode" type="text/javascript"></script>
        <script src="assets/js/leerQR.js" type="text/javascript"></script>
    </head>
    <body>
        <div id="lector"></div>
        <p id="resultado"></p>

        <script>
            let resultadoQR;

            function qr_escaneado(decodedText, decodedResult) {
                resultadoQR = decodedText
                if(resultadoQR) {
                    console.log(`Code matched = ${resultadoQR}`, decodedResult);
                    document.getElementById('lector').style.display = 'block';
                    document.getElementById('resultado').textContent = resultadoQR;
                    escaner.stop();
                    window.location.href = `resultado.php?qr=${encodeURIComponent(resultadoQR)}`;
                }
            }

            const escaner = new Html5Qrcode(/* element id */ "lector");
            const configuracion_escaner = {
                fps:10,
                qrbox: {width:500, height:500}
            };

            escaner.start({facingMode:"environment"}, configuracion_escaner, qr_escaneado)
            
            // escaner.start(
            //     cameraId, 
            //     {
            //         fps: 10,    // Optional, frame per seconds for qr code scanning
            //         qrbox: { width: 250, height: 250 }  // Optional, if you want bounded box UI
            //     },
            //     (decodedText, decodedResult) => {
            //         // do something when code is read
            //     },
            //     (errorMessage) => {
            //         // parse error, ignore it.
            //     })
            // .catch((err) => {
            //     // Start failed, handle it.
            // });
        </script>
    </body>
</html>
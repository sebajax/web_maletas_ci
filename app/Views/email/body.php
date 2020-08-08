<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Transportes Oliveros">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <style>
            body {
                background-color: #f6f6f6;
                font-family: sans-serif;
                -webkit-font-smoothing: antialiased;
                font-size: 14px;
                line-height: 1.4;
                margin: 0;
                padding: 0;
                padding-top: 50px;
                -ms-text-size-adjust: 100%;
                -webkit-text-size-adjust: 100%; 
            }  
            .title {
                font-weight: bold;
                color: #439946;
            }   
            h3 {
                color: #406885;
                font-weight: 800;
                margin: 0;
            }           
            .container {
                display: block;
                margin: 0 auto !important;
                /* makes it centered */
                max-width: 580px;
                padding: 10px;
                width: 580px; 
            }
            .content {
                background-color: white;
                box-sizing: border-box;
                display: block;
                margin: 0 auto;
                max-width: 580px;
                padding: 10px;
                box-shadow:  0 0 10px  rgba(0,0,0,0.6);
                -moz-box-shadow: 0 0 10px  rgba(0,0,0,0.6);
                -webkit-box-shadow: 0 0 10px  rgba(0,0,0,0.6);
                -o-box-shadow: 0 0 10px  rgba(0,0,0,0.6);
                border-radius: 5px;
                border: solid 1px #555;
            }         
            .footer {
                clear: both;
                margin-top: 10px;
                text-align: center;
                width: 100%; }
                .footer td,
                .footer p,
                .footer span,
                .footer a {
                color: #999999;
                font-size: 12px;
                text-align: center; }   
        </style>
    </head>

    <body>
        <div class="container">
            <h3>Contacto web - Transportes Oliveros</h3>
            <br />
            <div class="content">
                <p><span class="title"> Nombre </span></p>
                <p>{nombre_completo}</p>
                <p><span class="title"> Telefono </span></p>
                <p>{telefono}</p>
                <p><span class="title"> Email </span></p>
                <p>{email}</p>
                <p><span class="title"> Comentario </span></p>
                <p>{comentario}</p>
            </div>
            <br />
            <footer>
                <span style="color: #adadad"> © 2020 Copyright: </span> 
                <span style="color: #adadad"> Transportes Oliveros </span>                 
            </footer>
        </div>
    </body>
</html>
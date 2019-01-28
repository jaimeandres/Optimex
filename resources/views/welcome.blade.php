<html>
    <head>
        <title>Optimex:Bienvenidos</title>
        <link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
        <style>
            body {
                margin: 0;
                padding: 0;
                width: 100%;
                height: 100%;
                color: #B0BEC5;
                display: table;
                font-weight: 100;
                font-family: 'Arial Black';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 85px;
                margin-bottom: 40px;
                color: #3b83bd;
                margin: 10px 13px 53px 31px;
            }

            .quote {
                
                font-size: 28px;
                color: #c51d34;
                padding-top: 20px;
                margin: 86px 0px 0px 0px;
            }
            .goToHome{
                padding-top: 30px;
                top:30px;
            }
            .goToHome>a{
                text-decoration: none;
                color: #fff;
            }
            .btn {
                font-size: 18px;
                font-family: 'Lato';
            }
        </style>
    </head>
    <body oncontextmenu="return false" onkeydown="return false">
        
        <div class="container">
            <div class="content">                
                <div class="title"><img src="Imagenes/Capsulas.jpg" align="left" height="287" width="450">Optimex</div><br>
                <div class="quote">Para Optimizar la distribución de sus Muestras Médicas utilize Optimex</div>
                <div class="goToHome">
                        <a href="{{URL::to('/inicio')}}">
                        <button type="button" class="btn btn-primary">Iniciar</button>
                    </a>
            </div>
        </div>
    </body>
</html>
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
                font-family: 'Lato';
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
                font-size: 90px;
                margin-bottom: 40px;
                font-weight: bold;
                color: #3b83bd;
            }

            .h4, h4 {
                font-size: 32px;
            }

            .quote {
                font-size: 24px;
                color: #c51d34;
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
            }
        </style>
    </head>
    <body oncontextmenu="return false" onkeydown="return false">
        <div class="container">
            <div class="content">
                <div class="title">Optimex </div>
                <div class="quote"><h4>Para Optimizar la distribución de sus Muestras Médicas utilize Optimex</h4></div>
                <div class="goToHome">
                        <a href="{{URL::to('/inicio')}}">
                        <button type="button" class="btn btn-primary">Iniciar</button>
                    </a>
            </div>
        </div>
    </body>
</html>
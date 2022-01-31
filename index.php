<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
        body {
            height: 100vh;
            background: #ffe244;
        }

        .app {
            display: grid;
            min-height: 100%;
            height: 100%;
            background: url("./assets/cigarro.png") no-repeat center;
        }

        .form-control, .btn {
            line-height: 2.5;
            border: 3px solid #000000;
        }

        p {
            background: #ffe244;
        }

    </style>

</head>
<body>

    <div class="app container p-5 align-middle">

        <div class="row justify-content-md-center align-middle">
            <div class="col-5 ">

                <h1>Calcule seus dias perdidos</h1>
        
                <form action="./controllerTempoPerdido.php" method="POST">

                    <div class="form-group">
                        <label for="cigarros">cigarros por dia: </label>
                        <input type="text" class="form-control" id="cigarros" name="campo_cigarros">
                    </div>

                    <div class="form-group">
                        <label for="anos">anos fumando: </label>
                        <input type="text" class="form-control" id="anos" name="campo_anos">
                    </div>
                
                    <div class="form-group mt-2">
                        <button type="submit" class="btn btn-primary">calcular</button>
                    </div>

                </form>

                <?php if(isset($_POST) && !empty($_POST)): ?>
                    
                    <p> <?= "Por conta dos seus $cigarroPorDia cigarros por dia durante $periodoDeFumo anos, você perdeu $diasContados dias de vida :( " ?></p>

                <?php endif; ?>


            </div>
        </div>
    </div>


    
</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <form action="respuesta.php" method="POST">
            <div class="form-group">
                <label for="email">Correo electronico</label>
                <input name="correo" type="email" class="form-control" id="email" aria-describedby="emailHelp">
            </div>

            <div class="form-group">
                <label for="Password">Contraseña</label>
                <input name="pass" type="password" class="form-control" id="Password">
            </div>

            <div class="form-grrup">
                <label for="Edad" class="form-label">Edad</label>
                <input type="text" class="form-control" id="Edad">
             </div>
            
    <br></br>
            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    
</body>

</html>
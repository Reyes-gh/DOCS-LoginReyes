<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login main</title>

<link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="estilo.css"/>
</head>
<body>
    
<div class="container">

    <div class="flex-lg-row">

        <div class="flex-lg-column">
            <div class="mein">
                <p class="espesial">Inicio de sesión</p>
                <hr class="mihr">
                <div class="imagen">
                    <img class="fotillo" src="persona.png">
                </div>

                <?php
                session_start();
                
                if($_SESSION['fallo']==true) {
                    echo '<p style="color: red;">Inicio de sesión incorrecto</p>';
                    $_SESSION['fallo']=false;
                    session_destroy();
                }

                if($_SESSION['registrao']==true){
                    echo '<p style="color: green;">Usuario registrado con éxito</p>';
                    $_SESSION['registrao']=false;
                    session_destroy();
                }


              #  if($_SERVER['REQUEST_METHOD'] == "POST"){
             #       echo '<p style="color: red">Inicio de sesión incorrecto</p>';
            #    }
                ?>

                <br>

                <div>

                <form method="post" action="login.php">
                    <input class="custominput" type="text" name="id" id="usr" placeholder="Id"> <br>
                    <input class="custominput2" type="password" name="pass" id="pswd" placeholder="Contraseña">

                    <div class="row">
                        <div class="col-sm-4"></div>
                        <div class="col-sm-4"> <a href="regis.html"><p>Regístrate</p></a> </div>
                        <div class="col-sm-4"></div>
                    </div>
                     <p class="espesial">
                     <input type="checkbox" name="sess">
                     ¿Desea mantener la sesión abierta?
                     </p> <br>
                    <input class="botoncin" type="submit" value="Iniciar Sesión">

                </form>
                <br>

                </div>

            </div>
        </div>
    </div>
</div>

</body>
</html>

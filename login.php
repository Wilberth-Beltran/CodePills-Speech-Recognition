<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>
    <!--Enlaces de CSS-->
    <link rel="stylesheet" href="css/styles_login.css">
    <link rel="stylesheet" href="css/normalized.css">
</head>

<body>
    <header class="header">
        <div class="header-container">
            <img src="imagenes/imagen1.png" alt="Logo" title="Logo">
        </div>
    </header>

   <section>
    <div class = "form-box">
        <div class="form-value">
            <form action="#" method="POST">
                <h2>Inicio Sesión</h2>
                <?php
     include("controlador.php");
     include("conexion.php")
?>
                <div class="inputbox">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-square-rounded" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#7f5345" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M12 13a3 3 0 1 0 0 -6a3 3 0 0 0 0 6z" />
                        <path d="M12 3c7.2 0 9 1.8 9 9s-1.8 9 -9 9s-9 -1.8 -9 -9s1.8 -9 9 -9z" />
                        <path d="M6 20.05v-.05a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v.05" />
                      </svg>
                    <input type="text" name="Usuario">
                    <label for="">Usuarios</label>
                </div>
                <div class="inputbox">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-lock" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#7f5345" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M5 13a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v6a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-6z" />
                        <path d="M11 16a1 1 0 1 0 2 0a1 1 0 0 0 -2 0" />
                        <path d="M8 11v-4a4 4 0 1 1 8 0v4" />
                     </svg>
                    <input type="password" name="Contraseña">
                    <label for="">Contraseña</label>
                </div>
                <div class="forget">
                    <label for=""><input type="checkbox">Recordar Usuario <br> <br><a href="#"> Olvide mi Contraseña</a></label>
                </div>
                <button name="btningresar"> Inicio</button>
            </form>            
        </div>
    </div>
   </section> 
   <footer>
    <div class="footer">
        <!-- Contenido del footer -->
        <p>Derechos Reservados &copy; 2024</p>
        <img src="/imagenes/imagen3.png" alt="Logo Footer" title="Logo Footer" />
    </div>
</footer>
</body>
</html></html>
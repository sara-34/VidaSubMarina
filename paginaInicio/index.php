<?php
// Establecer la conexión con la base de datos
$conex = mysqli_connect("localhost:3308", "root", "", "vidasubmarina");

if (!$conex) {
    die("Error al conectar con la base de datos: " . mysqli_connect_error());
}

if (isset($_POST['comentario'])) {
    // Escapar los datos del formulario para evitar inyección de SQL
    $comentario = mysqli_real_escape_string($conex, $_POST['comentario']);

    // Consulta SQL para insertar los datos en la tabla
    $consulta = "INSERT INTO comentario (texto) 
                 VALUES ('$comentario')";
    
    if (mysqli_query($conex, $consulta)) {
        // Mostrar mensaje de éxito en JavaScript
        echo '<script>';
        echo 'alert("Comentario Guardado Correctamente");';
        echo 'setTimeout(function() {';
        echo '  window.location.href = "index.php";'; // Redirigir después de un segundo
        echo '}, 1000);'; // Tiempo en milisegundos (1000 = 1 segundo)
        echo '</script>';
    } else {
        // Mostrar mensaje de error en JavaScript
        echo '<script>';
        echo 'alert("Error al guardar comentario: ' . mysqli_error($conex) . '");';
        echo 'setTimeout(function() {';
        echo '  window.location.href = "index.php";'; // Redirigir después de un segundo
        echo '}, 1000);'; // Tiempo en milisegundos (1000 = 1 segundo)
        echo '</script>';
    }

    
}

// Cerrar la conexión con la base de datos
mysqli_close($conex);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="inicio.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha384-UMpKfLGJx1GLOiwOWOI6b+3Z+5MQfUvRSds4VPSzFzo+N8A/tTw3IgaKsJZ4bRJ/" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha384-UMpKfLGJx1GLOiwOWOI6b+3Z+5MQfUvRSds4VPSzFzo+N8A/tTw3IgaKsJZ4bRJ/" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Inicio</title>
</head>
<body>
<header>
        <nav>
          
            <a href="">Inicio</a>
            <a href="#footer">Contactanos</a>
            <a href="https://kertiax.itch.io/feed-the-fish">Juego</a>
        </nav>

        
        <section class="textos-header">
            <h1>La vida submarina en colombia</h1>
            <p>Colombia es una de las cinco naciones con mayor diversidad marina en el planeta. Gracias a sus condiciones biogeográficas es considerado un país privilegiado porque cuenta naturalmente con costas en dos océanos y con gran variedad de ecosistemas marinos y costeros.</p>
        </section>
        <div class="wave" style="height: 150px; overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M-2.45,22.22 C120.49,94.25 336.05,2.48 502.45,45.89 L500.00,150.00 L-3.28,151.48 Z" style="stroke: none; fill: rgb(255, 255, 255);"></path></svg></div>
    </header>

    <section class="section-3">
        <div class="cardh card-info">
            <div class="img-inf">
               <img src="./imagenes/mar.jpg" alt="">
            </div>
                
            <div class="contenido">
                <h2>El mar y su vida submarina </h2><br>
                <p>La vida marina, vida en el mar o vida oceánica, 
            la conforman las plantas, los animales y otros organismos 
            que viven en el agua salada de los mares y océanos, 
            o el agua salobre de los estuarios costeros. 
            En un nivel fundamental, la vida marina ayuda a 
            determinar la naturaleza misma de nuestro planeta.</p>
                <a href="/VidaSubmarina/paginaInicio/paginasecciones/secciones.php">Leer mas</a>
                
            </div>
        </div>
    </section>

    <section id="section-1">
    <!--<a class="material-symbols-outlined" href="#section-2" >keyboard_double_arrow_down </a>-->
   </section>

   <section id="section-2">
    <div class="container">
        <div class="card">
            <figure class="imagenesCard">
                <img src="./imagenes/tortuga.jpg" alt="">
            </figure>
            <div class="contenido">
                <h3>La tortuga Carey</h3>
                <p>En menos de diez años, la tortuga carey podría desaparecer en el Pacífico Oriental. Los científicos alertan de la delicada situación en la que se encuentra esta especie de tortuga marina, una de las más amenazadas del mundo.</p>
                
            </div>
        </div>

        <div class="card">
           <figure class="imagenesCard">
                <img src="./imagenes/tiburong.jpg" alt="">
            </figure>
            <div class="contenido">
                <h3><b>Tiburon gato</b></h3>
                <p>El tiburón nodriza o tiburón gato​ es una especie de tiburón que habita en los fondos marinos, llega a medir hasta 4 m de largo y puede encontrarse en mares tropicales como los de Centro América.</p>
                
            </div>
        </div>


        <div class="card">
            <figure class="imagenesCard">
                <img src="./imagenes/pez.jpg" alt="">
            </figure>
            <div class="contenido">
                <h3>Pez loro</h3>
                <p>Un estudio reciente realizado para la Lista Roja de Especies Amenazadas de la UICN descubrió que el 86% de las poblaciones de peces loro tienen bajo riesgo de extinción a nivel mundial</p>
                
            </div>
        </div>

    </div>

    
     </section>


     <section id="section-3">
        <div class="cardh card-fin">
            <figure>
            <img src="./imagenes/mare.gif" alt="">
            </figure>
            <div class="contenido">
                <h3><b>La ruta migratoria del Océano Pacífico Tropical en peligro</b></h3>
                <p>El Pacífico Colombiano además de albergar a miles de especies animales y vegetales, en sus profundidades tiene una “superautopista” submarina. Se trata de un pasadizo vital para tortugas marinas, tiburones, ballenas y tiburones martillo que transitan de un extremo al otro buscando alimento o lugar para anidar.</p>
                <a href="/VidaSubmarina/paginaInicio/paginasecciones/noticias.php">Noticias</a>
            </div>
        </div>
     </section>


     <section id="section-4">
     <div class="wave" style="height: 150px; overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M-2.45,22.22 C120.49,94.25 336.05,2.48 502.45,45.89 L500.00,150.00 L-3.28,151.48 Z" style="stroke: none; fill: #A3C9D9;"></path></svg></div>
     </section>

     <footer id="footer">
      <div class="cajaInfo">
      <div class="contacto">
        <h4><i class="fas fa-envelope"></i> Correo Electronico</h4>
        <p>vidamarina@gmail.com</p><br>

        <h4><i class="fas fa-phone"></i> Telefono</h4>
        <p>3134567889</p><br>

        <h4><i class="fas fa-map-marker-alt"></i> Dirección</h4>
        <p>Carrera 92#67 Ibague</p>
     </div>

     <div class="cajaComentario">
        <form method="post" action="index.php">
            <h5>Ingresa tu comentario de recomendación:</h5>
            <textarea name="comentario" rows="5" cols="30"></textarea><br><br>
            <input type="submit" value="Enviar comentario" class="custom-button">
        </form>
    </div>
        
     </footer>
     <?php include 'mostrar_comentarios.php'; ?>
</body>
</html>
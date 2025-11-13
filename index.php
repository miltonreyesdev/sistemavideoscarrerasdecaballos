<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BOMBAY - SPORTSBOOK</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="landing-container">
        <!-- Título Principal -->
        <h1 class="main-title">BOMBAY - SPORTSBOOK 🏇 ⚽</h1>

        <!-- Botón Grande de Apuestas -->
        <button class="cta-button" id="betButton">
            APUESTA CON NOSOTROS PRESIONA AQUÍ!
        </button>

        <!-- Botón de Revistas -->
        <button class="cta-button telegram-button" id="telegramButton">
            REVISTAS / RETROSPECTOS EN EL CANAL DE TELEGRAM - PRESIONA AQUÍ!
        </button>

        <!-- Subtítulo -->
        <h2 class="subtitle">CARRERAS EN VIVO</h2>

        <!-- Videos Embed -->
        <div class="videos-container">
            <div class="video-wrapper">
                <?php
                $videos = json_decode(file_get_contents('videos.json'), true);
                $video1 = $videos['video1'] ?? '';
                ?>
                <iframe id="video1" width="100%" height="315" src="<?php echo $video1; ?>" frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="video-wrapper">
                <?php
                $video2 = $videos['video2'] ?? '';
                ?>
                <iframe id="video2" width="100%" height="315" src="<?php echo $video2; ?>" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>

        <!-- Contacto -->
        <div class="contact-section">
            <a href="https://wa.link/6dkr47" target="_blank" class="contact-link">
                CONTACTO: +57 300 941 4666
            </a>
        </div>

        <!-- Copyright Discreto -->
        <div class="copyright">
            <p>Este sitio web fue creado por <strong>El Imperio sistemas</strong>, desarrollador web | 
            <a href="https://wa.me/17867163761" target="_blank" class="developer-contact">
                Contacto: +1 (786) 716 3761
            </a></p>
        </div>
    </div>

    <!-- Botón flotante de WhatsApp -->
    <a href="https://wa.link/6dkr47" target="_blank" class="whatsapp-float">
        <img src="img/whatsapp.png" alt="WhatsApp">
    </a>

    <script src="js/script.js"></script>
</body>
</html>
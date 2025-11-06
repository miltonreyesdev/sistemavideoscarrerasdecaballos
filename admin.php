<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Bombay Sportsbook</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #0a192f;
            color: white;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem;
        }

        .admin-form {
            max-width: 600px;
            width: 100%;
            background: #1e3a5f;
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
        }

        h1 {
            color: #ffd700;
            text-align: center;
            margin-bottom: 2rem;
            font-size: 2.5rem;
        }

        h3 {
            color: white;
            margin-bottom: 1.5rem;
            text-align: center;
        }

        label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: bold;
            color: #ffd700;
        }

        input[type="text"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 1.5rem;
            border: 2px solid #0a192f;
            border-radius: 8px;
            background: #0a192f;
            color: white;
            font-size: 1rem;
        }

        input[type="text"]:focus {
            outline: none;
            border-color: #ffd700;
        }

        button {
            background: linear-gradient(45deg, #ffd700, #ffed4e);
            color: #0a192f;
            border: none;
            padding: 1rem 2rem;
            font-size: 1.2rem;
            font-weight: bold;
            border-radius: 50px;
            cursor: pointer;
            width: 100%;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(255, 215, 0, 0.3);
        }

        button:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(255, 215, 0, 0.5);
        }

        .success-message {
            background: #1e3a5f;
            color: #4CAF50;
            padding: 1rem;
            border-radius: 8px;
            margin-bottom: 1.5rem;
            text-align: center;
            border: 2px solid #4CAF50;
        }

        .back-link {
            display: block;
            text-align: center;
            margin-top: 1.5rem;
            color: #ffd700;
            text-decoration: none;
            font-weight: bold;
        }

        .back-link:hover {
            color: #ffed4e;
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="admin-form">
        <h1>🛠️ Panel de Administración</h1>
        
        <?php
        // Cargar videos actuales
        $videos_file = 'videos.json';
        $videos = json_decode(file_get_contents($videos_file), true);
        
        // Procesar formulario
        if ($_POST) {
            $videos['video1'] = $_POST['video1'] ?? '';
            $videos['video2'] = $_POST['video2'] ?? '';
            
            // Guardar en JSON
            file_put_contents($videos_file, json_encode($videos, JSON_PRETTY_PRINT));
            echo '<div class="success-message">✅ ¡Videos actualizados correctamente!</div>';
        }
        ?>
        
        <form method="POST">
            <h3>🎥 Actualizar Links de Videos</h3>
            
            <label for="video1">Video 1 URL (Embed):</label>
            <input type="text" id="video1" name="video1" 
                   value="<?php echo htmlspecialchars($videos['video1'] ?? ''); ?>" 
                   placeholder="https://www.youtube.com/embed/...">
            
            <label for="video2">Video 2 URL (Embed):</label>
            <input type="text" id="video2" name="video2" 
                   value="<?php echo htmlspecialchars($videos['video2'] ?? ''); ?>" 
                   placeholder="https://www.youtube.com/embed/...">
            
            <button type="submit">💾 Guardar Cambios</button>
        </form>
        
        <a href="index.php" class="back-link">← Volver al sitio principal</a>
    </div>
    
    
</body>
</html>
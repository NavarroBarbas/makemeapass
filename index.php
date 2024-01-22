<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- SEO = Básico -->
    <!-- Cada página del sitio tiene que ser diferente el título y la descripción -->
    <title>Make Me A Pass - Index</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />

    <!-- Etiquetas Open Graph y Twitter Card, para crear el SEO de Redes Sociales -->
    <meta property="og:title" content="Título de tu página" />
    <meta property="og:description" content="Descripción de tu página" />
    <meta
      property="og:image"
      content="URL de la imagen que quieres mostrar en las redes sociales"
    />
    <meta property="og:url" content="URL de tu página" />
    <meta property="og:type" content="website" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Título de tu página" />
    <meta name="twitter:description" content="Descripción de tu página" />
    <meta
      name="twitter:image"
      content="URL de la imagen que quieres mostrar en Twitter"
    />

    <!-- App Web, inidicar al navegador que elementos mostrar en un JSON -->
    <link rel="manifest" href="site.webmanifest" />
    <!-- icono de acceso para IOS -->
    <link rel="apple-touch-icon" href="icon.png" />
    <!-- Recordar que favicon.ico tiene que estar en el directorio inicial -->

    <!-- links de estilos -->
    <link rel="stylesheet" href="css/style.css" />
    
    <!-- Se cambia el tema de algunos navegadores -->
    <meta name="theme-color" content="#fafafa" />
    <!-- Código de las plataformas de Análisis -->
    <script></script>
    <!-- Scripts a cargar antes de la renderización -->
    <script src="preloader.js"></script>
    <script src="js/scroll.js"></script>
    <script src="js/script.js"></script>
  </head>
  <body>
    <div class="container">
      <?php include 'assets/header.php'; ?>
      
      <main class="main">
        <section class="main__generador">
          <h1 class="generador__titulo">Generador de Contraseñas Aleatorias</h1>
          <h3 class="generador__frase">Contraseñas seguras en segundos</h3>

          <section class="generador__result">
            <div class="result__box" id="randompass">Click Generar</div>
            <a class="result__copy" id="btncopy">Copiar</a>
          </section>

          <a class="generador__generar" id="generar">Generar</a>
        </section>

        <section class="main__info">
          <section class="info__explicacion">
            <div class="explicacion__cajafuerte"></div>
            <h1>¿Qué es un generador de contraseñas?</h1>
            <p>Un generador de contraseñas es una herramienta que crea automáticamente contraseñas seguras y aleatorias.</p>
            <p>Estas contraseñas suelen cumplir con ciertos criterios de seguridad, como la inclusión de letras mayúsculas y minúsculas, números y caracteres especiales. </p>
            <p>La función principal de un generador de contraseñas es mejorar la seguridad al crear contraseñas robustas que sean difíciles de adivinar o descifrar mediante métodos de fuerza bruta o ataques de diccionario.</p>
          </section>

          <section class="info__buenaspracticas">
            <section class="buenaspracticas__izq">
              <h1>¿Qué es un generador de contraseñas?</h1>
              <p><b>Gestor de Contraseñas:</b> Considera el uso de un gestor de contraseñas para generar, almacenar y gestionar contraseñas de forma segura.</p>
              <p><b>Conciencia de Phishing:</b> en cuidado con los intentos de phishing, donde los atacantes intentan engañarte para revelar tus credenciales. Verifica siempre la autenticidad de los correos electrónicos y enlaces antes de proporcionar información confidencial.</p>
              <div class="izq__padlock"></div>
            </section>
            
            <section class="buenaspracticas__der">
              <div class="der__padlock"></div>
              <p><b>Autenticación de dos factores (2FA):</b> Habilita la autenticación de dos factores siempre que sea posible. Esto proporciona una capa adicional de seguridad al requerir un segundo método de verificación, como un código enviado a tu teléfono.</p>
              <p><b>Una contraseña para cada sitio:</b> Reutilizar la misma contraseña es muy arriesgado. Si un pirata informático puede averiguar su contraseña para una cuenta, muy bien podría acceder a todas sus cuentas que comparten esa contraseña</p>
            </section>
          </section>
        </section>
      </main>
      
      <?php include 'assets/footer.php' ?>
    </div>
  </body>
</html>
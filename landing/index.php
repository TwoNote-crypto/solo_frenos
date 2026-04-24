<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Solo Frenos</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="../assets/css/landing.css">
</head>

<body>

<!-- NAVBAR -->
<header class="nav">
    <div class="logo">🔴 SOLO FRENOS</div>

    <nav>
        <a href="#">Inicio</a>
        <a href="#servicios">Servicios</a>
    </nav>

    <a href="/solo_frenos/auth/login.php" class="btn-login">
        Ingresar
    </a>
</header>

<!-- HERO -->
<section class="hero">
    <div class="overlay"></div>

    <div class="content">
        <h1>Tu seguridad comienza<br>con buenos frenos</h1>
        <p>Especialistas en sistemas de frenado</p>

        <a href="#" class="btn-main">Agendar cita</a>
    </div>
</section>

<!-- SERVICIOS -->
<section id="servicios" class="servicios">
    <div class="container">

        <h2>Nuestros Servicios</h2>
        <p class="sub">Soluciones profesionales para tu sistema de frenado</p>

        <div class="cards">

            <div class="card">
                <img src="../assets/img/freno1.png">
                <h3>Revisión</h3>
            </div>

            <div class="card">
                <img src="../assets/img/freno2.png">
                <h3>Pastillas</h3>
            </div>

            <div class="card">
                <img src="../assets/img/freno3.png">
                <h3>Discos</h3>
            </div>

            <div class="card">
                <img src="../assets/img/freno4.png">
                <h3>Diagnóstico</h3>
            </div>

        </div>

    </div>
</section>

<!-- MARCAS -->
<section class="marcas">
    <h2>Trabajamos con todas las marcas</h2>

    <div class="carousel">
        <div class="track">

            <img src="../assets/img/m1.png">
            <img src="../assets/img/m2.png">
            <img src="../assets/img/m3.png">
            <img src="../assets/img/m4.png">
            <img src="../assets/img/m5.png">

            <!-- duplicado para efecto infinito -->
            <img src="../assets/img/m1.png">
            <img src="../assets/img/m2.png">
            <img src="../assets/img/m3.png">

        </div>
    </div>
</section>

<section class="nosotros">
    <div class="container nosotros-grid">

        <!-- TEXTO -->
        <div class="nosotros-texto">

            <h2>Sobre Nosotros</h2>

            <p>
                <span class="marca">SOLO FRENOS EL MECHUDO</span> es un taller mecánico especializado
                exclusivamente en sistemas de frenado. Con más de 40 años en el mercado,
                nos hemos consolidado como la referencia en mantenimiento y reparación de frenos.
            </p>

            <p>
                Nuestra misión es garantizar tu seguridad mediante un servicio profesional,
                confiable y de alta calidad, utilizando repuestos certificados y tecnología avanzada.
            </p>

            <!-- BENEFICIOS -->
            <div class="beneficios">

                <div class="item">
                    <div class="icono">⭐</div>
                    <div>
                        <strong>40+ Años de Experiencia</strong>
                        <p>Expertos en sistemas de frenado</p>
                    </div>
                </div>

                <div class="item">
                    <div class="icono">👨‍🔧</div>
                    <div>
                        <strong>Equipo Certificado</strong>
                        <p>Técnicos profesionales</p>
                    </div>
                </div>

                <div class="item">
                    <div class="icono">⚡</div>
                    <div>
                        <strong>Servicio Rápido</strong>
                        <p>Atención ágil</p>
                    </div>
                </div>

                <div class="item">
                    <div class="icono">🛡️</div>
                    <div>
                        <strong>Garantía Total</strong>
                        <p>Respaldamos nuestro trabajo</p>
                    </div>
                </div>

            </div>
        </div>

        <!-- IMAGEN -->
        <div class="nosotros-img">
            <div class="fondo"></div>
            <img src="../assets/img/freno1.png">
        </div>

    </div>
</section>

<section class="contacto">
    <div class="container">

        <h2 class="titulo">Contáctanos</h2>
        <p class="sub">Estamos listos para atenderte</p>

        <div class="contacto-grid">

            <!-- IZQUIERDA -->
            <div class="info">

                <h3>Información de Contacto</h3>

                <div class="item">
                    <div class="icon">📞</div>
                    <div>
                        <strong>Teléfono</strong>
                        <p>+57 300 123 4567</p>
                        <p>+57 310 987 6543</p>
                    </div>
                </div>

                <div class="item">
                    <div class="icon">📍</div>
                    <div>
                        <strong>Dirección</strong>
                        <p>Villavicencio, Meta</p>
                    </div>
                </div>

                <div class="item">
                    <div class="icon">✉️</div>
                    <div>
                        <strong>Email</strong>
                        <p>contacto@solofrenos.com</p>
                    </div>
                </div>

                <!-- HORARIO -->
                <div class="horario">
                    <h4>Horario de Atención</h4>
                    <p>Lunes a Viernes: 8:00 AM - 7:00 PM</p>
                    <p>Sábados: 9:00 AM - 5:00 PM</p>
                    <p>Domingos: Cerrado</p>
                </div>

            </div>

            <!-- DERECHA (FORMULARIO) -->
            <div class="formulario">

                <h3>Envíanos un Mensaje</h3>

                <form>

                    <input type="text" placeholder="Tu nombre">
                    <input type="email" placeholder="Correo">
                    <input type="text" placeholder="Teléfono">

                    <textarea placeholder="Cuéntanos qué necesitas..."></textarea>

                    <button>Enviar Mensaje</button>

                </form>

            </div>

        </div>

    </div>
</section>

</body>
</html>
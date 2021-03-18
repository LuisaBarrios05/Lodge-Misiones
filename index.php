<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Lodge Misiones</title>
    <!-- CSS Bootstrap -->
    <link rel="stylesheet" href="./css/bootstrap.min.css" />
    <!--font awesome-->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
    />
    <!-- CSS Main -->
    <link rel="stylesheet" href="./css/main.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Raleway:wght@700&display=swap" rel="stylesheet">
  </head>
  <body>
    <!--Header-->
    <header class="header">
      <div class="container vh-50">
        <!--navbar-->
        <nav
          class="row text-white justify-content-between align-items-center text-white text-uppercase pt-4 class-nav m-2"
        >
          <!--logo-->
          <a href="#" class="col-auto text-reset">
            <img
              src="img/logo.png"
              alt="Logo Weston"
              class="img-logo d-flex justify-content-center"
            />
          </a>
          <!--anclas-->
          <div class="col-auto">
            <a href="#" class="text-reset pr-3">Inicio</a>
            <a href="#galeria1" class="text-reset pr-3">Galería</a>
            <a href="form.php" class="text-reset pr-3">Reserva</a>
            <a href="#footer-contacto" class="text-reset pr-3">Contacto</a>
            <a href="#" class="text-reset">Pagos</a>
          </div>
        </nav>
        <!--desccription-->
        <div class="row h-100 align-items-center m-2">
          <div class="col-6 text-white">
            <!--title-->
            <h1>Misiones Lodge</h1>
            <!--description-->
            <p>
              Aquí podrá realizar su reserva de alojamiento, para sus vacaciones
              soñadas en Misiones. Conexión con la naturaleza, diversión para
              los más pequeños, relax en sofisticadas habitaciones rodeadas de
              jardines naturales con piscinas y satisfacción con alta
              gastronomía sustentable son algunas de las experiencias que
              queremos que viva en Misiones Lodge.
            </p>
            <!--boton-->
            <a href="form.php" class="text-reset btn btn-success">Hacer reserva</a>
          </div>
        </div>
      </div>
      <img src="./img/header.svg" alt="" class="ola-blanca"/>
    </header>
    <!--carousel-->
    <section class="cabaña" id="galeria1">
      <div class="container-fluid">
        <div class="row row-1">
          <div class="col-5">
            <div
              class="carousel slide img-thumbnail section-carousel"
              id="carousel-1"
            >
              <div class="carousel-inner contenedor-carousel">
                <div class="carousel-item active">
                  <img
                    src="img/img.galeria/galeria1.jpg"
                    alt="cabaña"
                    class="d-block w-100 img-fluid"
                  />
                </div>
                <div class="carousel-item">
                  <img
                    src="img/img.galeria/galeria2.jpg"
                    alt="cabaña"
                    class="d-block w-100 img-fluid"
                  />
                </div>
                <div class="carousel-item">
                  <img
                    src="img/img.galeria/galeria3.2.jpg"
                    alt="cabaña"
                    class="d-block w-100 img-fluid"
                  />
                </div>
                <div class="carousel-item">
                  <img
                    src="img/img.galeria/galeria4.jpg"
                    alt="cabaña"
                    class="d-block w-100 img-fluid"
                  />
                </div>
              </div>
              <a
                href="#carousel-1"
                class="carousel-control-prev"
                data-slide="prev"
              >
                <span class="carousel-control-prev-icon"></span>
              </a>
              <a
                href="#carousel-1"
                class="carousel-control-next"
                data-slide="next"
              >
                <span class="carousel-control-next-icon"></span>
              </a>
              <a
                href="#carousel-1"
                class="carousel-control-next"
                data-slide="next"
              >
                <span class="carousel-control-next-icon"></span>
              </a>
              <a
                href="#carousel-1"
                class="carousel-control-next"
                data-slide="next"
              >
                <span class="carousel-control-next-icon"></span>
              </a>
            </div>
          </div>
          <div class="col-1"></div>
          <div
            class="col-5 d-flex flex-column text-center justify-content-center"
          >
            <h1>Cabañas</h1>
            <hr />
            <p class="text-carousel">
              Las cabañas de nuestro lodge de selva estan pensadas para el
              descanso y placer. Encontrarás habitaciones acogedoras, living con
              sillones, baño con ventanales al monte, cocina equipada con
              frigobar para que pueda disfrutar un almuerzo o cena en el deck
              con vista a la selva (Servicio de room service con costo
              adicional. No es posible cocinar en el Lodge).
            </p>
          </div>
          <div class="col-1"></div>
        </div>
      </div>
    </section>

    <section class="habitaciones">
      <div class="container-fluid">
        <div class="row row-1">
          <div class="col-1"></div>
      <div class="col-5 texto d-flex flex-column text-center">
        <h1>Habitaciones</h1><hr />
        <p class="text-carousel">
          Las habitaciones están decoradas con productos artesanales de la zona,
          son amplias, frescas,también poseen baño privado y muchos detalles
          para disfrutar.
        </p>
      </div>
      <div class="col-1"></div>
      <div class="col-5">
        <div
          class="carousel slide rounded section-carousel row justify-content-end"
          id="carousel-2"
        >
          <!--slides-->
          <div class="carousel-inner contenedor-carousel">
            <div class="carousel-item active">
              <img
                src="img/img.galeria/habitacion.jpg"
                alt="habitacion"
                class="d-block w-100 img-fluid"
              />
            </div>
            <div class="carousel-item">
              <img
                src="img/img.galeria/habitacion2.jpg"
                alt="habitacion"
                class="d-block w-100 img-fluid"
              />
            </div>
            <div class="carousel-item">
              <img
                src="img/img.galeria/habitacion3.jpg"
                alt="habitacion"
                class="d-block w-100 img-fluid"
              />
            </div>
          </div>
          <a
            href="#carousel-2"
            class="carousel-control-prev"
            data-slide="prev"
          >
            <span class="carousel-control-prev-icon"></span>
          </a>
          <a
            href="#carousel-2"
            class="carousel-control-next"
            data-slide="next"
          >
            <span class="carousel-control-next-icon"></span>
          </a>
          <a
            href="#carousel-2"
            class="carousel-control-next"
            data-slide="next"
          >
            <span class="carousel-control-next-icon"></span>
          </a>
        </div>
      </div>
    </div>
    </div>
    </section>

    <!--ubicación-->
    <div class="d-flex justify-content-center">
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3548.7254018372123!2d-54.020244484936015!3d-27.196366083006268!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94fbd46e98bfb8e5%3A0x8a674d3acb2a670b!2sKurupi%20Lodge!5e0!3m2!1ses-419!2sar!4v1614632037539!5m2!1ses-419!2sar"
      width="80%"
      height="300"
      style="border: 0"
      allowfullscreen=""
      loading="lazy"
    >
  </iframe>
    </div>
           
    <!--footer-->
    <footer class="footer text-white" id="footer-contacto">
      <div class="container">
        <nav class="row">
          <!--logo-->
          <a
            href="#"
            class="col-3 text-reset text-uppercase d-flex align-items-center"
          >
            <img src="./img/logo.png" alt="" class="img-logo m-3" />
          </a>
          <!--menu-->
          <ul class="col-3 list-unstyled">
            <li class="font-weight-bold text-uppercase">Contacto</li>
            <p>Correo: contacto@gmail.com</p>
            <p>Celular: 3764-402380</p>
          </ul>
          <ul class="col-3 list-unstyled">
            <li class="font-weight-bold text-uppercase">Redes sociales</li>
            <li class="d-flex justify-content-between">
            <a href="https://www.instagram.com/luisabarrios01/" class="text-reset">
            <i class="fab fa-instagram fa-2x"></i>
          </a>
            <a href="https://www.facebook.com/luisa.barrios.3139/" class="text-reset">
            <i class="fab fa-facebook-square fa-2x"></i>
          </a>
            <a href="#" class="text-reset">
              <i class="fab fa-twitter-square fa-2x"></i>
            </a>
            </li>
           
          </ul>
        </nav>
      </div>
    </footer>
    <!-- Jquery -->
    <script src="./js/jquery-3.5.0.min.js"></script>
    <!-- Popper -->
    <script src="./js/popper.min.js"></script>
    <!-- JS Bootstrap -->
    <script src="./js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  </body>
</html>

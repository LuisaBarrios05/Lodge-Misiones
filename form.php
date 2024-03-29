<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Reservar</title>
    <!-- CSS Bootstrap -->
    <link rel="stylesheet" href="./css/bootstrap.min.css" />
    
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
    />
    <!-- CSS Main -->
    <link rel="stylesheet" href="./css/main.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Raleway:wght@700&display=swap" rel="stylesheet">

<!--Formulario reserva-->

 <div class="container reserva-countainer" id="f-reserva">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <div class="card" style="margin:50px 0">
            <div class="card-header"><h1>Hacer reserva</h1></div>
             
           <ul class="list-group list-group-flush">
                
                  <li class="list-group-item">
                  <label for="">Fecha de llegada</label>
                  <input type="date" class="form-control" id="validationServer03" placeholder="Fecha desde" value="" required> 
                </li>
               
                  <li class="list-group-item">
                  <label for="validationServer04">Fecha de salida</label>
                  <input type="date" class="form-control" id="validationServer04" placeholder="Fecha hasta" value="" required>            
                </li>
               
                  <li class="list-group-item">
          <label for="">Habitaciones</label>
          <select name="" class="" id="">
            <option value="1" selected="selected">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
          </select>
        </li>
            
           <li class="list-group-item">
            <label for="">Adultos</label>
            <select name="" id="">
              <option value="1" selected="selected">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
            </select>
            <span>+18 años</span>
        </li>
        
            <li class="list-group-item">
            <label for="">Niños</label>
            <select name="" id="" data-os-children>
              <option value="0" selected="selected">0</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
            </select>
            <span>0-17 años</span>
            </li>

            <li class="list-group-item">
                    <label for="validationServer02">Nombre commpleto y Apellido</label> 
                     <input type="text" name="nombreyap" class="form-control" id="nombreyap" placeholder="Ej. Maria Lorena Valdez" required pattern="^[A-Za-z ]*$" title="No permite números ni caracteres especiales.">
            </li>

            <li class="list-group-item">
                    <label for="validationServer03">DNI</label>
                    <input type="text" name="dni" class="form-control" id="dni" placeholder="DNI" required pattern="^[0-9]+" title="No se permiten letras ni caracteres especiales.">
            </li>
            <li class="list-group-item">
                    <label for="validationServer05">Teléfono</label>
                    <input type="text" name="telefono" class="form-control" id="telefono" placeholder="Ej. 3764204380" required pattern="^[0-9]+" title="No se permiten letras ni caracteres especiales.">
            </li>
    
    </ul>
    <li class="list-group-item d-flex justify-content-end">
    <button type="button" id="" class="btn btn-secondary mr-3">Cancelar</button>
    <button type="button" id="" class="btn btn-success">Terminar Reserva</button>
    </li>

        </div>
      </div>
    </div>
  </div>

   <!--formulario servicios-->
   <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
   <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
   <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   
   
   <div class="container container-servicios" id="servicios-op">
       <div class="row">
           <div class="col-md-6 offset-md-3">
           <div class="card" style="margin:50px 0">
                   <div class="card-header"><h1>Servicios opcionales</h1><br>
                    <h4>Seleccione los servicios que desea en su estadía.</h4></div>
               
                   <ul class="list-group list-group-flush">
                       <li class="list-group-item">
                           Aire acondicionado
                                   <label class="checkbox">
                                           <input type="checkbox" />
                                           <span class="default"></span>
                                       </label>
                       </li>
                       <li class="list-group-item">
                           Estufa
                                                                   <label class="checkbox">
                                           <input type="checkbox" />
                                           <span class="default"></span>
                                       </label>
                       </li>
                       <li class="list-group-item">
                         Chromecast
                                                                   <label class="checkbox">
                                           <input type="checkbox" />
                                           <span class="default"></span>
                                       </label>
                       </li>
                       <li class="list-group-item">
                           Pava eléctrica
                                                                  <label class="checkbox">
                                           <input type="checkbox" />
                                           <span class="default"></span>
                                       </label>
                       </li>
                       <li class="list-group-item">
                           Cafetera
                                                                  <label class="checkbox">
                                           <input type="checkbox" />
                                           <span class="default"></span>
                                       </label>
                       </li>
                       <li class="list-group-item">
                          Parrilla 
                                                                 <label class="checkbox">
                                           <input type="checkbox" />
                                           <span class="default"></span>
                                       </label>
                       </li>
                   </ul>
                   <li class="list-group-item d-flex justify-content-end">
                    <button type="button" id="" class="btn btn-secondary mr-3">Cancelar</button>
                    <button type="button" id="" class="btn btn-success">Guardar</button>
                   </li>
               </div> 
               </div>
               </div>
   </div>

   <!--footer-->
   <footer class="footer text-white">
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
            <a href="https://www.instagram.com/luisabarrios01/" class="text-reset"><i class="fab fa-instagram fa-2x"></i></a>
            <a href="https://www.facebook.com/luisa.barrios.3139/" class="text-reset"><i class="fab fa-facebook-square fa-2x"></i></a>
            <a href="#" class="text-reset"><i class="fab fa-twitter-square fa-2x"></i></a>
            </li>
           
          </ul>
      </nav>
    </div>
  </footer>
</html>
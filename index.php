<?php
      session_start();
      ?>
<html>

<head>
    <title>Sistema de monitoreo</title>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <link rel="shortcut icon" href="./img/LOGO-SAPA-01.jpeg">

    <link rel="stylesheet" type="text/css" href="./style.css" />
    
    <script type="module" src="./index.js"></script>
    <script type="module" src="./tandeo.js"></script>
    <link rel="stylesheet" href="GRAFICA/views/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
        integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/css/select2.min.css" rel="stylesheet" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/js/select2.min.js"></script>

</head>

<body>
    <script>
    //antes de cargar la página verifíca si ya existe una sesión iniciada, de no ser el caso lo regresa al login
    document.addEventListener("DOMContentLoaded", function(event) {
        <?php
          if(empty($_SESSION["usuario"]))
          {
              header("Location:../login/formulario.html");
          }
      ?>
    });
    </script>
    <script>
    function myFunction(x) {
        x.classList.toggle("change");
    }
    </script>

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <span style="color: aliceblue;">Bienvenido <?php echo "$_SESSION[token]";?></span>


            <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>-->
            <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                <ul class="navbar-nav">
                    <div class="caja_opciones">

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Pozos
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <li><a class="dropdown-item" href="login/registro_pozo.html" id="c1">Capturar datos</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                               Reportes
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark">
                               
                                <li><a class="dropdown-item"
                                        href="https://monitoreo.sapalapaz.gob.mx/GRAFICA/pozos/">Reportes y graficas</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Tandeo
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <li><a class="dropdown-item" href="tandeo/index.php" id="c2">Captura</a></li>

                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button"  data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Infraestructura
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <li><a class="dropdown-item" href="infraestructura/infra.php" id="c4">Mapa</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button"  data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Bacheo
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <li><a class="dropdown-item" href="bacheo/index.html" id="c4">Mapa</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Cajas
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <li><a class="dropdown-item" href="login/registro_presion.html" id="c3">Capturar datos</a></li>
                                <li><a class="dropdown-item"
                                        href="https://monitoreo.sapalapaz.gob.mx/GRAFICA/presion/">Reportes</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Reportes de fallas
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <li><a class="dropdown-item"
                                        href="reporte_fallas/index.html">Reportes</a></li>
                            </ul>
                        </li>
                        
                    </div>

                    <li id="puntoi" style="right: 0%;" class="nav-item dropdown">
                        <span style="color: aliceblue;">Acotaciones:   </span>
                        <abbr title="  Medidor con presion superior a 0.5 kg/cm2"> <img src="./img/press_green.png"
                                alt=""> </abbr>
                        <abbr title="  Medidor con presion menor a 0.5 kg/cm2 y mayor o igual a 0.3 kg/cm2"> <img
                                src="./img/press_yellow.png" alt=""> </abbr>
                        <abbr title="  Medidor con presion menor a 0.3 kg/cm2 y mayor 0 kg/cm2"> <img
                                src="./img/press_orange.png" alt=""> </abbr>
                        <abbr title="  Medidor con presion igual a 0 kg/cm2"> <img src="./img/press_red.png" alt="">
                        </abbr>
                        <abbr title="  Error de datos/falla conexión."> <img src="./img/press_purple.png" alt="">
                        </abbr>
                        <abbr title="  Medidor vandalizado/fuera de servicio."> <img src="./img/press_black.png" alt="">
                        </abbr>
                        <abbr title="  Pozo Automatico con Lectura."> <img src="./img/pozo_aut_inline2.png" alt="">
                        </abbr>
                        <abbr title="  Pozo Automatico sin Lectura."> <img src="./img/pozo_aut_offline2.png" alt="">
                        </abbr>
                        <abbr title="  Pozo Manual con Lectura"> <img src="./img/pozo_man_inline2.png" alt=""> </abbr>
                        <abbr style="margin-right: 10px;" title="  Pozo Manual sin Lectura"> <img
                                src="./img/pozo_man_offline2.png" alt=""> </abbr>
                        <span style="color: aliceblue;">Tandeo: </span>

                        <abbr title="  Tandeo en horario de 0 a 12 hrs"> <img src="./img/Proyecto.png" alt=""> </abbr>
                        <abbr title="  Tandeo en horario de 12 a 24 hrs"> <img src="./img/Proyecto2.png" alt=""> </abbr>
                        <abbr title="  Tandeo las 24 hrs"> <img src="./img/Proyecto3.png" alt=""> </abbr>

            </div>
            </li>
            <div>
                <a class="navbar-brand btn_mostrar " href="/login/logout.php"><i class="fas fa-power-off nav-icon"></i>
                    Cerrar sesión.</a>


            </div>
            </ul>
        </div>
        </div>
    </nav>
    <!-- navbar fin -->

    <div class="contenedor_selectores">

        <div id="floating-panel">

            <div id="hamburger-btn" class="container hamburger-btn" onclick="myFunction(this)">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </div>

            <div>
                <label id="lbl-pozos" for="pozo">Pozos</label>
                <input style="margin-left: 10px;" type="checkbox" class="seleccionado" name="pozo" id="pozo" checked>
            </div>

            <div>
                <label id="lbl-acueducto1" for="acueducto1">Acueducto 1</label>
                <input style="margin-left: 10px;" type="checkbox" class="" name="acueducto1" id="acueducto1">
                <p style="display: inline-block; margin-left: 5px ; color: white" class="mas_acueducto" id="mas_acueducto1">(Ver mas...)</p>
            </div>

            <div>
                <label id="lbl-acueducto2" for="acueducto2">Acueducto 2</label>
                <input style="margin-left: 10px;" type="checkbox" class="" name="acueducto2" id="acueducto2">
                <p style="display: inline-block; margin-left: 5px ; color: white" class="mas_acueducto" id="mas_acueducto2">(Ver mas...)</p>
            </div>

            <div>
                <label id="lbl-acueducto3" for="acueducto3">Acueducto 3</label>
                <input style="margin-left: 10px;" type="checkbox" class="" name="acueducto3" id="acueducto3">
                <p style="display: inline-block; margin-left: 5px ; color: white" class="mas_acueducto" id="mas_acueducto3">(Ver mas...)</p>
            </div>

            <div>
                <label id="lbl-acueducto4" for="acueducto4">Acueducto 4</label>
                <input style="margin-left: 10px;" type="checkbox" class="" name="acueducto4" id="acueducto4">
                <p style="display: inline-block; margin-left: 5px ; color: white" class="mas_acueducto" id="mas_acueducto4">(Ver mas...)</p>

            </div>

            <div>
                <label id="lbl-pozoCiudad" for="pozoCiudad">Pozos de la ciudad</label>
                <input style="margin-left: 10px;" type="checkbox" class="" name="pozoCiudad" id="pozoCiudad">
                <p style="display: inline-block; margin-left: 5px ; color: white" class="mas_acueducto" id="mas_acueducto5">(Ver mas...)</p>

            </div>

            <div>
                <label id="lbl-rentados" for="rentados">Otros</label>
                <input style="margin-left: 10px;" type="checkbox" class="" name="rentados" id="rentados">
                <p style="display: inline-block; margin-left: 5px ; color: white" class="mas_acueducto" id="mas_acueducto6">(Ver mas...)</p>
            </div>

            <div>
                <label id="lbl-carrizal" for="carrizal">Carrizal</label>
                <input style="margin-left: 10px;" type="checkbox" class="" name="carrizal" id="carrizal">
            </div>

        </div>

        <div id="floating-panel2">

            <div id="hamburger-btn2" class="container" onclick="myFunction(this)">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </div>

            <div>
                <label id="lbl-presion" for="presion">Medidores de Presión.</label>
                <input style="margin-left: 10px;" type="checkbox" class="" name="presion" id="presion"
                    >
            </div>
            <div>
                <label id="lbl-gasto" for="gasto">Macromedidores.</label>
                <input style="margin-left: 10px;" type="checkbox" class="seleccionado" name="gasto" id="gasto" checked>
            </div>
        </div>

          <!-- <div id="floating-panel3">

         <div id="hamburger-btn3" class="container" onclick="myFunction(this)">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </div>

            <div>
                <label id="lbl-caja15"  for="caja15">Caja 15</label>
                <input style="margin-left: 10px;" type="checkbox" class="" name="caja15" id="caja15"  >
            </div>

            <div>
                <label id="lbl-caja20"  for="caja20">Caja 20</label>
                <input style="margin-left: 10px;" type="checkbox" class="" name="caja20" id="caja20"  >
            </div>

    </div>-->

        <div id="floating-panel4">

            <div>
                <label id="lbl-tandeo" for="tandeo">Tandeo</label>
                <input style="margin-left: 10px;" type="checkbox" class="" name="tandeo" id="tandeo">
            </div>

            <div>
                <label id="lbl-todo" for="todo">Zonas de tandeo</label>
                <input style="margin-left: 10px;" type="checkbox" class="" name="todo" id="todo">
            </div>

        </div>

    </div>

     <div class="contenedor_tandeo mover" id="contenedor_tandeo" >

        <div class="info-box" id="info-box" style="margin-bottom: 10px;"></div>
<!--
       <div class="container_buscador">
            <div class="row">
                <select class="js-select2" multiple="multiple">
                    <option class="seleccionado" id="rinconada" selected value="1">Rinconada</option>
                    <option value="2">Ladrillera - Col MIlitar BAJA</option>
                    <option value="3">Pedregal Del Cortes - Baja y Media</option>
                    <option value="4">Zona Hotelera</option>
                    <option value="5">Colina de la Cruz</option>
                    <option value="6">Esterito - Alta y Baja</option>
                    <option value="7">Agustin Olachea</option>
                    <option value="8">ALTTUS (colina del sol)</option>
                    <option value="9">Colina del sol</option>
                    <option value="10">AMP. Antonio Navarro Rubio</option>
                    <option value="11">Lomas de Palmira</option>
                    <option value="12">El Choyal - Zona Norte</option>
                    <option value="13">Ciudad del Cielo - Alta</option>
                    <option value="14">Monte Sinahí</option>
                    <option value="15">CC-Salvatierra</option>
                    <option value="16">3 de Mayo</option>
                    <option value="17">8 de Octubre 1era Sección</option>
                    <option value="18">Molino Harinero 1</option>
                    <option value="19">Molino Harinero 2</option>
                    <option value="20">Revolución</option>
                    <option value="21">Revolución</option>
                    <option value="22">8 de Octubre 2da Sección</option>
                    <option value="23">Guaycura</option>
                    <option value="24">Marina Sur</option>
                    <option value="25">Puesta del Sol</option>
                    <option value="26">CC-Zona Melquiades</option>
                    <option value="27">FOVISSSTE</option>
                    <option value="28">Solidaridad INFONAVIT</option>
                    <option value="29">Agustin Arreola</option>
                    <option value="30">EL Choyal - Centro</option>
                    <option value="31">17 de Octubre</option>
                    <option value="32">Fraccionamiento Balandra</option>
                    <option value="33">Cerralvo</option>
                    <option value="34">Domingo Carballo Felix</option>
                    <option value="35">Emiliano Zapata</option>
                    <option value="36">INDECO</option>
                    <option value="37">CC-Zona Genovevo</option>
                    <option value="38">Las Garzas</option>
                    <option value="39">Las Grullas</option>
                    <option value="40">Oro Blanco</option>
                    <option value="41">Fraccionamiento privada Las garzas</option>
                    <option value="42">Zona Centro - Alta</option>
                    <option value="43">Zona Centro - Baja</option>
                    <option value="44">El Manglito</option>
                    <option value="45">Antonio Navarro Rubio</option>
                    <option value="46">Ciudad del cielo BAJA</option>
                    <option value="47">Ladrillera -Col. Militar</option>
                    <option value="48">Pedregal Del Cortes ALTA</option>
                </select>

            </div>
        </div>-->

    </div>

    <div class="cont_principal">



<div class="ver_mas" id="ver_mas" >

    <h3 id='titulo_grafica' style="color:white">Acueductos</h3>

<div id="tablaContainer" class="container mt-4">
    
<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th>Nombre</th>
      <th>Flujo</th>
    </tr>
  </thead>
  <tbody id="tablaBody">



</tbody>
</table>
</div>



</div>


<div id="map">
</div>
</div>
    <!-- 
      The `defer` attribute causes the callback to execute after the full HTML
      document has been parsed. For non-blocking uses, avoiding race conditions,
      and consistent behavior across browsers, consider loading using Promises
      with https://www.npmjs.com/package/@googlemaps/js-api-loader.
      -->
    <script src="select2.js"></script>


    <script
        src="https://maps.googleapis.com/maps/api/js?key=&callback=initMap&v=weekly"
        defer></script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script>
      //si el token del usuario es de invitado entonces bloquea los elementos de la lista (solo como demostración de que hace algo si no es admin)
        window.onload = function() {
            <?php
        if ($_SESSION["permiso"] == "invitado")
        {
    
            echo("var c1 = document.getElementById('c1');
            c1.style.display = 'none';
            var c2 = document.getElementById('c2');
            c2.style.display = 'none';
            var c4 = document.getElementById('c4');
            c4.style.display = 'none';
            var c3 = document.getElementById('c3');
            c3.style.display = 'none';");
        }
        
        ?>
    }
    </script>



        <!-- pop up para reportar deficiencias en el servicio -->

        <div id="popup_reporte">
            <div class="contenido_popup_reporte">

                <div class="cont_titulo_popup_reporte"></div>

                <label for="tipo_de_reporte">Tipo de Reporte:</label>

                <select id="tipo_reporte" class="form-select" aria-label="Default select example">
                    <option selected>Tipo de Reporte</option>
                    <option value="Fallas en el servicio">Fallas en el servicio</option>
                    <option value="No hay servicio">No hay servicio</option>
                    <option value="Toca tandeo y no esta en el mapa">Toca tandeo y no esta en el mapa</option>
                </select>

                <label for="">Fecha:</label>
                <input id="fecha_reporte" type="date">


                <button class="btn_popup_reporte" >Reportar</button>
                <button class="btn_popup_cancelar" >Cancelar</button>
            </div>
        </div>

        <!-- pop up para reportar deficiencias en el servicio fin -->

        <!-- popup datos insertados correctamente  -->

        <div class="popup_datos_insertados">
            <div class="cont_datos_insertados">

                Reporte registrado

                <input class='btn_datos_insertados' type="button" value='Aceptar' >
            </div>

        
        </div>


        <!-- popup datos insertados correctamente fin  -->




        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</body>

</html>

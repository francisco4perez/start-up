<!DOCTYPE html>
<html>
<head>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-125850809-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'UA-125850809-1');
    </script>

    <title>Aqualert!</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/mystyles.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/flexboxgrid.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <script type="text/javascript" src=" {{ asset('js/jquery-3.3.1.js') }} "></script>
    <script type="text/javascript" src=" {{ asset('js/magnific-popup.min.js') }} "></script>
    <script type="text/javascript" src=" {{ asset('js/myscripts.min.js') }} "></script>
</head>
<body>

    @include('header.header')

    <div class="portion" id="portion1">
      <div class="filter">
        <div id="title">
          <h2>Sistema de alertas para tu agua</h2>

          <div id="div-btn">
            <div class="popup-youtube fancy-btn" href="https://www.youtube.com/watch?v=8vUKISjqjtE">
              <a>Ver&nbsp;Video&nbsp;<span class="shift">›</span></a>
              <div class="mask"></div>
            </div>
          </div>

        </div>
      </div>
    </div>


    <div  class="info">
      <h3>Un Sistema para informar la calidad del agua y alertas</h3>
      <p>Aqualert es una aplicación móvil que busca prevenir enfermedades asociadas al material inorgánico en el agua mediante un dispositivo electrónico que busca prevenir riesgos que impliquen consumir o usar agua de alguna fuente, sobre todo en casos de emergencia, cuando ocurre un acontecimiento natural que implique contaminación del líquido.</p>

    </div>

    <div class="button fix-bottom-padding">
      <a href="#portion2">Como Funciona?</a>
    </div>

    
    

    <div class="my-section">
      <h2>Aqualert</h2>
    </div>

    <div id="portion2" class="info wide-info">
      <h3>¿Cómo funciona?</h3>
      <p>Para poder realizar las mediciones se utiliza el dispositivo Aqualert, que consta de cuatro sensores diferentes, que indican el estado del agua en pocos minutos y que en conjunto con la aplicación móvil permiten localizar puntos de alerta.</p>

      <div class="explication-div">
        
        
        <h4>Fácil de usar</h4>

        <div class="my-container">
          <div class="row center">

            <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="box">
                  <div class="explication">
                    <img class="explication-icon" src="{{ asset('image/usb.png ') }}">
                    <h5>1. Conecta el Dispositivo</h5>
                    <p>Sincroniza el dispositivo con tu     celular de manera muy sencilla, solamente usando      Bluetooth®.</p>
                  </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="box">
                  <div class="explication">
                    <img class="explication-icon" src="{{ asset('image/save-water.png ') }}">
                    <h5>2. Realiza una medición</h5>
                    <p>La aplicación te guiará paso a       paso para que puedas tomar una medición sin ningún      problema.</p>
                  </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="box">
                  <div class="explication">
                    <img class="explication-icon" src="{{ asset('image/map.png ') }}">
                    <h5>3. Publica tu medición</h5>
                    <p>En tan solo unos segundos tu medición puede      aparecer en el mapa para informar a la comunidad.</p>
                  </div>
                </div>
            </div>

          </div>
          
        </div>


      </div>

      
      <div class="explication-div">
        
        <h4>Red Social</h4>

        <div class="my-container">
          <div class="row center">

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="box">
                  <div class="explication">
                    <img class="explication-icon" src="{{ asset('image/network.png ') }}">
                    <p>No solo podrás publicar tus mediciones, sino que     ademas podrás revisar y puntuar las de otros usuarios e   interactuar con     ellos a través de la aplicación.</p>
                  </div>
                </div>
            </div>
          </div>
        </div>

      </div>

      
      
      <div class="button">
         <a href="#portion3">Nuestro Equipo</a>
      </div>

    </div>

    <div class="my-section two">
      <h2>Nosotros</h2>
    </div>

    <div id="portion3" class="info wide-info">

      <img class="one-crowd" src="{{ asset('image/onecrowd.svg ') }}">

      <p>OneCrowd es una pre-empresa compuesta por cinco estudiantes de Ingeniería civil en Informática de la Universidad Técnica Federico Santa María.</p>

      <p>Como equipo nos enfocamos en desarrollos basados en sensores, aplicaciones móviles y web, velando por mantener el estándar de calidad que nos caracteriza.</p>

      <p>A través de Aqualert, en OneCrowd nos proponemos a ayudar a prevenir enfermedades de la ingesta de agua en malas condiciones y dar aviso oportuno a la comunidad en caso de alertas que conlleven un riesgo para la salud.</p>

      
      <div class="my-container">
        <div class="row center">

          <div class="col-xs-12 col-sm-4 col-md-4">
              <div class="box">
                <div class="user">
                  <img class="team-icon" src="{{ asset('image/alphy.png ') }}">
                  <h4>Alfredo Silva<br>Celpa</h4>
                  <h6 class="jobs">Android Developer & Arduino QA</h6>
                  
                  <section> <ul id="services">

                  <li>
                    <div class="linkedin">
                      <a href="https://www.linkedin.com/in/alfredo-silva-celpa-558963160/">
                        <i class="fa fa-linkedin" aria-hidden="true"></i>
                      </a>
                    </div>
                  </li>
                  
                  </ul> </section>

                </div>
              </div>
          </div>

          <div class="col-xs-12 col-sm-4 col-md-4">
              <div class="box">
                <div class="user">
                  <img class="team-icon" src="{{ asset('image/goku.png ') }}">
                  <h4>Francisco Pérez<br>Castro</h4>
                  <h6 class="jobs">Web & Front-End Developer </h6>
                  
                  <section> <ul id="services">
                  <li>
                    <div class="linkedin">
                      <a href="https://www.linkedin.com/in/francisco-perez-344841b3/">
                        <i class="fa fa-linkedin" aria-hidden="true"></i>
                      </a>
                    </div>
                  </li>
                  </ul> </section>


                </div>
              </div>
          </div>

          <div class="col-xs-12 col-sm-4 col-md-4">
              <div class="box">
                <div class="user">
                  <img class="team-icon" src="{{ asset('image/oso.png ') }}">
                  <h4>Francisco Alvial<br>Fuentes</h4>
                  <h6 class="jobs">Project & Marketing Manager</h6>
                  
                  <section> <ul id="services">

                  <li>
                    <div class="linkedin">
                      <a href="https://www.linkedin.com/in/francisco-alvial-2194219/">
                        <i class="fa fa-linkedin" aria-hidden="true"></i>
                      </a>
                    </div>
                  </li>

                  </ul> </section>

                </div>
              </div>
          </div>

        </div>

        
      </div>

      <div class="my-container">
        <div class="row">
          
          <div class="col-xs-12 col-sm-6 col-md-6">
              <div class="box">
                <div class="user">
                  <img class="team-icon" src="{{ asset('image/juan.png ') }}">
                  <h4>Juan Escalona<br>Padilla</h4>
                  <h6 class="jobs">Dev. Ops & Android QA</h6>
                  

                  <section> <ul id="services">

                  <li>
                    <div class="linkedin">
                      <a href="https://www.linkedin.com/in/juan-escalona-padilla-124624160/">
                        <i class="fa fa-linkedin" aria-hidden="true"></i>
                      </a>
                    </div>
                  </li>

                  </ul> </section>


                </div>
              </div>
          </div>

          <div class="col-xs-12 col-sm-6 col-md-6">
              <div class="box">
                <div class="user">
                  <img class="team-icon" src="{{ asset('image/seba.png ') }}">
                  <h4>Sebastián Torrico<br>Díaz</h4>
                  <h6 class="jobs">Arduino & Android Developer</h6>
                  
                  <section> <ul id="services">

                  <li>
                    <div class="linkedin">
                      <a href="https://www.linkedin.com/in/sebasti%C3%A1n-torrico-d%C3%ADaz-8571a28b/">
                        <i class="fa fa-linkedin" aria-hidden="true"></i>
                      </a>
                    </div>
                  </li>

                  </ul> </section>


                </div>
              </div>
          </div>


        </div>
      </div>

      <div class="button">
         <a href="#portion4">Visítenos!</a>
      </div>

    </div>

    <div class="my-section three">
      <h2>Visítenos</h2>
    </div>

    <div id="portion4" class="info">
      <h3>Los estamos esperando!</h3>
      <p>Visítanos en la feria del software de la Universidad Técnica Federico Santa María
      En Campus Santiago, San Joaquín, el 30 de Noviembre de 2018.</p>

    </div>

    <div class="button fix-bottom-padding">
      <a href="#portion5">Contáctanos!</a>
    </div>


    @include('google-map')

    <div class="my-section four">
      <h2>Contáctanos</h2>
    </div>

    <div id="portion5" class="info">
      <h3>Queremos saber tu opinión!</h3>
      <p>En OneCrowd siempre estamos atentos a consultas, opiniones y sugerencias, por lo que hemos preparado este apartado para que nos envíes tus comentarios! </p>

      @include('contact-form')

      <p>onecrowd.aqualert@gmail.com</p>
      <p>Síguenos también en nuestras redes sociales!</p>
       
      @include('social-networks-buttons')

    </div>

    <div class="my-container">
        <div class="row center">

          <div class="col-xs-12 col-sm-4 col-md-4">
              <div class="box">
                <div>
                  <img class="sponsor soon-icon" src="{{ asset('image/soon-in-google-play.png ') }}">
                </div>
              </div>
          </div>

        </div>
    </div>

    <div class="button">
      <a href="#portion1">Volver al inicio ⇧</a>
    </div>
    
    @include('footer.footer')

</body>
</html>

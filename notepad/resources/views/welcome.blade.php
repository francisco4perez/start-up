<!DOCTYPE html>
<html>
<head>
    <title>Aqualert!</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/mystyles.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/flexboxgrid.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/magnific-popup.css') }}">
    <link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <script type="text/javascript" src=" {{ asset('js/jquery-3.3.1.js') }} "></script>
    <script type="text/javascript" src=" {{ asset('js/magnific-popup.min.js') }} "></script>
    <script type="text/javascript" src=" {{ asset('js/myscripts.js') }} "></script>
</head>
<body id="top">

    @include('header.header')

    <div class="portion">
      <div class="filter">
        <div id="title">
          <h2>Sistema de alertas para tu agua</h2>

          <div id="div-btn" class="popup-youtube" href="https://www.youtube.com/watch?v=Rzv5a8viDAw">
            <div class="fancy-btn">
              <a>Ver&nbsp;Video&nbsp;<span class="shift">›</span></a>
              <div class="mask"></div>
            </div>
          </div>

        </div>
      </div>
    </div>


    <div id="portion1" class="wide-info">
      <h3>Aqualert, el siste de alertas inteligentes</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis nobis ut dicta quisquam officia deleniti, amet. Obcaecati atque, cumque quae culpa ad hic commodi provident pariatur, iure nobis voluptatibus laborum amet temporibus quia, dolores veritatis, repellendus consectetur. Ut ullam officiis minus quod assumenda facere quaerat, esse, magni, aliquid culpa vero.</p>
      
      <div class="button">
         <a href="#portion2">Seguir bajando <img class="expand-icon" src="{{ asset('icon/expand-button-down.png ') }}"></a>
      </div>

    </div>

    <div class="my-container">
        <div class="row">
          <div class="col-md">
              <div class="box">
                <img class="explication-icon" src="{{ asset('image/save-water.png ') }}">
              </div>
          </div>

          <div class="col-md">
              <div class="box">
                <img class="explication-icon" src="{{ asset('image/save-water.png ') }}">
              </div>
          </div>

          <div class="col-md">
              <div class="box">
                <img class="explication-icon" src="{{ asset('image/save-water.png ') }}">
              </div>
          </div>
      </div>
    </div>
    

    <div class="my-section">
      <h2>Aqualert</h2>
    </div>

    <div id="portion2" class="info">
      <h3>Aqualert</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora pariatur voluptate laboriosam impedit praesentium sed, nihil, dignissimos et minima recusandae quaerat enim consectetur. Molestiae assumenda distinctio, rem nostrum dolores repellendus.</p>
      
      <div class="button">
         <a href="#portion3">Seguir bajando <img class="expand-icon" src="{{ asset('icon/expand-button-down.png ') }}"></a>
      </div>

    </div>

    <div class="my-section two">
      <h2>Nosotros</h2>
    </div>

    <div id="portion3" class="wide-info">
      <h3>Nosotros</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio accusamus in vitae saepe harum soluta reiciendis eaque repellat distinctio quos voluptate nemo error ratione numquam, nisi </p>
      
      <div class="my-container">
        <div class="row center">

          <div class="col-xs-12 col-sm-4 col-md-4">
              <div class="box">
                <div class="user">
                  <img class="team-icon" src="{{ asset('image/user.png ') }}">
                  <h4>Alfredo Silva</h4>
                  <h5>Web Developer</h5>
                  <p>Linkedin</p>
                </div>
              </div>
          </div>

          <div class="col-xs-12 col-sm-4 col-md-4">
              <div class="box">
                <div class="user">
                  <img class="team-icon" src="{{ asset('image/user.png ') }}">
                  <h4>Francisco Pérez</h4>
                  <h5>Web Developer</h5>
                  <p>Linkedin</p>
                </div>
              </div>
          </div>

          <div class="col-xs-12 col-sm-4 col-md-4">
              <div class="box">
                <div class="user">
                  <img class="team-icon" src="{{ asset('image/user.png ') }}">
                  <h4>Francisco Alvial</h4>
                  <h5>Web Developer</h5>
                  <p>Linkedin</p>
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
                  <img class="team-icon" src="{{ asset('image/user.png ') }}">
                  <h4>Juan Escalona</h4>
                  <h5>Web Developer</h5>
                  <p>Linkedin</p>
                </div>
              </div>
          </div>

          <div class="col-xs-12 col-sm-6 col-md-6">
              <div class="box">
                <div class="user">
                  <img class="team-icon" src="{{ asset('image/user.png ') }}">
                  <h4>Sebastián Torrico</h4>
                  <h5>Web Developer</h5>
                  <p>Linkedin</p>
                </div>
              </div>
          </div>


        </div>
      </div>

      <div class="button">
         <a href="#portion4">Seguir bajando <img class="expand-icon" src="{{ asset('icon/expand-button-down.png ') }}"></a>
      </div>

    </div>

    <div class="my-section three">
      <h2>Visítenos</h2>
    </div>

    <div id="portion4" class="info">
      <h3>Visítenos</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni incidunt quos iste voluptates, tenetur ad repudiandae ea fuga eveniet quam, unde iure suscipit rem odit in, sint nulla itaque? Labore beatae, est voluptatibus saepe rerum illum repudiandae quasi perspiciatis, molestiae quidem fugiat voluptates voluptate neque totam earum enim mollitia iure quod tempora veritatis quam optio. Error odit laudantium eum voluptate.</p>
      
      <div class="button">
         <a href="#portion5">Seguir bajando <img class="expand-icon" src="{{ asset('icon/expand-button-down.png ') }}"></a>
      </div>

    </div>

    @include('google-map')

    <div class="my-section four">
      <h2>Contáctanos</h2>
    </div>

    <div id="portion5" class="info">
      <h3>Contáctanos</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni incidunt quos iste voluptates, tenetur ad repudiandae ea fuga eveniet quam, unde iure suscipit rem odit in, sint nulla itaque? Labore beatae, est voluptatibus saepe rerum illum repudiandae quasi perspiciatis, molestiae quidem fugiat voluptates voluptate neque totam earum enim mollitia iure quod tempora veritatis quam optio. Error odit laudantium eum voluptate.</p>

      <div class="button">
         <a href="#top">Volver al inicio <img class="expand-icon" src="{{ asset('icon/expand-button-up.png ') }}"></a>
      </div>

    </div>
    
    @include('footer.footer')

</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <title>Aqualert!</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/mystyles.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/flexboxgrid.css') }}">
    <script type="text/javascript" src=" {{ asset('js/jquery-3.3.1.js') }} "></script>
    <script type="text/javascript" src=" {{ asset('js/myscripts.js') }} "></script>
</head>
<body>

    @include('header.header')

    <div class="portion">
        <h2>Sistema de alertas para tu agua</h2>
    </div>

    <div id="portion1" class="info">
      <h3>Explicacion extremadamente hermosa</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis nobis ut dicta quisquam officia deleniti, amet. Obcaecati atque, cumque quae culpa ad hic commodi provident pariatur, iure nobis voluptatibus laborum amet temporibus quia, dolores veritatis, repellendus consectetur. Ut ullam officiis minus quod assumenda facere quaerat, esse, magni, aliquid culpa vero.</p>
      <div class="button">
        <a href="#">Example Button</a>
      </div>
    </div>

    <div class="portion two">
      <h2>OneCrowd</h2>
    </div>

    <div id="portion2" class="info">
      <h3>Equipo OneCrowd</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora pariatur voluptate laboriosam impedit praesentium sed, nihil, dignissimos et minima recusandae quaerat enim consectetur. Molestiae assumenda distinctio, rem nostrum dolores repellendus.</p>
      <div class="button">
        <a href="#">Example Button</a>
      </div>
    </div>

    <div class="portion">
      <h2>Nosotros</h2>
    </div>

    <div id="portion3" class="info">
      <h3>Nosotros</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio accusamus in vitae saepe harum soluta reiciendis eaque repellat distinctio quos voluptate nemo error ratione numquam, nisi quibusdam veritatis repudiandae ea possimus rerum pariatur dolores? Optio inventore iusto, voluptatibus numquam aperiam, harum maxime beatae minima aliquam quas sapiente totam cumque unde..</p>
      <div class="button">
        <a href="#">Example Button</a>
      </div>
    </div>

    <div class="portion two">
      <h2>Contacto</h2>
    </div>

    <div id="portion4" class="info">
      <h3>Contacto</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni incidunt quos iste voluptates, tenetur ad repudiandae ea fuga eveniet quam, unde iure suscipit rem odit in, sint nulla itaque? Labore beatae, est voluptatibus saepe rerum illum repudiandae quasi perspiciatis, molestiae quidem fugiat voluptates voluptate neque totam earum enim mollitia iure quod tempora veritatis quam optio. Error odit laudantium eum voluptate.</p>
      <div class="button">
        <a href="#">Example Button</a>
      </div>
    </div>
    
    @include('footer.footer')

</body>
</html>

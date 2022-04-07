@extends('plantilla')
@section('content')


  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header center teal-text text-lighten-2">Ford de México</h1>
        <div class="row center">
          <h5 class="header col s12 light">Nuevos Autos, Camionetas SUV y Camiones en Venta,
            la mejor Tecnología y Seguridad para tu estilo de vida</h5>
        </div>
        <div class="row center">
          <a href="{{route('autos')}}" id="download-button" class="btn-large waves-effect waves-light teal lighten-1">Get
            Started</a>
        </div>
        <br><br>

      </div>
    </div>
    <div class="parallax"><img src="./recursos/image.imgs.webp" alt="Unsplashed background img 1"></div>
  </div>


  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m3">
          <div class="icon-block">
            <h2 class="center brown-text"><img src="./recursos/cotizalos.webp" alt=""></h2>
            <h5 class="center">Cotizalos</h5>

            <p class="light">Configura y recibe información del auto que deseas.</p>
          </div>
        </div>

        <div class="col s12 m3">
          <div class="icon-block">
            <h2 class="center brown-text"><img src="./recursos/localizalo.webp" alt=""></h2>
            <h5 class="center">Localiza tu distribuidor</h5>

            <p class="light">Encuentra tu Distribuidor Autorizado Ford más cercano.</p>
          </div>
        </div>

        <div class="col s12 m3">
          <div class="icon-block">
            <h2 class="center brown-text"><img src="./recursos/financiamiento.webp" alt=""></h2>
            <h5 class="center">Financiamiento</h5>

            <p class="light">Descubre Planes y Opciones de Compra.</p>
          </div>
        </div>
        <div class="col s12 m3">
          <div class="icon-block">
            <h2 class="center brown-text"><img src="./recursos/citas.webp" alt=""></h2>
            <h5 class="center">Cita de servicio</h5>

            <p class="light">Agenda una Cita para el mantenimiento de tu auto.</p>
          </div>
        </div>
      </div>

    </div>
  </div>


  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">

        </div>
      </div>
    </div>
    <div class="parallax"><img src="./recursos/image2.imgs.full.high.webp" alt="Unsplashed background img 2"></div>
  </div>

  <div class="container">
    <div class="section">

      <div class="row">
        <div class="col s12 center">
          <h3><i class="mdi-content-send brown-text"></i></h3>
          <h4>Descubre lo que Ford de México tiene para ti</h4>
          <p class="left-align light">Conoce los Próximos Lanzamientos, tecnologías, soluciones para tu negocio,
            servicios
            de mantenimiento y todo lo que necesitas para estrenar un auto Ford o mantener tu vehículo como nuevo.</p>
        </div>
      </div>

    </div>
  </div>


  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">

        </div>
      </div>
    </div>
    <div class="parallax"><img src="./recursos/image3.imgs.full.high.webp" alt="Unsplashed background img 3"></div>
  </div>
@endsection
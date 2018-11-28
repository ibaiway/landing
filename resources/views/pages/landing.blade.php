@extends('layouts.default')
@section('title','Landing Page')
@section('header')
<header class="masthead text-white text-center">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <h1 class="mb-5">LockSEK</h1>
          </div>
          <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
            <form>
              <div class="form-row">
                <div class="col-12 col-md-9 mb-2 mb-md-0">
                  <input type="email" class="form-control form-control-lg" placeholder="Introduce tu email...">
                </div>
                <div class="col-12 col-md-3">
                  <button type="submit" class="btn btn-block btn-lg btn-primary">Sign up!</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </header>
@stop
@section('content')
<section class="features-icons bg-light text-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
              <div class="features-icons-icon d-flex">
                <i class="icon-screen-desktop m-auto text-primary"></i>
              </div>
              <h3>Monitorizable</h3>
              <p class="lead mb-0">Monitoriza accesos, crea alertas y avisos!</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
              <div class="features-icons-icon d-flex">
                <i class="icon-size-fullscreen m-auto text-primary"></i>
              </div>
              <h3>Expandible</h3>
              <p class="lead mb-0">Añade mas cerraduras y llaves con solo un click!</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="features-icons-item mx-auto mb-0 mb-lg-3">
              <div class="features-icons-icon d-flex">
                <i class="icon-check m-auto text-primary"></i>
              </div>
              <h3>Facil de utilizar</h3>
              <p class="lead mb-0">Facilidad de uso fisica y digitalmente!</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Image Showcases -->
    <section class="showcase">
      <div class="container-fluid p-0">
        <div class="row no-gutters">

          <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('img/bg-showcase-1.jpg');"></div>
          <div class="col-lg-6 order-lg-1 my-auto showcase-text">
            <h2>Diseño inovador</h2>
            <p class="lead mb-0">Las cerraduras han sido diseñadas en conjunto a diseñadores de IKEA y Apple para conseguir un aspecto visual agradable y atractivo.</p>
          </div>
        </div>
        <div class="row no-gutters">
          <div class="col-lg-6 text-white showcase-img" style="background-image: url('img/bg-showcase-2.jpg');"></div>
          <div class="col-lg-6 my-auto showcase-text">
            <h2>Seguridad 4.0</h2>
            <p class="lead mb-0">En nuestras cerraduras integramos un sistema de seguridad diseñado por becarios del MIT, en colaboracion con Google.</p>
          </div>
        </div>
        <div class="row no-gutters">
          <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('img/bg-showcase-3.jpg');"></div>
          <div class="col-lg-6 order-lg-1 my-auto showcase-text">
            <h2>Estandar establecido</h2>
            <p class="lead mb-0">Hacemos uso de tecnologias estandares no propietarias, en un mercado globalmente establecido.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Testimonials -->
    <section class="testimonials text-center bg-light">
      <div class="container">
        <h2 class="mb-5">¿Quienes somos?</h2>
        <div class="row">
          <div class="col-lg-4">
            <div class="testimonial-item mx-auto mb-5 mb-lg-0">
              <img class="img-fluid rounded-circle mb-3" src="img/testimonials-1.jpg" alt="">
              <h5>Ibai Alberdi</h5>
              <p class="font-weight-light mb-0">"This is fantastic! Thanks so much guys!"</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="testimonial-item mx-auto mb-5 mb-lg-0">
              <img class="img-fluid rounded-circle mb-3" src="img/testimonials-2.jpg" alt="">
              <h5>Ander Laboreo</h5>
              <p class="font-weight-light mb-0">"Bootstrap is amazing. I've been using it to create lots of super nice landing pages."</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="testimonial-item mx-auto mb-5 mb-lg-0">
              <img class="img-fluid rounded-circle mb-3" src="img/testimonials-3.jpg" alt="">
              <h5>Robert Baluta</h5>
              <p class="font-weight-light mb-0">"Thanks so much for making these free resources available to us!"</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Call to Action -->
    <section class="call-to-action text-white text-center">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <h2 class="mb-4">Contactanos!</h2>
          </div>
          <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
            <form action="contact">
              <div class="form-row">
                <div class="col-12 col-md-9 mb-2 mb-md-0 mx-auto">
                  <input type="text" name="nombre" class="form-control form-control-lg" placeholder="Nombre...">
                </div>
                <div class="col-12 col-md-9 mb-2 mb-md-0 mx-auto">
                  <input type="email" name="email" class="form-control form-control-lg" placeholder="Introduce tu email...">
                </div>
                <div class="col-12 col-md-9 mb-2 mb-md-0 mx-auto">
                  <input type="text" name="mensaje" class="form-control form-control-lg" placeholder="Mensaje...">
                </div>
                <div class="col-12 col-md-4 mx-auto">
                  <button type="submit" class="btn btn-block btn-lg btn-primary">Enviar!</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
@stop
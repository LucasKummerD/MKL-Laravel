@extends('layouts.app')

@section('content')
            
          <div  id="carousel" class="carousel slide" data-ride="carousel">      
          <ol class="carousel-indicators">
            <li data-target="#carousel" data-slide-to="0" class="active"></li>
            <li data-target="#carousel" data-slide-to="1"></li>
            <li data-target="#carousel" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">

      <!-- Slide  Uno-->
            <div class="carousel-item active" style="background-image: url('img/Carrousel-1.jpg');">
              <div class="carousel-caption d-none d-md-block">
                <h3></h3>
                <p></p>
              </div>
            </div>

      <!-- Slide Dos -->
            <div class="carousel-item" style="background-image: url('img/Carrousel-2.jpg');">
              <div class="carousel-caption d-none d-md-block">
                <h3></h3>
                <p></p>
              </div>
            </div>

      <!-- Slide Tres -->
            <div class="carousel-item" style="background-image: url('img/Carrousel-3.jpg');">
              <div class="carousel-caption d-none d-md-block">
                <h3></h3>
                <p></p>
              </div>
            </div>
          </div>

          <!-- Flechas Carousel -->
          <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </header>


<!--------------------------------------------------------- Contenido ---------------------------------------------------------->

<!--------------------------------------------------------- Productos ---------------------------------------------------------->

      <div class="container h6">
          <h1 class="my-4 py-4"><strong>PRODUCTOS DESTACADOS</h1>
        <div class="row">
          <div class="col-lg-4 col-sm-6 portfolio-item">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="img/Foto-1.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">COMBO 1</a>
                </h4>
                <p class="card-text">Ofrecemos la decoracion y mobiliarios para el interperie que se adaptan perfectamente a la tematica que propongas para tu fiesta</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-sm-6 portfolio-item">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="img/Foto-2.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">COMBO 2</a>
                </h4>
                <p class="card-text">Nos adaptamos a todos los gustos, por eso si tenes que organizar baby showers, cumpleaños o bautismos, tenemos este combo preparado para que tu fiesta tenga la mejor estetica</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-sm-6 portfolio-item">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="img/Foto-3-01.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">COMBO 3</a>
                </h4>
                <p class="card-text">Si necesitas que la noche sea perfecta, tenemos para vos un combo donde todo brilla. Desde lucas led, hasta mobiliarios luminosos para hacer de tu fiesta un gran evento inolvidable</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-sm-6 portfolio-item">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="img/Foto -4.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">PRODUCTO 4</a>
                </h4>
                <p class="card-text">Tu bebida cobra vida con los hielos luminosos, son totalmente inofensivos. Podes utilizarlos para niños y adultos. Se pueden seleccionar manualmente 4 colores a eleccion o dejarlo en opcion random y convertir tu bebida en una fiesta.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-sm-6 portfolio-item">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="img/Foto -5-05.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">PRODUCTO 5</a>
                </h4>
                <p class="card-text">Las sillas son siempre un problema para trasladar, si en tu fiesta no sabes cuanta gente viene, està opcion te salva. Sillas plegables, faciles de trasladar, irrompibles.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-sm-6 portfolio-item">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="img/Foto -6-06.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">PRODUCTO 6</a>
                </h4>
                <p class="card-text">Vos solo encargate de disfrutar, te ofrecemos telas para tu decoración con tratamiento ignifugo. No arriesgues tu fiesta, confiá en los que saben</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-sm-6 portfolio-item">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="img/Barra -07.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">PRODUCTO 7</a>
                </h4>
                <p class="card-text">No escatimes en la bebida! Nuestras barras son la mejores. Y lo más importante, nunca se quedan sin bebida.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-sm-6 portfolio-item">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="img/Living cheto-08.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">PRODUCTO 8</a>
                </h4>
                <p class="card-text">Los living con estilos, son para gente con estilo. Si tu fiesta es elegante y queres intimidar a todos tus invitados recreamos un VIP en donde la exclusividad será solo para algunos</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-sm-6 portfolio-item">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="img/Sillas Tiffani-09.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">PRODUCTO 9</a>
                </h4>
                <p class="card-text">Las sillas visten la mesa, si queres resaltar y salir de lo convencional, te ofrecemos lo mejor de lo mejor.</p>
              </div>
            </div>
          </div>
      </div>
    </div>
          


@endsection
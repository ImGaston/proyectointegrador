@extends ("layout")
@section ('title')
Pitagoras |Productos
@endsection






@section
<main>
	<div class="container">

				<h1 class="my-4">Categorias</h1>
        <div class="list-group">
          <a href="#colegial" class="list-group-item">Colegial</a>
          <a href="#egresados" class="list-group-item">Egresados</a>
          <a href="#servicios" class="list-group-item">Servicios</a>
        </div>


      <!-- /.col-lg-3 -->



        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="img/productos-01.jpg" width="1200"alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="img/productos-02.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="img/productos-03.jpg" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

				<br>
				<h2 id="colegial">LINEA Colegial</h2>
				<div class="card-deck">
				  <div class="card">
				  <a href="productos/colegial/chombas.php" ><img src="img/chomba.jpeg"width="400"  class="card-img-top" alt="chomba colegial"></a>
				    <div class="card-body">
				      <h5 class="card-title">Chomba</h5>
				      <p class="card-text">De varios colores , tela pique colegial algodon/polyester. Cuellos y puños con tejeduria con mezcla
								de hilo acrilico.Cartera a la vista y logos bordados .</p>
				   <button type="button" class="btn btn-outline-primary">$720</button>

							<img src="img/carrito.jpeg"width="90" alt="carrito" >
				      <p class="card-text"><small class="text-primary">&#9733; &#9733; &#9733; &#9733; &#9734;</small></p>
				    </div>
				  </div>
				  <div class="card">

						<a href="productos/colegial/deportivos.php"><img src="img/joggins.jpeg" class="card-img-top" alt="joggins deportivos"></a>
				    <div class="card-body">
				      <h5 class="card-title">Joggins deportivos</h5>
				      <p class="card-text">Confeccionados con frisas deportivas de algodon /polyester, colores fijos y terminaciones reforzadas.
							Amplia gama de colores en tela de verano e invierno</p>
				   <button type="button" class="btn btn-outline-primary"> $1600</button>

							<img src="img/carrito.jpeg"width="90" alt="carrito" >
				      <p class="card-text"><small class="text-primary">&#9733; &#9733; &#9733; &#9733; &#9734;</small></p>
				    </div>
				  </div>
				  <div class="card">
				   <a href="productos/colegial/infantiles.php"><img src="img/images.jpeg" class="card-img-top" alt="delantales de jardin "></a>
				    <div class="card-body">
				      <h5 class="card-title">Equipos infantiles </h5>
				      <p class="card-text">Diseños muy divertidos y comodos para los mas chiquitos. Logos bordados y superpuestos.
							Detalles encantadores en telas resistentes y muy lavables .</p>
				        <button type="button" class="btn btn-outline-primary"> $600</button>

								<img src="img/carrito.jpeg"width="90" alt="carrito" >
				      <p class="card-text"><small class="text-primary">&#9733; &#9733; &#9733; &#9733; &#9734;</small></p>

				    </div>
				  </div>
				</div>
				<br>

				<h2 id="egresados">LINEA exclusiva para EGRESADOS </h2>
				<div class="card-deck">
				  <div class="card">
				  <a href="productos/egresados/conjuntos.php"> <img src="img/egresados.jpeg" class="card-img-top" alt="equipos para egresados"></a>
				    <div class="card-body">
				      <h5 class="card-title">Conjuntos para Egresados</h5>
				      <p class="card-text">A ellos les dedicamos especial dedicacion en buscar un diseño de preferencia.
								En todos los talles, telas y  combinaciones que logran un efecto acorde al perfil de los egresados .</p>
				   <button type="button" class="btn btn-outline-primary"> $980</button>

								 <img src="img/carrito.jpeg"width="90" alt="carrito" >
				      <p class="card-text"><small class="text-primary">&#9733; &#9733; &#9733; &#9733; &#9734;</small></p>
				    </div>
				  </div>



				  <div class="card">
				   <a href="productos/egresados/Paratodos.php"> <img src="img/egresadospromojpeg.jpeg" class="card-img-top" alt="egresados promos"></a>
				    <div class="card-body">
				      <h5 class="card-title">Promos Egresados</h5>
				      <p class="card-text">Los grupos de egresados tienen posibilidades de crear su equipo para distinguirlos.
							Pudeden elegir colores, menciones en logos, identificaciones de año, división etc. Podemos asesorarlos
						y sugerirles ideas innovadoras.</p>
				     <button type="button" class="btn btn-outline-primary"> $2000</button>

							<img src="img/carrito.jpeg"width="90" alt="carrito" >
				      <p class="card-text"><small class="text-primary">&#9733; &#9733; &#9733; &#9733; &#9734;</small></p>
				    </div>
				  </div>
				  <div class="card">
				   <a href="productos/egresados/Promosegresados.php"> <img src="img/egresadosgrupo.jpeg" class="card-img-top" alt="Egresados grupo"></a>
				    <div class="card-body">
				      <h5 class="card-title">Para TODO EL GRUPO</h5>
				      <p class="card-text">La sensacion de plasmar en sus buzos , gorros o accesorios.  Los grupos lo disfrutan
								y nosotros como  empresa, por ayudarlos a hacer posible sus sueños.</p>
				         <button type="button" class="btn btn-outline-primary"> CONSULTAR $Precio</button>

								<img src="img/carrito.jpeg"width="90" alt="carrito" >
				      <p class="card-text"><small class="text-primary">&#9733; &#9733; &#9733; &#9733; &#9734;</small></p>
				    </div>
				  </div>
				</div>
				<br>
				<h2 id="servicios">AMBOS para Servicios</h2>
				<div class="card-deck">
				  <div class="card">
				   <a href="productos/servicios/Chaquetillas.php"> <img src="img/chaquetilla.jpeg"width="400"class="card-img-top" alt="chaquetilla"></a>
				    <div class="card-body">
				      <h5 class="card-title">Chaquetilla de SERVICIOS </h5>
				      <p class="card-text">Las chaquetillas para servicios hospitalarios, domesticos, u otras profesiones son prendas .
								 que deben ofrecer practicidad , comodidad y buen gusto. Se fabrican en diferentes tamaños.</p>
				         <button type="button" class="btn btn-outline-primary">$900</button>

								 <img src="img/carrito.jpeg"width="90" alt="carrito" >
				      <p class="card-text"><small class="text-primary">&#9733; &#9733; &#9733; &#9733; &#9734;</small></p>
				    </div>
				  </div>
				  <div class="card">
				   <a href="productos/servicios/Ambos.php"> <img src="img/sanidadduo.jpeg" class="card-img-top" alt="sanidad duo"></a>
				    <div class="card-body">
				      <h5 class="card-title">Ambo HOMBRE/ MUJER Para Servicios</h5>
				      <p class="card-text">Son Ambos que  tienen caracteristicas esenciales de acuerdo a normas de uso (caso hospitalario) .
							Los pantalones  de hombre tienen diferente corte por ello puedes mencionar en tu solicitud el genero H/M.</p>
				       <button type="button" class="btn btn-outline-primary">$1350</button>

							<img src="img/carrito.jpeg"width="90" alt="carrito" >

				      <p class="card-text"><small class="text-primary">&#9733; &#9733; &#9733; &#9733; &#9734;</small></p>
				    </div>
				  </div>
				  <div class="card">
				   <a href="productos/servicios/Chaquetillasliberty.php"> <img src="img/amboliberty.jpeg" class="card-img-top" alt="chaquetilla liberty"></a>
				    <div class="card-body">
				      <h5 class="card-title">Chaquetilla LIBERTY</h5>
				      <p class="card-text">Algunos servicios requieren diseños mas divertidos y referidos a la actividad .
							que realizan. Ese distintivo se logra con telas liberty que hacen posible lograr este aspecto.</p>
								<button type="button" class="btn btn-outline-primary">$980</button>
								<img src="img/carrito.jpeg"width="90" alt="carrito" >
				      <p class="card-text"><small class="text-primary">&#9733; &#9733; &#9733; &#9733; &#9734;</small></p>
				    </div>
				  </div>
				</div>
				</div>
	 	</div>
				  <!-- /.container -->
</main>

@endsection

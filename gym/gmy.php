<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Gimnasio JCM</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" href="estilos.css">
</head>
<body>
  <header>
	 <nav class="navbar navbar-dark bg-dark fixed-top">
		<div class="container-fluid">
			<h1>Gimnasio JCM </h1>

			<ul>
				<li><a href="#maquinas">Máquinas disponibles</a></li>
				<li><a href="#entrenadores">Entrenadores</a></li>
				<li><a href="#horarios">Horarios de atención</a></li>
				<li><a href="#precios">Precios</a></li>
				<li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="..//gym/index.html">Registarse</a>
                </li>
			  </ul>

			  <!-- offcanvas despegable -->
		  <a class="navbar-brand" href="#"></a>
		  <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
			<div class="offcanvas-header">
			  <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Dark offcanvas</h5>
			  <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
			</div>
			<div class="offcanvas-body">
			  <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
				<li class="nav-item">
				  <a class="nav-link active" aria-current="page" href="#">Home</a>
				</li>
				<li class="nav-item">
				  <a class="nav-link" href="#">Agenda Tu Horario</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Tu Espacio</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link" href="#">Corporativo</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link" href="#">promociones</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link" href="#">Preguntas Frecuentes</a>
				  </li>
				<li class="nav-item dropdown">
				  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
					Dropdown
				  </a>
				  <ul class="dropdown-menu dropdown-menu-dark">
					<li><a class="dropdown-item" href="#">Action</a></li>
					<li><a class="dropdown-item" href="#">Another action</a></li>
					<li>
					  <hr class="dropdown-divider">
					</li>
					<li><a class="dropdown-item" href="#">Something else here</a></li>
				  </ul>
				</li>
			  </ul>
			  <form class="d-flex mt-3" role="search">
				<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
				<button class="btn btn-success" type="submit">Search</button>
			  </form>
			</div>
		  </div>
		</div>
	  </nav> 
  </header>

<!-- carrusel de imagen sobre consigue tu cuerpo  -->
  <div id="carouselExampleCaptions" class="carousel slide">
	<div class="carousel-indicators">
	  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
	  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
	  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
	</div>
	<div class="carousel-inner">
	  <div class="carousel-item active">
		<img src="img/cuerpo.jpg" class="d-block w-100" alt="cuerpo 0">
		<div class="carousel-caption d-none d-md-block">
		  <h5>CONSIGUE TU CUERPO</h5>
		  <p>Some representative placeholder content for the first slide.</p>
		</div>
	  </div>
	  <div class="carousel-item">
		<img src="img/Prensa.jpg" class="d-block w-100" alt="Prensa 1">
		<div class="carousel-caption d-none d-md-block">
		  <h5>Second slide label</h5>
		  <p>Some representative placeholder content for the second slide.</p>
		</div>
	  </div>
	  <div class="carousel-item">
		<img src="img/Caminadora.jpg" class="d-block w-100" alt="Caminadora 2">
		<div class="carousel-caption d-none d-md-block">
		  <h5>Third slide label</h5>
		  <p>Some representative placeholder content for the third slide.</p>
		</div>
	  </div>
	</div>
	<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
	  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	  <span class="visually-hidden">Previous</span>
	</button>
	<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
	  <span class="carousel-control-next-icon" aria-hidden="true"></span>
	  <span class="visually-hidden">Next</span>
	</button>
  </div>


 <section id="conocenos">
	<h1>ACERCA DE NOSOTROS</h1>
	<p>Somos tu gimnasio JCM de confianza, visitanos los dias que puedas y cuando quieras,
	todo el personal capacitado esta a tu disposicion para ayudarte en tu nuevo progreso.</p>
 </section>
  <section id="maquinas">
    <h2>Máquinas disponibles</h2>
	<div class="row row-cols-3 row-cols-md-3 g-4">
		<div class="col">
		  <div class="card">
			<img src="img/BicicletaE.jpg" class="card-img-top" alt="BicicletaE">
			<div class="card-body">
			  <h5 class="card-title"> Bicicleta</h5>
			  <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
			</div>
		  </div>
		</div>
		<div class="col">
		  <div class="card">
			<img src="img/Caminadora.jpg" class="card-img-top" alt="Caminadora">
			<div class="card-body">
			  <h5 class="card-title">Caminadora</h5>
			  <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
			</div>
		  </div>
		</div>
		<div class="col">
		  <div class="card">
			<img src="img/Hacka.jpg" class="card-img-top" alt="Hacka">
			<div class="card-body">
			  <h5 class="card-title">Hacka</h5>
			  <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
			</div>
		  </div>
		</div>
		<div class="col">
		  <div class="card">
			<img src="img/MaquinaPesas1.jpg" class="card-img-top" alt="MaquinaPesas1">
			<div class="card-body">
			  <h5 class="card-title">MaquinaPesas1</h5>
			  <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
			</div>
		  </div>
		</div>
		<div class="col">
			<div class="card">
			  <img src="img/Prensa.jpg" class="card-img-top" alt="Prensa">
			  <div class="card-body">
				<h5 class="card-title">Prensa</h5>
				<p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
			  </div>
			</div>
		  </div><div class="col">
			<div class="card">
			  <img src="img/smith.jpg" class="card-img-top" alt="smith">
			  <div class="card-body">
				<h5 class="card-title">smith</h5>
				<p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
			  </div>
			</div>
		  </div>
	  </div>

    <p>Descripción de las máquinas disponibles y horarios de uso.</p>
  </section>

  <section id="entrenadores" class="entrenadores-grid">
	<h2>Entrenadores</h2>
	<div class="entrenador">
	  <div class="entrenador-nombre">Camilo Aparicio</div>
	  <div class="entrenador-especialidad">Especialidad en Entrenamiento de Fuerza</div>
	  <div class="entrenador-horario">Lunes a viernes: 8am - 12pm</div>
	</div>
	<div class="entrenador">
	  <div class="entrenador-nombre">Jose  Calderon</div>
	  <div class="entrenador-especialidad">Especialidad Entrenamiento Funcional</div>
	  <div class="entrenador-horario">Lunes a viernes: 2pm - 6pm</div>
	</div>
	<div class="entrenador">
	  <div class="entrenador-nombre">Mercedes Ramirez</div>
	  <div class="entrenador-especialidad">Especialidad en Nutricion</div>
	  <div class="entrenador-horario">Sábado: 9am - 1pm</div>
	</div>
	<div class="entrenador">
		<div class="entrenador-nombre">Sofia Machin</div>
		<div class="entrenador-especialidad">Especialidad en Entrenamiento Cardiovascular</div>
		<div class="entrenador-horario">Miercoles a Sabados: 6am - 11am</div>
	  </div>
  </section>
  

  <section id="horarios">
    <h2>Horarios de atención</h2>
    <table>
      <thead>
        <tr>
          <th>Día</th>
          <th>Horario</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Lunes a viernes</td>
          <td>6:00am - 10:00pm</td>
        </tr>
        <tr>
          <td>Sábado</td>
          <td>7:00am - 8:00pm</td>
        </tr>
        <tr>
          <td>Domingo</td>
          <td>Cerrado</td>
        </tr>
      </tbody>
    </table>
  </section>

  <section id="precios">
    <h2>Precios</h2>
    <ul>
      <li>Plan mensual: $xx.xx</li>
      <li>Plan trimestral: $xx.xx</li>
      <li>Plan anual: $xx.xx</li>
    </ul>
  </section>

  <footer>
   <!--  <p>Dirección del gimnasio - Teléfono - Correo electrónico</p> -->
    <!-- SECCION CONTACTO -->
    <!-- <section class="contacto" id="contacto">
        <div class="contenido-seccion">
            <h2 class="titulo-seccion">Contacto</h2>
            <h3>Ponte en contacto ahora mismo!</h3>

            <div class="fila">
                <div class="col">
                    <h2>
                        <i class="fa-solid fa-phone"></i> Teléfono
                    </h2>
                    <span class="info-contacto">57- 3006259265</span>
                </div>
                <div class="col">
                    <h2>
                        <i class="fa-solid fa-envelope"></i> Correo
                    </h2>
                    <span class="info-contacto">jc823780@gmail.com</span>
                </div>
                <div class="col">
                    <h2>
                        <i class="fa-solid fa-globe"></i> Página Web
                    </h2>
                    <span class="info-contacto">josecalderon.com</span>
                </div>
            </div>
        </div>
    </section> -->
	<div class="info">
		<h1>CONTACTO</h1>
		<h2>PONTE EN CONTACTO AHORA MISMO!</h2>
		<div class="redes">

			<a href="https://www.facebook.com/josedavidcalderonbohorquez"><i
					class="fa-brands fa-facebook-f"></i></a>
			<a href="#"><i class="fa-brands fa-square-instagram"></i></a>
			<a href="#"><i class="fa-brands fa-youtube"></i></a>
			<a href="#"><i class="fa-marcas fa-whatsApp"></i></a>
			<a  href =" # " ><i  class ="fa-brands fa-linkedin-in " ></i ></a >
			<a  href =" # " ><i  class ="fa-brands fa-pinterest-p " > </i ></a >

		</div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
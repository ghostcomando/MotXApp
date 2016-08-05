<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>MotXApp</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/usuario.css">
</head>
<body>
	<header>
		<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navegacion-Mot">
						<span class="sr-only">Desplegar / Ocultar Menu</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a href="#" class="navbar-brand">MotXApp</a>
				</div>

				<div class="collapse navbar-collapse" id="navegacion-Mot">
					<ul class="nav navbar-nav">
						<li><a href="#">Inicio</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
								Categorias <span class="caret"></span>
							</a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="#">Opcion1</a></li>
								<li><a href="#">Opcion2</a></li>
								<li class="divider"></li>
								<li><a href="#">Opcion3</a></li>
								<li><a href="#">Opcion4</a></li>
								<li><a href="#">Opcion5</a></li>
							</ul>
						</li>
						<li><a href="#">Otro</a></li>
						<li><a href="#">Otro2</a></li>
					</ul>

					<form action="" class="navbar-form navbar-right" role="search">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Busqueda Mot">
						</div>
						<button type="submit" class="btn btn-danger">
							<span class="glyphicon glyphicon-search"></span>
						</button>
					</form>
				</div>
			</div>
		</nav>
	</header>
	
	<section class="jumbotron">
		<div class="container">
			<h1>MotXApp</h1>
			<p>Tu reserva al alcance de un clic!</p>
		</div>
	</section>

	<div class="container">
		<div class="col-md-12">
			<div id="slide1" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#slide1" data-slide-to="0" class="active"></li>
					<li data-target="#slide1" data-slide-to="1"></li>
					<li data-target="#slide1" data-slide-to="2"></li>
					<li data-target="#slide1" data-slide-to="3"></li>
					<li data-target="#slide1" data-slide-to="4"></li>
				</ol>
				<div class="carousel-inner" role="listbox">
					<div class="item active">
						<img src="Imagenes/suite1.jpg" alt="" class="img-responsive">
						<div class="carousel-caption">
							<h4>Slide 1</h4>
							<p>Lorem ipsum dolor sit amet.</p>	
						</div>						
					</div>
					<div class="item">
						<img src="Imagenes/suite2.jpg" alt="" class="img-responsive">
						<div class="carousel-caption">
							<h4>Slide 2</h4>
							<p>Lorem ipsum dolor sit amet.</p>	
						</div>						
					</div>
					<div class="item">
						<img src="Imagenes/suite3.jpg" alt="" class="img-responsive">
						<div class="carousel-caption">
							<h4>Slide 3</h4>
							<p>Lorem ipsum dolor sit amet.</p>	
						</div>						
					</div>
					<div class="item">
						<img src="Imagenes/suite4.jpg" alt="" class="img-responsive">
						<div class="carousel-caption">
							<h4>Slide 4</h4>
							<p>Lorem ipsum dolor sit amet.</p>	
						</div>						
					</div>
					<div class="item">
						<img src="Imagenes/suite5.jpg" alt="" class="img-responsive">
						<div class="carousel-caption">
							<h4>Slide 5</h4>
							<p>Lorem ipsum dolor sit amet.</p>	
						</div>						
					</div>
				</div>
				<a href="#slide1" class="left carousel-control" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Anterior</span>
				</a>
				<a href="#slide1" class="right carousel-control" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Siguiente</span>
				</a>					
			</div>
		</div>
	</div>

	<section class="main container">
		<div class="row">
			<section class="posts col-md-9">
				<div class="miga-de-pan">
					<ol class="breadcrumb">
						<li><a href="#">Inicio</a></li>
						<li><a href="#">Categorias</a></li>
						<li><a href="#">Contacto </a></li>
					</ol>
				</div>
				<article class="post clearfix">
					<a href="#" class="thumb pull-left">
						<img class="img-thumbnail" src="Imagenes/motel1.jpg" alt="">
					</a>
					<h2 class="post-title">
						<a href="#">Ir a Motel1</a>
					</h2>
					<p>
						<span class="post-fecha">02/08/2016</span> por <span class="post-autor"><a href="#">Daniel Becerra</a></span>
					</p>
					<p class="post-contenido text-justify">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor iure ut culpa quidem aliquam impedit eum cum nostrum quo? Corporis consectetur, atque esse qui adipisci enim, quidem vitae eos a.
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis exercitationem aliquid corrupti temporibus sequi voluptates aliquam laborum id, voluptatem quos dolores, non magni laboriosam, tempora ullam iure aperiam neque molestias?
					</p>
					<div class="contenedor-botones">
						<a href="#" class="btn btn-primary">Leer mas</a>
						<a href="#" class="btn btn-success">Comentarios <span class="badge">20</span></a>
					</div>
				</article>
				<article class="post clearfix">
					<a href="#" class="thumb pull-left">
						<img class="img-thumbnail" src="Imagenes/motel2.jpg" alt="">
					</a>
					<h2 class="post-title">
						<a href="#">Ir a Motel2</a>
					</h2>
					<p>
						<span class="post-fecha">02/08/2016</span> por <span class="post-autor"><a href="#">Daniel Becerra</a></span>
					</p>
					<p class="post-contenido text-justify">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor iure ut culpa quidem aliquam impedit eum cum nostrum quo? Corporis consectetur, atque esse qui adipisci enim, quidem vitae eos a.
					</p>
					<div class="contenedor-botones">
						<a href="#" class="btn btn-primary">Leer mas</a>
						<a href="#" class="btn btn-success">Comentarios <span class="badge">4</span></a>
					</div>
				</article>
				<article class="post clearfix">
					<a href="#" class="thumb pull-left">
						<img class="img-thumbnail" src="Imagenes/motel3.png" alt="">
					</a>
					<h2 class="post-title">
						<a href="#">Ir a Motel3</a>
					</h2>
					<p>
						<span class="post-fecha">02/08/2016</span> por <span class="post-autor"><a href="#">Daniel Becerra</a></span>
					</p>
					<p class="post-contenido text-justify">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor iure ut culpa quidem aliquam impedit eum cum nostrum quo? Corporis consectetur, atque esse qui adipisci enim, quidem vitae eos a.
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis exercitationem aliquid corrupti temporibus
					</p>
					<div class="contenedor-botones">
						<a href="#" class="btn btn-primary">Leer mas</a>
						<a href="#" class="btn btn-success">Comentarios <span class="badge">58</span></a>
					</div>
				</article>
				<div class="center-block">
					<ul class="pagination">
						<li><a href="#">&laquo;<span class="sr-only">Anterior</span></a></li>
						<li><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">&raquo;<span class="sr-only">Siguiente</span></a></li>
					</ul>
				</div>
			</section>
			<aside class="col-md-3 hidden-xs hidden-sm">
				<h4>Categorias</h4>
				<div class="list-group">
					<a href="#" class="list-group-item active">Opcion1</a>
					<a href="#" class="list-group-item">Opcion2</a>
					<a href="#" class="list-group-item">Opcion3</a>
					<a href="#" class="list-group-item">Opcion4</a>
					<a href="#" class="list-group-item">Opcion5</a>
					<a href="#" class="list-group-item">Opcion6</a>
					<a href="#" class="list-group-item">Opcion7</a>
				</div>
				<h4>Articulos recientes</h4>
				<a href="#" class="list-group-item">
					<h4 class="list-group-item-heading">Titulo articulo 1</h4>
					<p class="list-group-item-text">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo fugiat, explicabo laboriosam assumenda ratione commodi nisi repudiandae necessitatibus totam distinctio at, suscipit provident voluptates. Iusto minus nam corporis architecto quam.
					</p>
				</a>
				<a href="#" class="list-group-item">
					<h4 class="list-group-item-heading">Titulo articulo 2</h4>
					<p class="list-group-item-text">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo fugiat, explicabo laboriosam assumenda ratione commodi nisi repudiandae necessitatibus totam distinctio at, suscipit provident voluptates. Iusto minus nam corporis architecto quam.
					</p>
				</a>
				<a href="#" class="list-group-item">
					<h4 class="list-group-item-heading">Titulo articulo 3</h4>
					<p class="list-group-item-text">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo fugiat, explicabo laboriosam assumenda ratione commodi nisi repudiandae necessitatibus totam distinctio at, suscipit provident voluptates. Iusto minus nam corporis architecto quam.
					</p>
				</a>
				<a href="#" class="list-group-item">
					<h4 class="list-group-item-heading">Titulo articulo 4</h4>
					<p class="list-group-item-text">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo fugiat, explicabo laboriosam assumenda ratione commodi nisi repudiandae necessitatibus totam distinctio at, suscipit provident voluptates. Iusto minus nam corporis architecto quam.
					</p>
				</a>
			</aside>
		</div>
	</section>
		<?php
			if(isset($_POST['iniciosesion']))
			{
				echo "se inicio sesion";
			}
			if(isset($_POST['registro']))
			{
				echo "se registro";
			}
		?>				

	<footer>
		<div class="col-xs-6">
			<p>Daniel Becerra MotXApp</p>
		</div>
		<div class="col-xs-6">
			<ul class="list-inline text-right">
				<li><a href="#">Inicio</a></li>
				<li><a href="#">Categorias</a></li>
				<li><a href="#">Contacto</a></li>
			</ul>
		</div>
	</footer>

	<script src="http://code.jquery.com/jquery-latest.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>
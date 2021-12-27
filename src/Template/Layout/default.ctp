<!DOCTYPE HTML>
<!--
	Verti by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Tienda ELECTRO</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <?= $this->Html->css('main');?>
	</head>
	<body class="is-preload left-sidebar">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header-wrapper">
					<header id="header" class="container">

						<!-- Logo -->
							
						<!-- Nav -->
						<nav id="nav">
								<ul>					
									<li>
										<a href="#">Lenguaje</a>
										<ul>
											<li><?= $this->Html->image('Peru-flat-icon.png', [
												'alt'=>'Español',
												'url'=>['controller'=>'App','action'=>'change-language','es_PE']]); ?></li>
											<li><?= $this->Html->image('United-States-flat-icon.png', [
												'alt'=>'English',
												'url'=>['controller'=>'App','action'=>'change-language','en_US']]); ?></li>
											<li><?= $this->Html->image('Brazil-flat-icon.png', [
												'alt'=>'Portugues',
												'url'=>['controller'=>'App','action'=>'change-language','pt_BR']]); ?></li></ul>
									</li>
									<li>
										<a href="#">Sesión</a>
										<ul>
										<li><?= $this->Html->link('Login', ['controller' => 'users', 'action' => 'login', '_full' => true]); ?></li>
										<li><?= $this->Html->link('Logout', ['controller' => 'users', 'action' => 'logout', '_full' => true]); ?></li>
									</li>
								</ul>
							</nav>

					</header>
				</div>

			<!-- Main -->
				<div id="main-wrapper">
					<div class="container">
						<div class="row gtr-200">
							<div class="col-2 col-5-medium">
								<div id="sidebar">

									<!-- Sidebar -->
									<div id="logo">
								<h1><?= $this->Html->link('Electro', 'pages/home'); ?></h1>
							</div>

										<section>									
										<li class="current"><?= $this->Html->link('Inicio', ['controller' => 'products', 'action' => 'index', '_full' => true]); ?></li>	
										<li class="current"><?= $this->Html->link('Usuarios', ['controller' => 'users', 'action' => 'index', '_full' => true]); ?></li>	
										<li class="current"><?= $this->Html->link('Productos', ['controller' => 'products', 'action' => 'index', '_full' => true]); ?></li>									
										<li class="current"><?= $this->Html->link('Linea Blanca', ['controller' => 'blanca', 'action' => 'index', '_full' => true]); ?></li>
										<li class="current"><?= $this->Html->link('Audio', ['controller' => 'audio', 'action' => 'index', '_full' => true]); ?></li>
										<li class="current"><?= $this->Html->link('Televisores', ['controller' => 'televisor', 'action' => 'index', '_full' => true]); ?></li>
										</li>
										</section>

							

								</div>
							</div>
							<div class="col-8 col-12-medium imp-medium">
								<div id="content">

									<!-- Content -->
										<article>

                                            <?= $this->fetch('content') ?>

										</article>

								</div>
							</div>
						</div>
					</div>
				</div>

			<!-- Footer -->
				<div id="footer-wrapper">
					<footer id="footer" class="container">
						<div class="row">
							<div class="col-3 col-6-medium col-12-small">

								<!-- Links -->
									<section class="widget links">
										<h3>Random Stuff</h3>
										<ul class="style2">
											<li><a href="#">Etiam feugiat condimentum</a></li>
											<li><a href="#">Aliquam imperdiet suscipit odio</a></li>
											<li><a href="#">Sed porttitor cras in erat nec</a></li>
											<li><a href="#">Felis varius pellentesque potenti</a></li>
											<li><a href="#">Nullam scelerisque blandit leo</a></li>
										</ul>
									</section>

							</div>
							<div class="col-3 col-6-medium col-12-small">

								<!-- Links -->
									<section class="widget links">
										<h3>Random Stuff</h3>
										<ul class="style2">
											<li><a href="#">Etiam feugiat condimentum</a></li>
											<li><a href="#">Aliquam imperdiet suscipit odio</a></li>
											<li><a href="#">Sed porttitor cras in erat nec</a></li>
											<li><a href="#">Felis varius pellentesque potenti</a></li>
											<li><a href="#">Nullam scelerisque blandit leo</a></li>
										</ul>
									</section>

							</div>
							<div class="col-3 col-6-medium col-12-small">

								<!-- Links -->
									<section class="widget links">
										<h3>Random Stuff</h3>
										<ul class="style2">
											<li><a href="#">Etiam feugiat condimentum</a></li>
											<li><a href="#">Aliquam imperdiet suscipit odio</a></li>
											<li><a href="#">Sed porttitor cras in erat nec</a></li>
											<li><a href="#">Felis varius pellentesque potenti</a></li>
											<li><a href="#">Nullam scelerisque blandit leo</a></li>
										</ul>
									</section>

							</div>
							<div class="col-3 col-6-medium col-12-small">

								<!-- Contact -->
									<section class="widget contact">
										<h3>Contact Us</h3>
										<ul>
											<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
											<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
											<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
											<li><a href="#" class="icon brands fa-dribbble"><span class="label">Dribbble</span></a></li>
											<li><a href="#" class="icon brands fa-pinterest"><span class="label">Pinterest</span></a></li>
										</ul>
										<p>1234 Fictional Road<br />
										Nashville, TN 00000<br />
										(800) 555-0000</p>
									</section>

							</div>
						</div>
						<div class="row">
							<div class="col-12">
								<div id="copyright">
									<ul class="menu">
										<li>&copy; Untitled. All rights reserved</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
									</ul>
								</div>
							</div>
						</div>
					</footer>
				</div>

			</div>

		<!-- Scripts -->

			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
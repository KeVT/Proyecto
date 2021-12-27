<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Http\Exception\NotFoundException;

$this->layout = false;

if (!Configure::read('debug')) :
    throw new NotFoundException(
        'Please replace src/Template/Pages/home.ctp with your own version or re-enable debug mode.'
    );
endif;

$cakeDescription = 'CakePHP: the rapid development PHP framework';
?>
<!DOCTYPE HTML>
<!--
	Verti by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Electro by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<?= $this->Html->css('main') ?>
	</head>
	<body class="is-preload homepage">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header-wrapper">
					<header id="header" class="container">

						<!-- Logo -->
							<div id="logo">
								<h1><?= $this->Html->link('Electro', 'pages/home'); ?></h1>
								<span>by HTML5 UP</span>
							</div>

						<!-- Nav -->
							<nav id="nav">
								<ul>
									<li class="current"><?= $this->Html->link('Home', ['controller' => 'products', 'action' => 'index', '_full' => true]); ?></li>			
									<li><?= $this->Html->link('Linea Blanca', ['controller' => 'blanca', 'action' => 'index', '_full' => true]); ?></li>
									<li><?= $this->Html->link('Audio', ['controller' => 'audio', 'action' => 'index', '_full' => true]); ?></li>
									<li><?= $this->Html->link('Televisores', ['controller' => 'televisor', 'action' => 'index', '_full' => true]); ?></li>
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

			<!-- Banner -->
				<div id="banner-wrapper">
					<div id="banner" class="box container">
						<div class="row">
							<div class="col-7 col-12-medium">
								<h2>Hola. Bienvenido a Electro</h2>
								<p>Esta es una tienda de electrodomésticos para el hogar</p>
							</div>
							<div class="col-5 col-12-medium">
								<ul>
									<li><?= $this->Html->link('Vamos', 'pages/home',['class'=>'button large icon solid']); ?> </li>
									<li><?= $this->Html->link('Más información', 'pages/home',['class'=>'button alt large icon solid']); ?> </li>
								</ul>
							</div>
						</div>
					</div>
				</div>

			<!-- Features -->
				<div id="features-wrapper">
					<div class="container">
						<div class="row">
							<div class="col-4 col-12-medium">

								<!-- Box -->
									<section class="box feature">
										<div class="inner">
											<header>
												<h2><?= $this->Html->link('Linea Blanca', ['controller' => 'blanca', 'action' => 'index', '_full' => true]); ?></h2>
												<p>Electrodomésticos y tecnología</p>
											</header>
											<?= $this->Html->image('linea-blanca.jpg', array('width'=>370,'height'=>250), ['alt'=>'']);?>

											<p>Encuentra refrigeradoras, cocinas, hornos, lavadoras y mucho más.</p>
										</div>
									</section>

							</div>
							<div class="col-4 col-12-medium">

								<!-- Box -->
									<section class="box feature">
										<div class="inner">
											<header>
												<h2><?= $this->Html->link('Audio', ['controller' => 'audio', 'action' => 'index', '_full' => true]); ?></h2>
												<p>Equipos de sonido y minicomponentes</p>
											</header>
											<?= $this->Html->image('audio.jpg', array('width'=>370,'height'=>250), ['alt'=>'']);?>

											<p>Descubre los mejores equipos de sonido y escucha tu música preferida.</p>
										</div>
									</section>

							</div>
							<div class="col-4 col-12-medium">

								<!-- Box -->
									<section class="box feature">
										<div class="inner">
											<header>
												<h2><?= $this->Html->link('Televisores', ['controller' => 'televisor', 'action' => 'index', '_full' => true]); ?></h2>
												<p>Smart TV, QLED, OLED</p>
											</header>
											<?= $this->Html->image('televisor.jpg', array('width'=>370,'height'=>250), ['alt'=>'']);?>

											<p>Encuentra televisores de marcas reconocidas a los mejores .</p>
										</div>
									</section>

							</div>
						</div>
					</div>
				</div>

			<!-- Main -->
				<div id="main-wrapper">
					<div class="container">
						<div class="row gtr-200">
							<div class="col-4 col-12-medium">

								<!-- Sidebar -->
									<div id="sidebar">
										<section class="widget thumbnails">
											<h3>Interesting stuff</h3>
											<div class="grid">
												<div class="row gtr-50">
													<div class="col-6"><a href="#" class="image fit"><img src="images/pic04.jpg" alt="" /></a></div>
													<div class="col-6"><a href="#" class="image fit"><img src="images/pic05.jpg" alt="" /></a></div>
													<div class="col-6"><a href="#" class="image fit"><img src="images/pic06.jpg" alt="" /></a></div>
													<div class="col-6"><a href="#" class="image fit"><img src="images/pic07.jpg" alt="" /></a></div>
												</div>
											</div>
											<a href="#" class="button icon fa-file-alt">More</a>
										</section>
									</div>

							</div>
							<div class="col-8 col-12-medium imp-medium">

								<!-- Content -->
									<div id="content">
										<section class="last">
											<h2>So what's this all about?</h2>
											<p>This is <strong>Verti</strong>, a free and fully responsive HTML5 site template by <a href="http://html5up.net">HTML5 UP</a>.
											Verti is released under the <a href="http://html5up.net/license">Creative Commons Attribution license</a>, so feel free to use it for any personal or commercial project you might have going on (just don't forget to credit us for the design!)</p>
											<p>Phasellus quam turpis, feugiat sit amet ornare in, hendrerit in lectus. Praesent semper bibendum ipsum, et tristique augue fringilla eu. Vivamus id risus vel dolor auctor euismod quis eget mi. Etiam eu ante risus. Aliquam erat volutpat. Aliquam luctus mattis lectus sit amet phasellus quam turpis.</p>
											<a href="#" class="button icon solid fa-arrow-circle-right">Continue Reading</a>
										</section>
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
									<section class="widget contact last">
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

		<?= $this->Html->script(['assets/js/jquery.min.js', 'assets/js/jquery.dropotron.min.js', 'assets/js/browser.min.js'
                                     ,'assets/js/breakpoints.min.js','assets/js/util.js','assets/js/main.js']);?>

	</body>
</html>
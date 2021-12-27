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
		<!--<link rel="stylesheet" href="assets/css/main.css" />-->
	</head>
	<body class="is-preload homepage">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header-wrapper">
					<header id="header" class="container">

						<!-- Logo -->
							<div id="logo">
                                <h1><?= $this->Html->link('Electro', 'pages/home'); ?></h1>
								<span>Audio</span>
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

			<!-- Features -->
				<div id="features-wrapper">
					<div class="container">
						<div class="row">
							<div class="col-4 col-12-medium">

								<!-- Box -->
									<section class="box feature">
										<div class="inner">
											<header>
												<h2>Equipo de Sonido SONY</h2>
												<p>SONY Equipo de Sonido DVD Karaoke HCDSHAKEX10. Que empiece la fiesta</p>
											</header>
											<?= $this->Html->image('equipo1.jpg', array('width'=>370,'height'=>250), ['alt'=>'']);?>
											<p>s/. 1,999.00</p>
										</div>
									</section>

							</div>
							<div class="col-4 col-12-medium">

								<!-- Box -->
									<section class="box feature">
										<div class="inner">
											<header>
												<h2>Equipo de Sonido SONY</h2>
												<p>Equipo de Sonido Sony MHC-V73D Bluetooth Karaoke HDMI</p>
											</header>
											<?= $this->Html->image('equipo2.jpg', array('width'=>370,'height'=>250), ['alt'=>'']);?>
											<p>s/. 2,199.00</p>
										</div>
									</section>

							</div>
							<div class="col-4 col-12-medium">

								<!-- Box -->
									<section class="box feature">
										<div class="inner">
											<header>
												<h2>Minicomponente LG</h2>
												<p>LG Minicomponente XBOOM CL88 2900W</p>
											</header>
											<?= $this->Html->image('mini.jpg', array('width'=>370,'height'=>250), ['alt'=>'']);?>
											<p>s/. 1,549.00</p>
										</div>
									</section>
							</div>
							<div class="col-4 col-12-medium">

								<!-- Box -->
									<section class="box feature">
										<div class="inner">
											<header>
												<h2>Equipo de Sonido Panasonic</h2>
												<p>Panasonic Equipo de Sonido SC-MAX6500 4000W</p>
											</header>
											<?= $this->Html->image('equipo4.jpg', array('width'=>370,'height'=>250), ['alt'=>'']);?>
											<p>s/. 2,349.00</p>
										</div>
									</section>

							</div>
							<div class="col-4 col-12-medium">

								<!-- Box -->
									<section class="box feature">
										<div class="inner">
											<header>
												<h2>Minicomponente SONY</h2>
												<p>Mini Componente Sony Modelo HCDSHAKEX30MLA9</p>
											</header>
											<?= $this->Html->image('equipo5.jpg', array('width'=>370,'height'=>250), ['alt'=>'']);?>
											<p>s/. 2,199.00</p>
										</div>
									</section>

							</div>
							<div class="col-4 col-12-medium">

								<!-- Box -->
									<section class="box feature">
										<div class="inner">
											<header>
												<h2>Equipo de Sonido SONY</h2>
												<p>Equipo de Sonido V82D Bluetooth Karaoke HDMI</p>
											</header>
											<?= $this->Html->image('equipo6.jpg', array('width'=>370,'height'=>250), ['alt'=>'']);?>
											<p>s/. 1,499.00</p>
										</div>
									</section>

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
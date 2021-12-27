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
								<span>Televisores</span>
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
											<h2>Smart TV PHILIPS</h2>
											<p>TELEVISOR PHILIPS LED FULL HD 43" SMART TV 43PFD6825</p>
										</header>
										<?= $this->Html->image('smart1.jpg', array('width'=>370,'height'=>250), ['alt'=>'']);?>
										<p>s/. 1,499.00</p>
									</div>
								</section>

							</div>	
							<div class="col-4 col-12-medium">

							<!-- Box -->
								<section class="box feature">
									<div class="inner">
										<header>
											<h2>Smart TV SONY</h2>
											<p>Televisor inteligente de 40 pulgadas LED, FHD de 1080P (modelo 2019) : Electrónica</p>
										</header>
										<?= $this->Html->image('smart2.jpg', array('width'=>370,'height'=>250), ['alt'=>'']);?>
										<p>s/. 1,199.00</p>
									</div>
								</section>

							</div>	
							<div class="col-4 col-12-medium">

							<!-- Box -->
								<section class="box feature">
									<div class="inner">
										<header>
											<h2>Smart TV LG</h2>
											<p>LG UHD 65" SMART TV AI 65UM7400</p>
										</header>
										<?= $this->Html->image('smart3.jpg', array('width'=>370,'height'=>250), ['alt'=>'']);?>
										<p>s/. 3,199.95</p>
									</div>
								</section>

							</div>	
							<div class="col-4 col-12-medium">

							<!-- Box -->
								<section class="box feature">
									<div class="inner">
										<header>
											<h2>QLED Samsung</h2>
											<p>Televisor Samsung Smart TV 65"QLED 4K Q7OA 2021</p>
										</header>
										<?= $this->Html->image('qled1.jpg', array('width'=>370,'height'=>250), ['alt'=>'']);?>
										<p>s/. 6,199.00</p>
									</div>
								</section>

							</div>	
							<div class="col-4 col-12-medium">

							<!-- Box -->
								<section class="box feature">
									<div class="inner">
										<header>
											<h2>QLED Samsung</h2>
											<p>Televisor Samsung Smart Tv 50" Q60A QLED 4K 2021</p>
										</header>
										<?= $this->Html->image('qled2.jpg', array('width'=>370,'height'=>250), ['alt'=>'']);?>
										<p>s/. 5,199.00</p>
									</div>
								</section>

							</div>	
							<div class="col-4 col-12-medium">

							<!-- Box -->
								<section class="box feature">
									<div class="inner">
										<header>
											<h2>QLED Samsung</h2>
											<p>TELEVISOR SAMSUNG NEO QLED 4K ULTRA HD 75" SMART TV QN75QN85AAGXPE</p>
										</header>
										<?= $this->Html->image('qled3.jpg', array('width'=>370,'height'=>250), ['alt'=>'']);?>
										<p>s/. 9,999.00</p>
									</div>
								</section>

							</div>	
							<div class="col-4 col-12-medium">

							<!-- Box -->
								<section class="box feature">
									<div class="inner">
										<header>
											<h2>OLED LG</h2>
											<p> TELEVISOR LG OLED 4K ULTRA HD 55" SMART TV OLED55A1PSA (2021)</p>
										</header>
										<?= $this->Html->image('oled1.jpg', array('width'=>370,'height'=>250), ['alt'=>'']);?>
										<p>s/. 4,099.00</p>
									</div>
								</section>

							</div>	
							<div class="col-4 col-12-medium">

							<!-- Box -->
								<section class="box feature">
									<div class="inner">
										<header>
											<h2>OLED LG</h2>
											<p>TELEVISOR LG OLED 4K ULTRA HD 65" SMART TV OLED65C1PSA (2021)</p>
										</header>
										<?= $this->Html->image('oled2.jpg', array('width'=>370,'height'=>250), ['alt'=>'']);?>
										<p>s/. 7,499.00</p>
									</div>
								</section>

							</div>	
							<div class="col-4 col-12-medium">

							<!-- Box -->
								<section class="box feature">
									<div class="inner">
										<header>
											<h2>OLED SONY</h2>
											<p>TV SONY 65" Pulgadas 163 cm 65A8F4KIn 4K-UHD OLED Plano Sm</p>
										</header>
										<?= $this->Html->image('oled3.jpg', array('width'=>370,'height'=>250), ['alt'=>'']);?>
										<p>s/. 8,499.90</p>
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
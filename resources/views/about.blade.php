<!DOCTYPE HTML>
<html>
	<head>
		<title>Ureckon | About</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="css/about.css" />
		<link rel="stylesheet" href="css/spinner.css" />
		<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">

	</head>
	<body>
		<!-- Spinner -->
		<div class="cxq-spinner cxq-spinner--doubleBounce">
			<div class="cxq-spinner-hexagon cxq-spinner-hexagon-1"></div>
			<div class="cxq-spinner-hexagon cxq-spinner-hexagon-2 "></div>
		</div>
		<!-- Header -->
			<header id="header">
				<div class="logo">
					<img src="images/logo_icon_white.svg" alt="" height="100" style="margin-bottom: 3em;"> <br>
					<a href="#">About Us</a>
				</div>
			</header>

		<!-- Main -->
			<section id="main">
				<div class="inner">

				<!-- One -->
					<section id="one" class="wrapper style1">
						<div class="content">
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, animi pariatur dolor asperiores incidunt in repudiandae dolore. Veritatis enim reprehenderit unde recusandae quia sit nihil omnis impedit, quidem animi iure libero rerum quisquam delectus! Rerum, voluptates atque architecto nihil quidem dolorum corporis sit nesciunt. Voluptas aspernatur hic, odit quo, sequi recusandae fugiat possimus pariatur consequatur ea quasi cupiditate maiores nemo excepturi, magni optio in dicta voluptatum dolor! Perspiciatis ea dolorem eius veniam fugiat voluptatibus numquam aperiam repudiandae architecto voluptatum! Sint odio, alias maiores sapiente ut expedita voluptate rerum in tenetur? Illum voluptas alias rerum explicabo nulla odit veniam neque ad accusamus veritatis officia, necessitatibus voluptates ipsa maxime placeat quaerat rem voluptate suscipit. Nisi vitae laborum vel distinctio omnis at unde corporis praesentium velit minus molestiae dolor a, officiis quas dolorem odit optio? Assumenda minus enim minima blanditiis rem magni. Cum consequuntur aspernatur quidem? Assumenda fugiat possimus debitis, commodi voluptate quaerat temporibus cumque mollitia impedit unde quas omnis suscipit iure explicabo quam? Voluptate accusamus quo iusto. Mollitia doloremque sequi fugiat deserunt assumenda blanditiis eveniet, magni ullam earum laboriosam quia enim, optio dolorum voluptatem! Quo eius cupiditate aut eaque culpa itaque. A, dolor! Vero vel blanditiis quia odio. Doloremque veritatis porro recusandae, pariatur corporis aliquam ab delectus hic totam. Perferendis labore nulla dolorum tenetur eos illo consequatur aperiam incidunt odio veniam? Dolores id, ducimus fuga, dolor est sed cum aperiam velit numquam culpa assumenda nostrum fugiat atque minima optio voluptas at delectus magnam possimus eligendi quia, praesentium quam iure! Pariatur culpa temporibus voluptatem odio libero illo id placeat perspiciatis obcaecati porro? Reiciendis, excepturi maiores quia assumenda dolorem necessitatibus illum earum aperiam sed sequi fugit eligendi aut cupiditate commodi tempore eius minus, error nulla, quod laboriosam similique delectus ipsam placeat. Deserunt exercitationem cum voluptate porro quibusdam debitis itaque animi sunt error, laudantium illum.</p>
							<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magni, tempora quo laboriosam velit ex, debitis illo rerum suscipit commodi maiores porro labore doloremque asperiores odio unde sapiente sint accusantium cupiditate voluptates quisquam possimus nisi eius. Repellat similique minus, distinctio architecto atque alias, eaque odio tenetur pariatur, totam repudiandae sed autem veritatis nulla. Dolorem fugiat quo, quod ad aperiam commodi modi numquam rerum unde minus molestias cumque optio laborum nulla fugit et velit error culpa perspiciatis necessitatibus. Cum et corporis culpa aperiam deserunt excepturi inventore quas cumque, accusamus quos vitae magni quam! Commodi quas perferendis deserunt ipsa iusto hic voluptatem quam.</p>
						</div>
					</section>


				</div>
			</section>

		<!-- Footer -->
			<footer id="footer">
				<div class="container">
					<ul class="icons">
						<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
					</ul>
				</div>
				<div class="copyright">
					&copy; Ureckon. All rights reserved.
				</div>
			</footer>

		<!-- Scripts -->
			<script src="js/jquery.min.js"></script>
			<script src="js/jquery.poptrox.min.js"></script>
			<script src="js/skel.min.js"></script>
			<script src="js/util.js"></script>
			<script src="js/about.js"></script>
			
			<!-- Spinner Script -->
			<script>
				$(document).ready(function () {
						$("#header, #main, #footer").hide();
						$("body").css("background-color", "#fff");
						setTimeout(() => {
							$(".cxq-spinner").hide();
							$("body").css("background-color", "#1e1f23");
							$("#header, #main, #footer").fadeIn(1000);
						}, 3000);
					});		
			
			
			</script>

	</body>
</html>
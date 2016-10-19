<!DOCTYPE html>

<?php
    // First we execute our common code to connection to the database and start the session
    require("common.php");
?>
	<html>

	<head>
		<title>EMBRYO</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="_style/style.css" />

		<meta property="og:site_name" content="Embryo" />
		<meta property="fb:admins" content="10205717113545595" />
		<meta property="og:type" content="website" />
		<meta property="og:image" content="_img/logo.png" />
		<meta property="og:url" content="http://clementschmouker.be" />
		<meta property="og:title" content="Embryo" />
		<meta property="og:description" content="Developpons-nous ensemble" />

		<link rel="shortcut icon" href="_img/favicon.ico" type="image/x-icon">
		<link rel="icon" href="_img/favicon.ico" type="image/x-icon">



		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

	</head>

	<body>
		<!-- Navigation -->
		<nav>
	<ul>
		<li><a class="nav__element nav__element--logo" href="index.php">Embryo</a></li>
		<li class="nav__element nav__element--empty"></li>
		<li><a class="nav__element nav__element--link onPage" href="index.php">Accueil</a></li>
		<li><a href="private.php" class="nav__element nav__element--link">Posts</a></li>
		<li>
			<a href="edit_account.php" class="nav__element nav__element--link">
				<?php
					if(empty($_SESSION['user']))
					{
							echo"Login";
						}
					else
					{
						echo htmlentities($_SESSION['user']['username'], ENT_QUOTES, 'UTF-8'); //protect script injection via name
					}
				?>
			</a>
		</li>
		<?php
                        if(empty($_SESSION['user']))
                        {
                                echo" ";

                            }
                        else
                        {
							if ($_SESSION['user']['admin'] == 1) {
                            echo"<li><a href='admin.php' class='nav__element nav__element--link'>Admin</a></li>";
                        	}
                        	echo"<li><a href='logout.php' class='nav__element nav__element--link'>Logout</a></li>";
                        }
                    ?>
	</ul>
</nav>
		<!-- Header -->
		<header class="header">
			<div class="container">
				<h1 class="header__title">Embryo</h1>
				<h2 class="header__sub">Développons-nous ensemble</h2>
				<ul class="header__schedule">
					<li>Prochain atelier :</li>
					<li>Mardi 17/10</li>
					<li>8h40 - 9h40</li>
					<li><a href="#" class="presenceValidation">Je viens</a></li>
				</ul>
				<ul class="header__buttons">
					<li><a href="https://www.dropbox.com/sh/lvzqi7jit7i40iy/AACpwZ2Pz1VJxyP1y9vfxSYra?dl=0" class="button button--light">Dossier Dropbox</a></li>
					<li><a href="post.php" class="button button--light">Poster un message</a></li>
				</ul>

			</div>
		</header>
		<!-- Main Content -->
		<main class="mainContent">
			<?php
				include("news.php");
			?>
		</main>
		<!-- Footer -->
		<footer>
			<p>Réalisé par Clément Schmouker et Robin Devouge</p>
		</footer>

		<!-- Script Insertion -->
<!--
		<script src="_js/jquery-1.11.2.min.js"></script>
		<script src="_js/main.js"></script>
-->

	</body>

	</html>

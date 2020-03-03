<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8"/>
		<meta
		name="viewport" content="width=device-width, initial-scale=1.0"/>
		<!-- Framework -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" crossorigin="anonymous"/>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.min.css"/>
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Questrial&display=swap"/>
		<link
		rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"/>
		<!--FavIcon-->
		<link
		rel="shortcut icon" href="./component/img/favicon/8074modele-bon-de-livraison.ico">
		<!-- Mon CSS -->
		<link rel="stylesheet" href="./component/css/style.css">
		<title>Gestion de Stock</title>
	</head>
	<body>
		<!-- Menu -->
		<div class="navi">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
					<a class="navbar-brand" href="#">
						<i class="fas fa-home"></i>
					</a>
					<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
						<li class="nav-item">
							<a class="nav-link" href="#">
								Contacter l'admin
							</a>
						</li>
					</ul>
					<button class="btn btn-dark my-2 my-sm-0 mr-sm-2" type="text">
						Connexion
					</button>
					<button class="btn btn-dark my-2 my-sm-0 mr-sm-2" type="text">
						Inscription
					</button>
				</div>
			</nav>
		</div>
		<!-- S'identifier -->
		<div id="corp">
			<form class="form-signin">
				<h1 class="h3 mb-3 font-weight-normal">Acces Stock</h1>
				<figure><img src="./component/img/gestionStock.jpg" alt="icone de gestion du stock" width="150" height="111"></figure>
				<label for="inputEmail" class="sr-only">Adresse Email</label>
				<input type="email" id="inputEmail" name="mail" value="" class="form-control" placeholder="Adresse Email" required autofocus/>
				<label for="inputPassword" class="sr-only">Mot de passe</label>
				<input type="password" id="inputPassword" name="mdp" value="" class="form-control" placeholder="Mot de passe" required/>
				<div class="checkbox mb-3">
					<label>
						<input type="checkbox" value="remember-me"/>
						Se souvenir
					</label>
				</div>
				<button class="btn btn-lg btn-dark btn-block" type="submit">
					Connexion
				</button>
			</form>
		</div>

		<!-- Script -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" crossorigin="anonymous"></script>
		<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	</body>
</html>
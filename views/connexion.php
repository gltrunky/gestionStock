<!-- S'identifier -->
<div class="mr-auto ml-auto m-4 text-secondary">
	<form class="form-signin" action="index.php" method="POST">
		<h1 class="mb-3 font-weight-normal text-center">Gestion Stock</h1>
		<figure class="text-center"><img src="../component/img/gestionStock.jpg" alt="icone de gestion du stock" width="150" height="111"></figure>
		<label for="inputEmail" class="sr-only">Adresse Email</label>
		<input type="email" id="inputEmail" name="mail" value="" class="form-control" placeholder="Adresse Email" required autofocus />
		<label for="inputPassword" class="sr-only">Mot de passe</label>
		<input type="password" id="inputPassword" name="mdp" value="" class="form-control" placeholder="Mot de passe" required />
		<div class="checkbox mb-3">
			<label>
				<input type="checkbox" value="remember-me" />
				Se souvenir
			</label>
		</div>
		<button class="btn btn-lg btn-dark btn-block" type="submit">
			Connexion
		</button>
	</form>
	<!-- <a class="text-decoration-none" href="index.php?inscription=1">
		<button class="btn btn-lg btn-dark btn-block" type="text">
			S'inscrire
		</button>
	</a> -->
</div>
<?php
// appel du header et footer
require_once("header.php");
?>
<!-- S'identifier -->
<div id="connexion">
	<form class="form-signin">
		<h1 class="h3 mb-3 font-weight-normal">Acces Stock</h1>
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
</div>
<?php
require_once("footer.php");

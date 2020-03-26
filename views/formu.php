<!-- Formulaire -->
<div class="mr-auto ml-auto m-4 text-secondary">
    <form class="form-signin">
        <h1 class="mb-3 font-weight-normal text-center">Inscription</h1>
        <figure class="text-center"><img src="../component/img/gestionStock.jpg" alt="icone de gestion du stock" width="150" height="111"></figure>
        <label for="nom" class="sr-only">Nom</label>
        <input type="text" id="nom" name="nom" value="" class="form-control" placeholder="Votre Nom" required autofocus />
        <label for="prenom" class="sr-only">Prenom</label>
        <input type="text" id="prenom" name="prenom" value="" class="form-control" placeholder="Votre Prenom" required />
        <label for="inputEmail" class="sr-only">Adresse Email</label>
        <input type="email" id="inputEmail" name="mail" value="" class="form-control" placeholder="Votre Email" required />
        <label for="inputPassword" class="sr-only">Mot de passe</label>
        <input type="password" id="inputPassword" name="mdp" value="" class="form-control" placeholder="Votre Mot de passe" required />
        <button class="btn btn-lg btn-dark btn-block" type="submit">
            Inscription
        </button>
    </form>
</div>
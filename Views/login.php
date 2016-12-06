<?php $this->title = "Connexion"; ?>

<img id="logo" src=<?php ROOTDIR ?>"/m2l/Web/img/commun/logo.png">

<!-- 	<h1>MAISON DES LIGUES DE LORRAINE</h1>
	<h2>GESTIONNAIRE DE FORMATIONS</h2>
 -->
<div id="modal-connexion" class="active">
    <form action=<?php ROOTDIR ?>"/m2l/index.php?controller=security&action=index" method="post">
        <h3>SE CONNECTER</h3>
        <label for="connexion-id"><input type="text" name="connexion-id" placeholder="Identifiant"></label>
        <label for="connexion-password"><input type="password" name="connexion-password" placeholder="Password"></label>
        <p class="text-align-right">mot de passe oublié ?</p>
        <input type="submit" value="connexion" class="btn-cta">
    </form>
</div>

<div id="modal-password">
    <form action=<?php ROOTDIR ?>"/m2l/index.php?controller=security&action=forget" method="post">
        <h3>Mot de passe oublié ?</h3>
        <p class="text-modal">Veuillez entrer votre email ci-dessous, un email vous sera envoyé afin de modifier votre mot de passe.</p>
        <label for="connexion-id"><input type="text" name="connexion-id" placeholder="Entrer votre email"></label>
        <p class="text-align-right">Oups, revenir en arrière</p>
        <input type="submit" value="Envoyer" class="btn-cta">
    </form>
</div>

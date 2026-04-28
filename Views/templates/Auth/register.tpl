<h2>Inscription</h2>

<form action="index.php?page=auth&action=register" method="post">
    <input type="email" name="mail" placeholder="Email" required>
    <input type="password" name="mdp" placeholder="Mot de passe" required>
    <input type="text" name="url" placeholder="URL du site (optionnel)">
    <button type="submit">S’inscrire</button>
</form>
<p>Vous avez déjà un compte ? <a href="index.php?page=auth&action=login">Se connecter</a></p>
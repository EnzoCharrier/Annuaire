<h2>Connexion</h2>

<form action="index.php?page=auth&action=login" method="post">
    <input type="email" name="mail" placeholder="Email" required>
    <input type="password" name="mdp" placeholder="Mot de passe" required>
    <button type="submit">Se connecter</button>
</form>

<p>Pas de compte ? <a href="index.php?page=auth&action=register">Créer un compte</a></p>
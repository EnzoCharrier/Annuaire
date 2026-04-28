<?php
/* Smarty version 5.8.0, created on 2026-04-28 17:30:11
  from 'file:auth/login.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.0',
  'unifunc' => 'content_69f0eea3bb3846_87252847',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '14a565b3aac290c7aa3d75ee28ad9fa5b249eb7b' => 
    array (
      0 => 'auth/login.tpl',
      1 => 1777397408,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69f0eea3bb3846_87252847 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Users\\clara\\Documents\\Annuaire\\Views\\templates\\auth';
?><h2>Connexion</h2>
<?php if ((true && (true && null !== ($_smarty_tpl->getValue('vue')['error'] ?? null)))) {?>
    <div class="alert alert-danger"><?php echo $_smarty_tpl->getValue('vue')['error'];?>
</div>
<?php }?>
<form action="index.php?page=auth&action=login" method="post">
    <input type="email" name="mail" placeholder="Email" required>
    <input type="password" name="mdp" placeholder="Mot de passe" required>
    <button type="submit">Se connecter</button>
</form>

<p>Pas de compte ? <a href="index.php?page=auth&action=register">Créer un compte</a></p><?php }
}

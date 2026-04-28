<?php
/* Smarty version 5.8.0, created on 2026-04-28 18:27:30
  from 'file:auth/register.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.0',
  'unifunc' => 'content_69f0fc12434a75_36609141',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '145a1b9d4ad50aa12767cb7e3933c3cbd59fdc67' => 
    array (
      0 => 'auth/register.tpl',
      1 => 1777400377,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69f0fc12434a75_36609141 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Users\\clara\\Documents\\Annuaire\\Views\\templates\\auth';
?><h2>Inscription</h2>

<form action="index.php?page=auth&action=register" method="post">
    <input type="email" name="mail" placeholder="Email" required>
    <input type="password" name="mdp" placeholder="Mot de passe" required>
    <input type="text" name="url" placeholder="URL du site (optionnel)">
    <button type="submit">S’inscrire</button>
</form>
<p>Vous avez déjà un compte ? <a href="index.php?page=auth&action=login">Se connecter</a></p><?php }
}

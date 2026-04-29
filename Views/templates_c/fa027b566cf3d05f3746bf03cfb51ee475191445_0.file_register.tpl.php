<?php
/* Smarty version 5.8.0, created on 2026-04-29 12:31:03
  from 'file:auth/register.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.0',
  'unifunc' => 'content_69f1fa077b8ee1_07116011',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fa027b566cf3d05f3746bf03cfb51ee475191445' => 
    array (
      0 => 'auth/register.tpl',
      1 => 1777465776,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69f1fa077b8ee1_07116011 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Users\\charrier\\Documents\\Annuaire\\Views\\templates\\auth';
?><h2>Inscription</h2>

<form action="index.php?page=auth&action=register" method="post">
    <input type="email" name="mail" placeholder="Email" required>
    <input type="password" name="mdp" placeholder="Mot de passe" required>
    <input type="text" name="url" placeholder="URL du site (optionnel)">
    <button type="submit">S’inscrire</button>
</form>
<p>Vous avez déjà un compte ? <a href="index.php?page=auth&action=login">Se connecter</a></p><?php }
}

<?php
/* Smarty version 5.8.0, created on 2026-04-29 12:30:43
  from 'file:auth/login.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.0',
  'unifunc' => 'content_69f1f9f31b15d4_13702665',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '450394587532c0917a76c9310b2b2b674c7f634c' => 
    array (
      0 => 'auth/login.tpl',
      1 => 1777465776,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69f1f9f31b15d4_13702665 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Users\\charrier\\Documents\\Annuaire\\Views\\templates\\auth';
?><h2>Connexion</h2>

<form action="index.php?page=auth&action=login" method="post">
    <input type="email" name="mail" placeholder="Email" required>
    <input type="password" name="mdp" placeholder="Mot de passe" required>
    <button type="submit">Se connecter</button>
</form>

<p>Pas de compte ? <a href="index.php?page=auth&action=register">Créer un compte</a></p><?php }
}

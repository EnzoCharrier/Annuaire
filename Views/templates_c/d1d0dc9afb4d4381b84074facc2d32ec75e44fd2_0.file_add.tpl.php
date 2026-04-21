<?php
/* Smarty version 5.8.0, created on 2026-04-20 14:13:55
  from 'file:categorie/add.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.0',
  'unifunc' => 'content_69e634a39043f0_20398531',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd1d0dc9afb4d4381b84074facc2d32ec75e44fd2' => 
    array (
      0 => 'categorie/add.tpl',
      1 => 1776690643,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69e634a39043f0_20398531 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Users\\clara\\Documents\\Annuaire\\Views\\templates\\categorie';
?><p><?php echo $_smarty_tpl->getValue('vue')['description'];?>
</p>
<form action="index.php?page=categorie&action=insert" method="post">
    <input type="text" name="libelle" placeholder="Votre libelle" id="libelle" maxlength="45" required="required"/> 
    <input type="submit" value="Valider">
</form><?php }
}

<?php
/* Smarty version 4.1.0, created on 2026-04-01 13:35:10
  from 'C:\Users\charrier\Documents\Annuaire\Views\templates\categorie\add.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_69cd1f0ef1f770_81019537',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4a007bb5877f6c80aa5d1cb6aeed75b4941cd00b' => 
    array (
      0 => 'C:\\Users\\charrier\\Documents\\Annuaire\\Views\\templates\\categorie\\add.tpl',
      1 => 1775047580,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_69cd1f0ef1f770_81019537 (Smarty_Internal_Template $_smarty_tpl) {
?><p><?php echo $_smarty_tpl->tpl_vars['vue']->value['description'];?>
</p>
<form action="index.php?page=categorie&action=insert" method="post">
    <input type="text" name="libelle" placeholder="Votre libelle" id="libelle" maxlength="45" required="required"/> 
    <input type="submit" value="Valider">
</form><?php }
}

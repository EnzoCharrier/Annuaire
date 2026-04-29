<?php
/* Smarty version 5.8.0, created on 2026-04-29 12:41:23
  from 'file:categorie/add.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.0',
  'unifunc' => 'content_69f1fc73ab2818_96116922',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dd4e9721aa412dc4a8ba53adcca5a4fa0497a146' => 
    array (
      0 => 'categorie/add.tpl',
      1 => 1777465776,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69f1fc73ab2818_96116922 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Users\\charrier\\Documents\\Annuaire\\Views\\templates\\categorie';
?><p><?php echo $_smarty_tpl->getValue('vue')['description'];?>
</p>
<form action="index.php?page=categorie&action=insert" method="post">
    <input type="text" name="libelle" placeholder="Votre libelle" id="libelle" maxlength="45" required="required"/> 
    <input type="submit" value="Valider">
</form><?php }
}

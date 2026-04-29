<?php
/* Smarty version 5.8.0, created on 2026-04-29 12:41:35
  from 'file:categorie/update.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.0',
  'unifunc' => 'content_69f1fc7f9cc306_71943695',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b28ebe8d39a6e7544adb9fa9b1eeef2d28c5f75a' => 
    array (
      0 => 'categorie/update.tpl',
      1 => 1777465776,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69f1fc7f9cc306_71943695 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Users\\charrier\\Documents\\Annuaire\\Views\\templates\\categorie';
?><p><?php echo $_smarty_tpl->getValue('vue')['description'];?>
</p>

<form action="index.php?page=categorie&action=update" method="post">
    <input type="hidden" name="idCategorie"  id="idCategorie" value="<?php echo $_smarty_tpl->getValue('vue')['categorie'][0]['idCategorie'];?>
" /> 
    <input type="text" name="libelle" placeholder="Votre libelle" id="libelle" value="<?php echo $_smarty_tpl->getValue('vue')['categorie'][0]['libelle'];?>
" maxlength="45" required="required"/> 
    <input type="submit" value="Valider">
</form>
<?php }
}

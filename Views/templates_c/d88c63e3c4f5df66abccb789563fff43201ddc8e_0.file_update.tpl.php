<?php
/* Smarty version 5.8.0, created on 2026-04-20 14:14:15
  from 'file:categorie/update.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.0',
  'unifunc' => 'content_69e634b761bda1_13972429',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd88c63e3c4f5df66abccb789563fff43201ddc8e' => 
    array (
      0 => 'categorie/update.tpl',
      1 => 1776690643,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69e634b761bda1_13972429 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Users\\clara\\Documents\\Annuaire\\Views\\templates\\categorie';
?><p><?php echo $_smarty_tpl->getValue('vue')['description'];?>
</p>

<form action="index.php?page=categorie&action=update" method="post">
    <input type="hidden" name="idCategorie" id="idCategorie" value="<?php echo $_smarty_tpl->getValue('vue')['categorie'][0]['idCategorie'];?>

" /> 
    <input type="text" name="libelle" placeholder="Votre libelle" id="libelle" value="<?php echo $_smarty_tpl->getValue('vue')['categorie'][0]['libelle'];?>
" maxlength="45" required="required"/> 
    <input type="submit" value="Valider">
</form>
<?php }
}

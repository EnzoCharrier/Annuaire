<?php
/* Smarty version 4.1.0, created on 2026-04-01 13:49:07
  from 'C:\Users\charrier\Documents\Annuaire\Views\templates\categorie\update.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_69cd22539dabc1_70711729',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0e16c5a87d495a58f5f5235f4bb18de749764bd4' => 
    array (
      0 => 'C:\\Users\\charrier\\Documents\\Annuaire\\Views\\templates\\categorie\\update.tpl',
      1 => 1775047580,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_69cd22539dabc1_70711729 (Smarty_Internal_Template $_smarty_tpl) {
?><p><?php echo $_smarty_tpl->tpl_vars['vue']->value['description'];?>
</p>

<form action="index.php?page=categorie&action=update" method="post">
    <input type="hidden" name="idCategorie"  id="id" value="<?php echo $_smarty_tpl->tpl_vars['vue']->value['categorie'][0]['idCategorie'];?>
" /> 
    <input type="text" name="libelle" placeholder="Votre libelle" id="libelle" value="<?php echo $_smarty_tpl->tpl_vars['vue']->value['categorie'][0]['libelle'];?>
" maxlength="45" required="required"/> 
    <input type="submit" value="Valider">
</form>
<?php }
}

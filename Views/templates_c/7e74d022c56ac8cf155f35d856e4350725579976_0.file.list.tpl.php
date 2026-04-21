<?php
/* Smarty version 4.1.0, created on 2026-04-20 13:11:46
  from 'C:\Users\clara\Documents\Annuaire\Views\templates\Accueil\list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_69e62612bb1f56_85822478',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7e74d022c56ac8cf155f35d856e4350725579976' => 
    array (
      0 => 'C:\\Users\\clara\\Documents\\Annuaire\\Views\\templates\\Accueil\\list.tpl',
      1 => 1776690643,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_69e62612bb1f56_85822478 (Smarty_Internal_Template $_smarty_tpl) {
?><h2>Presentation du MVC</h2>
<p><?php echo $_smarty_tpl->tpl_vars['vue']->value['description'];?>
<p>
<div>
    Liste des dossiers de notre MVC:
    <ul>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['vue']->value['mvc'], 'm');
$_smarty_tpl->tpl_vars['m']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['m']->value) {
$_smarty_tpl->tpl_vars['m']->do_else = false;
?>
        <li><?php echo $_smarty_tpl->tpl_vars['m']->value;?>
</li>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
    <form action="index.php?page=analyse&action=check" method="post">
    <input type="url" name="site"  placeholder="https://example.com" pattern="https://.*" required>
    <input type="submit">
    </form>
</div>
<?php }
}

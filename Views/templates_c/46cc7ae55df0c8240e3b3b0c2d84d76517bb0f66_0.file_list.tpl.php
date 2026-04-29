<?php
/* Smarty version 5.8.0, created on 2026-04-29 13:38:25
  from 'file:categorie/list.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.0',
  'unifunc' => 'content_69f209d1e4c6e9_44813509',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '46cc7ae55df0c8240e3b3b0c2d84d76517bb0f66' => 
    array (
      0 => 'categorie/list.tpl',
      1 => 1777469106,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69f209d1e4c6e9_44813509 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Users\\charrier\\Documents\\Annuaire\\Views\\templates\\categorie';
?><nav>
        <ul>
            <li>
                <a href="index.php?page=site&action=list"> Mes Sites </a>
           </li>
            <li>
                <a href="index.php?page=categorie&action=list">Mes Categories </a>
           </li>
           <li>
                <a href="index.php?page=auth&action=logout">Deconnexion </a>
           </li>
        </ul>
    </nav>

<h2><a class="btn btn-primary" href="index.php?page=categorie&action=add">Ajouter</a></h2>
<p><?php echo $_smarty_tpl->getValue('vue')['description'];?>
<p>    
<div>
    <table class="table"><thead><tr><td>Libelle</td><td>Action</td></tr></thead>
        <tbody>
<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('vue')['categories'], 'cat');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('cat')->value) {
$foreach0DoElse = false;
?>
    <tr><td><?php echo $_smarty_tpl->getValue('cat')['libelle'];?>
<td>
        <td><a class="btn btn-primary" href="index.php?page=categorie&action=update&idCategorie=<?php echo $_smarty_tpl->getValue('cat')['idCategorie'];?>
">modification</a>
            | <a class="btn btn-danger" href="index.php?page=categorie&action=delete&idCategorie=<?php echo $_smarty_tpl->getValue('cat')['idCategorie'];?>
" onclick="return confirm('Voulez vous vraiment supprimer cette catégorie?');">
   Suppression
</a>
        </td>
    </tr>
<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
    </tbody>
    </table>
</div>
    <?php echo '<script'; ?>
>
        function sup(id){
            if(window.confirm("Voulez vous vraiment supprimer l'élément?")){
                window.location.replace("index.php?page=categorie&action=delete&id="+id);
            }
        };
        
    <?php echo '</script'; ?>
>
<?php }
}

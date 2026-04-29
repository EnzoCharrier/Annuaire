<?php
/* Smarty version 5.8.0, created on 2026-04-29 13:38:07
  from 'file:site/list.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.0',
  'unifunc' => 'content_69f209bf34e847_33003981',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '647d02288938a0b848970db839f4fe08b62a54be' => 
    array (
      0 => 'site/list.tpl',
      1 => 1777469075,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69f209bf34e847_33003981 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Users\\charrier\\Documents\\Annuaire\\Views\\templates\\site';
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

<h2>Mes sites</h2>
<p><?php echo (($tmp = $_smarty_tpl->getValue('vue')['description'] ?? null)===null||$tmp==='' ? 'Gérez vos sites web' ?? null : $tmp);?>
</p>

<a class="btn btn-primary" href="index.php?page=site&action=add">Ajouter un site</a>

<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('vue')['sites']) > 0) {?>
    <table class="table">
        <thead>
            <tr>
                <th>Titre</th>
                <th>URL</th>
                <th>Catégorie</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('vue')['sites'], 'site');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('site')->value) {
$foreach0DoElse = false;
?>
                <tr>
                    <td><?php echo $_smarty_tpl->getValue('site')['titre'];?>
</td>
                    <td><a href="<?php echo $_smarty_tpl->getValue('site')['url'];?>
" target="_blank"><?php echo $_smarty_tpl->getValue('site')['url'];?>
</a></td>
                    <td><?php echo $_smarty_tpl->getValue('site')['category_libelle'];?>
</td>
                    <td><?php echo $_smarty_tpl->getValue('site')['descriptions'];?>
</td>
                    <td>
                        <a class="btn btn-warning btn-sm" href="index.php?page=site&action=update&idSite=<?php echo $_smarty_tpl->getValue('site')['idSite'];?>
">Modifier</a>
                        <a class="btn btn-danger btn-sm" href="index.php?page=site&action=delete&idSite=<?php echo $_smarty_tpl->getValue('site')['idSite'];?>
" onclick="return confirm('Voulez-vous supprimer ce site ?');">Supprimer</a>
                    </td>
                </tr>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        </tbody>
    </table>
<?php }
}
}

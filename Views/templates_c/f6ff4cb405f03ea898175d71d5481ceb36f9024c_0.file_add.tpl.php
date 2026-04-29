<?php
/* Smarty version 5.8.0, created on 2026-04-29 12:37:12
  from 'file:site/add.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.0',
  'unifunc' => 'content_69f1fb7853f309_16304643',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f6ff4cb405f03ea898175d71d5481ceb36f9024c' => 
    array (
      0 => 'site/add.tpl',
      1 => 1777465776,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69f1fb7853f309_16304643 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Users\\charrier\\Documents\\Annuaire\\Views\\templates\\site';
?><h2>Ajouter un site</h2>

<form action="index.php?page=site&action=add" method="post">
    <div class="form-group">
        <label for="titre">Titre du site</label>
        <input type="text" name="titre" id="titre" placeholder="Titre" required>
    </div>

    <div class="form-group">
        <label for="url">URL</label>
        <input type="url" name="url" id="url" placeholder="http://example.com" required>
    </div>

    <div class="form-group">
        <label for="descriptions">Description</label>
        <textarea name="descriptions" id="descriptions" placeholder="Description du site" rows="4"></textarea>
    </div>

    <div class="form-group">
        <label for="idCategorie">Catégorie</label>
        <select name="idCategorie" id="idCategorie" required>
            <option value="">-- Sélectionnez une catégorie --</option>
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('vue')['categories'], 'cat');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('cat')->value) {
$foreach0DoElse = false;
?>
                <option value="<?php echo $_smarty_tpl->getValue('cat')['idCategorie'];?>
"><?php echo $_smarty_tpl->getValue('cat')['libelle'];?>
</option>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Ajouter</button>
    <a href="index.php?page=site&action=list" class="btn btn-secondary">Retour</a>
</form>
<?php }
}

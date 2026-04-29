<?php
/* Smarty version 5.8.0, created on 2026-04-29 12:38:39
  from 'file:site/update.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.0',
  'unifunc' => 'content_69f1fbcf564567_72784993',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a9c9a926db23d5ce4e60c2e9176ae23ffcc9c5a4' => 
    array (
      0 => 'site/update.tpl',
      1 => 1777465776,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69f1fbcf564567_72784993 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Users\\charrier\\Documents\\Annuaire\\Views\\templates\\site';
?><h2>Modifier un site</h2>

<form action="index.php?page=site&action=update&idSite=<?php echo $_smarty_tpl->getValue('vue')['site']['idSite'];?>
" method="post">
    <div class="form-group">
        <label for="titre">Titre du site</label>
        <input type="text" name="titre" id="titre" placeholder="Titre" value="<?php echo $_smarty_tpl->getValue('vue')['site']['titre'];?>
" required>
    </div>

    <div class="form-group">
        <label for="url">URL</label>
        <input type="url" name="url" id="url" placeholder="http://example.com" value="<?php echo $_smarty_tpl->getValue('vue')['site']['url'];?>
" required>
    </div>

    <div class="form-group">
        <label for="descriptions">Description</label>
        <textarea name="descriptions" id="descriptions" placeholder="Description du site" rows="4" required><?php echo $_smarty_tpl->getValue('vue')['site']['descriptions'];?>
</textarea>
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
" <?php if ($_smarty_tpl->getValue('vue')['site']['idCategorie'] == $_smarty_tpl->getValue('cat')['idCategorie']) {?>selected<?php }?>><?php echo $_smarty_tpl->getValue('cat')['libelle'];?>
</option>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Enregistrer</button>
    <a href="index.php?page=site&action=list" class="btn btn-secondary">Annuler</a>
</form>
<?php }
}

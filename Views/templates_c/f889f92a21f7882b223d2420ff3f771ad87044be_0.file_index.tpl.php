<?php
/* Smarty version 5.8.0, created on 2026-04-29 12:30:43
  from 'file:index.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.0',
  'unifunc' => 'content_69f1f9f30b33c2_76381416',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f889f92a21f7882b223d2420ff3f771ad87044be' => 
    array (
      0 => 'index.tpl',
      1 => 1777465776,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69f1f9f30b33c2_76381416 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Users\\charrier\\Documents\\Annuaire\\Views\\templates';
?><!-- Template de base avec le moteur de template Smarty -->
<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $_smarty_tpl->getValue('vue')["titre"];?>
</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="style/style.css">
        <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"><?php echo '</script'; ?>
>
    </head>
    <body>
        <div class="container">
            <h1><?php echo $_smarty_tpl->getValue('vue')["titre"];?>
</h1>
            <?php ob_start();
echo $_smarty_tpl->getValue('tpl');
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->renderSubTemplate($_prefixVariable1, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
         
        </div>
    </body>
</html>

<?php }
}

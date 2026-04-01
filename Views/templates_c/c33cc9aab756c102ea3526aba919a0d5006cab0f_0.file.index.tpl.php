<?php
/* Smarty version 4.1.0, created on 2026-04-01 14:27:45
  from 'C:\Users\charrier\Documents\Annuaire\Views\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_69cd2b6168bd90_25173191',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c33cc9aab756c102ea3526aba919a0d5006cab0f' => 
    array (
      0 => 'C:\\Users\\charrier\\Documents\\Annuaire\\Views\\templates\\index.tpl',
      1 => 1775053656,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_69cd2b6168bd90_25173191 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Template de base avec le moteur de template Smarty -->
<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $_smarty_tpl->tpl_vars['vue']->value["titre"];?>
</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"><?php echo '</script'; ?>
>
    </head>
    <body>
    <nav>
        <ul>
            <li>
                <a href "http://127.0.0.1:8080/index.php?page=Accueil&action=check"> Accueil </a>
           </li>
            <li>
                <a href="http://127.0.0.1:8080/index.php?page=categorie&action=list"> Categorie </a>
           </li>
            
        </ul>
    </nav>
        <div class="container">
            <h1><?php echo $_smarty_tpl->tpl_vars['vue']->value["titre"];?>
</h1>
            <?php ob_start();
echo $_smarty_tpl->tpl_vars['tpl']->value;
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->_subTemplateRender($_prefixVariable1, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
         
        </div>
    </body>
</html>

<?php }
}

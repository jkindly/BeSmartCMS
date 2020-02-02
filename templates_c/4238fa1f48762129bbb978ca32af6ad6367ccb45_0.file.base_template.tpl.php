<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-02 23:24:02
  from 'D:\xampp\htdocs\besmartcms\templates\cms\base_template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e374c02032de4_18643542',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4238fa1f48762129bbb978ca32af6ad6367ccb45' => 
    array (
      0 => 'D:\\xampp\\htdocs\\besmartcms\\templates\\cms\\base_template.tpl',
      1 => 1580682241,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e374c02032de4_18643542 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<html lang="pl">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="public/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="public/css/main.css">
    <link rel="stylesheet" type="text/css" href="public/css/jquery-ui.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap&subset=latin-ext" rel="stylesheet">
    <?php echo '<script'; ?>
 src="https://kit.fontawesome.com/752157b47f.js" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <title>BeSmartCMS</title>
</head>
<body>
<nav id="cms-nav">
    <div class="card border-secondary no-radius">
        <div class="card-header ">BeSmartCMS</div>
    </div>
    <ul class="list-group">
        <li class="list-group-item list-group-item-action cms-nav-item no-radius active">
            <i class="fas fa-file-alt"></i>Strony
        </li>
        <li class="list-group-item list-group-item-action cms-nav-item no-radius">
            <i class="fas fa-palette"></i>Wygląd
        </li>
        <li class="list-group-item list-group-item-action no-radius cms-nav-item">
            <i class="fas fa-tools"></i>Ustawienia
        </li>
        <li class="list-group-item list-group-item-action no-radius cms-nav-item">
            <i class="fas fa-user-friends"></i>Użytkownicy
        </li>
        <li class="list-group-item list-group-item-action no-radius cms-nav-item">
            <i class="fas fa-tasks"></i>SEO
        </li>
    </ul>
</nav>
<div class="container">
    <div class="row">
        <div class="col-12 ml-auto mr-auto mt-5">
            <div id="first-configuration-container">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20878650295e374c02031b54_22167633', "firstUseContainer");
?>

            </div>
        </div>
    </div>
</div>



<?php echo '<script'; ?>
 src="public/js/jquery.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="public/js/bootstrap.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="public/js/first_use.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="public/js/jquery-ui.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
/* {block "firstUseContainer"} */
class Block_20878650295e374c02031b54_22167633 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'firstUseContainer' => 
  array (
    0 => 'Block_20878650295e374c02031b54_22167633',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "firstUseContainer"} */
}

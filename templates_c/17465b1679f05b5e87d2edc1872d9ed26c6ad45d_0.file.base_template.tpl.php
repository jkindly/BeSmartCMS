<?php
/* Smarty version 3.1.34-dev-7, created on 2020-01-30 18:32:32
  from 'D:\xampp\htdocs\besmartcms\templates\first_use\base_template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e331330673245_03777876',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '17465b1679f05b5e87d2edc1872d9ed26c6ad45d' => 
    array (
      0 => 'D:\\xampp\\htdocs\\besmartcms\\templates\\first_use\\base_template.tpl',
      1 => 1580405444,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e331330673245_03777876 (Smarty_Internal_Template $_smarty_tpl) {
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
    <link rel="stylesheet" type="text/css" href="public/css/first_use.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap&subset=latin-ext" rel="stylesheet">

    <title>Konfiguracja - BeSmartCMS</title>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-12 ml-auto mr-auto mt-5">
                <div id="first-configuration-container">
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12448039805e331330672b91_15601415', "firstUseContainer");
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
</body>
</html><?php }
/* {block "firstUseContainer"} */
class Block_12448039805e331330672b91_15601415 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'firstUseContainer' => 
  array (
    0 => 'Block_12448039805e331330672b91_15601415',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "firstUseContainer"} */
}

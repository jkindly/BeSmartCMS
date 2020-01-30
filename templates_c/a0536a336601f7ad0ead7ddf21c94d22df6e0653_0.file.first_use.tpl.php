<?php
/* Smarty version 3.1.34-dev-7, created on 2020-01-30 18:26:12
  from 'D:\xampp\htdocs\besmartcms\templates\base_template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e3311b48e7cd4_93436796',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a0536a336601f7ad0ead7ddf21c94d22df6e0653' => 
    array (
      0 => 'D:\\xampp\\htdocs\\besmartcms\\templates\\base_template.tpl',
      1 => 1580405161,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e3311b48e7cd4_93436796 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
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
                    <h3 class="mt-5">Wygląda na to, że to Twoje pierwsze uruchomienie BeSmartCMS!</h3>
                    <p class="mt-5">Abyśmy mogli kontynuować, potrzebujemy od Ciebie kilka niezbędnych informacji.</p>
                    <button type="button" id="btn-start" class="btn btn-danger mt-5">Rozpoczynamy!</button>
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
}

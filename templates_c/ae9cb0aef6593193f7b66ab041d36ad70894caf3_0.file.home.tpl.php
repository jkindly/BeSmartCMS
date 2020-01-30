<?php
/* Smarty version 3.1.34-dev-7, created on 2020-01-31 00:13:04
  from 'D:\xampp\htdocs\besmartcms\templates\first_use\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e33630046ac71_57789378',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ae9cb0aef6593193f7b66ab041d36ad70894caf3' => 
    array (
      0 => 'D:\\xampp\\htdocs\\besmartcms\\templates\\first_use\\home.tpl',
      1 => 1580425882,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e33630046ac71_57789378 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15175128745e33630046a3d4_11758881', "firstUseContainer");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "first_use/base_template.tpl");
}
/* {block "firstUseContainer"} */
class Block_15175128745e33630046a3d4_11758881 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'firstUseContainer' => 
  array (
    0 => 'Block_15175128745e33630046a3d4_11758881',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h3 class="mt-5">Wygląda na to, że to Twoje pierwsze uruchomienie BeSmartCMS!</h3>
    <p class="mt-5">Abyśmy mogli kontynuować, potrzebujemy od Ciebie kilka niezbędnych informacji.</p>
    <div id="btn-start" class="btn btn-danger mt-5 btn-first-use">Rozpoczynamy!</div>
<?php
}
}
/* {/block "firstUseContainer"} */
}

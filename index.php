<?php
// NOTE: Smarty has a capital 'S'
require_once('libs/smarty-3.1.34/libs/Smarty.class.php');
$smarty = new Smarty();

if (!file_exists('configs/besmartcms-config.php'))
    $smarty->display('first_use/home.tpl');
else
    $smarty->display('cms/home.tpl');
<?php

if (!defined('_PS_VERSION_')) {
    exit;
}

function upgrade_module_1_0_2($module)
{
    $module->registerHook('displayProductAdditionalInfoCustom');
    return true;
}
<?php
function upgrade_module_1_0_2($module)
{
    // // Aggiorna o aggiungi lo schema del database
    // $sql = 'CREATE TABLE IF NOT EXISTS `' . _DB_PREFIX_ . 'product_visits` (
    //         `id_product` INT(10) UNSIGNED NOT NULL,
    //         `visits` INT(10) UNSIGNED NOT NULL DEFAULT 0,
    //         PRIMARY KEY (`id_product`)
    //     ) ENGINE=' . _MYSQL_ENGINE_ . ' DEFAULT CHARSET=utf8;';

    // return Db::getInstance()->execute($sql);
    $module->createVisitsTable();
    return true;
}
 
<?php

// class Order extends OrderCore
// {
//     public function add($autodate = true, $null_values = false)
//     {
//         // Ottenere l'ID dell'ordine appena creato chiamando il metodo originale
//         $orderId = parent::add($autodate, $null_values);

//         // Ottenere l'ultimo valore di reference
//         $lastReference = (int)Db::getInstance()->getValue('SELECT MAX(`reference`) FROM `'._DB_PREFIX_.'orders`');

//         // Assegnare un nuovo valore incrementale al campo reference
//         $newReference = $lastReference + 1;
//         Db::getInstance()->update('orders', array('reference' => $newReference), 'id_order = ' . (int)$orderId);

//         return $orderId;
//     }
// }

// Class Order extends OrderCore
// {
//   public static function generateReference()
//   {
//     $last_id = Db::getInstance()->getValue('
//         SELECT MAX(id_order)
//         FROM '._DB_PREFIX_.'orders');
//     return str_pad((int)$last_id + 1, 9, '000000000', STR_PAD_LEFT);
//   }
// }


class Order extends OrderCore
{
    public static function generateReference()
    {
        $lastId = Db::getInstance()->getValue('SELECT MAX(id_order) FROM '._DB_PREFIX_.'orders');
        return str_pad((int)$lastId + 1, 9, '0', STR_PAD_LEFT);
    }
}

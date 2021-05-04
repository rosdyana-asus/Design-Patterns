<?php

class OrderDetailService
{
    public function save($orderId,  $productId)
    {
        $db = new ConnectDbWOSingleton();
        $connection = $db->getConnection();
        $connection->prepare('INSERT INTO .....');
    }
}
<?php

class OrderService
{
    public function save($orderId)
    {
        $db = new ConnectDbWOSingleton();
        $connection = $db->getConnection();
        $connection->prepare('INSERT INTO .....');
    }
}
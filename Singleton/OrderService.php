<?php

class OrderService
{
    public function save($orderId)
    {
        $db = new ConnectDbWOSingleton("localhost", "root", "password", "dbName");
        $connection = $db->getConnection();
        $inser = $connection->prepare('INSERT INTO .....');
    }
}
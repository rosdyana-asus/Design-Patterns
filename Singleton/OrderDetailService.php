<?php

class OrderDetailService
{
    public function save($orderId,  $productId)
    {
        $db = new ConnectDbWOSingleton("localhost", "root", "password", "dbName");
        $connection = $db->getConnection();
        $insert = $connection->prepare('INSERT INTO .....');  
    }
}
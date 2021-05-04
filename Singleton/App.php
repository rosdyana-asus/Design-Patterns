<?php

$order = new OrderService();
$order->save("0001");

$orderDetail = new OrderDetailService();
$orderDetail->save("0001", "P01");
$orderDetail->save("0001", "P02");
$orderDetail->save("0001", "P03");
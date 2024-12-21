<?php

include_once "SafeRouteWidgetApi.php";

error_reporting(E_ALL);
ini_set('display_errors', 1);

$widgetApi = new SafeRouteWidgetApi();

// Укажите здесь свой токен
$widgetApi->setToken('bisyvqmoawldm6gz6kl3pwhh4v');
// А здесь ID магазина
$widgetApi->setShopId('79541');

$request = ($_SERVER['REQUEST_METHOD'] === 'POST')
    ? json_decode(file_get_contents('php://input'), true)
    : $_REQUEST;

$widgetApi->setMethod($_SERVER['REQUEST_METHOD']);
$widgetApi->setData(isset($request['data']) ? $request['data'] : []);

echo $widgetApi->submit($request['url']);

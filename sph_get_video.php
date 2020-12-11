<?php
require_once 'Dailymotion.php';
header('Content-Type: application/json');

$api = new Dailymotion();
$result = $api->get(
'/videos',
array('fields' => array('id', 'title', 'owner'))
);

var_dump($result);
exit;
?>

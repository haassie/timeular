<?php
require_once 'Common.php';

$client = new \Haassie\Timeular\Client($apiKey, $apiSecret);
var_dump($client->getWebhookEvents());
var_dump($client->getWebhookSubscriptions());

<?php
require_once 'Common.php';

$client = new \Haassie\Timeular\Client($apiKey, $apiSecret);
var_dump($client->getWebhookEvents());
var_dump($client->getWebhookSubscriptions());
var_dump($client->resetWebhookSubscriptions());
var_dump($client->getWebhookSubscriptions());
var_dump($client->addWebhookSubscription('timeEntryUpdated', 'https://www.example.com'));
var_dump($client->getWebhookSubscriptions());

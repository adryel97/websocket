<?php
use Ratchet\Http\HttpServer;
use Ratchet\Server\IoServer;
use Ratchet\WebSocket\WsServer;
use App\WebSocket\ServerWebSocket;
require './vendor/autoload.php';

$server = IoServer::factory(
    new HttpServer(
        new WsServer(
            new ServerWebSocket()
        )
    ),
    8081
);

$server->run();
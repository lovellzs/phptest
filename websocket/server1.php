<?php
require 'PoolSocket.php';
$server = new swoole_websocket_server("0.0.0.0", 7777);
//$server->set(['daemonize'=>true]);
//$server->set(['heartbeat_idle_time' => 600,]);
$pool_ws_clients=[];

$server->on('open', function (swoole_websocket_server $server, $request) {
    echo "server: handshake success with fd{$request->fd}\n";

//    $ps = new PoolSocket('127.0.0.1', 5555, function( $data ) use ($server , $request){
//
//        $server->push( $request->fd, $data );
//    });
//    $pool_ws[$request->fd] = $ps ;
//    $ps->start();


    $client = new swoole_client(SWOOLE_SOCK_UNIX_STREAM, SWOOLE_SOCK_ASYNC);

    $client->on("connect", function (swoole_client $cli){
//        $cli->send("GET / HTTP/1.1\r\n\r\n");
    });

    $client->on("receive", function (swoole_client $cli, $data) use($server,$request){
        echo "Receive: $data";
        $server->push($request->fd,$data);
    });

    $client->on("error", function (swoole_client $cli){
        echo "error: [" . $cli->errCode . "] " . socket_strerror($cli->errCode) . "\n";
    });

    $client->on("close", function (swoole_client $cli){
        echo "Connection close\n";
    });

    $client->connect('127.0.0.1', 5555, -1);
    $pool_ws_clients[$request->fd] = $client;


    $server->on('message', function (swoole_websocket_server $server, $frame) use ($client ){
        echo "receive from {$frame->fd}:{$frame->data},opcode:{$frame->opcode},fin:{$frame->finish}\n";
//        $client->send( $frame->data );
    });
});

$server->on('message', function (swoole_websocket_server $server, $frame) use ( $pool_ws_clients ){
//    echo "receive from {$frame->fd}:{$frame->data},opcode:{$frame->opcode},fin:{$frame->finish}\n";
//    $client = $pool_ws_clients[$frame->fd] ;
//    if( $client ){
//        $client->send( $frame->data );
//    }else{
//        sleep(3);
//        echo '$client====null';
//        $client->send( $frame->data );
//    }
});


$server->on('close', function ($ser, $fd) {
    echo "client {$fd} closed\n";
});


$server->start();

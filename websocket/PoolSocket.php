<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 2018/6/20
 * Time: 上午10:57
 */

class PoolSocket
{

    private $socket;
    public $data_callback;
    public function __construct($address='127.0.0.1' ,$port = 55555 ,$data_callback )
    {
        $this->data_callback = $data_callback;

        //创建一个socket套接流
        $this->socket = socket_create(AF_INET,SOCK_STREAM,SOL_TCP);

        socket_connect($this->socket,$address,$port);

    }

    function start(){
        do{
            /*接收客户端传过来的信息*/
//            $accept_resource = socket_accept($this->socket);
            /*socket_accept的作用就是接受socket_bind()所绑定的主机发过来的套接流*/

                /*读取客户端传过来的资源，并转化为字符串*/

            $res = socket_read($this->socket,8192,PHP_NORMAL_READ);
            echo 'server receive is :'.$res.PHP_EOL;//PHP_EOL为php的换行预定义常量
//            $this->data_callback( $res );
            $this->pool2ws($res);

        }while(true);
    }

    // Trans PoolSocket  to WebSocket
    function pool2ws($data) {
        call_user_func_array( $this->data_callback , [$data]);
    }

    function close(){
        if(!$this->socket){
            socket_close($this->socket);
            $this->socket = null;
        }
    }

    // Trans WebSocket to PoolSocket
    function ws2pool($data) {
        socket_write($this->socket, $data,strlen($data) == false);
    }
}

//        /****************设置socket连接选项，这两个步骤你可以省略*************/
//        //接收套接流的最大超时时间1秒，后面是微秒单位超时时间，设置为零，表示不管它
//        socket_set_option($socket, SOL_SOCKET, SO_RCVTIMEO, array("sec" => 1, "usec" => 0));
//        //发送套接流的最大超时时间为6秒
//        socket_set_option($socket, SOL_SOCKET, SO_SNDTIMEO, array("sec" => 6, "usec" => 0));
//        /****************设置socket连接选项，这两个步骤你可以省略*************/


/*socket_read的作用就是读出socket_accept()的资源并把它转化为字符串*/
/*socket_close的作用是关闭socket_create()或者socket_accept()所建立的套接流*/

//console.log('[<] Response: ' + conn.pid + '\n\n' + data + '\n');
//var linesdata = data;
//var lines = String(linesdata).split("\n");
//if (lines[1].length > 0) {
//    console.log('[<] Response: ' + conn.pid + '\n\n' + lines[0] + '\n');
//    console.log('[<] Response: ' + conn.pid + '\n\n' + lines[1] + '\n')
//            pool2ws(lines[0]);
//            pool2ws(lines[1]);
//        } else {
//    console.log('[<] Response: ' + conn.pid + '\n\n' + data + '\n');
//    pool2ws(String(data));
//}
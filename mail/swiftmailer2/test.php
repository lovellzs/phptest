<?php

require_once ("lib/swift_required.php");

// 创建Transport对象，设置邮件服务器和端口号，并设置用户名和密码以供验证
$transport = Swift_SmtpTransport::newInstance('smtp.163.com', 25)
    ->setUsername('shizhe_php@163.com')
    ->setPassword('shizhe123456');

// 创建mailer对象
$mailer = Swift_Mailer::newInstance($transport);

// 创建message对象
$message = Swift_Message::newInstance();

// 设置邮件主题
$message->setSubject('这是一份测试邮件')

// 设置邮件内容,可以省略content-type
    ->setBody(
        '<html>' .
        ' <head></head>' .
        ' <body>' .
        ' Here is an image <img src="' . // 内嵌文件
        $message->embed(Swift_Image::fromPath('image.jpg')) .
        '" alt="Image" />' .
        ' Rest of message' .
        '<a href="http://www.baidu.com">百度</a>'.
        ' </body>' .
        '</html>',
        'text/html'
    );

// 创建attachment对象，content-type这个参数可以省略
$attachment = Swift_Attachment::fromPath('image.jpg', 'image/jpeg')
    ->setFilename('cool.jpg');

// 添加附件
$message->attach($attachment);

// 用关联数组设置收件人地址，可以设置多个收件人
$message->setTo(array('461815849@qq.com' => 'xifeng'));

// 用关联数组设置发件人地址，可以设置多个发件人
$message->setFrom(array(
    'shizhe_php@163.com' => 'shizhe',
));

// 添加抄送人
//$message->setCc(array(
//    'Cc@qq.com' => 'Cc'
//));

// 添加密送人
//$message->setBcc(array(
//    'Bcc@qq.com' => 'Bcc'
//));

// 设置邮件回执
//$message->setReadReceiptTo('receipt@163.com');
$message->setReadReceiptTo('shizhe_php@163.com');

// 发送邮件
$result = $mailer->send($message);

echo 'successful! ';
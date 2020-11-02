<?php

// 引入配置头文件 
include 'config.php';

$str = '我说杀啊啊哈的哈达哈我说杀啊啊哈的哈达哈我说杀啊啊哈的哈达哈我说杀啊啊哈的哈达哈我说杀啊啊哈的哈达哈我说杀啊啊哈的哈达哈我说杀啊啊哈的哈达哈我说杀啊啊哈的哈达哈我说杀啊啊哈的哈达哈我说杀啊啊哈的哈达哈';

$arr = [
    ['title'=>'这是一个标题','auth'=>'小明','ctime'=>date('Y/m/d H:i:s',time()),'desc'=>'我是一个描述','content'=>$str,'cid'=>rand(0,2),'type'=>0],
    ['title'=>'这是一个标题','auth'=>'小明','ctime'=>date('Y/m/d H:i:s',time()),'desc'=>'我是一个描述','content'=>$str,'cid'=>rand(0,2),'type'=>0],
    ['title'=>'这是一个标题','auth'=>'小明','ctime'=>date('Y/m/d H:i:s',time()),'desc'=>'我是一个描述','content'=>$str,'cid'=>rand(0,2),'type'=>0],
    ['title'=>'这是一个标题','auth'=>'小明','ctime'=>date('Y/m/d H:i:s',time()),'desc'=>'我是一个描述','content'=>$str,'cid'=>rand(0,2),'type'=>0],
    ['title'=>'这是一个标题','auth'=>'小明','ctime'=>date('Y/m/d H:i:s',time()),'desc'=>'我是一个描述','content'=>$str,'cid'=>rand(0,2),'type'=>0],
    ['title'=>'这是一个标题','auth'=>'小明','ctime'=>date('Y/m/d H:i:s',time()),'desc'=>'我是一个描述','content'=>$str,'cid'=>rand(0,2),'type'=>0],
];


$pdo = new PDO('mysql:host=localhost;dbname=myapp_data;charset=utf8','root','');

foreach($arr as $key => $value){
    // 预处理sql语句
    $stmt = $pdo->prepare('insert into articles(title,auth,ctime,desc,content,cid,type) values(:title,:auth,:ctime,:desc,:content,:cid,:type)');
    
    $stmt->execute($value);
    
}

echo 'hello world!';
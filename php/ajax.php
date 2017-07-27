<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/17
 * Time: 21:55
 */
/*if($_POST){
    $uname = $_POST['uname'];
    if($uname == 'admin'){
        echo '不能注册';
    }else{
        echo '可以注册';
    }
}

if($_GET){
    $uname = $_GET['uname'];
    echo $uname;
}*/

sleep(5);  //延时响应
$arr = "[
    {
        'title':'标题一',
        'addtime':'2017-7-20'
    },
    {
        'title':'标题二',
        'addtime':'2017-7-22'
    },
    {
        'title':'标题三',
        'addtime':'2017-7-24'
    }
]";
echo $arr;

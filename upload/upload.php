<?php
/*
 * @Explain: php文件上传
 */

header("Content-type: text/html; charset=utf-8");
//获取文件的大小
$file_size = $_FILES['myfile']['size'];
if($file_size>2*1024*1024) {
    echo "文件过大，不能上传大于2M的文件";
    exit();
}

$file_type=$_FILES['myfile']['type'];
echo $file_type;
if($file_type != "image/jpeg" && $file_type!='image/pjpeg') {
    echo "文件类型只能为jpg格式";
    exit();
}


//判断是否上传成功（是否使用post方式上传）
if(is_uploaded_file($_FILES['myfile']['tmp_name'])) {
    //把文件转存到你希望的目录（不要使用copy函数）
    $uploaded_file = $_FILES['myfile']['tmp_name'];

    //创建文件夹
    $path = $_SERVER['DOCUMENT_ROOT']."/file";
    //判断该用户文件夹是否已经有这个文件夹
    if(!file_exists($path)) {
        mkdir($path);
    }

    $file_true_name=$_FILES['myfile']['name'];
    $move_to_file=$path."/".time().rand(1,1000).substr($file_true_name,strrpos($file_true_name,"."));
    if(move_uploaded_file($uploaded_file,iconv("utf-8","gb2312",$move_to_file))) {
        echo $_FILES['myfile']['name']."上传成功";
    } else {
        echo "上传失败";
    }
} else {
    echo "上传失败";
}
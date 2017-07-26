<?php
try{
    $images = array();
    $i =0;
    $handle = opendir('./'); //当前目录
    while(false!==($file = readdir($handle))){
        list($filename,$kzm)= explode(".",$file);
        if($kzm=="gif" || $kzm=="jpg" || $kzm=="png") { //文件过滤
            if(!is_dir($file)){ //文件夹过滤
                $images[]=$file;//把符合条件的文件名存入数组
                $i++;//记录图片总张数
            }
        }
    }
    for ($j=0;$j<$i;++$j){//循环条件控制显示图片张数
        echo "<img width=60 height=60 src='".$images[$j]."'><br>";//输出图片数组
    }
}catch(Exception $e){
    echo $e->getMessage();
}
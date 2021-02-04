<?php
setlocale(LC_ALL,'en_US.UTF-8');
$dir ="./";
$file= scandir($dir);
print_r($file);

$f=1;
while($f){
    $new_arr=array("..");$f=0;
    foreach($file as $x){
    if($x=="."||$x=="..") continue;
    else if(pathinfo($x, PATHINFO_EXTENSION)==null){
    $sc= scandir($x);
    foreach($sc as $y){
    if($y!="."&&$y!="..") array_push ($new_arr,$x."/".$y);$f=1;}
    $file=$new_arr;}
    else{
        $tex = pathinfo($x, PATHINFO_EXTENSION);
   
    echo $x;
    echo "</br>";
    
    }
    }
}


?>


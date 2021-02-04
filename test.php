<!DOCTYPE html>
<html lang="en">
<head>
     <link rel="stylesheet" href="style.css">
    <style>
        
    </style>
</head>
<body>
<?php require_once 'dirdb.php' ?>
<div class="ImageGrid">
        <?php
                require_once 'dirdb.php';
                $instance = DirDb::getInstance();
                $conn = $instance->getImgDb();
                foreach ($conn as $x){
                $ni=null;
                for($u=0;$u<strlen($x);$u++)
                    if($x[$u]=='/') $ni=$u;
                $out='<div class="hold_pdf">';
                $out.=' <img class="img_inside" src="'.$x.'">';
                
                $out.='<p class="text_under">'.
               substr($x,$ni+1,min(23, strlen($x)-$ni-2- strlen(pathinfo($x, PATHINFO_EXTENSION))))
                        .'..'.'</p></div>';
                echo $out;
                }
                ?>
</div>
    
</body>
</html>

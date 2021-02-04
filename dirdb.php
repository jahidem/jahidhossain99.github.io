<?php
class DirDb{
    private static $instance= null; 
    private static $dataDb=array();
    private static $imgDb=array();
     
     
    private function __construct() {
        $this->updateDb();
    }
    public static function getInstance() {
        if(self::$instance==null){
            self::$instance=new DirDb();
        }
        return self::$instance;
        
    }
    
    public function getImgDb() {
        return self::$imgDb;
    }

    
    public function updateDb(){
        $aDataDb=array();$aImageDb=array();
         $imageExt=array("jpeg","jpg","jpe","jif","jfi","jfif",
                          "png","gif","webp","tif","tiff","psd","bmp",
                           "heif","heic","jp2","j2k","jpf","jpx","jpm","mj2",
                            "raw","arw","cr2","nrw","k25","svg","svgz");
        setlocale(LC_ALL,'en_US.UTF-8');
        $dir ="./";
         $file= scandir($dir);

    $f=1;
    while($f){
        $new_arr=array();$f=0;
        foreach($file as $x){
        if($x=="."||$x=="..") continue;
        else if(pathinfo($x, PATHINFO_EXTENSION)==null){
        $sc= scandir($x);
        foreach($sc as $y){
        if($y!="."&&$y!="..") array_push ($new_arr,$x."/".$y);$f=1;}
        $file=$new_arr;}
        else{
            $tex = pathinfo($x, PATHINFO_EXTENSION);
            if(in_array($tex, $imageExt)){
            array_push ($aImageDb,$x);}
            
            array_push ($aDataDb,$x);
            }
    }}
        self::$dataDb=$aDataDb;
        self::$imgDb=$aImageDb;
                
        }
}



?>

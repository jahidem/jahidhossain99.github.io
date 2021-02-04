<!DOCTYPE html>
<html>
<head>
	<link href='https://fonts.googleapis.com/css?family=Source Code Pro' rel='stylesheet'>
</head>
<body>
<!---NAVIGATION------->
<nav class="fixed-header">
<a href="#logo"class="logo"><span class="em">Em</span><span class="on">.ON</span> </a>
<div class="drop_down">
	<div id="ham">
		<div class="lin"></div>
		<div class="lin"></div>
		<div class="lin"></div>
	</div>
</div>
<div id="contain_nav">
<?php
if(!isset($_GET['re'])) $_GET['re']=0;
$str='<div class="boo '.activeNaki(0)
        .'"><a '.activeNaki2(0).' href="index.php?re=0">Home</a></div>';
$str.='<div class="boo '.activeNaki(1)
        .'"><a '.activeNaki2(1).' href="vdo/vdo.html?re=1">Video</a></div>';
$str.='<div class="boo '.activeNaki(2)
        .'"><a '.activeNaki2(2).' href="images.php?re=2">Images</a></div>';
$str.='<div class="boo '.activeNaki(3)
        .'"><a '.activeNaki2(3).' href="#?re=3">PDF</a></div>';
echo $str;
function activeNaki($chk){
    if($chk==$_GET['re']){
    return "active";}
    else return " ";
}

function activeNaki2($chk){
    if($chk==$_GET['re']){
    return 'class="active"';}
    else return " ";
}
?>
</div>
<div id="dropdown-content">

    <?php

$str='<div class="foo '.activeNakidrop(0)
        .'"><a '.activeNakidrop2(0).' href="index.php?re=0">Home</a></div>';
$str.='<div class="foo '.activeNakidrop(1)
        .'"><a '.activeNakidrop2(1).' href="vdo/vdo.html?re=1">Video</a></div>';
$str.='<div class="foo '.activeNakidrop(2)
        .'"><a '.activeNakidrop2(2).' href="images.php?re=2">Images</a></div>';
$str.='<div class="foo '.activeNakidrop(3)
        .'"><a '.activeNakidrop2(3).' href="#?re=3">PDF</a></div>';
echo $str;

function activeNakidrop($chk){
    if($chk==$_GET['re']){
    return "active2";}
    else return " ";
}

function activeNakidrop2($chk){
    if($chk==$_GET['re']){
    return 'class="active2"';}
    else return " ";
}
?>
</div>
</nav>

<div class="spac"></div>
<!---------------BODY-->







<!----------------SCRIPT------------>
<script>
	const dropDown = document.getElementById("dropdown-content");

	
	
	
	
	
	//hamberger
	let cn=1;
	document.getElementById("ham").onclick =  function() {myFunction()};
	function myFunction(){
	if(cn&1) dropDown.style.display="block";
	else dropDown.style.display="none";
	cn=(cn+1)%2;
	}; 
</script>
</body>
</html>

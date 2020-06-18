function revealMessage(){
    document.getElementById('hidden').style.display='block';
}
function getImage(){
    document.getElementById('img').src='images/nw.jpg';
}
function Time(){
    document.getElementById('chng').innerHTML=Date();
}
function countDownButton(){
    var curVal= document.getElementById('countButton').innerHTML;
    var Val=0;
    if(curVal>0){
        Val = curVal - 1;}
    document.getElementById('countButton').innerHTML= Val;
}
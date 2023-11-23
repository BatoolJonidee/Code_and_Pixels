let navFlag=0;
barsDiv=document.getElementById('bars-div');
barsDiv.addEventListener('click',function(){
    if(navFlag==0){
        document.getElementById('mobile-nav-div').style.display='block';
        navFlag=1;
    }else{
        document.getElementById('mobile-nav-div').style.display='none';
        navFlag=0;
    }
})
window.addEventListener('resize',function(){
    const bodyWidth = document.body.clientWidth;
    if(bodyWidth>=699.9){
        document.getElementById('mobile-nav-div').style.display='none';
    }
})

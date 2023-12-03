let heading=document.getElementById('choose-us-div-container');
let headerP=document.getElementById('choose-us-header');
let chooseDivs=document.getElementById('choose-us-inner-container')
window.onscroll=()=>{
    let top = window.scrollY;
    let offset=heading.offsetTop-500;
    height=heading.offsetHeight;
    if(top>=offset && top<offset+height){
        headerP.style.transform='translateX(0)';
        headerP.style.transition='2s';
        chooseDivs.style.transform='translateY(0)';
        chooseDivs.style.transition='2s';
    }
}
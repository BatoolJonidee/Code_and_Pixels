let heading=document.getElementById('choose-us-div-container');
let headerP=document.getElementById('choose-us-header');
let chooseDivs=document.getElementById('choose-us-inner-container')
let lastPhoHeader=document.getElementById('last-photographers-header')
let lastPhoCont=document.getElementById('newest-photographers-div-container')
window.onscroll=()=>{
    let top = window.scrollY;
    let offset=heading.offsetTop-500;
    height=heading.offsetHeight;
    if(top>=offset && top<offset+height){
        headerP.style.transform='translateX(0)';
        headerP.style.transition='1s';
        chooseDivs.style.transform='translateY(0)';
        chooseDivs.style.transition='1s';
    }
    let offsetLastPhoCont=lastPhoCont.offsetTop-500;
    height=lastPhoCont.offsetHeight;
    if(top>=offsetLastPhoCont && top<offsetLastPhoCont+height){
        lastPhoHeader.style.transform='translateX(0)';
        lastPhoHeader.style.transition='1s';
        // chooseDivs.style.transform='translateY(0)';
        // chooseDivs.style.transition='1s';
    }
}
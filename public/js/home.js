let heading=document.getElementById('choose-us-div-container');
let headerP=document.getElementById('choose-us-header');
let chooseDivs=document.getElementById('choose-us-inner-container');
let lastPhoHeader=document.getElementById('last-photographers-header');
let lastPhoCont=document.getElementById('newest-photographers-div-container');
let search=document.getElementById('search-div-container');
let span = document.querySelector('.up');
window.onscroll=()=>{
    let top = window.scrollY;
    let offset=heading.offsetTop-500;
    height=heading.offsetHeight;
    if(top>=offset && top<offset+height){
        headerP.style.transform='translateX(0)';
        headerP.style.transition='1s';
        chooseDivs.style.opacity='1';
        chooseDivs.style.transform='translateY(0)';
        chooseDivs.style.transition='1s';
    }
    let offsetLastPhoCont=lastPhoCont.offsetTop-500;
    height=lastPhoCont.offsetHeight;
    if(top>=offsetLastPhoCont && top<offsetLastPhoCont+height){
        lastPhoHeader.style.transform='translateX(0)';
        lastPhoHeader.style.transition='1s';
    }
    let offsetSearch=search.offsetTop-500;
    let heightSearch=search.offsetHeight;
    if(top>=offsetSearch && top<offsetSearch+heightSearch){
        search.style.opacity='0.8';
        search.style.transform='translateY(0)';
        search.style.transition='1s';
    }
    if(this.scrollY>=400){
        span.classList.add('show');
    }else{
        span.classList.remove('show');
    }
}
span.addEventListener('click',function(){
    window.scrollTo({
        top:0,
        behavior:"smooth",
    })
})
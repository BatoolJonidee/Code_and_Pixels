//////////////////////fname add user /////////////////////
//////////////////////fname add user /////////////////////
//////////////////////fname add user /////////////////////
//////////////////////fname add user /////////////////////

let fnameAdd=document.getElementById('fnameInput-Add-Admin');
fnameAdd.addEventListener("focus",function(){
    document.getElementById("fnamePAdd").style.display='block';
    document.getElementById("fnamePAdd").style.color='#3c8fae';

})
fnameAdd.addEventListener("blur",function(){
    let fNameRE=/[a-zA-Z]{1,}/g;
    if(fnameAdd.value.match(fNameRE)==fnameAdd.value){
        document.getElementById("fnamePAdd").style.display='none';
    }else{
        document.getElementById("fnamePAdd").style.display='block';
        document.getElementById("fnamePAdd").style.color='rgb(201, 98, 98)';
    }
})
//////////////////////lname add user /////////////////////
//////////////////////lname add user /////////////////////
//////////////////////lname add user /////////////////////
//////////////////////lname add user /////////////////////

let lnameAdd=document.getElementById('lnameInput-Add-Admin');
lnameAdd.addEventListener("focus",function(){
    document.getElementById("lnamePAdd").style.display='block';
    document.getElementById("lnamePAdd").style.color='#3c8fae';

})
lnameAdd.addEventListener("blur",function(){
    let lNameRE=/[a-zA-Z]{1,}/g;
    if(lnameAdd.value.match(lNameRE)==lnameAdd.value){
        document.getElementById("lnamePAdd").style.display='none';
    }else{
        document.getElementById("lnamePAdd").style.display='block';
        document.getElementById("lnamePAdd").style.color='rgb(201, 98, 98)';
    }
})
//////////////////////email add user /////////////////////
//////////////////////email add user /////////////////////
//////////////////////email add user /////////////////////
//////////////////////email add user /////////////////////

let emailAdd=document.getElementById('emailInput-Add-Admin');
emailAdd.addEventListener("focus",function(){
    document.getElementById("emailPAdd").style.display='block';
    document.getElementById("emailPAdd").style.color='#3c8fae';

})
emailAdd.addEventListener("blur",function(){
    let emailRE=/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
    if(emailAdd.value.match(emailRE)){
        document.getElementById("emailPAdd").style.display='none';
    }else{
        document.getElementById("emailPAdd").style.display='block';
        document.getElementById("emailPAdd").style.color='rgb(201, 98, 98)';
    }
})





let addUser=document.getElementById('Add-User-Button');
addUser.addEventListener('click',function(e){
    e.preventDefault();

})

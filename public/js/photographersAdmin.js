let firstNameFlag=0;
let lastNameFlag=0;
let emailFlag=0;
let passwordFlag=0;
let confirmPasswordFlag=0;
let descFlag=0;



//////////////////////fname add photographer /////////////////////
//////////////////////fname add photographer /////////////////////
//////////////////////fname add photographer /////////////////////
//////////////////////fname add photographer /////////////////////

let fnameAdd=document.get('fnameInput-Add-Admin');
fnameAdd.addEventListener("focus",function(){
    document.getElementById("fnamePAdd").style.display="block";
    document.getElementById("fnamePAdd").style.color='#3c8fae';
})
fnameAdd.addEventListener("blur",function(){
    let fNameRE=/[a-zA-Z]{1,}/g;
    if(fnameAdd.value.match(fNameRE)==fnameAdd.value){
        document.getElementById("fnamePAdd").style.display='none';
        firstNameFlag=1;
    }else{
        document.getElementById("fnamePAdd").style.display='block';
        document.getElementById("fnamePAdd").style.color='rgb(201, 98, 98)';
        firstNameFlag=0;
    }
})
//////////////////////lname add photographer /////////////////////
//////////////////////lname add photographer /////////////////////
//////////////////////lname add photographer /////////////////////
//////////////////////lname add photographer /////////////////////

let lnameAdd=document.getElementById('lnameInput-Add-Admin');
lnameAdd.addEventListener("focus",function(){
    document.getElementById("lnamePAdd").style.display='block';
    document.getElementById("lnamePAdd").style.color='#3c8fae';

})
lnameAdd.addEventListener("blur",function(){
    let lNameRE=/[a-zA-Z]{1,}/g;
    if(lnameAdd.value.match(lNameRE)==lnameAdd.value){
        document.getElementById("lnamePAdd").style.display='none';
        lastNameFlag=1;
    }else{
        document.getElementById("lnamePAdd").style.display='block';
        document.getElementById("lnamePAdd").style.color='rgb(201, 98, 98)';
        lastNameFlag=0;
    }
})
//////////////////////email add photographer /////////////////////
//////////////////////email add photographer /////////////////////
//////////////////////email add photographer /////////////////////
//////////////////////email add photographer /////////////////////

let emailAdd=document.getElementById('emailInput-Add-Admin');
emailAdd.addEventListener("focus",function(){
    document.getElementById("emailPAdd").style.display='block';
    document.getElementById("emailPAdd").style.color='#3c8fae';

})
emailAdd.addEventListener("blur",function(){
    let emailRE=/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
    if(emailAdd.value.match(emailRE)){
        document.getElementById("emailPAdd").style.display='none';
        emailFlag=1;
    }else{
        document.getElementById("emailPAdd").style.display='block';
        document.getElementById("emailPAdd").style.color='rgb(201, 98, 98)';
        emailFlag=0;
    }
})
//////////////////////password add photographer /////////////////////
//////////////////////password add photographer /////////////////////
//////////////////////password add photographer /////////////////////
//////////////////////password add photographer /////////////////////

let passwordAdd=document.getElementById('passwordInput-Add-Admin');
passwordAdd.addEventListener("focus",function(){
    document.getElementById("passwordPAdd").style.display='block';
    document.getElementById("passwordPAdd").style.color='#3c8fae';

})
passwordAdd.addEventListener("blur",function(){
    const upperCaseLetters = /([A-Z])/g;
    const lowerCaseLetters = /(?=.*[a-z])/g;
    const numbers = /(?=.*\d)/g;
    const special=/[!@#/?\$%\^\&*\)\(+=._-]{1,}/g;
    if(passwordAdd.value.match(upperCaseLetters) && passwordAdd.value.match(lowerCaseLetters) && passwordAdd.value.match(numbers) && passwordAdd.value.match(special) && passwordAdd.value.length>=8 && passwordAdd.value.length<=32){
        document.getElementById("passwordPAdd").style.display='none';
        passwordFlag=1;
    }else{
        document.getElementById("passwordPAdd").style.display='block';
        document.getElementById("passwordPAdd").style.color='rgb(201, 98, 98)';
        passwordFlag=0;
    }
})
//////////////////////confirm password add photographer /////////////////////
//////////////////////confirm password add photographer /////////////////////
//////////////////////confirm password add photographer /////////////////////
//////////////////////confirm password add photographer /////////////////////

let confirmAdd=document.getElementById('confirmPasswordInput-Add-Admin');
confirmAdd.addEventListener('focus',function(){
    document.getElementById("confirmPasswordPAdd").style.display='block';
    document.getElementById("confirmPasswordPAdd").style.color='#3c8fae';
})
confirmAdd.addEventListener('blur',function(){
    if(passwordAdd.value==confirmAdd.value){
        document.getElementById("confirmPasswordPAdd").style.display='none';
        confirmPasswordFlag=1;
    }else{
        document.getElementById("confirmPasswordPAdd").style.display='block';
        document.getElementById("confirmPasswordPAdd").style.color='rgb(201, 98, 98)';
        confirmPasswordFlag=0;
    }
})
//////////////////////description add photographer /////////////////////
//////////////////////description add photographer /////////////////////
//////////////////////description add photographer /////////////////////
//////////////////////description add photographer /////////////////////

let descAdd=document.getElementById('descriptionInput-Add-Admin');
descAdd.addEventListener('focus',function(){
    document.getElementById("descriptionPAdd").style.display='block';
    document.getElementById("descriptionPAdd").style.color='#3c8fae';
})
descAdd.addEventListener('blur',function(){
    if(descAdd.value==""){
        document.getElementById("descriptionPAdd").style.display='block';
        document.getElementById("descriptionPAdd").style.color='rgb(201, 98, 98)';
        descFlag=0;
    }else{
        document.getElementById("addressPAdd").style.display='none';
        descFlag=1;
    }
})
//////////////////////submit add photographer /////////////////////
//////////////////////submit add photographer /////////////////////
//////////////////////submit add photographer /////////////////////
//////////////////////submit add photographer /////////////////////
//////////////////////submit add photographer /////////////////////
//////////////////////submit add photographer /////////////////////
//////////////////////submit add photographer /////////////////////
//////////////////////submit add photographer /////////////////////

let addPhotographer=document.getElementById('Add-Photographer-Button');
addPhotographer.addEventListener('click',function(event){
    if(!(firstNameFlag && lastNameFlag && emailFlag && passwordFlag && confirmPasswordFlag && descFlag)){
        event.preventDefault();
    //fname
    //fname
    //fname
    let fNameRE=/[a-zA-Z]{1,}/g;
    if(fnameAdd.value.match(fNameRE)==fnameAdd.value){
        document.getElementById("fnamePAdd").style.display='none';
        firstNameFlag=1;
    }else{
        document.getElementById("fnamePAdd").style.display='block';
        document.getElementById("fnamePAdd").style.color='rgb(201, 98, 98)';
        firstNameFlag=0;
    }
    //lname
    //lname
    //lname
    let lNameRE=/[a-zA-Z]{1,}/g;
    if(lnameAdd.value.match(lNameRE)==lnameAdd.value){
        document.getElementById("lnamePAdd").style.display='none';
        lastNameFlag=1;
    }else{
        document.getElementById("lnamePAdd").style.display='block';
        document.getElementById("lnamePAdd").style.color='rgb(201, 98, 98)';
        lastNameFlag=0;
    }
    //email
    //email
    //email
    let emailRE=/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
    if(emailAdd.value.match(emailRE)){
        document.getElementById("emailPAdd").style.display='none';
        emailFlag=1;
    }else{
        document.getElementById("emailPAdd").style.display='block';
        document.getElementById("emailPAdd").style.color='rgb(201, 98, 98)';
        emailFlag=0;
    }
    //password
    //password
    //password
    const upperCaseLetters = /([A-Z])/g;
    const lowerCaseLetters = /(?=.*[a-z])/g;
    const numbers = /(?=.*\d)/g;
    const special=/[!@#/?\$%\^\&*\)\(+=._-]{1,}/g;
    if(passwordAdd.value.match(upperCaseLetters) && passwordAdd.value.match(lowerCaseLetters) && passwordAdd.value.match(numbers) && passwordAdd.value.match(special) && passwordAdd.value.length>=8 && passwordAdd.value.length<=32){
        document.getElementById("passwordPAdd").style.display='none';
        passwordFlag=1;
    }else{
        document.getElementById("passwordPAdd").style.display='block';
        document.getElementById("passwordPAdd").style.color='rgb(201, 98, 98)';
        passwordFlag=0;
    }
    //confirm password
    //confirm password
    //confirm password
    if(passwordAdd.value==confirmAdd.value){
        document.getElementById("confirmPasswordPAdd").style.display='none';
        confirmPasswordFlag=1;
    }else{
        document.getElementById("confirmPasswordPAdd").style.display='block';
        document.getElementById("confirmPasswordPAdd").style.color='rgb(201, 98, 98)';
        confirmPasswordFlag=0;
    }
    //description
    //description
    //description
    if(descAdd.value!=""){
        document.getElementById("descriptionPAdd").style.display='none';
        descFlag=1;
    }else{
        document.getElementById("descriptionPAdd").style.display='block';
        document.getElementById("descriptionPAdd").style.color='rgb(201, 98, 98)';
        descFlag=0;
    }
    }
})

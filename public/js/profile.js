let settingDiv = document.getElementById('settingDiv');
let setting = document.getElementById('settingBtn');
let appointmentDiv = document.getElementById('appointmentDiv');
let appointment = document.getElementById('appointmentBtn');
setting.addEventListener('click', function () {
    settingDiv.style.display = 'block';
    appointmentDiv.style.display = 'none';
});
appointment.addEventListener('click', function () {
    settingDiv.style.display = 'none';
    appointmentDiv.style.display = 'block';
})

//fname edit-----------------------------------
//fname edit-----------------------------------
//fname edit-----------------------------------
//fname edit-----------------------------------
let fnameInput = document.getElementById('fnameEditInput');
let fnameP = document.getElementById('fnameEditP');
fnameInput.addEventListener('focus', function () {
    fnameP.style.display = 'block';
})
fnameInput.addEventListener('blur', function () {
    fnameP.style.display = 'none';
})

let fnameSave = document.getElementById('save-fname-Button');
fnameSave.addEventListener('click', function (e) {
    let fNameRE = /[a-zA-Z]{1,}/g;
    if (fnameInput.value.match(fNameRE) != fnameInput.value) {
        e.preventDefault();
        fnameP.style.display = 'block';
        fnameP.style.color = 'rgb(201, 98, 98)';
    }
})

//lname edit-----------------------------------
//lname edit-----------------------------------
//lname edit-----------------------------------
//lname edit-----------------------------------
let lnameInput = document.getElementById('lnameEditInput');
let lnameP = document.getElementById('lnameEditP');
lnameInput.addEventListener('focus', function () {
    lnameP.style.display = 'block';
})
lnameInput.addEventListener('blur', function () {
    lnameP.style.display = 'none';
})

let lnameSave = document.getElementById('save-lname-Button');
lnameSave.addEventListener('click', function (e) {
    let lNameRE = /[a-zA-Z]{1,}/g;
    if (lnameInput.value.match(lNameRE) != lnameInput.value) {
        e.preventDefault();
        lnameP.style.display = 'block';
        lnameP.style.color = 'rgb(201, 98, 98)';
    }
})


//email edit-----------------------------------
//email edit-----------------------------------
//email edit-----------------------------------
//email edit-----------------------------------
let emailInput = document.getElementById('emailEditInput');
let emailP = document.getElementById('emailEditP');
emailInput.addEventListener('focus', function () {
    emailP.style.display = 'block';
})
emailInput.addEventListener('blur', function () {
    emailP.style.display = 'none';
})

let emailSave = document.getElementById('save-email-Button');
emailSave.addEventListener('click', function (e) {
    let emailRE=/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
    if (!emailInput.value.match(emailRE)) {
        e.preventDefault();
        emailP.style.display = 'block';
        emailP.style.color = 'rgb(201, 98, 98)';
    }
})


//password edit-----------------------------------
//password edit-----------------------------------
//password edit-----------------------------------
//password edit-----------------------------------
let passwordInput=document.getElementById('passwordEditInput');
let passwordP=document.getElementById('passwordEditP');
passwordInput.addEventListener('focus',function(){
    passwordP.style.display='block';
})
passwordInput.addEventListener('blur',function(){
    passwordP.style.display='none';
})

let passwordSave=document.getElementById('save-password-Button');
passwordSave.addEventListener('click',function(e){
    const upperCaseLetters = /([A-Z])/g;
    const lowerCaseLetters = /(?=.*[a-z])/g;
    const numbers = /(?=.*\d)/g;
    const special=/[!@#/?\$%\^\&*\)\(+=._-]{1,}/g;
    if(!(passwordInput.value.match(upperCaseLetters) && passwordInput.value.match(lowerCaseLetters) && passwordInput.value.match(numbers) && passwordInput.value.match(special) && passwordInput.value.length>=8 && passwordInput.value.length<=32)){
        e.preventDefault();
        passwordP.style.display = 'block';
        passwordP.style.color = 'rgb(201, 98, 98)';
    }
})


//phone edit-----------------------------------
//phone edit-----------------------------------
//phone edit-----------------------------------
//phone edit-----------------------------------
let phoneInput=document.getElementById('phoneEditInput');
let phoneP=document.getElementById('phoneEditP');
phoneInput.addEventListener('focus',function(){
    phoneP.style.display='block';
})
phoneInput.addEventListener('blur',function(){
    phoneP.style.display='none';
})

let phoneSave=document.getElementById('save-phone-Button');
phoneSave.addEventListener('click',function(e){
    let phoneRE=/^\d{10}$/;
    if(!phoneInput.value.match(phoneRE)){
        e.preventDefault();
        phoneP.style.display = 'block';
        phoneP.style.color = 'rgb(201, 98, 98)';
    }
})
let containerProfile=document.getElementById('containerProfile');
let photoDivProfile=document.getElementById('photoDivProfile');
if(document.body.clientWidth<=900){
    containerProfile.style.display='block';
        containerProfile.style.width='100%';
        photoDivProfile.style.width='70%';
        photoDivProfile.style.marginLeft='15%';
        photoDivProfile.style.height='fit-content';
        // settingDiv.style.display='block';
        settingDiv.style.width='90%';
        settingDiv.style.marginLeft='5%';
        // appointmentDiv.style.display='block';
        appointmentDiv.style.width='90%';
        appointmentDiv.style.marginLeft='5%';
    }else {
        // Reset styles for screens greater than 900px
        containerProfile.style.display = 'flex';
        containerProfile.style.justifyContent = 'space-evenly';
        containerProfile.style.width = '100%';
        photoDivProfile.style.width = '20%';
        photoDivProfile.style.marginLeft = '0';
        photoDivProfile.style.height = 'fit-content';
        // settingDiv.style.display = 'block';
        settingDiv.style.width = '70%';
        settingDiv.style.marginLeft = '0';
        // appointmentDiv.style.display = 'block';
        appointmentDiv.style.width = '70%';
        appointmentDiv.style.marginLeft = '0';
    }
window.addEventListener('resize',function(){
    const bodyWidth = document.body.clientWidth;
    if(bodyWidth<=900){
        containerProfile.style.display='block';
        containerProfile.style.width='100%';
        photoDivProfile.style.width='70%';
        photoDivProfile.style.marginLeft='15%';
        photoDivProfile.style.height='fit-content';
        // settingDiv.style.display='block';
        settingDiv.style.width='90%';
        settingDiv.style.marginLeft='5%';
        // appointmentDiv.style.display='block';
        appointmentDiv.style.width='90%';
        appointmentDiv.style.marginLeft='5%';
    }else {
        // Reset styles for screens greater than 900px
        containerProfile.style.display = 'flex';
        containerProfile.style.justifyContent = 'space-evenly';
        containerProfile.style.width = '100%';
        photoDivProfile.style.width = '20%';
        photoDivProfile.style.marginLeft = '0';
        photoDivProfile.style.height = 'fit-content';
        // settingDiv.style.display = 'block';
        settingDiv.style.width = '70%';
        settingDiv.style.marginLeft = '0';
        // appointmentDiv.style.display = 'block';
        appointmentDiv.style.width = '70%';
        appointmentDiv.style.marginLeft = '0';
    }
})

/*
@media (max-width:900px) {
    #containerProfile{
        display: block;
        width:100%;
    }
    #photoDivProfile{
        width:50% ;
        height: max-content;
        margin-left: 25%;
    }
    #settingDiv{
        display: block;
        width:90%;
        margin-left: 5%;
    }
}
*/

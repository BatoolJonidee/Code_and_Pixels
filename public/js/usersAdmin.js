let firstNameFlag=0;
let lastNameFlag=0;
let emailFlag=0;
let passwordFlag=0;
let confirmPasswordFlag=0;
let phoneFlag=0;
let genderFlag=0;
let cityFlag=0;
let addressFlag=0;
let statusFlag=0;
//////////////////////fname add user /////////////////////
//////////////////////fname add user /////////////////////
//////////////////////fname add user /////////////////////
//////////////////////fname add user /////////////////////

let fnameAdd=document.getElementById('fnameInput-Add-Admin');
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
        firstNameFlag
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
        emailFlag=1;
    }else{
        document.getElementById("emailPAdd").style.display='block';
        document.getElementById("emailPAdd").style.color='rgb(201, 98, 98)';
        emailFlag=0;
    }
})
//////////////////////password add user /////////////////////
//////////////////////password add user /////////////////////
//////////////////////password add user /////////////////////
//////////////////////password add user /////////////////////

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
//////////////////////confirm password add user /////////////////////
//////////////////////confirm password add user /////////////////////
//////////////////////confirm password add user /////////////////////
//////////////////////confirm password add user /////////////////////

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
//////////////////////phone add user /////////////////////
//////////////////////phone add user /////////////////////
//////////////////////phone add user /////////////////////
//////////////////////phone add user /////////////////////

let phoneAdd=document.getElementById('phoneInput-Add-Admin');
phoneAdd.addEventListener('focus',function(){
    document.getElementById("phonePAdd").style.display='block';
    document.getElementById("phonePAdd").style.color='#3c8fae';
})
phoneAdd.addEventListener('blur',function(){
    let phoneRE=/^\d{10}$/;
    if(phoneAdd.value.match(phoneRE)){
        document.getElementById("phonePAdd").style.display='none';
        phoneFlag=1;
    }else{
        document.getElementById("phonePAdd").style.display='block';
        document.getElementById("phonePAdd").style.color='rgb(201, 98, 98)';
        phoneFlag=0;
    }
})
//////////////////////gender add user /////////////////////
//////////////////////gender add user /////////////////////
//////////////////////gender add user /////////////////////
//////////////////////gender add user /////////////////////

let genderAdd=document.getElementById('genderInput-Add-Admin');
genderAdd.addEventListener('blur',function(){
    if(genderAdd.value!='Gender'){
        document.getElementById("genderPAdd").style.display='none';
        genderFlag=1;
    }else{
        document.getElementById("genderPAdd").style.display='block';
        document.getElementById("genderPAdd").style.color='rgb(201, 98, 98)';
        genderFlag=0;
    }
})
//////////////////////city add user /////////////////////
//////////////////////city add user /////////////////////
//////////////////////city add user /////////////////////
//////////////////////city add user /////////////////////

let cityAdd=document.getElementById('cityInput-Add-Admin');
cityAdd.addEventListener('blur',function(){
    if(cityAdd.value!='City'){
        document.getElementById("cityPAdd").style.display='none';
        cityFlag=1;
    }else{
        document.getElementById("cityPAdd").style.display='block';
        document.getElementById("cityPAdd").style.color='rgb(201, 98, 98)';
        cityFlag=0;
    }
})
//////////////////////address add user /////////////////////
//////////////////////address add user /////////////////////
//////////////////////address add user /////////////////////
//////////////////////address add user /////////////////////

let addressAdd=document.getElementById('addressInput-Add-Admin');
addressAdd.addEventListener('focus',function(){
    document.getElementById("addressPAdd").style.display='block';
    document.getElementById("addressPAdd").style.color='#3c8fae';
})
addressAdd.addEventListener('blur',function(){
    if(addressAdd.value==""){
        document.getElementById("addressPAdd").style.display='block';
        document.getElementById("addressPAdd").style.color='rgb(201, 98, 98)';
        addressFlag=0;
    }else{
        document.getElementById("addressPAdd").style.display='none';
        addressFlag=1;
    }
})
//////////////////////status add user /////////////////////
//////////////////////status add user /////////////////////
//////////////////////status add user /////////////////////
//////////////////////status add user /////////////////////

let statusAdd=document.getElementById('statusInput-Add-Admin');
statusAdd.addEventListener('blur',function(){
    if(statusAdd.value!=3){
        document.getElementById("statusPAdd").style.display='none';
        statusFlag=1;
    }else{
        document.getElementById("statusPAdd").style.display='block';
        document.getElementById("statusPAdd").style.color='rgb(201, 98, 98)';
        statusFlag=0;
    }
})
//////////////////////submit add user /////////////////////
//////////////////////submit add user /////////////////////
//////////////////////submit add user /////////////////////
//////////////////////submit add user /////////////////////
//////////////////////submit add user /////////////////////
//////////////////////submit add user /////////////////////
//////////////////////submit add user /////////////////////
//////////////////////submit add user /////////////////////

let addUser=document.getElementById('Add-User-Button');
addUser.addEventListener('click',function(event){
    if(!(firstNameFlag && lastNameFlag && emailFlag && passwordFlag && confirmPasswordFlag && phoneFlag && genderFlag && cityFlag && addressFlag && statusFlag)){
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
    //phone
    //phone
    //phone
    let phoneRE=/^\d{10}$/;
    if(phoneAdd.value.match(phoneRE)){
        document.getElementById("phonePAdd").style.display='none';
        phoneFlag=1;
    }else{
        document.getElementById("phonePAdd").style.display='block';
        document.getElementById("phonePAdd").style.color='rgb(201, 98, 98)';
        phoneFlag=0;
    }
    //gender
    //gender
    //gender
    if(genderAdd.value!='Gender'){
        document.getElementById("genderPAdd").style.display='none';
        genderFlag=1;
    }else{
        document.getElementById("genderPAdd").style.display='block';
        document.getElementById("genderPAdd").style.color='rgb(201, 98, 98)';
        genderFlag=0;
    }
    //city
    //city
    //city
    if(cityAdd.value!='City'){
        document.getElementById("cityPAdd").style.display='none';
        cityFlag=1;
    }else{
        document.getElementById("cityPAdd").style.display='block';
        document.getElementById("cityPAdd").style.color='rgb(201, 98, 98)';
        cityFlag=0;
    }
    //address
    //address
    //address
    if(addressAdd.value!=""){
        document.getElementById("addressPAdd").style.display='none';
        addressFlag=1;
    }else{
        document.getElementById("addressPAdd").style.display='block';
        document.getElementById("addressPAdd").style.color='rgb(201, 98, 98)';
        addressFlag=0;
    }
    //status
    //status
    //status
    if(statusAdd.value!=3){
        document.getElementById("statusPAdd").style.display='none';
        statusFlag=1;
    }else{
        document.getElementById("statusPAdd").style.display='block';
        document.getElementById("statusPAdd").style.color='rgb(201, 98, 98)';
        statusFlag=0;
    }
}

})

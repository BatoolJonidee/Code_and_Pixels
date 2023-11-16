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
        lastNameFlag=1;
    }else{
        document.getElementById("lnamePAdd").style.display='block';
        document.getElementById("lnamePAdd").style.color='rgb(201, 98, 98)';
        lastNameFlag=0;
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

let firstNameFlagEdit=0;
let lastNameFlagEdit=0;
let emailFlagEdit=0;
let passwordFlagEdit=0;
let confirmPasswordFlagEdit=0;
let phoneFlagEdit=0;
let genderFlagEdit=0;
let cityFlagEdit=0;
let addressFlagEdit=0;
let statusFlagEdit=0;
//////////////////////fname edit user /////////////////////
//////////////////////fname edit user /////////////////////
//////////////////////fname edit user /////////////////////
//////////////////////fname edit user /////////////////////

let fnameEdit=document.getElementsByClassName('fnameInput-Edit-Admin');
fnameEdit.addEventListener("focus",function(){
    document.getElementsByClassName("fnamePEdit").style.display="block";
    document.getElementsByClassName("fnamePEdit").style.color='#3c8fae';
})
fnameEdit.addEventListener("blur",function(){
    let fNameRE=/[a-zA-Z]{1,}/g;
    if(fnameEdit.value.match(fNameRE)==fnameEdit.value){
        document.getElementsByClassName("fnamePEdit").style.display='none';
        firstNameFlagEdit=1;
    }else{
        document.getElementsByClassName("fnamePEdit").style.display='block';
        document.getElementsByClassName("fnamePEdit").style.color='rgb(201, 98, 98)';
        firstNameFlagEdit=0;
    }
})
//////////////////////lname edit user /////////////////////
//////////////////////lname edit user /////////////////////
//////////////////////lname edit user /////////////////////
//////////////////////lname edit user /////////////////////

let lnameEdit=document.getElementById('lnameInput-Edit-Admin');
lnameEdit.addEventListener("focus",function(){
    document.getElementById("lnamePEdit").style.display='block';
    document.getElementById("lnamePEdit").style.color='#3c8fae';
})
lnameEdit.addEventListener("blur",function(){
    let lNameRE=/[a-zA-Z]{1,}/g;
    if(lnameEdit.value.match(lNameRE)==lnameEdit.value){
        document.getElementById("lnamePEdit").style.display='none';
        lastNameFlagEdit=1;
    }else{
        document.getElementById("lnamePAdd").style.display='block';
        document.getElementById("lnamePAdd").style.color='rgb(201, 98, 98)';
        lastNameFlagEdit=0;
    }
})
//////////////////////email add user /////////////////////
//////////////////////email add user /////////////////////
//////////////////////email add user /////////////////////
//////////////////////email add user /////////////////////

let emailEdit=document.getElementById('emailInput-Edit-Admin');
emailEdit.addEventListener("focus",function(){
    document.getElementById("emailPEdit").style.display='block';
    document.getElementById("emailPEdit").style.color='#3c8fae';

})
emailEdit.addEventListener("blur",function(){
    let emailRE=/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
    if(emailEdit.value.match(emailRE)){
        document.getElementById("emailPEdit").style.display='none';
        emailFlagEdit=1;
    }else{
        document.getElementById("emailPEdit").style.display='block';
        document.getElementById("emailPEdit").style.color='rgb(201, 98, 98)';
        emailFlagEdit=0;
    }
})
//////////////////////password add user /////////////////////
//////////////////////password add user /////////////////////
//////////////////////password add user /////////////////////
//////////////////////password add user /////////////////////

let passwordEdit=document.getElementById('passwordInput-Edit-Admin');
passwordEdit.addEventListener("focus",function(){
    document.getElementById("passwordPEdit").style.display='block';
    document.getElementById("passwordPEdit").style.color='#3c8fae';

})
passwordEdit.addEventListener("blur",function(){
    const upperCaseLetters = /([A-Z])/g;
    const lowerCaseLetters = /(?=.*[a-z])/g;
    const numbers = /(?=.*\d)/g;
    const special=/[!@#/?\$%\^\&*\)\(+=._-]{1,}/g;
    if(passwordEdit.value.match(upperCaseLetters) && passwordEdit.value.match(lowerCaseLetters) && passwordEdit.value.match(numbers) && passwordEdit.value.match(special) && passwordEdit.value.length>=8 && passwordEdit.value.length<=32){
        document.getElementById("passwordPEdit").style.display='none';
        passwordFlagEdit=1;
    }else{
        document.getElementById("passwordPEdit").style.display='block';
        document.getElementById("passwordPEdit").style.color='rgb(201, 98, 98)';
        passwordFlagEdit=0;
    }
})
//////////////////////confirm password edit user /////////////////////
//////////////////////confirm password edit user /////////////////////
//////////////////////confirm password edit user /////////////////////
//////////////////////confirm password edit user /////////////////////

let confirmEdit=document.getElementById('confirmPasswordInput-Edit-Admin');
confirmEdit.addEventListener('focus',function(){
    document.getElementById("confirmPasswordPEdit").style.display='block';
    document.getElementById("confirmPasswordPEdit").style.color='#3c8fae';
})
confirmEdit.addEventListener('blur',function(){
    if(passwordEdit.value==confirmEdit.value){
        document.getElementById("confirmPasswordPEdit").style.display='none';
        confirmPasswordFlagEdit=1;
    }else{
        document.getElementById("confirmPasswordPEdit").style.display='block';
        document.getElementById("confirmPasswordPEdit").style.color='rgb(201, 98, 98)';
        confirmPasswordFlagEdit=0;
    }
})
//////////////////////phone add user /////////////////////
//////////////////////phone add user /////////////////////
//////////////////////phone add user /////////////////////
//////////////////////phone add user /////////////////////

let phoneEdit=document.getElementById('phoneInput-Edit-Admin');
phoneEdit.addEventListener('focus',function(){
    document.getElementById("phonePEdit").style.display='block';
    document.getElementById("phonePEdit").style.color='#3c8fae';
})
phoneEdit.addEventListener('blur',function(){
    let phoneRE=/^\d{10}$/;
    if(phoneEdit.value.match(phoneRE)){
        document.getElementById("phonePEdit").style.display='none';
        phoneFlagEdit=1;
    }else{
        document.getElementById("phonePEdit").style.display='block';
        document.getElementById("phonePEdit").style.color='rgb(201, 98, 98)';
        phoneFlagEdit=0;
    }
})
//////////////////////gender add user /////////////////////
//////////////////////gender add user /////////////////////
//////////////////////gender add user /////////////////////
//////////////////////gender add user /////////////////////

let genderEdit=document.getElementById('genderInput-Edit-Admin');
genderEdit.addEventListener('blur',function(){
    if(genderEdit.value!='Gender'){
        document.getElementById("genderPEdit").style.display='none';
        genderFlagEdit=1;
    }else{
        document.getElementById("genderPEdit").style.display='block';
        document.getElementById("genderPEdit").style.color='rgb(201, 98, 98)';
        genderFlagEdit=0;
    }
})
//////////////////////city add user /////////////////////
//////////////////////city add user /////////////////////
//////////////////////city add user /////////////////////
//////////////////////city add user /////////////////////

let cityEdit=document.getElementById('cityInput-Edit-Admin');
cityEdit.addEventListener('blur',function(){
    if(cityEdit.value!='City'){
        document.getElementById("cityPEdit").style.display='none';
        cityFlagEdit=1;
    }else{
        document.getElementById("cityPEdit").style.display='block';
        document.getElementById("cityPEdit").style.color='rgb(201, 98, 98)';
        cityFlagEdit=0;
    }
})
//////////////////////address add user /////////////////////
//////////////////////address add user /////////////////////
//////////////////////address add user /////////////////////
//////////////////////address add user /////////////////////

let addressEdit=document.getElementById('addressInput-Edit-Admin');
addressEdit.addEventListener('focus',function(){
    document.getElementById("addressPEdit").style.display='block';
    document.getElementById("addressPEdit").style.color='#3c8fae';
})
addressEdit.addEventListener('blur',function(){
    if(addressEdit.value==""){
        document.getElementById("addressPEdit").style.display='block';
        document.getElementById("addressPEdit").style.color='rgb(201, 98, 98)';
        addressFlagEdit=0;
    }else{
        document.getElementById("addressPAddEdit").style.display='none';
        addressFlagEdit=1;
    }
})
//////////////////////status add user /////////////////////
//////////////////////status add user /////////////////////
//////////////////////status add user /////////////////////
//////////////////////status add user /////////////////////

let statusEdit=document.getElementById('statusInput-Edit-Admin');
statusEdit.addEventListener('blur',function(){
    if(statusEdit.value!=3){
        document.getElementById("statusPEdit").style.display='none';
        statusFlagEdit=1;
    }else{
        document.getElementById("statusPEdit").style.display='block';
        document.getElementById("statusPEdit").style.color='rgb(201, 98, 98)';
        statusFlagEdit=0;
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

let EditUser=document.getElementById('Edit-User-Button');
EditUser.addEventListener('click',function(event){
    if(!(firstNameFlagEdit && lastNameFlagEdit && emailFlagEdit && passwordFlagEdit && confirmPasswordFlagEdit && phoneFlagEdit && genderFlagEdit && cityFlagEdit && addressFlagEdit && statusFlagEdit)){
        event.preventDefault();
    //fname
    //fname
    //fname
    let fNameRE=/[a-zA-Z]{1,}/g;
    if(fnameEdit.value.match(fNameRE)==fnameEdit.value){
        document.getElementById("fnamePEdit").style.display='none';
        firstNameFlagEdit=1;
    }else{
        document.getElementById("fnamePEdit").style.display='block';
        document.getElementById("fnamePEdit").style.color='rgb(201, 98, 98)';
        firstNameFlagEdit=0;
    }
    //lname
    //lname
    //lname
    let lNameRE=/[a-zA-Z]{1,}/g;
    if(lnameEdit.value.match(lNameRE)==lnameEdit.value){
        document.getElementById("lnamePEdit").style.display='none';
        lastNameFlagEdit=1;
    }else{
        document.getElementById("lnamePEdit").style.display='block';
        document.getElementById("lnamePEdit").style.color='rgb(201, 98, 98)';
        lastNameFlagEdit=0;
    }
    //email
    //email
    //email
    let emailRE=/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
    if(emailEdit.value.match(emailRE)){
        document.getElementById("emailPEdit").style.display='none';
        emailFlagEdit=1;
    }else{
        document.getElementById("emailPEdit").style.display='block';
        document.getElementById("emailPEdit").style.color='rgb(201, 98, 98)';
        emailFlagEdit=0;
    }
    //password
    //password
    //password
    const upperCaseLetters = /([A-Z])/g;
    const lowerCaseLetters = /(?=.*[a-z])/g;
    const numbers = /(?=.*\d)/g;
    const special=/[!@#/?\$%\^\&*\)\(+=._-]{1,}/g;
    if(passwordEdit.value.match(upperCaseLetters) && passwordEdit.value.match(lowerCaseLetters) && passwordEdit.value.match(numbers) && passwordEdit.value.match(special) && passwordEdit.value.length>=8 && passwordEdit.value.length<=32){
        document.getElementById("passwordPEdit").style.display='none';
        passwordFlagEdit=1;
    }else{
        document.getElementById("passwordPEdit").style.display='block';
        document.getElementById("passwordPEdit").style.color='rgb(201, 98, 98)';
        passwordFlagEdit=0;
    }
    //confirm password
    //confirm password
    //confirm password
    if(passwordEdit.value==confirmEdit.value){
        document.getElementById("confirmPasswordPEdit").style.display='none';
        confirmPasswordFlagEdit=1;
    }else{
        document.getElementById("confirmPasswordPEdit").style.display='block';
        document.getElementById("confirmPasswordPEdit").style.color='rgb(201, 98, 98)';
        confirmPasswordFlagEdit=0;
    }
    //phone
    //phone
    //phone
    let phoneRE=/^\d{10}$/;
    if(phoneEdit.value.match(phoneRE)){
        document.getElementById("phonePEdit").style.display='none';
        phoneFlagEdit=1;
    }else{
        document.getElementById("phonePEdit").style.display='block';
        document.getElementById("phonePEdit").style.color='rgb(201, 98, 98)';
        phoneFlagEdit=0;
    }
    //gender
    //gender
    //gender
    if(genderEdit.value!='Gender'){
        document.getElementById("genderPEdit").style.display='none';
        genderFlagEdit=1;
    }else{
        document.getElementById("genderPEdit").style.display='block';
        document.getElementById("genderPEdit").style.color='rgb(201, 98, 98)';
        genderFlagEdit=0;
    }
    //city
    //city
    //city
    if(cityEdit.value!='City'){
        document.getElementById("cityPEdit").style.display='none';
        cityFlagEdit=1;
    }else{
        document.getElementById("cityPEdit").style.display='block';
        document.getElementById("cityPEdit").style.color='rgb(201, 98, 98)';
        cityFlagEdit=0;
    }
    //address
    //address
    //address
    if(addressEdit.value!=""){
        document.getElementById("addressPEdit").style.display='none';
        addressFlagEdit=1;
    }else{
        document.getElementById("addressPEdit").style.display='block';
        document.getElementById("addressPEdit").style.color='rgb(201, 98, 98)';
        addressFlagEdit=0;
    }
    //status
    //status
    //status
    if(statusEdit.value!=3){
        document.getElementById("statusPEdit").style.display='none';
        statusFlagEdit=1;
    }else{
        document.getElementById("statusPEdit").style.display='block';
        document.getElementById("statusPEdit").style.color='rgb(201, 98, 98)';
        statusFlagEdit=0;
    }
}

})

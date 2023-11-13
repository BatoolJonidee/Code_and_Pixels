const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});

const createAccBtn=document.getElementById('createAnAccountBtn');
const haveAccBtn=document.getElementById('haveAnAccountBtn');
const regDivMob=document.getElementById('regDivMob');
const bodyWidth = document.body.clientWidth;
// bodyWidth.addEventListener('resize',function(){
//     if(bodyWidth<=450){
//         container.style.display='none';
//         regDivMob.style.display='block';
//     }else{
//         container.style.display='block';
//         regDivMob.style.display='none';
//     }
// })
createAccBtn.addEventListener('click',function(){
        container.style.display='none';
        regDivMob.style.display='block';
})
haveAccBtn.addEventListener('click',function(){

    container.style.display='block';
    regDivMob.style.display='none';
})
// Prevent login and register buttons from throwing an error in codepen
// const buttons = document.querySelectorAll('.form-container button')

// buttons[0].addEventListener('click' , (e) => {
// 	e.preventDefault()
// })
// buttons[1].addEventListener('click' , (e) => {
// 	e.preventDefault()
// })
///////////////////////flags////////////////////////////
let firstNameFlag=0;
let lastNameFlag=0;
let emailFlag=0;
let passwordFlag=0;
let confirmPasswordFlag=0;
let phoneFlag=0;
let genderFlag=0;
let cityFlag=0;
let addressFlag=0;
/////////////////////////////////////////////////////////
let firstName=document.getElementById('fnameInput');
firstName.addEventListener("focus",function(){
    document.getElementById("fnameP").style.display='block';
    document.getElementById("fnameP").style.color='#3c8fae';

})
firstName.addEventListener("blur",function(){
    let fNameRE=/[a-zA-Z]{1,}/g;
    if(firstName.value.match(fNameRE)==firstName.value){
        document.getElementById("fnameP").style.display='none';
    }else{
        document.getElementById("fnameP").style.display='block';
        document.getElementById("fnameP").style.color='rgb(201, 98, 98)';
    }
})
let lastName=document.getElementById("lnameInput");
lastName.addEventListener("focus",function(){
    document.getElementById("lnameP").style.display='block';
    document.getElementById("lnameP").style.color='#3c8fae';

})
lastName.addEventListener('blur',function(){
    let lNameRE=/[a-zA-Z]{1,}/g;
    if(lastName.value.match(lNameRE)==lastName.value){
        document.getElementById("lnameP").style.display='none';
    }else{
        document.getElementById("lnameP").style.display='block';
        document.getElementById("lnameP").style.color='rgb(201, 98, 98)';
    }
})
let email=document.getElementById("emailInput");
email.addEventListener('focus',function(){
    document.getElementById("emailP").style.display='block';
    document.getElementById("emailP").style.color='#3c8fae';

})
email.addEventListener('blur',function(){
    let emailRE=/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
        if(email.value.match(emailRE)){
            document.getElementById("emailP").style.display='none';
            emailFlag=1;
        }else{
            document.getElementById("emailP").style.display='block';
            document.getElementById("emailP").style.color='rgb(201, 98, 98)';
            emailFlag=0;
        }
})
let password=document.getElementById('passwordInput');
password.addEventListener('focus',function(){
    document.getElementById("passwordP").style.display='block';
    document.getElementById("passwordP").style.color='#3c8fae';
})
password.addEventListener('blur',function(){
    const upperCaseLetters = /([A-Z])/g;
    const lowerCaseLetters = /(?=.*[a-z])/g;
    const numbers = /(?=.*\d)/g;
    const special=/[!@#/?\$%\^\&*\)\(+=._-]{1,}/g;
    if(password.value.match(upperCaseLetters) && password.value.match(lowerCaseLetters) && password.value.match(numbers) && password.value.match(special) && password.value.length>=8 && password.value.length<=32){
        document.getElementById("passwordP").style.display='none';
        passwordFlag=1;
    }else{
        document.getElementById("passwordP").style.display='block';
        document.getElementById("passwordP").style.color='rgb(201, 98, 98)';
        passwordFlag=0;
    }
})
let confirm=document.getElementById('confirmPasswordInput');
confirm.addEventListener('focus',function(){
    document.getElementById("confirmPasswordP").style.display='block';
    document.getElementById("confirmPasswordP").style.color='#3c8fae';
})
confirm.addEventListener('blur',function(){
    if(password.value==confirm.value){
        document.getElementById("confirmPasswordP").style.display='none';
        confirmPasswordFlag=1;
    }else{
        document.getElementById("confirmPasswordP").style.display='block';
        document.getElementById("confirmPasswordP").style.color='rgb(201, 98, 98)';
        confirmPasswordFlag=0;
    }
})
let phone=document.getElementById('phoneInput');
phone.addEventListener('focus',function(){
    document.getElementById("phoneP").style.display='block';
    document.getElementById("phoneP").style.color='#3c8fae';
})
phone.addEventListener('blur',function(){
    let phoneRE=/^\d{10}$/;
        if(phone.value.match(phoneRE)){
            document.getElementById("phoneP").style.display='none';
            phoneFlag=1;
        }else{
            document.getElementById("phoneP").style.display='block';
            document.getElementById("phoneP").style.color='rgb(201, 98, 98)';
            phoneFlag=0;
        }
})
let gender=document.getElementById('gender');
gender.addEventListener('blur',function(){
    if(gender.value!='Gender'){
        document.getElementById("genderP").style.display='none';
        genderFlag=1;
    }else{
        document.getElementById("genderP").style.display='block';
        document.getElementById("genderP").style.color='rgb(201, 98, 98)';
        genderFlag=0;
    }
})
let city=document.getElementById('city');
city.addEventListener('blur',function(){
    if(city.value!='City'){
        document.getElementById("cityP").style.display='none';
        cityFlag=1;
    }else{
        document.getElementById("cityP").style.display='block';
        document.getElementById("cityP").style.color='rgb(201, 98, 98)';
        cityFlag=0;
    }
})
let address=document.getElementById('addressText');
address.addEventListener('focus',function(){
    document.getElementById("addressP").style.display='block';
    document.getElementById("addressP").style.color='#3c8fae';
})
address.addEventListener('blur',function(){
    if(address.value!=""){
        document.getElementById("addressP").style.display='none';
        addressFlag=1;
    }else{
        document.getElementById("addressP").style.display='block';
        document.getElementById("addressP").style.color='rgb(201, 98, 98)';
        addressFlag=0;
    }
})
///////////////////////submit////////////////////////////
///////////////////////submit////////////////////////////
///////////////////////submit////////////////////////////
///////////////////////submit////////////////////////////
let regSubmit=document.getElementById("regSubmit");
regSubmit.addEventListener("click",function(event){
    if(!(firstNameFlag && lastNameFlag && emailFlag && passwordFlag && confirmPasswordFlag && phoneFlag && genderFlag && cityFlag && addressFlag)){
        event.preventDefault();
    //fname
    //fname
    //fname
    let fNameRE=/[a-zA-Z]{1,}/g;
    let firstName=document.getElementById('fnameInput');
    if(firstName.value.match(fNameRE)==firstName.value){
        document.getElementById("fnameP").style.display='none';
        firstNameFlag=1;
    }else{
        document.getElementById("fnameP").style.display='block';
        document.getElementById("fnameP").style.color='rgb(201, 98, 98)';
        firstNameFlag=0;
    }
    //lname
    //lname
    //lname
    let lNameRE=/[a-zA-Z]{1,}/g;
    let lastName=document.getElementById("lnameInput");
    if(lastName.value.match(lNameRE)==lastName.value){
        document.getElementById("lnameP").style.display='none';
        lastNameFlag=1;
    }else{
        document.getElementById("lnameP").style.display='block';
        document.getElementById("lnameP").style.color='rgb(201, 98, 98)';
        lastNameFlag=0;
    }
    //email
    //email
    //email
    let emailRE=/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
    let email=document.getElementById("emailInput")
    if(email.value.match(emailRE)){
        document.getElementById("emailP").style.display='none';
        emailFlag=1;
    }else{
        document.getElementById("emailP").style.display='block';
        document.getElementById("emailP").style.color='rgb(201, 98, 98)';
        emailFlag=0;
    }
    //password
    //password
    //password
    const upperCaseLetters = /([A-Z])/g;
    const lowerCaseLetters = /(?=.*[a-z])/g;
    const numbers = /(?=.*\d)/g;
    const special=/[!@#/?\$%\^\&*\)\(+=._-]{1,}/g;
    let password=document.getElementById('passwordInput');
    if(password.value.match(upperCaseLetters) && password.value.match(lowerCaseLetters) && password.value.match(numbers) && password.value.match(special) && password.value.length>=8 && password.value.length<=32){
        document.getElementById("passwordP").style.display='none';
        passwordFlag=1;
    }else{
        document.getElementById("passwordP").style.display='block';
        document.getElementById("passwordP").style.color='rgb(201, 98, 98)';
        passwordFlag=0;
    }
    //confirm password
    //confirm password
    //confirm password
    let confirm=document.getElementById('confirmPasswordInput');
    if(password.value==confirm.value){
        document.getElementById("confirmPasswordP").style.display='none';
        confirmPasswordFlag=1;
    }else{
        document.getElementById("confirmPasswordP").style.display='block';
        document.getElementById("confirmPasswordP").style.color='rgb(201, 98, 98)';
        confirmPasswordFlag=0;
    }
    //phone
    //phone
    //phone
    let phoneRE=/^\d{10}$/;
    let phone=document.getElementById('phoneInput');
    if(phone.value.match(phoneRE)){
        document.getElementById("phoneP").style.display='none';
        phoneFlag=1;
    }else{
        document.getElementById("phoneP").style.display='block';
        document.getElementById("phoneP").style.color='rgb(201, 98, 98)';
        phoneFlag=0;
    }
    //gender
    //gender
    //gender
    let gender=document.getElementById('gender');
    if(gender.value!='Gender'){
        document.getElementById("genderP").style.display='none';
        genderFlag=1;
    }else{
        document.getElementById("genderP").style.display='block';
        document.getElementById("genderP").style.color='rgb(201, 98, 98)';
        genderFlag=0;
    }
    //city
    //city
    //city
    let city=document.getElementById('city');
    if(city.value!='City'){
        document.getElementById("cityP").style.display='none';
        cityFlag=1;
    }else{
        document.getElementById("cityP").style.display='block';
        document.getElementById("cityP").style.color='rgb(201, 98, 98)';
        cityFlag=0;
    }
    //address
    //address
    //address
    let address=document.getElementById('addressText');
    if(address.value!=""){
        document.getElementById("addressP").style.display='none';
        addressFlag=1;
    }else{
        document.getElementById("addressP").style.display='block';
        document.getElementById("addressP").style.color='rgb(201, 98, 98)';
        addressFlag=0;
    }
}

})
//////////////////////////////Mobile check/////////////////////////////////////////
//////////////////////////////Mobile check/////////////////////////////////////////
//////////////////////////////Mobile check/////////////////////////////////////////
//////////////////////////////Mobile check/////////////////////////////////////////
//////////////////////////////Mobile check/////////////////////////////////////////


let firstNameMob=document.getElementById('fnameInputMob');
firstNameMob.addEventListener("focus",function(){
    document.getElementById("fnamePMob").style.display='block';
    document.getElementById("fnamePMob").style.color='#3c8fae';

})
firstNameMob.addEventListener("blur",function(){
    let fNameRE=/[a-zA-Z]{1,}/g;
    if(firstNameMob.value.match(fNameRE)==firstNameMob.value){
        document.getElementById("fnamePMob").style.display='none';
    }else{
        document.getElementById("fnamePMob").style.display='block';
        document.getElementById("fnamePMob").style.color='rgb(201, 98, 98)';
    }
})
let lastNameMob=document.getElementById("lnameInputMob");
lastNameMob.addEventListener("focus",function(){
    document.getElementById("lnamePMob").style.display='block';
    document.getElementById("lnamePMob").style.color='#3c8fae';
})
lastNameMob.addEventListener('blur',function(){
    let lNameRE=/[a-zA-Z]{1,}/g;
    if(lastNameMob.value.match(lNameRE)==lastNameMob.value){
        document.getElementById("lnamePMob").style.display='none';
    }else{
        document.getElementById("lnamePMob").style.display='block';
        document.getElementById("lnamePMob").style.color='rgb(201, 98, 98)';
    }
})
let emailMob=document.getElementById("emailInputMob");
emailMob.addEventListener('focus',function(){
    document.getElementById("emailPMob").style.display='block';
    document.getElementById("emailPMob").style.color='#3c8fae';

})
emailMob.addEventListener('blur',function(){
    let emailRE=/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
        if(emailMob.value.match(emailRE)){
            document.getElementById("emailPMob").style.display='none';
            emailFlag=1;
        }else{
            document.getElementById("emailPMob").style.display='block';
            document.getElementById("emailPMob").style.color='rgb(201, 98, 98)';
            emailFlag=0;
        }
})
let passwordMob=document.getElementById('passwordInputMob');
passwordMob.addEventListener('focus',function(){
    document.getElementById("passwordPMob").style.display='block';
    document.getElementById("passwordPMob").style.color='#3c8fae';
})
passwordMob.addEventListener('blur',function(){
    const upperCaseLetters = /([A-Z])/g;
    const lowerCaseLetters = /(?=.*[a-z])/g;
    const numbers = /(?=.*\d)/g;
    const special=/[!@#/?\$%\^\&*\)\(+=._-]{1,}/g;
    if(passwordMob.value.match(upperCaseLetters) && passwordMob.value.match(lowerCaseLetters) && passwordMob.value.match(numbers) && passwordMob.value.match(special) && passwordMob.value.length>=8 && passwordMob.value.length<=32){
        document.getElementById("passwordPMob").style.display='none';
        passwordFlag=1;
    }else{
        document.getElementById("passwordPMob").style.display='block';
        document.getElementById("passwordPMob").style.color='rgb(201, 98, 98)';
        passwordFlag=0;
    }
})
let confirmMob=document.getElementById('confirmPasswordInputMob');
confirmMob.addEventListener('focus',function(){
    document.getElementById("confirmPasswordPMob").style.display='block';
    document.getElementById("confirmPasswordPMob").style.color='#3c8fae';
})
confirmMob.addEventListener('blur',function(){
    if(passwordMob.value==confirmMob.value){
        document.getElementById("confirmPasswordPMob").style.display='none';
        confirmPasswordFlag=1;
    }else{
        document.getElementById("confirmPasswordPMob").style.display='block';
        document.getElementById("confirmPasswordPMob").style.color='rgb(201, 98, 98)';
        confirmPasswordFlag=0;
    }
})
let phoneMob=document.getElementById('phoneInputMob');
phoneMob.addEventListener('focus',function(){
    document.getElementById("phonePMob").style.display='block';
    document.getElementById("phonePMob").style.color='#3c8fae';
})
phoneMob.addEventListener('blur',function(){
    let phoneRE=/^\d{10}$/;
        if(phoneMob.value.match(phoneRE)){
            document.getElementById("phonePMob").style.display='none';
            phoneFlag=1;
        }else{
            document.getElementById("phonePMob").style.display='block';
            document.getElementById("phonePMob").style.color='rgb(201, 98, 98)';
            phoneFlag=0;
        }
})
let genderMob=document.getElementById('genderMob');
genderMob.addEventListener('blur',function(){
    if(genderMob.value!='Gender'){
        document.getElementById("genderPMob").style.display='none';
        genderFlag=1;
    }else{
        document.getElementById("genderPMob").style.display='block';
        document.getElementById("genderPMob").style.color='rgb(201, 98, 98)';
        genderFlag=0;
    }
})
let cityMob=document.getElementById('cityMob');
cityMob.addEventListener('blur',function(){
    if(cityMob.value!='City'){
        document.getElementById("cityPMob").style.display='none';
        cityFlag=1;
    }else{
        document.getElementById("cityPMob").style.display='block';
        document.getElementById("cityPMob").style.color='rgb(201, 98, 98)';
        cityFlag=0;
    }
})
let addressMob=document.getElementById('addressTextMob');
addressMob.addEventListener('focus',function(){
    document.getElementById("addressPMob").style.display='block';
    document.getElementById("addressPMob").style.color='#3c8fae';
})
addressMob.addEventListener('blur',function(){
    if(addressMob.value!=""){
        document.getElementById("addressPMob").style.display='none';
        addressFlag=1;
    }else{
        document.getElementById("addressPMob").style.display='block';
        document.getElementById("addressPMob").style.color='rgb(201, 98, 98)';
        addressFlag=0;
    }
})
///////////////////////submit////////////////////////////
///////////////////////submit////////////////////////////
///////////////////////submit////////////////////////////
///////////////////////submit////////////////////////////
let regSubmitMob=document.getElementById("regSubmitMob");
regSubmitMob.addEventListener("click",function(event){
    if(!(firstNameFlag && lastNameFlag && emailFlag && passwordFlag && confirmPasswordFlag && phoneFlag && genderFlag && cityFlag && addressFlag)){
        event.preventDefault();
    //fname
    //fname
    //fname
    let fNameRE=/[a-zA-Z]{1,}/g;
    let firstNameMob=document.getElementById('fnameInputMob');
    if(firstNameMob.value.match(fNameRE)==firstNameMob.value){
        document.getElementById("fnamePMob").style.display='none';
        firstNameFlag=1;
    }else{
        document.getElementById("fnamePMob").style.display='block';
        document.getElementById("fnamePMob").style.color='rgb(201, 98, 98)';
        firstNameFlag=0;
    }
    //lname
    //lname
    //lname
    let lNameRE=/[a-zA-Z]{1,}/g;
    let lastNameMob=document.getElementById("lnameInputMob");
    if(lastNameMob.value.match(lNameRE)==lastNameMob.value){
        document.getElementById("lnamePMob").style.display='none';
        lastNameFlag=1;
    }else{
        document.getElementById("lnamePMob").style.display='block';
        document.getElementById("lnamePMob").style.color='rgb(201, 98, 98)';
        lastNameFlag=0;
    }
    //email
    //email
    //email
    let emailRE=/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
    let emailMob=document.getElementById("emailInputMob")
    if(emailMob.value.match(emailRE)){
        document.getElementById("emailPMob").style.display='none';
        emailFlag=1;
    }else{
        document.getElementById("emailPMob").style.display='block';
        document.getElementById("emailPMob").style.color='rgb(201, 98, 98)';
        emailFlag=0;
    }
    //password
    //password
    //password
    const upperCaseLetters = /([A-Z])/g;
    const lowerCaseLetters = /(?=.*[a-z])/g;
    const numbers = /(?=.*\d)/g;
    const special=/[!@#/?\$%\^\&*\)\(+=._-]{1,}/g;
    let passwordMob=document.getElementById('passwordInputMob');
    if(passwordMob.value.match(upperCaseLetters) && passwordMob.value.match(lowerCaseLetters) && passwordMob.value.match(numbers) && passwordMob.value.match(special) && passwordMob.value.length>=8 && passwordMob.value.length<=32){
        document.getElementById("passwordPMob").style.display='none';
        passwordFlag=1;
    }else{
        document.getElementById("passwordPMob").style.display='block';
        document.getElementById("passwordPMob").style.color='rgb(201, 98, 98)';
        passwordFlag=0;
    }
    //confirm password
    //confirm password
    //confirm password
    let confirmMob=document.getElementById('confirmPasswordInputMob');
    if(passwordMob.value==confirmMob.value){
        document.getElementById("confirmPasswordPMob").style.display='none';
        confirmPasswordFlag=1;
    }else{
        document.getElementById("confirmPasswordPMob").style.display='block';
        document.getElementById("confirmPasswordPMob").style.color='rgb(201, 98, 98)';
        confirmPasswordFlag=0;
    }
    //phone
    //phone
    //phone
    let phoneRE=/^\d{10}$/;
    let phoneMob=document.getElementById('phoneInputMob');
    if(phoneMob.value.match(phoneRE)){
        document.getElementById("phonePMob").style.display='none';
        phoneFlag=1;
    }else{
        document.getElementById("phonePMob").style.display='block';
        document.getElementById("phonePMob").style.color='rgb(201, 98, 98)';
        phoneFlag=0;
    }
    //gender
    //gender
    //gender
    let genderMob=document.getElementById('genderMob');
    if(genderMob.value!='Gender'){
        document.getElementById("genderPMob").style.display='none';
        genderFlag=1;
    }else{
        document.getElementById("genderPMob").style.display='block';
        document.getElementById("genderPMob").style.color='rgb(201, 98, 98)';
        genderFlag=0;
    }
    //city
    //city
    //city
    let cityMob=document.getElementById('cityMob');
    if(cityMob.value!='City'){
        document.getElementById("cityPMob").style.display='none';
        cityFlag=1;
    }else{
        document.getElementById("cityPMob").style.display='block';
        document.getElementById("cityPMob").style.color='rgb(201, 98, 98)';
        cityFlag=0;
    }
    //address
    //address
    //address
    let addressMob=document.getElementById('addressTextMob');
    if(addressMob.value!=""){
        document.getElementById("addressPMob").style.display='none';
        addressFlag=1;
    }else{
        document.getElementById("addressPMob").style.display='block';
        document.getElementById("addressPMob").style.color='rgb(201, 98, 98)';
        addressFlag=0;
    }
}

})

const username = document.getElementById("username");
const password = document.getElementById("password");

//form
const form = document.getElementById("myForms");

//validation colors

const green = "#4CAF50";
const red = "#F44336";


form.addEventListener('submit', function(event){
    event.preventDefault();
    if(
        validateUsername() &&
        validatePassword()
    ){
        const name = firstName.value;
        const container = document.querySelector('div.container');
        const loader = document.createElement('div');
        loader.className = 'progress';
        const loadingBar = document.createElement('div');
        loadingBar.className = 'indeterminate';
        loader.appendChild(loadingBar);
        container.appendChild(loader);
        setTimeout(function(){
            const loaderDiv = document.querySelector('div.progress');
            const panel = document.createElement('div');
            panel.className = 'card-panel green';
            const text = document.createElement('span');
            text.appendChild(document.createTextNode('sign up successful, welcome to Quiz App ${name}'));
            panel.appendChild(text);
            container.replaceChild(panel, loaderDiv);
        }, 1000)
    }
});


function validatePassword(){
    if(checkIfEmpty(password)) return;            //checking if the field is empty
    if(!meetLength(password, 4, 50)) return;      //checking the length of the password

    if(!containsCharacters(password, 2)) return;
    return true; 
}

function validateUsername(){
    if(checkIfEmpty(username)) return;
    if(!containsCharacters(username, 4)) return;
    return true;
}




//utility function
function checkIfEmpty(field){
    if(isEmpty(field.value.trim())){
        setInvalid(field, "${field.name} must not be empty")
        return true;       //set field invalid
    }
    else{
        setValid(field);
        return false;
    }
}

function isEmpty(value){
    if(value === "") return true;
    return false;
}

function setInvalid(field, massage){
    field.className = "Invalid";
    field.nextElementSibling.innerHTML = massage;
    field.nextElementSibling.style.color = red;
}

function setValid(field){
    field.className = "valid";
    field.nextElementSibling.innerHTML = "";
   // field.nextElementSibling.style.color = green;
}

function checkIfOnlyLetters(field){
    if(/^[a-zA-Z ]+$/.test(field.value)){
        setValid(field);
        return true;
    }
    else{
        setInvalid(field, "$(field.name) must contain only letters");
        return false;
    }
}

function meetLength(field, minLength, maxLength){
    if(field.value.length >= minLength && field.value.length< maxLength){
        setValid(field);
        return true;
    }
    else if(field.value.length < minLength){
        setInvalid(field, "$(field.name) must be at least $(minLength) characters long");
        return false;
    }
    else{
        setInvalid(field, "$(field.name) must be shorter than $(maxLength) characters");
        return false;
    }
}

function containsCharacters(field, code){
    let regEx;
    switch (code){
        case 1:
            regEx = /.+/;
            return matchWithRegEx(regEx, field, "must contain at least a letter");
        case 2:
            regEx = /\w+/g;
            return matchWithRegEx(regEx, field, "must contain a letter and numbers");
        case 3:
            regEx = /[a-zA-Z]+/g;
            return matchWithRegEx(regEx, field, "must contain a lowercase and uppercase letter and numbers");
        case 4:
            regEx = /\s/g;
            return matchWithRegEx(regEx, field, "must not contain any space");
        
        default:
            return false;
              
    }
        
}
        



function matchWithRegEx(regEx, field, massage){
    if (field.value.match(regEx)){
        setValid(field);
        return true;
    }
    else{
        setInvalid(field, massage)
            return false;
        
    }
}

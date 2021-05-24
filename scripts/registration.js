function checkName(event) {
    const input = event.currentTarget;
    
    /* if(formStatus[input.name] = /^[a-zA-Z]+$/.test(input.value)) { */
    if (formStatus[input.name] = input.value.length > 0) {
        input.parentNode.parentNode.classList.remove('errorj');
    } else {
        input.parentNode.parentNode.classList.add('errorj');
    }
    
    checkForm();
}

function jsonCheckUsername(json) {
    // Controllo il campo exists ritornato dal JSON
    if (formStatus.username = !json.exists) {
        document.querySelector('.Username').classList.remove('errorj');
    } else {
        document.querySelector('.Username span').textContent = "Nome utente già utilizzato";
        document.querySelector('.Username').classList.add('errorj');        
    }
    checkForm();
}

function jsonCheckEmail(json) {
    // Controllo il campo exists ritornato dal JSON
    if (formStatus.email = !json.exists) {
        document.querySelector('.Email').classList.remove('errorj');
    } else {
        document.querySelector('.Email span').textContent = "Email già utilizzata";
        document.querySelector('.Email').classList.add('errorj');
    }
    checkForm();
}

function fetchResponse(response) {
    if (!response.ok) return null;
    return response.json();
}

function checkUsername(event) {
    const input = document.querySelector('.Username input');

    if(!/^[a-zA-Z0-9_]{1,15}$/.test(input.value)) {
        input.parentNode.parentNode.querySelector('span').textContent = "Sono ammesse lettere, numeri e underscore. Max. 15";
        input.parentNode.parentNode.classList.add('errorj');
        formStatus.username = false;
        checkForm();
    } else {
        fetch("check_username.php?q="+encodeURIComponent(input.value)).then(fetchResponse).then(jsonCheckUsername);
    }    
}

function checkEmail(event) {
    const emailInput = document.querySelector('.Email input');
    if(!/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(String(emailInput.value).toLowerCase())) {
        document.querySelector('.Email span').textContent = "Email non valida";
        document.querySelector('.Email').classList.add('errorj');
        formStatus.email = false;
        checkForm();
    } else {
        fetch("check_email.php?q="+encodeURIComponent(String(emailInput.value).toLowerCase())).then(fetchResponse).then(jsonCheckEmail);
    }
}

function checkPassword(event) {
    const passwordInput = document.querySelector('.Password input');
    if (formStatus.password = passwordInput.value.length >= 8) {
        document.querySelector('.Password').classList.remove('errorj');
    } else {
        document.querySelector('.Password').classList.add('errorj');
    }
    checkForm();
}

function checkForm() {
    // Controlla consenso dati personali
    document.getElementById('submit').disabled =
    // Controlla che tutti i campi siano pieni
    Object.keys(formStatus).length !== 5 || 
    // Controlla che i campi non siano false
    Object.values(formStatus).includes(false);
}

const formStatus = {};
document.querySelector('.Nome input').addEventListener('blur', checkName);
document.querySelector('.Cognome input').addEventListener('blur', checkName);
document.querySelector('.Username input').addEventListener('blur', checkUsername);
document.querySelector('.Email input').addEventListener('blur', checkEmail);
document.querySelector('.Password input').addEventListener('blur', checkPassword);

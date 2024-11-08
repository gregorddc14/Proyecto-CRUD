const frmEmployee = document.querySelector('#frmEmployee');
const inputName = document.querySelector('#name')
const inputLastname = document.querySelector('#lastname')
const inputPosition = document.querySelector('#position')
const inputSalary = document.querySelector('#salary')

document.addEventListener('DOMContentLoaded', () => {
    frmEmployee.addEventListener('submit', validateForm);
});

function validateForm(e){
    e.preventDefault();
    
    let validate = [
        validations(inputSalary, 'Salario',10),
        validations(inputPosition, 'Posicion', 50),
        validations(inputLastname, 'Apellido', 50), 
        validations(inputName, 'nombre', 50),
    ];

    const errors = validate.filter(v => !v.valid);

    if (errors.length > 0) {
        errors.forEach(err => showAlert(err.msg, 'danger'));
        return;
    }
    
saveData();

    //console.log('Passed');  
    
}

//Guarda un empleado
async function saveData() {
    
    const url = location.origin = '/save.php';
    const data = new FormData(frmEmployee);
    try {
        const fetchResponse = await fetch (url, {
            method: 'POST',
            body: data, 
        });
        const res = await fetchResponse.json();
        console.log (res)
    } catch (error) {
        console.error(error);
    }
}

//validaciones
function validations(input, inputText, maxlength ){
    const inputValue = input.value.trim();
    const regex = /^[a-z0-9_-]{3,15}$/;

    if (inputValue === '') {
        return { valid: false, msg: `El ${inputText} es requerido`};
    }

    if (inputValue.length > maxlength) {
        return { valid: false, msg: `Has superado los ${maxlength} permitidos` };

    }

    if (!regex.test(inputValue) ){
        return { valid: false, msg: `Has ingresado caracteres no permitidos` };

    }

    return {valid: true}

}

//Genera una alerta
function showAlert(message, type) {
    const alertNotRepeat = document.querySelector('.alert');
    if ( alertNotRepeat ) alertNotRepeat.remove();

    const div = document.createElement('div');
    div.textContent = message;
    div.classList.add('alert', 'text-center', 'fw-bold', 'py-1', `alert-${type}`);

    const insertAlert = document.querySelector('.insert-alert');
    insertAlert.insertBefore(div, frmEmployee);

    setTimeout(() => div.remove(), 4000);
}
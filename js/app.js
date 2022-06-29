"use strict";

let baseURL = document.querySelector('#baseURL').href;

//catalogo.html

let advancedFilterForm = document.querySelector('#advancedFilterForm');
advancedFilterForm.addEventListener('submit', function(e){
    e.preventDefault();

    assignSemanticURL(advancedFilterForm);
});

let productFilterForm = document.querySelector('#productFilterForm');
productFilterForm.addEventListener('submit', function(e){
    e.preventDefault();

    assignSemanticURL(productFilterForm);
});

let countryFilterForm = document.querySelector('#countryFilterForm');
countryFilterForm.addEventListener('submit', function(e){
    e.preventDefault();

    assignSemanticURL(countryFilterForm);
});

let tableForm = document.querySelector('#tableForm');
tableForm.addEventListener('submit', function(e){
    e.preventDefault();

    assignSemanticURL(tableForm);
});

let modifyError = document.querySelector('#modifyError');
let modifyBtns = document.querySelectorAll('.modifyBtns');
modifyBtns.forEach(btn => {
    btn.addEventListener('click', function(e){
        e.preventDefault();

        let formData = new FormData(tableForm);
        let params = formData.getAll('params');
        
        let newUrl = `${baseURL}modifyProduct/${btn.id}`;

        //si inputsFilled vale 0 es pq hay un input blanked
        let inputsFilled = 1;
        for (const param of params) {
            if (param == "") {
                inputsFilled = 0;
            }
        }
        //si todos los inputs están con valores entonces
        if (inputsFilled !== 0) {
            for (const param of params) {
                newUrl += `/${param}`; //newUrl quedaría http://localhost/projects/TPE1/modifyProduct/id/product/country/price       
            }
            window.location.assign(newUrl);
        }else{
            modifyError.innerHTML = "Ingrese en todos los espacios para editar!";
        }
    }); 
});

/*en la barra url muestra, como si fuera con metodo GET pero semántico*/
function assignSemanticURL(form) {

    //form.action nos da la baseURL + el action q tiene
    let action = form.action;

    let formData = new FormData(form);
    let params = formData.getAll('params'); //agarramos los inputs

    let newUrl = action; //creamos nueva url q se va a asignar

    for (const param of params) {
        //le agregamos los parametros a la nuevaURL semántica
        newUrl += `/${param}`;
    }
    //lo asignamos al url
    window.location.assign(newUrl);
}

//catalogo.html
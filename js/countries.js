"use strict";

let baseURL = document.querySelector('#baseURL').href;

let addCountryForm = document.querySelector('#addCountryForm');
addCountryForm.addEventListener('submit', function(e){
    e.preventDefault();

    assignSemanticURL(addCountryForm);
});

let modifyBtns = document.querySelectorAll('.modifyBtns');
modifyBtns.forEach(btn => {
    btn.addEventListener('click', function(e){
        e.preventDefault();

        let formData = new FormData(addCountryForm);
        let params = formData.getAll('params');
        let id = btn.getAttribute('data-id');
        console.log(id);
        
        let newUrl = `${baseURL}modifyCountry/${id}`;

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
                newUrl += `/${param}`;
            }
            window.location.assign(newUrl);
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
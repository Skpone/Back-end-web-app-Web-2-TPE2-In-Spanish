"use strict";

//catalogo.html

let advancedFilterForm = document.querySelector('#advancedFilterForm');
advancedFilterForm.addEventListener('submit', function(e){
    e.preventDefault();

    getProductsByAdvancedSearch(advancedFilterForm);
});

let productFilterForm = document.querySelector('#productFilterForm');
productFilterForm.addEventListener('submit', function(e){
    e.preventDefault();

    getProductsByProduct(productFilterForm);
});

let countryFilterForm = document.querySelector('#countryFilterForm');
countryFilterForm.addEventListener('submit', function(e){
    e.preventDefault();

    getProductsByCountry(countryFilterForm);
});

//catalogo.html

//vue

Vue.filter('truncate', function (value, size) {
    if (!value) return '';
    value = value.toString();
  
    if (value.length <= size) {
      return value;
    }
    return value.substr(0, size) + '...';
  });
  
let API_URL = 'api/products/';

let app = new Vue({
    el: '#app',
    data: {
        title: 'Lista de Comidas',
        description: 'Los mejores platos de cada país en un solo lugar!',
        products: [],
    },  
})

async function getProductsByAdvancedSearch(form) {

    //obtenemos todos los datos del form
    let formData = new FormData(form);
    let params = formData.getAll('params');
    try {
        let response = await fetch(API_URL);
        //products es un arreglo de objs
        let products = await response.json();

        //arreglo de objs filtrados
        let filteredProducts = [];

        //recorremos cada obj del arreglo
        for (const obj of products) {
            //si el producto del objeto == values de todos los inputs
            if ((obj.product == params[0])&&(obj.type == params[1])&&(obj.country == params[2])&&(obj.ingredients == params[3])&&(obj.price == params[4])) {
                filteredProducts.push(obj);
            }
        }
        
        //asignamos los productos filtrados obtenidos
        app.products = filteredProducts;

    } catch (e) {
        console.log(e);
    }
}

async function getProductsByProduct(form) {

    //obtenemos todos los datos del form
    let formData = new FormData(form);
    let params = formData.getAll('params');
    try {
        let response = await fetch(API_URL);
        //products es un arreglo de objs
        let products = await response.json();

        //arreglo de objs filtrados
        let filteredProducts = [];

        //recorremos cada obj del arreglo
        for (const obj of products) {
            //si el producto del objeto == value del input
            if (obj.product == params[0]) {
                filteredProducts.push(obj);
            }
        }
        
        //asignamos los productos filtrados obtenidos
        app.products = filteredProducts;

    } catch (e) {
        console.log(e);
    }
}

async function getProductsByCountry(form) {

    //obtenemos todos los datos del form
    let formData = new FormData(form);
    let params = formData.getAll('params');
    try {
        let response = await fetch(API_URL);
        //products es un arreglo de objs
        let products = await response.json();

        //arreglo de objs filtrados
        let filteredProducts = [];

        //recorremos cada obj del arreglo
        for (const obj of products) {
            //si el producto del objeto == value del input
            if (obj.country == params[0]) {
                filteredProducts.push(obj);
            }
        }
        
        //asignamos los productos filtrados obtenidos
        app.products = filteredProducts;

    } catch (e) {
        console.log(e);
    }
}

async function getProducts() {
    try {
        let response = await fetch(API_URL);
        let products = await response.json();

        //asignamos los productos obtenidos al arreglo (de objetos ahora) products
        app.products = products;   
    } catch (e) {
        console.log(e);
    }
}

//ya lo invocamos asi la tabla con los productos no queda vacía
getProducts();

//vue
"use strict";

let scoreFilterForm = document.querySelector('#scoreFilterForm');
scoreFilterForm.addEventListener('submit', function(e){
    e.preventDefault();
    
    getCommentsByScore(scoreFilterForm);
})

let ordFilterForm = document.querySelector('#ordFilterForm');
ordFilterForm.addEventListener('submit', function(e){
    e.preventDefault();

    getCommentsORD(ordFilterForm);
})

let resetCommentsBtn = document.querySelector('#resetCommentsBtn');
resetCommentsBtn.addEventListener('click', function(e) {
    e.preventDefault();
    getComments();
})

let listForm = document.querySelector('#listForm');
listForm.addEventListener('submit', function(e){
    e.preventDefault();

    addComment(listForm);
})

//vue
let API_URL = 'api/comments/';

let app = new Vue({
    el: '#app',
    data: {
        title: 'Comentarios',
        comments: [],
    },
    methods: {
        deleteComment: async function (e) {
            deleteComment(e);
        },
    },
})

async function deleteComment(e) {
    try {
        e.preventDefault();
        let id = e.target.getAttribute('data-id');
        let response = await fetch(API_URL + id, {
            method: 'DELETE',
        })

        if (response.ok) {
            //actualiza si se eliminó
            getComments();
        }
    } catch (e) {
        console.log(e);
    }
}

async function getCommentsByScore(form) {
    
    let formData = new FormData(form);
    let params = formData.getAll('params');
    try {
        let response = await fetch(API_URL + getProductID());
        
        let comments = await response.json();

        let filteredComments = [];

        for (const obj of comments) {
            //si el puntaje del objeto == value del input (que es un puntaje elegido)
            if (obj.score == params[0]) {
                filteredComments.push(obj);
            }
        }
        
        //asignamos los productos filtrados obtenidos
        app.comments = filteredComments;

    } catch (e) {
        console.log(e);
    }
}

async function getCommentsORD(form) {

    let formData = new FormData(form);
    let params = formData.getAll('params');
    let ord = params[0];

    try{
        let response = await fetch(`${API_URL}order/${getProductID()}/${ord}`);

        let comments = await response.json();
        
        app.comments = comments;
    }catch (e){
        console.log(e);
    }
}

async function addComment(form){
    let formData = new FormData(form);
    let params = formData.getAll('params');
    
    let comment = {
        comment: params[0],
        score: params[1],
        id_product_fk: getProductID(),
        id_user_fk: getUserID(),
    }

    try {
        let response = await fetch(API_URL, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify(comment),
    })

    if (response.ok) {
        //actualiza si se modificó
        getComments();
    }

    } catch (e) {
        console.log(e);
    }
} 

async function getComments() {
    try {
        let response = await fetch(API_URL + getProductID());
        let comments = await response.json();

        app.comments = comments;   
    } catch (e) {
        console.log(e);
    }
}

function getProductID() {
    let productID = document.querySelector('#product-id').getAttribute('data-id');
    return productID;
}

function getUserID() {
    let userID = document.querySelector('#user-id').getAttribute('data-id');
    return userID;
}

getComments();
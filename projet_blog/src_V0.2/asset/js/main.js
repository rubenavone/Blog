import { MasterViewModal } from './modal.js';

let path = window.location.pathname;

console.log(path);

if (path === "/"){
    console.log("Home page");
    const {Modal} = await import('./modal.js');
    console.log(Modal);
    const {animateText} = await import('./animateText.js');
    
    try{
        const modal = new Modal(document.querySelector(".modal-button-js"), null, document.querySelector(".modal-view-js"))
        modal.eventOneButton();
    }catch(e){
        console.error("Vous êtes déjà connecté " + e);
    }

    animateText();
}else if(path === "/admin/articles" || path === "/admin/categorie" || path === "/admin/utilisateur"){
    console.log("Admin pages ");
    const modal = new MasterViewModal(null, document.querySelectorAll(".modal-button-js"), document.querySelector(".modal-view-js"))
    modal.eventAllButton();
}

/**
 * MENU
 */
let navSelector = document.querySelector("nav");
let burgerNavSelector = document.querySelector(".burger-nav-js");
//Get the connexion element in the nav
burgerNavSelector.addEventListener("click", function () {
    // navSelector.classList.toggle("h-10");
    navSelector.classList.toggle("h-full");
})






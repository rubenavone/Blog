import {Modal,MasterViewModal,modalLauncher} from './modal';
let path = window.location.pathname.split("/");
console.log(path.splice(" "));
if (path.includes("")){
    console.log("Home page");
    const modal = new Modal(document.querySelector(".modal-button-js"), null, document.querySelector(".modal-view-js"))
    modal.eventOneButton();
}else if(path.includes("admin")){
    console.log("Main Admin Page");
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






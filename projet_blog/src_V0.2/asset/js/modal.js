
/**
 * MENU
 */
let navSelector = document.querySelector("nav");
let burgerNavSelector = document.querySelector(".burger-nav-js");
//Get the connexion element in the nav
burgerNavSelector.addEventListener("click", function () {
    console.log("Hello");
    navSelector.classList.toggle("h-10");
    navSelector.classList.toggle("h-full");
})


/**
 * MODAL
 */
class Modal {

    constructor(buttonSelector, allButton, modalViewSelector) {
        this.buttonSelector = buttonSelector;
        this.allButton = allButton;
        this.modalViewSelector = modalViewSelector;
    }

    eventOneButton = () => {
        this.buttonSelector.addEventListener("click", (e) => {
            e.preventDefault();
            this.modalViewSelector.classList.remove("hidden");
            document.body.classList.add("overflow-hidden");
        });
        this.#modalHandler();
    }

    eventAllButton = () => {
        this.allButton.forEach(oneButton => {
            oneButton.addEventListener("click", (e) => {
                e.preventDefault();
                this.modalViewSelector.classList.toggle("hidden");
            });
        });
        this.#modalHandler();
    }

    #modalHandler = () =>{
        this.modalViewSelector.addEventListener("click",  (e) => {
            if (e.target !== this.modalViewSelector) {
                return;
            }
            this.modalViewSelector.classList.add("hidden");
            document.body.classList.remove("overflow-hidden");
        })
    }
}

if (document.querySelector(".modal-button-js") !== null && document.querySelector(".modal-view-js") !== null) {
    if(document.querySelectorAll(".modal-button-js".length > 1)){
    const modal = new Modal(null,document.querySelectorAll(".modal-button-js"), document.querySelector(".modal-view-js"))
    modal.eventAllButton();
    }else{
        const modal = new Modal(document.querySelector(".modal-button-js"), null, document.querySelector(".modal-view-js"))
        modal.eventOneButton();
    }

}else{
    console.log("Il n'y a pas de modal sur cette page !");
}


/**
 * GSAP ANIMATION
 */


//Text animation

//Selector 
let sectionPresentationSelector = document.querySelector(".presentation");

function writeText(newText) {
    gsap.to(".text-change-js", { repeat: 1, duration: 4, text: newText, ease: "out", yoyo: true });



}
if (sectionPresentationSelector !== null) {
    setInterval(function () {
        document.querySelector(".clignote").classList.toggle("hidden");
    }, 500);

    sectionPresentationSelector.addEventListener("mouseenter", function (e) {
        console.log(e);

        writeText("JavaScript");
        setTimeout(function () {
            writeText("PHP");
        }, 8000);
        setTimeout(function () {
            writeText("Tailwinds");
        }, 16000);

        e.target.removeEventListener(e.type, arguments.callee);
    })
}

/**
 * Fonction qui permet de rendre saine une chaine de caractère
 * Cela permet d'éviter une injection XSS
 * @param {String} text 
 * @returns 
 */
function escapeHtml(text) {
    var map = {
        '&': '&amp;',
        '<': '&lt;',
        '>': '&gt;',
        '"': '&quot;',
        "'": '&#039;'
    };

    return text.replace(/[&<>"']/g, function (m) { return map[m]; });
}
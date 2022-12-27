



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
        this.modalHandler();
    }

    modalHandler = () => {
        this.modalViewSelector.addEventListener("click", (e) => {
            if (e.target !== this.modalViewSelector) {
                return;
            }
            this.modalViewSelector.classList.add("hidden");
            document.body.classList.remove("overflow-hidden");
        })
    }

   
}

class MasterViewModal extends Modal {


    #masterViewDeleter = (id) => {
        try{
            document.querySelector(".valid").parentElement.href = `articles/delete/${id} `;

        }catch(e){

        }
    }

    eventAllButton = () => {
        this.allButton.forEach(oneButton => {
            oneButton.addEventListener("click", (e) => {
                e.preventDefault();
                this.modalViewSelector.classList.toggle("hidden");
                document.body.classList.add("overflow-hidden");
                this.#masterViewDeleter(e.target.id);
            });
        });
        this.modalHandler();
    }
}

function modalLauncher() {
    let flag = false;
    if (document.querySelector(".modal-button-js") !== null && document.querySelector(".modal-view-js") !== null) {
        flag = true;
    } else {
        console.log("Il n'y a pas de modal sur cette page !");
    }

    if (flag && document.querySelectorAll(".modal-button-js".length > 1)) {

    } else {
   
    }
}


//Cette ligne peut permettre de faire la distinction entre les page et ainsi adapter l'url de redirection de la modal
console.log(window.location.href.split("/").includes("articles"));

/**
 * END MODAL
 */

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
 * Switch light/dark theme
 * TODO add it to the local Storage
 * TODO take a look on navigator preference
 */
let cssThemeSelector = document.querySelector(".dark");
let boiteDeclenche = document.querySelector("#boite");

let clicked = true


boiteDeclenche.addEventListener("click", function () {
    if (clicked === true) {
        console.log("aller", clicked);
        moveForward();
        clicked = false;
    } else {
        console.log("retour", clicked);
        moveBackward();
        clicked = true;
    }


})

function moveForward() {
    gsap.to(".box", { x: 34, backgroundColor: "#fcd34d" });
}


function moveBackward() {
    gsap.to(".box", { x: 0, backgroundColor: "#9ca3af" });
}

/**
 * END GSAP
 */

export {Modal, MasterViewModal, modalLauncher}
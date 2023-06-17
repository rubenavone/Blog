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
        let base = window.location.pathname.split("/")[2];
        try{
            document.querySelector(".valid").parentElement.href = `${base}/delete/${id} `;
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
                console.log(e.target);
                
            });
        });
        this.modalHandler();
    }
}


/**
 * END MODAL
 */




export {Modal, MasterViewModal};

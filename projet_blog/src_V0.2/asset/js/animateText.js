/**
 * GSAP ANIMATION
 */
//Text animation
console.log("animaion loaded")
//Selector 
function animateText() {

    let sectionPresentationSelector = document.querySelector(".presentation");

    function writeText(newText) {
        gsap.to(".text-change-js", { repeat: 1, duration: 2, text: newText, ease: "out", yoyo: true });
    }
    function lastWord(newText){
        gsap.to(".text-change-js", { repeat: 0, duration: 2, text: newText, ease: "out", yoyo: false });
    }
    setInterval(function () {
        document.querySelector(".clignote").classList.toggle("hidden");
    }, 500);

    sectionPresentationSelector.addEventListener("mouseenter", function launchText(e) {
        console.log(e);
        writeText("JS");
        setTimeout(function () {
            writeText("PHP");
        }, 4000);
        setTimeout(function () {
            writeText("Tailwinds");
        }, 8000);
        setTimeout(function () {
            lastWord("Et vous ?");
        }, 12000);
        sectionPresentationSelector.removeEventListener("mouseenter", launchText)
    })

}

/**
 * Switch light/dark theme
 * TODO add it to the local Storage
 * TODO take a look on navigator preference
 */
function darkOrLight() {

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
}

/**
 * END GSAP
 */

export { animateText };
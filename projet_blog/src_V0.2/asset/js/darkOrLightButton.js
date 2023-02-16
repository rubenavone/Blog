/**
 * Réalisation de l'animation suivante avec javascript
 */

function buttonDarkOrLight() {
    let changeToSun = ['🌑', '🌒', '🌓', '🌔', '🌕'];
    let changeToNight = ['🌕', '🌖', '🌗', '🌘', '🌑']
    let isDay = true;
    let i = 0;
    let whereIsTheButton = document.querySelector("#box")
    /**
     * DOM CREATION
     */
    let dayNightChanger = document.createElement("button");
    let moonOrSun = document.createElement("p");
    whereIsTheButton.append(dayNightChanger);
    dayNightChanger.append(moonOrSun);

    moonOrSun.textContent = changeToNight[0];
    dayNightChanger.classList.add("day-night-button");
    moonOrSun.classList.add("day-night-emoji");

    dayNightChanger.addEventListener("click", () => {
        let changer = null;
        if (isDay == true) {
            changer = changeToNight
            isDay = false;
        } else {
            changer = changeToSun;
            isDay = true;
        }
        let launchInterval = launchDayNightChanger();
        moonOrSun.classList.toggle("align-right");
        dayNightChanger.classList.toggle("back-day-color");

        function animationDayNightChanger() {
            let max = changer.length;
            moonOrSun.textContent = changer[i];
            i++;
            if (i == max) {
                stopDayNightChanger()
                i = 0;
            }
        }
        function launchDayNightChanger() {
            return setInterval(animationDayNightChanger, 40);
        }
        function stopDayNightChanger() {
            clearInterval(launchInterval);
        }               
    })
}

export { buttonDarkOrLight };
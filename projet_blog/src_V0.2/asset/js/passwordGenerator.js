/*
Pour créer nos utilisateur il va nous falloir un certain nombre de mot de passe.
3 en tout.

Nous allons utilisé la technique de la phrases pour simplifier la création.
Il faut également un pattern majuscule minuscule qui sera 
1 5 7 12 -> cela represente la premiere cinquième septième et douzième lettre en majuscule

Il faut également intégrer des chiffre aussi nous utiliseront le leet speech pour trouver les chiffre relatif au lettres ainsi 
3 9 11 seront des lettres transformé en chiffres.

Enfin il faudra un caractère spécial voir deux pour solidifier un peu plus notre mot de passe.
Disont au début et à la fin.

*/

let randPass, randNumber;

validationBtnSelector.addEventListener("click", function(e) {
    e.preventDefault();
    count = 0;
    
    //third step we need to split the phrases 
    //fourth at the same time with the map that will return the first letter change or not
    let firstLetter = passInputSelector.value.split(" ").map(element => {
    
      count++;
      //setting up array that will be used to see if it need to be cap or l33t or normal
      let itWillBeUpper = [1, 5, 7, 12];
      let itWillBeL33t = [3, 9, 11];
      // cap changer
      if (itWillBeUpper.includes(count)) {
        return element[0].toUpperCase();
      }
      // l33T changer who calls the function to do that
      if (itWillBeL33t.includes(count)) {
        return letterToL33t(element[0]);
      }
      
      return element[0];
    });
    
    firstLetter = [randomSpecialChar(), ...firstLetter, randomSpecialChar()];
    
    passwordOutputSelector.textContent = firstLetter.join("");
  })
  
  
  function letterToL33t(letter) {
    return letter
      .replace("a", 4)
      .replace("b", 8)
      .replace("c", "(")
      .replace("d", "[)")
      .replace("e", 3)
      .replace("f", "|=")
      .replace("g", 6)
      .replace("h", "#")
      .replace("i", 1)
      .replace("k", "_|")
      .replace("l", "|<")
      .replace("m", "|v|")
      .replace("n", "|\|")
      .replace("o", "()")
      .replace("p", "|*")
      .replace("q", "<|")
      .replace("r", 2)
      .replace("s", 5)
      .replace("t", 7)
      .replace("u", "(_)")
      .replace("v", "\/")
      .replace("w", "vv")
      .replace("x", "><")
      .replace("y", "/")
      .replace("z", "7_");
  
  }
  
  function randomSpecialChar(){
    let specialChar = ["&","é","\"","'","~","#","{","(","[","-","|","`","_","^","@",")", "]", "=","}"]
    return specialChar[Math.floor(Math.random() * specialChar.length)];
  }
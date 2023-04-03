let randPass, randNumber;
validationBtnSelector.addEventListener("click", function(e) {
    e.preventDefault();
    count = 0;
    
    let firstLetter = passInputSelector.value.split(" ").map(element => {
    
      count++;
      let itWillBeUpper = [1, 5, 7, 12];
      let itWillBeL33t = [3, 9, 11];
      if (itWillBeUpper.includes(count)) {
        return element[0].toUpperCase();
      }
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
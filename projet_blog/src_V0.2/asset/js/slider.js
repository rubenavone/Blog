let pictures = [
    `https://picsum.photos/id/${rand()}/800/600`,
    `https://picsum.photos/id/${rand()}/800/600`,
    `https://picsum.photos/id/${rand()}/800/600`,
    `https://picsum.photos/id/${rand()}/800/600`,
  ]
  function rand(){
    return Math.round(Math.random()* 80);
  }
  
  let slider = {
    sliderSelector: document.querySelector(".slider"),
    leftArrowSelector: document.querySelector(".left-arrow"),
    rightArrowSelector: document.querySelector(".right-arrow"),
    active: 1,
  
    init: function() {
      this.createArticles(pictures);
      this.handleLeft();
      this.handleRight();
    },
  
    createArticles: function(array) {
      let i = 0;
      array.forEach(picture => {
        i++;
        let newArticle = document.createElement("article");
        let newPicture = document.createElement("img")
        let newDiv = document.createElement("div");
        let newAnchor = document.createElement("div");
        newPicture.src = picture;

        newArticle.id = i;
        newArticle.classList.add("w-screen");
        newArticle.classList.add("flex");
        
        newDiv.classList.add("w-screen");
        newDiv.textContent = "adzdazdqvcqsgazr";
        this.sliderSelector.append(newArticle);
        newArticle.append(newDiv);
        newArticle.append(newPicture);
      })
    },
    handleRight: function() {
      this.rightArrowSelector.addEventListener("click", (e) => {
        this.movingLeftRight("right", pictures.length);
      })
    },
    handleLeft: function() {
      this.leftArrowSelector.addEventListener("click", (e) => {
        this.movingLeftRight("left", 1);
      })
    },
    movingLeftRight: function(leftOrRight, value) {
      if (this.active == value) {
        this.sliderSelector.classList.remove("smooth");
        leftOrRight === "left" ? this.active = pictures.length : this.active = 1;
      } else {
        this.sliderSelector.classList.add("smooth");
        leftOrRight === "left" ? this.active-- : this.active++;
      }
        location.href = "#" + this.active;
    }
  }
  
export { slider };
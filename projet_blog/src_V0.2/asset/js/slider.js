import { pictures } from "./contentSlider";


  let slider = {
    newSection: null,
    newDiv: null,
    newArticleSection: null,
    newArticleContent: null,
    newArticleTitle: null,
    newPicture: null,
    sliderSelector: document.querySelector(".slider"),
    leftArrowSelector: document.querySelector(".left-arrow"),
    rightArrowSelector: document.querySelector(".right-arrow"),
    active: 1,
  
    init: function () {
      if(window.screen.width > 1280){
      this.createArticles(pictures);
      this.handleLeft();
      this.handleRight();
      }else{
        console.log("Vous êtes sur mobile");
      }
    },
    createHTML: function () {
      this.newSection = document.createElement("section");
      this.newDiv = document.createElement("div");
      this.newArticleSection = document.createElement("aside");
      this.newArticleContent = document.createElement("p");
      this.newArticleTitle = document.createElement("h2")
      this.newPicture = document.createElement("img")
    },
    createArticles: function (array) {
      let i = 0;
      array.forEach(picture => {
        i++;
  
        this.createHTML();
  
        this.newPicture.src = picture.url;
  
        this.newDiv.id = i;
        this.newDiv.classList.add("w-screen");
        this.newDiv.classList.add("flex");
        this.newArticleTitle.classList.add("text-3xl");
        this.newPicture.classList.add("slider-pic")

        this.newArticleContent.textContent = picture.content;
        this.newArticleTitle.textContent = picture.title;
  
        this.sliderSelector.append(this.newDiv);
        this.newDiv.append(this.newArticleSection);
        this.newArticleSection.append(this.newArticleTitle);
        this.newArticleSection.append(this.newArticleContent);
        this.newDiv.append(this.newPicture);
      })
    },
    handleRight: function () {
      this.rightArrowSelector.addEventListener("click", (e) => {
        this.movingLeftRight("right", pictures.length);
      })
    },
    handleLeft: function () {
      this.leftArrowSelector.addEventListener("click", (e) => {
        this.movingLeftRight("left", 1);
      })
    },
    movingLeftRight: function (leftOrRight, value) {
      if (this.active == value) {
        this.sliderSelector.classList.remove("smooth");
        leftOrRight === "left" ? this.active = pictures.length : this.active = 1;
      } else {
        this.sliderSelector.classList.add("smooth");
        leftOrRight === "left" ? this.active-- : this.active++;
      }
      location.href = "#" + this.active;
      window.scrollTo(0, 0);
    }
  }
  

export { slider };



"use strict";

class Slider {

    constructor() {
        this.sliderOne = document.getElementById("slider-one");
        this.sliderTwo = document.getElementById("slider-two");
        this.sliderThree = document.getElementById("slider-three");
    }

    hiddenSliderOne() {
        this.sliderOne.style.display = "none";
    }

    hiddenSliderTwo() {
        this.sliderTwo.style.display = "none";
    }

}

let sliders = new Slider();

sliders.hiddenSliderOne();
sliders.hiddenSliderTwo();

console.log("Hey");

"use strict";

class Slider {

    constructor() {
        /**
         * Determine the slider that actually is showed.
         * @type {number}
         */
        this.sliderActualShowed = 1;
        this.sliderOne = document.getElementById("slider-one");
        this.sliderTwo = document.getElementById("slider-two");
        this.sliderThree = document.getElementById("slider-three");

        this.hiddenSliderTwo();
        this.hiddenSliderThree();
    }

    hiddenSliderOne() {
        this.sliderOne.style.display = "none";
    }

    showSliderOne() {
        this.sliderOne.style.display = "table-cell";
    }

    hiddenSliderTwo() {
        this.sliderTwo.style.display = "none";
    }

    showSliderTwo() {
        this.sliderTwo.style.display = "table-cell";
    }

    hiddenSliderThree() {
        this.sliderThree.style.display = "none";
    }

    showSliderThree() {
        this.sliderThree.style.display = "table-cell";
    }

    showPrevSlider() {

    }

    showNextSlider() {
        if (this.sliderActualShowed === 1) {
            this.hiddenSliderOne();
            this.showSliderTwo();
            this.sliderActualShowed = 2;
        } else if (this.sliderActualShowed === 2) {
            this.hiddenSliderTwo();
            this.showSliderThree();
            this.sliderActualShowed = 3;
        } else if (this.sliderActualShowed === 3) {
            this.hiddenSliderThree();
            this.showSliderOne();
            this.sliderActualShowed = 1;
        }
    }
}

let sliders = new Slider();

function showPrevSlider() {
    sliders.showPrevSlider();
}

function showNextSlider() {
    sliders.showNextSlider();
}
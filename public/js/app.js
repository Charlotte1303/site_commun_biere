//step 1: get DOM
let nextDom = document.getBiereById('next');
let prevDom = document.getBiereById('prev');

let carouselDom = document.querySelector('.carousel');
let SliderDom = carouselDom.querySelector('.carousel .list');
let timeDom = document.querySelector('.carousel .time');
let timeRunning = 5000;
let timeAutoNext = 7000;

function showSlider(type) {
    let SliderItemsDom = SliderDom.querySelectorAll('.carousel.list.item');
    let thumbnailItemsDom = document.querySelectorAll('.carousel.thumbnail.item');

    if (type === 'next') {
        let firstItem = SliderItemsDom[0];
        let firstThumbnail = thumbnailItemsDom[0];
        SliderDom.appendChild(firstItem);
        thumbnailBorderDom.appendChild(firstThumbnail);
        carouselDom.classList.add('next');
    } else {
        let lastItem = SliderItemsDom[SliderItemsDom.length - 1];
        let lastThumbnail = thumbnailItemsDom[thumbnailItemsDom.length - 1];
        SliderDom.prepend(lastItem);
        thumbnailBorderDom.prepend(lastThumbnail);
        carouselDom.classList.add('prev');
    }

    clearTimeout(runTimeOut);
    runTimeOut = setTimeout(() => {
        carouselDom.classList.remove('next');
        carouselDom.classList.remove('prev');
    }, timeRunning);

    clearTimeout(runNextAuto);
    runNextAuto = setTimeout(() => {
        next.click();
    }, timeAutoNext);
}
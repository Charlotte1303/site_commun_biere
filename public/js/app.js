//step 1: get DOM
let nextDom = document.getElementById('next');
let prevDom = document.getElementById('prev');

let carouselDom = document.querySelector('.carousel');
let SliderDom = carouselDom.querySelector('.carousel .list');
let timeDom = document.querySelector('.carousel .time');
let timeRunning = 5000;
let timeAutoNext = 7000;

nextDom.onclick = function () {
    showSlider('next');
}

prevDom.onclick = function () {
    showSlider('prev');
}
let runTimeOut;
let runNextAuto = setTimeout(() => {
    next.click();
}, timeAutoNext)

// Get the beer list items
let beerListItems = document.querySelectorAll('.beer-list-item');

// Set the current index to 0
let currentIndex = 0;

// Set the timer for the carousel
setInterval(function() {
    // Move to the next item
    currentIndex++;

    // If we reached the end of the list, wrap around to the beginning
    if (currentIndex >= beerListItems.length) {
        currentIndex = 0;
    }

    // Scroll to the current item
    beerListItems[currentIndex].scrollIntoView();

    // Get the beer ID
    let beerId = beerListItems[currentIndex].getAttribute('data-beer-id');

    // Get the beer details
    let beerDetails = getBeerDetails(beerId);

    // Display the beer details
    displayBeerDetails(beerDetails);
}, 3000); // 3 seconds

// Get the next and previous buttons
let nextButton = document.getElementById('next');
let prevButton = document.getElementById('prev');

// Add click event listeners to the buttons
nextButton.addEventListener('click', function() {
    // Move to the next item
    currentIndex++;

    // If we reached the end of the list, wrap around to the beginning
    if (currentIndex >= beerListItems.length) {
        currentIndex = 0;
    }

    // Scroll to the current item
    beerListItems[currentIndex].scrollIntoView();

    // Get the beer ID
    let beerId = beerListItems[currentIndex].getAttribute('data-beer-id');

    // Get the beer details
    let beerDetails = getBeerDetails(beerId);

    // Display the beer details
    displayBeerDetails(beerDetails);
});

prevButton.addEventListener('click', function() {
    // Move to the previous item
    currentIndex--;

    // If we reached the beginning of the list, wrap around to the end
    if (currentIndex < 0) {
        currentIndex = beerListItems.length - 1;
    }

    // Scroll to the current item
    beerListItems[currentIndex].scrollIntoView();

    // Get the beer ID
    let beerId = beerListItems[currentIndex].getAttribute('idBiere');

});


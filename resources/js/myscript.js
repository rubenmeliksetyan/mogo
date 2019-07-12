// quote slider
var $prev = document.getElementById('prev');
var $next = document.getElementById('next');
var slides = document.getElementsByClassName("mySlides");


$prev.addEventListener('click', function () {
    plusSlides(-1)

});
$next.addEventListener('click', function () {
    plusSlides(1)

});

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
    showSlides(slideIndex += n);
}

function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    var i;
    if (n > slides.length) {
        slideIndex = 1
    }
    if (n < 1) {
        slideIndex = slides.length
    }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }

    slides[slideIndex - 1].style.display = "block";
}

// Work slider

var $workPrev = document.getElementById('work-prev');
var $workNexr = document.getElementById('work-next');
var $workSlides = document.getElementsByClassName("work-slider");

$workPrev.addEventListener('click', function () {
    plusSlidesWork(-1);

});
$workNexr.addEventListener('click', function () {
    plusSlidesWork(1)

});

function plusSlidesWork(n) {
    showSlidesWork(slideIndexWork += n);
}

function currentSlideWork(n) {
    showSlidesWork(n)
}

var slideIndexWork = 1;
showSlidesWork(slideIndexWork);

function showSlidesWork(n) {
    var i;
    if (n > $workSlides.length) {
        slideIndexWork = 1
    }
    if (n < 1) {
        slideIndexWork = $workSlides.length
    }
    for (i = 0; i < $workSlides.length; i++) {
        $workSlides[i].style.display = "none";
    }

    $workSlides[slideIndexWork - 1].style.display = "block";
}
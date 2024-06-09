/* scripts.js */
let slideIndex = [1];
let slideId = ["mySlides1"];
showSlides(1,0 );

function plusSlides(n, no) {
    showSlides(slideIndex[no] += n, no);
}

function currentSlide(n, no) {
    showSlides(slideIndex[no] = n, no);
}

function showSlides(n, no) {
    let i;
    let x = document.getElementsByClassName(slideId[no]);
    let dots = document.getElementsByClassName("dot");
    if (n > x.length) {slideIndex[no] = 1}
    if (n < 1) {slideIndex[no] = x.length}
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";  
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    x[slideIndex[no]-1].style.display = "block";  
    dots[slideIndex[no]-1].className += " active";
}


/* scripts.js */
let slideIndex1 = [1];
let slideId1 = ["mySlides2"];
showSlides1(1,0 );

function plusSlides1(n, no) {
    showSlides1(slideIndex1[no] += n, no);
}

function currentSlide1(n, no) {
    showSlides1(slideIndex1[no] = n, no);
}

function showSlides1(n, no) {
    let i;
    let x = document.getElementsByClassName(slideId1[no]);
    let dots = document.getElementsByClassName("dot");
    if (n > x.length) {slideIndex1[no] = 1}
    if (n < 1) {slideIndex1[no] = x.length}
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";  
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    x[slideIndex1[no]-1].style.display = "block";  
    dots[slideIndex1[no]-1].className += " active";
}

var timer;
var max_image = 2;
var min_image = 0;
var slide_pos = 0;

function changeSlideImg(pos) {
    var slide_img = document.getElementById('slide-img');
    var img_link = document.getElementById('img-link');

    console.log(pos);
    slide_img.src = "/resource/"+(pos + 1)+".jpg";

    var link = '/' + (pos+1) + '.php';
    
    img_link.setAttribute('href', link);
    // console.log(img_link);
}

function changeSlidePos(pos) {

    var position = pos;

    if(position > max_image) {
        position = min_image;
    }
    else if(position < min_image) {
        position = max_image;
    }

    changeSlideImg(position);
    slide_pos = position;

    createTimer();
}

function backSlide() {
    changeSlidePos(slide_pos - 1);
}

function nextSlide(pos) {
    changeSlidePos(slide_pos + 1);
}

function getSlideNum(){
    return (slide_pos + 1);
}

function createTimer() {
    if(timer) {
        clearInterval(timer);
        timer = null;
    }

    timer = setInterval(function() {
        nextSlide();
    }, 3000)
}
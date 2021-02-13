//burger menu
const burger = document.getElementById('burger')
const mobileNav = document.getElementById('mobileNav')

burger.addEventListener('click', () => {
	burger.classList.toggle('active');
	mobileNav.classList.toggle('active');
})

//header changer
var isOutOfViewport = function (elem) {

	var bounding = elem.getBoundingClientRect();

	var out = {};
	out.top = bounding.top < 0;
	out.left = bounding.left < 0;
	// out.bottom = bounding.bottom > (window.innerHeight || document.documentElement.clientHeight);
	out.right = bounding.right > (window.innerWidth || document.documentElement.clientWidth);
	out.any = out.top || out.left || out.bottom || out.right;

	return out;

};

var elem = document.getElementById('home');

var logViewport = function () {
	var isOut = isOutOfViewport(elem);
	if (isOut.any) {
		document.getElementById('header').classList.add('active')
	} else {
		document.getElementById('header').classList.remove('active')
	}
};

logViewport();
window.addEventListener('scroll', logViewport, false);

//SLIDER
$(document).ready(function(){
    $('.customer-logos').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 3
            }
        }, {
            breakpoint: 1250,
            settings: {
                slidesToShow: 3
            }
        }]
    });
});

//GALLERY
var lightbox = $('.gallery a').simpleLightbox();

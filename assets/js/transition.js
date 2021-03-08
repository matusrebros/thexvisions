//pages transition
const videoContainer = document.getElementById('specificVideoContainer');

window.transitionToPage = function(href) {
    document.querySelector('body').style.opacity = 0
	videoContainer.style.transform = 'translateY(30px)'
    setTimeout(function() {
        window.location.href = href
    }, 500)
}

document.addEventListener('DOMContentLoaded', function(event) {
    document.querySelector('body').style.opacity = 1
    videoContainer.style.transform = 'translateY(0px)'
})

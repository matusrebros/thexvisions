const video = document.getElementById('videoone');
const popup = document.getElementById('popups');
const closer = document.getElementById('closerone');

video.addEventListener('click', () => {
    popup.classList.add('active')
})

closerone.addEventListener('click', () => {
    popup.classList.remove('active')
})

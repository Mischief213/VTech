let loader = document.getElementById('preloader');

window.addEventListener('load', function () {
    loader.style.display = 'none';
    loader.style.transition = '.5s';
})

// search bar
var searchInput = document.querySelector('.search-container');
let searchContainer = document.getElementById('scontain');
let body = document.getElementById('body');

function toggleSearch() {
    searchInput.classList.toggle('active');
    searchContainer.style.backdropFilter = 'blur(2px)';
    body.style.overflow = body.style.overflow === 'hidden' ? 'visible' : 'hidden';
}

var search = document.querySelector('.search');
var result = document.getElementById('sresult');
var searchClose = document.getElementById('close');

search.addEventListener('click', function () {
    result.style.height = '80%';
})

searchClose.addEventListener('click', function () {
    result.style.height = '0';
})

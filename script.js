// search bar
var searchInput = document.querySelector('.search-container');
var cancelOrder = document.querySelector('.cancel');

function toggleSearch() {
    searchInput.classList.toggle('active');
}

function toggleCancel() {
    cancelOrder.classList.toggle('active');
}

let loader = document.getElementById('preloader');

window.addEventListener('load', function () {
    loader.style.display = 'none';
    loader.style.transition = '.5s';
})

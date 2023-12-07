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
    if (view.classList.contains('active')) {
        viewiPhone();
    } if (cartSbar.classList.contains('active')) {
        viewCart();
    }
    searchContainer.style.backdropFilter = 'blur(2px)';
    body.style.overflow = body.style.overflow === 'hidden' ? 'visible' : 'hidden';
}

var search = document.querySelector('.search');
var result = document.getElementById('sresult');
var searchClose = document.getElementById('close');

search.addEventListener('click', function () {
    result.style.height = '60%';
})

searchClose.addEventListener('click', function () {
    result.style.height = '0';
})

var view = document.getElementById('view');
var viewBlur = document.getElementById('viewBlur');

function viewiPhone() {
    view.classList.toggle('active');
    if (cartSbar.classList.contains('active')) {
        viewCart();
    }
    viewBlur.classList.toggle('blur');
    viewBlur.style.cursor = 'crosshair';
    body.style.overflow = body.style.overflow === 'hidden' ? 'visible' : 'hidden';
}

var cartSbar = document.getElementById('cart-sbar');

function viewCart() {
    cartSbar.classList.toggle('active');
    if (view.classList.contains('active')) {
        viewiPhone();
    }
    viewBlur.classList.toggle('blur');
    body.style.overflow = body.style.overflow === 'hidden' ? 'visible' : 'hidden';
} 
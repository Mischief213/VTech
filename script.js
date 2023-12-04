// search bar
var searchInput = document.querySelector('.search-container');
var cancelOrder = document.querySelector('.cancel');

function toggleSearch() {
    searchInput.classList.toggle('active');
}

function toggleCancel() {
    cancelOrder.classList.toggle('active');
}

// login page
const wrapper = document.querySelector('.wrapper');
const loginLink = document.querySelector('.login-link');
const registerLink = document.querySelector('.register-link');
registerLink.addEventListener('click', () => {
    wrapper.classList.add('active');
});

loginLink.addEventListener('click', () => {
    wrapper.classList.remove('active');
});

function showLoginPopup() {
    wrapper.classList.add('active-popup');
}



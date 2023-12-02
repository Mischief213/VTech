const wrapper = document.querySelector('.wrapper');
const loginLink = document.querySelector('.login-link');
const registerLink = document.querySelector('.register-link');
const btnPopup = document.querySelector('.btnLogin-popup');
var searchInput = document.querySelector('.search-container');
var cancelOrder = document.querySelector('.cancel');

registerLink.addEventListener('click', () => {
    wrapper.classList.add('active');
});

loginLink.addEventListener('click', () => {
    wrapper.classList.remove('active');
});

function showLoginPopup() {
    wrapper.classList.add('active-popup');
}

function toggleSearch() {
    searchInput.classList.toggle('active');
}

function toggleCancel() {
    cancelOrder.classList.toggle('active');
}

document.addEventListener("DOMContentLoaded", function () {
    showLoginPopup();
});



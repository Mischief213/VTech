const wrapper = document.querySelector('.wrapper');
const loginLink = document.querySelector('.login-link');
const registerLink = document.querySelector('.register-link');
const btnPopup = document.querySelector('.btnLogin-popup');

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
    var searchInput = document.querySelector('.search-container');
    searchInput.classList.toggle('active');
}

document.addEventListener("DOMContentLoaded", function () {
    showLoginPopup();
});


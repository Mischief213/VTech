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

// Check if a section is stored in localStorage and display it
document.addEventListener("DOMContentLoaded", function () {
    let storedSection = localStorage.getItem('selectediPhoneSection');
    if (storedSection) {
        let section = document.getElementById(storedSection);
        if (section) {
            showOnlyiPhone(section);
        }
    }
});

let iPhone14 = document.getElementById('iPhone14');
let iPhone13 = document.getElementById('iPhone13');
let iPhone12 = document.getElementById('iPhone12');
let iPhone11 = document.getElementById('iPhone11');
let iPhoneX = document.getElementById('iPhoneX');
let boxTitle = document.querySelector('.box-title');

function showOnlyiPhone(section) {
    // Set all iPhone sections to be initially hidden
    iPhone14.style.display = 'none';
    iPhone13.style.display = 'none';
    iPhone12.style.display = 'none';
    iPhone11.style.display = 'none';
    iPhoneX.style.display = 'none';

    // Display only the selected iPhone section
    section.style.display = 'block';

    // Move the selected section to the top of the page
    section.parentNode.insertBefore(section, section.parentNode.firstChild);

    // Move the box-title to the top
    boxTitle.parentNode.insertBefore(boxTitle, boxTitle.parentNode.firstChild);

    // Store the selected section in localStorage
    localStorage.setItem('selectediPhoneSection', section.id);
}

function showAll() {
    // Set all iPhone sections to be initially visible
    iPhone14.style.display = 'block';
    iPhone13.style.display = 'block';
    iPhone12.style.display = 'block';
    iPhone11.style.display = 'block';
    iPhoneX.style.display = 'block';

    // Move the box-title to the top
    boxTitle.parentNode.insertBefore(boxTitle, boxTitle.parentNode.firstChild);

    // Remove the stored section from localStorage
    localStorage.removeItem('selectediPhoneSection');
}



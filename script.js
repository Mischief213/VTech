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

// device page

let gray = document.getElementById('gray');
let grayText = document.getElementById('gray-text');
let silver = document.getElementById('silver');
let silverText = document.getElementById('silver-text');

function changeVisibilityGray() {
    gray.style.opacity = '1';
    silver.style.opacity = '0';
    grayText.style.visibility = 'visible';
    silverText.style.visibility = 'collapse';
}
function changeVisibilitySilver() {
    silver.style.opacity = '1';
    gray.style.opacity = '0';
    silverText.style.visibility = 'visible';
    grayText.style.visibility = 'collapse';
}

function calculate() {
    let total = 799;

    let capacity1 = document.getElementById('64GB');
    let capacity2 = document.getElementById('128GB');
    let plusCapacity = 0;

    if (capacity1.checked) {
        plusCapacity = 0;
    } else if (capacity2.checked) {
        plusCapacity = 30;
    }
    total += plusCapacity;

    let grade1 = document.getElementById('Fair');
    let grade2 = document.getElementById('Good');
    let grade3 = document.getElementById('Great');
    let plusGrade = 0;

    if (grade1.checked) {
        plusGrade = 0
    } else if (grade2.checked) {
        plusGrade = 50;
    } else if (grade3.checked) {
        plusGrade = 80;
    }
    total += plusGrade;

    let waranty1 = document.getElementById('6');
    let waranty2 = document.getElementById('12');
    let plusWaranty = 0;

    if (waranty1.checked) {
        plusWaranty = 0;
    } else if (waranty2.checked) {
        plusWaranty = 40;
    }
    total += plusWaranty;

    let output = document.getElementById('output');
    output.innerHTML = 'Total: RM' + total.toFixed(2);
}



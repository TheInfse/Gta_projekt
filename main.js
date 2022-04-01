const mobileNav = document.querySelector('ul');
const burgerIcon = document.querySelector('.burger');
const ikona = document.querySelector('logo')



burgerIcon.addEventListener('click', function() {
    mobileNav.classList.toggle('active');
    burgerIcon.classList.toggle('active');

})

function str() {
    location.href = "index.php";
}

function zaloguj() {
    location.href = "zaloguj.php";
}

function zarejestruj() {
    location.href = "zarejestruj.php"
}
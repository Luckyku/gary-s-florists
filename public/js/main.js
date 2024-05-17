const burgerButton = document.getElementById('burgerButton')
const navMenu = document.getElementById('navbarMenu')
burgerButton.addEventListener('click', function () {
    navMenu.classList.toggle('show');
})


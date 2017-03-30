var loginForm = document.getElementById('loginForm');

loginForm.addEventListener('submit', checkLogin);

function checkLogin() {
    alert('login = ' + document.getElementsByName('login'));


}

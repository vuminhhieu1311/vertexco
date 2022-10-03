import './bootstrap';

var logoutBtn = document.querySelector('#logout-btn');
if (logoutBtn) {
    logoutBtn.addEventListener("click", function (event) {
        event.preventDefault();
        document.getElementById('logout-form').submit();
    });
}

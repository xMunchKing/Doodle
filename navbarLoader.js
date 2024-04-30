// Load navbar HTML into the DOM
window.addEventListener('DOMContentLoaded', function() {
    fetch('navbar.html')
        .then(response => response.text())
        .then(html => {
            document.body.insertAdjacentHTML('afterbegin', html);
        });
});
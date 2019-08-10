document.addEventListener('DOMContentLoaded', function () {
	var elems = document.querySelectorAll('.sidenav');
	var instances = M.Sidenav.init(elems);
});

let preloader = document.querySelector('.preloader');
window.onload = () => {
    preloader.style.display = 'none';
}
var body = document.getElementsByTagName('body')[0];
var el = document.querySelector('#menu > header h1');

el.addEventListener('click', function () {
	body.classList.toggle('exibir');
}, false);



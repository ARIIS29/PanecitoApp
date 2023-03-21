//Popup de proximamente
var btnAbrirPopup = document.getElementById('abrir'),
	overlay = document.getElementById('overlay'),
	popup = document.getElementById('popup'),
	btnCerrarPopup = document.getElementById('btn-cerrar-popup');

btnAbrirPopup.addEventListener('click', function(){
	overlay.classList.add('active');
	popup.classList.add('active');
});

btnCerrarPopup.addEventListener('click', function(){
	overlay.classList.remove('active');
	popup.classList.remove('active');
});

//Popup de relleno de queso
var btnAbrirPopup2 = document.getElementById('abrir2'),
	overlay2 = document.getElementById('overlay2'),
	popup2 = document.getElementById('popup2'),
	btnCerrarPopup2 = document.getElementById('btn-cerrar-popup2');

btnAbrirPopup2.addEventListener('click', function(){
	overlay2.classList.add('active');
	popup2.classList.add('active');
});

btnCerrarPopup2.addEventListener('click', function(){
	overlay2.classList.remove('active');
	popup2.classList.remove('active');
});

//Popup de concha oreo
var btnAbrirPopup3 = document.getElementById('abrir3'),
	overlay3 = document.getElementById('overlay3'),
	popup3 = document.getElementById('popup3'),
	btnCerrarPopup3 = document.getElementById('btn-cerrar-popup3');

btnAbrirPopup3.addEventListener('click', function(){
	overlay3.classList.add('active');
	popup3.classList.add('active');
});

btnCerrarPopup3.addEventListener('click', function(){
	overlay3.classList.remove('active');
	popup3.classList.remove('active');
});
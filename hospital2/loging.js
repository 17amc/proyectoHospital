const DesplegablePacientes = document.getElementById('IngresoPacientes');
const DesplegableDoctores = document.getElementById('IngresoDoctores');
const container = document.getElementById('container');

DesplegablePacientes.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

DesplegableDoctores.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});

if (window.location.search.includes('error')) {
	var urlWithoutError = window.location.origin + window.location.pathname;
	window.history.replaceState({}, document.title, urlWithoutError);
  }
  
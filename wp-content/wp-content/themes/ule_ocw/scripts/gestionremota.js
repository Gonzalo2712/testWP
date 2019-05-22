function checkFilter(name, chatImage) {
	var link = document.getElementById('pronto_' + name);
	var info = ISLProntoInfo.active_filters[name];
	if(info != null) {
		link.onclick = info.onchat;
		link.href = 'javascript:void(0)';
		var image = document.getElementById('pronto_image_' + name);
		image.src = chatImage;
	}
}

function cliente(obj) {
	var direccion=""
	if (obj.etq1.value=="") {
		alert('Por favor, introduzca un c\u00f3digo de sesi\u00f3n para conectar con el operador.');
	} else {
		direccion="https://www.islonline.net/start/ISLLightClient?\u0026cmdline=--connect "+obj.etq1.value;
		window.open(direccion)
	}
}

checkFilter('MANTENIMIENTO', 'http://www.iniciarcontrol.com/unileon/islpronto-chat.jpg');
checkFilter('SIC', 'http://www.iniciarcontrol.com/unileon/islpronto-chat.jpg');

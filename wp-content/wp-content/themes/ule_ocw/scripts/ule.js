/*
* Image preview script
* powered by jQuery (http://www.jquery.com)
* written by Alen Grakalic (http://cssglobe.com)
* for more info visit http://cssglobe.com/post/1695/easiest-tooltip-and-image-preview-using-jquery
*
*/

this.imagePreview = function(){

/* CONFIG */
	xOffset = 10;
	yOffset = 30;

// these 2 variable determine popup's distance from the cursor
// you might want to adjust to get the right result
/* END CONFIG */
	jQuery("a.preview").hover(function(e){
		this.t = this.title;
		this.title = "";
		var c = (this.t != "") ? "<br/>" + this.t : "";
		jQuery("body").append("<p id='preview'><img src='"+ this.href +"' alt='Image preview' />"+ c +"</p>");
		jQuery("#preview")
			.css("top",(e.pageY - xOffset) + "px")
			.css("left",(e.pageX + yOffset) + "px")
			.fadeIn("fast");
		},

	function(){
		this.title = this.t;
		jQuery("#preview").remove();
	});
	jQuery("a.preview").mousemove(function(e){
	jQuery("#preview")
		.css("top",(e.pageY - xOffset) + "px")
		.css("left",(e.pageX + yOffset) + "px");
	});
};


jQuery(function() {
	
	jQuery('li.current_page_item').parents('div').css('display', 'block');
	jQuery('li.current_page_item').parents('div').prev('h3').css("background-image", "url(/wp-content/themes/ule_ocw/art/vertical-menu-header.png)");
	jQuery('li.current_page_item').parents('li.widget_nav_menu').css("background-image", "url(/wp-content/themes/ule_ocw/art/vertical-menu-background.png)");


	jQuery('#ruleta-tabla-progreso-migracion-ip thead').remove();
	jQuery('#ruleta-tabla-progreso-migracion-ip').append("<thead><tr><th>Edificio</th><th>Teléfonos Analógicos</th><th>Teléfonos Digitales</th><th><a href='http://servicios.unileon.es/sic/files/2012/03/alcatel-4018.jpg' class='preview' title='Teléfono Alcatel-Lucent IP Touch 4018'>Teléfonos IP 4018</a></th><th><a href='http://servicios.unileon.es/sic/files/2012/03/alcatel-4028.jpg' class='preview' title='Teléfono Alcatel-Lucent IP Touch 4018'>Télefonos IP 4028</a></th><th>Estado migraci&oacute;n</th></tr></thead>");

	// Tooltip - Imágenes
	imagePreview();

	// Expandir - Contraer Menú

	jQuery("li.widget_nav_menu h3.widget-title").click(function(event){
		if(jQuery(this).next("div").css('display')=="none") {
			jQuery(this).next("div").show("fast");
			jQuery(this).css("background-image", "url(/wp-content/themes/ule_ocw/art/vertical-menu-header.png)");
			jQuery(this).parent("li").css("background-image", "url(/wp-content/themes/ule_ocw/art/vertical-menu-background.png)");
		} else {
			jQuery(this).next("div").hide("fast");
			jQuery(this).css("background-image", "url(/wp-content/themes/ule_ocw/art/vertical-menu-header_solo.png)");
			jQuery(this).parent("li").css("background-image", "none");
		}
	});

	jQuery("li.widget_meta h3.widget-title").click(function(event){
		if(jQuery(this).next("ul").css('display')=="none") {
			jQuery(this).next("ul").show("fast");
			jQuery(this).css("background-image", "url(/wp-content/themes/ule_ocw/art/vertical-menu-header.png)");
			jQuery(this).parent("li").css("background-image", "url(/wp-content/themes/ule_ocw/art/vertical-menu-background.png)");
		} else {
			jQuery(this).next("ul").hide("fast");
			jQuery(this).css("background-image", "url(/wp-content/themes/ule_ocw/art/vertical-menu-header_solo.png)");
			jQuery(this).parent("li").css("background-image", "none");
		}
	});


	// Expandir - Contraer Firma Electrónica

	jQuery("a.mostrarfirma").click(function(event){
		event.preventDefault();
		if(jQuery(this).next("div.informacion").css('display')=="none") {
			jQuery("div.informacion").hide("fast");
			jQuery(this).next("div.informacion").show("fast");
		} else {
			jQuery(this).next("div.informacion").hide("fast");
		}
	});

	// Expandir - Contraer SIC
	jQuery("h3.ver").click(function(event){
		if(jQuery(this).next("ul.oculto").css('display')=="none") {
			// jQuery("ul.oculto").hide("fast");
			jQuery(this).next("ul.oculto").show("slow");
		} else {
			jQuery(this).next("ul.oculto").hide("fast");
		}
	});

	jQuery("strong.ver").click(function(event){
		event.preventDefault();
		if(jQuery(this).next("ul").css('display')=="none") {
			// jQuery("ul.oculto li ul").hide("fast");
			jQuery(this).next("ul").show("fast");
		} else {
			jQuery(this).next("ul").hide("fast");
		}
	});


//			jQuery('tr.pendiente').attr("title", "Este edificio esta Pendiente de realizar el cambio");
//			jQuery('tr.en-proceso').attr("title", "Este edificio esta En Proceso");
//			jQuery('tr.terminado').attr("title", "Este edificio esta Terminado");

		// Propiedades de los tooltip
			var qTipPropertiesGeneral = {
					content: {
						text: false
					},
					position: {
						target: 'mouse',
						adjust: { mouse: true },
						corner: {
							target: 'topMiddle',
							tooltip: 'topMiddle'
							}
					},
					show: {
						delay: 100
					},
					style: {
						name: 'dark',
						tip: 'topMiddle',
						fontSize: 12,
						padding: 5,
						border: {
							radius: 2,
							width: 1
						}
					}
				};
//			jQuery("tr.pendiente").qtip(qTipPropertiesGeneral);
//			jQuery("tr.en-proceso").qtip(qTipPropertiesGeneral);
//			jQuery("tr.terminado").qtip(qTipPropertiesGeneral);

});

var UleTemplate = function() {

    /* Esta funcion y la siguiente se encargan del comportamiento de la plantilla cuando se hace scroll y/o se redimensiona
    * la ventana. Ya hay codigo de la plantilla que se ejecuta cuando se producen estos eventos, pero esto lo necesitamos
    * para el correcto funcionamiento del menu de migas. */
    var handleResizeAndScroll = function() {
        var offset = 75;
        var body = $('body');
        var width = App.getViewPort().width;
        var resBreakpointMd = App.getResponsiveBreakpoint('md');
        var breadCrumbFixedClass = '';
        var logoMaxHeight = 0;

        var breadCrumbContainer = $(".page-breadcrumb-container");
        var managedElementDiv = $(".managed-element");

        var readjustBreadcrumbAndManagedElement = function(isMobile) {
            if (isMobile) {
                //Reajustamos el menu de migas
                breadCrumbContainer.find('.breadcrumb').parent().addClass('col-md-12');
                breadCrumbContainer.find('.breadcrumb').parent().removeClass('col-md-6');
                //Reajustamos la parte del elemento gestionado
                managedElementDiv.addClass('managed-element-left');
                managedElementDiv.removeClass('managed-element-right');
                managedElementDiv.parent().addClass('col-md-12');
                managedElementDiv.parent().removeClass('col-md-6');
            }
            else {
                //Reajustamos el menu de migas
                breadCrumbContainer.find('.breadcrumb').parent().addClass('col-md-6');
                breadCrumbContainer.find('.breadcrumb').parent().removeClass('col-md-12');
                //Reajustamos la parte del elemento gestionado
                managedElementDiv.addClass('managed-element-right');
                managedElementDiv.removeClass('managed-element-left');
                managedElementDiv.parent().addClass('col-md-6');
                managedElementDiv.parent().removeClass('col-md-12');
            }
        };

        if (width >= resBreakpointMd) {
            breadCrumbFixedClass = 'fixed-breadcrumb';
            logoMaxHeight = "65px";
            //En pantallas normales el elemento gestionado va la derecha
            readjustBreadcrumbAndManagedElement(false);
        }
        else {
            breadCrumbFixedClass = 'fixed-breadcrumb-mobile';
            logoMaxHeight = "50px";
            //En pantallas pequeñas el elemento gestionado va la izquierda
            readjustBreadcrumbAndManagedElement(true);
        }

        if (body.hasClass('page-header-menu-fixed')) {
            if ($(window).scrollTop() > offset) {
                breadCrumbContainer.addClass(breadCrumbFixedClass);
            } else {
                breadCrumbContainer.removeClass(breadCrumbFixedClass);
            }
            $(".page-header img.logo").css("max-height",logoMaxHeight);
        }
        if (body.hasClass('page-header-top-fixed')) {
            if ($(window).scrollTop() > offset) {
                breadCrumbContainer.addClass(breadCrumbFixedClass);
            } else {
                breadCrumbContainer.removeClass(breadCrumbFixedClass);
            }
            $(".page-header img.logo").css("max-height",logoMaxHeight);
        }
    };
    /* Funcion ligada a la anterior. Esta es la que se llama al cargar la pÃ¡gina. */
    var initResizeAndScrollHandlers = function() {
        App.addResizeHandler(handleResizeAndScroll);
        $(window).scroll(handleResizeAndScroll);
        handleResizeAndScroll();
    };

    /* BLOCKUI - Habilita (en el elemento que se quiera) el bloqueo de pantalla */
    /* Aplicar la clase blockui al elemento deseado, añadir el mensaje a mostrar en el atributo data-message y listo */
    var blockUi = function () {
        $(".blockui").click(function() {
            // Si no se ha definido el atributo data-message, se asigna el texto en español por defecto
            var message = "Por favor, espere...";
            if ($(this).data('message')) {
                var message = $(this).data('message');
            }
            $.blockUI({
                css: {
                    display: 'inline-block',
                    padding: '10px',
                    margin: '0 auto',
                    color: '#000',
                    fontSize: '13px',
                    fontWeight: '400',
                    textAlign: 'center'
                },
                message: "<i class='fa fa-lg fa-pulse fa-spinner' aria-hidden='true'></i>&nbsp;&nbsp;" + message
            });
            // No se ha definido ningun timeout. El desbloqueo seria necesario programarlo unicamente
            // en operaciones que utilicen AJAX
            window.setTimeout(function(){},0)});
    };

    // forzar a ocultar siempre el menú de iconos y mostrar el toggle
    var ocultarMenuIconos = function() {
        $(".page-header-menu").css("display", "none");
    }

    // Handles main menu on window resize
    var handleMainMenuOnResize = function() {
        var menu = $(".page-header-menu");
        $(".page-header-menu").css("display", "none");
    };

    var handleMenuToggler = function() {
        // eliminamos el evento click anterior y asignamos uno nuevo
        $(".page-header .menu-toggler").unbind('click').on('click', function(event) {
            var menu = $(".page-header .page-header-menu");
            if (menu.is(":visible")) {
                menu.slideUp(500);
                $("h1.blog-title").removeClass('small');
            } else {
                menu.slideDown(500);
                $("h1.blog-title").addClass('small');
            }
        });
    };

    return {
        init: function() {
            ocultarMenuIconos();
            App.addResizeHandler(handleMainMenuOnResize); // handle main menu on window resize
            initResizeAndScrollHandlers();
            handleMenuToggler();
            blockUi();
            console.log('Template successfully loaded');
        }
    }

}();

$(function() {
    UleTemplate.init();
});





var UleTemplateExamples = function() {

    /*COMPORTAMIENTO DEL BOTON QUE MUESTRA/OCULTA LA CABECERA OPCIONAL DE LA PAGINA*/
    var togglePageHeadButton = function() {
        $('#toggle_page_head').click(function(event) {
            $('#page_head').toggleClass('hidden');
        });
    };

    /*SCRIPT DE PROGRAMACION DE COMPORTAMIENTO DE LOS BOTONES ASOCIADOS A SWEET ALERT*/
    var sweetAlertsExample = function() {
        // Sweet alert success
        $("#sweetalert-success-button").click(function(){
            swal("Notificación", "La operación ha sido realizada satisfactoriamente", "success");
        });
        // Sweet alert error
        $("#sweetalert-error-button").click(function(){
            swal("Notificación", "Se ha producido un error y no se ha completado la operación", "error");
        });
        // Sweet alert info
        $("#sweetalert-info-button").click(function(){
            swal("Notificación", "Luke, ¡Yo soy tu padre!", "info");
        });
    };

    /*SCRIPT DE PROGRAMACION DE COMPORTAMIENTO DE LOS BOTONES ASOCIADOS A TOASTR*/
    var toastrNotificationExample = function() {
        /*CONFIGURACION DEL PLUGIN. CADA UNO COMO QUIERA/NECESITE*/
        toastr.options = {
            "closeButton": true,
            "debug": false,
            "positionClass": "toast-top-center",
            "onclick": null,
            "showDuration": "1000",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        };

        /*COMPORTAMIENTO DE LOS BOTONES ASOCIADOS A TOASTR EN ESTE EJEMPLO*/
        // Toastr success
        $("#toastr-success-button").click(function(){
            toastr.success("La operación ha sido realizada satisfactoriamente", "Notificación");
        });
        // Toastr error
        $("#toastr-error-button").click(function(){
            toastr.error("Se ha producido un error y no se ha completado la operación", "Notificación");
        });
        // Toastr info
        $("#toastr-info-button").click(function(){
            toastr.info("Luke, ¡Yo soy tu padre!", "Notificación");
        });
    };

    /*EJEMPLO DE SELECCION DE PESTAÑA DE TAB CON UN BOTON*/
    var tabsExample = function() {
        $('#select_tab2_button').click(function(event) {
            $('#t_5_2').tab('show');
        });
    };
    /*EJEMPLO DE SELECCION DE ELEMENTO DE ACCORDION CON UN BOTON*/
    var accordionExample = function() {
        $('#select_accordion2_button').click(function(event) {
            $('#collapse_3_2').collapse('toggle');
        });
    };

    /*EJEMPLO DE DIALOGOS CON BOOTBOX*/
    var bootboxExample = function() {

        /*CONFIGURACION DEL PLUGIN. CADA UNO COMO QUIERA/NECESITE*/
        bootbox.setDefaults({
            /**
             * @optional String
             * @default: en
             * which locale settings to use to translate the three
             * standard button labels: OK, CONFIRM, CANCEL
             */
            locale: "es", // Soporte para el español

            /**
             * @optional Boolean
             * @default: true
             * whether the dialog should be shown immediately
             */
            show: true,

            /**
             * @optional Boolean
             * @default: true
             * whether the dialog should be have a backdrop or not
             */
            backdrop: true,

            /**
             * @optional Boolean
             * @default: true
             * show a close button
             */
            closeButton: true,

            /**
             * @optional Boolean
             * @default: true
             * animate the dialog in and out (not supported in < IE 10)
             */
            animate: true,

            /**
             * @optional String
             * @default: null
             * an additional class to apply to the dialog wrapper
             */
            className: "ule-modal"

        });

        /*COMPORTAMIENTO DE LOS BOTONES ASOCIADOS A BOOTBOX EN ESTE EJEMPLO*/
        // Basic
        $("#bootbox-basic").click(function(){
            bootbox.alert({
                title: "Notificación",
                message: "Había una vez... un circo que alegraba siempre el corazón",
                callback: function(){
                    alert('Aquí se puede programar cualquier comportamiento adicional (opcional) cuando se pinche el botón de OK o de cerrar');
                }
            });
        });
        // Confirmation
        $("#bootbox-confirm").click(function(){
            bootbox.confirm({
                title: "Confirmación",
                message: "Â¿Deseas realmente ejecutar rm -rf /?",
                callback: function(result){
                    // Si el usuario presiona Aceptar, result == true
                    // Si el usuario presiona Cancelar o cierra la ventana, result == false
                    if (result) {
                        alert('Ups, lo has roto');
                    }
                }
            });
        });
        // Prompt input text
        $("#bootbox-prompt").click(function(){
            bootbox.prompt({
                title: "Por favor, introduce tu edad",
                callback: function(result){ /* result = String containing user input if OK clicked or null if Cancel clicked */
                    // Si result != null, contendrÃ¡ la entrada del usuario si Ã©ste presionó Aceptar
                    // Si result == null, el usuario ha cerrado la ventana o ha pulsado Cancelar
                    if (result != null) {
                        if (result != "") {
                            alert('Tienes ' + result  + ' años. ¡Eres todavía un chaval!');
                        } else {
                            alert('No seas tímido. Dime que edad tienes');
                            // No se cierra el modal en caso de que el usuario no haya introducido texto
                            return false;
                        }
                    }
                }
            });
        });
    };

    /*EJEMPLO DE DATE PICKER*/
    var datePickersExample = function () {

        if (jQuery().datepicker) {
            $('.date-picker').datepicker({
                rtl: App.isRTL(),
                orientation: "left",
                autoclose: true
            });
        }
    };

    /*EJEMPLO DE TIME PICKER*/
    var timePickerExample = function () {

        $('.timepicker-24').timepicker({
            autoclose: true,
            minuteStep: 5,
            showSeconds: false,
            showMeridian: false
        });

        // handle input group button click
        $('.timepicker').parent('.input-group').on('click', '.input-group-btn', function(e){
            e.preventDefault();
            $(this).parent('.input-group').find('.timepicker').timepicker('showWidget');
        });
    };

    /*EJEMPLO DE EDITOR SUMMERNOTE*/
    var summernoteExample = function () {
        $('#summernote_1').summernote({
            height: 300,
            lang: 'es-ES' // Soporte para el español
        });
    };

    /*EJEMPLO SELECT2*/
    var select2Example = function () {
        // Si no se ha definido el atributo data-message, se asigna el texto en español por defecto
        var message = "Selecciona un valor";
        if ($('#select2_1').data('message')) {
            var message = $('#select2_1').data('message');
        }
        // Set the "bootstrap" theme as the default theme for all Select2
        // widgets.
        $.fn.select2.defaults.set("theme", "bootstrap");

        var placeholder = "Selecciona un valor";

        $(".select2").select2({
            placeholder: message,
            width: null
        });
    };

    /*EJEMPLO MAXLENGTH*/
    var maxlengthExample = function () {
        $('#maxlength_textarea').maxlength({
            limitReachedClass: "label label-danger",
            alwaysShow: true
        });
    };

    var dataTablesExample = function() {
        var initTableGeneric = function () {
            var tableScroller = $('#table_generic');
            var oTable = tableScroller.dataTable({
                "language": {
                    url: '//cdn.datatables.net/plug-ins/1.10.13/i18n/Spanish.json'
                },
                deferRender:    true,
                stateSave:      true,
                "order": [
                    [0, 'asc']
                ],
                // set the initial value
                "pageLength": 10,
                ajax:   "./resources/datatables_demo_data.txt"
            });
        };

        var initTableWithScroller = function () {
            var tableScroller = $('#table_with_scroller');
            var oTable = tableScroller.dataTable({
                "language": {
                    url: '//cdn.datatables.net/plug-ins/1.10.13/i18n/Spanish.json'
                },
                // scroller extension: http://datatables.net/extensions/scroller/
                scrollY:        300,
                deferRender:    true,
                scroller:       true,
                stateSave:      true,
                "order": [
                    [0, 'asc']
                ],
                "lengthMenu": [
                    [10, 15, 20, -1],
                    [10, 15, 20, "All"] // change per page values here
                ],
                ajax:   "./resources/datatables_demo_data.txt"
            });
        };

        initTableGeneric();
        initTableWithScroller();
    };

    return {
        init: function() {
            togglePageHeadButton();
            sweetAlertsExample();
            toastrNotificationExample();
            tabsExample();
            accordionExample();
            bootboxExample();
            datePickersExample();
            timePickerExample();
            summernoteExample();
            select2Example();
            maxlengthExample();
            dataTablesExample();

            console.log('Template examples successfully loaded');
        }
    }

}();

$(function() {
    UleTemplateExamples.init();
});

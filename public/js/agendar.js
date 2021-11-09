
 
    var d = new Date();

    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.datepicker');
        var instances = M.Datepicker.init(elems, { 
            yearRange: 1,
            minDate:new Date(d.setDate(d.getDate() + 1)),
            maxDate:new Date(d.setDate(d.getDate() + 90)),
            firstDay:1,
            disableWeekends: true,
            format : 'yyyy-mm-dd',
            
            i18n:{
                months: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre',
            'Octubre', 'Noviembre', 'Diciembre'],
            weekdaysAbbrev: ['D', 'L', 'M', 'M','J','V','S'],
            
            }
        });
    });
//Fin
    

    var d = new Date();
    
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.datepicker');
        var instances = M.Datepicker.init(elems, {
            format : 'yyyy-mm-dd',
            yearRange: 1,
            firstDay:1,
            disableWeekends: true,
            minDate: new Date(d.setDate(d.getDate())),
            maxDate: new Date(d.setDate(d.getDate() + 90)),
            i18n:{
                months: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre',
            'Octubre', 'Noviembre', 'Diciembre'],
            weekdaysAbbrev: ['D', 'L', 'M', 'M','J','V','S'],
            
            }


        });
    });


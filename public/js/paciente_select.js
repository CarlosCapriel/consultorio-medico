'use strict'

window.addEventListener('load', function () {
    var select = document.querySelector("#option");
    var i = "";
    var input = document.querySelector("#input");

    select.addEventListener('change', function (e) {
        e.preventDefault();
        input.innerHTML = '';
        for (i = 0; i < select.value; i++) {
            createInputs();
        }
        for (i = 0; i <= select.value; i++) {
            createInputNo();
        }
    });

    function createInputs() {
        var element = document.createElement('div');
        element.innerHTML = `
            <div class="row">
                <p>Escriba aqui: </p>
                <input type="text" name="condiciones"class="form-control" required/>
            </div>
        `;
        input.appendChild(element);
        //${i + 1}
    }
    function createInputNo() {
        var element = document.createElement('div');
        element.innerHTML = `
            <div class="row">
                <input type="hidden" value="no"name="condiciones"class="form-control" readonly/>
            </div>
        `;
        input.appendChild(element);
        //${i + 1}
    }
});
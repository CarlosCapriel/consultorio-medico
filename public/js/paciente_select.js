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
    });

    function createInputs() {
        var element = document.createElement('div');
        element.innerHTML = `
            <div class="row">
                <p>Escriba aqui: </p>
                <input type="text" class="form-control" />
            </div>
        `;
        input.appendChild(element);
        //${i + 1}
    }
});
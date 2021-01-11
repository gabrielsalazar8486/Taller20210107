window.onload = function() {
    ajax_get_operacion();
};


function validation () {
    var EnviarPeticion = true;

    let forms = document.querySelectorAll('.needs-validation')
    Array.prototype.slice.call(forms)
        .forEach(function (form) {
            form.addEventListener('submit', function (event) {
                event.preventDefault()

                if (!form.checkValidity())
                    EnviarPeticion = false;

                form.classList.add('was-validated')
            }, false)
        })

    setTimeout(() => {
        if(EnviarPeticion)
            ajax_get_comprobacion(EnviarPeticion)
    });
}


function ajax_get_comprobacion(EnviarPeticion){

    let operacion = document.getElementById("operacion").value
    let resultado = document.getElementById("resultado").value

    if(EnviarPeticion){

        axios.post('/App/Controllers.php',{
            operacion,
            resultado,
            tipo_peticion: "validar_resultado_operacion"
        }).then(function(res) {
            document.getElementById("correct").className = "alert alert-primary d-none";
            document.getElementById("error").className = "alert alert-danger d-none";

            if(res.data.es_igual)
                document.getElementById("correct").className = "alert alert-primary"

            if(!res.data.es_igual)
                document.getElementById("error").className = "alert alert-danger"

        });
    }
}

function ajax_get_operacion ()
{
    axios.post('/App/Controllers.php',{
        tipo_peticion: "obtener_operacion"
    }).then(function(res) {
        document.getElementById("operacion").value = res.data.operacion
    });
}
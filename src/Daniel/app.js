document.addEventListener("DOMContentLoaded", function(event) {
    let responseBlock = document.getElementById('response');
    let form = document.getElementById('form');

    form.addEventListener('submit', function (event) {
        event.preventDefault();

        axios.post(window.location.href + 'app/AssistantController/AssistantGetController.php', new FormData(form))
            .then(response => {
                responseBlock.hidden = false;
                responseBlock.innerHTML = response.data.message;
            })
            .catch(error => console.log(error))
    })
});
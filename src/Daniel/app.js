document.addEventListener("DOMContentLoaded", function(event) {
    let submit = document.getElementById('submit');
    let form = document.getElementById('form');

    form.addEventListener('submit', function (event) {
        event.preventDefault();

        axios.post(window.location.href + 'app/AssistantController/AssistantGetController.php', new FormData(form))
            .then(response => {
                let text = document.createElement('p');
                text.innerHTML = response.data.message;
                submit.before(text);
            })
            .catch(error => console.log(error))
    })
});
window.addEventListener('load', () => {
    initOnFormSubmit();
});

function initOnFormSubmit() {
    const form = document.querySelector('#contactUsModal form');
    if (form) {
        form.addEventListener('submit', (event) => {
            event.preventDefault();
            sendData(form);
        });
    }
}

function sendData(form) {
    const xhr = new XMLHttpRequest();
    const formData = new FormData(form);

    xhr.addEventListener('load', () => {
        const newHtml = xhr.response;
        const divElement = document.createElement('div');
        divElement.innerHTML = newHtml;

        const newModalBody = divElement.querySelector('#contactUsModal .modal-body');
        const oldModalBody = document.querySelector('#contactUsModal .modal-body');

        if (newModalBody && oldModalBody) {
            oldModalBody.innerHTML = newModalBody.innerHTML;
            initOnFormSubmit();
        }
    });

    xhr.addEventListener('error', () => {
        document.querySelector('#contactUsModal .modal-body').innerHTML = 'Error occurred. Please, try again.';
    });

    xhr.open('POST', form.getAttribute('action'));
    xhr.send(formData);
}

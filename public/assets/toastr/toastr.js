$(document).ready(function() {
    toastr.options = {
        "progressBar": true,
        "positionClass": "toast-top-right",
        "timeOut": 3000,
        "progressBarClass": "custom-toast",
    };
});

window.addEventListener('success', (event) => {
    toastr.success(event.detail.message);
    document.querySelector('.custom-toast').classList.add('toast-success');
});

window.addEventListener('warning', (event) => {
    toastr.warning(event.detail.message);
    document.querySelector('.custom-toast').classList.add('toast-warning');
});

window.addEventListener('error', (event) => {
    toastr.error(event.detail.message);
    document.querySelector('.custom-toast').classList.add('toast-danger');
});

window.addEventListener('info', (event) => {
    toastr.info(event.detail.message);
    document.querySelector('.custom-toast').classList.add('toast-info');
});

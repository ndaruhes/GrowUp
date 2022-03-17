// DELETE MODAL
$(document).ready(function () {
    $('#confirmDeleteModal').on('show.bs.modal', function (e) {
        $(this).find('#confirm_delete').attr('action', $(e.relatedTarget).data('uri'));
    })
})

// AOS
const options = {
    disable: false,
    startEvent: 'DOMContentLoaded',
    initClassName: 'aos-init',
    animatedClassName: 'aos-animate',
    useClassNames: false,
    disableMutationObserver: false,
    debounceDelay: 50,
    throttleDelay: 99,
    offset: 120,
    delay: 0,
    duration: 1000,
    easing: 'ease',
    once: false,
    mirror: false,
    anchorPlacement: 'top-bottom',
}

AOS.init(options)


// TOAST
const toastElList = [].slice.call(document.querySelectorAll('.toast'))
const toastList = toastElList.map(function (toastEl) {
    return new bootstrap.Toast(toastEl)
})
toastList.forEach(toast => toast.show())

// TYPED
const typed = new Typed('#slogan', {
    strings: ['A New Different Way to Improve Your Skills', 'Let\'s Join and Start Growing with Us...'],
    smartBackspace: true,
    typeSpeed: 50,
    backSpeed: 30,
    loop: true,
    startDelay: 1000,

});

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


// CUSTOM CHECKBOX
function componentInit() {
    const checkBoxes = document.getElementsByClassName("red-checkbox-container");
    for (let i = 0; i < checkBoxes.length; i++) {
        checkBoxes[i].addEventListener("click", () => {
            let checkMark = checkBoxes[i].childNodes[1];
            let inputCheckBox = checkBoxes[i].childNodes[3];
            checkMark.classList.toggle("d-none");
            inputCheckBox.checked = !inputCheckBox.checked;
        });
    }
}
componentInit()


// CHART
if (window.location.pathname != '/') {
    const mentorCTX = document.querySelector('.mentorChart').getContext('2d')
    const mentorChart = new Chart(mentorCTX, {
        type: 'bar',
        data: {
            labels: ['Total Kelas', 'Total Mentee', 'Total Forum', 'Total Rating'],
            datasets: [{
                label: 'Grafik Pencapaian',
                data: [12, 19, 3, 5, 2, 3],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    })
}

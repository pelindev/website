window.setTimeout(donate, 20000)

function donate() {
    let form = document.querySelector('.donate')
    form.style.display = 'block'
    document.getElementById('close-icon').onclick = function() {
        form.style.display = 'none'
    }
}
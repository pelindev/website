export default function showDonate() {
    window.setTimeout(donate, 20000)

    function donate() {
        let form = document.querySelector('.donate')
        form.style.display = 'block'
        document.getElementById('donate-close-icon').onclick = function() {
            form.style.display = 'none'
        }
    }
}
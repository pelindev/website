export default function showDonate() {
    window.setTimeout(donate, 20000);

    function donate() {
        var form = $('.donate');
        form.css({'display' : 'block'});
        $('#donate-close-icon').on('click', function() {
            form.css({'display' : 'none'});
        });
    };
};
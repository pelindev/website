<div class="modal">
    <div class="modal-background">
        <div class="modal-window">
            <div id="modal-close-icon"><img src="/includes/img/close-icon.png" alt="close-icon"></div>
            <h1>Мои работы</h1>
            <div class="modal-items">
                <div class="item">
                    <img src="/includes/img/gitlab-api.png" alt="gitlab-api" style="width:200px">
                    <p>gitlab api</p>
                </div>
                <div class="item">
                    <img src="/includes/img/website.png" alt="website" style="width:400px">
                    <p>мой сайт</p>
                </div>
                <div class="item">
                    <img src="/includes/img/server.png" alt="web-server">
                    <p>web-server</p>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    document.getElementById('portfolio-btn').onclick = function() {
        document.querySelector('.modal').style.display = 'block'
        document.getElementsByTagName('body')[0].style.overflow = 'hidden'
        document.querySelector('.modal-window').style.marginTop = '-1000px'
        setTimeout(() => document.querySelector('.modal-window').style.marginTop = '0', 1);
        
        document.getElementById('modal-close-icon').onclick = function() {
            document.getElementsByTagName('body')[0].style.overflow = 'visible'
            document.querySelector('.modal').style.display = 'none'
        }
    }
</script>
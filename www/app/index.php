<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/css/style.css">
    <link rel="shortcut icon" href="/includes/favicon.ico" type="image/x-icon">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
  <title>PelinDev</title>
</head>
<body>
    <div class="main-background"></div>
    <div class="header">
        <!-- шапка сайта -->
        <a name="home"></a>
        <div class="menu">
            <div class="logo">PelinDev</div>
            <ul>
                <li>
                    <div class="burger">
                        <a href="#" class="burger-btn">
                            <span></span>
                        </a>
                    </div>
                </li>
                <li class="menu-item menu_hide"><a href="#home">Домой</a></li>
                <li class="menu-item menu_hide"><a href="#services">Услуги</a></li>
                <li class="menu-item menu_hide"><a href="#about">Обо мне</a></li>
                <li class="menu-item menu_hide"><a href="#contacts">Контакты</a></li>
            </ul>
        </div>
        <script src="/src/js/burger-menu.js"></script>

        <!-- контент хедера -->
        <div class= "header-block-top">
            <p class="animate__animated animate__backInLeft" style="width: 80%;">На этом сайте я 
                постараюсь реализовать свои способности Front-end разработчика.
            </p>
            <p class="animate__animated animate__backInRight">Весь контент взят из головы.</p>
        </div>
        
    </div>

    <!-- страница Услуги -->
    <div class="services">
        <a name="services"></a>
        <div class="container">
            <h1>Вы можете заказать у меня</h1>
            <div class="services-content">
                <div class="services-block">
                    <img src="includes/html.png" alt="html">
                    <h2>Вёрстку сайта</h2>
                    <p>сверстаю сайт по вашему дизайну, адаптивно, кроссплатформенно</p>
                </div>

                <div class="services-block">
                    <img src="includes/php.png" alt="php">
                    <h2>Динамический сайт</h2>
                    <p>создам динамический проект, основываясь на вашей задаче</p>
                </div>

                <div class="services-block">
                    <img src="includes/gitlab.png" alt="gitlab">
                    <h2>Помощь с проектом</h2>
                    <p>помогу с уже существующим проектом, проконсультирую по всем вопросам, относительно проекта</p>
                </div>
            </div>
            <hr>
            <a href="#"><div class="btn">посмотреть портфолио</div></a>
        </div>
    </div>

    <div class="semi-block">
        <div class="semi-block-content">
            <a href="https://github.com/pelindev"><div class="btn">Загляни ко мне на GitHub</div></a>
        </div>
    </div>
    
    <!-- обо мне -->
    <div class="about">
        <a name="about"></a>
        <div class="container">
            <h1>Кто я такой?</h1>
            <hr>
            <div class="about-content-top">
                <img src="includes/for-site.jpg" alt="my-photo">
                <p>Меня зовут Никита. Мне 24 года. Я выпускник ДГТУ, 
                    факультет информационная безопасность. С 2021 работаю во
                    Front-end. Мой стек технологий: html, css, 
                    js, php, python, 
                    wordpress, docker, git.
                    Принимая ваш заказ я предоставляю полное
                    курирование вашего проекта, а так же предоставляю
                    гарантию на свою работу.
                </p>
            </div>
            <hr>
            <h2>Отзывы моих клиентов</h2>
            <div class="about-content-bot">
                <div class="reviews">Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, cupiditate.</div>
                <div class="reviews">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis recusandae repellat suscipit, nulla vel natus?</div>
                <div class="reviews">Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, quidem!</div>
            </div>
        </div>
    </div>

    <!-- Контакты -->
    <div class="contacts">
        <a name="contacts"></a>
        <div class="container">
            <form action="">
                <h1>Связаться со мной можно здесь</h1>
                <span>Ваше имя</span>
                <input type="text">
                <span>Ваш email</span>
                <input type="email">
                <span>Ваше сообщение</span>
                <input type="text">
                <input type="submit">
            </form>
            <div class="social">
                <a href=""><img src="includes/instagram.png" alt="instagram"></a>
                <a href="https://t.me/pelin_dev"><img src="includes/telegram.png" alt="telegram"></a>
                <a href="https://vk.com/cheeselamber"><img src="includes/vk.png" alt="vk"></a>
                <a href=""><img src="includes/whatsapp.png" alt="whatsapp"></a>
            </div>
        </div>
    </div>
    <div id="up"><a href="#home"><img src="/includes/arrow-up.png" alt="arrow-up"></a></div>
    <script >
        let btn = document.getElementById('up')
        window.addEventListener('scroll', function() {
            if (pageYOffset >= 100){
                btn.style.display = 'block'
            }
            else {
                btn.style.display = 'none'
            }
        })
    </script>
    <?php require_once('donate-form.php'); ?>
    <script src="/src/js/donate.js"></script>
</body>
</html>
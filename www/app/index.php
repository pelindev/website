<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/includes/img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
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
                    <? require_once('/var/www/app/burger-menu.php'); ?>
                </li>
                <li class="menu-item menu_hide"><a href="#home">Домой</a></li>
                <li class="menu-item menu_hide"><a href="#services">Услуги</a></li>
                <li class="menu-item menu_hide"><a href="#about">Обо мне</a></li>
                <li class="menu-item menu_hide"><a href="#contacts">Контакты</a></li>
            </ul>
        </div>

        <!-- контент хедера -->
        <div class="header-block-top">
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
                <div class="services-block services-block-start">
                    <img src="/includes/img/html.png" alt="html">
                    <h2>Вёрстку сайта</h2>
                    <p>сверстаю сайт по вашему дизайну, адаптивно, кроссплатформенно</p>
                </div>

                <div class="services-block">
                    <img src="/includes/img/php.png" alt="php">
                    <h2>Динамический сайт</h2>
                    <p>создам динамический проект, основываясь на вашей задаче</p>
                </div>

                <div class="services-block services-block-end">
                    <img src="/includes/img/gitlab.png" alt="gitlab">
                    <h2>Помощь с проектом</h2>
                    <p>помогу с уже существующим проектом, проконсультирую по всем вопросам, относительно проекта</p>
                </div>
            </div>
            <hr class="hr_1">
            <div class="btn" id="portfolio-btn">посмотреть портфолио</div>

        </div>
    </div>

    <div class="semi-block">
        <div class="semi-block-content">
            <a href="https://github.com/pelindev">
                <div class="btn">Загляни ко мне на GitHub</div>
            </a>
        </div>
    </div>

    <!-- обо мне -->
    <div class="about">
        <a name="about"></a>
        <div class="container">
            <h1 id="about-header">Кто я такой?</h1>
            <hr>
            <div class="about-content-top">
                <img id="about-img" src="/includes/img/for-site.jpg" alt="my-photo">
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
                <input type="text" name="name">
                <span>Ваш email</span>
                <input type="email" name="email">
                <span>Ваше сообщение</span>
                <input type="text" name="message">
                <input type="submit">
            </form>
            <div class="social">
                <a href=""><svg class="icon-instagram" height="511pt" viewBox="0 0 511 511.9" width="511pt" xmlns="http://www.w3.org/2000/svg">
                        <path d="m510.949219 150.5c-1.199219-27.199219-5.597657-45.898438-11.898438-62.101562-6.5-17.199219-16.5-32.597657-29.601562-45.398438-12.800781-13-28.300781-23.101562-45.300781-29.5-16.296876-6.300781-34.898438-10.699219-62.097657-11.898438-27.402343-1.300781-36.101562-1.601562-105.601562-1.601562s-78.199219.300781-105.5 1.5c-27.199219 1.199219-45.898438 5.601562-62.097657 11.898438-17.203124 6.5-32.601562 16.5-45.402343 29.601562-13 12.800781-23.097657 28.300781-29.5 45.300781-6.300781 16.300781-10.699219 34.898438-11.898438 62.097657-1.300781 27.402343-1.601562 36.101562-1.601562 105.601562s.300781 78.199219 1.5 105.5c1.199219 27.199219 5.601562 45.898438 11.902343 62.101562 6.5 17.199219 16.597657 32.597657 29.597657 45.398438 12.800781 13 28.300781 23.101562 45.300781 29.5 16.300781 6.300781 34.898438 10.699219 62.101562 11.898438 27.296876 1.203124 36 1.5 105.5 1.5s78.199219-.296876 105.5-1.5c27.199219-1.199219 45.898438-5.597657 62.097657-11.898438 34.402343-13.300781 61.601562-40.5 74.902343-74.898438 6.296876-16.300781 10.699219-34.902343 11.898438-62.101562 1.199219-27.300781 1.5-36 1.5-105.5s-.101562-78.199219-1.300781-105.5zm-46.097657 209c-1.101562 25-5.300781 38.5-8.800781 47.5-8.601562 22.300781-26.300781 40-48.601562 48.601562-9 3.5-22.597657 7.699219-47.5 8.796876-27 1.203124-35.097657 1.5-103.398438 1.5s-76.5-.296876-103.402343-1.5c-25-1.097657-38.5-5.296876-47.5-8.796876-11.097657-4.101562-21.199219-10.601562-29.398438-19.101562-8.5-8.300781-15-18.300781-19.101562-29.398438-3.5-9-7.699219-22.601562-8.796876-47.5-1.203124-27-1.5-35.101562-1.5-103.402343s.296876-76.5 1.5-103.398438c1.097657-25 5.296876-38.5 8.796876-47.5 4.101562-11.101562 10.601562-21.199219 19.203124-29.402343 8.296876-8.5 18.296876-15 29.398438-19.097657 9-3.5 22.601562-7.699219 47.5-8.800781 27-1.199219 35.101562-1.5 103.398438-1.5 68.402343 0 76.5.300781 103.402343 1.5 25 1.101562 38.5 5.300781 47.5 8.800781 11.097657 4.097657 21.199219 10.597657 29.398438 19.097657 8.5 8.300781 15 18.300781 19.101562 29.402343 3.5 9 7.699219 22.597657 8.800781 47.5 1.199219 27 1.5 35.097657 1.5 103.398438s-.300781 76.300781-1.5 103.300781zm0 0" />
                        <path d="m256.449219 124.5c-72.597657 0-131.5 58.898438-131.5 131.5s58.902343 131.5 131.5 131.5c72.601562 0 131.5-58.898438 131.5-131.5s-58.898438-131.5-131.5-131.5zm0 216.800781c-47.097657 0-85.300781-38.199219-85.300781-85.300781s38.203124-85.300781 85.300781-85.300781c47.101562 0 85.300781 38.199219 85.300781 85.300781s-38.199219 85.300781-85.300781 85.300781zm0 0" />
                        <path d="m423.851562 119.300781c0 16.953125-13.746093 30.699219-30.703124 30.699219-16.953126 0-30.699219-13.746094-30.699219-30.699219 0-16.957031 13.746093-30.699219 30.699219-30.699219 16.957031 0 30.703124 13.742188 30.703124 30.699219zm0 0" />
                    </svg></a>
                <a href="https://t.me/pelin_dev"><svg class="icon-telegram" id="Bold" enable-background="new 0 0 24 24" height="512" viewBox="0 0 24 24" width="512" xmlns="http://www.w3.org/2000/svg">
                        <path d="m9.417 15.181-.397 5.584c.568 0 .814-.244 1.109-.537l2.663-2.545 5.518 4.041c1.012.564 1.725.267 1.998-.931l3.622-16.972.001-.001c.321-1.496-.541-2.081-1.527-1.714l-21.29 8.151c-1.453.564-1.431 1.374-.247 1.741l5.443 1.693 12.643-7.911c.595-.394 1.136-.176.691.218z" fill="rgb(150, 150, 150)" />
                    </svg></a>
                <a href="https://vk.com/cheeselamber"><svg class="icon-vk" id="regular" enable-background="new 0 0 24 24" height="512" viewBox="0 0 24 24" width="512" xmlns="http://www.w3.org/2000/svg">
                        <path d="m12.145 19.5c3.472 0 2.234-2.198 2.502-2.83-.004-.472-.008-.926.008-1.202.22.062.739.325 1.811 1.367 1.655 1.67 2.078 2.665 3.415 2.665h2.461c.78 0 1.186-.323 1.389-.594.196-.262.388-.722.178-1.438-.549-1.724-3.751-4.701-3.95-5.015.03-.058.078-.135.103-.175h-.002c.632-.835 3.044-4.449 3.399-5.895.001-.002.002-.005.002-.008.192-.66.016-1.088-.166-1.33-.274-.362-.71-.545-1.299-.545h-2.461c-.824 0-1.449.415-1.765 1.172-.529 1.345-2.015 4.111-3.129 5.09-.034-1.387-.011-2.446.007-3.233.036-1.535.152-3.029-1.441-3.029h-3.868c-.998 0-1.953 1.09-.919 2.384.904 1.134.325 1.766.52 4.912-.76-.815-2.112-3.016-3.068-5.829-.268-.761-.674-1.466-1.817-1.466h-2.461c-.998 0-1.594.544-1.594 1.455 0 2.046 4.529 13.544 12.145 13.544zm-8.09-13.499c.217 0 .239 0 .4.457.979 2.883 3.175 7.149 4.779 7.149 1.205 0 1.205-1.235 1.205-1.7l-.001-3.702c-.066-1.225-.512-1.835-.805-2.205l3.508.004c.002.017-.02 4.095.01 5.083 0 1.403 1.114 2.207 2.853.447 1.835-2.071 3.104-5.167 3.155-5.293.075-.18.14-.241.376-.241h2.461.01c-.001.003-.001.006-.002.009-.225 1.05-2.446 4.396-3.189 5.435-.012.016-.023.033-.034.05-.327.534-.593 1.124.045 1.954h.001c.058.07.209.234.429.462.684.706 3.03 3.12 3.238 4.08-.138.022-.288.006-2.613.011-.495 0-.882-.74-2.359-2.23-1.328-1.292-2.19-1.82-2.975-1.82-1.524 0-1.413 1.237-1.399 2.733.005 1.622-.005 1.109.006 1.211-.089.035-.344.105-1.009.105-6.345 0-10.477-10.071-10.636-11.996.055-.005.812-.002 2.546-.003z" fill="rgb(150, 150, 150)" />
                    </svg></a>
                <a href=""><svg class="icon-whatsapp" height="682pt" viewBox="-23 -21 682 682.66669" width="682pt" xmlns="http://www.w3.org/2000/svg">
                        <path d="m544.386719 93.007812c-59.875-59.945312-139.503907-92.9726558-224.335938-93.007812-174.804687 0-317.070312 142.261719-317.140625 317.113281-.023437 55.894531 14.578125 110.457031 42.332032 158.550781l-44.992188 164.335938 168.121094-44.101562c46.324218 25.269531 98.476562 38.585937 151.550781 38.601562h.132813c174.785156 0 317.066406-142.273438 317.132812-317.132812.035156-84.742188-32.921875-164.417969-92.800781-224.359376zm-224.335938 487.933594h-.109375c-47.296875-.019531-93.683594-12.730468-134.160156-36.742187l-9.621094-5.714844-99.765625 26.171875 26.628907-97.269531-6.269532-9.972657c-26.386718-41.96875-40.320312-90.476562-40.296875-140.28125.054688-145.332031 118.304688-263.570312 263.699219-263.570312 70.40625.023438 136.589844 27.476562 186.355469 77.300781s77.15625 116.050781 77.132812 186.484375c-.0625 145.34375-118.304687 263.59375-263.59375 263.59375zm144.585938-197.417968c-7.921875-3.96875-46.882813-23.132813-54.148438-25.78125-7.257812-2.644532-12.546875-3.960938-17.824219 3.96875-5.285156 7.929687-20.46875 25.78125-25.09375 31.066406-4.625 5.289062-9.242187 5.953125-17.167968 1.984375-7.925782-3.964844-33.457032-12.335938-63.726563-39.332031-23.554687-21.011719-39.457031-46.960938-44.082031-54.890626-4.617188-7.9375-.039062-11.8125 3.476562-16.171874 8.578126-10.652344 17.167969-21.820313 19.808594-27.105469 2.644532-5.289063 1.320313-9.917969-.664062-13.882813-1.976563-3.964844-17.824219-42.96875-24.425782-58.839844-6.4375-15.445312-12.964843-13.359374-17.832031-13.601562-4.617187-.230469-9.902343-.277344-15.1875-.277344-5.28125 0-13.867187 1.980469-21.132812 9.917969-7.261719 7.933594-27.730469 27.101563-27.730469 66.105469s28.394531 76.683594 32.355469 81.972656c3.960937 5.289062 55.878906 85.328125 135.367187 119.648438 18.90625 8.171874 33.664063 13.042968 45.175782 16.695312 18.984374 6.03125 36.253906 5.179688 49.910156 3.140625 15.226562-2.277344 46.878906-19.171875 53.488281-37.679687 6.601563-18.511719 6.601563-34.375 4.617187-37.683594-1.976562-3.304688-7.261718-5.285156-15.183593-9.253906zm0 0" fill-rule="evenodd" fill="rgb(150, 150, 150)" />
                    </svg></a>
            </div>
        </div>
    </div>
    <div id="up"><a href="#home">
            <div id="arrow-top"></div>
        </a></div>
    <script>
        window.addEventListener('scroll', function() {
            if (pageYOffset >= 100) $('#up').css({'display' : 'block'})
            else $('#up').css({'display' : 'none'});
        });
    </script>
    <? require_once('/var/www/app/donate-form.php'); ?>
    <? require_once('/var/www/app/modal.php'); ?>
</body>

</html>
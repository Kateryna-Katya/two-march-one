<?php

$fullDomain = strtolower($_SERVER['HTTP_HOST'] ?? '');
$fullDomain = explode(':', $fullDomain)[0];

$parts = explode('.', $fullDomain);
$domainSlug = count($parts) >= 2
        ? $parts[count($parts) - 2]
        : $fullDomain;

$domainTitle = ucwords(str_replace('-', ' ', $domainSlug));

?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $domainTitle ?> — Экспертный консалтинг и стратегии роста
    </title>

<link rel="icon" type="image/svg+xml"
    href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 32 32'%3E%3Crect x='2' y='2' width='22' height='22' fill='%230d0d0d' stroke='%23ffffff' stroke-width='3'/%3E%3Crect x='8' y='8' width='22' height='22' fill='%230d0d0d' stroke='%2300ff66' stroke-width='3'/%3E%3C/svg%3E">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&family=Syne:wght@700;800&display=swap"
        rel="stylesheet">

    <script src="https://unpkg.com/lucide@latest"></script>

    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header class="header">
        <div class="container header__container">
            <a href="./#hero" class="logo">
                <span class="logo__text">
                    <?= $domainTitle ?>
                </span>
            </a>

            <nav class="nav" id="nav">
                <ul class="nav__list">
                    <li><a href="./#hero" class="nav__link">Главная</a></li>
                    <li><a href="./#services" class="nav__link">Услуги</a></li>
                    <li><a href="./#cases" class="nav__link">Кейсы</a></li>
                    <li><a href="./#team" class="nav__link">Команда</a></li>
                    <li><a href="./#blog" class="nav__link">Блог</a></li>
                </ul>
            </nav>

            <div class="header__actions">
                <a href="./#contact" class="btn btn--primary">
                    Связаться
                </a>
                <button class="burger" id="burger" aria-label="Menu">
                    <span></span>
                </button>
            </div>
        </div>
    </header>
<main>
    <section class="pages">
        <div class="container">
            <h1 class="section-title">Условия использования</h1>

            <p class="pages__intro">
                Добро пожаловать на сайт <strong><?= $domainTitle ?></strong>! Настоящие Условия использования
                (далее — «Условия» или «Соглашение») представляют собой юридически
                обязывающий договор между вами (далее — «Пользователь») и <strong><?= $domainTitle ?></strong>
                (далее — «Компания», «мы», «нас»). Пожалуйста, внимательно
                ознакомьтесь с ними.
            </p>

            <p>
                Используя наш сайт и любые связанные с ним услуги, вы подтверждаете свое полное и безоговорочное согласие с данными Условиями. Если вы не согласны, вы должны немедленно прекратить использование платформы.
            </p>

            <h2>1. Предмет Соглашения</h2>
            <p>
                Компания предоставляет Пользователю доступ к использованию сайта
                <strong><?= $fullDomain ?></strong> и его функционала, включая, но не ограничиваясь: доступ к
                инновационным материалам, статьям в блоге, экспертным консультациям и другим инструментам 
                развития (далее — «Услуги»). Настоящее Соглашение регулирует все аспекты
                взаимодействия Пользователя с платформой.
            </p>

            <h2>2. Обязанности и права Пользователя</h2>
            <p>
                Вы обязуетесь использовать сайт исключительно в законных и личных
                некоммерческих целях. При использовании платформы <strong><?= $domainTitle ?></strong>
                <strong>запрещается</strong>:
            </p>
            <ul>
                <li>
                    Публиковать, передавать или распространять любую информацию,
                    которая является незаконной, вредоносной, клеветнической или нарушает авторские права.
                </li>
                <li>
                    Предпринимать любые действия, которые могут нарушить нормальную
                    работу сайта, его безопасность или привести к перегрузке
                    цифровой инфраструктуры <strong><?= $domainTitle ?></strong>.
                </li>
                <li>
                    Использовать автоматизированные скрипты (ботов) для сбора
                    информации без нашего предварительного письменного разрешения.
                </li>
                <li>
                    Выдавать себя за другое лицо или предоставлять недостоверную
                    информацию о себе при запросе экспертной поддержки.
                </li>
            </ul>

            <h2>3. Интеллектуальная собственность</h2>
            <p>
                Весь контент, размещенный на сайте <strong><?= $fullDomain ?></strong>, включая тексты, графику,
                изображения, видео, логотипы и программный код (далее — «Контент»), является объектом интеллектуальной
                собственной Компании или ее партнеров. Вам предоставляется ограниченная
                лицензия на использование Контента в личных целях для профессионального развития. 
                Любое копирование или распространение Контента без разрешения строго запрещено.
            </p>

            <h2>4. Ограничение ответственности</h2>
            <p>
                Услуги и все материалы на сайте предоставляются по принципу «как есть» (as is). Мы не даем никаких гарантий, что сайт будет работать бесперебойно или что его контент является абсолютно точным в контексте динамически меняющегося рынка в Германии и странах ЕС.
            </p>
            <p>
                Компания не несет ответственности за любые прямые или косвенные убытки, возникшие в результате использования или невозможности использования платформы <strong><?= $domainTitle ?></strong>. 
            </p>

            <h2>5. Изменения в Условиях</h2>
            <p>
                Мы оставляем за собой право в любое время изменять или дополнять настоящие Условия. Все изменения вступают в силу с момента их публикации на этой странице. Ваше дальнейшее использование сайта <strong><?= $fullDomain ?></strong> означает ваше автоматическое согласие с новой редакцией Условий.
            </p>

            <h2>6. Разрешение споров</h2>
            <p>
                Все споры и разногласия стороны будут стремиться разрешить путем конструктивных переговоров. В случае если согласие не будет достигнуто, спор подлежит рассмотрению в соответствии с действующим законодательством по месту регистрации Компании в <strong>Германии</strong>.
            </p>

            <div class="contact-extra" style="margin-top: 50px;">
                <h2>7. Контактная информация</h2>
                <p>
                    Если у вас возникли вопросы, связанные с настоящими Условиями, пожалуйста, свяжитесь с нами:
                </p>
                <p>
                    <strong>Email:</strong> <a href="mailto:office@<?= $fullDomain ?>" class="accent-link">office@<?= $fullDomain ?></a><br>
                    <strong>Телефон:</strong> <a href="tel:+390697895210" class="accent-link">+39 069 7895210</a><br>
                    <strong>Адрес:</strong> Friedrichstraße 171, 10117 Berlin, Germany
                </p>
            </div>
        </div>
    </section>
</main>


    <footer class="footer">
        <div class="container footer__grid">
            <div class="footer__col">
                <a href="./#hero" class="logo logo--footer">
                    <span class="logo__text">
                        <?= $domainTitle ?>
                    </span>
                </a>
                <p class="footer__description">
                    Решения, которые меняют правила игры. Ваш проверенный партнер в мире цифровой трансформации и
                    стратегического консалтинга.
                </p>
            </div>

            <div class="footer__col">
                <h4 class="footer__title">Навигация</h4>
                <ul class="footer__links">
                    <li><a href="./#hero">Главная</a></li>
                    <li><a href="./#services">Услуги</a></li>
                    <li><a href="./#cases">Кейсы</a></li>
                    <li><a href="./#blog">Блог</a></li>
                </ul>
            </div>

            <div class="footer__col">
                <h4 class="footer__title">Документы</h4>
                <ul class="footer__links">
                    <li><a href="./privacy.php">Privacy Policy</a></li>
                    <li><a href="./cookies.php">Cookie Policy</a></li>
                    <li><a href="./terms.php">Terms of Service</a></li>
                    <li><a href="./return.php">Return Policy</a></li>
                    <li><a href="./disclaimer.php">Disclaimer</a></li>
                    <li><a href="./contact.php">Contact Us</a></li>
                    <li><a href="./personal-data-policy.php">Data Policy</a></li>
                </ul>
            </div>

            <div class="footer__col">
                <h4 class="footer__title">Контакты</h4>
                <ul class="footer__contact-info">
                    <li>
                        <i data-lucide="phone"></i>
                        <a href="tel:+390697895210">+39 069 7895210</a>
                    </li>
                    <li>
                        <i data-lucide="mail"></i>
                        <a href="mailto:office@<?= $fullDomain ?>">office@
                            <?= $fullDomain ?>
                        </a>
                    </li>
                    <li>
                        <i data-lucide="map-pin"></i>
                        <span>Friedrichstraße 171, 10117 Berlin, Germany</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="footer__bottom container">
            <p>&copy; 2026
                <?= $domainTitle ?>. Все права защищены. Предложение активно только в странах ЕС.
            </p>
        </div>
    </footer>
<div id="cookie-popup" class="cookie-popup">
    <div class="cookie-popup__content">
        <p>Этот сайт использует cookies для улучшения работы. Подробнее — в нашей <a href="./cookies.php">Cookie
                политике</a>.</p>
        <button id="cookie-accept" class="btn btn--primary">Принять</button>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script src="script.js"></script>
</body>

</html>
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
            <h1 class="section-title">Политика касаемо обработки персональных данных</h1>

            <p class="pages__intro">
                Ваша приватность — наш приоритет. Настоящая политика определяет порядок и условия обработки данных платформой <strong><?= $domainTitle ?></strong> в строгом соответствии с требованиями GDPR и законодательства Германии.
            </p>

            <h2>1. Общие положения</h2>
            <p>
                Настоящая политика обработки персональных данных (далее — «Политика») определяет порядок и условия обработки персональных данных, предпринимаемые платформой <strong><?= $domainTitle ?></strong> (далее — «Оператор»), и устанавливает меры по обеспечению безопасности этих данных.
            </p>
            <p>
                1.1. Важнейшей целью и условием осуществления своей деятельности Оператор считает соблюдение прав и свобод человека и гражданина при обработке его персональных данных, в том числе защиты прав на неприкосновенность частной жизни, личную и семейную тайну.
            </p>
            <p>
                1.2. Настоящая Политика применяется ко всей информации, которую Оператор может получить о посетителях (далее — «Пользователи») веб-сайта <strong><?= $fullDomain ?></strong>.
            </p>

            <h2>2. Основные понятия, используемые в Политике</h2>
            <ul>
                <li>
                    <strong>Веб-сайт</strong> — совокупность графических и информационных материалов, программ для ЭВМ и баз данных, доступных по адресу <strong><?= $fullDomain ?></strong>.
                </li>
                <li><strong>Пользователь</strong> — любой посетитель веб-сайта.</li>
                <li>
                    <strong>Персональные данные</strong> — любая информация, относящаяся прямо или косвенно к определенному или определяемому Пользователю.
                </li>
                <li>
                    <strong>Обработка персональных данных</strong> — любое действие (операция) с персональными данными, совершаемое с использованием средств автоматизации или без них.
                </li>
                <li>
                    <strong>Безопасность персональных данных</strong> — защищенность данных от неправомерного доступа, уничтожения, изменения или блокирования.
                </li>
            </ul>

            <h2>3. Данные, которые мы обрабатываем</h2>
            <p>Оператор может обрабатывать следующие категории данных:</p>
            <ul>
                <li>
                    <strong>Персональные данные, предоставляемые Пользователем:</strong>
                    <ul>
                        <li>Фамилия, имя, отчество;</li>
                        <li>Адрес электронной почты (Email);</li>
                        <li>Номера телефонов (валидация по стандартам региона Германия).</li>
                    </ul>
                </li>
                <li>
                    <strong>Данные, собираемые автоматически:</strong>
                    <ul>
                        <li>
                            Обезличенные данные о посетителях (в т.ч. файлы «cookie») с помощью сервисов интернет-статистики (Google Analytics). Включают IP-адрес, тип браузера и параметры устройства.
                        </li>
                    </ul>
                </li>
            </ul>
            <p>
                Вышеперечисленные данные в рамках настоящей Политики платформы <strong><?= $domainTitle ?></strong> объединены общим понятием Персональные данные.
            </p>

            <h2>4. Цели обработки персональных данных</h2>
            <ul>
                <li>
                    Идентификация Пользователя для предоставления экспертных консалтинговых услуг.
                </li>
                <li>
                    Установление обратной связи, включая направление уведомлений и обработку заявок по инновационным решениям.
                </li>
                <li>
                    Заключение и исполнение договоров на базе передовой цифровой инфраструктуры в ЕС.
                </li>
                <li>
                    Информирование Пользователя посредством отправки электронных писем. Вы всегда можете отказаться от рассылок, направив письмо на адрес 
                    <a href="mailto:office@<?= $fullDomain ?>" class="accent-link">office@<?= $fullDomain ?></a> 
                    с пометкой «Отказ от уведомлений».
                </li>
            </ul>

            <h2>5. Правовые основания обработки</h2>
            <p>Оператор обрабатывает данные Пользователя только:</p>
            <ul>
                <li>При наличии добровольного согласия, выраженного через формы на сайте <strong><?= $domainTitle ?></strong>.</li>
                <li>Если сохранение файлов «cookie» разрешено в настройках вашего браузера.</li>
            </ul>

            <h2>6. Безопасность и хранение данных</h2>
            <ul>
                <li>
                    Оператор принимает технические меры защиты в соответствии с нормами GDPR.
                </li>
                <li>
                    Персональные данные никогда не будут переданы третьим лицам без вашего согласия, кроме случаев, предусмотренных законом.
                </li>
                <li>
                    Пользователь может отозвать согласие в любой момент, направив запрос на email 
                    <a href="mailto:office@<?= $fullDomain ?>" class="accent-link">office@<?= $fullDomain ?></a>.
                </li>
            </ul>

            <div class="contact-extra" style="margin-top: 50px;">
                <h2>7. Заключительные положения</h2>
                <p>
                    Для получения разъяснений по вопросам обработки ваших данных платформой <strong><?= $domainTitle ?></strong>, свяжитесь с нами:
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
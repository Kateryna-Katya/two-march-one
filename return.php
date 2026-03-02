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
            <h1 class="section-title">Политика возврата средств</h1>
            
            <p class="pages__intro">
                Мы стремимся обеспечить высочайшее качество наших экспертных услуг. Если по какой-то причине вы остались недовольны сотрудничеством с платформой <strong><?= $domainTitle ?></strong>, настоящая политика описывает условия и порядок возврата денежных средств.
            </p>

            <h2>Условия для оформления возврата</h2>
            <p>
                Вы можете претендовать на полный или частичный возврат средств в следующих ситуациях:
            </p>
            <ul>
                <li>
                    <strong>Несоответствие программы описанию:</strong> Если содержание предоставленной консультации или экспертного материала существенно отличается от программы, заявленной на сайте <strong><?= $domainTitle ?></strong> на момент покупки.
                </li>
                <li>
                    <strong>Технические неисправности с нашей стороны:</strong> При возникновении критических технических проблем на платформе <strong><?= $fullDomain ?></strong>, которые делают доступ к материалам или сессиям невозможным и не были устранены нашей командой в разумные сроки.
                </li>
                <li>
                    <strong>Отказ в течение «периода охлаждения»:</strong> Если вы решили отказаться от участия в программе в течение 14 (четырнадцати) календарных дней с момента оплаты, при условии, что вы еще не получили доступ к значительному объему материалов (см. раздел «Исключения»).
                </li>
            </ul>

            <h2>Процедура запроса на возврат</h2>
            <p>
                Чтобы инициировать процедуру возврата на платформе <strong><?= $domainTitle ?></strong>, пожалуйста, выполните следующие шаги:
            </p>
            <ol class="custom-list">
                <li>
                    Составьте письмо и отправьте его на наш официальный email: 
                    <a href="mailto:office@<?= $fullDomain ?>" class="accent-link">office@<?= $fullDomain ?></a>.
                </li>
                <li>
                    В теме письма обязательно укажите: <strong>«Запрос на возврат средств»</strong>.
                </li>
                <li>
                    В теле письма предоставьте полную информацию: ваше имя и фамилию, email, использованный при регистрации, и точное название выбранной программы.
                </li>
                <li>
                    Четко и подробно опишите причину, по которой вы запрашиваете возврат, со ссылкой на один из пунктов наших условий.
                </li>
                <li>
                    После получения письма наша экспертная поддержка рассмотрит запрос и свяжется с вами в течение 3-х рабочих дней.
                </li>
            </ol>

            <h2>Сроки и способ возврата</h2>
            <p>
                После одобрения вашего запроса, возврат денежных средств будет произведен в течение 7–14 рабочих дней. Средства будут возвращены тем же способом, которым была совершена оплата. Обратите внимание, что фактический срок зачисления может зависеть от регламента работы вашего банка или платежной системы в <strong>Германии</strong> или стране вашего пребывания.
            </p>

            <h2>Исключения и ограничения</h2>
            <p>Возврат средств не может быть осуществлен, если:</p>
            <ul>
                <li>
                    Запрос подан по истечении 14 календарных дней с момента оплаты.
                </li>
                <li>
                    Вы уже изучили, просмотрели или скачали более 50% материалов программы, независимо от времени, прошедшего с момента покупки.
                </li>
                <li>
                    Причиной невозможности пройти обучение являются технические проблемы на стороне пользователя (например, проблемы с ПО).
                </li>
                <li>
                    Были нарушены другие условия Пользовательского соглашения <strong><?= $domainTitle ?></strong> с вашей стороны.
                </li>
            </ul>

            <h2>Изменения в политике</h2>
            <p>
                <strong><?= $domainTitle ?></strong> оставляет за собой право вносить изменения в настоящую Политику возврата. Актуальная версия всегда доступна на этой странице <strong><?= $fullDomain ?></strong>.
            </p>

            <div class="contact-extra" style="margin-top: 50px;">
                <h2>Свяжитесь с нами</h2>
                <p>
                    По всем вопросам, связанным с возвратом средств или условиями консультаций, пожалуйста, обращайтесь в нашу службу поддержки:
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
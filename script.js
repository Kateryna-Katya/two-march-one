document.addEventListener('DOMContentLoaded', () => {
    // 1. Инициализация иконок
    if (window.lucide) lucide.createIcons();

    // 2. Мобильное меню
    const burger = document.getElementById('burger');
    const nav = document.getElementById('nav');
    const navLinks = document.querySelectorAll('.nav__link');

    const toggleMenu = () => {
        burger.classList.toggle('active');
        nav.classList.toggle('active');
        document.body.style.overflow = nav.classList.contains('active') ? 'hidden' : '';
    };

    burger.addEventListener('click', toggleMenu);

    navLinks.forEach(link => {
        link.addEventListener('click', () => {
            if (nav.classList.contains('active')) toggleMenu();
        });
    });

    // 3. Анимация Hero (Anime.js)
    const runHeroAnimation = () => {
        const tl = anime.timeline({ easing: 'easeOutExpo', duration: 1000 });
        tl.add({
            targets: '.hero__badge',
            scale: [0, 1],
            rotate: [-10, -2],
            opacity: [0, 1],
            delay: 500
        })
        .add({
            targets: '.hero__title .word',
            translateY: [100, 0],
            opacity: [0, 1],
            delay: anime.stagger(150)
        }, '-=600')
        .add({
            targets: '.hero__subtitle, .hero__btns',
            translateY: [30, 0],
            opacity: [0, 1],
            delay: anime.stagger(200)
        }, '-=800');
    };
    runHeroAnimation();

    // 4. Scroll Reveal (Anime.js + IntersectionObserver)
    const observerOptions = { threshold: 0.15 };
    const revealObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const target = entry.target;
                
                if (target.classList.contains('services__grid')) {
                    anime({ targets: '.service-card', translateY: [50, 0], opacity: [0, 1], delay: anime.stagger(200) });
                }
                if (target.classList.contains('case-item')) {
                    anime({ targets: target, translateX: target.classList.contains('case-item--reverse') ? [100, 0] : [-100, 0], opacity: [0, 1], duration: 1500 });
                }
                if (target.classList.contains('team__grid')) {
                    anime({ targets: '.team-card', translateY: [60, 0], opacity: [0, 1], delay: anime.stagger(200) });
                }
                if (target.classList.contains('blog__grid')) {
                    anime({ targets: '.blog-post', scale: [0.9, 1], opacity: [0, 1], delay: anime.stagger(200), easing: 'easeOutElastic(1, .8)' });
                }
                revealObserver.unobserve(target);
            }
        });
    }, observerOptions);

    document.querySelectorAll('.services__grid, .case-item, .team__grid, .blog__grid').forEach(el => revealObserver.observe(el));

    // 5. Форма контактов
    const contactForm = document.getElementById('ajax-form');
    if (contactForm) {
        const phoneInput = document.getElementById('phone-input');
        const captchaLabel = document.getElementById('captcha-question');
        let n1 = Math.floor(Math.random() * 10), n2 = Math.floor(Math.random() * 10);
        let correct = n1 + n2;
        if (captchaLabel) captchaLabel.innerText = `${n1} + ${n2}`;

        phoneInput.addEventListener('input', (e) => e.target.value = e.target.value.replace(/\D/g, ''));

        contactForm.addEventListener('submit', async (e) => {
            e.preventDefault();
            const ans = parseInt(document.getElementById('captcha-answer').value);
            const msg = document.getElementById('form-message');

            if (ans !== correct) {
                msg.innerText = "Ошибка капчи!";
                msg.className = "form-message error";
                return;
            }

            const btn = contactForm.querySelector('button');
            btn.disabled = true;
            btn.innerText = "Загрузка...";

            await new Promise(r => setTimeout(r, 1500)); // Имитация AJAX
            
            msg.innerText = "Сообщение отправлено! Мы свяжемся с вами.";
            msg.className = "form-message success";
            contactForm.reset();
            btn.disabled = false;
            btn.innerText = "Отправить запрос";
        });
    }

    // 6. Cookie Popup Logic
    const cookiePopup = document.getElementById('cookie-popup');
    const cookieBtn = document.getElementById('cookie-accept');

    if (!localStorage.getItem('cookies-accepted')) {
        setTimeout(() => {
            cookiePopup.style.display = 'block';
            anime({
                targets: '#cookie-popup',
                translateY: [100, 0],
                opacity: [0, 1],
                duration: 800,
                easing: 'easeOutQuart'
            });
        }, 2000);
    }

    cookieBtn.addEventListener('click', () => {
        localStorage.setItem('cookies-accepted', 'true');
        anime({
            targets: '#cookie-popup',
            translateY: [0, 100],
            opacity: [1, 0],
            duration: 500,
            easing: 'easeInQuart',
            complete: () => cookiePopup.style.display = 'none'
        });
    });
});
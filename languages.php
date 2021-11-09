<?php
return [
  'ru' => [
    'lang' => 'ru',
    'title' => 'Тимошенко Ксения - Портфолио',
    'nav-link' => ['обо мне', 'опыт', 'проекты', 'контакты'],
    'welcome-title' => 'Привет, я&nbsp;-&nbsp;Ксения&nbsp;Тимошенко',
    'welcome-content' => 'Добро пожаловать на мой сайт-портфолио! На данный момент я нахожусь в поиске интересной позиции, а представленное портфолио позволит Вам познакомиться с приобретенными мной навыками и опытом.',
    'experience-title' => 'Опыт',
    'experience-description' => 'Мое первое знакомство с ИТ произошло в 2019 году. С того времени, я изучаю следующие технологии, которые также активно практикую.',
    'experience-achievement' => 'Мои достижения и образование',
    'experience-extra-title' => 'Дополнительно',
    'experience-extra-content' => [
      'bem' => 'Также в своих проектах я использую методологию БЭМ верстки. Я проверяю вложенность, правильность и соответствие методологии в генераторе HTML-дерева.',
      'pixel-perfect' => 'Я использую Pixel Perfect с самого первого проекта. Это позволяет мне точно отображать макет, а также научило меня в ходе перепроверки макета в браузере лучше разбираться в отладке кода с помощью DevTools.',
      'validator' => 'Что касается тестирования моего проекта, я дополнительно использую валидатор разметки W3C. Этот валидатор проверяет правильность разметки веб-документов в HTML, XHTML, SMIL, MathML и т.д.'
    ],
    'projects-title' => 'Проекты',
    'projects-content' => [
      [
        'img' => '3d-model',
        'projects-content-title' => 'Дизайн-агентство 3D Model',
        'projects-content-technologies' => 'Технологии: HTML, CSS, Bootstrap, JS, PHP, Webpack',
        'projects-content-more' => 'Лэндинг-страница дизайн-агенства, где реализованы: таймер, POST-запросы (с использованием fetch API) для форм на сайте, простые JS анимации для мобильного меню и модальной формы, табы, слайдер на чистом JS, а также калькулятор работ.',
        'projects-content-button' => 'Посмотреть сайт'
      ],
      [
        'img' => 'desktop',
        'projects-content-title' => 'Клон "Рабочий стол" на jQuery',
        'projects-content-technologies' => 'Технологии: HTML, CSS, CSS Flexbox, jQuery, jQuery UI',
        'projects-content-more' => 'Своеобразный симулятор рабочего стола, где реализован функционал перетаскивания файлов с рабочего стола в папки, из папки в папку, и из папки на рабочий стол с сохранением текущего состояния их расположения в локальном хранилище (localStorage). Могу реализовать подобный функционал на чистом JS, используя drag&drop собятия (например, примерно похожая мини-работа реализована мной на <a href="https://jsfiddle.net/KsyTim/9Ltwd5v0/4/" target="_blank" rel="noopener noreferrer">JSFiddle</a>).',
        'projects-content-button' => 'Посмотреть сайт'
      ],
      [
        'img' => 'fitness',
        'projects-content-title' => 'Фитнес-клуб "Тело"',
        'projects-content-technologies' => 'Технологии: HTML, CSS, CSS Flexbox, JS',
        'projects-content-more' => 'Многостраничный сайт, где реализованы слайдеры, модальные окна, POST-запросы (с использованием fetch API) для форм на сайте, калькулятор (который парсит стоимость абонементов со страниц клубов сайта путем обращения к объекту DOMParser()), а также Яндекс.Карты.',
        'projects-content-button' => 'Посмотреть сайт'
      ],
      [
        'img' => 'toDo-oop',
        'projects-content-title' => 'To Do',
        'projects-content-technologies' => 'Технологии: HTML, CSS, JS',
        'projects-content-more' => 'Приложение реализовано в ООП стиле. Различные состояния "дел, которые необходимо выполнить (To Do)" анимированы с помощью JS. В приложении обработчик событий реализован с использованием делегирования (как и во всех других моих проектах). Текущеее состояние "дел, которые необходимо выполнить (To Do)" обновляется и сохраняется в локальном хранилище (localStorage).',
        'projects-content-button' => 'Посмотреть сайт'
      ],
      [
        'img' => 'tour-plan',
        'projects-content-title' => 'Агентство "Tour Plan"',
        'projects-content-technologies' => 'Технологии: PHP, HTML, CSS, CSS Flexbox, CSS Grid Layout, jQuery, JS, SASS',
        'projects-content-more' => 'На сайте реализованы слайдеры  с помощью Swiper, отправка данных форм обратной связи и модальных окон POST-методом на почту с помощью PHP библиотеки - PHPMailer, Google Карты, анимация элементов с помощью JS&CSS3 библотеки Animation at Scroll - AOS, parallax эффект для секции с подпиской, а также валидация и маски для полей форм на сайте с помощью плагинов jQuery Mask & jQuery Validator.',
        'projects-content-button' => 'Посмотреть сайт'
      ],
      [
        'img' => 'universal',
        'projects-content-title' => 'ИТ блог о веб-разработке - Universal',
        'projects-content-technologies' => 'Технологии: PHP, HTML, CSS, CSS Flexbox, CSS Grid Layout, jQuery, JS, SASS',
        'projects-content-more' => 'Многостраничный сайт, где реализованы табы, слайдеры с помощью Swiper, отправка данных форм обратной связи и модальных окон POST-методом на почту с помощью PHP библиотеки - PHPMailer, parallax эффект для раздела перехода на дочернюю страницу сайта, а также валидация и маски для полей форм на сайте с помощью плагинов jQuery Mask & jQuery Validator.',
        'projects-content-button' => 'Посмотреть сайт'
      ]
    ],
    'contact-title' => 'Контакты',
    'contact-info' => 'Сейчас Вы смогли немного познакомиться с моей деятельностью. <br>Здесь Вы можете связаться со мной по любому интересующему Вас вопросу (предложения, фидбэк и т.п.).',
    'contact-form-input' => [
      'text' => [
        'name' => 'name',
        'id' => 'name',
        'placeholder' => 'Ваше имя'
      ],
      'email' => [
        'name' => 'email',
        'id' => 'email',
        'placeholder' => 'Ваш email'
      ]
    ],
    'contact-form-textarea' => [
      'name' => 'message',
      'id' => 'message',
      'placeholder' => 'Сообщение'
    ],
    'contact-form-button' => 'Связаться',
    'email-subject' => 'Мой%20веб-сайт%20e-mail%20запрос',
    'whatsup' => 'Привет!%20Я%20просмотрел(-а)%20твой%20сайт%20и%20хотел(-а)%20бы%20подробнее%20пообщаться%20с%20тобой.',
    'footer-copyright-left' => 'No Copyright 2021',
    'footer-copyright-right' => 'Ксения Тимошенко'
  ],
  'en' => [
    'lang' => 'en',
    'title' => 'Timoshenko Kseniia - Portfolio Website',
    'nav-link' => ['about', 'experience', 'projects', 'contacts'],
    'welcome-title' => 'Hello, I&nbsp;am&nbsp;Kseniia&nbsp;Timoshenko',
    'welcome-content' => 'Welcome to my website! I am searching the opportunity to&nbsp;be&nbsp;hired on an interesting position. Here you can find out my&nbsp;portfolio to meet with my skills and experience.',
    'experience-title' => 'Experience',
    'experience-description' => 'I started my way into IT in 2019. Since that time, I have been studying the&nbsp;following technologies, which I use in the practice.',
    'experience-achievement' => 'My education & achievements',
    'experience-extra-title' => 'Extra-experience',
    'experience-extra-content' => [
      'bem' => 'Also in my projects I use the BEM layout methodology. I check the nesting, correctness and compliance of the methodology in the HTML Tree Generator.',
      'pixel-perfect' => 'I have been using Pixel Perfect layout since my first project. This allows me to accurately display the layout, but also taught me to double-check my layout in the browser using DevTools.',
      'validator' => 'As for testing my project, there\'s validated by W3C Markup Validator. This validator checks the markup validity of Web documents in HTML, XHTML, SMIL, MathML, etc.'
    ],
    'projects-title' => 'Projects',
    'projects-content' => [
      [
        'img' => '3d-model',
        'projects-content-title' => 'Design Agency 3D Model',
        'projects-content-technologies' => 'Technologies: HTML, CSS, Bootstrap, JS, PHP, Webpack',
        'projects-content-more' => 'Design agency landing page, where implements the timer, POST-requests using fetch API for the site forms, simple JS animation for mobile menu and modal window, tabs, pure JS slider, and a calculator.',
        'projects-content-button' => 'Visit website'
      ],
      [
        'img' => 'desktop',
        'projects-content-title' => 'Desktop Clone jQuery',
        'projects-content-technologies' => 'Technologies: HTML, CSS, CSS Flexbox, jQuery, jQuery UI',
        'projects-content-more' => 'The desktop simulator application where you can move files from your desktop to folders, from folder to folder, while maintaining the current state in localStorage. I can implement similar functionality on pure JS using drag&drop events (for example, the similar project which I implemented on <a href="https://jsfiddle.net/KsyTim/9Ltwd5v0/4/" target="_blank" rel="noopener noreferrer">JSFiddle</a>).',
        'projects-content-button' => 'Visit website'
      ],
      [
        'img' => 'fitness',
        'projects-content-title' => 'Fitness Club "Body"',
        'projects-content-technologies' => 'Technologies: HTML, CSS, CSS Flexbox, JS',
        'projects-content-more' => 'The multi-page site that implements sliders, modal window, POST-requests using fetch API for the site forms, calculator that parses the subscriptions cost from neighboring sites using the object DOMParser, Yandex Maps.',
        'projects-content-button' => 'Visit website'
      ],
      [
        'img' => 'toDo-oop',
        'projects-content-title' => 'To Do',
        'projects-content-technologies' => 'Technologies: HTML, CSS, JS',
        'projects-content-more' => 'The application is implemented in an OOP style. Various states of "affairs To Do" on the list are animated via JS. In the application, the event handler is implemented using delegation (such as in all my other projects). The current state of "affairs To Do" is updated and stored in localStorage.',
        'projects-content-button' => 'Visit website'
      ],
      [
        'img' => 'tour-plan',
        'projects-content-title' => 'Agency "Tour Plan"',
        'projects-content-technologies' => 'Technologies: PHP, HTML, CSS, CSS Flexbox, CSS Grid Layout, jQuery, JS, SASS',
        'projects-content-more' => 'The site implements sliders using the Swiper, sending feedback forms and modal windows by the POST-method using the PHP library - PHPMailer, Google Maps, elements animation using the JS&CSS3 library Animation at Scroll - AOS, subscription section parallax effect, as well as form fields validation and masks using jQuery Mask & jQuery Validator plugins.',
        'projects-content-button' => 'Visit website'
      ],
      [
        'img' => 'universal',
        'projects-content-title' => 'IT Blog about web-development',
        'projects-content-technologies' => 'Technologies: PHP, HTML, CSS, CSS Flexbox, CSS Grid Layout, jQuery, JS, SASS',
        'projects-content-more' => 'The multi-page site that implements tabs, sliders using Swiper, sending feedback forms and modal windows by the POST-method using the PHP library - PHPMailer, parallax effect for the transition section to the child page, as well as form fields validation and masks using jQuery Mask & jQuery Validator plugins.',
        'projects-content-button' => 'Visit website'
      ]
    ],
    'contact-title' => 'Contact Me',
    'contact-info' => 'Now that you know a lot about me, <br>let me know if you are interested to work with me.',
    'contact-form-input' => [
      'text' => [
        'name' => 'name',
        'id' => 'name',
        'placeholder' => 'What’s your name?'
      ],
      'email' => [
        'name' => 'email',
        'id' => 'email',
        'placeholder' => 'Your email'
      ]
    ],
    'contact-form-textarea' => [
      'name' => 'message',
      'id' => 'message',
      'placeholder' => 'Message'
    ],
    'contact-form-button' => 'Contact',
    'email-subject' => 'My%20website%20e-mail%20request',
    'whatsup' => 'Hello!%20I\'ve%20reviewed%20your%20site%20and%20would%20like%20to%20chat%20with%20you.',
    'footer-copyright-left' => 'No Copyright 2021',
    'footer-copyright-right' => 'Kseniia Timoshenko'
  ]
];

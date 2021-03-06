<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
       (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
       m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
       (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

       ym(57057118, "init", {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true,
            webvisor:true
       });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/57057118" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->

    <link rel="shortcut icon" href="favicon.ico?v=2" type="image/x-icon">
    <title><?=$title;?></title>
    <link rel="stylesheet" href="css/style.min.css">

    <script src="js/picturefill.min.js" async></script>
</head>
<body>
<div class="svg-template">
    <include src="build/img/sprite.svg"></include>
</div>
<header class="header">
    <div class="header__top-wrap">
        <a href="/">
            <picture>
                <source type="image/webp" media="(min-width: 768px)" srcset="img/logos/logo-tablet.webp">
                <source type="image/webp" srcset="img/logos/logo-mobile-big.webp">

                <source media="(min-width: 768px)" srcset="img/logos/logo-tablet.png">
                <img class="header__logo" src="img/logos/logo-mobile-big.png" width="228" height="60" alt="Логотип развивающего центра Суперсемейка">
            </picture>
        </a>
        <b class="header__tagline">Развивающий центр</b>
        <button class="header__button-toggle" type="button">Открыть/закрыть меню</button>
    </div>
    <div class="header__wrap">
        <div class="header__menu-wrap">
            <div class="header__contacts-social-wrap">
                <ul class="header__social-list top-social-list">
                    <li class="top-social-list__item">
                        <a class="top-social-list__link" href="https://www.instagram.com/supersemeyka_69">
                            Инстаграм
                            <svg class="top-social-list__svg" width="35" height="35"><use xlink:href="#icon-instagram"></use></svg>
                        </a>
                    </li>
                    <li class="top-social-list__item">
                        <a class="top-social-list__link" href="https://vk.com/supersemeyka69">
                            ВКонтакте
                            <svg class="top-social-list__svg" width="35" height="35"><use xlink:href="#icon-vk"></use></svg>
                        </a>
                    </li>
                </ul>
                <ul class="header__contacts-list top-contacts-list">
                    <li class="top-contacts-list__item">
                        <a class="top-contacts-list__link" href="tel:+79206940404">8 920 694-04-04</a>
                    </li>
                    <li class="top-contacts-list__item">
                        <p class="top-contacts-list__address">г.Тверь ул. Псковская д.4</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>

<?=$content; ?>

<script src="https://api-maps.yandex.ru/2.1/?apikey=cd34823f-0b8b-4aba-be82-72027d93120e&lang=en_US"></script>
<script src="js/script.min.js" defer=""></script>
</body>
</html>

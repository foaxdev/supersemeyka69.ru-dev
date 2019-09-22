<!doctype html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="shortcut icon" href="favicon.ico?v=2" type="image/x-icon">
        <title>Форма заявки</title>
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

        <main>
            <h1 class="section-header section-header--main">Форма заявки</h1>

            <section class="form-section">
                <form class="form" action="request.php" method="post" autocomplete="off">
                    <div class="form__row">
                        <?php $classname = isset($errors["name"]) ? "form__input--error" : "";?>
                        <label class="form__label" for="name">Имя <sup>*</sup></label>

                        <input class="form__input <?=$classname; ?>" type="text" name="name" id="name" value="<?=getPostValue('name'); ?>" placeholder="Введите имя">
                        <p class="form__message"><?=$errors["name"] ?? ""; ?></p>
                    </div>

                    <div class="form__row">
                        <?php $classname = isset($errors["faculty"]) ? "form__input--error" : ""; ?>
                        <label class="form__label" for="faculty">Направление <sup>*</sup></label>

                        <select class="form__input form__input--select <?=$classname; ?>" name="faculty" id="faculty">
                            <?php for($i = 0; $i < sizeof($arr_faculties); $i++) {
                                    $selected = "";
                                    if (isFacultySelected($arr_faculties[$i])) {
                                        $selected = "selected";
                                    }
                                    print('<option value="' . $arr_faculties[$i] . '" ' . $selected . '>' . $arr_faculties[$i] . '</option>');
                                }
                            ?>
                        </select>
                        <p class="form__message"><?=$errors["faculty"] ?? ""; ?></p>
                    </div>

                    <div class="form__row">
                        <?php $classname = isset($errors["tel"]) ? "form__input--error" : ""; ?>
                        <label class="form__label" for="tel">Телефон <sup>*</sup></label>

                        <input class="form__input form__input--date <?=$classname; ?>" type="tel" name="tel" id="tel" value="<?=getPostValue('tel'); ?>" placeholder="Введите телефон">
                        <p class="form__message"><?=$errors["tel"] ?? ""; ?></p>
                    </div>

                    <div class="form__row">
                        <?php $classname = isset($errors["email"]) ? "form__input--error" : ""; ?>
                        <label class="form__label" for="email">Email <sup>*</sup></label>

                        <input class="form__input form__input--date <?=$classname; ?>" type="email" name="email" id="email" value="<?=getPostValue('email'); ?>" placeholder="Введите email">
                        <p class="form__message"><?=$errors["email"] ?? ""; ?></p>
                    </div>

                    <div class="form__row">
                        <label class="form__label" for="text">Текст сообщения</label>
                        <textarea class="form__textarea" name="text" id="text" value="<?=getPostValue('text'); ?>" placeholder="Если вы хотите записаться на несколько направлений или у вас есть вопросы, напишите нам."><?=getPostValue('text'); ?></textarea>
                    </div>

                    <div class="form__row form__row--controls">
                        <input class="button" type="submit" value="Отправить">
                    </div>
                </form>
            </section>
        </main>

        <footer class="footer">
            <div class="footer__wrap">
                <div class="footer__company-wrap">
                    <p class="footer__text">Суперсемейка</p>
                    <a class="footer__link footer__link--email" href="mailto:supersemeyka69@yandex.ru">supersemeyka69@yandex.ru</a>
                </div>
                <div class="footer__company-wrap">
                    <p class="footer__text">Создание сайта - <a class="footer__link" href="https://github.com/foaxdev">FOAX-DEV</a></p>
                    <a class="footer__link footer__link--email" href="mailto:synthbeing@icloud.com">synthbeing@icloud.com</a>
                </div>
            </div>
        </footer>
        <script src="js/script.min.js" defer></script>
    </body>
</html>

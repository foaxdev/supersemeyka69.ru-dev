<main>
    <h1 class="visually-hidden">Развивающий центр Суперсемейка</h1>

    <section class="introduction">
        <video class="introduction__video" src="video/intro.mp4" autoplay="" loop="" muted="muted" controlslist="nodownload" poster="img/poster.jpg"></video>
    </section>

    <section class="features" id="features">
        <h2 class="section-header">Развивающий центр "Суперсемейка" - это:</h2>
        <ol class="features-list">
            <?php foreach($features as $index => $feature): ?>
            <li class="features-list__item">
                <span class="features-list__number"><?=$index + 1;?></span>
                <p class="features-list__title"><?=$feature;?></p>
            </li>
            <?php endforeach; ?>
        </ol>
    </section>

    <section class="faculties" id="faculties">
        <h2 class="section-header">Направления</h2>
        <ul class="faculties-list">
            <?php foreach($faculties as $name => $faculty): ?>
            <li class="faculties-list__item">
                <a class="faculties-list__link" href="<?=$name;?>.php">
                    <picture>
                        <source type="image/webp" srcset="img/faculties/<?=$name;?>.webp">

                        <img class="faculties-list__image" src="img/faculties/<?=$name;?>.png" alt="<?=$faculty["alt"];?>">
                    </picture>
                    <span class="faculties-list__title"><?=$faculty["title"];?></span>
                </a>
            </li>
            <?php endforeach; ?>
        </ul>
    </section>

    <section class="schedule" id="schedule">
        <h2 class="section-header">Расписание</h2>
        <ul class="schedule-list">
            <li class="schedule-list__item">
                <button class="modal-toggle-button" type="button">Понедельник</button>
                <a href="img/schedule/monday.png">
                    <picture>
                        <source type="image/webp" media="(min-width: 1200px)" srcset="img/schedule/monday-desktop.webp">
                        <source type="image/webp" media="(min-width: 768px)" srcset="img/schedule/monday-tablet.webp">
                        <source type="image/webp" srcset="img/schedule/monday-mobile.webp">

                        <source media="(min-width: 1200px)" srcset="img/schedule/monday-desktop.png">
                        <source media="(min-width: 768px)" srcset="img/schedule/monday-tablet.png">
                        <img class="modal-image" src="img/schedule/monday-mobile.png" alt="Расписание на понедельник">
                    </picture>
                </a>
                <div class="overlay"></div>
                <div class="modal modal-schedule" data-slide="1">
                    <button class="modal__close-button" type="button">Закрыть</button>
                    <a href="img/schedule/monday.png">
                        <picture>
                            <source type="image/webp" srcset="img/schedule/monday-mobile.webp">

                            <img class="modal-schedule__original-image" src="img/schedule/monday-mobile.png" alt="Расписание на понедельник">
                        </picture>
                    </a>
                    <ul class="back-forward-buttons-list">
                        <li class="back-forward-buttons-list__item"><button class="back-forward-buttons-list__button back-forward-buttons-list__button--previous" type="button">Предыдущее фото</button></li>
                        <li class="back-forward-buttons-list__item"><button class="back-forward-buttons-list__button back-forward-buttons-list__button--next" type="button">Следующее фото</button></li>
                    </ul>
                </div>
            </li>
            <li class="schedule-list__item">
                <button class="modal-toggle-button" type="button">Вторник</button>
                <a href="img/schedule/tuesday.png">
                    <picture>
                        <source type="image/webp" media="(min-width: 1200px)" srcset="img/schedule/tuesday-desktop.webp">
                        <source type="image/webp" media="(min-width: 768px)" srcset="img/schedule/tuesday-tablet.webp">
                        <source type="image/webp" srcset="img/schedule/tuesday-mobile.webp">

                        <source media="(min-width: 1200px)" srcset="img/schedule/tuesday-desktop.png">
                        <source media="(min-width: 768px)" srcset="img/schedule/tuesday-tablet.png">
                        <img class="modal-image" src="img/schedule/tuesday-mobile.png" alt="Расписание на вторник">
                    </picture>
                </a>
                <div class="overlay"></div>
                <div class="modal modal-schedule" data-slide="2">
                    <button class="modal__close-button" type="button">Закрыть</button>
                    <a href="img/schedule/tuesday.png">
                        <picture>
                            <source type="image/webp" srcset="img/schedule/tuesday-mobile.webp">

                            <img class="modal-schedule__original-image" src="img/schedule/tuesday-mobile.png" alt="Расписание на вторник">
                        </picture>
                    </a>
                    <ul class="back-forward-buttons-list">
                        <li class="back-forward-buttons-list__item"><button class="back-forward-buttons-list__button back-forward-buttons-list__button--previous" type="button">Предыдущее фото</button></li>
                        <li class="back-forward-buttons-list__item"><button class="back-forward-buttons-list__button back-forward-buttons-list__button--next" type="button">Следующее фото</button></li>
                    </ul>
                </div>
            </li>
            <li class="schedule-list__item">
                <button class="modal-toggle-button" type="button">Среда</button>
                <a href="img/schedule/wednesday.png">
                    <picture>
                        <source type="image/webp" media="(min-width: 1200px)" srcset="img/schedule/wednesday-desktop.webp">
                        <source type="image/webp" media="(min-width: 768px)" srcset="img/schedule/wednesday-tablet.webp">
                        <source type="image/webp" srcset="img/schedule/wednesday-mobile.webp">

                        <source media="(min-width: 1200px)" srcset="img/schedule/wednesday-desktop.png">
                        <source media="(min-width: 768px)" srcset="img/schedule/wednesday-tablet.png">
                        <img class="modal-image" src="img/schedule/wednesday-mobile.png" alt="Расписание на среду">
                    </picture>
                </a>
                <div class="overlay"></div>
                <div class="modal modal-schedule" data-slide="3">
                    <button class="modal__close-button" type="button">Закрыть</button>
                    <a href="img/schedule/wednesday.png">
                        <picture>
                            <source type="image/webp" srcset="img/schedule/wednesday-mobile.webp">

                            <img class="modal-schedule__original-image" src="img/schedule/wednesday-mobile.png" alt="Расписание на среду">
                        </picture>
                    </a>
                    <ul class="back-forward-buttons-list">
                        <li class="back-forward-buttons-list__item"><button class="back-forward-buttons-list__button back-forward-buttons-list__button--previous" type="button">Предыдущее фото</button></li>
                        <li class="back-forward-buttons-list__item"><button class="back-forward-buttons-list__button back-forward-buttons-list__button--next" type="button">Следующее фото</button></li>
                    </ul>
                </div>
            </li>
            <li class="schedule-list__item">
                <button class="modal-toggle-button" type="button">Четверг</button>
                <a href="img/schedule/thursday.png">
                    <picture>
                        <source type="image/webp" media="(min-width: 1200px)" srcset="img/schedule/thursday-desktop.webp">
                        <source type="image/webp" media="(min-width: 768px)" srcset="img/schedule/thursday-tablet.webp">
                        <source type="image/webp" srcset="img/schedule/thursday-mobile.webp">

                        <source media="(min-width: 1200px)" srcset="img/schedule/thursday-desktop.png">
                        <source media="(min-width: 768px)" srcset="img/schedule/thursday-tablet.png">
                        <img class="modal-image" src="img/schedule/thursday-mobile.png" alt="Расписание на четверг">
                    </picture>
                </a>
                <div class="overlay"></div>
                <div class="modal modal-schedule" data-slide="4">
                    <button class="modal__close-button" type="button">Закрыть</button>
                    <a href="img/schedule/thursday.png">
                        <picture>
                            <source type="image/webp" srcset="img/schedule/thursday-mobile.webp">

                            <img class="modal-schedule__original-image" src="img/schedule/thursday-mobile.png" alt="Расписание на четверг">
                        </picture>
                    </a>
                    <ul class="back-forward-buttons-list">
                        <li class="back-forward-buttons-list__item"><button class="back-forward-buttons-list__button back-forward-buttons-list__button--previous" type="button">Предыдущее фото</button></li>
                        <li class="back-forward-buttons-list__item"><button class="back-forward-buttons-list__button back-forward-buttons-list__button--next" type="button">Следующее фото</button></li>
                    </ul>
                </div>
            </li>
            <li class="schedule-list__item">
                <button class="modal-toggle-button" type="button">Пятница</button>
                <a href="img/schedule/friday.png">
                    <picture>
                        <source type="image/webp" media="(min-width: 1200px)" srcset="img/schedule/friday-desktop.webp">
                        <source type="image/webp" media="(min-width: 768px)" srcset="img/schedule/friday-tablet.webp">
                        <source type="image/webp" srcset="img/schedule/friday-mobile.webp">

                        <source media="(min-width: 1200px)" srcset="img/schedule/friday-desktop.png">
                        <source media="(min-width: 768px)" srcset="img/schedule/friday-tablet.png">
                        <img class="modal-image" src="img/schedule/friday-mobile.png" alt="Расписание на пятницу">
                    </picture>
                </a>
                <div class="overlay"></div>
                <div class="modal modal-schedule" data-slide="5">
                    <button class="modal__close-button" type="button">Закрыть</button>
                    <a href="img/schedule/friday.png">
                        <picture>
                            <source type="image/webp" srcset="img/schedule/friday-mobile.webp">

                            <img class="modal-schedule__original-image" src="img/schedule/friday-mobile.png" alt="Расписание на пятницу">
                        </picture>
                    </a>
                    <ul class="back-forward-buttons-list">
                        <li class="back-forward-buttons-list__item"><button class="back-forward-buttons-list__button back-forward-buttons-list__button--previous" type="button">Предыдущее фото</button></li>
                        <li class="back-forward-buttons-list__item"><button class="back-forward-buttons-list__button back-forward-buttons-list__button--next" type="button">Следующее фото</button></li>
                    </ul>
                </div>
            </li>
            <li class="schedule-list__item">
                <button class="modal-toggle-button" type="button">Суббота</button>
                <a href="img/schedule/saturday.png">
                    <picture>
                        <source type="image/webp" media="(min-width: 1200px)" srcset="img/schedule/saturday-desktop.webp">
                        <source type="image/webp" media="(min-width: 768px)" srcset="img/schedule/saturday-tablet.webp">
                        <source type="image/webp" srcset="img/schedule/saturday-mobile.webp">

                        <source media="(min-width: 1200px)" srcset="img/schedule/saturday-desktop.png">
                        <source media="(min-width: 768px)" srcset="img/schedule/saturday-tablet.png">
                        <img class="modal-image" src="img/schedule/saturday-mobile.png" alt="Расписание на субботу">
                    </picture>
                </a>
                <div class="overlay"></div>
                <div class="modal modal-schedule" data-slide="6">
                    <button class="modal__close-button" type="button">Закрыть</button>
                    <a href="img/schedule/saturday.png">
                        <picture>
                            <source type="image/webp" srcset="img/schedule/saturday-mobile.webp">

                            <img class="modal-schedule__original-image" src="img/schedule/saturday-mobile.png" alt="Расписание на субботу">
                        </picture>
                    </a>
                    <ul class="back-forward-buttons-list">
                        <li class="back-forward-buttons-list__item"><button class="back-forward-buttons-list__button back-forward-buttons-list__button--previous" type="button">Предыдущее фото</button></li>
                        <li class="back-forward-buttons-list__item"><button class="back-forward-buttons-list__button back-forward-buttons-list__button--next" type="button">Следующее фото</button></li>
                    </ul>
                </div>
            </li>
        </ul>
    </section>

    <section class="teachers" id="teachers">
        <h2 class="section-header">Преподаватели</h2>

        <ul class="teachers-list">
            <li class="teachers-list__item">
                <div class="teachers-list__short-info">
                    <picture>
                        <source type="image/webp" media="(min-width: 1200px)" srcset="img/teachers/prokopenko-desktop.webp">
                        <source type="image/webp" srcset="img/teachers/prokopenko-tablet.webp">

                        <source media="(min-width: 1200px)" srcset="img/teachers/prokopenko-desktop.jpg">
                        <img class="teachers-list__image-preview" src="img/teachers/prokopenko-tablet.jpg" alt="Фотография педагога Прокопенко Елены Алексеевны">
                    </picture>
                    <button class="teachers-list__button-toggle modal-toggle-button modal-toggle-button--teachers">Информация</button>
                    <span class="teachers-list__subject">Подготовка к школе</span>
                    <button class="teachers-list__button-toggle modal-toggle-button modal-toggle-button--teachers-name">Прокопенко Елена Алексеевна</button>
                </div>
                <div class="teachers-list__info-wrap teachers-list__info-wrap--hidden">
                    <button class="teachers-list__close-button" type="button">Закрыть</button>
                    <div class="teachers-list__main-info-wrap">
                        <picture>
                            <source type="image/webp" srcset="img/teachers/prokopenko-mobile.webp">

                            <img class="teachers-list__image" src="img/teachers/prokopenko-mobile.jpg" alt="Фотография педагога Прокопенко Елены Алексеевны">
                        </picture>
                        <ul class="teacher-description-list">
                            <li class="teacher-description-list__item">Учитель высшей квалификационной категории.</li>
                            <li class="teacher-description-list__item">Стаж работы в педагогике - 31 год.</li>
                            <li class="teacher-description-list__item">В 1999 году награждена грамотой управления образования администрации города Твери.</li>
                            <li class="teacher-description-list__item">В 2007 году награждена почётной грамотой Департамента образования Тверской области.</li>
                            <li class="teacher-description-list__item">В 2012 году вручена благодарность администрации города Твери за многолетний добросовестный труд в отрасли образования и достигнутые успехи в обучении и воспитании подрастающего поколения.</li>
                        </ul>
                    </div>
                    <div class="diplomas">
                        <button class="modal-toggle-button" type="button">Дипломы</button>
                        <div class="diplomas__wrap">
                            <a href="img/dimploma/prokopenko/diploma-1.png">
                                <picture>
                                    <source type="image/webp" media="(min-width: 1200px)" srcset="img/dimploma/prokopenko/diploma-1-desktop.webp">
                                    <source type="image/webp" media="(min-width: 768px)" srcset="img/dimploma/prokopenko/diploma-1-tablet.webp">
                                    <source type="image/webp" srcset="img/dimploma/prokopenko/diploma-1-mobile.webp">

                                    <source media="(min-width: 1200px)" srcset="img/dimploma/prokopenko/diploma-1-desktop.png">
                                    <source media="(min-width: 768px)" srcset="img/dimploma/prokopenko/diploma-1-tablet.png">
                                    <img class="diplomas__image modal-image" src="img/dimploma/prokopenko/diploma-1-mobile.png" alt="Диплом Прокопенко Елены Алексеевны">
                                </picture>
                            </a>
                            <div class="overlay"></div>
                            <div class="modal">
                                <button class="modal__close-button" type="button">Закрыть</button>
                                <a href="img/dimploma/prokopenko/diploma-1.png">
                                    <picture>
                                        <source type="image/webp" srcset="img/dimploma/prokopenko/diploma-1-mobile.webp">

                                        <img class="diplomas__original-image modal__original-image" src="img/dimploma/prokopenko/diploma-1-mobile.png" alt="Диплом Прокопенко Елены Алексеевны">
                                    </picture>
                                </a>
                            </div>
                            <a href="img/dimploma/prokopenko/diploma-2.png">
                                <picture>
                                    <source type="image/webp" media="(min-width: 1200px)" srcset="img/dimploma/prokopenko/diploma-2-desktop.webp">
                                    <source type="image/webp" media="(min-width: 768px)" srcset="img/dimploma/prokopenko/diploma-2-tablet.webp">
                                    <source type="image/webp" srcset="img/dimploma/prokopenko/diploma-2-mobile.webp">

                                    <source media="(min-width: 1200px)" srcset="img/dimploma/prokopenko/diploma-2-desktop.png">
                                    <source media="(min-width: 768px)" srcset="img/dimploma/prokopenko/diploma-2-tablet.png">
                                    <img class="diplomas__image modal-image" src="img/dimploma/prokopenko/diploma-2-mobile.png" alt="Диплом Прокопенко Елены Алексеевны">
                                </picture>
                            </a>
                            <div class="overlay"></div>
                            <div class="modal">
                                <button class="modal__close-button" type="button">Закрыть</button>
                                <a href="img/dimploma/prokopenko/diploma-2.png">
                                    <picture>
                                        <source type="image/webp" srcset="img/dimploma/prokopenko/diploma-2-mobile.webp">

                                        <img class="diplomas__original-image modal__original-image" src="img/dimploma/prokopenko/diploma-2-mobile.png" alt="Диплом Прокопенко Елены Алексеевны">
                                    </picture>
                                </a>
                            </div>
                            <a href="img/dimploma/prokopenko/diploma-3.png">
                                <picture>
                                    <source type="image/webp" media="(min-width: 1200px)" srcset="img/dimploma/prokopenko/diploma-3-desktop.webp">
                                    <source type="image/webp" media="(min-width: 768px)" srcset="img/dimploma/prokopenko/diploma-3-tablet.webp">
                                    <source type="image/webp" srcset="img/dimploma/prokopenko/diploma-3-mobile.webp">

                                    <source media="(min-width: 1200px)" srcset="img/dimploma/prokopenko/diploma-3-desktop.png">
                                    <source media="(min-width: 768px)" srcset="img/dimploma/prokopenko/diploma-3-tablet.png">
                                    <img class="diplomas__image modal-image" src="img/dimploma/prokopenko/diploma-3-mobile.png" alt="Диплом Прокопенко Елены Алексеевны">
                                </picture>
                            </a>
                            <div class="overlay"></div>
                            <div class="modal">
                                <button class="modal__close-button" type="button">Закрыть</button>
                                <a href="img/dimploma/prokopenko/diploma-3.png">
                                    <picture>
                                        <source type="image/webp" srcset="img/dimploma/prokopenko/diploma-3-mobile.webp">

                                        <img class="diplomas__original-image modal__original-image" src="img/dimploma/prokopenko/diploma-3-mobile.png" alt="Диплом Прокопенко Елены Алексеевны">
                                    </picture>
                                </a>
                            </div>
                            <a href="img/dimploma/prokopenko/diploma-4.png">
                                <picture>
                                    <source type="image/webp" media="(min-width: 1200px)" srcset="img/dimploma/prokopenko/diploma-4-desktop.webp">
                                    <source type="image/webp" media="(min-width: 768px)" srcset="img/dimploma/prokopenko/diploma-4-tablet.webp">
                                    <source type="image/webp" srcset="img/dimploma/prokopenko/diploma-4-mobile.webp">

                                    <source media="(min-width: 1200px)" srcset="img/dimploma/prokopenko/diploma-4-desktop.png">
                                    <source media="(min-width: 768px)" srcset="img/dimploma/prokopenko/diploma-4-tablet.png">
                                    <img class="diplomas__image modal-image" src="img/dimploma/prokopenko/diploma-4-mobile.png" alt="Диплом Прокопенко Елены Алексеевны">
                                </picture>
                            </a>
                            <div class="overlay"></div>
                            <div class="modal">
                                <button class="modal__close-button" type="button">Закрыть</button>
                                <a href="img/dimploma/prokopenko/diploma-4.png">
                                    <picture>
                                        <source type="image/webp" srcset="img/dimploma/prokopenko/diploma-4-mobile.webp">

                                        <img class="diplomas__original-image modal__original-image" src="img/dimploma/prokopenko/diploma-4-mobile.png" alt="Диплом Прокопенко Елены Алексеевны">
                                    </picture>
                                </a>
                            </div>
                            <a href="img/dimploma/prokopenko/diploma-5.png">
                                <picture>
                                    <source type="image/webp" media="(min-width: 1200px)" srcset="img/dimploma/prokopenko/diploma-5-desktop.webp">
                                    <source type="image/webp" media="(min-width: 768px)" srcset="img/dimploma/prokopenko/diploma-5-tablet.webp">
                                    <source type="image/webp" srcset="img/dimploma/prokopenko/diploma-5-mobile.webp">

                                    <source media="(min-width: 1200px)" srcset="img/dimploma/prokopenko/diploma-5-desktop.png">
                                    <source media="(min-width: 768px)" srcset="img/dimploma/prokopenko/diploma-5-tablet.png">
                                    <img class="diplomas__image modal-image" src="img/dimploma/prokopenko/diploma-5-mobile.png" alt="Диплом Прокопенко Елены Алексеевны">
                                </picture>
                            </a>
                            <div class="overlay"></div>
                            <div class="modal">
                                <button class="modal__close-button" type="button">Закрыть</button>
                                <a href="img/dimploma/prokopenko/diploma-5.png">
                                    <picture>
                                        <source type="image/webp" srcset="img/dimploma/prokopenko/diploma-5-mobile.webp">

                                        <img class="diplomas__original-image modal__original-image" src="img/dimploma/prokopenko/diploma-5-mobile.png" alt="Диплом Прокопенко Елены Алексеевны">
                                    </picture>
                                </a>
                            </div>
                            <a href="img/dimploma/prokopenko/diploma-6.png">
                                <picture>
                                    <source type="image/webp" media="(min-width: 1200px)" srcset="img/dimploma/prokopenko/diploma-6-desktop.webp">
                                    <source type="image/webp" media="(min-width: 768px)" srcset="img/dimploma/prokopenko/diploma-6-tablet.webp">
                                    <source type="image/webp" srcset="img/dimploma/prokopenko/diploma-6-mobile.webp">

                                    <source media="(min-width: 1200px)" srcset="img/dimploma/prokopenko/diploma-6-desktop.png">
                                    <source media="(min-width: 768px)" srcset="img/dimploma/prokopenko/diploma-6-tablet.png">
                                    <img class="diplomas__image modal-image" src="img/dimploma/prokopenko/diploma-6-mobile.png" alt="Диплом Прокопенко Елены Алексеевны">
                                </picture>
                            </a>
                            <div class="overlay"></div>
                            <div class="modal">
                                <button class="modal__close-button" type="button">Закрыть</button>
                                <a href="img/dimploma/prokopenko/diploma-6.png">
                                    <picture>
                                        <source type="image/webp" srcset="img/dimploma/prokopenko/diploma-6-mobile.webp">

                                        <img class="diplomas__original-image modal__original-image" src="img/dimploma/prokopenko/diploma-6-mobile.png" alt="Диплом Прокопенко Елены Алексеевны">
                                    </picture>
                                </a>
                            </div>
                            <a href="img/dimploma/prokopenko/diploma-7.png">
                                <picture>
                                    <source type="image/webp" media="(min-width: 1200px)" srcset="img/dimploma/prokopenko/diploma-7-desktop.webp">
                                    <source type="image/webp" media="(min-width: 768px)" srcset="img/dimploma/prokopenko/diploma-7-tablet.webp">
                                    <source type="image/webp" srcset="img/dimploma/prokopenko/diploma-7-mobile.webp">

                                    <source media="(min-width: 1200px)" srcset="img/dimploma/prokopenko/diploma-7-desktop.png">
                                    <source media="(min-width: 768px)" srcset="img/dimploma/prokopenko/diploma-7-tablet.png">
                                    <img class="diplomas__image modal-image" src="img/dimploma/prokopenko/diploma-7-mobile.png" alt="Диплом Прокопенко Елены Алексеевны">
                                </picture>
                            </a>
                            <div class="overlay"></div>
                            <div class="modal">
                                <button class="modal__close-button" type="button">Закрыть</button>
                                <a href="img/dimploma/prokopenko/diploma-7.png">
                                    <picture>
                                        <source type="image/webp" srcset="img/dimploma/prokopenko/diploma-7-mobile.webp">

                                        <img class="diplomas__original-image modal__original-image" src="img/dimploma/prokopenko/diploma-7-mobile.png" alt="Диплом Прокопенко Елены Алексеевны">
                                    </picture>
                                </a>
                            </div>
                            <a href="img/dimploma/prokopenko/diploma-8.png">
                                <picture>
                                    <source type="image/webp" media="(min-width: 1200px)" srcset="img/dimploma/prokopenko/diploma-8-desktop.webp">
                                    <source type="image/webp" media="(min-width: 768px)" srcset="img/dimploma/prokopenko/diploma-8-tablet.webp">
                                    <source type="image/webp" srcset="img/dimploma/prokopenko/diploma-8-mobile.webp">

                                    <source media="(min-width: 1200px)" srcset="img/dimploma/prokopenko/diploma-8-desktop.png">
                                    <source media="(min-width: 768px)" srcset="img/dimploma/prokopenko/diploma-8-tablet.png">
                                    <img class="diplomas__image modal-image" src="img/dimploma/prokopenko/diploma-8-mobile.png" alt="Диплом Прокопенко Елены Алексеевны">
                                </picture>
                            </a>
                            <div class="overlay"></div>
                            <div class="modal">
                                <button class="modal__close-button" type="button">Закрыть</button>
                                <a href="img/dimploma/prokopenko/diploma-8.png">
                                    <picture>
                                        <source type="image/webp" srcset="img/dimploma/prokopenko/diploma-8-mobile.webp">

                                        <img class="diplomas__original-image modal__original-image" src="img/dimploma/prokopenko/diploma-8-mobile.png" alt="Диплом Прокопенко Елены Алексеевны">
                                    </picture>
                                </a>
                            </div>
                            <a href="img/dimploma/prokopenko/diploma-9.png">
                                <picture>
                                    <source type="image/webp" media="(min-width: 1200px)" srcset="img/dimploma/prokopenko/diploma-9-desktop.webp">
                                    <source type="image/webp" media="(min-width: 768px)" srcset="img/dimploma/prokopenko/diploma-9-tablet.webp">
                                    <source type="image/webp" srcset="img/dimploma/prokopenko/diploma-9-mobile.webp">

                                    <source media="(min-width: 1200px)" srcset="img/dimploma/prokopenko/diploma-9-desktop.png">
                                    <source media="(min-width: 768px)" srcset="img/dimploma/prokopenko/diploma-9-tablet.png">
                                    <img class="diplomas__image modal-image" src="img/dimploma/prokopenko/diploma-9-mobile.png" alt="Диплом Прокопенко Елены Алексеевны">
                                </picture>
                            </a>
                            <div class="overlay"></div>
                            <div class="modal">
                                <button class="modal__close-button" type="button">Закрыть</button>
                                <a href="img/dimploma/prokopenko/diploma-9.png">
                                    <picture>
                                        <source type="image/webp" srcset="img/dimploma/prokopenko/diploma-9-mobile.webp">

                                        <img class="diplomas__original-image modal__original-image" src="img/dimploma/prokopenko/diploma-9-mobile.png" alt="Диплом Прокопенко Елены Алексеевны">
                                    </picture>
                                </a>
                            </div>
                            <a href="img/dimploma/prokopenko/diploma-10.png">
                                <picture>
                                    <source type="image/webp" media="(min-width: 1200px)" srcset="img/dimploma/prokopenko/diploma-10-desktop.webp">
                                    <source type="image/webp" media="(min-width: 768px)" srcset="img/dimploma/prokopenko/diploma-10-tablet.webp">
                                    <source type="image/webp" srcset="img/dimploma/prokopenko/diploma-10-mobile.webp">

                                    <source media="(min-width: 1200px)" srcset="img/dimploma/prokopenko/diploma-10-desktop.png">
                                    <source media="(min-width: 768px)" srcset="img/dimploma/prokopenko/diploma-10-tablet.png">
                                    <img class="diplomas__image modal-image" src="img/dimploma/prokopenko/diploma-10-mobile.png" alt="Диплом Прокопенко Елены Алексеевны">
                                </picture>
                            </a>
                            <div class="overlay"></div>
                            <div class="modal">
                                <button class="modal__close-button" type="button">Закрыть</button>
                                <a href="img/dimploma/prokopenko/diploma-10.png">
                                    <picture>
                                        <source type="image/webp" srcset="img/dimploma/prokopenko/diploma-10-mobile.webp">

                                        <img class="diplomas__original-image modal__original-image" src="img/dimploma/prokopenko/diploma-10-mobile.png" alt="Диплом Прокопенко Елены Алексеевны">
                                    </picture>
                                </a>
                            </div>
                            <a href="img/dimploma/prokopenko/diploma-11.png">
                                <picture>
                                    <source type="image/webp" media="(min-width: 1200px)" srcset="img/dimploma/prokopenko/diploma-11-desktop.webp">
                                    <source type="image/webp" media="(min-width: 768px)" srcset="img/dimploma/prokopenko/diploma-11-tablet.webp">
                                    <source type="image/webp" srcset="img/dimploma/prokopenko/diploma-11-mobile.webp">

                                    <source media="(min-width: 1200px)" srcset="img/dimploma/prokopenko/diploma-11-desktop.png">
                                    <source media="(min-width: 768px)" srcset="img/dimploma/prokopenko/diploma-11-tablet.png">
                                    <img class="diplomas__image modal-image" src="img/dimploma/prokopenko/diploma-11-mobile.png" alt="Диплом Прокопенко Елены Алексеевны">
                                </picture>
                            </a>
                            <div class="overlay"></div>
                            <div class="modal">
                                <button class="modal__close-button" type="button">Закрыть</button>
                                <a href="img/dimploma/prokopenko/diploma-11.png">
                                    <picture>
                                        <source type="image/webp" srcset="img/dimploma/prokopenko/diploma-11-mobile.webp">

                                        <img class="diplomas__original-image modal__original-image" src="img/dimploma/prokopenko/diploma-11-mobile.png" alt="Диплом Прокопенко Елены Алексеевны">
                                    </picture>
                                </a>
                            </div>
                            <a href="img/dimploma/prokopenko/diploma-12.png">
                                <picture>
                                    <source type="image/webp" media="(min-width: 1200px)" srcset="img/dimploma/prokopenko/diploma-12-desktop.webp">
                                    <source type="image/webp" media="(min-width: 768px)" srcset="img/dimploma/prokopenko/diploma-12-tablet.webp">
                                    <source type="image/webp" srcset="img/dimploma/prokopenko/diploma-12-mobile.webp">

                                    <source media="(min-width: 1200px)" srcset="img/dimploma/prokopenko/diploma-12-desktop.png">
                                    <source media="(min-width: 768px)" srcset="img/dimploma/prokopenko/diploma-12-tablet.png">
                                    <img class="diplomas__image modal-image" src="img/dimploma/prokopenko/diploma-12-mobile.png" alt="Диплом Прокопенко Елены Алексеевны">
                                </picture>
                            </a>
                            <div class="overlay"></div>
                            <div class="modal">
                                <button class="modal__close-button" type="button">Закрыть</button>
                                <a href="img/dimploma/prokopenko/diploma-12.png">
                                    <picture>
                                        <source type="image/webp" srcset="img/dimploma/prokopenko/diploma-12-mobile.webp">

                                        <img class="diplomas__original-image modal__original-image" src="img/dimploma/prokopenko/diploma-12-mobile.png" alt="Диплом Прокопенко Елены Алексеевны">
                                    </picture>
                                </a>
                            </div>
                            <a href="img/dimploma/prokopenko/diploma-13.png">
                                <picture>
                                    <source type="image/webp" media="(min-width: 1200px)" srcset="img/dimploma/prokopenko/diploma-13-desktop.webp">
                                    <source type="image/webp" media="(min-width: 768px)" srcset="img/dimploma/prokopenko/diploma-13-tablet.webp">
                                    <source type="image/webp" srcset="img/dimploma/prokopenko/diploma-13-mobile.webp">

                                    <source media="(min-width: 1200px)" srcset="img/dimploma/prokopenko/diploma-13-desktop.png">
                                    <source media="(min-width: 768px)" srcset="img/dimploma/prokopenko/diploma-13-tablet.png">
                                    <img class="diplomas__image modal-image" src="img/dimploma/prokopenko/diploma-13-mobile.png" alt="Диплом Прокопенко Елены Алексеевны">
                                </picture>
                            </a>
                            <div class="overlay"></div>
                            <div class="modal">
                                <button class="modal__close-button" type="button">Закрыть</button>
                                <a href="img/dimploma/prokopenko/diploma-13.png">
                                    <picture>
                                        <source type="image/webp" srcset="img/dimploma/prokopenko/diploma-13-mobile.webp">

                                        <img class="diplomas__original-image modal__original-image" src="img/dimploma/prokopenko/diploma-13-mobile.png" alt="Диплом Прокопенко Елены Алексеевны">
                                    </picture>
                                </a>
                            </div>
                            <a href="img/dimploma/prokopenko/diploma-14.png">
                                <picture>
                                    <source type="image/webp" media="(min-width: 1200px)" srcset="img/dimploma/prokopenko/diploma-14-desktop.webp">
                                    <source type="image/webp" media="(min-width: 768px)" srcset="img/dimploma/prokopenko/diploma-14-tablet.webp">
                                    <source type="image/webp" srcset="img/dimploma/prokopenko/diploma-14-mobile.webp">

                                    <source media="(min-width: 1200px)" srcset="img/dimploma/prokopenko/diploma-14-desktop.png">
                                    <source media="(min-width: 768px)" srcset="img/dimploma/prokopenko/diploma-14-tablet.png">
                                    <img class="diplomas__image modal-image" src="img/dimploma/prokopenko/diploma-14-mobile.png" alt="Диплом Прокопенко Елены Алексеевны">
                                </picture>
                            </a>
                            <div class="overlay"></div>
                            <div class="modal">
                                <button class="modal__close-button" type="button">Закрыть</button>
                                <a href="img/dimploma/prokopenko/diploma-14.png">
                                    <picture>
                                        <source type="image/webp" srcset="img/dimploma/prokopenko/diploma-14-mobile.webp">

                                        <img class="diplomas__original-image modal__original-image" src="img/dimploma/prokopenko/diploma-14-mobile.png" alt="Диплом Прокопенко Елены Алексеевны">
                                    </picture>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="teachers-list__item">
                <div class="teachers-list__short-info">
                    <picture>
                        <source type="image/webp" media="(min-width: 1200px)" srcset="img/teachers/lyutikova-desktop.webp">
                        <source type="image/webp" srcset="img/teachers/lyutikova-tablet.webp">

                        <source media="(min-width: 1200px)" srcset="img/teachers/lyutikova-desktop.jpg">
                        <img class="teachers-list__image-preview" src="img/teachers/lyutikova-tablet.jpg" alt="Фотография педагога Лютиковой Натальи Александровны">
                    </picture>
                    <button class="teachers-list__button-toggle modal-toggle-button modal-toggle-button--teachers">Информация</button>
                    <span class="teachers-list__subject">Английский язык</span>
                    <button class="teachers-list__button-toggle modal-toggle-button modal-toggle-button--teachers-name">Лютикова Наталья Александровна</button>
                </div>
                <div class="teachers-list__info-wrap teachers-list__info-wrap--hidden">
                    <button class="teachers-list__close-button" type="button">Закрыть</button>
                    <div class="teachers-list__main-info-wrap">
                        <picture>
                            <source type="image/webp" srcset="img/teachers/lyutikova-mobile.webp">

                            <img class="teachers-list__image" src="img/teachers/lyutikova-mobile.jpg" alt="Фотография педагога Лютиковой Натальи Александровны">
                        </picture>
                        <ul class="teacher-description-list">
                            <li class="teacher-description-list__item">Учитель первой квалификационной категории.</li>
                            <li class="teacher-description-list__item">Стаж работы в педагогике - 12 лет.</li>
                            <li class="teacher-description-list__item">В 2013 году награждена почетной грамотой управления образования администрации города Твери за добросовестный труд и высокие результаты в деле обучения и воспитания подрастающего поколения.</li>
                            <li class="teacher-description-list__item">В 2013 году награждена дипломом первой степени за участие в международной педагогической олимпиаде "Педагогическая мозайка".</li>
                        </ul>
                    </div>
                    <div class="diplomas">
                        <button class="modal-toggle-button" type="button">Дипломы</button>
                        <div class="diplomas__wrap">
                            <a href="img/dimploma/lyutikova/diploma-1.png">
                                <picture>
                                    <source type="image/webp" media="(min-width: 1200px)" srcset="img/dimploma/lyutikova/diploma-1-desktop.webp">
                                    <source type="image/webp" media="(min-width: 768px)" srcset="img/dimploma/lyutikova/diploma-1-tablet.webp">
                                    <source type="image/webp" srcset="img/dimploma/lyutikova/diploma-1-mobile.webp">

                                    <source media="(min-width: 1200px)" srcset="img/dimploma/lyutikova/diploma-1-desktop.png">
                                    <source media="(min-width: 768px)" srcset="img/dimploma/lyutikova/diploma-1-tablet.png">
                                    <img class="diplomas__image modal-image" src="img/dimploma/lyutikova/diploma-1-mobile.png" alt="Диплом Лютиковой Натальи Александровны">
                                </picture>
                            </a>
                            <div class="overlay"></div>
                            <div class="modal">
                                <button class="modal__close-button" type="button">Закрыть</button>
                                <a href="img/dimploma/lyutikova/diploma-1.png">
                                    <picture>
                                        <source type="image/webp" srcset="img/dimploma/lyutikova/diploma-1-mobile.webp">

                                        <img class="diplomas__original-image modal__original-image" src="img/dimploma/lyutikova/diploma-1-mobile.png" alt="Диплом Лютиковой Натальи Александровны">
                                    </picture>
                                </a>
                            </div>
                            <a href="img/dimploma/lyutikova/diploma-2.png">
                                <picture>
                                    <source type="image/webp" media="(min-width: 1200px)" srcset="img/dimploma/lyutikova/diploma-2-desktop.webp">
                                    <source type="image/webp" media="(min-width: 768px)" srcset="img/dimploma/lyutikova/diploma-2-tablet.webp">
                                    <source type="image/webp" srcset="img/dimploma/lyutikova/diploma-2-mobile.webp">

                                    <source media="(min-width: 1200px)" srcset="img/dimploma/lyutikova/diploma-2-desktop.png">
                                    <source media="(min-width: 768px)" srcset="img/dimploma/lyutikova/diploma-2-tablet.png">
                                    <img class="diplomas__image modal-image" src="img/dimploma/lyutikova/diploma-2-mobile.png" alt="Диплом Лютиковой Натальи Александровны">
                                </picture>
                            </a>
                            <div class="overlay"></div>
                            <div class="modal">
                                <button class="modal__close-button" type="button">Закрыть</button>
                                <a href="img/dimploma/lyutikova/diploma-2.png">
                                    <picture>
                                        <source type="image/webp" srcset="img/dimploma/lyutikova/diploma-2-mobile.webp">

                                        <img class="diplomas__original-image modal__original-image" src="img/dimploma/lyutikova/diploma-2-mobile.png" alt="Диплом Лютиковой Натальи Александровны">
                                    </picture>
                                </a>
                            </div>
                            <a href="img/dimploma/lyutikova/diploma-3.png">
                                <picture>
                                    <source type="image/webp" media="(min-width: 1200px)" srcset="img/dimploma/lyutikova/diploma-3-desktop.webp">
                                    <source type="image/webp" media="(min-width: 768px)" srcset="img/dimploma/lyutikova/diploma-3-tablet.webp">
                                    <source type="image/webp" srcset="img/dimploma/lyutikova/diploma-3-mobile.webp">

                                    <source media="(min-width: 1200px)" srcset="img/dimploma/lyutikova/diploma-3-desktop.png">
                                    <source media="(min-width: 768px)" srcset="img/dimploma/lyutikova/diploma-3-tablet.png">
                                    <img class="diplomas__image modal-image" src="img/dimploma/lyutikova/diploma-3-mobile.png" alt="Диплом Лютиковой Натальи Александровны">
                                </picture>
                            </a>
                            <div class="overlay"></div>
                            <div class="modal">
                                <button class="modal__close-button" type="button">Закрыть</button>
                                <a href="img/dimploma/lyutikova/diploma-3.png">
                                    <picture>
                                        <source type="image/webp" srcset="img/dimploma/lyutikova/diploma-3-mobile.webp">

                                        <img class="diplomas__original-image modal__original-image" src="img/dimploma/lyutikova/diploma-3-mobile.png" alt="Диплом Лютиковой Натальи Александровны">
                                    </picture>
                                </a>
                            </div>
                            <a href="img/dimploma/lyutikova/diploma-4.png">
                                <picture>
                                    <source type="image/webp" media="(min-width: 1200px)" srcset="img/dimploma/lyutikova/diploma-4-desktop.webp">
                                    <source type="image/webp" media="(min-width: 768px)" srcset="img/dimploma/lyutikova/diploma-4-tablet.webp">
                                    <source type="image/webp" srcset="img/dimploma/lyutikova/diploma-4-mobile.webp">

                                    <source media="(min-width: 1200px)" srcset="img/dimploma/lyutikova/diploma-4-desktop.png">
                                    <source media="(min-width: 768px)" srcset="img/dimploma/lyutikova/diploma-4-tablet.png">
                                    <img class="diplomas__image modal-image" src="img/dimploma/lyutikova/diploma-4-mobile.png" alt="Диплом Лютиковой Натальи Александровны">
                                </picture>
                            </a>
                            <div class="overlay"></div>
                            <div class="modal">
                                <button class="modal__close-button" type="button">Закрыть</button>
                                <a href="img/dimploma/lyutikova/diploma-4.png">
                                    <picture>
                                        <source type="image/webp" srcset="img/dimploma/lyutikova/diploma-4-mobile.webp">

                                        <img class="diplomas__original-image modal__original-image" src="img/dimploma/lyutikova/diploma-4-mobile.png" alt="Диплом Лютиковой Натальи Александровны">
                                    </picture>
                                </a>
                            </div>
                            <a href="img/dimploma/lyutikova/diploma-5.png">
                                <picture>
                                    <source type="image/webp" media="(min-width: 1200px)" srcset="img/dimploma/lyutikova/diploma-5-desktop.webp">
                                    <source type="image/webp" media="(min-width: 768px)" srcset="img/dimploma/lyutikova/diploma-5-tablet.webp">
                                    <source type="image/webp" srcset="img/dimploma/lyutikova/diploma-5-mobile.webp">

                                    <source media="(min-width: 1200px)" srcset="img/dimploma/lyutikova/diploma-5-desktop.png">
                                    <source media="(min-width: 768px)" srcset="img/dimploma/lyutikova/diploma-5-tablet.png">
                                    <img class="diplomas__image modal-image" src="img/dimploma/lyutikova/diploma-5-mobile.png" alt="Диплом Лютиковой Натальи Александровны">
                                </picture>
                            </a>
                            <div class="overlay"></div>
                            <div class="modal">
                                <button class="modal__close-button" type="button">Закрыть</button>
                                <a href="img/dimploma/lyutikova/diploma-5.png">
                                    <picture>
                                        <source type="image/webp" srcset="img/dimploma/lyutikova/diploma-5-mobile.webp">

                                        <img class="diplomas__original-image modal__original-image" src="img/dimploma/lyutikova/diploma-5-mobile.png" alt="Диплом Лютиковой Натальи Александровны">
                                    </picture>
                                </a>
                            </div>
                            <a href="img/dimploma/lyutikova/diploma-6.png">
                                <picture>
                                    <source type="image/webp" media="(min-width: 1200px)" srcset="img/dimploma/lyutikova/diploma-6-desktop.webp">
                                    <source type="image/webp" media="(min-width: 768px)" srcset="img/dimploma/lyutikova/diploma-6-tablet.webp">
                                    <source type="image/webp" srcset="img/dimploma/lyutikova/diploma-6-mobile.webp">

                                    <source media="(min-width: 1200px)" srcset="img/dimploma/lyutikova/diploma-6-desktop.png">
                                    <source media="(min-width: 768px)" srcset="img/dimploma/lyutikova/diploma-6-tablet.png">
                                    <img class="diplomas__image modal-image" src="img/dimploma/lyutikova/diploma-6-mobile.png" alt="Диплом Лютиковой Натальи Александровны">
                                </picture>
                            </a>
                            <div class="overlay"></div>
                            <div class="modal">
                                <button class="modal__close-button" type="button">Закрыть</button>
                                <a href="img/dimploma/lyutikova/diploma-6.png">
                                    <picture>
                                        <source type="image/webp" srcset="img/dimploma/lyutikova/diploma-6-mobile.webp">

                                        <img class="diplomas__original-image modal__original-image" src="img/dimploma/lyutikova/diploma-6-mobile.png" alt="Диплом Лютиковой Натальи Александровны">
                                    </picture>
                                </a>
                            </div>
                            <a href="img/dimploma/lyutikova/diploma-7.png">
                                <picture>
                                    <source type="image/webp" media="(min-width: 1200px)" srcset="img/dimploma/lyutikova/diploma-7-desktop.webp">
                                    <source type="image/webp" media="(min-width: 768px)" srcset="img/dimploma/lyutikova/diploma-7-tablet.webp">
                                    <source type="image/webp" srcset="img/dimploma/lyutikova/diploma-7-mobile.webp">

                                    <source media="(min-width: 1200px)" srcset="img/dimploma/lyutikova/diploma-7-desktop.png">
                                    <source media="(min-width: 768px)" srcset="img/dimploma/lyutikova/diploma-7-tablet.png">
                                    <img class="diplomas__image modal-image" src="img/dimploma/lyutikova/diploma-7-mobile.png" alt="Диплом Лютиковой Натальи Александровны">
                                </picture>
                            </a>
                            <div class="overlay"></div>
                            <div class="modal">
                                <button class="modal__close-button" type="button">Закрыть</button>
                                <a href="img/dimploma/lyutikova/diploma-7.png">
                                    <picture>
                                        <source type="image/webp" srcset="img/dimploma/lyutikova/diploma-7-mobile.webp">

                                        <img class="diplomas__original-image modal__original-image" src="img/dimploma/lyutikova/diploma-7-mobile.png" alt="Диплом Лютиковой Натальи Александровны">
                                    </picture>
                                </a>
                            </div>
                            <a href="img/dimploma/lyutikova/diploma-8.png">
                                <picture>
                                    <source type="image/webp" media="(min-width: 1200px)" srcset="img/dimploma/lyutikova/diploma-8-desktop.webp">
                                    <source type="image/webp" media="(min-width: 768px)" srcset="img/dimploma/lyutikova/diploma-8-tablet.webp">
                                    <source type="image/webp" srcset="img/dimploma/lyutikova/diploma-8-mobile.webp">

                                    <source media="(min-width: 1200px)" srcset="img/dimploma/lyutikova/diploma-8-desktop.png">
                                    <source media="(min-width: 768px)" srcset="img/dimploma/lyutikova/diploma-8-tablet.png">
                                    <img class="diplomas__image modal-image" src="img/dimploma/lyutikova/diploma-8-mobile.png" alt="Диплом Лютиковой Натальи Александровны">
                                </picture>
                            </a>
                            <div class="overlay"></div>
                            <div class="modal">
                                <button class="modal__close-button" type="button">Закрыть</button>
                                <a href="img/dimploma/lyutikova/diploma-8.png">
                                    <picture>
                                        <source type="image/webp" srcset="img/dimploma/lyutikova/diploma-8-mobile.webp">

                                        <img class="diplomas__original-image modal__original-image" src="img/dimploma/lyutikova/diploma-8-mobile.png" alt="Диплом Лютиковой Натальи Александровны">
                                    </picture>
                                </a>
                            </div>
                            <a href="img/dimploma/lyutikova/diploma-9.png">
                                <picture>
                                    <source type="image/webp" media="(min-width: 1200px)" srcset="img/dimploma/lyutikova/diploma-9-desktop.webp">
                                    <source type="image/webp" media="(min-width: 768px)" srcset="img/dimploma/lyutikova/diploma-9-tablet.webp">
                                    <source type="image/webp" srcset="img/dimploma/lyutikova/diploma-9-mobile.webp">

                                    <source media="(min-width: 1200px)" srcset="img/dimploma/lyutikova/diploma-9-desktop.png">
                                    <source media="(min-width: 768px)" srcset="img/dimploma/lyutikova/diploma-9-tablet.png">
                                    <img class="diplomas__image modal-image" src="img/dimploma/lyutikova/diploma-9-mobile.png" alt="Диплом Лютиковой Натальи Александровны">
                                </picture>
                            </a>
                            <div class="overlay"></div>
                            <div class="modal">
                                <button class="modal__close-button" type="button">Закрыть</button>
                                <a href="img/dimploma/lyutikova/diploma-9.png">
                                    <picture>
                                        <source type="image/webp" srcset="img/dimploma/lyutikova/diploma-9-mobile.webp">

                                        <img class="diplomas__original-image modal__original-image" src="img/dimploma/lyutikova/diploma-9-mobile.png" alt="Диплом Лютиковой Натальи Александровны">
                                    </picture>
                                </a>
                            </div>
                            <a href="img/dimploma/lyutikova/diploma-10.png">
                                <picture>
                                    <source type="image/webp" media="(min-width: 1200px)" srcset="img/dimploma/lyutikova/diploma-10-desktop.webp">
                                    <source type="image/webp" media="(min-width: 768px)" srcset="img/dimploma/lyutikova/diploma-10-tablet.webp">
                                    <source type="image/webp" srcset="img/dimploma/lyutikova/diploma-10-mobile.webp">

                                    <source media="(min-width: 1200px)" srcset="img/dimploma/lyutikova/diploma-10-desktop.png">
                                    <source media="(min-width: 768px)" srcset="img/dimploma/lyutikova/diploma-10-tablet.png">
                                    <img class="diplomas__image modal-image" src="img/dimploma/lyutikova/diploma-10-mobile.png" alt="Диплом Лютиковой Натальи Александровны">
                                </picture>
                            </a>
                            <div class="overlay"></div>
                            <div class="modal">
                                <button class="modal__close-button" type="button">Закрыть</button>
                                <a href="img/dimploma/lyutikova/diploma-10.png">
                                    <picture>
                                        <source type="image/webp" srcset="img/dimploma/lyutikova/diploma-10-mobile.webp">

                                        <img class="diplomas__original-image modal__original-image" src="img/dimploma/lyutikova/diploma-10-mobile.png" alt="Диплом Лютиковой Натальи Александровны">
                                    </picture>
                                </a>
                            </div>
                            <a href="img/dimploma/lyutikova/diploma-11.png">
                                <picture>
                                    <source type="image/webp" media="(min-width: 1200px)" srcset="img/dimploma/lyutikova/diploma-11-desktop.webp">
                                    <source type="image/webp" media="(min-width: 768px)" srcset="img/dimploma/lyutikova/diploma-11-tablet.webp">
                                    <source type="image/webp" srcset="img/dimploma/lyutikova/diploma-11-mobile.webp">

                                    <source media="(min-width: 1200px)" srcset="img/dimploma/lyutikova/diploma-11-desktop.png">
                                    <source media="(min-width: 768px)" srcset="img/dimploma/lyutikova/diploma-11-tablet.png">
                                    <img class="diplomas__image modal-image" src="img/dimploma/lyutikova/diploma-11-mobile.png" alt="Диплом Лютиковой Натальи Александровны">
                                </picture>
                            </a>
                            <div class="overlay"></div>
                            <div class="modal">
                                <button class="modal__close-button" type="button">Закрыть</button>
                                <a href="img/dimploma/lyutikova/diploma-11.png">
                                    <picture>
                                        <source type="image/webp" srcset="img/dimploma/lyutikova/diploma-11-mobile.webp">

                                        <img class="diplomas__original-image modal__original-image" src="img/dimploma/lyutikova/diploma-11-mobile.png" alt="Диплом Лютиковой Натальи Александровны">
                                    </picture>
                                </a>
                            </div>
                            <a href="img/dimploma/lyutikova/diploma-12.png">
                                <picture>
                                    <source type="image/webp" media="(min-width: 1200px)" srcset="img/dimploma/lyutikova/diploma-12-desktop.webp">
                                    <source type="image/webp" media="(min-width: 768px)" srcset="img/dimploma/lyutikova/diploma-12-tablet.webp">
                                    <source type="image/webp" srcset="img/dimploma/lyutikova/diploma-12-mobile.webp">

                                    <source media="(min-width: 1200px)" srcset="img/dimploma/lyutikova/diploma-12-desktop.png">
                                    <source media="(min-width: 768px)" srcset="img/dimploma/lyutikova/diploma-12-tablet.png">
                                    <img class="diplomas__image modal-image" src="img/dimploma/lyutikova/diploma-12-mobile.png" alt="Диплом Лютиковой Натальи Александровны">
                                </picture>
                            </a>
                            <div class="overlay"></div>
                            <div class="modal">
                                <button class="modal__close-button" type="button">Закрыть</button>
                                <a href="img/dimploma/lyutikova/diploma-12.png">
                                    <picture>
                                        <source type="image/webp" srcset="img/dimploma/lyutikova/diploma-12-mobile.webp">

                                        <img class="diplomas__original-image modal__original-image" src="img/dimploma/lyutikova/diploma-12-mobile.png" alt="Диплом Лютиковой Натальи Александровны">
                                    </picture>
                                </a>
                            </div>
                            <a href="img/dimploma/lyutikova/diploma-13.png">
                                <picture>
                                    <source type="image/webp" media="(min-width: 1200px)" srcset="img/dimploma/lyutikova/diploma-13-desktop.webp">
                                    <source type="image/webp" media="(min-width: 768px)" srcset="img/dimploma/lyutikova/diploma-13-tablet.webp">
                                    <source type="image/webp" srcset="img/dimploma/lyutikova/diploma-13-mobile.webp">

                                    <source media="(min-width: 1200px)" srcset="img/dimploma/lyutikova/diploma-13-desktop.png">
                                    <source media="(min-width: 768px)" srcset="img/dimploma/lyutikova/diploma-13-tablet.png">
                                    <img class="diplomas__image modal-image" src="img/dimploma/lyutikova/diploma-13-mobile.png" alt="Диплом Лютиковой Натальи Александровны">
                                </picture>
                            </a>
                            <div class="overlay"></div>
                            <div class="modal">
                                <button class="modal__close-button" type="button">Закрыть</button>
                                <a href="img/dimploma/lyutikova/diploma-13.png">
                                    <picture>
                                        <source type="image/webp" srcset="img/dimploma/lyutikova/diploma-13-mobile.webp">

                                        <img class="diplomas__original-image modal__original-image" src="img/dimploma/lyutikova/diploma-13-mobile.png" alt="Диплом Лютиковой Натальи Александровны">
                                    </picture>
                                </a>
                            </div>
                            <a href="img/dimploma/lyutikova/diploma-14.png">
                                <picture>
                                    <source type="image/webp" media="(min-width: 1200px)" srcset="img/dimploma/lyutikova/diploma-14-desktop.webp">
                                    <source type="image/webp" media="(min-width: 768px)" srcset="img/dimploma/lyutikova/diploma-14-tablet.webp">
                                    <source type="image/webp" srcset="img/dimploma/lyutikova/diploma-14-mobile.webp">

                                    <source media="(min-width: 1200px)" srcset="img/dimploma/lyutikova/diploma-14-desktop.png">
                                    <source media="(min-width: 768px)" srcset="img/dimploma/lyutikova/diploma-14-tablet.png">
                                    <img class="diplomas__image modal-image" src="img/dimploma/lyutikova/diploma-14-mobile.png" alt="Диплом Лютиковой Натальи Александровны">
                                </picture>
                            </a>
                            <div class="overlay"></div>
                            <div class="modal">
                                <button class="modal__close-button" type="button">Закрыть</button>
                                <a href="img/dimploma/lyutikova/diploma-14.png">
                                    <picture>
                                        <source type="image/webp" srcset="img/dimploma/lyutikova/diploma-14-mobile.webp">

                                        <img class="diplomas__original-image modal__original-image" src="img/dimploma/lyutikova/diploma-14-mobile.png" alt="Диплом Лютиковой Натальи Александровны">
                                    </picture>
                                </a>
                            </div>
                            <a href="img/dimploma/lyutikova/diploma-15.png">
                                <picture>
                                    <source type="image/webp" media="(min-width: 1200px)" srcset="img/dimploma/lyutikova/diploma-15-desktop.webp">
                                    <source type="image/webp" media="(min-width: 768px)" srcset="img/dimploma/lyutikova/diploma-15-tablet.webp">
                                    <source type="image/webp" srcset="img/dimploma/lyutikova/diploma-15-mobile.webp">

                                    <source media="(min-width: 1200px)" srcset="img/dimploma/lyutikova/diploma-15-desktop.png">
                                    <source media="(min-width: 768px)" srcset="img/dimploma/lyutikova/diploma-15-tablet.png">
                                    <img class="diplomas__image modal-image" src="img/dimploma/lyutikova/diploma-15-mobile.png" alt="Диплом Лютиковой Натальи Александровны">
                                </picture>
                            </a>
                            <div class="overlay"></div>
                            <div class="modal">
                                <button class="modal__close-button" type="button">Закрыть</button>
                                <a href="img/dimploma/lyutikova/diploma-15.png">
                                    <picture>
                                        <source type="image/webp" srcset="img/dimploma/lyutikova/diploma-15-mobile.webp">

                                        <img class="diplomas__original-image modal__original-image" src="img/dimploma/lyutikova/diploma-15-mobile.png" alt="Диплом Лютиковой Натальи Александровны">
                                    </picture>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="teachers-list__item">
                <div class="teachers-list__short-info">
                    <picture>
                        <source type="image/webp" media="(min-width: 1200px)" srcset="img/teachers/zagorodnyaya-desktop.webp">
                        <source type="image/webp" srcset="img/teachers/zagorodnyaya-tablet.webp">

                        <source media="(min-width: 1200px)" srcset="img/teachers/zagorodnyaya-desktop.jpg">
                        <img class="teachers-list__image-preview" src="img/teachers/zagorodnyaya-tablet.jpg" alt="Фотография педагога Загородней Оксаны Александровны">
                    </picture>
                    <button class="teachers-list__button-toggle modal-toggle-button modal-toggle-button--teachers">Информация</button>
                    <span class="teachers-list__subject">Весёлая наука</span>
                    <button class="teachers-list__button-toggle modal-toggle-button modal-toggle-button--teachers-name">Загородняя Оксана Александровна</button>
                </div>
                <div class="teachers-list__info-wrap teachers-list__info-wrap--hidden">
                    <button class="teachers-list__close-button" type="button">Закрыть</button>
                    <div class="teachers-list__main-info-wrap">
                        <picture>
                            <source type="image/webp" srcset="img/teachers/zagorodnyaya-mobile.webp">

                            <img class="teachers-list__image" src="img/teachers/zagorodnyaya-mobile.jpg" alt="Фотография педагога Загородней Оксаны Александровны">
                        </picture>
                        <ul class="teacher-description-list">
                            <li class="teacher-description-list__item">Стаж работы в педагогике - 5 лет. Учитель английского языка.</li>
                            <li class="teacher-description-list__item">Является соавтором проекта Лаборатория чудес "Алхимик" и научных лагерей по авторской программе.</li>
                            <li class="teacher-description-list__item">В 2005-2006 годах прошла обучающий курс в рамках Государственного образования по теме "Командное взаимодействие" и "Лидерство" в Международной Академии Лидерства при МГУ сервиса.</li>
                            <li class="teacher-description-list__item">В 2007 году окончила Приднестровский Государственный университет.</li>
                            <li class="teacher-description-list__item">В 2019 году закончила курсы повышения квалификации по программе "Организация работы с обучающимися с ограниченными возможностями здоровья в соответствии с ФГОС".</li>
                        </ul>
                    </div>
                </div>
            </li>
            <li class="teachers-list__item">
                <div class="teachers-list__short-info">
                    <picture>
                        <source type="image/webp" media="(min-width: 1200px)" srcset="img/teachers/lyskova-desktop.webp">
                        <source type="image/webp" srcset="img/teachers/lyskova-tablet.webp">

                        <source media="(min-width: 1200px)" srcset="img/teachers/lyskova-desktop.jpg">
                        <img class="teachers-list__image-preview" src="img/teachers/lyskova-tablet.jpg" alt="Фотография педагога Лысковой Светланы Николаевны">
                    </picture>
                    <button class="teachers-list__button-toggle modal-toggle-button modal-toggle-button--teachers">Информация</button>
                    <span class="teachers-list__subject">Творческая мастерская</span>
                    <button class="teachers-list__button-toggle modal-toggle-button modal-toggle-button--teachers-name">Лыскова Светлана Николаевна</button>
                </div>
                <div class="teachers-list__info-wrap teachers-list__info-wrap--hidden">
                    <button class="teachers-list__close-button" type="button">Закрыть</button>
                    <div class="teachers-list__main-info-wrap">
                        <picture>
                            <source type="image/webp" srcset="img/teachers/lyskova-mobile.webp">

                            <img class="teachers-list__image" src="img/teachers/lyskova-mobile.jpg" alt="Фотография педагога Лысковой Светланы Николаевны">
                        </picture>
                        <ul class="teacher-description-list">
                            <li class="teacher-description-list__item">Учитель высшей квалификационной категории.</li>
                            <li class="teacher-description-list__item">Стаж работы в педагогике - 33 года.</li>
                            <li class="teacher-description-list__item">В 1998 г. за успехи в работе по обучению и воспитанию учащихся, творческий добросовестный труд награждена Почетной грамотой Департамента образования.</li>
                            <li class="teacher-description-list__item">В 2002 году награждена грамотой Министерства образования РФ за достигнутые успехи в обучении и воспитании учащихся, многолетний добросовестный труд.</li>
                            <li class="teacher-description-list__item">В 2011 г. получила звание Почетного работника общего и среднего образования.</li>
                        </ul>
                    </div>
                    <div class="diplomas diplomas--small">
                        <button class="modal-toggle-button" type="button">Дипломы</button>
                        <div class="diplomas__wrap">
                            <a href="img/dimploma/lyskova/diploma-1.png">
                                <picture>
                                    <source type="image/webp" media="(min-width: 1200px)" srcset="img/dimploma/lyskova/diploma-1-desktop.webp">
                                    <source type="image/webp" media="(min-width: 768px)" srcset="img/dimploma/lyskova/diploma-1-tablet.webp">
                                    <source type="image/webp" srcset="img/dimploma/lyskova/diploma-1-mobile.webp">

                                    <source media="(min-width: 1200px)" srcset="img/dimploma/lyskova/diploma-1-desktop.png">
                                    <source media="(min-width: 768px)" srcset="img/dimploma/lyskova/diploma-1-tablet.png">
                                    <img class="diplomas__image modal-image" src="img/dimploma/lyskova/diploma-1-mobile.png" alt="Диплом Лысковой Светланы Николаевны">
                                </picture>
                            </a>
                            <div class="overlay"></div>
                            <div class="modal">
                                <button class="modal__close-button" type="button">Закрыть</button>
                                <a href="img/dimploma/lyskova/diploma-1.png">
                                    <picture>
                                        <source type="image/webp" srcset="img/dimploma/lyskova/diploma-1-mobile.webp">

                                        <img class="diplomas__original-image modal__original-image" src="img/dimploma/lyskova/diploma-1-mobile.png" alt="Диплом Лысковой Светланы Николаевны">
                                    </picture>
                                </a>
                            </div>
                            <a href="img/dimploma/lyskova/diploma-2.png">
                                <picture>
                                    <source type="image/webp" media="(min-width: 1200px)" srcset="img/dimploma/lyskova/diploma-2-desktop.webp">
                                    <source type="image/webp" media="(min-width: 768px)" srcset="img/dimploma/lyskova/diploma-2-tablet.webp">
                                    <source type="image/webp" srcset="img/dimploma/lyskova/diploma-2-mobile.webp">

                                    <source media="(min-width: 1200px)" srcset="img/dimploma/lyskova/diploma-2-desktop.png">
                                    <source media="(min-width: 768px)" srcset="img/dimploma/lyskova/diploma-2-tablet.png">
                                    <img class="diplomas__image modal-image" src="img/dimploma/lyskova/diploma-2-mobile.png" alt="Диплом Лысковой Светланы Николаевны">
                                </picture>
                            </a>
                            <div class="overlay"></div>
                            <div class="modal">
                                <button class="modal__close-button" type="button">Закрыть</button>
                                <a href="img/dimploma/lyskova/diploma-2.png">
                                    <picture>
                                        <source type="image/webp" srcset="img/dimploma/lyskova/diploma-2-mobile.webp">

                                        <img class="diplomas__original-image modal__original-image" src="img/dimploma/lyskova/diploma-2-mobile.png" alt="Диплом Лысковой Светланы Николаевны">
                                    </picture>
                                </a>
                            </div>
                            <a href="img/dimploma/lyskova/diploma-3.png">
                                <picture>
                                    <source type="image/webp" media="(min-width: 1200px)" srcset="img/dimploma/lyskova/diploma-3-desktop.webp">
                                    <source type="image/webp" media="(min-width: 768px)" srcset="img/dimploma/lyskova/diploma-3-tablet.webp">
                                    <source type="image/webp" srcset="img/dimploma/lyskova/diploma-3-mobile.webp">

                                    <source media="(min-width: 1200px)" srcset="img/dimploma/lyskova/diploma-3-desktop.png">
                                    <source media="(min-width: 768px)" srcset="img/dimploma/lyskova/diploma-3-tablet.png">
                                    <img class="diplomas__image modal-image" src="img/dimploma/lyskova/diploma-3-mobile.png" alt="Диплом Лысковой Светланы Николаевны">
                                </picture>
                            </a>
                            <div class="overlay"></div>
                            <div class="modal">
                                <button class="modal__close-button" type="button">Закрыть</button>
                                <a href="img/dimploma/lyskova/diploma-3.png">
                                    <picture>
                                        <source type="image/webp" srcset="img/dimploma/lyskova/diploma-3-mobile.webp">

                                        <img class="diplomas__original-image modal__original-image" src="img/dimploma/lyskova/diploma-3-mobile.png" alt="Диплом Лысковой Светланы Николаевны">
                                    </picture>
                                </a>
                            </div>
                            <a href="img/dimploma/lyskova/diploma-4.png">
                                <picture>
                                    <source type="image/webp" media="(min-width: 1200px)" srcset="img/dimploma/lyskova/diploma-4-desktop.webp">
                                    <source type="image/webp" media="(min-width: 768px)" srcset="img/dimploma/lyskova/diploma-4-tablet.webp">
                                    <source type="image/webp" srcset="img/dimploma/lyskova/diploma-4-mobile.webp">

                                    <source media="(min-width: 1200px)" srcset="img/dimploma/lyskova/diploma-4-desktop.png">
                                    <source media="(min-width: 768px)" srcset="img/dimploma/lyskova/diploma-4-tablet.png">
                                    <img class="diplomas__image modal-image" src="img/dimploma/lyskova/diploma-4-mobile.png" alt="Диплом Лысковой Светланы Николаевны">
                                </picture>
                            </a>
                            <div class="overlay"></div>
                            <div class="modal">
                                <button class="modal__close-button" type="button">Закрыть</button>
                                <a href="img/dimploma/lyskova/diploma-4.png">
                                    <picture>
                                        <source type="image/webp" srcset="img/dimploma/lyskova/diploma-4-mobile.webp">

                                        <img class="diplomas__original-image modal__original-image" src="img/dimploma/lyskova/diploma-4-mobile.png" alt="Диплом Лысковой Светланы Николаевны">
                                    </picture>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="teachers-list__item">
                <div class="teachers-list__short-info">
                    <picture>
                        <source type="image/webp" media="(min-width: 1200px)" srcset="img/teachers/volodina-desktop.webp">
                        <source type="image/webp" srcset="img/teachers/volodina-tablet.webp">

                        <source media="(min-width: 1200px)" srcset="img/teachers/volodina-desktop.jpg">
                        <img class="teachers-list__image-preview" src="img/teachers/volodina-tablet.jpg" alt="Фотография педагога Володиной Екатерины Александровны">
                    </picture>
                    <button class="teachers-list__button-toggle modal-toggle-button modal-toggle-button--teachers">Информация</button>
                    <span class="teachers-list__subject">Общеразвивающая гимнастика</span>
                    <button class="teachers-list__button-toggle modal-toggle-button modal-toggle-button--teachers-name">Володина Екатерина Александровна</button>
                </div>
                <div class="teachers-list__info-wrap teachers-list__info-wrap--hidden">
                    <button class="teachers-list__close-button" type="button">Закрыть</button>
                    <div class="teachers-list__main-info-wrap">
                        <picture>
                            <source type="image/webp" srcset="img/teachers/volodina-mobile.webp">

                            <img class="teachers-list__image" src="img/teachers/volodina-mobile.jpg" alt="Фотография педагога Володиной Екатерины Александровны">
                        </picture>
                        <ul class="teacher-description-list">
                            <li class="teacher-description-list__item">Мастер спорта России по акробатике.</li>
                            <li class="teacher-description-list__item">Стаж работы в педагогике - 5 лет.</li>
                            <li class="teacher-description-list__item">В 2013 г. получила высшее профессиональное образование в Тверском государственном университете по специальности «Физическая культура и спорт».</li>
                            <li class="teacher-description-list__item">По итогам обучения была включена в справочник «Лучшие выпускники учебных заведений высшего, средне-специального и начального профессионального образования Тверского региона – 2013».</li>
                            <li class="teacher-description-list__item">В 2016 году награждена благодарностью Управления по культуре, спорту и делам молодежи администрации города Твери за добросовестный труд и многолетнюю плодотворную работу.</li>
                            <li class="teacher-description-list__item">В августе 2016 года награждена почетной грамотой Управления по культуре, спорту и делам молодежи администрации города Твери за добросовестный труд, большой личный вклад в формирование здорового образа жизни детей и молодежи, активное участие в развитии сферы физической культуры и спорта в городе Твери.</li>
                            <li class="teacher-description-list__item">В 2018 году была награждена Золотым знаком отличия ГТО.</li>
                        </ul>
                    </div>
                    <div class="diplomas">
                        <button class="modal-toggle-button" type="button">Дипломы</button>
                        <div class="diplomas__wrap">
                            <a href="img/dimploma/volodina/diploma-1.png">
                                <picture>
                                    <source type="image/webp" media="(min-width: 1200px)" srcset="img/dimploma/volodina/diploma-1-desktop.webp">
                                    <source type="image/webp" media="(min-width: 768px)" srcset="img/dimploma/volodina/diploma-1-tablet.webp">
                                    <source type="image/webp" srcset="img/dimploma/volodina/diploma-1-mobile.webp">

                                    <source media="(min-width: 1200px)" srcset="img/dimploma/volodina/diploma-1-desktop.png">
                                    <source media="(min-width: 768px)" srcset="img/dimploma/volodina/diploma-1-tablet.png">
                                    <img class="diplomas__image modal-image" src="img/dimploma/volodina/diploma-1-mobile.png" alt="Диплом Володиной Екатерины Александровны">
                                </picture>
                            </a>
                            <div class="overlay"></div>
                            <div class="modal">
                                <button class="modal__close-button" type="button">Закрыть</button>
                                <a href="img/dimploma/volodina/diploma-1.png">
                                    <picture>
                                        <source type="image/webp" srcset="img/dimploma/volodina/diploma-1-mobile.webp">

                                        <img class="diplomas__original-image modal__original-image" src="img/dimploma/volodina/diploma-1-mobile.png" alt="Диплом Володиной Екатерины Александровны">
                                    </picture>
                                </a>
                            </div>
                            <a href="img/dimploma/volodina/diploma-2.png">
                                <picture>
                                    <source type="image/webp" media="(min-width: 1200px)" srcset="img/dimploma/volodina/diploma-2-desktop.webp">
                                    <source type="image/webp" media="(min-width: 768px)" srcset="img/dimploma/volodina/diploma-2-tablet.webp">
                                    <source type="image/webp" srcset="img/dimploma/volodina/diploma-2-mobile.webp">

                                    <source media="(min-width: 1200px)" srcset="img/dimploma/volodina/diploma-2-desktop.png">
                                    <source media="(min-width: 768px)" srcset="img/dimploma/volodina/diploma-2-tablet.png">
                                    <img class="diplomas__image modal-image" src="img/dimploma/volodina/diploma-2-mobile.png" alt="Диплом Володиной Екатерины Александровны">
                                </picture>
                            </a>
                            <div class="overlay"></div>
                            <div class="modal">
                                <button class="modal__close-button" type="button">Закрыть</button>
                                <a href="img/dimploma/volodina/diploma-2.png">
                                    <picture>
                                        <source type="image/webp" srcset="img/dimploma/volodina/diploma-2-mobile.webp">

                                        <img class="diplomas__original-image modal__original-image" src="img/dimploma/volodina/diploma-2-mobile.png" alt="Диплом Володиной Екатерины Александровны">
                                    </picture>
                                </a>
                            </div>
                            <a href="img/dimploma/volodina/diploma-3.png">
                                <picture>
                                    <source type="image/webp" media="(min-width: 1200px)" srcset="img/dimploma/volodina/diploma-3-desktop.webp">
                                    <source type="image/webp" media="(min-width: 768px)" srcset="img/dimploma/volodina/diploma-3-tablet.webp">
                                    <source type="image/webp" srcset="img/dimploma/volodina/diploma-3-mobile.webp">

                                    <source media="(min-width: 1200px)" srcset="img/dimploma/volodina/diploma-3-desktop.png">
                                    <source media="(min-width: 768px)" srcset="img/dimploma/volodina/diploma-3-tablet.png">
                                    <img class="diplomas__image modal-image" src="img/dimploma/volodina/diploma-3-mobile.png" alt="Диплом Володиной Екатерины Александровны">
                                </picture>
                            </a>
                            <div class="overlay"></div>
                            <div class="modal">
                                <button class="modal__close-button" type="button">Закрыть</button>
                                <a href="img/dimploma/volodina/diploma-3.png">
                                    <picture>
                                        <source type="image/webp" srcset="img/dimploma/volodina/diploma-3-mobile.webp">

                                        <img class="diplomas__original-image modal__original-image" src="img/dimploma/volodina/diploma-3-mobile.png" alt="Диплом Володиной Екатерины Александровны">
                                    </picture>
                                </a>
                            </div>
                            <a href="img/dimploma/volodina/diploma-4.png">
                                <picture>
                                    <source type="image/webp" media="(min-width: 1200px)" srcset="img/dimploma/volodina/diploma-4-desktop.webp">
                                    <source type="image/webp" media="(min-width: 768px)" srcset="img/dimploma/volodina/diploma-4-tablet.webp">
                                    <source type="image/webp" srcset="img/dimploma/volodina/diploma-4-mobile.webp">

                                    <source media="(min-width: 1200px)" srcset="img/dimploma/volodina/diploma-4-desktop.png">
                                    <source media="(min-width: 768px)" srcset="img/dimploma/volodina/diploma-4-tablet.png">
                                    <img class="diplomas__image modal-image" src="img/dimploma/volodina/diploma-4-mobile.png" alt="Диплом Володиной Екатерины Александровны">
                                </picture>
                            </a>
                            <div class="overlay"></div>
                            <div class="modal">
                                <button class="modal__close-button" type="button">Закрыть</button>
                                <a href="img/dimploma/volodina/diploma-4.png">
                                    <picture>
                                        <source type="image/webp" srcset="img/dimploma/volodina/diploma-4-mobile.webp">

                                        <img class="diplomas__original-image modal__original-image" src="img/dimploma/volodina/diploma-4-mobile.png" alt="Диплом Володиной Екатерины Александровны">
                                    </picture>
                                </a>
                            </div>
                            <a href="img/dimploma/volodina/diploma-5.png">
                                <picture>
                                    <source type="image/webp" media="(min-width: 1200px)" srcset="img/dimploma/volodina/diploma-5-desktop.webp">
                                    <source type="image/webp" media="(min-width: 768px)" srcset="img/dimploma/volodina/diploma-5-tablet.webp">
                                    <source type="image/webp" srcset="img/dimploma/volodina/diploma-5-mobile.webp">

                                    <source media="(min-width: 1200px)" srcset="img/dimploma/volodina/diploma-5-desktop.png">
                                    <source media="(min-width: 768px)" srcset="img/dimploma/volodina/diploma-5-tablet.png">
                                    <img class="diplomas__image modal-image" src="img/dimploma/volodina/diploma-5-mobile.png" alt="Диплом Володиной Екатерины Александровны">
                                </picture>
                            </a>
                            <div class="overlay"></div>
                            <div class="modal">
                                <button class="modal__close-button" type="button">Закрыть</button>
                                <a href="img/dimploma/volodina/diploma-5.png">
                                    <picture>
                                        <source type="image/webp" srcset="img/dimploma/volodina/diploma-5-mobile.webp">

                                        <img class="diplomas__original-image modal__original-image" src="img/dimploma/volodina/diploma-5-mobile.png" alt="Диплом Володиной Екатерины Александровны">
                                    </picture>
                                </a>
                            </div>
                            <a href="img/dimploma/volodina/diploma-6.png">
                                <picture>
                                    <source type="image/webp" media="(min-width: 1200px)" srcset="img/dimploma/volodina/diploma-6-desktop.webp">
                                    <source type="image/webp" media="(min-width: 768px)" srcset="img/dimploma/volodina/diploma-6-tablet.webp">
                                    <source type="image/webp" srcset="img/dimploma/volodina/diploma-6-mobile.webp">

                                    <source media="(min-width: 1200px)" srcset="img/dimploma/volodina/diploma-6-desktop.png">
                                    <source media="(min-width: 768px)" srcset="img/dimploma/volodina/diploma-6-tablet.png">
                                    <img class="diplomas__image modal-image" src="img/dimploma/volodina/diploma-6-mobile.png" alt="Диплом Володиной Екатерины Александровны">
                                </picture>
                            </a>
                            <div class="overlay"></div>
                            <div class="modal">
                                <button class="modal__close-button" type="button">Закрыть</button>
                                <a href="img/dimploma/volodina/diploma-6.png">
                                    <picture>
                                        <source type="image/webp" srcset="img/dimploma/volodina/diploma-6-mobile.webp">

                                        <img class="diplomas__original-image modal__original-image" src="img/dimploma/volodina/diploma-6-mobile.png" alt="Диплом Володиной Екатерины Александровны">
                                    </picture>
                                </a>
                            </div>
                            <a href="img/dimploma/volodina/diploma-7.png">
                                <picture>
                                    <source type="image/webp" media="(min-width: 1200px)" srcset="img/dimploma/volodina/diploma-7-desktop.webp">
                                    <source type="image/webp" media="(min-width: 768px)" srcset="img/dimploma/volodina/diploma-7-tablet.webp">
                                    <source type="image/webp" srcset="img/dimploma/volodina/diploma-7-mobile.webp">

                                    <source media="(min-width: 1200px)" srcset="img/dimploma/volodina/diploma-7-desktop.png">
                                    <source media="(min-width: 768px)" srcset="img/dimploma/volodina/diploma-7-tablet.png">
                                    <img class="diplomas__image modal-image" src="img/dimploma/volodina/diploma-7-mobile.png" alt="Диплом Володиной Екатерины Александровны">
                                </picture>
                            </a>
                            <div class="overlay"></div>
                            <div class="modal">
                                <button class="modal__close-button" type="button">Закрыть</button>
                                <a href="img/dimploma/volodina/diploma-7.png">
                                    <picture>
                                        <source type="image/webp" srcset="img/dimploma/volodina/diploma-7-mobile.webp">

                                        <img class="diplomas__original-image modal__original-image" src="img/dimploma/volodina/diploma-7-mobile.png" alt="Диплом Володиной Екатерины Александровны">
                                    </picture>
                                </a>
                            </div>
                            <a href="img/dimploma/volodina/diploma-8.png">
                                <picture>
                                    <source type="image/webp" media="(min-width: 1200px)" srcset="img/dimploma/volodina/diploma-8-desktop.webp">
                                    <source type="image/webp" media="(min-width: 768px)" srcset="img/dimploma/volodina/diploma-8-tablet.webp">
                                    <source type="image/webp" srcset="img/dimploma/volodina/diploma-8-mobile.webp">

                                    <source media="(min-width: 1200px)" srcset="img/dimploma/volodina/diploma-8-desktop.png">
                                    <source media="(min-width: 768px)" srcset="img/dimploma/volodina/diploma-8-tablet.png">
                                    <img class="diplomas__image modal-image" src="img/dimploma/volodina/diploma-8-mobile.png" alt="Диплом Володиной Екатерины Александровны">
                                </picture>
                            </a>
                            <div class="overlay"></div>
                            <div class="modal">
                                <button class="modal__close-button" type="button">Закрыть</button>
                                <a href="img/dimploma/volodina/diploma-8.png">
                                    <picture>
                                        <source type="image/webp" srcset="img/dimploma/volodina/diploma-8-mobile.webp">

                                        <img class="diplomas__original-image modal__original-image" src="img/dimploma/volodina/diploma-8-mobile.png" alt="Диплом Володиной Екатерины Александровны">
                                    </picture>
                                </a>
                            </div>
                            <a href="img/dimploma/volodina/diploma-9.png">
                                <picture>
                                    <source type="image/webp" media="(min-width: 1200px)" srcset="img/dimploma/volodina/diploma-9-desktop.webp">
                                    <source type="image/webp" media="(min-width: 768px)" srcset="img/dimploma/volodina/diploma-9-tablet.webp">
                                    <source type="image/webp" srcset="img/dimploma/volodina/diploma-9-mobile.webp">

                                    <source media="(min-width: 1200px)" srcset="img/dimploma/volodina/diploma-9-desktop.png">
                                    <source media="(min-width: 768px)" srcset="img/dimploma/volodina/diploma-9-tablet.png">
                                    <img class="diplomas__image modal-image" src="img/dimploma/volodina/diploma-9-mobile.png" alt="Диплом Володиной Екатерины Александровны">
                                </picture>
                            </a>
                            <div class="overlay"></div>
                            <div class="modal">
                                <button class="modal__close-button" type="button">Закрыть</button>
                                <a href="img/dimploma/volodina/diploma-9.png">
                                    <picture>
                                        <source type="image/webp" srcset="img/dimploma/volodina/diploma-9-mobile.webp">

                                        <img class="diplomas__original-image modal__original-image" src="img/dimploma/volodina/diploma-9-mobile.png" alt="Диплом Володиной Екатерины Александровны">
                                    </picture>
                                </a>
                            </div>
                            <a href="img/dimploma/volodina/diploma-10.png">
                                <picture>
                                    <source type="image/webp" media="(min-width: 1200px)" srcset="img/dimploma/volodina/diploma-10-desktop.webp">
                                    <source type="image/webp" media="(min-width: 768px)" srcset="img/dimploma/volodina/diploma-10-tablet.webp">
                                    <source type="image/webp" srcset="img/dimploma/volodina/diploma-10-mobile.webp">

                                    <source media="(min-width: 1200px)" srcset="img/dimploma/volodina/diploma-10-desktop.png">
                                    <source media="(min-width: 768px)" srcset="img/dimploma/volodina/diploma-10-tablet.png">
                                    <img class="diplomas__image modal-image" src="img/dimploma/volodina/diploma-10-mobile.png" alt="Диплом Володиной Екатерины Александровны">
                                </picture>
                            </a>
                            <div class="overlay"></div>
                            <div class="modal">
                                <button class="modal__close-button" type="button">Закрыть</button>
                                <a href="img/dimploma/volodina/diploma-10.png">
                                    <picture>
                                        <source type="image/webp" srcset="img/dimploma/volodina/diploma-10-mobile.webp">

                                        <img class="diplomas__original-image modal__original-image" src="img/dimploma/volodina/diploma-10-mobile.png" alt="Диплом Володиной Екатерины Александровны">
                                    </picture>
                                </a>
                            </div>
                            <a href="img/dimploma/volodina/diploma-11.png">
                                <picture>
                                    <source type="image/webp" media="(min-width: 1200px)" srcset="img/dimploma/volodina/diploma-11-desktop.webp">
                                    <source type="image/webp" media="(min-width: 768px)" srcset="img/dimploma/volodina/diploma-11-tablet.webp">
                                    <source type="image/webp" srcset="img/dimploma/volodina/diploma-11-mobile.webp">

                                    <source media="(min-width: 1200px)" srcset="img/dimploma/volodina/diploma-11-desktop.png">
                                    <source media="(min-width: 768px)" srcset="img/dimploma/volodina/diploma-11-tablet.png">
                                    <img class="diplomas__image modal-image" src="img/dimploma/volodina/diploma-11-mobile.png" alt="Диплом Володиной Екатерины Александровны">
                                </picture>
                            </a>
                            <div class="overlay"></div>
                            <div class="modal">
                                <button class="modal__close-button" type="button">Закрыть</button>
                                <a href="img/dimploma/volodina/diploma-11.png">
                                    <picture>
                                        <source type="image/webp" srcset="img/dimploma/volodina/diploma-11-mobile.webp">

                                        <img class="diplomas__original-image modal__original-image" src="img/dimploma/volodina/diploma-11-mobile.png" alt="Диплом Володиной Екатерины Александровны">
                                    </picture>
                                </a>
                            </div>
                            <a href="img/dimploma/volodina/diploma-12.png">
                                <picture>
                                    <source type="image/webp" media="(min-width: 1200px)" srcset="img/dimploma/volodina/diploma-12-desktop.webp">
                                    <source type="image/webp" media="(min-width: 768px)" srcset="img/dimploma/volodina/diploma-12-tablet.webp">
                                    <source type="image/webp" srcset="img/dimploma/volodina/diploma-12-mobile.webp">

                                    <source media="(min-width: 1200px)" srcset="img/dimploma/volodina/diploma-12-desktop.png">
                                    <source media="(min-width: 768px)" srcset="img/dimploma/volodina/diploma-12-tablet.png">
                                    <img class="diplomas__image modal-image" src="img/dimploma/volodina/diploma-12-mobile.png" alt="Диплом Володиной Екатерины Александровны">
                                </picture>
                            </a>
                            <div class="overlay"></div>
                            <div class="modal">
                                <button class="modal__close-button" type="button">Закрыть</button>
                                <a href="img/dimploma/volodina/diploma-12.png">
                                    <picture>
                                        <source type="image/webp" srcset="img/dimploma/volodina/diploma-12-mobile.webp">

                                        <img class="diplomas__original-image modal__original-image" src="img/dimploma/volodina/diploma-12-mobile.png" alt="Диплом Володиной Екатерины Александровны">
                                    </picture>
                                </a>
                            </div>
                            <a href="img/dimploma/volodina/diploma-13.png">
                                <picture>
                                    <source type="image/webp" media="(min-width: 1200px)" srcset="img/dimploma/volodina/diploma-13-desktop.webp">
                                    <source type="image/webp" media="(min-width: 768px)" srcset="img/dimploma/volodina/diploma-13-tablet.webp">
                                    <source type="image/webp" srcset="img/dimploma/volodina/diploma-13-mobile.webp">

                                    <source media="(min-width: 1200px)" srcset="img/dimploma/volodina/diploma-13-desktop.png">
                                    <source media="(min-width: 768px)" srcset="img/dimploma/volodina/diploma-13-tablet.png">
                                    <img class="diplomas__image modal-image" src="img/dimploma/volodina/diploma-13-mobile.png" alt="Диплом Володиной Екатерины Александровны">
                                </picture>
                            </a>
                            <div class="overlay"></div>
                            <div class="modal">
                                <button class="modal__close-button" type="button">Закрыть</button>
                                <a href="img/dimploma/volodina/diploma-13.png">
                                    <picture>
                                        <source type="image/webp" srcset="img/dimploma/volodina/diploma-13-mobile.webp">

                                        <img class="diplomas__original-image modal__original-image" src="img/dimploma/volodina/diploma-13-mobile.png" alt="Диплом Володиной Екатерины Александровны">
                                    </picture>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="teachers-list__item">
                <div class="teachers-list__short-info">
                    <picture>
                        <source type="image/webp" media="(min-width: 1200px)" srcset="img/teachers/volodin-desktop.webp">
                        <source type="image/webp" srcset="img/teachers/volodin-tablet.webp">

                        <source media="(min-width: 1200px)" srcset="img/teachers/volodin-desktop.jpg">
                        <img class="teachers-list__image-preview" src="img/teachers/volodin-tablet.jpg" alt="Фотография педагога Володина Евгения Евгеньевича">
                    </picture>
                    <button class="teachers-list__button-toggle modal-toggle-button modal-toggle-button--teachers">Информация</button>
                    <span class="teachers-list__subject">Кикбоксинг, детский фитнес, fitness training</span>
                    <button class="teachers-list__button-toggle modal-toggle-button modal-toggle-button--teachers-name">Володин Евгений Евгеньевич</button>
                </div>
                <div class="teachers-list__info-wrap teachers-list__info-wrap--hidden">
                    <button class="teachers-list__close-button" type="button">Закрыть</button>
                    <div class="teachers-list__main-info-wrap">
                        <picture>
                            <source type="image/webp" srcset="img/teachers/volodin-mobile.webp">

                            <img class="teachers-list__image" src="img/teachers/volodin-mobile.jpg" alt="Фотография педагога Володиной Володина Евгения Евгеньевича">
                        </picture>
                        <ul class="teacher-description-list">
                            <li class="teacher-description-list__item">Сертифицированный фитнес-тренер.</li>
                            <li class="teacher-description-list__item">Стаж работы в педагогике - 6 лет.</li>
                            <li class="teacher-description-list__item">Опыт работы в фитнесе - 5 лет.</li>
                            <li class="teacher-description-list__item">В 2013 г. получил высшее профессиональное образование в Тверском государственном университете по специальности «Физическая культура и спорт».</li>
                            <li class="teacher-description-list__item">Действующий спортсмен Федерации кикбоксинга Тверской области, действующий тренер по кикбоксингу.</li>
                            <li class="teacher-description-list__item">В 2018 году был награжден Золотым знаком отличия ГТО.</li>
                        </ul>
                    </div>
                    <div class="diplomas">
                        <button class="modal-toggle-button" type="button">Дипломы</button>
                        <div class="diplomas__wrap">
                            <a href="img/dimploma/volodin/diploma-1.png">
                                <picture>
                                    <source type="image/webp" media="(min-width: 1200px)" srcset="img/dimploma/volodin/diploma-1-desktop.webp">
                                    <source type="image/webp" media="(min-width: 768px)" srcset="img/dimploma/volodin/diploma-1-tablet.webp">
                                    <source type="image/webp" srcset="img/dimploma/volodin/diploma-1-mobile.webp">

                                    <source media="(min-width: 1200px)" srcset="img/dimploma/volodin/diploma-1-desktop.png">
                                    <source media="(min-width: 768px)" srcset="img/dimploma/volodin/diploma-1-tablet.png">
                                    <img class="diplomas__image modal-image" src="img/dimploma/volodin/diploma-1-mobile.png" alt="Диплом Володина Евгения Евгеньевича">
                                </picture>
                            </a>
                            <div class="overlay"></div>
                            <div class="modal">
                                <button class="modal__close-button" type="button">Закрыть</button>
                                <a href="img/dimploma/volodin/diploma-1.png">
                                    <picture>
                                        <source type="image/webp" srcset="img/dimploma/volodin/diploma-1-mobile.webp">

                                        <img class="diplomas__original-image modal__original-image" src="img/dimploma/volodin/diploma-1-mobile.png" alt="Диплом Володина Евгения Евгеньевича">
                                    </picture>
                                </a>
                            </div>
                            <a href="img/dimploma/volodin/diploma-2.png">
                                <picture>
                                    <source type="image/webp" media="(min-width: 1200px)" srcset="img/dimploma/volodin/diploma-2-desktop.webp">
                                    <source type="image/webp" media="(min-width: 768px)" srcset="img/dimploma/volodin/diploma-2-tablet.webp">
                                    <source type="image/webp" srcset="img/dimploma/volodin/diploma-2-mobile.webp">

                                    <source media="(min-width: 1200px)" srcset="img/dimploma/volodin/diploma-2-desktop.png">
                                    <source media="(min-width: 768px)" srcset="img/dimploma/volodin/diploma-2-tablet.png">
                                    <img class="diplomas__image modal-image" src="img/dimploma/volodin/diploma-2-mobile.png" alt="Диплом Володина Евгения Евгеньевича">
                                </picture>
                            </a>
                            <div class="overlay"></div>
                            <div class="modal">
                                <button class="modal__close-button" type="button">Закрыть</button>
                                <a href="img/dimploma/volodin/diploma-2.png">
                                    <picture>
                                        <source type="image/webp" srcset="img/dimploma/volodin/diploma-2-mobile.webp">

                                        <img class="diplomas__original-image modal__original-image" src="img/dimploma/volodin/diploma-2-mobile.png" alt="Диплом Володина Евгения Евгеньевича">
                                    </picture>
                                </a>
                            </div>
                            <a href="img/dimploma/volodin/diploma-3.png">
                                <picture>
                                    <source type="image/webp" media="(min-width: 1200px)" srcset="img/dimploma/volodin/diploma-3-desktop.webp">
                                    <source type="image/webp" media="(min-width: 768px)" srcset="img/dimploma/volodin/diploma-3-tablet.webp">
                                    <source type="image/webp" srcset="img/dimploma/volodin/diploma-3-mobile.webp">

                                    <source media="(min-width: 1200px)" srcset="img/dimploma/volodin/diploma-3-desktop.png">
                                    <source media="(min-width: 768px)" srcset="img/dimploma/volodin/diploma-3-tablet.png">
                                    <img class="diplomas__image modal-image" src="img/dimploma/volodin/diploma-3-mobile.png" alt="Диплом Володина Евгения Евгеньевича">
                                </picture>
                            </a>
                            <div class="overlay"></div>
                            <div class="modal">
                                <button class="modal__close-button" type="button">Закрыть</button>
                                <a href="img/dimploma/volodin/diploma-3.png">
                                    <picture>
                                        <source type="image/webp" srcset="img/dimploma/volodin/diploma-3-mobile.webp">

                                        <img class="diplomas__original-image modal__original-image" src="img/dimploma/volodin/diploma-3-mobile.png" alt="Диплом Володина Евгения Евгеньевича">
                                    </picture>
                                </a>
                            </div>
                            <a href="img/dimploma/volodin/diploma-4.png">
                                <picture>
                                    <source type="image/webp" media="(min-width: 1200px)" srcset="img/dimploma/volodin/diploma-4-desktop.webp">
                                    <source type="image/webp" media="(min-width: 768px)" srcset="img/dimploma/volodin/diploma-4-tablet.webp">
                                    <source type="image/webp" srcset="img/dimploma/volodin/diploma-4-mobile.webp">

                                    <source media="(min-width: 1200px)" srcset="img/dimploma/volodin/diploma-4-desktop.png">
                                    <source media="(min-width: 768px)" srcset="img/dimploma/volodin/diploma-4-tablet.png">
                                    <img class="diplomas__image modal-image" src="img/dimploma/volodin/diploma-4-mobile.png" alt="Диплом Володина Евгения Евгеньевича">
                                </picture>
                            </a>
                            <div class="overlay"></div>
                            <div class="modal">
                                <button class="modal__close-button" type="button">Закрыть</button>
                                <a href="img/dimploma/volodin/diploma-4.png">
                                    <picture>
                                        <source type="image/webp" srcset="img/dimploma/volodin/diploma-4-mobile.webp">

                                        <img class="diplomas__original-image modal__original-image" src="img/dimploma/volodin/diploma-4-mobile.png" alt="Диплом Володина Евгения Евгеньевича">
                                    </picture>
                                </a>
                            </div>
                            <a href="img/dimploma/volodin/diploma-5.png">
                                <picture>
                                    <source type="image/webp" media="(min-width: 1200px)" srcset="img/dimploma/volodin/diploma-5-desktop.webp">
                                    <source type="image/webp" media="(min-width: 768px)" srcset="img/dimploma/volodin/diploma-5-tablet.webp">
                                    <source type="image/webp" srcset="img/dimploma/volodin/diploma-5-mobile.webp">

                                    <source media="(min-width: 1200px)" srcset="img/dimploma/volodin/diploma-5-desktop.png">
                                    <source media="(min-width: 768px)" srcset="img/dimploma/volodin/diploma-5-tablet.png">
                                    <img class="diplomas__image modal-image" src="img/dimploma/volodin/diploma-5-mobile.png" alt="Диплом Володина Евгения Евгеньевича">
                                </picture>
                            </a>
                            <div class="overlay"></div>
                            <div class="modal">
                                <button class="modal__close-button" type="button">Закрыть</button>
                                <a href="img/dimploma/volodin/diploma-5.png">
                                    <picture>
                                        <source type="image/webp" srcset="img/dimploma/volodin/diploma-5-mobile.webp">

                                        <img class="diplomas__original-image modal__original-image" src="img/dimploma/volodin/diploma-5-mobile.png" alt="Диплом Володина Евгения Евгеньевича">
                                    </picture>
                                </a>
                            </div>
                            <a href="img/dimploma/volodin/diploma-6.png">
                                <picture>
                                    <source type="image/webp" media="(min-width: 1200px)" srcset="img/dimploma/volodin/diploma-6-desktop.webp">
                                    <source type="image/webp" media="(min-width: 768px)" srcset="img/dimploma/volodin/diploma-6-tablet.webp">
                                    <source type="image/webp" srcset="img/dimploma/volodin/diploma-6-mobile.webp">

                                    <source media="(min-width: 1200px)" srcset="img/dimploma/volodin/diploma-6-desktop.png">
                                    <source media="(min-width: 768px)" srcset="img/dimploma/volodin/diploma-6-tablet.png">
                                    <img class="diplomas__image modal-image" src="img/dimploma/volodin/diploma-6-mobile.png" alt="Диплом Володина Евгения Евгеньевича">
                                </picture>
                            </a>
                            <div class="overlay"></div>
                            <div class="modal">
                                <button class="modal__close-button" type="button">Закрыть</button>
                                <a href="img/dimploma/volodin/diploma-6.png">
                                    <picture>
                                        <source type="image/webp" srcset="img/dimploma/volodin/diploma-6-mobile.webp">

                                        <img class="diplomas__original-image modal__original-image" src="img/dimploma/volodin/diploma-6-mobile.png" alt="Диплом Володина Евгения Евгеньевича">
                                    </picture>
                                </a>
                            </div>
                            <a href="img/dimploma/volodin/diploma-7.png">
                                <picture>
                                    <source type="image/webp" media="(min-width: 1200px)" srcset="img/dimploma/volodin/diploma-7-desktop.webp">
                                    <source type="image/webp" media="(min-width: 768px)" srcset="img/dimploma/volodin/diploma-7-tablet.webp">
                                    <source type="image/webp" srcset="img/dimploma/volodin/diploma-7-mobile.webp">

                                    <source media="(min-width: 1200px)" srcset="img/dimploma/volodin/diploma-7-desktop.png">
                                    <source media="(min-width: 768px)" srcset="img/dimploma/volodin/diploma-7-tablet.png">
                                    <img class="diplomas__image modal-image" src="img/dimploma/volodin/diploma-7-mobile.png" alt="Диплом Володина Евгения Евгеньевича">
                                </picture>
                            </a>
                            <div class="overlay"></div>
                            <div class="modal">
                                <button class="modal__close-button" type="button">Закрыть</button>
                                <a href="img/dimploma/volodin/diploma-7.png">
                                    <picture>
                                        <source type="image/webp" srcset="img/dimploma/volodin/diploma-7-mobile.webp">

                                        <img class="diplomas__original-image modal__original-image" src="img/dimploma/volodin/diploma-7-mobile.png" alt="Диплом Володина Евгения Евгеньевича">
                                    </picture>
                                </a>
                            </div>
                            <a href="img/dimploma/volodin/diploma-8.png">
                                <picture>
                                    <source type="image/webp" media="(min-width: 1200px)" srcset="img/dimploma/volodin/diploma-8-desktop.webp">
                                    <source type="image/webp" media="(min-width: 768px)" srcset="img/dimploma/volodin/diploma-8-tablet.webp">
                                    <source type="image/webp" srcset="img/dimploma/volodin/diploma-8-mobile.webp">

                                    <source media="(min-width: 1200px)" srcset="img/dimploma/volodin/diploma-8-desktop.png">
                                    <source media="(min-width: 768px)" srcset="img/dimploma/volodin/diploma-8-tablet.png">
                                    <img class="diplomas__image modal-image" src="img/dimploma/volodin/diploma-8-mobile.png" alt="Диплом Володина Евгения Евгеньевича">
                                </picture>
                            </a>
                            <div class="overlay"></div>
                            <div class="modal">
                                <button class="modal__close-button" type="button">Закрыть</button>
                                <a href="img/dimploma/volodin/diploma-8.png">
                                    <picture>
                                        <source type="image/webp" srcset="img/dimploma/volodin/diploma-8-mobile.webp">

                                        <img class="diplomas__original-image modal__original-image" src="img/dimploma/volodin/diploma-8-mobile.png" alt="Диплом Володина Евгения Евгеньевича">
                                    </picture>
                                </a>
                            </div>
                            <a href="img/dimploma/volodin/diploma-9.png">
                                <picture>
                                    <source type="image/webp" media="(min-width: 1200px)" srcset="img/dimploma/volodin/diploma-9-desktop.webp">
                                    <source type="image/webp" media="(min-width: 768px)" srcset="img/dimploma/volodin/diploma-9-tablet.webp">
                                    <source type="image/webp" srcset="img/dimploma/volodin/diploma-9-mobile.webp">

                                    <source media="(min-width: 1200px)" srcset="img/dimploma/volodin/diploma-9-desktop.png">
                                    <source media="(min-width: 768px)" srcset="img/dimploma/volodin/diploma-9-tablet.png">
                                    <img class="diplomas__image modal-image" src="img/dimploma/volodin/diploma-9-mobile.png" alt="Диплом Володина Евгения Евгеньевича">
                                </picture>
                            </a>
                            <div class="overlay"></div>
                            <div class="modal">
                                <button class="modal__close-button" type="button">Закрыть</button>
                                <a href="img/dimploma/volodin/diploma-9.png">
                                    <picture>
                                        <source type="image/webp" srcset="img/dimploma/volodin/diploma-9-mobile.webp">

                                        <img class="diplomas__original-image modal__original-image" src="img/dimploma/volodin/diploma-9-mobile.png" alt="Диплом Володина Евгения Евгеньевича">
                                    </picture>
                                </a>
                            </div>
                            <a href="img/dimploma/volodin/diploma-10.png">
                                <picture>
                                    <source type="image/webp" media="(min-width: 1200px)" srcset="img/dimploma/volodin/diploma-10-desktop.webp">
                                    <source type="image/webp" media="(min-width: 768px)" srcset="img/dimploma/volodin/diploma-10-tablet.webp">
                                    <source type="image/webp" srcset="img/dimploma/volodin/diploma-10-mobile.webp">

                                    <source media="(min-width: 1200px)" srcset="img/dimploma/volodin/diploma-10-desktop.png">
                                    <source media="(min-width: 768px)" srcset="img/dimploma/volodin/diploma-10-tablet.png">
                                    <img class="diplomas__image modal-image" src="img/dimploma/volodin/diploma-10-mobile.png" alt="Диплом Володина Евгения Евгеньевича">
                                </picture>
                            </a>
                            <div class="overlay"></div>
                            <div class="modal">
                                <button class="modal__close-button" type="button">Закрыть</button>
                                <a href="img/dimploma/volodin/diploma-10.png">
                                    <picture>
                                        <source type="image/webp" srcset="img/dimploma/volodin/diploma-10-mobile.webp">

                                        <img class="diplomas__original-image modal__original-image" src="img/dimploma/volodin/diploma-10-mobile.png" alt="Диплом Володина Евгения Евгеньевича">
                                    </picture>
                                </a>
                            </div>
                            <a href="img/dimploma/volodin/diploma-11.png">
                                <picture>
                                    <source type="image/webp" media="(min-width: 1200px)" srcset="img/dimploma/volodin/diploma-11-desktop.webp">
                                    <source type="image/webp" media="(min-width: 768px)" srcset="img/dimploma/volodin/diploma-11-tablet.webp">
                                    <source type="image/webp" srcset="img/dimploma/volodin/diploma-11-mobile.webp">

                                    <source media="(min-width: 1200px)" srcset="img/dimploma/volodin/diploma-11-desktop.png">
                                    <source media="(min-width: 768px)" srcset="img/dimploma/volodin/diploma-11-tablet.png">
                                    <img class="diplomas__image modal-image" src="img/dimploma/volodin/diploma-11-mobile.png" alt="Диплом Володина Евгения Евгеньевича">
                                </picture>
                            </a>
                            <div class="overlay"></div>
                            <div class="modal">
                                <button class="modal__close-button" type="button">Закрыть</button>
                                <a href="img/dimploma/volodin/diploma-11.png">
                                    <picture>
                                        <source type="image/webp" srcset="img/dimploma/volodin/diploma-11-mobile.webp">

                                        <img class="diplomas__original-image modal__original-image" src="img/dimploma/volodin/diploma-11-mobile.png" alt="Диплом Володина Евгения Евгеньевича">
                                    </picture>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="teachers-list__item">
                <div class="teachers-list__short-info">
                    <picture>
                        <source type="image/webp" media="(min-width: 1200px)" srcset="img/teachers/mayorova-desktop.webp">
                        <source type="image/webp" srcset="img/teachers/mayorova-tablet.webp">

                        <source media="(min-width: 1200px)" srcset="img/teachers/mayorova-desktop.jpg">
                        <img class="teachers-list__image-preview" src="img/teachers/mayorova-tablet.jpg" alt="Фотография педагога Майоровой Татьяны Александровны">
                    </picture>
                    <button class="teachers-list__button-toggle modal-toggle-button modal-toggle-button--teachers">Информация</button>
                    <span class="teachers-list__subject">Карапузики</span>
                    <button class="teachers-list__button-toggle modal-toggle-button modal-toggle-button--teachers-name">Майорова Татьяна Александровна</button>
                </div>
                <div class="teachers-list__info-wrap teachers-list__info-wrap--hidden">
                    <button class="teachers-list__close-button" type="button">Закрыть</button>
                    <div class="teachers-list__main-info-wrap">
                        <picture>
                            <source type="image/webp" srcset="img/teachers/mayorova-mobile.webp">

                            <img class="teachers-list__image" src="img/teachers/mayorova-mobile.jpg" alt="Фотография педагога Майоровой Татьяны Александровны">
                        </picture>
                        <ul class="teacher-description-list">
                            <li class="teacher-description-list__item">Стаж педагогической работы 30 лет.</li>
                            <li class="teacher-description-list__item">Высшая квалификационная категория.</li>
                            <li class="teacher-description-list__item">В 1997 году закончила ТвГУ по специальности дошкольная педагогика и психология.</li>
                            <li class="teacher-description-list__item">В 2014 году награждена Почётной Грамотой Министерства Образования Тверской Области.</li>
                            <li class="teacher-description-list__item">В 2017  награждена  Почетной грамотой. Министерства образования и науки Российской Федерации.</li>
                        </ul>
                    </div>
                    <div class="diplomas diplomas--small">
                        <button class="modal-toggle-button" type="button">Дипломы</button>
                        <div class="diplomas__wrap">
                            <a href="img/dimploma/mayorova/diploma-1.png">
                                <picture>
                                    <source type="image/webp" media="(min-width: 1200px)" srcset="img/dimploma/mayorova/diploma-1-desktop.webp">
                                    <source type="image/webp" media="(min-width: 768px)" srcset="img/dimploma/mayorova/diploma-1-tablet.webp">
                                    <source type="image/webp" srcset="img/dimploma/mayorova/diploma-1-mobile.webp">

                                    <source media="(min-width: 1200px)" srcset="img/dimploma/mayorova/diploma-1-desktop.png">
                                    <source media="(min-width: 768px)" srcset="img/dimploma/mayorova/diploma-1-tablet.png">
                                    <img class="diplomas__image modal-image" src="img/dimploma/mayorova/diploma-1-mobile.png" alt="Диплом Майоровой Татьяны Александровны">
                                </picture>
                            </a>
                            <div class="overlay"></div>
                            <div class="modal">
                                <button class="modal__close-button" type="button">Закрыть</button>
                                <a href="img/dimploma/mayorova/diploma-1.png">
                                    <picture>
                                        <source type="image/webp" srcset="img/dimploma/mayorova/diploma-1-mobile.webp">

                                        <img class="diplomas__original-image modal__original-image" src="img/dimploma/mayorova/diploma-1-mobile.png" alt="Диплом Майоровой Татьяны Александровны">
                                    </picture>
                                </a>
                            </div>
                            <a href="img/dimploma/mayorova/diploma-2.png">
                                <picture>
                                    <source type="image/webp" media="(min-width: 1200px)" srcset="img/dimploma/mayorova/diploma-2-desktop.webp">
                                    <source type="image/webp" media="(min-width: 768px)" srcset="img/dimploma/mayorova/diploma-2-tablet.webp">
                                    <source type="image/webp" srcset="img/dimploma/mayorova/diploma-2-mobile.webp">

                                    <source media="(min-width: 1200px)" srcset="img/dimploma/mayorova/diploma-2-desktop.png">
                                    <source media="(min-width: 768px)" srcset="img/dimploma/mayorova/diploma-2-tablet.png">
                                    <img class="diplomas__image modal-image" src="img/dimploma/mayorova/diploma-2-mobile.png" alt="Диплом Майоровой Татьяны Александровны">
                                </picture>
                            </a>
                            <div class="overlay"></div>
                            <div class="modal">
                                <button class="modal__close-button" type="button">Закрыть</button>
                                <a href="img/dimploma/mayorova/diploma-2.png">
                                    <picture>
                                        <source type="image/webp" srcset="img/dimploma/mayorova/diploma-2-mobile.webp">

                                        <img class="diplomas__original-image modal__original-image" src="img/dimploma/mayorova/diploma-2-mobile.png" alt="Диплом Майоровой Татьяны Александровны">
                                    </picture>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="teachers-list__item">
                <div class="teachers-list__short-info">
                    <picture>
                        <source type="image/webp" media="(min-width: 1200px)" srcset="img/teachers/philippova-desktop.webp">
                        <source type="image/webp" srcset="img/teachers/philippova-tablet.webp">

                        <source media="(min-width: 1200px)" srcset="img/teachers/philippova-desktop.jpg">
                        <img class="teachers-list__image-preview" src="img/teachers/philippova-tablet.jpg" alt="Фотография педагога Филипповой Натальи Михайловны">
                    </picture>
                    <button class="teachers-list__button-toggle modal-toggle-button modal-toggle-button--teachers">Информация</button>
                    <span class="teachers-list__subject">Карапузики</span>
                    <button class="teachers-list__button-toggle modal-toggle-button modal-toggle-button--teachers-name">Филиппова Наталья Михайловна</button>
                </div>
                <div class="teachers-list__info-wrap teachers-list__info-wrap--hidden">
                    <button class="teachers-list__close-button" type="button">Закрыть</button>
                    <div class="teachers-list__main-info-wrap">
                        <picture>
                            <source type="image/webp" srcset="img/teachers/philippova-mobile.webp">

                            <img class="teachers-list__image" src="img/teachers/philippova-mobile.jpg" alt="Фотография педагога Филипповой Натальи Михайловны">
                        </picture>
                        <ul class="teacher-description-list">
                            <li class="teacher-description-list__item">Стаж педагогической работы 22 года.</li>
                            <li class="teacher-description-list__item">Высшая квалификационная категория.</li>
                            <li class="teacher-description-list__item">В 2000 году закончила ТвГУ по специальности дошкольная педагогика и психология.</li>
                            <li class="teacher-description-list__item">В 2017 году награждена Грамотой  Управления образования г. Твери за особые успехи и личный вклад в художественно – эстетическое воспитание и развитие детей дошкольного возраста.</li>
                        </ul>
                    </div>
                    <div class="diplomas">
                        <button class="modal-toggle-button" type="button">Дипломы</button>
                        <div class="diplomas__wrap">
                            <a href="img/dimploma/philippova/diploma-1.png">
                                <picture>
                                    <source type="image/webp" media="(min-width: 1200px)" srcset="img/dimploma/philippova/diploma-1-desktop.webp">
                                    <source type="image/webp" media="(min-width: 768px)" srcset="img/dimploma/philippova/diploma-1-tablet.webp">
                                    <source type="image/webp" srcset="img/dimploma/philippova/diploma-1-mobile.webp">

                                    <source media="(min-width: 1200px)" srcset="img/dimploma/philippova/diploma-1-desktop.png">
                                    <source media="(min-width: 768px)" srcset="img/dimploma/philippova/diploma-1-tablet.png">
                                    <img class="diplomas__image modal-image" src="img/dimploma/philippova/diploma-1-mobile.png" alt="Диплом Филипповой Натальи Михайловны">
                                </picture>
                            </a>
                            <div class="overlay"></div>
                            <div class="modal">
                                <button class="modal__close-button" type="button">Закрыть</button>
                                <a href="img/dimploma/philippova/diploma-1.png">
                                    <picture>
                                        <source type="image/webp" srcset="img/dimploma/philippova/diploma-1-mobile.webp">

                                        <img class="diplomas__original-image modal__original-image" src="img/dimploma/philippova/diploma-1-mobile.png" alt="Диплом Филипповой Натальи Михайловны">
                                    </picture>
                                </a>
                            </div>
                            <a href="img/dimploma/philippova/diploma-2.png">
                                <picture>
                                    <source type="image/webp" media="(min-width: 1200px)" srcset="img/dimploma/philippova/diploma-2-desktop.webp">
                                    <source type="image/webp" media="(min-width: 768px)" srcset="img/dimploma/philippova/diploma-2-tablet.webp">
                                    <source type="image/webp" srcset="img/dimploma/philippova/diploma-2-mobile.webp">

                                    <source media="(min-width: 1200px)" srcset="img/dimploma/philippova/diploma-2-desktop.png">
                                    <source media="(min-width: 768px)" srcset="img/dimploma/philippova/diploma-2-tablet.png">
                                    <img class="diplomas__image modal-image" src="img/dimploma/philippova/diploma-2-mobile.png" alt="Диплом Филипповой Натальи Михайловны">
                                </picture>
                            </a>
                            <div class="overlay"></div>
                            <div class="modal">
                                <button class="modal__close-button" type="button">Закрыть</button>
                                <a href="img/dimploma/philippova/diploma-2.png">
                                    <picture>
                                        <source type="image/webp" srcset="img/dimploma/philippova/diploma-2-mobile.webp">

                                        <img class="diplomas__original-image modal__original-image" src="img/dimploma/philippova/diploma-2-mobile.png" alt="Диплом Филипповой Натальи Михайловны">
                                    </picture>
                                </a>
                            </div>
                            <a href="img/dimploma/philippova/diploma-3.png">
                                <picture>
                                    <source type="image/webp" media="(min-width: 1200px)" srcset="img/dimploma/philippova/diploma-3-desktop.webp">
                                    <source type="image/webp" media="(min-width: 768px)" srcset="img/dimploma/philippova/diploma-3-tablet.webp">
                                    <source type="image/webp" srcset="img/dimploma/philippova/diploma-3-mobile.webp">

                                    <source media="(min-width: 1200px)" srcset="img/dimploma/philippova/diploma-3-desktop.png">
                                    <source media="(min-width: 768px)" srcset="img/dimploma/philippova/diploma-3-tablet.png">
                                    <img class="diplomas__image modal-image" src="img/dimploma/philippova/diploma-3-mobile.png" alt="Диплом Филипповой Натальи Михайловны">
                                </picture>
                            </a>
                            <div class="overlay"></div>
                            <div class="modal">
                                <button class="modal__close-button" type="button">Закрыть</button>
                                <a href="img/dimploma/philippova/diploma-3.png">
                                    <picture>
                                        <source type="image/webp" srcset="img/dimploma/philippova/diploma-3-mobile.webp">

                                        <img class="diplomas__original-image modal__original-image" src="img/dimploma/philippova/diploma-3-mobile.png" alt="Диплом Филипповой Натальи Михайловны">
                                    </picture>
                                </a>
                            </div>
                            <a href="img/dimploma/philippova/diploma-4.png">
                                <picture>
                                    <source type="image/webp" media="(min-width: 1200px)" srcset="img/dimploma/philippova/diploma-4-desktop.webp">
                                    <source type="image/webp" media="(min-width: 768px)" srcset="img/dimploma/philippova/diploma-4-tablet.webp">
                                    <source type="image/webp" srcset="img/dimploma/philippova/diploma-4-mobile.webp">

                                    <source media="(min-width: 1200px)" srcset="img/dimploma/philippova/diploma-4-desktop.png">
                                    <source media="(min-width: 768px)" srcset="img/dimploma/philippova/diploma-4-tablet.png">
                                    <img class="diplomas__image modal-image" src="img/dimploma/philippova/diploma-4-mobile.png" alt="Диплом Филипповой Натальи Михайловны">
                                </picture>
                            </a>
                            <div class="overlay"></div>
                            <div class="modal">
                                <button class="modal__close-button" type="button">Закрыть</button>
                                <a href="img/dimploma/philippova/diploma-4.png">
                                    <picture>
                                        <source type="image/webp" srcset="img/dimploma/philippova/diploma-4-mobile.webp">

                                        <img class="diplomas__original-image modal__original-image" src="img/dimploma/philippova/diploma-4-mobile.png" alt="Диплом Филипповой Натальи Михайловны">
                                    </picture>
                                </a>
                            </div>
                            <a href="img/dimploma/philippova/diploma-5.png">
                                <picture>
                                    <source type="image/webp" media="(min-width: 1200px)" srcset="img/dimploma/philippova/diploma-5-desktop.webp">
                                    <source type="image/webp" media="(min-width: 768px)" srcset="img/dimploma/philippova/diploma-5-tablet.webp">
                                    <source type="image/webp" srcset="img/dimploma/philippova/diploma-5-mobile.webp">

                                    <source media="(min-width: 1200px)" srcset="img/dimploma/philippova/diploma-5-desktop.png">
                                    <source media="(min-width: 768px)" srcset="img/dimploma/philippova/diploma-5-tablet.png">
                                    <img class="diplomas__image modal-image" src="img/dimploma/philippova/diploma-5-mobile.png" alt="Диплом Филипповой Натальи Михайловны">
                                </picture>
                            </a>
                            <div class="overlay"></div>
                            <div class="modal">
                                <button class="modal__close-button" type="button">Закрыть</button>
                                <a href="img/dimploma/philippova/diploma-5.png">
                                    <picture>
                                        <source type="image/webp" srcset="img/dimploma/philippova/diploma-5-mobile.webp">

                                        <img class="diplomas__original-image modal__original-image" src="img/dimploma/philippova/diploma-5-mobile.png" alt="Диплом Филипповой Натальи Михайловны">
                                    </picture>
                                </a>
                            </div>
                            <a href="img/dimploma/philippova/diploma-6.png">
                                <picture>
                                    <source type="image/webp" media="(min-width: 1200px)" srcset="img/dimploma/philippova/diploma-6-desktop.webp">
                                    <source type="image/webp" media="(min-width: 768px)" srcset="img/dimploma/philippova/diploma-6-tablet.webp">
                                    <source type="image/webp" srcset="img/dimploma/philippova/diploma-6-mobile.webp">

                                    <source media="(min-width: 1200px)" srcset="img/dimploma/philippova/diploma-6-desktop.png">
                                    <source media="(min-width: 768px)" srcset="img/dimploma/philippova/diploma-6-tablet.png">
                                    <img class="diplomas__image modal-image" src="img/dimploma/philippova/diploma-6-mobile.png" alt="Диплом Филипповой Натальи Михайловны">
                                </picture>
                            </a>
                            <div class="overlay"></div>
                            <div class="modal">
                                <button class="modal__close-button" type="button">Закрыть</button>
                                <a href="img/dimploma/philippova/diploma-6.png">
                                    <picture>
                                        <source type="image/webp" srcset="img/dimploma/philippova/diploma-6-mobile.webp">

                                        <img class="diplomas__original-image modal__original-image" src="img/dimploma/philippova/diploma-6-mobile.png" alt="Диплом Филипповой Натальи Михайловны">
                                    </picture>
                                </a>
                            </div>
                            <a href="img/dimploma/philippova/diploma-7.png">
                                <picture>
                                    <source type="image/webp" media="(min-width: 1200px)" srcset="img/dimploma/philippova/diploma-7-desktop.webp">
                                    <source type="image/webp" media="(min-width: 768px)" srcset="img/dimploma/philippova/diploma-7-tablet.webp">
                                    <source type="image/webp" srcset="img/dimploma/philippova/diploma-7-mobile.webp">

                                    <source media="(min-width: 1200px)" srcset="img/dimploma/philippova/diploma-7-desktop.png">
                                    <source media="(min-width: 768px)" srcset="img/dimploma/philippova/diploma-7-tablet.png">
                                    <img class="diplomas__image modal-image" src="img/dimploma/philippova/diploma-7-mobile.png" alt="Диплом Филипповой Натальи Михайловны">
                                </picture>
                            </a>
                            <div class="overlay"></div>
                            <div class="modal">
                                <button class="modal__close-button" type="button">Закрыть</button>
                                <a href="img/dimploma/philippova/diploma-7.png">
                                    <picture>
                                        <source type="image/webp" srcset="img/dimploma/philippova/diploma-7-mobile.webp">

                                        <img class="diplomas__original-image modal__original-image" src="img/dimploma/philippova/diploma-7-mobile.png" alt="Диплом Филипповой Натальи Михайловны">
                                    </picture>
                                </a>
                            </div>
                            <a href="img/dimploma/philippova/diploma-8.png">
                                <picture>
                                    <source type="image/webp" media="(min-width: 1200px)" srcset="img/dimploma/philippova/diploma-8-desktop.webp">
                                    <source type="image/webp" media="(min-width: 768px)" srcset="img/dimploma/philippova/diploma-8-tablet.webp">
                                    <source type="image/webp" srcset="img/dimploma/philippova/diploma-8-mobile.webp">

                                    <source media="(min-width: 1200px)" srcset="img/dimploma/philippova/diploma-8-desktop.png">
                                    <source media="(min-width: 768px)" srcset="img/dimploma/philippova/diploma-8-tablet.png">
                                    <img class="diplomas__image modal-image" src="img/dimploma/philippova/diploma-8-mobile.png" alt="Диплом Филипповой Натальи Михайловны">
                                </picture>
                            </a>
                            <div class="overlay"></div>
                            <div class="modal">
                                <button class="modal__close-button" type="button">Закрыть</button>
                                <a href="img/dimploma/philippova/diploma-8.png">
                                    <picture>
                                        <source type="image/webp" srcset="img/dimploma/philippova/diploma-8-mobile.webp">

                                        <img class="diplomas__original-image modal__original-image" src="img/dimploma/philippova/diploma-8-mobile.png" alt="Диплом Филипповой Натальи Михайловны">
                                    </picture>
                                </a>
                            </div>
                            <a href="img/dimploma/philippova/diploma-9.png">
                                <picture>
                                    <source type="image/webp" media="(min-width: 1200px)" srcset="img/dimploma/philippova/diploma-9-desktop.webp">
                                    <source type="image/webp" media="(min-width: 768px)" srcset="img/dimploma/philippova/diploma-9-tablet.webp">
                                    <source type="image/webp" srcset="img/dimploma/philippova/diploma-9-mobile.webp">

                                    <source media="(min-width: 1200px)" srcset="img/dimploma/philippova/diploma-9-desktop.png">
                                    <source media="(min-width: 768px)" srcset="img/dimploma/philippova/diploma-9-tablet.png">
                                    <img class="diplomas__image modal-image" src="img/dimploma/philippova/diploma-9-mobile.png" alt="Диплом Филипповой Натальи Михайловны">
                                </picture>
                            </a>
                            <div class="overlay"></div>
                            <div class="modal">
                                <button class="modal__close-button" type="button">Закрыть</button>
                                <a href="img/dimploma/philippova/diploma-9.png">
                                    <picture>
                                        <source type="image/webp" srcset="img/dimploma/philippova/diploma-9-mobile.webp">

                                        <img class="diplomas__original-image modal__original-image" src="img/dimploma/philippova/diploma-9-mobile.png" alt="Диплом Филипповой Натальи Михайловны">
                                    </picture>
                                </a>
                            </div>
                            <a href="img/dimploma/philippova/diploma-10.png">
                                <picture>
                                    <source type="image/webp" media="(min-width: 1200px)" srcset="img/dimploma/philippova/diploma-10-desktop.webp">
                                    <source type="image/webp" media="(min-width: 768px)" srcset="img/dimploma/philippova/diploma-10-tablet.webp">
                                    <source type="image/webp" srcset="img/dimploma/philippova/diploma-10-mobile.webp">

                                    <source media="(min-width: 1200px)" srcset="img/dimploma/philippova/diploma-10-desktop.png">
                                    <source media="(min-width: 768px)" srcset="img/dimploma/philippova/diploma-10-tablet.png">
                                    <img class="diplomas__image modal-image" src="img/dimploma/philippova/diploma-10-mobile.png" alt="Диплом Филипповой Натальи Михайловны">
                                </picture>
                            </a>
                            <div class="overlay"></div>
                            <div class="modal">
                                <button class="modal__close-button" type="button">Закрыть</button>
                                <a href="img/dimploma/philippova/diploma-10.png">
                                    <picture>
                                        <source type="image/webp" srcset="img/dimploma/philippova/diploma-10-mobile.webp">

                                        <img class="diplomas__original-image modal__original-image" src="img/dimploma/philippova/diploma-10-mobile.png" alt="Диплом Филипповой Натальи Михайловны">
                                    </picture>
                                </a>
                            </div>
                            <a href="img/dimploma/philippova/diploma-11.png">
                                <picture>
                                    <source type="image/webp" media="(min-width: 1200px)" srcset="img/dimploma/philippova/diploma-11-desktop.webp">
                                    <source type="image/webp" media="(min-width: 768px)" srcset="img/dimploma/philippova/diploma-11-tablet.webp">
                                    <source type="image/webp" srcset="img/dimploma/philippova/diploma-11-mobile.webp">

                                    <source media="(min-width: 1200px)" srcset="img/dimploma/philippova/diploma-11-desktop.png">
                                    <source media="(min-width: 768px)" srcset="img/dimploma/philippova/diploma-11-tablet.png">
                                    <img class="diplomas__image modal-image" src="img/dimploma/philippova/diploma-11-mobile.png" alt="Диплом Филипповой Натальи Михайловны">
                                </picture>
                            </a>
                            <div class="overlay"></div>
                            <div class="modal">
                                <button class="modal__close-button" type="button">Закрыть</button>
                                <a href="img/dimploma/philippova/diploma-11.png">
                                    <picture>
                                        <source type="image/webp" srcset="img/dimploma/philippova/diploma-11-mobile.webp">

                                        <img class="diplomas__original-image modal__original-image" src="img/dimploma/philippova/diploma-11-mobile.png" alt="Диплом Филипповой Натальи Михайловны">
                                    </picture>
                                </a>
                            </div>
                            <a href="img/dimploma/philippova/diploma-12.png">
                                <picture>
                                    <source type="image/webp" media="(min-width: 1200px)" srcset="img/dimploma/philippova/diploma-12-desktop.webp">
                                    <source type="image/webp" media="(min-width: 768px)" srcset="img/dimploma/philippova/diploma-12-tablet.webp">
                                    <source type="image/webp" srcset="img/dimploma/philippova/diploma-12-mobile.webp">

                                    <source media="(min-width: 1200px)" srcset="img/dimploma/philippova/diploma-12-desktop.png">
                                    <source media="(min-width: 768px)" srcset="img/dimploma/philippova/diploma-12-tablet.png">
                                    <img class="diplomas__image modal-image" src="img/dimploma/philippova/diploma-12-mobile.png" alt="Диплом Филипповой Натальи Михайловны">
                                </picture>
                            </a>
                            <div class="overlay"></div>
                            <div class="modal">
                                <button class="modal__close-button" type="button">Закрыть</button>
                                <a href="img/dimploma/philippova/diploma-12.png">
                                    <picture>
                                        <source type="image/webp" srcset="img/dimploma/philippova/diploma-12-mobile.webp">

                                        <img class="diplomas__original-image modal__original-image" src="img/dimploma/philippova/diploma-12-mobile.png" alt="Диплом Филипповой Натальи Михайловны">
                                    </picture>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="teachers-list__item">
                <div class="teachers-list__short-info">
                    <picture>
                        <source type="image/webp" media="(min-width: 1200px)" srcset="img/teachers/grischenko-desktop.webp">
                        <source type="image/webp" srcset="img/teachers/grischenko-tablet.webp">

                        <source media="(min-width: 1200px)" srcset="img/teachers/grischenko-desktop.jpg">
                        <img class="teachers-list__image-preview" src="img/teachers/grischenko-tablet.jpg" alt="Фотография педагога Грищенко Сергея Александровича">
                    </picture>
                    <button class="teachers-list__button-toggle modal-toggle-button modal-toggle-button--teachers">Информация</button>
                    <span class="teachers-list__subject">Актерское мастерство</span>
                    <button class="teachers-list__button-toggle modal-toggle-button modal-toggle-button--teachers-name">Грищенко Сергей Александрович</button>
                </div>
                <div class="teachers-list__info-wrap teachers-list__info-wrap--hidden">
                    <button class="teachers-list__close-button" type="button">Закрыть</button>
                    <div class="teachers-list__main-info-wrap">
                        <picture>
                            <source type="image/webp" srcset="img/teachers/grischenko-mobile.webp">

                            <img class="teachers-list__image" src="img/teachers/grischenko-mobile.jpg" alt="Фотография педагога Грищенко Сергея Александровича">
                        </picture>
                        <ul class="teacher-description-list">
                            <li class="teacher-description-list__item">Артист театра и кино.</li>
                            <li class="teacher-description-list__item">Окончил ВТИ имени Щукина в 2015 году.</li>
                            <li class="teacher-description-list__item">С 2015 года артист Тверского театра юного зрителя. </li>
                            <li class="teacher-description-list__item">Педагог Тверского колледжа культуры им. Львова. Дисциплина «Сценическое движение». </li>
                            <li class="teacher-description-list__item">В 2018 году награжден Благодарственным письмом Администрации МБУК «МБС г. Твери» за помощь в проведении 6 городского конкурса «Читаем, сочиняем, инсценируем басню» и Благодарностью от Комитета по делам культуры Тверской области за добросовестную профессиональную деятельность и большой вклад в развитии культуры Тверской области.</li>
                        </ul>
                    </div>
                    <div class="diplomas diplomas--small">
                        <button class="modal-toggle-button" type="button">Дипломы</button>
                        <div class="diplomas__wrap">
                            <a href="img/dimploma/grischenko/diploma-1.png">
                                <picture>
                                    <source type="image/webp" media="(min-width: 1200px)" srcset="img/dimploma/grischenko/diploma-1-desktop.webp">
                                    <source type="image/webp" media="(min-width: 768px)" srcset="img/dimploma/grischenko/diploma-1-tablet.webp">
                                    <source type="image/webp" srcset="img/dimploma/grischenko/diploma-1-mobile.webp">

                                    <source media="(min-width: 1200px)" srcset="img/dimploma/grischenko/diploma-1-desktop.png">
                                    <source media="(min-width: 768px)" srcset="img/dimploma/grischenko/diploma-1-tablet.png">
                                    <img class="diplomas__image modal-image" src="img/dimploma/grischenko/diploma-1-mobile.png" alt="Диплом Грищенко Сергея Александровича">
                                </picture>
                            </a>
                            <div class="overlay"></div>
                            <div class="modal">
                                <button class="modal__close-button" type="button">Закрыть</button>
                                <a href="img/dimploma/grischenko/diploma-1.png">
                                    <picture>
                                        <source type="image/webp" srcset="img/dimploma/grischenko/diploma-1-mobile.webp">

                                        <img class="diplomas__original-image modal__original-image" src="img/dimploma/grischenko/diploma-1-mobile.png" alt="Диплом Грищенко Сергея Александровича">
                                    </picture>
                                </a>
                            </div>
                            <a href="img/dimploma/grischenko/diploma-2.png">
                                <picture>
                                    <source type="image/webp" media="(min-width: 1200px)" srcset="img/dimploma/grischenko/diploma-2-desktop.webp">
                                    <source type="image/webp" media="(min-width: 768px)" srcset="img/dimploma/grischenko/diploma-2-tablet.webp">
                                    <source type="image/webp" srcset="img/dimploma/grischenko/diploma-2-mobile.webp">

                                    <source media="(min-width: 1200px)" srcset="img/dimploma/grischenko/diploma-2-desktop.png">
                                    <source media="(min-width: 768px)" srcset="img/dimploma/grischenko/diploma-2-tablet.png">
                                    <img class="diplomas__image modal-image" src="img/dimploma/grischenko/diploma-2-mobile.png" alt="Диплом Грищенко Сергея Александровича">
                                </picture>
                            </a>
                            <div class="overlay"></div>
                            <div class="modal">
                                <button class="modal__close-button" type="button">Закрыть</button>
                                <a href="img/dimploma/grischenko/diploma-2.png">
                                    <picture>
                                        <source type="image/webp" srcset="img/dimploma/grischenko/diploma-2-mobile.webp">

                                        <img class="diplomas__original-image modal__original-image" src="img/dimploma/grischenko/diploma-2-mobile.png" alt="Диплом Грищенко Сергея Александровича">
                                    </picture>
                                </a>
                            </div>
                            <a href="img/dimploma/grischenko/diploma-3.png">
                                <picture>
                                    <source type="image/webp" media="(min-width: 1200px)" srcset="img/dimploma/grischenko/diploma-3-desktop.webp">
                                    <source type="image/webp" media="(min-width: 768px)" srcset="img/dimploma/grischenko/diploma-3-tablet.webp">
                                    <source type="image/webp" srcset="img/dimploma/grischenko/diploma-3-mobile.webp">

                                    <source media="(min-width: 1200px)" srcset="img/dimploma/grischenko/diploma-3-desktop.png">
                                    <source media="(min-width: 768px)" srcset="img/dimploma/grischenko/diploma-3-tablet.png">
                                    <img class="diplomas__image modal-image" src="img/dimploma/grischenko/diploma-3-mobile.png" alt="Диплом Грищенко Сергея Александровича">
                                </picture>
                            </a>
                            <div class="overlay"></div>
                            <div class="modal">
                                <button class="modal__close-button" type="button">Закрыть</button>
                                <a href="img/dimploma/grischenko/diploma-3.png">
                                    <picture>
                                        <source type="image/webp" srcset="img/dimploma/grischenko/diploma-3-mobile.webp">

                                        <img class="diplomas__original-image modal__original-image" src="img/dimploma/grischenko/diploma-3-mobile.png" alt="Диплом Грищенко Сергея Александровича">
                                    </picture>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </section>

    <section class="news" id="news">
        <h2 class="section-header">Новости</h2>
        <div class="news__wrap">
            <div id="vk_post_-183680411_133"></div>
            <script type="text/javascript" src="https://vk.com/js/api/openapi.js?162"></script>
            <script type="text/javascript">
                (function() {
                    VK.Widgets.Post("vk_post_-183680411_133", -183680411, 133, 'wRLLS5jca9yrXsqdFiVbQMawpiWV');
                }());
            </script>
            <a class="modal-toggle-button modal-toggle-button--gallery" href="https://vk.com/supersemeyka69">Больше новостей</a>
        </div>
    </section>

    <section class="photo-gallery photo-gallery--main" id="photo-gallery">
        <h2 class="section-header">Фотогалерея</h2>
        <ul class="photo-preview-list">
            <li class="photo-preview-list__item">
                <a href="photo-gallery.html">
                    <picture>
                        <source type="image/webp" srcset="img/photo/01-tablet.webp">

                        <img class="photo-preview-list__image modal-image" src="img/photo/01-tablet.jpg" alt="Фотография с занятия">
                    </picture>
                </a>
                <a class="modal-toggle-button modal-toggle-button--gallery" href="photo-gallery.html">Наша жизнь</a>
            </li>
        </ul>
    </section>

    <section class="video" id="video">
        <h2 class="section-header">Видео</h2>
        <ul class="photo-preview-list">
            <li class="photo-preview-list__item photo-preview-list__item--video">
                <a>
                    <div>
                        <p class="photo-preview-list__image photo-preview-list__image--video modal-image">1 сентября</p>
                    </div>
                </a>
                <div class="overlay"></div>
                <div class="modal">
                    <button class="modal__close-button" type="button">Закрыть</button>
                    <a>
                        <iframe class="photo-preview-list__original modal__original-image" src="//vk.com/video_ext.php?oid=-183680411&id=456239039&hash=3f8f9c2fc77bbbae&hd=2" width="853" height="480" frameborder="0" allowfullscreen></iframe>
                    </a>
                </div>
            </li>
            <li class="photo-preview-list__item photo-preview-list__item--video">
                <a>
                    <div>
                        <p class="photo-preview-list__image photo-preview-list__image--video modal-image">День рождение посёлка Удача</p>
                    </div>
                </a>
                <div class="overlay"></div>
                <div class="modal">
                    <button class="modal__close-button" type="button">Закрыть</button>
                    <a>
                        <iframe class="photo-preview-list__original modal__original-image" src="//vk.com/video_ext.php?oid=-183680411&id=456239034&hash=b29e01f839e92da3&hd=2" width="853" height="480" frameborder="0" allowfullscreen></iframe>
                    </a>
                </div>
            </li>
            <li class="photo-preview-list__item photo-preview-list__item--video">
                <a>
                    <div>
                        <p class="photo-preview-list__image photo-preview-list__image--video modal-image">Открытие супер-центра</p>
                    </div>
                </a>
                <div class="overlay"></div>
                <div class="modal">
                    <button class="modal__close-button" type="button">Закрыть</button>
                    <a>
                        <iframe class="photo-preview-list__original modal__original-image" src="//vk.com/video_ext.php?oid=-183680411&id=456239033&hash=c554a37d227c2c68&hd=2" width="853" height="480" frameborder="0" allowfullscreen></iframe>
                    </a>
                </div>
            </li>
        </ul>
    </section>

    <section class="sponsores">
        <h2 class="visually-hidden">Спонсоры</h2>
        <ul class="sponsores-list">
            <li class="sponsores-list__item">
                <a class="sponsores-list__link" href="https://vk.com/tverland69">
                    <picture>
                        <source type="image/webp" srcset="img/logos/tver-land-tablet.webp">

                        <img class="sponsores-list__image" src="img/logos/tver-land-tablet.png" width="186" alt="Логотип Тверь Лэнд">
                    </picture>
                </a>
            </li>
            <li class="sponsores-list__item">
                <a class="sponsores-list__link" href="https://www.rumos-kia.ru">
                    <picture>
                        <source type="image/webp" srcset="img/logos/rumos-simple-tablet.webp">

                        <img class="sponsores-list__image" src="img/logos/rumos-simple-tablet.png" width="185" height="100" alt="Логотип КИА Румос">
                    </picture>
                </a>
            </li>
            <li class="sponsores-list__item">
                <a class="sponsores-list__link" href="https://vk.com/vashprazdniktver">
                    <picture>
                        <source type="image/webp" srcset="img/logos/your-celebration-tablet.webp">

                        <img class="sponsores-list__image" src="img/logos/your-celebration-tablet.png" width="339" height="100" alt="Логотип Ваш праздник">
                    </picture>
                </a>
            </li>
        </ul>
    </section>

    <section class="contacts" id="contacts">
        <h2 class="section-header">Контакты</h2>
        <div class="map">
            <div class="contacts__social-wrap">
                <div class="contacts__social-inner-wrap">
                    <ul class="contacts-social-list">
                        <li class="contacts-social-list__item">
                            <a class="contacts-social-list__link" href="https://www.instagram.com/supersemeyka_69">
                                Инстаграм
                                <svg class="contacts-social-list__svg" width="35" height="35"><use xlink:href="#icon-instagram"></use></svg>
                            </a>
                        </li>
                        <li class="contacts-social-list__item">
                            <a class="contacts-social-list__link" href="https://vk.com/supersemeyka69">
                                ВКонтакте
                                <svg class="contacts-social-list__svg" width="35" height="35"><use xlink:href="#icon-vk"></use></svg>
                            </a>
                        </li>
                    </ul>
                    <ul class="contacts-list">
                        <li class="contacts-list__item">
                            <a class="contacts-list__link" href="tel:+79206940404">8 (920) 694-04-04</a>
                        </li>
                        <li class="contacts-list__item">
                            <a class="contacts-list__link" href="mailto:supersemeyka69@yandex.ru">supersemeyka69@yandex.ru</a>
                        </li>
                        <li class="contacts-list__item">
                            <p class="contacts-list__address">г. Тверь ул. Псковская д. 4</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="map__wrap">
                <picture>
                    <source type="image/webp" media="(min-width: 768px)" srcset="img/map-tablet.webp">
                    <source type="image/webp" srcset="img/map-mobile.webp">

                    <source media="(min-width: 768px)" srcset="img/map-tablet.png">
                    <img class="map__image" src="img/map-mobile.png" alt="Центр расположен по адресу город Тверь улица Псковская дом 4">
                </picture>
            </div>
            <div class="map__interactive-map" id="map"></div>
        </div>
    </section>
</main>

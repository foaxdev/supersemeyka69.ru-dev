<main>
    <section class="photo-gallery">
        <h1 class="section-header section-header--main">Фотогалерея</h1>
        <ul class="photo-preview-list">
            <?php for ($i = 1; $i <= $photo_quantity; $i++): ?>
            <li class="photo-preview-list__item">
                <a href="img/photo/<?=$i;?>.jpg">
                    <picture>
                        <source type="image/webp" srcset="img/photo/<?=$i;?>-tablet.webp">

                        <img class="photo-preview-list__image" src="img/photo/<?=$i;?>-tablet.jpg" alt="Фотография с занятия">
                    </picture>
                </a>
                <div class="overlay"></div>
                <div class="modal">
                    <button class="modal__close-button" type="button">Закрыть</button>
                    <a href="img/photo/<?=$i;?>.jpg">
                        <picture>
                            <source type="image/webp" srcset="img/photo/<?=$i;?>-mobile.webp">

                            <img class="photo-preview-list__original-image modal__original-image" src="img/photo/<?=$i;?>-mobile.jpg" alt="Фотография с занятия">
                        </picture>
                    </a>
                </div>
            </li>
            <?php endfor; ?>
        </ul>
    </section>
</main>

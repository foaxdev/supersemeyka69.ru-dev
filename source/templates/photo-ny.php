<main>
    <section class="photo-gallery">
        <h1 class="section-header section-header--main">Фотогалерея</h1>
        <div class="photo-gallery__wrap">
            <ul class="photo-preview-list">
                <?php for ($i = 1; $i <= $photo_quantity; $i++): ?>
                <li class="photo-preview-list__item">
                    <a href="img/photo/ny/<?=$i;?>.jpg">
                        <picture>
                            <source type="image/webp" srcset="img/photo/ny/<?=$i;?>-tablet.webp">

                            <img class="photo-preview-list__image" src="img/photo/ny/<?=$i;?>-tablet.jpg" alt="Фотография с Нового года">
                        </picture>
                    </a>
                    <div class="overlay"></div>
                    <div class="modal">
                        <button class="modal__close-button" type="button">Закрыть</button>
                        <a href="img/photo/ny/<?=$i;?>.jpg">
                            <picture>
                                <source type="image/webp" srcset="img/photo/ny/<?=$i;?>-mobile.webp">

                                <img class="photo-preview-list__original-image modal__original-image" src="img/photo/ny/<?=$i;?>-mobile.jpg" alt="Фотография с Нового Года">
                            </picture>
                        </a>
                    </div>
                </li>
                <?php endfor; ?>
            </ul>
            <a class="modal-toggle-button modal-toggle-button--gallery" href="https://vk.com/album-183680411_269670083">Все фото</a>
        </div>
    </section>
</main>

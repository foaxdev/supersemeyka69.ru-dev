function initializeMainMenu(elButtonToggle, elMenuWrap, elMainTagline) {
    elButtonToggle.classList.add("header__button-toggle--show");
    elMenuWrap.classList.add("header__menu-wrap--hidden");
    elMainTagline.classList.add("header__tagline--hidden");

    elButtonToggle.addEventListener("click", function () {
        elButtonToggle.classList.toggle("header__button-toggle--opened");
        elMenuWrap.classList.toggle("header__menu-wrap--hidden");
    });
};

function initializeScheduleLogic(elsButtonToggleSchedule) {
    for (let i = 0; i < elsButtonToggleSchedule.length; i++) {
        let elSchedule = elsButtonToggleSchedule[i].nextElementSibling;
        if (elSchedule)
            elSchedule.classList.add("modal__image--hidden");
        elsButtonToggleSchedule[i].addEventListener("click", function () {
            elSchedule.classList.toggle("modal__image--hidden");
        });
    }
}

function initializeScheduleImagesLogic(elsSchedulePreviews) {
    for (let i = 0; i < elsSchedulePreviews.length; i++) {
        let elScheduleFullImage = elsSchedulePreviews[i].parentElement.parentElement.nextElementSibling;

        if (elScheduleFullImage && elsSchedulePreviews[i].parentElement) {
            elsSchedulePreviews[i].parentElement.addEventListener("click", function (evt) {
                evt.preventDefault();
                if (document.body.clientWidth >= 1200) {
                    elScheduleFullImage.classList.toggle("modal--show");
                    let elOverlay = document.querySelector(".overlay");
                    if (elOverlay)
                        elOverlay.classList.add("overlay--show");
                }
            });
        }
    }
}

function initializeCloseModalWindowLogic(elsScheduleButtonCloseModal) {
    for (let i = 0; i < elsScheduleButtonCloseModal.length; i++) {
        elsScheduleButtonCloseModal[i].addEventListener("click", function () {
            let elModalWindow = elsScheduleButtonCloseModal[i].parentElement;
            let elOverlay = document.querySelector(".overlay");
            if (elModalWindow && elOverlay) {
                elModalWindow.classList.toggle("modal--show");
                elOverlay.classList.toggle("overlay--show");
            }
        });
    }
}

function checkIfPageIsOnTheTop(elHeader) {
    elHeader.classList.toggle("header--scrollable", (window.pageYOffset >= 65));
}

let elButtonToggle = document.querySelector(".header__button-toggle");
let elMenuWrap = document.querySelector(".header__menu-wrap");
let elMainTagline = document.querySelector(".header__tagline");

if (elButtonToggle && elMenuWrap && elMainTagline)
    initializeMainMenu(elButtonToggle, elMenuWrap, elMainTagline);

let elsButtonToggleSchedule = document.querySelectorAll(".modal-toggle-button");
if (elsButtonToggleSchedule)
    initializeScheduleLogic(elsButtonToggleSchedule);

let elsSchedulePreviews = document.querySelectorAll(".modal__image");
if (elsSchedulePreviews)
    initializeScheduleImagesLogic(elsSchedulePreviews);

let elsScheduleButtonCloseModal = document.querySelectorAll(".modal__close-button");
if (elsScheduleButtonCloseModal)
    initializeCloseModalWindowLogic(elsScheduleButtonCloseModal);

window.addEventListener("scroll", function () {
    let elHeader = document.querySelector(".header");
    if (elHeader)
        checkIfPageIsOnTheTop(elHeader);
});

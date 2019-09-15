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
        let elModalImage = elsButtonToggleSchedule[i].nextElementSibling;
        if (elModalImage) {
            if (elModalImage.classList.contains("modal")) {
                elModalImage.classList.add("modal__image--hidden");
                elsButtonToggleSchedule[i].addEventListener("click", function () {
                    elModalImage.classList.toggle("modal__image--hidden");
                });
            }
            else {
                let elsModalImage = elsButtonToggleSchedule[i].nextElementSibling.querySelectorAll(".modal__image");
                for (let j = 0; j < elsModalImage.length; j++) {
                    elsModalImage[j].classList.add("modal__image--hidden");
                    elsButtonToggleSchedule[i].addEventListener("click", function () {
                        elsModalImage[j].classList.toggle("modal__image--hidden");
                    });
                }
            }
        }
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

function initializeTeachersInfo(elsTeachersToggleButtons) {
    for (let i = 0; i < elsTeachersToggleButtons.length; i++) {
        elsTeachersToggleButtons[i].addEventListener("click", function () {
            let elTeacherInfoWrap = elsTeachersToggleButtons[i].parentElement.nextElementSibling;
            if (elTeacherInfoWrap) {
                elTeacherInfoWrap.classList.toggle("teachers-list__info-wrap--hidden");
            }
        });
    }
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

let elsTeachersInfoWrap = document.querySelectorAll(".teachers-list__info-wrap");
if (elsTeachersInfoWrap)
    for (let i = 0; i < elsTeachersInfoWrap.length; i++)
        elsTeachersInfoWrap[i].classList.add("teachers-list__info-wrap--hidden");

let elsTeachersToggleButtons = document.querySelectorAll(".teachers-list__button-toggle");
if (elsTeachersToggleButtons) {
    initializeTeachersInfo(elsTeachersToggleButtons);

    let elTeacherInfoWrapCloseButton = document.querySelector(".teachers-list__close-button");
    let elTeachersWrap = elTeacherInfoWrapCloseButton.parentElement;
    if (elTeacherInfoWrapCloseButton && elTeachersWrap) {
        elTeacherInfoWrapCloseButton.addEventListener("click", function () {
            elTeachersWrap.classList.toggle("teachers-list__info-wrap--hidden");
        });
    }
}

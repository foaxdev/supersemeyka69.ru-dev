let initializeMainMenu = function(elButtonToggle, elMenuWrap, elMainTagline) {
    elButtonToggle.classList.add("header__button-toggle--show");
    elMenuWrap.classList.add("header__menu-wrap--hidden");
    elMainTagline.classList.add("header__tagline--hidden");

    elButtonToggle.addEventListener("click", function () {
        elButtonToggle.classList.toggle("header__button-toggle--opened");
        elMenuWrap.classList.toggle("header__menu-wrap--hidden");
    });
};

let elButtonToggle = document.querySelector(".header__button-toggle");
let elMenuWrap = document.querySelector(".header__menu-wrap");
let elMainTagline = document.querySelector(".header__tagline");

if (elButtonToggle && elMenuWrap && elMainTagline)
    initializeMainMenu(elButtonToggle, elMenuWrap, elMainTagline);



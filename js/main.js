/* smooth on scroll  */

/* SmoothScroll({
  animationTime: 400,
  stepSize: 55,
  accelerationDelta: 30,
  accelerationMax: 2,
  keyboardSupport: true,
  arrowScroll: 50,
  pulseAlgorithm: true,
  pulseScale: 4,
  pulseNormalize: 1,
  touchpadSupport: true,
}) */

/* scroll on click */

$(document).ready(function () {

  $("a").on('click', function (event) {
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;


      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 2000, function () {


        window.location.hash = hash;
      });
    } // End if
  });
});

$(function () {
  var header = $(".petxroblox__nav-main");
  $(window).scroll(function () {
    var scroll = $(window).scrollTop();

    if (scroll >= 1) {
      header.addClass('petxroblox__nav-main-fix');
    } else {
      header.removeClass("petxroblox__nav-main-fix");
    }
  });
});


var swiper = new Swiper(".mySwiper", {
  effect: "cube",
  grabCursor: true,
  cubeEffect: {
    shadow: true,
    slideShadows: true,
    shadowOffset: 20,
    shadowScale: 0.94,
  },
  pagination: {
    el: ".swiper-pagination",
  },
  autoplay: {
    delay: 4000,
  },
});


/* burger */

function openNavBurger() {
  document.getElementById("mySidenav").style.transform = "translateX(0)";
}


function closeNavBurger() {
  document.getElementById("mySidenav").style.transform = "translateX(-100vw)";
}


/* language */

// json
var langJSON = {
  "en" : {
    "hugePets" : "Huge Pets",
    "toyPets"  : "Toy Pets",
    "hardcorePets"  : "Hardcore Pets",
    "updatepets" : "SaintPatricks Update",
    "exclusivePets" : "Exclusive Pets",
    "exclusiveEggPets" : "Exclusive Egg Pets",
    "miscItems" : "Misc Items - Soon",
    "mythicalPets" : "Mythical Pets - Soon",
    "legendaryPets" : "Legendary Pets - Soon",
    "welcomeText1" : "WELCOME TO <span>Lunar Values</span>",
    "welcomeText2" : "<span>BROWSE</span> PSX VALUES HERE",
    "recentViews" : "RECENT VIEWS",
    "value" : "Pet Value",
    "gemvalue" : "Gem Value",
    "demand" : "Demand" ,
    "tier" : "Pet Tier",
    "vchange" : "Value Change",
    "hugetitle" : "Huge Pets",
    "proof" : "Pets are mostly valued via proof trades",
    "goBack" : "Main Page",
    "petDmg" : "Damage",
    "newPets" : "Rainbow Block Update",
    "soon" : "SOON",
    "priceUpdate" : "Last Updated: March 14th",
    "searchBtn" : "Search"
  },

  "ru" : {
    "hugePets"     : "Хуг Петы",
    "toyPets"  : "Петы с Промокодов покупки Игрушек",
    "hardcorePets"  : "Хардкор петы",
    "updatepets" : "Обновление - Святого Патрика ",
    "exclusivePets" : "Экслюзивные петы",
    "exclusiveEggPets" : "Экслюзивные петы из Яиц",
    "miscItems" : "Разные предметы - Скоро",
    "mythicalPets" : "Мистические петы - Скоро",
    "legendaryPets" : "Легендарные петы - Скоро",
    "welcomeText1" : "Добро пожаловать в <span>Lunar Values</span>",
    "welcomeText2" : "<span>ИЩИ</span> ВАЛЮТУ ПЕТА ЗДЕСЬ",
    "recentViews" : "Чаще Просматриваемые",
    "value" : "Ценность",
    "gemvalue" : "Цена в гемах",
    "demand" : "Спрос",
    "tier" : "Уровень Питомца",
    "vchange" : "Цена Изменилась",
    "hugetitle" : "Хуг Питомцы",
    "proof" : "Цена петов калибруется от постоянных трейдов",
    "goBack" : "Главная Страница",
    "petDmg" : "Урон",
    "soon" : "Скоро",
    "priceUpdate": "Последнее обновление: 14 Марта",
    "searchBtn" : "Поиск"
    
  }, 

  "ua" : {
    "hugePets"     : "Хуг пети",
    "toyPets"  : "Пети з Промокодів іграшок",
    "hardcorePets"  : "Хардкор пети",
    "updatepets" : "Оновлення - Святого Патрика",
    "exclusivePets" : "Ексклюзивні пети",
    "exclusiveEggPets" : "Екслюзивні пети з яєць",
    "miscItems" : "Різні предмети-Скоро",
    "mythicalPets" : "Містичні пети -Скоро",
    "legendaryPets" : "Легендарні пети-Скоро",
    "welcomeText1" : "Ласкаво просимо в <span>Lunar Values</span>",
    "welcomeText2" : "<span>ШУКАЙ</span> ВАЛЮТУ ПЕТА ТУТ",
    "recentViews" : "Частіше Переглядаються",
    "value" : "Цінність",
    "gemvalue" : "Ціна у гемах",
    "demand" : "Попит",
    "tier" : "Рівень пета",
    "vchange" : "Ціна змінилась",
    "hugetitle" : "Хуг Пети",
    "proof" : "Ціна петів калібрується від постійних трейдів",
    "goBack" : "Головна сторінка",
    "petDmg" : "шкода",
    "soon" : "Скоро",
    "priceUpdate": "Останнє оновлення: 14 Березня",
    "searchBtn" : "Пошук"
  }

  
}

// run function after page load :: get/set localstorage value and run function
document.addEventListener("DOMContentLoaded", function(event) {
  var appLang = localStorage.getItem('lang');

  // if no language value saved in local-storage, set en as default
  if(appLang === null){
    localStorage.setItem('lang', 'en'); // updaet local-storage

    // fun contentUpdate function with en value
    contentUpdate('en'); 

    // select radiobutton which has data-value = en
    document.querySelector('[data-value="en"]').checked = true; 
  }
  else{
    // fun contentUpdate function with value from local-storage - en, ru..
    contentUpdate(appLang); 

    // select radiobutton which has data-value == local storage value
    document.querySelector('[data-value="'+appLang+'"]').checked = true;
  }
});

// change innerhtml on radiobtn click
function changeLang(langVal){
  // set local-storage lang value from value given in onchange="changeLang(value)"
  localStorage.setItem('lang', langVal);

  // fun contentUpdate function with value from onchange="changeLang(value)"
  contentUpdate(langVal);
}

// content/innerhtml update/assign
function contentUpdate(cl){
  // get current langage contents in array
  var currLang = Object.entries(langJSON)[Object.keys(langJSON).indexOf(cl)][1],
      // get current language content array length
      /* langCont = Object.entries(currLang).length; */
      langCont = document.querySelectorAll('.langchange').length;

  for(let i = 0; i < langCont; i++){
    // get selectors which has .langchange classes
    var getSelector = document.querySelectorAll('.langchange')[i],
        // get data-key attribute from .langchange class selectors
        getAttr = getSelector.getAttribute('data-key');

    // assign the data-key value from current language array to the .langchange[data-key] selector
    getSelector.innerHTML = currLang[getAttr];
  }
}


/* search btn */
var searchInput = document.getElementById('search-input');
var searchButton = document.getElementById('search-button');
var searchResults = document.getElementById('search-results');

searchButton.addEventListener('click', function() {
  var searchText = searchInput.value.toLowerCase();
  var elements = document.getElementsByClassName('hugepets__name'); // заменяем на getElementsByClassName
  var found = false;

  for (var i = 0; i < elements.length; i++) {
    var element = elements[i];
    if (element.innerText.toLowerCase().indexOf(searchText) !== -1) {
      element.classList.add('search-highlight');
      if (!found) {
        // Прокручиваем страницу к найденному элементу
        element.scrollIntoView({behavior: "smooth", block: "start"});
        found = true;
      }
    } else {
      element.classList.remove('search-highlight');
    }
  }
});


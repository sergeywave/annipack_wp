"use strict";
const body = document.body;
const header = document.querySelector('.header')
const menuBurger = document.querySelector('.header__burger')
const menuBurgerInner = document.querySelector('.header-buger__inner')
const navigation = document.querySelector('.header__nav-list')
const headerTel = document.querySelector('.header-tel') 
const goodPriceIocn = document.querySelector('.good-price-icon')
const helpIcon = document.querySelector(".help-icon")
const exchangeIcon = document.querySelector(".exchange-icon")
const boxIcon = document.querySelector(".box-icon")
const qualityIcon = document.querySelector(".quality-icon")
const timeIcon = document.querySelector(".time-icon")
const callFooter = document.querySelector('.footer-calls-block')
const emailFooter = document.querySelector('.footer-email')
const addressFooter = document.querySelector("footer .address")
const hmLinks = document.querySelectorAll('.header__nav-list li a')


// Mobile menu

menuBurger.onclick = function () {
  menuBurger.classList.toggle("open");
  header.classList.toggle("mobile-menu-opened");
};



for (let link of hmLinks) {
    link.addEventListener('click', () => {
      body.classList.remove("no-scroll");
      menuBurger.classList.remove("open");
      header.classList.remove("mobile-menu-opened");
    })
}
  
  
// Замена фото на мобильном устройстве
function updateImageSrc() {

    if (window.innerWidth <= 500) {
        goodPriceIocn.src = 'https://%D1%8D%D0%BD%D0%BD%D0%B8%D0%BF%D0%B0%D0%BA.%D1%80%D1%84/wp-content/themes/annipack/assets/img/icons/why-we-1-mobile.svg';
        helpIcon.src = 'https://%D1%8D%D0%BD%D0%BD%D0%B8%D0%BF%D0%B0%D0%BA.%D1%80%D1%84/wp-content/themes/annipack/assets/img/icons/why-we-2-mobile.svg';
        exchangeIcon.src = 'https://%D1%8D%D0%BD%D0%BD%D0%B8%D0%BF%D0%B0%D0%BA.%D1%80%D1%84/wp-content/themes/annipack/assets/img/icons/why-we-3-mobile.svg';
        boxIcon.src = 'https://%D1%8D%D0%BD%D0%BD%D0%B8%D0%BF%D0%B0%D0%BA.%D1%80%D1%84/wp-content/themes/annipack/assets/img/icons/why-we-4-mobile.svg';
        qualityIcon.src = 'https://%D1%8D%D0%BD%D0%BD%D0%B8%D0%BF%D0%B0%D0%BA.%D1%80%D1%84/wp-content/themes/annipack/assets/img/icons/why-we-5-mobile.svg';
        timeIcon.src = 'https://%D1%8D%D0%BD%D0%BD%D0%B8%D0%BF%D0%B0%D0%BA.%D1%80%D1%84/wp-content/themes/annipack/assets/img/icons/why-we-6-mobile.svg';
    } else {
        goodPriceIocn.src = 'https://%D1%8D%D0%BD%D0%BD%D0%B8%D0%BF%D0%B0%D0%BA.%D1%80%D1%84/wp-content/themes/annipack/assets/img/icons/why-we-1.svg';
        helpIcon.src = 'https://%D1%8D%D0%BD%D0%BD%D0%B8%D0%BF%D0%B0%D0%BA.%D1%80%D1%84/wp-content/themes/annipack/assets/img/icons/why-we-2.svg';
        exchangeIcon.src = 'https://%D1%8D%D0%BD%D0%BD%D0%B8%D0%BF%D0%B0%D0%BA.%D1%80%D1%84/wp-content/themes/annipack/assets/img/icons/why-we-3.svg';
        boxIcon.src = 'https://%D1%8D%D0%BD%D0%BD%D0%B8%D0%BF%D0%B0%D0%BA.%D1%80%D1%84/wp-content/themes/annipack/assets/img/icons/why-we-4.svg';
        qualityIcon.src = 'https://%D1%8D%D0%BD%D0%BD%D0%B8%D0%BF%D0%B0%D0%BA.%D1%80%D1%84/wp-content/themes/annipack/assets/img/icons/why-we-5.svg';
        timeIcon.src = 'https://%D1%8D%D0%BD%D0%BD%D0%B8%D0%BF%D0%B0%D0%BA.%D1%80%D1%84/wp-content/themes/annipack/assets/img/icons/why-we-6.svg';
    }
}


updateImageSrc();



// Подмена картинки главного экрана 

document.addEventListener("DOMContentLoaded", () => {
    const bannerLink = document.querySelector(".section-main-screen__img");
    const bannerImg = bannerLink.querySelector("img");
    const imgSrc1 = "https://xn--80aphjan8g.xn--p1ai/wp-content/themes/annipack/assets/img/main-banner.png";
    const imgSrc2 = "https://xn--80aphjan8g.xn--p1ai/wp-content/themes/annipack/assets/img/second-banner.png";

    bannerLink.addEventListener("click", (event) => {
        event.preventDefault();
        bannerImg.src = bannerImg.src === imgSrc1 ? imgSrc2 : imgSrc1;
    });
});



//Табы
function showContent(contentId) {
  // Сначала скрываем все контенты
  const contents = document.querySelectorAll('.tab-content');
  contents.forEach(content => {
      content.style.display = 'none'; // Скрываем все содержимое
  });

  // Показываем только выбранный контент
  document.getElementById(contentId).style.display = 'block';

  // Сбрасываем активный класс у всех кнопок
  const tabs = document.querySelectorAll('.tab-btn');
  tabs.forEach(tab => {
      tab.classList.remove('active'); // Убираем класс 'active'
  });

  // Добавляем активный класс к выбранной кнопке
  const activeTab = Array.from(tabs).find(tab => tab.htmlFor === 'tab-btn-' + contentId.replace('content-', ''));
  if (activeTab) {
      activeTab.classList.add('active'); // Добавляем класс 'active' к активной кнопке
  }
}

// Инициализация
document.addEventListener('DOMContentLoaded', () => {
  // Добавляем обработчики событий на радиокнопки
  const radioButtons = document.querySelectorAll('input[name="tab-btn"]');
  radioButtons.forEach(radio => {
      radio.addEventListener('change', () => {
          // Получаем ID контента по ID радиокнопки
          const contentId = 'content-' + radio.id.split('-')[2]; 
          showContent(contentId); // Показываем соответствующее содержимое
      });
  });

  showContent('content-1'); // Показываем первое содержимое при загрузке
});

// Всплывающее окно
const popupBacking = document.querySelector('.popup__wrapper');
const unsPopup = document.querySelector('.popup-request');
const enterPopup = document.querySelector('.enter-popup');
const popupBtnUns = document.querySelector('.popup-request__btn');
const unsPopupOpen = document.querySelectorAll('.popup-btn');

unsPopupOpen.forEach(item => {
    if (item) {
        item.onclick = function(evt) {
            evt.preventDefault();
            unsPopup.classList.add('fade-in');
            unsPopup.classList.remove('fade-out');
            popupBacking.style.display = "flex";
            document.body.classList.add('no-scroll');

            setTimeout(() => {
                popupBacking.style.opacity = "1";
            }, 100);
        };
    }
})

if (popupBtnUns) {
    popupBtnUns.onclick = function() {
        unsPopup.classList.add('fade-out');
        unsPopup.classList.remove('fade-in');
        popupBacking.style.opacity = "0";
        document.body.classList.remove('no-scroll');

        setTimeout(() => {
            popupBacking.style.display = "none";
        }, 300);
    };
}

if (popupBacking) {
    popupBacking.onclick = function(evt) {
    evt.stopPropagation();
    if (evt.target.classList.contains('popup__wrapper')) {
        unsPopup.classList.add('fade-out');
        unsPopup.classList.remove('fade-in');
        popupBacking.style.opacity = "0";
        document.body.classList.remove('no-scroll');
        
        setTimeout(() => {
            popupBacking.style.display = "none";
        }, 300);
    }
  };
}


// Добавляем обработчик события для изменения размера окна
window.addEventListener('resize', function() {
    // updateImageSrc();
    // updateFooter();
});

// Форма CF7 

document.addEventListener('DOMContentLoaded', () => {
    document.addEventListener('wpcf7mailsent', function(event) {
        const messageBox = document.querySelector('.popup-success-message'); // Блок сообщения
        const closeBtn = document.querySelector('.close-success-message'); // Кнопка закрытия

        if (messageBox) {
            messageBox.style.display = 'flex'; // Показываем сообщение
            document.querySelector('.popup-request').classList.remove('fade-in');

            // Закрытие по клику на кнопку
            closeBtn.addEventListener('click', () => {
                messageBox.style.display = 'none';
                document.querySelector('.popup__wrapper').style.display = "none";
                document.querySelector('.popup__wrapper').style.opacity = "0";
                document.body.classList.remove('no-scroll');
            });

            // Авто-скрытие через 5 секунд
            setTimeout(() => {
                messageBox.style.display = 'none';
                document.querySelector('.popup__wrapper').style.display = "none";
                document.querySelector('.popup__wrapper').style.opacity = "0";
                document.body.classList.remove('no-scroll');
            }, 5000);
        }
    }, false);
});


// Маска формы 

document.addEventListener('DOMContentLoaded', () => {
    const eventCallback = (e) => {
        const el = e.target;
        const matrixDef = "+7 (___) ___-__-__";
        let i = 0;
        const def = matrixDef.replace(/\D/g, "");
        let val = el.value.replace(/\D/g, "");

        if (e.type === 'blur' && val.length < matrixDef.match(/([\_\d])/g).length) {
            el.value = '';
            return;
        }

        if (def.length >= val.length) val = def;

        el.value = matrixDef.replace(/./g, (a) => /[_\d]/.test(a) && i < val.length ? val.charAt(i++) : i >= val.length ? "" : a);
    };

    const phoneInputs = document.querySelectorAll('input[type="tel"]');

    phoneInputs.forEach(elem => {
        ['input', 'blur', 'focus'].forEach(ev => {
            elem.addEventListener(ev, eventCallback);
        });
    });
});



// document.addEventListener('DOMContentLoaded', () => {
//     document.addEventListener('wpcf7mailsent', function(event) {
//         // Проверяем, есть ли уже сообщение, чтобы не дублировать
//         if (document.querySelector('.cf7-success-message')) return;

//         // Создаем контейнер для сообщения
//         const messageBox = document.createElement('div');
//         messageBox.classList.add('cf7-success-message');
//         messageBox.innerHTML = `
//             <div class="cf7-message-content">
//                 <span class="cf7-message-text">Ваше сообщение успешно отправлено!</span>
//                 <button class="cf7-close-btn">&times;</button>
//             </div>
//         `;

//         // Добавляем сообщение в конец <body>
//         document.body.appendChild(messageBox);

//         // Обработчик закрытия по клику на кнопку
//         document.querySelector('.cf7-close-btn').addEventListener('click', () => {
//             messageBox.remove();
//         });

//         // Удаляем сообщение автоматически через 5 секунд
//         setTimeout(() => {
//             if (messageBox) messageBox.remove();
//         }, 5000);
//     }, false);
// });



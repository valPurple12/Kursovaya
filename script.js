'use strict';
const curtain = document.getElementById('curtain');
document.querySelector('.rainbow-button').addEventListener('click', function () {
    curtain.classList.add('hidden');
});

const swiper = new Swiper('.swiper-container', {
    effect: 'cards',
    grabCursor: true,
    cardsEffect: {
        slideShadows: true
    },
    autoplay: {
        delay: 8000,
        disableOnInteraction: false,
    },
    loop: true,
});
// const slider = document.getElementById('carouselExample');
// const curtain = document.getElementById('curtain');
// let showSlider = () => {
//    if (curtain.classList.contains('hidden')) {
//       slider.init();
//    } else {
//       slider.destroy();
//    }
// };

// document.addEventListener('DOMContentLoaded', () => {
//    const blocks = document.querySelectorAll('.block');

//    blocks.forEach(block => {
//        const randomDuration = Math.random() * (5 - 1) + 5; // Время от 5 до 10 секунд
//        const randomDelay = Math.random() * 3; // Случайная задержка до 5 секунд
//        block.style.animationDuration = `${randomDuration}s`;
//        block.style.animationDelay = `${randomDelay}s`;
//    });
// });

let timeout;
const chefBlock = document.getElementById('about-masterclass');
const adBlock = document.getElementById('ad');
const closeModal = document.getElementById('closeModal');
const modal_content = document.getElementsByClassName("modal-content")
const modal = document.getElementById("myModal");
const span = document.getElementsByClassName("close")[0];

adBlock.onclick = function () {
    modal.style.display = "block";
}

adBlock.addEventListener('click', () => {
    modal.style.display = "block";
})

span.addEventListener('click', () => {
    modal.style.display = "none";
    adBlock.style.display = "none";
})

closeModal.addEventListener('click', () => {
    adBlock.style.display = "none";
    modal.style.display = "none";
    modal_content.style.display = "none";
})

chefBlock.addEventListener('mouseenter', () => {
    timeout = setTimeout(() => {
        adBlock.classList.add('show');
        console.log('блок показался');
        // adBlock.style.animation = 'shake 0.5s infinite';
    }, 5000);
});

chefBlock.addEventListener('mouseleave', () => {
    clearTimeout(timeout);
    // adBlock.classList.remove('show'); 
    // adBlock.setAttribute('hidden', 'hidden')
});


// window.onclick = function (event) {
//     if (event.target == modal) {
//         modal.style.display = "none";
//     }
// }


//let galleryBlock = document.getElementById('galleryArticle');

// let master_photo = document.getElementById('masterPhoto');
// let spanName = document.getElementById('name-master');

// master_photo.addEventListener('mouseenter', ()=>{
//     spanName.style.textDecoration = "underline";
//     spanName.style.textDecorationColor = "white";
// })

// const startButton = document.getElementById('start-game');
// startButton.addEventListener('click', function() {
//     document.getElementById('form').style.display = 'none';
//     document.getElementById('gameArea').style.display = 'block';
//     setupGame(); 
// });

const forms = document.querySelectorAll('.needs-validation')

// Loop over them and prevent submission
Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
        if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
        }

        form.classList.add('was-validated')
    }, false)
})



// var form = document.getElementById('registrationForm')

// form.addEventListener('submit', function (event) {
//     if (!form.checkValidity()) {
//         event.preventDefault()
//         event.stopPropagation()
//     }

//     form.classList.add('was-validated')
// }, false)

// document.addEventListener("DOMContentLoaded", function() {
//     const phoneInput = document.getElementById('num');

//     // Установить начальное значение
//     phoneInput.value = '+7 ';

//     // Обработчик события фокуса
//     phoneInput.addEventListener('focus', function() {
//         if (phoneInput.value === '+7 ') {
//             phoneInput.value = '';
//         }
//     });

//     // Обработчик события потери фокуса
//     phoneInput.addEventListener('blur', function() {
//         if (phoneInput.value === '') {
//             phoneInput.value = '+7 ';
//         }
//     });
// });

function formatPhone(input) {
    // Удаляем все не цифры
    let cleaned = input.value.replace(/\D/g, '');

    // Проверяем длину номера
    if (cleaned.length > 11) {
        cleaned = cleaned.substring(0, 10); // Максимальная длина номера
    }

    // Форматируем номер
    const match = cleaned.match(/(\d{0,1})(\d{0,3})(\d{0,3})(\d{0,2})(\d{0,2})/);
    if (match) {
        // Создаем форматированный номер
        input.value = `+${match[1]} (${match[2]}) ${match[3]}-${match[4]}-${match[5]}`;
    }
}

const emailInput = document.getElementById('email');

emailInput.addEventListener('input', function () {
    const value = emailInput.value;
    // Если символ `@` еще не был введен
    if (value.indexOf('@') === -1) {
        // Проверяем, идет ли курсор после введенного текста
        const cursorPosition = emailInput.selectionStart;

        // Если курсор все равно перед последним символом, добавляем `@`
        if (cursorPosition === value.length) {
            // Если это первая попытка ввода email
            if (value.length > 0) {
                emailInput.value = value + '@';
            }
        }
    }
}
)

document.addEventListener("DOMContentLoaded", function() {
    let mouseX = 0;
    let mouseY = 0;
    let flashlight = document.getElementById("flashlight");

    const isTouchDevice = () => {
        try {
            document.createEvent("TouchEvent");
            return true;
        } catch (e) {
            return false;
        }
    };

    function getMousePosition(e) {
        mouseX = !isTouchDevice() ? e.pageX : e.touches[0].pageX;
        mouseY = !isTouchDevice() ? e.pageY : e.touches[0].pageY;

        flashlight.style.setProperty("--Xpos", mouseX + "px");
        flashlight.style.setProperty("--Ypos", mouseY + "px");
    }

    document.addEventListener("mousemove", getMousePosition);
    document.addEventListener("touchmove", getMousePosition);
});



document.querySelectorAll('.gal-block').forEach(item => {
    item.addEventListener('mouseenter', event => {
        const newImage = item.getAttribute('data-image');
        document.getElementById('galleryImage').src = newImage;
        document.getElementById('galleryImage').style.maxWidth = '500px';
        document.getElementById('galleryImage').style.maxHeight = '400px';
    });
});
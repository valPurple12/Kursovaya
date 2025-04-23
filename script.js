'use strict';
const curtain = document.getElementById('curtain');
document.querySelector('.rainbow-button').addEventListener('click', function () {
    curtain.classList.add('hidden');
});

//отзывы
const swiperGallery = new Swiper('.gallery-swiper', {
    effect: 'cards',
    grabCursor: true,
    cardsEffect: {
        slideShadows: true
    },
    autoplay: {
        delay: 8000,
        disableOnInteraction: true,
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


//мини-игра
let timeout;
const chefBlock = document.getElementById('about-masterclass');
const adBlock = document.getElementById('ad');
const closeModal = document.getElementById('closeModal');
const modal = document.getElementById("myModal");
const span = document.getElementsByClassName("close")[0];

adBlock.addEventListener('click', () => {
    modal.style.display = "block";
});

span.addEventListener('click', () => {
    modal.style.display = "none";
    adBlock.style.display = "none";
});

closeModal.addEventListener('click', (e) => {
    e.stopPropagation();
    adBlock.style.display = "none";
});

chefBlock.addEventListener('mouseenter', () => {
    timeout = setTimeout(() => {
        adBlock.classList.add('show');
    }, 5000);
});

chefBlock.addEventListener('mouseleave', () => {
    clearTimeout(timeout);
});

window.addEventListener('message', function(event) {
    if (typeof event.data === 'object' && event.data.type) {
        switch(event.data.type) {
            case 'GAME_WIN':
                document.getElementById('modalMessage').textContent = event.data.text;
                document.getElementById('modal').style.display = 'block';
                break;
                
            case 'GAME_OVER':
                document.getElementById('modalMessage').textContent = event.data.text;
                document.getElementById('modal').style.display = 'block';
                break;
                
            case 'HIDE_BACKGROUND':
                document.querySelector('.tetris-container').style.backgroundImage = 'none';
                break;
        }
    }
    else if (typeof event.data === 'string') {
        document.getElementById('modalMessage').textContent = event.data;
        document.getElementById('modal').style.display = 'flex';
    }
});

//hover имя
document.getElementById('masterPhoto').addEventListener('mouseenter', () => {
    document.getElementById('name-master').classList.add('underline');
});

document.getElementById('masterPhoto').addEventListener('mouseleave', () => {
    document.getElementById('name-master').classList.remove('underline');
});


//фонарик
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
    const rect = flashlight.getBoundingClientRect();
    const mouseX = !isTouchDevice() ? e.clientX - rect.left : e.touches[0].clientX - rect.left;
    const mouseY = !isTouchDevice() ? e.clientY - rect.top : e.touches[0].clientY - rect.top;

    flashlight.style.setProperty("--Xpos", mouseX + "px");
    flashlight.style.setProperty("--Ypos", mouseY + "px");
}

document.addEventListener("mousemove", getMousePosition);
document.addEventListener("touchmove", getMousePosition);


//блок для кого мастер-класс

document.querySelectorAll('.gal-block').forEach(item => {
    item.addEventListener('mouseenter', event => {
        const newImage = item.getAttribute('data-image');
        document.getElementById('galleryImage').src = newImage;
        document.getElementById('galleryImage').style.maxWidth = '500px';
        document.getElementById('galleryImage').style.maxHeight = '400px';
    });
});

//мастер-фото
var coverSwiper = new Swiper('.coverflow-container', {
    effect: 'coverflow',
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: 'auto',
    coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: false,
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    navigation: false,
});

//слайдер
document.addEventListener('DOMContentLoaded', function() {
    // Устанавливаем интервал переключения (в миллисекундах)
    const myCarousel = document.querySelector('#heroCarousel');
    const carousel = new bootstrap.Carousel(myCarousel, {
      interval: 5000, // 3 секунды вместо стандартных 5
      ride: 'carousel',
      wrap: true
    });
    
    // Плавное масштабирование при переключении
    myCarousel.addEventListener('slide.bs.carousel', function() {
      const activeItem = this.querySelector('.carousel-item.active');
      if (activeItem) {
        const img = activeItem.querySelector('img');
        img.style.transform = 'scale(1)';
      }
    });
    
    myCarousel.addEventListener('slid.bs.carousel', function() {
      const activeItem = this.querySelector('.carousel-item.active');
      if (activeItem) {
        const img = activeItem.querySelector('img');
        img.style.transform = 'scale(1.03)';
      }
    });
  });




  //квиз
  document.addEventListener('DOMContentLoaded', ()=>{
    const qiuzSection = document.getElementById('quiz-section');
    const showQuiz = document.getElementById('start-quiz');

    showQuiz.addEventListener('click', (e)=>{
        e.preventDefault();
        qiuzSection.classList.remove('d-none');
        qiuzSection.scrollIntoView({behavior: 'smooth'});

        showQuiz.classList.add('d-none');
    })
   

    const steps = document.querySelectorAll('.quiz-step');
    const resultSection = document.querySelector('.quiz-result');
    const resultTitle = document.getElementById('result-title');
    const resultText = document.getElementById('result-text');
    const resultImage = document.getElementById('result-image');
    const restartBtn = document.getElementById('quiz-restart');
    
    let currentStep = 1;
    let answers = {};
 
    document.querySelectorAll('.quiz-options button').forEach(button => {
      button.addEventListener('click', (e) => {
        const step = e.target.closest('.quiz-step');
        const question = step.querySelector('h3').textContent;
        const answer = e.target.dataset.value;
        
        answers[question] = answer;
    
        step.classList.add('d-none');
        step.classList.remove('active');

        if (currentStep < steps.length) {
          currentStep++;
          document.querySelector(`.quiz-step[data-step="${currentStep}"]`).classList.remove('d-none');
          document.querySelector(`.quiz-step[data-step="${currentStep}"]`).classList.add('active');
        } else {
          showResult();
        }
      });
    });
    
    function showResult() {
      let result = '';
      let description = '';
      let image = '';
      
      if (answers['Какой крем вам больше нравится?'] === 'vanilla') {
        result = 'Классический Наполеон';
        description = 'Ваш идеальный торт — нежные коржи с ванильным кремом, лёгкая сладость и воздушная текстура.';
        image = 'IMG/classic-napoleon.jpg';
      } 
      else if (answers['Какой крем вам больше нравится?'] === 'caramel') {
        result = 'Карамельный бунтарь';
        description = 'Вы любите глубину вкуса! Ваш Наполеон — с карамелизированными коржами и солёной карамелью.';
        image = 'IMG/caramel-napoleon.jpg';
      }
      else if (answers['Какой крем вам больше нравится?'] === 'chocolate') {
        result = 'Шоколадный бум';
        description = 'Вы любите креативные решения и шоколадные нотки в десертах! Ваш Наполеон - шоколадный';
        image = 'IMG/chocolate-napoleon.jpg';
      }
      else if (answers['Какой крем вам больше нравится?'] === 'sour') {
        result = 'Ягодная яркость';
        description = 'Вы ценитель классики, но любите нестандартные решения! Определенно, Ягодный Наполеон, без сомнений)';
        image = 'IMG/berry-napoleon.jpg';
      }

      resultTitle.textContent = result;
      resultText.textContent = description;
      resultImage.src = image;
      resultSection.classList.remove('d-none');
    }

    restartBtn.addEventListener('click', () => {
      currentStep = 1;
      answers = {};
      resultSection.classList.add('d-none');
      steps.forEach(step => {
        step.classList.add('d-none');
        step.classList.remove('active');
      });
      
      document.querySelector(`.quiz-step[data-step="1"]`).classList.remove('d-none');
      document.querySelector(`.quiz-step[data-step="1"]`).classList.add('active');
    });
  });


const forms = document.querySelectorAll('.needs-validation')

Array.from(forms).forEach(form => {
  form.addEventListener('submit', event => {
    if (!form.checkValidity()) {
      event.preventDefault()
      event.stopPropagation()
    }

    form.classList.add('was-validated')
  }, false)
})

function formatPhone(input) {
  let cleaned = input.value.replace(/\D/g, '');
  
  if (cleaned.length > 11) {
    cleaned = cleaned.substring(0, 11);
  }
  const match = cleaned.match(/(\d{0,1})(\d{0,3})(\d{0,3})(\d{0,2})(\d{0,2})/);
  if (match) {
    input.value = `+${match[1]} (${match[2]}) ${match[3]}-${match[4]}-${match[5]}`;
  }
  
  input.setCustomValidity(cleaned.length < 11 ? "Пожалуйста, введите телефон полностью" : "");
}

document.getElementById('registrationForm').addEventListener('submit', function(e) {
  e.preventDefault();
  
  const form = e.target;
  const formData = new FormData(form);
  
  if (!form.checkValidity()) {
      form.classList.add('was-validated');
      return;
  }
  
  fetch('register.php', {
      method: 'POST',
      body: formData
  })
  .then(response => response.json())
  .then(data => {
      if (data.success) {
          // Сбрасываем форму
          form.reset();
          form.classList.remove('was-validated');
          
          // Показываем модальное окно
          const modal = new bootstrap.Modal(document.getElementById('successModal'));
          modal.show();
      } else {
          alert('Ошибка: ' + (data.message || 'Произошла ошибка при отправке'));
      }
  })
  .catch(error => {
      console.error('Error:', error);
      alert('Произошла ошибка при отправке формы');
  });
});
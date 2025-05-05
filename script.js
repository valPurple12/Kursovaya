'use strict';
const curtain = document.getElementById('curtain');
let offLight = document.getElementById('off');
let onLight = document.getElementById('on');


//шторы
document.querySelector('.switch').addEventListener('click', ()=>{
  onLight.remove();
  offLight.removeAttribute('hidden');
  curtain.classList.add('animation-start');
  curtain.classList.add('start-up');
  console.log('функция рабоатет');
})

//прокрутка хэдэра
let lastScroll = 0;
const navbar = document.getElementById('smart-navbar');

window.addEventListener('scroll', () => {
  const currentScroll = window.pageYOffset;
  
  if (currentScroll <= 5) {
    navbar.classList.remove('translate-middle-y', 'opacity-0', 'invisible');
    return;
  }
  
  if (currentScroll > lastScroll) {
    navbar.classList.add('translate-middle-y', 'opacity-0', 'invisible');
  } else {
    navbar.classList.remove('translate-middle-y', 'opacity-0', 'invisible');
  }
  
  lastScroll = currentScroll;
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


//мини-игра
let timeout;
let clickAd = false;
let promoInput = document.getElementById('promo');
const chefBlock = document.getElementById('about-masterclass');
const adBlock = document.getElementById('ad');
const closeModal = document.getElementById('closeModal');
const modal = document.getElementById("myModal");
const span = document.getElementsByClassName("close")[0];

adBlock.addEventListener('click', () => {
    modal.style.display = "block";
    clickAd = true;
    promoInput.removeAttribute('disabled');
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
        console.log('блок показался');
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
    e.preventDefault();
}

document.addEventListener("mousemove", getMousePosition);
document.addEventListener("touchmove", getMousePosition);


//блок с гифкой
const initialGif = document.getElementById('initialGif'); 
const galleryBlocks = document.querySelectorAll('.gal-block'); 
const galleryImageBlock = document.querySelector('.gallery-block'); 
const galleryText = document.querySelector('.gallery-text');

let isGifJumped = false;

const textMessages = [
  "Вы можете не переживать из-за Вашего уровня в кондитерском деле. На нашем мастер классе, под руководством опытных шеф-кондитеров у Вас всё получится, мы даём 100% гарантию",
  "...развиваться в кондитерском направлении? Начните с нашего мастер-класса!",
  "...работами профессиональных кондитеров? Теперь вы сможете так же!",
  "...дома и хотите научиться чему-то новому? У нас есть новые рецепты для вас!"
];

initialGif.addEventListener('mouseenter', () => {
  if (!isGifJumped) {
    initialGif.remove(); 
    galleryBlocks[0].insertAdjacentHTML('beforeend', 
      '<img src="IMG/output-onlinegiftools.gif" class="jumping-gif" style="width: 70px; position: absolute; right: 10px; top: 10px; margin: 5px;">'
    );
    isGifJumped = true;
  }
});

galleryBlocks.forEach((block, index) => {
  block.addEventListener('mouseenter', () => {
    if (!isGifJumped) return;

    const newImage = block.getAttribute('data-image');
    galleryImageBlock.innerHTML = `<img src="${newImage}" style="max-width: 500px; max-height: 400px;">`;
    galleryText.textContent = textMessages[index];
    const currentGif = document.querySelector('.jumping-gif');
    if (currentGif) currentGif.remove();
    const nextIndex = (index + 1) % galleryBlocks.length; 
    galleryBlocks[nextIndex].insertAdjacentHTML('beforeend', 
      '<img src="IMG/output-onlinegiftools.gif" class="jumping-gif" style="width: 70px; position: absolute; right: 10px; top: 10px; margin: 5px;">'
    );
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
    const myCarousel = document.querySelector('#heroCarousel');
    const carousel = new bootstrap.Carousel(myCarousel, {
      interval: 5000, 
      ride: 'carousel',
      wrap: true
    });
    
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


//валидация формы регистрации
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
          form.reset();
          form.classList.remove('was-validated');
          
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
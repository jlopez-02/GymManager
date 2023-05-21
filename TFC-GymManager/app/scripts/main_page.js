$(document).ready(function () {
    let title_delay = 1200;
    animated_title(title_delay);
    galery_hover();
    initialize_slider();
    initialize_card_slider();
    today_date();
});

function today_date() {
  let today = new Date().toISOString().split('T')[0];
  $('input[type="date"]:not(.birthdate_input)').attr('min', today);
  
}



function animated_title(title_delay){
    $(".welcome_sub_title").css("opacity", 0);
    $(".hover_text").css("opacity", 0);
    $(".welcome_title").addClass("typing");

    setTimeout( () => {
        $(".welcome_sub_title").css("opacity", 1);
        $(".welcome_sub_title").addClass("typing");
    }, title_delay);

    setTimeout( () => {
        $(".hover_text").css("opacity", 1);
        $(".hover_text").addClass("blur-in");
    }, title_delay + 1000);


    
}

function galery_hover(){
    $(".image_galery img").each(function(index) {
    const text = ["Entrenamiento individual", "Entrenamiento personal", "Actividades dirigidas"][index];
    $(this).hover(function() {
      $(".hover_text").text(text);
      $(".hover_text").addClass("typing");
    }, function() {
      $(".hover_text").text("¡Entrena con nosotros!");
      $(".hover_text").removeClass("typing");
    });
  });
}

function initialize_slider() {
  const swiper = new Swiper('.swiper', {
    
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
    
    loop: true,
    centerSlide: 'true',
    fade: 'true',
    grabCursor: 'true',
  
    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
    },
  
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next-image',
      prevEl: '.swiper-button-prev-image',
    },
  
  });
}

function initialize_card_slider(){
  var swiper = new Swiper(".slide-content", {
    slidesPerView: 3,
    spaceBetween: 25,
    loop: true,
    centerSlide: 'true',
    fade: 'true',
    grabCursor: 'true',
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
      dynamicBullets: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },

    breakpoints:{
        0: {
            slidesPerView: 1,
        },
        520: {
            slidesPerView: 2,
        },
        950: {
            slidesPerView: 3,
        },
    },
  });
}


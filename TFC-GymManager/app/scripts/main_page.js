$(document).ready(function () {
    let title_delay = 1200;
    animated_title(title_delay);
    galery_hover();
    initialize_slider();
    
    
});



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
  
    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
    },
  
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  
  });
}


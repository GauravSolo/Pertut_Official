var swiper = new Swiper(".mySwiper", {
    slidesPerView: $(".swiper-slide").length,
        spaceBetween: 100,
        slidesPerGroup: 2,
        loop: true,
        loopFillGroupWithBlank: true,
    centeredSlides: true,
    autoplay: {
      delay: 2000,
      disableOnInteraction: false,
    }
  });
 

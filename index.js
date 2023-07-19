'use strict'
document.addEventListener("DOMContentLoaded", e => {

  const a = document.querySelector('.about-img1');
  const b = document.querySelector('.about-img3');
  const c = document.querySelector('.place-image');
  const cc = document.querySelector('.place-title-list');
  const commentsBlock = document.querySelector('.comments-block');
  const contactsInfo = document.querySelector('.contacts-info-block');
  const socialBlock = document.querySelector('.social-block');
  const aboutWrap = document.querySelector('.about-wrap3');

  window.addEventListener('scroll', e => {
    e.preventDefault();

    if (scrollY >= 500) {
      a.classList.add('square-animation-rev')
      b.classList.add('square-animation')
      aboutWrap.classList.add('square-animation')
    }

    if (scrollY >= 1200) {
      c.classList.add('square-animation')
      cc.classList.add('square-animation-rev')
    }

    if (scrollY >= 4100) {
      commentsBlock.classList.add('square-animation');
      contactsInfo.classList.add('square-animation-rev');
    }

    if (scrollY >= 4300) {
      socialBlock.classList.add('square-animation-bottom')
    }
  })

  const aboutImg = document.querySelectorAll('.aboutImage3');
  const arrowLeft = document.querySelector('.video-arrow-left');
  const arrowRight = document.querySelector('.video-arrow-right');
  const dots = document.querySelectorAll('.dots1');

  let slyderCounter = 1;

  function slyderCardFun() {

    if (slyderCounter > aboutImg.length) {
      slyderCounter = 1;
    }

    if (slyderCounter < 1) {
      slyderCounter = aboutImg.length;
    }

    aboutImg.forEach(item => {
      return item.style.display = "none"
    });

    dots.forEach(item => {
      item.id= 'none';
    })

    dots[slyderCounter - 1].id = 'slick-active11';

    aboutImg[slyderCounter - 1].style.display = 'block';
  }

  slyderCardFun(slyderCounter);


  arrowLeft.addEventListener("click", (e) => {
    e.preventDefault();
    slyderCounter -= 1;
    slyderCardFun();
  })

  arrowRight.addEventListener("click", (e) => {
    e.preventDefault();
    slyderCounter += 1;
    slyderCardFun();
  })

  slyderCardFun()

})

$(document).ready(function () {
  $('.slider').slick({
    arrows: true, // показать стрелки
    dots: false, // не показывать точки
    slidesToShow: 1, // показывать по 3 слайда
    autoplay: false, // автоматическое проигрывание слайдов
    prevArrow: `<svg class="arrow-left" xmlns="http://www.w3.org/2000/svg" width="27" height="14" viewBox="0 0 27 14" fill="none">
                                        <path d="M26 7L1 7M1 7L7.17112 13M1 7L7.17112 1" stroke="#444444" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>`,
    nextArrow: `<svg class="arrow-right" xmlns="http://www.w3.org/2000/svg" width="27" height="14" viewBox="0 0 27 14" fill="none">
                                        <path d="M0.999999 7L26 7M26 7L19.8289 1M26 7L19.8289 13" stroke="#444444" stroke-linecap="round" stroke-linejoin="round" />
</svg>`,
  });
});

$(document).ready(function () {
  $('.img-mobile-block').slick({
    arrows: false, // показать стрелки
    dots: true, // не показывать точки
    dotsClass: 'dots-style', // название класса для точек
    slidesToShow: 1, // показывать по 3 слайда
    slidesToScroll: 1,
    autoplay: false, // автоматическое проигрывание слайдов
  });
});
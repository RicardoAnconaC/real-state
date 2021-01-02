var swiper = new Swiper('.swiper-container', {
  loop: true,
  slidesPerView: 3,
  spaceBetween: 20,
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
});

function openContainer(evt, condition) {

  var i, x, tablinks;

  x = document.getElementsByClassName("search-form");
  for (i = 0; i < x.length; i++) {
    x[i].classList.add("hidden");
  }

  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" bg-blue-400", "");
  }

  document.getElementById(condition).classList.replace("hidden", "block");
  evt.currentTarget.className += " bg-blue-400";
}
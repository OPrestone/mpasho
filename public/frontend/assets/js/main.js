let section = document.querySelectorAll("section");
let menu = document.querySelectorAll("header nav a");

window.onscroll = () => {
  section.forEach((i) => {
    let top = window.scrollY;
    let offset = i.offsetTop - 150;
    let height = i.offsetHeight;
    let id = i.getAttribute("id");

    if (top >= offset && top < offset + height) {
      menu.forEach((link) => {
        link.classList.remove("active");
        document
          .querySelector("header nav a[href*=" + id + "]")
          .classList.add("active");
      });
    }
  });
};
function openNav() {
    document.getElementById("mySidenav").style.width = "100%";
  }
  
  function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
  };
function reveal() {
  var reveals = document.querySelectorAll(".reveal");

  for (var i = 0; i < reveals.length; i++) {
    var windowHeight = window.innerHeight;
    var elementTop = reveals[i].getBoundingClientRect().top;
    var elementVisible = 150;

    if (elementTop < windowHeight - elementVisible) {
      reveals[i].classList.add("active");
    } else {
      reveals[i].classList.remove("active");
    }
  }
}

window.addEventListener("scroll", reveal);

// To check the scroll position on page load
reveal();

$('.h300 .owl-carousel').owlCarousel({
    dots:true,
    loop:true,
    nav:true,
    margin:10,
    responsiveClass:true,
    responsive:{
0:{
    items:2.2,
    nav:true
},
600:{
    items:3,
    nav:false
},
1000:{
    items:5.3,
    nav:true,
    loop:false
}
}
}),
$('.h170 .owl-carousel').owlCarousel({
    dots:true,
    loop:true,
    nav:true,
    margin:10,
    responsiveClass:true,
    responsive:{
0:{
    items:2.5,
    nav:true
},
600:{
    items:3,
    nav:false
},
1000:{
    items:5.3,
    nav:true,
    loop:false
}
}
}),
$('.h250 .owl-carousel').owlCarousel({
    dots:true,
    loop:true,
    nav:true,
    margin:10,
    responsiveClass:true,
    responsive:{
0:{
    items:1.5,
    nav:true
},
600:{
    items:3,
    nav:false
},
1000:{
    items:5.3,
    nav:true,
    loop:false
}
}
}),
$('.stations .owl-carousel').owlCarousel({
    dots:true,
    loop:true,
    nav:false,
    margin:10,
    responsiveClass:true,
    responsive:{
0:{
    items:4.4,
    nav:true
},
600:{
    items:3,
    nav:false
},
1000:{
    items:11.5,
    nav:true,
    loop:false
}
}
}),
$('.h200 .owl-carousel').owlCarousel({
    dots:true,
    loop:true,
    nav:true,
    margin:10,
    responsiveClass:true,
    responsive:{
0:{
    items:1.4,
    nav:true
},
600:{
    items:3,
    nav:false
},
1000:{
    items:4.3,
    nav:true,
    loop:false
}
}
}),
$('.h310 .owl-carousel').owlCarousel({
    dots:true,
    loop:true,
    nav:true,
    margin:10,
    responsiveClass:true,
    responsive:{
0:{
    items:1.4,
    nav:true
},
600:{
    items:3,
    nav:false
},
1000:{
    items:4.3,
    nav:true,
    loop:false
}
}
})
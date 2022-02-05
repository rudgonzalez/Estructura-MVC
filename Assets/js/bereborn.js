//navbar
openNavButton = document.getElementById('top-bar');
nav = document.getElementById('nav');

openedNav = false;

openNavButton.addEventListener("click",()=>{
    if(!openedNav){
        nav.style.animation= "aparecer 1s forwards";
        openedNav = true;
    }
    else{
        nav.style.animation= "desaparecer 1s forwards";
        openedNav = false;
    }
})

//Mapa Google
//var map;
      //function initMap() {
        //map = new google.maps.Map(document.getElementById('mapa'), {
         // center: {lat: 43.5293101, lng: -5.6773233},
          //zoom: 13
       // });

        //new google.maps.Marker({
           // position: {lat: 43.5293101, lng: -5.6773233},
           // map,
           // title: "BeReborn Panama",
         // });
     // }

//Seccion nosotros
window.addEventListener('scroll', function(){
  
  var mision = document.getElementById('mision');
  var vision = document.getElementById('vision');
  var valores = document.getElementById('valores');

  var altura = window.innerHeight/1.3;

  var dmision = mision.getBoundingClientRect().top;

  mision.classList.add('transform_up');
  vision.classList.add('transform_up');
  valores.classList.add('transform_up');

  if(dmision <= altura)
  {
    mision.classList.add('aparecer-nosotros');
    vision.classList.add('aparecer-nosotros');
    valores.classList.add('aparecer-nosotros');
  }
  else
  {
    mision.classList.remove('aparecer-nosotros');
    vision.classList.remove('aparecer-nosotros');
    valores.classList.remove('aparecer-nosotros');
  }
})

/*CArusel de Servicios - Pagina de Inicio*/
$(function(){
  $('.center').slick({
    infinite: true,
    centerPadding: '60px',
    slidesToShow: 3,
    slidesToScroll: 1,
    arrows: false,
    autoplay: true,
    dots: false,
    CenterMode: true,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 3,
          slidesToScroll: 1,
          dots: false,
          infinite: true
        }
      },
      {
        breakpoint: 920,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 580,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });
});
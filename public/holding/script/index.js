
// ------------- header  bg darken on scroll
// nav  darken
let navbar = document.querySelector(".header");

window.onscroll = function() {

  if (window.pageYOffset > 660) {
    navbar.classList.add("darken");
  } else {
    navbar.classList.remove("darken");
  }
};

// --- nav on small - menu dropdown
const menuIcon = document.querySelector('.menu-icon');
const navigation = document.querySelector('.navigation');

menuIcon.addEventListener('click', ()=> {
    menuIcon.classList.toggle('close-i');
    navigation.classList.toggle('shown');
})

// --- Close navmenu on outside click
window.addEventListener('click', function(e) {
    if (!navigation.contains(e.target) && (!menuIcon.contains(e.target))){
        menuIcon.classList.remove('close-i');
        navigation.classList.remove('shown');
    }
});



// ------------- nav scroll to sections -------------

$(".scroll-home").click(function(event) {
    event.preventDefault()
    $("body,html").animate({
        scrollTop: $("body").offset().top
    }, 1000);
});

// scroll to >>  projects
$('.scroll-projects').click(function(event) {

    event.preventDefault()
    $("body,html").animate({
        scrollTop: $("#projects").offset().top - 165
    }, 1000);
});

// scroll to >>  about
$('.scroll-about').click(function(event) {
    event.preventDefault()
    $("body,html").animate({
        scrollTop: $("#about-us").offset().top - 120
    }, 1000);
});

// scroll to >>  news
$('.scroll-news').click(function(event) {
    event.preventDefault()
    $("body,html").animate({
        scrollTop: $("#news").offset().top - 60
    }, 1000);
});

// scroll to >>  gallery
$('.scroll-gallery').click(function(event) {
    event.preventDefault()
    $("body,html").animate({
        scrollTop: $("#videos").offset().top - 120
    }, 1000);
});

// scroll to >>  contact
$('.scroll-contact').click(function(event) {
    event.preventDefault()
    $("body,html").animate({
        scrollTop: $("#contact").offset().top - 80
    }, 1000);
});


// --------------   switch nav link active class  ----------
const navLinks = document.querySelectorAll('.navigation__link');

navLinks.forEach( (el,i)  => {
    el.addEventListener('click', (e)=> {
        e.preventDefault();
        navLinks.forEach( e=> {
            e.classList.remove('acitve');
        });
        el.classList.add('acitve');

        // close dropdown menu on mobile
        if(window.innerWidth < 1020) {
            $('.navigation').removeClass('shown');
            $('.menu-icon').removeClass('close-i');
        }
    });

});


// -------------------   footer scroll to up -----------------------
$(".footer__scroll-btn").click(function() {

    $("body,html").animate({
        scrollTop: $("body").offset().top
    }, 1000);

    // give active class
    navLinks.forEach( e=> {
        e.classList.remove('acitve');
    });
    navLinks[0].classList.add('acitve');
});





// ------------   hero slider - section 1   -----------

$(".hero-slider").on("beforeChange", function (
    event,
    slick,
    currentSlide,
    nextSlide
    ) {
    $(".slider-thumb").removeClass("active");
    $(".slider-thumb:eq(" + nextSlide + ")").addClass("active");
});

// dalay slick sliding for 1 sec - ( cuz speed is 1sec & first slide dsnthave that)
setTimeout( function() {

    $(".hero-slider").slick({
        prevArrow: `<button class="s-btn btn-left"><img src="./img/icons/arr-full-left.svg" alt=""></button>`,
        nextArrow: `<button class="s-btn btn-right"><img src="./img/icons/arr-full-right.svg" alt=""></button>`,
        infinite: true,
        asNavFor: ".slider-nav",
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2300,
        speed: 1000,
        arrows: true,
        dots: true,
        rtl: false,
    });


}, 1000);

$(".slider-nav").slick({
    slidesToShow: 8,
    slidesToScroll: 1,
    asNavFor: ".hero-slider",
    dots: false,
    arrows: false,
    centerMode: false,
    focusOnSelect: true,
    variableWidth: true,
    responsive: [ {
          breakpoint: 650,
          settings: {
            arrows: false,
          }
        }
      ]
});

$(".slider-thumb").click(function (e) {
    e.preventDefault();
    $(".slider-thumb").removeClass("active");
    $(this).addClass("active");
});

/// end hero slider


//  ---------- hero modals  -----------


const slideDetails = id => {

    const base_url = window.location.origin;

    if (id > 0) {

        $.ajax({
            url: `getSlide/${id}`
        }).done(res => {

            if (res.data) {
                const modal = $('.sl');
                const data = res.data;

                /** Images */
                if (data.files) {
                    let gallery = ``;

                    data.files.map(item => {

                        gallery += `
                                <div class="slider-modal-img-box">
                                    <img src="${base_url}/storage/slider/${id}/${item.name}" />
                                </div>`;

                        modal.find('.slider-modal__gallery').html(gallery);
                        modal.find('.slider-modal__content-img img').attr('src',`${base_url}/storage/slider/${id}/${data.files[0].name}`)
                    })
                }

                if (data.details) {
                    const info = data.details[0];
                    modal.find('.modal-title-box h2').text(info.title);
                    modal.find('.slider-modal__p').text(info.content);

                }

                modal.addClass('visible');
            }
        });
    }

}


// close by x ((for all modals))
$('.close-hero-modal').on('click', function(){
    $('.slider-modal').removeClass('visible')
});

// --- Close modals on outside click  ((for all modals))
window.addEventListener('click', function(e){
    if ($(e.target).is($('.slider-modal')) ){
        $('.slider-modal').removeClass('visible')
    }
});


//------------  open modal from section 2 - projects  -----------



const projectDetails = id => {
    const base_url = window.location.origin;

    if (id > 0) {

        $.ajax({
            url: `getPartners/${id}`
        }).done(res => {

            if (res.data) {
                const modal = $('.slider-modal.projects');
                const data = res.data;


                /** Images */
                if (data.files) {
                    let gallery = ``;

                    data.files.map(item => {

                        gallery += `
                                <div class="slider-modal-img-box">
                                    <img src="${base_url}/storage/product/${id}/${item.name}" />
                                </div>`;

                        modal.find('.slider-modal__gallery').html(gallery);
                        modal.find('.slider-modal__content-img img').attr('src',`${base_url}/storage/product/${id}/${data.files[data.files.length-1].name}`)
                    })
                }

                if (data.details) {
                    const info = data.details[0];
                    modal.find('.modal-title-box h2').text(info.title);
                    modal.find('.slider-modal__p').text(info.content);

                }

                modal.addClass('visible');
            }
        });

    }

}



//------------  open modal from section 6 - news  -----------

// open selected modal with news btns
$('.news__card-btn').on('click', function(){
    // let index
    let index = $('.news__card-btn').index(this) ;

    $('.slider-modal').eq(index).addClass('visible');
});


// ------ section 5 - videos - slider

$(".videos__slider").slick({
    prevArrow: `<button class="s-btn btn-left"><img src="./img/icons/arr-left.svg" alt=""></button>`,
    nextArrow: `<button class="s-btn btn-right"><img src="./img/icons/arr-right.svg" alt=""></img></button>`,
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    speed: 800,
    arrows: true,
    dots: true,
    rtl: false,
});

// --------------- video slider modals  ---------------

// open selected vid modal with slide btns
$('.video-modal-btn').on('click', function(){
    // let index
    let index = $('.video-modal-btn').index(this) - 1;

    $('.video-modal').eq(index).addClass('visible')
});

// close by x
$('.video-modal-close').on('click', function(){
    $('.video-modal').removeClass('visible');
});

// --- Close modals on outside click
window.addEventListener('click', function(e){
    if ($(e.target).is($('.video-modal')) ) {
        $('.video-modal').removeClass('visible');
    }
});


// ------------ section 6 - news - show all -------------

// switch grid view
$('.switch-grid-btn').on('click', function(){
    $('.news__grid').toggleClass('shorten');

    // change text
    if($(this).hasClass('more')) {
        $(this).removeClass('more');
        $(this).find('span').text('Show Less')
    }else {
        $(this).addClass('more');
        $(this).find('span').text('Load More')
    }
});


const newsDetails = id => {

    const base_url = window.location.origin;

    if (id > 0) {

        $.ajax({
            url: `getNews/${id}`
        }).done(res => {

            if (res.data) {
                const modal = $('.sl');
                const data = res.data;

                /** Images */
                if (data.files) {
                    let gallery = ``;

                    data.files.map(item => {

                        gallery += `
                                <div class="slider-modal-img-box">
                                    <img src="${base_url}/storage/news/${id}/${item.name}" />
                                </div>`;

                        modal.find('.slider-modal__gallery').html(gallery);
                        modal.find('.slider-modal__content-img img').attr('src',`${base_url}/storage/news/${id}/${data.files[0].name}`)
                    })
                }

                if (data.details) {
                    const info = data.details[0];
                    modal.find('.modal-title-box h2').text(info.title);
                    modal.find('.slider-modal__p').text(info.content);

                }

                modal.addClass('visible');
            }
        });
    }

}



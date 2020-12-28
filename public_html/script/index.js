
// change header on scroll 
window.addEventListener('scroll', ()=> {

  let headerBot = $(".header")[0].getBoundingClientRect().bottom;
  let heroBot =$("#hero").get(0).getBoundingClientRect().bottom;
 

  if( heroBot < headerBot) {
      $(".header").addClass('bg-dark')
  }else {
      $(".header").removeClass('bg-dark')
  }
});


// section 5 - video modal

const videoBtnOne = document.querySelector('#play-video-btn');

const videoModal = document.querySelector('#video-modal');
const closeVideoBtn = document.querySelector('.video-modal-close');

// play
videoBtnOne.addEventListener('click', ()=> {
  videoModal.classList.add('visible');
})

// close
closeVideoBtn.addEventListener('click', ()=> {
  videoModal.classList.remove('visible')
})

// close by clicking outside of vid
window.addEventListener('click', (e)=> {

  if(e.target == videoModal) {
    videoModal.classList.remove("visible");
  }
});



// preview img function  for ALL products (OLD) on btn = onclick="previewImg(this)"
    // const pictureModal = document.querySelector('.picture-modal');

    // function previewImg(element) {
    //     let findImg = element.closest('.product-card').children[2].children[0]

    //     //console.log(findImg.src)
    //     document.getElementById("modal-img").src = findImg.src;
    //     pictureModal.classList.add('visible');
    // }
    // // close modal
    // pictureModal.addEventListener('click', (e)=> {
    //     pictureModal.classList.remove('visible');
    // })


// section 3 --- make grid slider if > 5

const productLength = $('.slidable').children().length;

if( productLength > 5) {

  // add class to be slidable
  $('.product__grid.slidable').addClass('slider')

  // slider
  $(".product__grid.slider").slick({
    prevArrow: `<button class="s-btn btn-left">
            <svg xmlns="http://www.w3.org/2000/svg" width="18.634" height="30.704" viewBox="0 0 18.634 30.704">
            <path id="Icon_awesome-chevron-left" data-name="Icon awesome-chevron-left" d="M2.427,16.807,16.092,3.142a1.688,1.688,0,0,1,2.386,0l1.594,1.594a1.688,1.688,0,0,1,0,2.384L9.245,18l10.83,10.881a1.687,1.687,0,0,1,0,2.384l-1.594,1.594a1.688,1.688,0,0,1-2.386,0L2.427,19.193A1.688,1.688,0,0,1,2.427,16.807Z" transform="translate(-1.933 -2.648)" />
            </svg>
      </button>`,
    nextArrow: `<button class="s-btn btn-right">
            <svg xmlns="http://www.w3.org/2000/svg" width="18.634" height="30.705" viewBox="0 0 18.634 30.705">
            <path id="Icon_awesome-chevron-left" data-name="Icon awesome-chevron-left" d="M20.073,16.807,6.408,3.142a1.688,1.688,0,0,0-2.386,0L2.427,4.736a1.688,1.688,0,0,0,0,2.384L13.255,18,2.425,28.881a1.687,1.687,0,0,0,0,2.384l1.594,1.594a1.688,1.688,0,0,0,2.386,0L20.073,19.193A1.688,1.688,0,0,0,20.073,16.807Z" transform="translate(-1.933 -2.648)" />
            </svg>
      </button>`,
    infinite: true,
    slidesToShow: 5,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 1800,
    speed: 1000,
    arrows: true,
    dots: false,
    rtl: false,
    responsive: [
      {
        breakpoint: 1300,
        settings: {
          slidesToShow: 4,
        }
      },{
        breakpoint: 1000,
        settings: {
          slidesToShow: 3,
        }
      },{
        breakpoint: 750,
        settings: {
          slidesToShow: 2,
        }
      },{
        breakpoint: 550,
        settings: {
          slidesToShow: 1,
        }
      }
    ]
  });
};




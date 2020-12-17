
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






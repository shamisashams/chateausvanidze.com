
$(document).ready(function(){
    getFavoriteCount();
});
// preview img 

//---------- change main img by thumbs

const imgThumbs = $('.img-thumb');
const bigImgs = $('.big-img-box');


imgThumbs.click(function (event) {
    let i = $(this).index();

    // clear all
    bigImgs.removeClass("shown");
    imgThumbs.removeClass("active");

    // apply on one
    $(bigImgs[i]).addClass("shown");
    $(this).addClass("active");

});


// -------- zoom big img (open modal)

const pictureModal = $('.picture-modal');

bigImgs.click(function () {

    let innerImgSrc = $(this).find('img').eq(0).attr('src');
    
    // open modal + show img
    $("#modal-img").attr('src', innerImgSrc);
    pictureModal.addClass("visible");
});

// close modal
pictureModal.click( ()=> {
    pictureModal.removeClass("visible");
});



// ----------- add to cart animations

// Add to Cart  vrs [cartCountBox, cartCoun] from general.js


// add current product to cart 
const currProductAdd = $('.details__add-to-cart');

currProductAdd.on('click', ()=> {
    // selected img
    let currProductImg = $('.big-img-box.shown');

    // location
    var cart = $('.nav__cart');
    // target img
    var imgtoFly = currProductImg.find("img");

    if (imgtoFly) {
        // increase cart count 
        cartCoun++
        //cartCountBox.text(cartCoun)

        // animate flying
        var imgclone = imgtoFly.clone()
            .offset({
            top: imgtoFly.offset().top,
            left: imgtoFly.offset().left
        })
            .css({
            'opacity': '0.8',
                'position': 'absolute',
                'height': '130px',
                'width': '130px',
                'z-index': '100'
        })
            .appendTo($('body'))
            .animate({
            'top': cart.offset().top + 30,
                'left': cart.offset().left + 20,
                'width': 25,
                'height': 25
        }, 1000, 'easeInOutExpo');
    
        imgclone.animate({
            'width': 0,
                'height': 0
        }, function () {
            $(this).detach()
        });
    }
});


// add offered product to cart 

function addOfferedToCart(el) {
    
    var cart = $('.nav__cart');

    var imgtoFly = $(el).parent('.offer-card').find(".offer-top").find("img");

    if (imgtoFly) {
        
        // increase cart count 
        cartCoun++
        //cartCountBox.text(cartCoun)

        // animate flying
        var imgclone = imgtoFly.clone()
            .offset({
            top: imgtoFly.offset().top,
            left: imgtoFly.offset().left
        })
            .css({
            'opacity': '0.8',
                'position': 'absolute',
                'height': '130px',
                'width': '130px',
                'z-index': '100'
        })
            .appendTo($('body'))
            .animate({
            'top': cart.offset().top + 30,
                'left': cart.offset().left + 20,
                'width': 25,
                'height': 25
        }, 1000, 'easeInOutExpo');
    

        imgclone.animate({
            'width': 0,
                'height': 0
        }, function () {
            $(this).detach()
        });
    }
};


//  ----------- add to favourites animation
function addToFav(el, $id) {
    var target = $('.nav__fav');
    var imgtoFly = $(el).find("img");

    if (imgtoFly) {
        // animate flying
        var imgclone = imgtoFly.clone()
            .offset({
            top: imgtoFly.offset().top,
            left: imgtoFly.offset().left
        })
            .css({
            'opacity': '0.9',
                'position': 'absolute',
                'height': '20px',
                'width': '20px',
                'z-index': '100'
        })
            .appendTo($('body'))
            .animate({
            'top': target.offset().top + 36,
                'left': target.offset().left + 18,
                'width': 15,
                'height': 15
        }, 800, 'easeInOutExpo');
    
        imgclone.animate({
            'width': 0,
                'height': 0
        }, function () {
            $(this).detach()
        });
    }
    addToFavoritesAjax($id);
};


function addToFavoritesAjax($id){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        url: "/addtofavorites/"+$id,
        method: 'GET',
        success: function(data){
            if(data.status == true){
            }
        } 
    });
    getFavoriteCount();
}

function getFavoriteCount(){
    $.ajax({
        url: "/getfavoritecount",
        method: 'GET',
        success: function(data){
            if(data.status == true){
                $('#fav-count').html(data.count)
            }
        } 
    });
}
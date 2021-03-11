$(document).ready(function () {
    getCartCount();
    showHideBanks();
});

// --- nav on small - menu dropdown
const menuIcon = document.querySelector('.menu-icon');
const navigation = document.querySelector('.navigation');

menuIcon.addEventListener('click', () => {
    menuIcon.classList.toggle('close-i');
    navigation.classList.toggle('shown');
})

// --- Close navmenu on outside click
window.addEventListener('click', function (e) {

    if (!navigation.contains(e.target) && (!menuIcon.contains(e.target))) {
        menuIcon.classList.remove('close-i');
        navigation.classList.remove('shown');
    }
});


// ---------  footer map show /hide

const showMapBtn = document.querySelector('.map-modal-btn');
const closeMapBtn = document.querySelector('.map-modal-close');
const iframeModal = document.querySelector('.footer-video-modal');

showMapBtn.addEventListener('click', () => {
    iframeModal.classList.add('open');
})
closeMapBtn.addEventListener('click', () => {
    iframeModal.classList.remove('open');
})
window.addEventListener('click', (e) => {
    if (e.target === iframeModal)
        iframeModal.classList.remove('open');
})


// --------------  Add to Cart function for regular cards
let cartCountBox = $('#cart-count');
let cartCoun = 0;

function addToCart(el, $id) {

    var cart = $('.nav__cart');

    var imgtoFly = $(el).parent('.card__overlay').parent().find(".card__img").find("img");

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
                'height': '140px',
                'width': '140px',
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
    addToCartAjax($id);
};


//  ----------- Password - show / hide --------------
$('.hide-show').click(function () {

    if ($(this).hasClass('pass-hidden')) {
        // $(this).text('Hide');
        $(this).parent('.password-wrap').find("input").attr('type', 'text');
        $(this).removeClass('pass-hidden');
    } else {
        // $(this).text('pass-hidden');
        $(this).parent('.password-wrap').find("input").attr('type', 'password');
        $(this).addClass('pass-hidden');
    }
});


//  ----------------  Login / register Modal display  -------------

// open log in modal
$('.log-in-btn').on('click', () => {
    $('.auth-modal.login').addClass('visible');
});

// open registration modal
$('.register-btn').on('click', () => {
    $('.auth-modal.register').addClass('visible');
});

// close by X btn
$('.auth-close').on('click', () => {
    $('.auth-modal.login').removeClass('visible');
    $('.auth-modal.register').removeClass('visible');
});

// switch auth Modals

// to Register
$('.switch-to-register').on('click', () => {
    $('.auth-modal.login').removeClass('visible');
    $('.auth-modal.register').addClass('visible');
});

// open registration modal
$('.switch-to-login').on('click', () => {
    $('.auth-modal.register').removeClass('visible');
    $('.auth-modal.login').addClass('visible');
});


// close modals by outside click
window.addEventListener('click', (e) => {
    let logModal = document.querySelector('.auth-modal.login');
    let regModal = document.querySelector('.auth-modal.register');
    if (e.target === logModal) {
        logModal.classList.remove('visible');
    }
    if (e.target === regModal) {
        regModal.classList.remove('visible');
    }
});


//  -------------   Login / Register Modals Validation  ---------


// log in : subbmit  validation
const logInForm = $('#log-in-form');

const logInInputs = $('#log-in-form .auth__input');
const logInErrors = $('#log-in-form .error-message');

function logIn() {
    let inputsFull = true;

    // validate inputs  visually
    logInInputs.each(function (i, input) {
        if ($(input).val() == "") {
            $(input).addClass('error');
            logInErrors.eq(i).addClass('show');
        } else {
            logInErrors.eq(i).removeClass('show');
            $(input).removeClass('error');
        }
    });

    // check if all inputs are filled & subbmit
    logInInputs.each(function (i, value) {
        if ($(value).val() == "") {
            return inputsFull = false;
        }
    });

    // if inputsFull = true  > subbmit
    inputsFull ? logInForm.trigger("submit") : console.log("not subbmiting")
};


// Register : subbmit   validation
const registerForm = $('#registration-form');

const registerInputs = $('#registration-form .auth__input');
const registerErrors = $('#registration-form .error-message');

// passwords patch
const passwordInputs = $('#registration-form .password-wrap .auth__input');

function register() {
    let inputsFull = true;
    let passMatch = true;
    let checbox = false;

    // validate inputs  visually
    registerInputs.each(function (i, input) {
        if ($(input).val() == "") {
            $(input).addClass('error');
            registerErrors.eq(i).addClass('show');
        } else {
            $(input).removeClass('error');
            registerErrors.eq(i).removeClass('show');
        }
    });

    // check if all inputs are filled & subbmit
    registerInputs.each(function (i, value) {
        if ($(value).val() == "") {
            return inputsFull = false;
        }
    });

    // check if passwords match
    if (passwordInputs.eq(0).val() !== passwordInputs.eq(1).val()) {
        passMatch = false;
        $('.error-message.pass-patch').addClass('show');
    }
    ;

    //check checkbox
    if ($('#reg-checkbox').is(':checked')) {
        $('.pls-check ').removeClass('show');
        checbox = true;
    } else {
        $('.pls-check ').addClass('show');
    }
    ;


    // if inputsFull = true + pass match + checked > subbmit
    if (inputsFull && passMatch && checbox) {
        return registerForm.trigger("submit")

    } else {
        return console.log('reg fai---------l')
    }

};


//  --------- Step Down/ Up --------

// increase qty
function QuantityPlus(el, $id) {
    var qtyInput = $(el).parent('.plus-minus-box').find("input");

    // increase by 1
    let newVal = parseInt($(qtyInput).val()) + 1;
    qtyInput.val(newVal)

    addcartcount($id, 1);
};

// decrease qty
function QuantityMinus(el, $id) {
    var qtyInput = $(el).parent('.plus-minus-box').find("input");

    // decrease if its > 1
    if ($(qtyInput).val() == 1) return;

    let newVal = parseInt($(qtyInput).val()) - 1;
    qtyInput.val(newVal);
    addcartcount($id, -1);
};


// --------- Cart Modal ------

// open cart-modal
const cartModal = $('#cart-modal');
// open cart
$('.nav__cart').on('click', function () {
    cartModal.addClass('visible')
});
// close cart
$('.close-cart').on('click', function () {
    cartModal.removeClass('visible')
});

// --- Close cart on outside click
window.addEventListener('click', function (e) {
    if ($(e.target).is(cartModal)) {
        cartModal.removeClass('visible')
    }
});


/// ------------- make Inputs Editable - function (purchase authorised page)
function editable(el) {

    if ($(el).hasClass('editable')) {
        // back to readonly
        $(el).parent('.editability').removeClass('editing')
        $(el).parent('.editability').find("input").attr("readonly", true);
        $(el).removeClass('editable');
    } else {
        // modify
        $(el).parent('.editability').addClass('editing')
        $(el).parent('.editability').find("input").focus();
        $(el).parent('.editability').find("input").attr("readonly", false);
        $(el).addClass('editable');
    }
};


// ------------------ cabinet orders > accordions

// accordions
$('.ordered__top').on('click', function () {
    // clear all
    $('.ordered-accordion').removeClass('open');
    // show one
    $(this).parent('.ordered-accordion').addClass('open');
});

// ------------- blog-details > video modal

//open vid modal
$('.blog-video-btn').on('click', function () {
    $('#blog-vid-modal').addClass('visible')
});
// close vid modal
$('.close-blog-vid').on('click', function () {
    $('#blog-vid-modal').removeClass('visible')
});

// --- Close blog video on outside click
window.addEventListener('click', function (e) {
    if ($(e.target).is($('#blog-vid-modal'))) {
        $('#blog-vid-modal').removeClass('visible')
    }
});

function addToCartAjax($id) {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        url: "/addtocart/" + $id,
        method: 'GET',
        success: function (data) {
            if (data.status == true) {
                getCartCount();
            }
        }
    });
}

function addcartcount($id, $type) {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        url: "/addcartcount/" + $id + "/" + $type,
        method: 'GET',
        success: function (data) {
            if (data.status == true) {
                getCartCount();
            }
        }
    });
}

function removefromcart($id) {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        url: "/removefromcart/" + $id,
        method: 'GET',
        success: function (data) {
            if (data.status == true) {
                getCartCount();
            }
        }
    });
}

function getCartCount() {

    $.ajax({
        url: `/${getMeta('language')}/getcartcount/`,
        method: 'GET',
        success: function (data) {
            if (data.status == true) {
                $('#setcartcount').html(data.count)
                $('#cart-count').html(data.count)
                $products = data.products;
                $html = ``;
                $('#totalmoneycart').html(data.total);
                $('#buy-total').html(data.total);
                $('#buy-prod').html(data.total);
                $('#cartitems').html('');
                $('#buyproduct').html('');
                $products.forEach(item => {
                    $price = ``;
                    if (item.sale) {
                        $price = `
                        <span class="cur-p">` + item['sale'] / 100 + `₾</span>
                        <span class="old-p">` + item['price'] / 100 + `₾</span>
                        `;
                    } else {

                        $price = `
                        <span class="cur-p">` + item['price'] / 100 + `₾</span>
                        `;
                    }
                    $('#cartitems').append(`

                    <div class="aside-card">
                        <div class="aside-card__top">
                            <div class="aside-card-img">
                            <img  class="img-cover" src="/storage/product/` + item['id'] + `/` + item['file'] + `" alt="">
                            </div>
                            <div class="aside-card__text">
                                <h2 class="c-title">
                                    <a href="">` + item['title'] + `</a>
                                </h2>
                                <h3 class="c-subtitle"> ` + item['description'] + `</h3>
                                <div class="aside-card__pricing">
                                    ` + $price + `
                                </div>
                            </div>
                        </div>
                        <div class="aside-card__bot">
                        <div class="aside-card__bot-left">
                            <h2>${data.translations.count}</h2>
                            <div class="plus-minus-box ">
                            <button class="qty_btn" type="button" onclick="QuantityMinus(this, ` + item['id'] + `)"> -</button>

                            <input  type="number" name="qty" min="1" max="11" value="` + item['quantity'] + `" class="qty_input" readonly="">

                            <button class="qty_btn" type="button" onclick="QuantityPlus(this, ` + item['id'] + `)">+</button>
                            </div>
                        </div>

                        <button class="aside-card__delete-btn" onclick="removefromcart(` + item['id'] + `)">${data.translations.clear}</button>

                    </div>

                </div>
                    `);
                    $('#buyproduct').append(`
                        <div class="card-long">
                        <div class="card-long__img">
                        <img  class="img-cover" src="../storage/product/` + item['id'] + `/` + item['file'] + `" alt="">
                        </div>

                        <div class="card-long__text">
                            <h2>
                                <a href="">` + item['title'] + `</a>
                                <span>` + item['description'] + `</span>
                            </h2>
                            <div class="card-long__pricing">
                                ` + $price + `
                            </div>
                        </div>

                        <div class="card-long__qty">
                            <h2>${data.translations.count}</h2>

                            <div class="plus-minus-box ">
                            <button class="qty_btn" type="button" onclick="QuantityMinus(this, ` + item['id'] + `)"> -</button>

                            <input  type="number" name="qty" min="1" max="11" value="` + item['quantity'] + `" class="qty_input" readonly="">

                            <button class="qty_btn" type="button" onclick="QuantityPlus(this, ` + item['id'] + `)">+</button>
                            </div>

                            <button class="aside-card__delete-btn" onclick="removefromcart(` + item['id'] + `)">${data.translations.clear}</button>
                        </div>

                    </div>
                    `);
                });
            }
        }
    });
}

function getMeta(metaName) {
    const metas = document.getElementsByTagName('meta');

    for (let i = 0; i < metas.length; i++) {
        if (metas[i].getAttribute('name') === metaName) {
            return metas[i].getAttribute('content');
        }
    }

    return '';
}

function showHideBanks() {
    let banks = document.querySelector('#banks-container');
    let paymethod = document.getElementsByName('paymethod');
    let bankErrorMessage=document.querySelector('#bank-error-message');
    if (paymethod[0].checked === true) {
        banks.style.display = 'flex';
    }
    if (paymethod[1].checked === true) {
        bankErrorMessage.hidden=true;
        banks.style.display = 'none';
    }
}

function checkIfSelected() {
    let banks = document.querySelectorAll('.bank-items');
    let paymethod = document.getElementsByName('paymethod');
    let count = 0;
    let form = document.querySelector('.buy-grid');
    let bankErrorMessage=document.querySelector('#bank-error-message');
    if (validatePurchaseForm()) {
        if (paymethod[0].checked === true) {
            for (let i = 0; i < banks.length; i++) {
                if (banks[i].checked === true) {
                    count++;
                    break;
                }
            }
            if (count > 0) {
                bankErrorMessage.hidden=true;
                form.submit();
            }
            else{
               bankErrorMessage.hidden=false;
            }
        } else {
            form.submit();
        }
    }
}

function validatePurchaseForm() {
    let form = document.querySelector('.buy-grid');
    let firstName = form.querySelector('#first-name');
    let lastName = form.querySelector('#last-name');
    let email = form.querySelector('#email');
    let phone = form.querySelector('#phone');
    let address = form.querySelector('#address');
    let count = 0;

    if (firstName.value === "" || firstName.value.length > 50) {
        firstName.style.border = "1px solid red";
        count++;
    } else {
        firstName.style.border = "";
    }

    if (lastName.value === "" || lastName.value.length > 50) {
        lastName.style.border = "1px solid red";
        count++;
    } else {
        lastName.style.border = "";
    }

    count = validateEmail(email, count);

    if (phone.value === "" || phone.value.length > 50) {
        phone.style.border = "1px solid red";
        count++;
    } else {
        phone.style.border = "";
    }

    if (address.value === "" || address.value.length > 255) {
        address.style.border = "1px solid red";
        count++;
    } else {
        address.style.border = "";
    }

    if (count === 0) {
        return true;
    }
    return false


}

function validateEmail(email, count) {
    const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if (email.value === "") {
        count++;
        email.style.border = "1px solid red";
    } else if (email.value.length > 50) {
        count++;
        email.style.border = "1px solid red";
    } else if (!re.test(String(email.value).toLowerCase())) {
        count++;
        email.style.border = "1px solid red";
    } else {
        email.style.border = "";
    }
    return count;
}



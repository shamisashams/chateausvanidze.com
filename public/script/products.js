// aside  price range

/*                                 Price Range                                */
/* -------------------------------------------------------------------------- */

const priceSlider = document.getElementById('price-range')
var nodes = [
    document.getElementById('range-low-price'),
    document.getElementById('range-high-price') 
];

noUiSlider.create(priceSlider, {
    start: [5, 400],
    connect: true,
    range: {
        'min': 0,
        'max': 2000
    },
    step:10,
    tooltips: false,
    
    // remove decimals
    format: {
        to: (v) => parseFloat(v).toFixed(0),
        from: (v) => parseFloat(v).toFixed(0)
    }

});

priceSlider.noUiSlider.on('update', function (values, handle) {
    var value = values[handle];

    if (handle) {
        nodes[1].value = value;
    } else {
        nodes[0].value = value;
    }
});

nodes[0].addEventListener('change', function () {
    priceSlider.noUiSlider.set([this.value, null]);
});

nodes[1].addEventListener('change', function () {
    priceSlider.noUiSlider.set([null, this.value]);
});



// category






// BUTTON HOVER 

  // originally forked from https://codepen.io/kkick/pen/oWZMov











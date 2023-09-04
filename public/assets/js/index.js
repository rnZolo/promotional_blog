// const { each } = require("lodash");

$(window).on('load', function () {
    list(underDistrict, 1);
});

// page navigations 
$('.item1-btn').click(function () {
    showAbout($('.item1'), [$('s.item3'), $('.item2')]);
    imageClose();
    $('.item1-btn').addClass('grad-text');
})

$('.item2-btn').click(function () {
    showAbout($('.item2'), [$('.item1'), $('.item3')]);
    imageClose();
    $('.item2-btn').addClass('grad-text');
})

$('.item3-btn').click(function () {
    showAbout($('.item3'), [$('.item1'), $('.item2')]);
    imageClose();
    $('.item3-btn').addClass('grad-text');
})

function showAbout(s, h) {
    $('.nbtn').each((element, index) => {
        $(index).removeClass('grad-text');
    });
    $(s).show();
    $(h).each((index, element) => {
        $(element).hide();
        console.log(element, index)
    })
};

// event deligation  About/Map
let underDistrict = [
    [
        "Guimbal",
        "Igbaras",
        "Miagao",
        "Oton",
        "San Joaquin",
        "Tigbauan",
        "Tubungan"],
    [
        "Alimodian",
        "Leganes",
        "Leon",
        "New Lucena",
        "Pavia",
        "San Miguel",
        "Santa Barbara",
        "Zarraga"],
    [
        "Anilao",
        "Badiangan",
        "Banate",
        "Bingawan",
        "Cabatuan",
        "Calinog",
        "Janiuay",
        "Lambunao",
        "Maasin",
        "Mina",
        "Pototan"],
    [
        "Barotac Nuevo",
        "Dingle",
        "Dueñas",
        "Dumangas",
        "Passi City",
        "San Enrique"],
    [
        "Ajuy",
        "Balasan",
        "Barotac Viejo",
        "Batad",
        "Carles",
        "Concepcion",
        "Estancia",
        "Lemery",
        "San Dionisio",
        "San Rafael",
        "Sara",
    ],
];
// change map and list
$('.district-div').click(function (event) {
    $('.district-btn').each((element, index) => {
        console.log(element, index);
        $(index).removeClass('bg-blue-900 text-white font-bold');
    });
    if ($(event.target).hasClass('district-btn')) {
        let districtNumber = $(event.target).val();
        $(event.target).addClass('bg-blue-900 text-white font-bold');
        $('#districtimg').attr('src', `./assets/img/districts/District_${districtNumber}.png`);
        list(underDistrict, districtNumber);
    }
});

// show slist of district 
function list(ar, i) {
    ar.forEach((element, index) => {
        if (index == i) {
            $('.under-district').text('');
            element.forEach(val => {
                $('.under-district').append(`<li>${val}</li>`)
            })
        }
    });
}

//gallery 
$('.hide-pic-div').click(function () {
    imageClose();
});

// show gallery image card
$('.img-gal').click(function (event) {
    let path = $(event.target).attr('src');
    let title = $(event.target).siblings('h1').text();
    let content = $(event.target).siblings('p').text();
    console.log(title, content);
    $('.pic-div').addClass("gall-clicked").removeClass('hidden');
    $('.on-display').attr('src', path);
    $('.img-title').text(title);
    $('.img-content').text(content);
})

function imageClose() {
    $('.pic-div').removeClass("gall-clicked").addClass('hidden');
}

// show rating
$('#add_rating').click(function () {
      return $('.rating').toggleClass('hidden');
});

// show delete modal
$('.comments').click(function(event){
    if($(event.target).hasClass('confirm-del')){
        $('.modal-del').removeClass('hidden');
        console.log($(event.target).val());
        let id = $(event.target).val();
        $('#sure-del').attr('value',  id);
    }
});

// hide delete modal
$('.cancel-del').click(function(){
    $('.modal-del').addClass('hidden');
});

// slider where-to-go
var swiper = new Swiper(".mySwiper", {
    slidesPerView: 3,
    spaceBetween: 30,
    freeMode: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
});

      
// const { each } = require("lodash");

// const { each } = require("lodash");
$(window).on('load', function () {
    list(underDistrict, 1);
});

$('.item1-btn').click(function () {
    showAbout($('.item1'), [$('.item3'), $('.item2')]);
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

// event deligation
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
$('.hide-pic-div').click(function () {
    imageClose();
});

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

var swiper = new Swiper(".mySwiper", {
    slidesPerView: 3,
    spaceBetween: 30,
    freeMode: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
});


$('#add_rating').click(function () {
      return $('.rating').toggleClass('hidden');
});

{/* <script src="sweetalert2.min.js"></script> */}
// $('.confirm-del').click(function () {
//     const swalWithBootstrapButtons = Swal.mixin({
//         customClass: {
//             confirmButton: 'btn btn-success',
//             cancelButton: 'btn btn-danger'
//         },
//         buttonsStyling: false
//     })

//     swalWithBootstrapButtons.fire({
//         title: 'Are you sure?',
//         text: "You won't be able to revert this!",
//         icon: 'warning',
//         showCancelButton: true,
//         confirmButtonText: 'Yes, delete it!',
//         cancelButtonText: 'No, cancel!',
//         reverseButtons: true
//     }).then((result) => {
//         if (result.isConfirmed) {
//             swalWithBootstrapButtons.fire(
//                 'Deleted!',
//                 'Your file has been deleted.',
//                 'success'
//             )
//         } else if (
          
//             result.dismiss === Swal.DismissReason.cancel
//         ) {
//             swalWithBootstrapButtons.fire(
//                 'Cancelled',
//                 'Your imaginary file is safe :)',
//                 'error'
//             )
//         }
//     })
// });
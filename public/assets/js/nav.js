$(window).on('load', function () {
    $('.facts').hide();
    $('.map').hide();
    list(underDistrict, 1);
});


$('.history-btn').click(function () {
    $('.history').show();
    $('.facts').hide();
    $('.map').hide();
})

$('.map-btn').click(function () {
    $('.map').show();
    $('.history').hide();
    $('.facts').hide();
})

$('.facts-btn').click(function () {
    $('.facts').show();
    $('.history').hide();
    $('.map').hide();
})

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
    if ($(event.target).hasClass('district')) {
        let districtNumber = $(event.target).val();
        $('#districtimg').attr('src', `./assets/img/districts/District_${districtNumber}.png`);
        list(underDistrict, districtNumber);
    }
});

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
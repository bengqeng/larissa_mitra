$('.phone-number').mask('+62 Z00 0000 0000 00', {
    translation: {
        'Z': {
            pattern: /[2-9]/,
        }
    }
});

$(document).ready(function ($) {
    var elementParent = $('.floating-contact-wrap');
    $('.floating-contact-btn').off('click').on('click', function () {
        elementParent.toggleClass('active', );
    });
});

// $("#floating-contact").on('click', function () {
//     var inputValue = $("#floating-contact input").val();
//     var textareaValue = $("#floating-contact textarea").val();
//     var url = "https://api.whatsapp.com/send?phone=1234567890&text=" + inputValue + "%0A" + textareaValue;
//     window.open(url, '_blank');
// });

$(document).ready(function () {
    $("#floating-contact-submit").on('click', function () {
        var inputVal = $("#floating-contact input").val();
        var textareaVal = $("#floating-contact textarea").val();
        var message = "Nama: " + inputVal + "%0A" + "Pesan: " + textareaVal;
        var url = "https://api.whatsapp.com/send?phone=62816947361&text=" + message;
        window.open(url, '_blank');
    });
});

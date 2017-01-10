$(document).ready(function() {
    $("i[id='favourite']").click(function () {
        $(this).toggleClass("fa fa-star-o");
        $(this).toggleClass("fa fa-star");
    });
    $(".button-collapse").sideNav();
    $('.parallax').parallax();
    $(".button-collapse").sideNav();
    $("#clicks").click(function () {
        $("#text").toggleClass("search");
    });
    $('.dropdown-button').dropdown({
        inDuration: 300,
        outDuration: 225,
        constrain_width: false,
        hover: true,
        gutter: 1,
        belowOrigin: true,
    });
    $('.parallax').parallax();
    $('#button').click(function () {
        alert('clicked');
        if ('ok_request' == 'ok_request') {
            Materialize.toast('تم اشتراكك بالقائمة البريدية بنجاح', 2000, 'font green');
        }
        else {
            Materialize.toast('فشل لم يتم الاشتراك بنجاح    ', 2000, 'font red');
        }
    });
    $('select').material_select();

    $('#up').click(function () {
        scrollToTop()
    });
    function scrollToTop() {
        verticalOffset = typeof(verticalOffset) != 'undefined' ? verticalOffset : 0;
        element = $('body,html');
        offset = element.offset();
        offsetTop = offset.top;
        $('html, body').animate({scrollTop: offsetTop}, 500, 'linear');
    }

    $('.datepicker').pickadate({
        selectMonths: true,
        selectYears: 15
    });

    setTimeout(function () {
        $('#modal1').modal({
            dismissible: true,
            opacity: .3,
            in_duration: 400,
            out_duration: 700,
            starting_top: '-400',
            ending_top: '30%',
        }).modal('open');
    }, 1000);

});


function down () {
    var height = document.getElementById('logo').offsetHeight ;
    $('html, body').animate({scrollTop: height}, 500, 'linear');
}

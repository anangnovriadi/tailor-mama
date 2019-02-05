$('.ongkos').keyup(function() {
    var sum = 0;
    var ongkos = $('#ongkos').val();

    $('.ongkos').each(function() {
        sum = ongkos * Number($(this).val());
    });
    $('#total').val(sum);
});
$('select[name="period"]').on('change', function (e) {
    $('#years').html(this.value);
    var price = $('#price').html();
    $('#amount').html(12 * Number(price) * Number(this.value) + '.00');
    $('#amt').html(12 * Number(price) * Number(this.value) + '.00');
});

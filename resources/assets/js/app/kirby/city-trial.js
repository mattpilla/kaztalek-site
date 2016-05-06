$(document).ready(function() {
    $('.checkbox input[type="checkbox"]').change(function() {
        var c = this.checked ? '#555' : '#c7c7c7'
        $(this).parent().css('color', c);
    });

    $('.checkbox input[type="number"]').change(function() {
        if ($(this).val() >= $(this).attr('max')) {
            $(this).prev().prop('checked', true).parent().css('color', '#555');
        }
    });

    $('.visibility').on('click', function() {
        if ($(this).hasClass('plus')) {
            $(this).addClass('btn-accent-ghost');
            $(this).removeClass('plus btn-light-ghost');
            $(this).html('-');
            $('.' + $(this).attr('id')).show();
        } else {
            $(this).addClass('plus btn-light-ghost');
            $(this).removeClass('btn-accent-ghost');
            $(this).html('+');
            $('.' + $(this).attr('id')).hide();
        }
        $(this).blur();
    });
});

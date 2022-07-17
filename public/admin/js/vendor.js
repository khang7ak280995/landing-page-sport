$(document).ready(function () {
    $('.image').change(function (e) {
        $('.previewImg').attr('src', URL.createObjectURL(event.target.files[0]));
    });
    $('.deleteImg').click(function (e) {
        $('.previewImg').attr('src', window.location.origin + '/assets/images/user.jpg');
    });

    initInputMask();
})

function initInputMask() {
    $('.textOnlyNumber').inputmask('', {
        regex: '^[0-9]*$'
    });

    $('.inpTimeData').inputmask('Regex', {
        mask: "[19]|[23]:59",
        definitions: {
            '1': {validator: "[0-1]"},
            '2': {validator: "[2]"},
            '3': {validator: "[0-3]"},
            '5': {validator: "[0-5]"}
        }
    });
}
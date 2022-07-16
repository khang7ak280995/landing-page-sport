$(document).ready(function () {
    $('.image').change(function (e) {
        $('.previewImg').attr('src', URL.createObjectURL(event.target.files[0]));
    });
    $('.deleteImg').click(function (e) {
        $('.previewImg').attr('src', window.location.origin + '/assets/images/user.jpg');
    });
})
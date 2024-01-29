$(document).ready(function () {
    $('.avatar-preview').css({
        'background-image': 'url(' + $('.avatar-preview').data('src') + ')',
        'background-size': 'cover',
        'background-position': 'center'
    });
    $('.banner-preview').css({
        'background-image': 'url(' + $('.banner-preview').data('src') + ')',
        'background-size': 'cover',
        'background-position': 'center'
    });
});

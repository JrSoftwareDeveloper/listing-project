$(document).ready(function() {
    $('.image-preview').css({
        'background-image': 'url(' + $('.image-preview').data('src') + ')',
        'background-size': 'cover',
        'background-position': 'center center'
    });

});


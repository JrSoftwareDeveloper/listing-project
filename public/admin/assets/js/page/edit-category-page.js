$(document).ready(function() {
    $.uploadPreview({
        input_field: "#image-upload", // Default: .image-upload
        preview_box: "#image-preview", // Default: .image-preview
        label_field: "#image-label", // Default: .image-label
        label_default: "Choose File", // Default: Choose File
        label_selected: "Change File", // Default: Change File
        no_label: false, // Default: false
        success_callback: null // Default: null
    });
    $.uploadPreview({
        input_field: "#image-upload-2", // Default: .image-upload
        preview_box: "#image-preview-2", // Default: .image-preview
        label_field: "#image-label-2", // Default: .image-label
        label_default: "Choose File", // Default: Choose File
        label_selected: "Change File", // Default: Change File
        no_label: false, // Default: false
        success_callback: null // Default: null
    });
    $('.icon-image').css({
        'background-image':'url("'+$('.icon-image').attr('data-src')+'")',
        'background-size':'cover',
        'background-position':'center center',
    });
    $('.background-image').css({
        'background-image':'url("'+$('.background-image').attr('data-src')+'")',
        'background-size':'cover',
        'background-position':'center center',
    });
});


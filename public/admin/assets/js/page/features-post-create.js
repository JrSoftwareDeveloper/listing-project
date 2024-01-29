// "use strict";

// $("select").selectric();
$.uploadPreview({
    input_field: "#avatar-upload",   // Default: .image-upload
    preview_box: "#avatar-preview",  // Default: .image-preview
    label_field: "#avatar-label",    // Default: .image-label
    label_default: "Choose File",   // Default: Choose File
    label_selected: "Change File",  // Default: Change File
    no_label: false,                // Default: false
    success_callback: null          // Default: null
  });
  $.uploadPreview({
    input_field: "#banner-upload",   // Default: .image-upload
    preview_box: "#banner-preview",  // Default: .image-preview
    label_field: "#banner-label",    // Default: .image-label
    label_default: "Choose File",   // Default: Choose File
    label_selected: "Change File",  // Default: Change File
    no_label: false,                // Default: false
    success_callback: null          // Default: null
  });
// $(".inputtags").tagsinput('items');

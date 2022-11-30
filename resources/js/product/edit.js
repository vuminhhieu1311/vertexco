// Description editor
var fullEditor = new Quill('#product-description-editor', {
    modules: {
        toolbar: [
            [{
                header: [1, 2, false]
            }],
            ['bold', 'italic', 'underline'],
            ['image', 'code-block']
        ]
    },
    theme: 'snow' // or 'bubble'
});
fullEditor.root.innerHTML = $('#product-description').val();

// Instruction editor
var instructionEditor = new Quill('#product-instruction-editor', {
    modules: {
        toolbar: [
            [{
                header: [1, 2, false]
            }],
            ['bold', 'italic', 'underline'],
            ['image', 'code-block']
        ]
    },
    theme: 'snow' // or 'bubble'
});
instructionEditor.root.innerHTML = $('#product-instruction').val();


// Dropzone product images
const productId = $('#product-id-value').val();

var myDropzone = new Dropzone("#add_product_media", {
    url: `/products/${productId}/images`,
    paramName: 'image', // The name that will be used to transfer the file
    maxFiles: 10,
    maxFilesize: 10, // MB
    addRemoveLinks: true,
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
    },
    accept: function (file, done) {
        done();
    },
    removedfile: function (file) {
        $.ajax({
            type: 'DELETE',
            url: `/products/${productId}/images/${file.id}`,
            success: function (data) {
                if (file.previewElement != null && file.previewElement.parentNode != null) {
                    file.previewElement.parentNode.removeChild(file.previewElement);
                }
                return this._updateMaxFilesReachedClass();
            },
        });
    },
});

$("#discount-deadline-picker").flatpickr();

$.ajax({
    type: 'GET',
    url: `/products/${productId}/images`,
    success: function (data) {
        data.forEach((image) => {
            let mockFile = { name: 'Image', size: 1000, id: image.id };
            myDropzone.displayExistingFile(mockFile, image.link);
        });
    },
});

// Add product submit
$('#submit-btn').on('click', (e) => {
    e.preventDefault();
    const description = fullEditor.root.innerHTML;
    $('#product-description').val(description);
    const instruction = instructionEditor.root.innerHTML;
    $('#product-instruction').val(instruction);
    $('#kt_ecommerce_add_product_form').submit();
});

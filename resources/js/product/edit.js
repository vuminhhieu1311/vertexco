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
    placeholder: 'Type your text here...',
    theme: 'snow' // or 'bubble'
});
fullEditor.root.innerHTML = $('#product-description').val();

// Product images
var images = [];

var myDropzone = new Dropzone("#add_product_media", {
    url: '#',
    paramName: 'file', // The name that will be used to transfer the file
    maxFiles: 10,
    maxFilesize: 10, // MB
    addRemoveLinks: true,
    accept: function(file, done) {
        images.push({
            name: file.name,
            file,
        });
    }
});

// Add product submit
$('#submit-btn').on('click', (e) => {
    e.preventDefault();
    const description = fullEditor.root.innerHTML;
    $('#product-description').val(description);
    $('#kt_ecommerce_add_product_form').submit();
    // const formData = new FormData(document.getElementById('kt_ecommerce_add_product_form'));
    // images.forEach((image) => {
    //     formData.append('images[]', image.file, image.name);
    // });

    // const productId = $('#product-id-value').val();

    // $.ajax({
    //     type: 'PATCH',
    //     enctype: 'multipart/form-data',
    //     url: `/products/${productId}`,
    //     data: formData,
    //     processData: false,
    //     contentType: false,
    //     cache: false,
    //     success: function(response) {
    //         window.location.href = '/products';
    //     }
    // });
});

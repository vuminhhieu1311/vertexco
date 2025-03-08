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

// Add text-change event listener to update description field
fullEditor.on('text-change', function() {
    const description = fullEditor.root.innerHTML;
    $('#product-description').val(description);
});

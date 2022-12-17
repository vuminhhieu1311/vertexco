$("#quantity-input").on("input", function() {
    const quantity = $(this).val();
    const url = $(this).data('url');

    if (quantity) {
        $.ajax({
            type: 'PUT',
            url,
            data: {
                quantity,
            },
            success: function(res) {
                window.location.href = '/cart';
            },
        });
    }
});

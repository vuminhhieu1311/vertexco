var urlParams = new URLSearchParams(window.location.search);

$('#search-input').keyup (function (e) {
    const keyword = $(this).val();
    urlParams.delete('name');
    urlParams.append('name', keyword);

    if (e.which === 13) {
        window.location.href = `?${urlParams.toString()}`;
    }
});

$('#search-btn').on('click', (e) => {
    e.preventDefault();
    window.location.href = `?${urlParams.toString()}`;
});

$('.add-to-cart').on('click', (e) => {
    e.preventDefault();
    const url = $(e.target).data('url');
    $.ajax({
        type: 'POST',
        url,
        data: {
            quantity: 1,
        },
        success: function(data) {
            $('#cart-count').html(`&nbsp;(${data})`);
            toastr.options.positionClass = 'toast-top-center';
            toastr.success('Thêm vào giỏ hàng thành công.');
        },
    });
});

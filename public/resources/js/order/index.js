$('.cancel-btn').click((e) => {
    const url = $(e.target).data('url');
    const id = $(e.target).data('id');
    Swal.fire({
        title: 'Bạn có chắc chắn muốn huỷ đơn hàng?',
        icon: 'warning',
        buttonsStyling: false,
        showCancelButton: true,
        confirmButtonText: 'Xác nhận',
        cancelButtonText: 'Hủy thao tác',
        customClass: {
            confirmButton: "btn btn-danger",
            cancelButton: 'btn btn-light',
        }
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                type: 'DELETE',
                url,
                success: function(data) {
                    window.localStorage.setItem('success', 'Huỷ đơn hàng thành công!');
                    window.location.href = '/orders';
                },
            });
        }
    });
});

$('.confirm-btn').click((e) => {
    const url = $(e.target).data('url');

    $.ajax({
        type: 'PUT',
        url,
        data: {
            status: 'confirmed',
        },
        success: function (res) {
            window.localStorage.setItem('success', 'Xác nhận đơn hàng thành công!');
            window.location.href = '/orders';
        },
    });
});

$('.status-select').on('input', function () {
    const status = $(this).val();
    const url = $(this).data('url');

    if (status) {
        $.ajax({
            type: 'PUT',
            url,
            data: {
                status,
            },
            success: function (res) {
                window.location.href = '/orders';
            },
        });
    }
});

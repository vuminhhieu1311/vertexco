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

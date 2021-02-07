$(function() {
    $("form").submit(function(e) {
        const form = $(this);

        e.preventDefault();

        $.ajax({
            headers: {
                'X-CSRF-Token': $('input[name="_token"]').val()
            },
            url: form.attr("action"),
            data: form.serialize(),
            type: form.attr("method"),
            dataType: "json",
            success: function(callback) {
                Toastify({
                    text: callback.message,
                    position: "center",
                    className: callback.type,
                }).showToast();

                if(callback.type == 'success') {
                    setTimeout(() => {location.reload()}, 2000);
                }
            }
        });
    });
});

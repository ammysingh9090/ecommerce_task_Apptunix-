$(document).ready(function() {
    $('body').on('click', '.delete-confirm', function() {
        var formId = $(this).attr('data-form');
        Swal.fire({
            title: $(this).data('title') ?? 'Are you sure, you want to delete ?',
           // text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, Delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                $(`form#${formId}`).submit();
            }
        });
    });

    $('body').on('click', '.remove-confirm', function() {
        var formId = $(this).attr('data-form');
        Swal.fire({
            title: "You won't be able to revert this discount !",
           // text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, Remove it!'
        }).then((result) => {
            if (result.isConfirmed) {
                $(`form#${formId}`).submit();
            }
        });
    });


});



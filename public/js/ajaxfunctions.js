// $(document).ready(function () {
//     toastr.options = {
//         'closeButton': true,
//         'debug': false,
//         'newestOnTop': false,
//         'progressBar': false,
//         'positionClass': 'toast-top-right',
//         'preventDuplicates': false,
//         'showDuration': '1000',
//         'hideDuration': '1000',
//         'timeOut': '3000',
//         'extendedTimeOut': '1000',
//         'showEasing': 'swing',
//         'hideEasing': 'linear',
//         'showMethod': 'fadeIn',
//         'hideMethod': 'fadeOut',
//     }

   
// });

toastr.options = {
    'progressBar': true,
}

function deleteItem(id, url, message) {
    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: url + '/' + id,
                type: 'DELETE',
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                success: function(response) {
                    Swal.fire('Deleted!', response.message, 'success');
                    location.reload();
                },
                error: function(xhr) {
                    Swal.fire('Error!', 'Something went wrong.', 'error');
                }
            });
        }
    });
}

function popup(message, success) {
    if (success) {
        toastr.success(message,'success')
    }
    else {
        toastr.error(message,'error')
    }
}



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

var SweetAlert = function () { };

//examples 
SweetAlert.prototype.init = function () {


function deleteItem(id,url,message){
    console.log(id,url,message);
    swal({
        title: "Are you sure?",
        text: "You will not be able to recover this imaginary file!",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#fcb03b",
        confirmButtonText: "Yes, delete it!",
        closeOnConfirm: false
    }, function () {
        swal("Deleted!", "Your imaginary file has been deleted.", "success");
    });
    return false;
}
  
};

function popup(message, success) {
    if (success) {
        toastr.success(message,'success')
    }
    else {
        toastr.error(message,'error')
    }
}



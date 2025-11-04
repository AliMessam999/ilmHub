var textarea = $("#ckeditor").val();
//   console.log(undefined)
  if(textarea !== undefined){
    CKEDITOR.replace('ckeditor', {
extraPlugins: 'editorplaceholder',
editorplaceholder: 'Start typing here...',
removeButtons: 'PasteFromWord'
});
  }

  var textarea = $("#short_description").val();
//   console.log(undefined)
  if(textarea !== undefined){
    CKEDITOR.replace('short_description', {
extraPlugins: 'editorplaceholder',
editorplaceholder: 'Start typing here...',
removeButtons: 'PasteFromWord'
});
  }


//examples
SweetAlert.prototype.init = function() {};


function deleteItem(id, url, message) {
    console.log(id, url, message);

    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: 'btn btn-success',
            cancelButton: 'btn btn-danger'
        },
        buttonsStyling: false
    })

    swalWithBootstrapButtons.fire({
        title: 'Are You Sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: "#fcb03b",
        confirmButtonText: "Yes, Delete It!",
        cancelButtonText: 'No, Cancel!',
        reverseButtons: true
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: url + '/' + id,
                method: "DELETE",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                error: function(data) {
                    popup(data.responseJSON.message)
                },
                success: function(data) {
                    if (data.message != "") {
                        swalWithBootstrapButtons.fire(
                            'Deleted!',
                            'Your ' + message + ' Has Been Deleted.',
                            'success'
                        )
                        setTimeout(function() {
                            location.reload(true);
                        }, 1000)
                    }
                    // window.location.assign('{{ route('header_list') }}');
                }
            })

        } else if (
            /* Read more about handling dismissals below */
            result.dismiss === Swal.DismissReason.cancel
        ) {
            swalWithBootstrapButtons.fire(
                'Cancelled',
                'Your ' + message + ' Is Safe :)',
                'error'
            )
        }
    })
    return false;

}

function UpdateStatus(id, url, message, status) {
    console.log(id, url, message);
    var token = $("#_token").val();
    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: 'btn btn-success',
            cancelButton: 'btn btn-danger'
        },
        buttonsStyling: false
    })

    swalWithBootstrapButtons.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: "#fcb03b",
        confirmButtonText: "Yes, " + status + " it!",
        cancelButtonText: 'No, cancel!',
        reverseButtons: true
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': token
                },
                url: url + '/' + id,
                method: "POST",
                data: {
                    status: status,
                },
                error: function(data) {
                    popup(data.responseJSON.message)
                },
                success: function(data) {
                    console.log(data);
                    if (data != "") {
                        swalWithBootstrapButtons.fire(
                            status + '!',
                            'Your ' + message + ' has been ' + status,
                            'success'
                        )
                        setTimeout(function() {
                            location.reload(true);
                        }, 1000)
                    }
                }

            })

        } else if (
            /* Read more about handling dismissals below */
            result.dismiss === Swal.DismissReason.cancel
        ) {
            swalWithBootstrapButtons.fire(
                'Cancelled',
                'Your ' + message + ' is safe :)',
                'error'
            )
        }
    })
    return false;

}

$("#uploadFile").on("change", function(e) {
e.preventDefault();

var files = this.files;
if (!files.length || !window.FileReader) return;

for (var i = 0; i < files.length; i++) {
if (/^image/.test(files[i].type)) {
  var reader = new FileReader();
  reader.readAsDataURL(files[i]);

  reader.onloadend = function() {
    var imagePreview = $("<div class='image-preview'></div>");
    imagePreview.css("background-image", "url(" + this.result + ")");
    imagePreview.css("height", "100px");
    imagePreview.css("width", "100px");

    var closeButton = $("<button class='close-button'><i class='fa fa-times'></i></button>");
    closeButton.on("click", function() {
      imagePreview.remove();
    });

    imagePreview.append(closeButton);
    $("#imagePreviews").append(imagePreview);
  };
}
}
});

$("#uploadFilesingle").on("change", function(e) {
e.preventDefault()
console.log("here")
var files = !!this.files ? this.files : [];
if (!files.length || !window.FileReader) return;
// no file selected, or no FileReader support
if (/^image/.test(files[0].type)) { // only image file
var reader = new FileReader(); // instance of the FileReader
reader.readAsDataURL(files[0]); // read the local file
console.log("here")
reader.onloadend = function() {
  $("#imagePreview").html("");
  // set image data as background of div
  $("#imagePreview").css("background-image", "url(" + this.result + ")");
  $("#imagePreview").css("height", "100px");
  $("#imagePreview").css("width", "100px");
}
}
});

var indexes = [];
$(".close-button").on("click",function(){
$(this).closest(".image-preview").remove()
$(".image-preview").each(function(index, element){
indexes.push($(element).find("img").attr("data-src"));

});
$("#hiddenFile").val(indexes.join(', '))
});

$("#uploadFilePdfsingle").change(function(){
    
});


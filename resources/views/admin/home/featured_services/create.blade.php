@extends('admin.includes.main')

@section('body')
    <style>
        .ck.ck-editor__main>.ck-editor__editable {
            height: 300px !important;
        }
    </style>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="white_card card_height_100 mb_30">
                    <div class="white_card_header">
                        <div class="box_header m-0">
                            <div class="main-title">
                                <h3 class="m-0">Create Case Study</h3>
                            </div>
                        </div>
                    </div>
                    <form id="AdminForm">
                        @csrf
                        <div class="white_card_body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <label>Title</label>
                                    <div class="common_input mb_15">
                                        <input type="text" name="title" placeholder="Title" autocomplete="off"
                                            required>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <label>Sub Category</label>
                                    <div class="common_input mb_15">
                                        <select class="form-control nice_Select2 wide" name="sub_category_id">
                                            <option value="" disabled selected>Select Sub Category</option>
                                            @foreach ($categories as $subcategory)
                                                <option value="{{ $subcategory->id }}">{{ $subcategory->id }} |
                                                    {{ $subcategory->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <label>Client Name</label>
                                    <div class="common_input mb_15">
                                        <input type="text" name="client_name" placeholder="Enter Client Name"
                                            autocomplete="off">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <label>Funded By</label>
                                    <div class="common_input mb_15">
                                        <input type="text" name="funded_by" placeholder="Enter Funding Source"
                                            autocomplete="off">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <label>Location</label>
                                    <div class="common_input mb_15">
                                        <input type="text" name="location" placeholder="Enter Location"
                                            autocomplete="off">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <label>Industry</label>
                                    <div class="common_input mb_15">
                                        <input type="text" name="industry" placeholder="Enter Industry"
                                            autocomplete="off">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <label>Website</label>
                                    <div class="common_input mb_15">
                                        <input type="text" name="website" placeholder="Enter Website URL"
                                            autocomplete="off">
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <label>User Details</label>
                                    <div class="common_input mb_15">
                                        <textarea name="user_details" placeholder="Enter User Details" rows="4"></textarea>
                                    </div>
                                </div>


                                <div class="col-lg-6">
                                    <label>Icon</label>
                                    <div class="common_input mb_15">
                                        <input type="text" name="icon" placeholder="Icon" autocomplete="off">
                                        <p style="color: #999;">Select <a href="https://fontawesome.com/v5/search"
                                                target="_blank" style="color: #007bff; text-decoration: none;"
                                                title="Click me">icons</a> for this field (Only free fontawesom icons are
                                            allowed)</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                    <div class="d-flex gap-5 align-items-center h-100">

                                        <div class="fileupload btn btn_1 radius_btn btn-anim"><i
                                                class="fa fa-upload"></i><span class="btn-text">Upload Images</span>
                                            <input type="file" multiple class="upload" name="image[]" id="uploadFile"
                                                 accept="image/*">

                                        </div>
                                        <div class="img-upload-wrap">
                                            <div id="imagePreviews"></div>
                                            <!-- <img class="img-responsive" src="dist/img/chair.jpg" alt="upload_img"> -->
                                        </div>
                                    </div>
                                </div>

                                    <div class="col-lg-6">
                                        <label>alt</label>
                                        <div class="common_input mb_15">
                                            <input type="text" name="alt" placeholder="Enter ALt of Image for SEO"
                                                autocomplete="off">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <label>Description</label>
                                        <div class="common_input mb_15">
                                            <textarea name="description" id="ckeditor" placeholder="Enter Description of Career" style="height:100%"></textarea>
                                        </div>
                                    </div>



                                    <div class="col-12">
                                        <div class="create_report_btn mt_30">
                                            <button type="submit" class="btn_1 radius_btn d-block text-center"
                                                id="updatebtn">Create</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop

@section('scripts')
    <script>
        document.getElementById('uploadFilesMultiple').addEventListener('change', function(event) {
            const preview = document.getElementById('imagePreview');
            preview.innerHTML = ''; // clear previous previews
            const files = event.target.files;

            if (files.length > 0) {
                Array.from(files).forEach(file => {
                    if (file.type.startsWith('image/')) {
                        const reader = new FileReader();
                        reader.onload = function(e) {
                            const img = document.createElement('img');
                            img.src = e.target.result;
                            img.classList.add('img-thumbnail');
                            img.style.width = '100px';
                            img.style.height = '100px';
                            img.style.objectFit = 'cover';
                            preview.appendChild(img);
                        };
                        reader.readAsDataURL(file);
                    }
                });
            }
        });
    </script>

    <script>
        $("#AdminForm").on("submit", function(e) {
            e.preventDefault();
            var form = $("#AdminForm");
            $("#updatebtn").html(
                "<i class='fa fa-spinner fa-spin' style='padding:0px;margin-right:10px' id='spinner'></i>Waiting.."
            )

            var formData = new FormData(form[0]);
            var desc = CKEDITOR.instances.ckeditor.getData();
            formData.append("description", desc)
            // console.log(form);
            $.ajax({
                url: "/admin/featured/create",
                method: "POST",
                data: formData,
                contentType: false, //this is requireded please see answers above
                processData: false,
                success: function(data) {
                    $("#spinner").hide();
                    $("#updatebtn").text("");
                    $("#updatebtn").append("Create")
                    if (data.message != "") {
                        popup(data.message, true);
                        window.location.assign('{{ route('featured_list') }}');
                    }
                },
                error: function(data) {
                    $("#spinner").hide();
                    $("#updatebtn").text("");
                    $("#updatebtn").append("Create")
                    var array = $.map(data.responseJSON, function(value, index) {
                        return [value];
                    });
                    array.forEach(element => {
                        // element.forEach(data => {
                        console.log(element)
                        popup(element);
                        // });
                    });
                }
            });
        });
    </script>
@stop

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
                                    <label>Sub Categories</label>
                                    <div class="common_input mb_15">
                                        <select class="form-control nice_Select2 wide" name="sub_category_ids[]" multiple>
                                            @foreach ($categories as $subcategory)
                                                <option value="{{ $subcategory->id }}">{{ $subcategory->title }}</option>
                                            @endforeach
                                        </select>
                                        <small class="text-muted">Hold Ctrl/Cmd to select multiple categories</small>
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

                                <div class="col-lg-6">
                                    <label>Main Alt Text</label>
                                    <div class="common_input mb_15">
                                        <input type="text" name="alt" placeholder="Enter Main Alt Text for SEO" autocomplete="off">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="main-title mt_30">
                                        <h4>Gallery Images</h4>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="service-row-container">
                                        <div id="images-container" style="width: 80%;">
                                            <div class="image-row">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <label>Image</label>
                                                        <div class="fileupload btn btn_1 radius_btn btn-anim mb_15" style="white-space: nowrap; display: block;">
                                                            <i class="fa fa-upload"></i><span class="btn-text">Upload Image</span>
                                                            <input type="file" class="upload" name="images[]" accept="image/*">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-5">
                                                        <label>Alt Text</label>
                                                        <div class="common_input mb_15">
                                                            <input type="text" name="alts[]" placeholder="Enter Alt Text for SEO" autocomplete="off">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-1">
                                                        <button type="button" class="add-image-btn" id="add-image-btn" style="background: #4CAF50; color: white; border: none; border-radius: 50%; width: 40px; height: 40px; font-size: 24px; cursor: pointer; display: flex; align-items: center; justify-content: center; margin-top: 26px;">+</button>
                                                    </div>
                                                </div>
                                            </div>
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
        // Dynamic Image Add/Remove
        document.getElementById('add-image-btn').addEventListener('click', function() {
            const container = document.getElementById('images-container');
            const newRow = document.createElement('div');
            newRow.className = 'image-row';
            newRow.innerHTML = `
                <div class="row">
                    <div class="col-lg-6">
                        <div class="fileupload btn btn_1 radius_btn btn-anim mb_15" style="white-space: nowrap; display: block;">
                            <i class="fa fa-upload"></i><span class="btn-text">Upload Image</span>
                            <input type="file" class="upload" name="images[]" accept="image/*">
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="common_input mb_15">
                            <input type="text" name="alts[]" placeholder="Enter Alt Text for SEO" autocomplete="off">
                        </div>
                    </div>
                    <div class="col-lg-1">
                        <button type="button" class="remove-image" style="background: #ff5a5a; color: white; border: none; border-radius: 50%; width: 40px; height: 40px; font-size: 24px; cursor: pointer; display: flex; align-items: center; justify-content: center;">×</button>
                    </div>
                </div>
            `;
            container.appendChild(newRow);

            newRow.querySelector('.remove-image').addEventListener('click', function() {
                container.removeChild(newRow);
            });
        });

        // Remove image row
        document.addEventListener('click', function(e) {
            if (e.target.classList.contains('remove-image')) {
                e.target.closest('.image-row').remove();
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

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
                                <h3 class="m-0">Create Global Content</h3>
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
                                        <input type="text" name="title" placeholder="Title">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex gap-5 align-items-center h-100">

                                        <div class="fileupload btn btn_1 radius_btn btn-anim"><i
                                                class="fa fa-upload"></i><span class="btn-text">Upload new image</span>
                                            <input type="file" class="upload" name="image" id="uploadFilesingle"
                                                accept="image/*">

                                        </div>
                                        <div class="img-upload-wrap">
                                            <div id="imagePreview"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <label>alt</label>
                                    <div class="common_input mb_15">
                                        <input type="text" name="alt" placeholder="Enter ALt of Image for SEO"
                                            autocomplete="off" value="home_page_card">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <label>Class (Optional)</label>
                                    <div class="common_input mb_15">
                                        <input type="text" name="class" placeholder="Enter CSS class for icon" autocomplete="off" value="tji-service-1">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <label>Type (For multiple section)</label>
                                    <div class="common_input mb_15">
                                        <select class="form-control nice_Select2 wide" name="category_id" required>
                                            <option value="" disabled selected>Select Category</option>
                                            @foreach ($menues as $menu)
                                                @if ($menu->allCategories && $menu->allCategories->isNotEmpty())
                                                    @foreach ($menu->allCategories as $category)
                                                        <option value="{{ $category->id }}">{{ $category->id }} |
                                                            {{ $category->title }}</option>
                                                    @endforeach
                                                @else
                                                    <option value="{{ $menu->id }}">{{ $menu->id }} |
                                                        {{ $menu->title }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <label>Type (For multiple section)</label>
                                    <div class="common_input mb_15">
                                        <select class="form-control nice_Select2 wide" name="position" required>
                                            <option value="" disabled selected>Select Position</option>
                                            <option value="top">Top</option>
                                            <option value="bottom">Bottom</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <label>Description</label>
                                    <div class="common_input mb_15">
                                        <textarea name="description" id="ckeditor" placeholder="Enter Description of offer" style="height:100%"></textarea>
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
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop

@section('scripts')
    <script>
        $("#AdminForm").on("submit", function(e) {
            e.preventDefault();
            var form = $("#AdminForm");
            $("#updatebtn").html(
                "<i class='fa fa-spinner fa-spin' style='padding:0px;margin-right:10px' id='spinner'></i>Waiting.."
            )

            var formData = new FormData(form[0]);
            console.log(CKEDITOR);
            var desc = CKEDITOR.instances.ckeditor.getData();
            formData.append("description", desc)
            // console.log(form);
            $.ajax({
                url: "/admin/offer/create",
                method: "POST",
                data: formData,
                contentType: false, //this is ed please see answers above
                processData: false,
                success: function(data) {
                    $("#spinner").hide();
                    $("#updatebtn").text("");
                    $("#updatebtn").append("Create")
                    console.log(data.message);
                    if (data.message != "") {
                        popup(data.message, true);
                        window.location.assign('{{ route('offer_list') }}');
                    }
                },
                error: function(data) {
                    console.log(data.status)
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

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
                                <h3 class="m-0">Create Partner</h3>
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
                                        <input type="text" name="title" placeholder="Enter Title" autocomplete="off">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <label>Sort</label>
                                    <div class="common_input mb_15">
                                        <input type="number" name="sort" placeholder="Enter Sort No" autocomplete="off">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="d-flex gap-5 align-items-center h-100">

                                        <div class="fileupload btn btn_1 radius_btn btn-anim"><i
                                                class="fa fa-upload"></i><span class="btn-text">Upload new image</span>
                                            <input type="file" class="upload" name="image" id="uploadFilesingle"
                                                accept="image/*">

                                        </div>
                                        <div class="img-upload-wrap">
                                            <div id="imagePreview"></div>
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
                                <div class="col-lg-6">
                                    <label>Link</label>
                                    <div class="common_input mb_15">
                                        <input type="url" name="link" placeholder="Enter link of website of partner"
                                            autocomplete="off">
                                    </div>
                                </div>
                               
                            </div>
                            <div class="row">

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
            // console.log(form);
            $.ajax({
                url: "/admin/partner/create",
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
                        window.location.assign('{{ route('partner_list') }}');
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

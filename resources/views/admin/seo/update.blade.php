@extends('admin.includes.main')

@section('body')

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="white_card card_height_100 mb_30">
                    <div class="white_card_header">
                        <div class="box_header m-0">
                            <div class="main-title">
                                <h3 class="m-0">Update Insights</h3>
                            </div>
                        </div>
                    </div>
                    <div class="white_card_body">
                        <form id="CircleForm">
                            @csrf
                            <input type="hidden" value="{{ __($seoable_id) }}" id="career_id">
                            <input type="hidden" name="seoable_type" value="{{ __($seoable_type ?? '') }}" id="career_id">
                            <input type="hidden" name="seoable_id" value="{{ __($seoable_id ?? '') }}" id="career_id">

                            <div class="row">
                                <div class="col-lg-6">
                                    <label>Meta Title</label>
                                    <div class="common_input mb_15">
                                        <input type="text" name="meta_title"
                                            value="{{ old('meta_title', $seo->meta_title ?? '') }}"
                                            placeholder="Enter Meta Title">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <label>Meta Author</label>
                                    <div class="common_input mb_15">
                                        <input type="text" name="meta_author"
                                            value="{{ old('meta_author', $seo->meta_author ?? '') }}"
                                            placeholder="Enter Meta Author">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <label>Meta Description</label>
                                    <div class="common_input mb_15">
                                        <input type="text" name="meta_description"
                                            value="{{ old('meta_description', $seo->meta_description ?? '') }}"
                                            placeholder="Enter Meta Description">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <label>Meta Keywords</label>
                                    <div class="common_input mb_15">
                                        <input type="text" name="meta_keywords"
                                            value="{{ old('meta_keywords', $seo->meta_keywords ?? '') }}"
                                            placeholder="Enter comma-separated keywords">
                                    </div>
                                </div>

                                <hr class="my-4">

                                <div class="col-lg-6">
                                    <label>OG Title</label>
                                    <div class="common_input mb_15">
                                        <input type="text" name="og_title"
                                            value="{{ old('og_title', $seo->og_title ?? '') }}"
                                            placeholder="Enter OG Title">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <label>OG Type</label>
                                    <div class="common_input mb_15">
                                        <input type="text" name="og_type"
                                            value="{{ old('og_type', $seo->og_type ?? '') }}"
                                            placeholder="Enter OG Type (e.g. website, article)">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <label>OG Description</label>
                                    <div class="common_input mb_15">
                                        <input type="text" name="og_description"
                                            value="{{ old('og_description', $seo->og_description ?? '') }}"
                                            placeholder="Enter OG Description">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <label>OG URL</label>
                                    <div class="common_input mb_15">
                                        <input type="text" name="og_url"
                                            value="{{ old('og_url', $seo->og_url ?? '') }}" placeholder="Enter OG URL">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="d-flex gap-5  align-items-center h-100">

                                        <div class="fileupload btn btn_1 radius_btn btn-anim"><i
                                                class="fa fa-upload"></i><span class="btn-text">Upload OG Image</span>
                                            <input type="file" class="upload" name="og_image" id="uploadFilesingle"
                                                accept="image/*">

                                        </div>
                                        <div class="img-upload-wrap">
                                            <div id="imagePreview">
                                                @if (!empty($seo->og_image))
                                                    <img src="/{{ $seo->og_image }}" class="image-list" alt="upload_img">
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-12">
                                    <div class="create_report_btn mt_30">
                                        <button href="#" class="btn_1 radius_btn d-block text-center" type="submit"
                                            id="updatebtn">Update</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@stop

@section('scripts')
    <script>
        $("#CircleForm").on("submit", function(e) {
            e.preventDefault();
            var form = $("#CircleForm");
            $("#updatebtn").html(
                "<i class='fa fa-spinner fa-spin' style='padding:0px;margin-right:10px' id='spinner'></i>Waiting.."
            )

            var formData = new FormData(form[0]);
            var id = $("#career_id").val();
            // var desc = CKEDITOR.instances.ckeditor.getData();
            // formData.append("description", desc)
            $.ajax({
                url: "/admin/seo/update/" + id,
                method: "POST",
                data: formData,
                contentType: false, //this is requireded please see answers above
                processData: false,
                success: function(data) {
                    $("#spinner").hide();
                    $("#updatebtn").text("");
                    $("#updatebtn").append("Update")
                    console.log(data.message);
                    if (data.message != "") {
                        popup(data.message, true);
                        window.location.assign('{{ route('news_list') }}');
                    }
                },
                error: function(data) {
                    console.log(data.status)
                    $("#spinner").hide();
                    $("#updatebtn").text("");
                    $("#updatebtn").append("Update")
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

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
                            {{-- <input type="hidden" value="{{ __($menu->id) }}" id="career_id"> --}}
                            <div class="row">
                                <div class="col-lg-6">
                                    <label>Meta Title</label>
                                    <div class="common_input mb_15">
                                        <input type="text" name="meta_title" placeholder="Enter Meta Title">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <label>Meta Author</label>
                                    <div class="common_input mb_15">
                                        <input type="text" name="meta_author" placeholder="Enter Meta Author">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <label>Meta Description</label>
                                    <div class="common_input mb_15">
                                        <input type="text" name="meta_description" placeholder="Enter Meta Description">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <label>Meta Keywords</label>
                                    <div class="common_input mb_15">
                                        <input type="text" name="meta_keywords"
                                            placeholder="Enter comma-separated keywords">
                                    </div>
                                </div>

                                <hr class="my-4">

                                <div class="col-lg-6">
                                    <label>OG Title</label>
                                    <div class="common_input mb_15">
                                        <input type="text" name="og_title" placeholder="Enter OG Title">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <label>OG Type</label>
                                    <div class="common_input mb_15">
                                        <input type="text" name="og_type"
                                            placeholder="Enter OG Type (e.g. website, article)">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <label>OG Description</label>
                                    <div class="common_input mb_15">
                                        <input type="text" name="og_description" placeholder="Enter OG Description">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <label>OG Image</label>
                                    <div class="common_input mb_15">
                                        <input type="file" name="og_image" accept="image/*">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <label>OG URL</label>
                                    <div class="common_input mb_15">
                                        <input type="text" name="og_url" placeholder="Enter OG URL">
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
            var desc = CKEDITOR.instances.ckeditor.getData();
            formData.append("description", desc)
            $.ajax({
                url: "/admin/news/update/" + id,
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

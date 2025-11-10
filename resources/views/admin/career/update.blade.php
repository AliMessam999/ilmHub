@extends('admin.includes.main')

@section('body')

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="white_card card_height_100 mb_30">
                    <div class="white_card_header">
                        <div class="box_header m-0">
                            <div class="main-title">
                                <h3 class="m-0">Update Career</h3>
                            </div>
                        </div>
                    </div>
                    <div class="white_card_body">
                        <form id="CircleForm">
                            @csrf
                            <input type="hidden" value="{{ __($menu->id) }}" id="career_id">
                            <div class="row">
                                <div class="col-lg-6">
                                    <label>Title</label>
                                    <div class="common_input mb_15">
                                        <input type="text" name="title" value="{{ __($menu->title) }}"
                                            placeholder="Title" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <label>Icon</label>
                                    <div class="common_input mb_15">
                                        <input type="text" name="icon" value="{{ __($menu->icon) }}"
                                            autocomplete="off" required>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-lg-6">
                                        <label>Vacancy Number</label>
                                        <div class="common_input mb_15">
                                            <input type="text" name="vacancy_number" value="{{ __($menu->vacancy_number) }}" placeholder="Enter Vacancy Number"
                                                autocomplete="off">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <label>Tags</label>
                                        <div class="common_input mb_15">
                                            <input type="text" name="tags" value="{{ __($menu->tags) }}" placeholder="Enter comma-separated tags"
                                                autocomplete="off">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <label>Location Type</label>
                                        <div class="common_input mb_15">
                                            <input type="text" name="location_type" value="{{ __($menu->location_type) }}" placeholder="Enter Location Type"
                                                autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <label>Email</label>
                                        <div class="common_input mb_15">
                                            <input type="email" name="email" value="{{ __($menu->email) }}"
                                                placeholder="Enter email" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <label>Last Date To Apply</label>
                                        <div class="common_input mb_15">
                                            <input type="date" name="last_date_to_apply"
                                                placeholder="Enter Last Date To APply"
                                                value="{{ __($menu->last_date_to_apply) }}" autocomplete="off">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="d-flex gap-5  align-items-center h-100">

                                            <div class="fileupload btn btn_1 radius_btn btn-anim"><i
                                                    class="fa fa-upload"></i><span class="btn-text">Upload new image</span>
                                                <input type="file" class="upload" name="image" id="uploadFilesingle"
                                                    accept="image/*">

                                            </div>
                                            <div class="img-upload-wrap">
                                                <div id="imagePreview">
                                                    <img src="/{{ __($menu->image) }}" class="image-list" alt="upload_img">
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-lg-6">
                                        <label>alt</label>
                                        <div class="common_input mb_15">
                                            <input type="text" name="alt" value="{{ __($menu->alt) }}"
                                                placeholder="Enter ALt of Image for SEO" autocomplete="off">
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-lg-12">
                                        <label>Description</label>
                                        <div class="common_input mb_15">
                                            <textarea name="description" id="ckeditor" placeholder="Enter Description of Career" style="height:100%">{{ __($menu->description) }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <label>Short Description</label>
                                        <div class="common_input mb_15">
                                            <textarea name="short_description" id="short_description" placeholder="Enter Description of Career" style="height:100%">{{ __($menu->short_description) }}</textarea>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="create_report_btn mt_30">
                                            <button href="#" class="btn_1 radius_btn d-block text-center"
                                                type="submit" id="updatebtn">Update</button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </form>
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
            var short_description = CKEDITOR.instances.short_description.getData();
            formData.append("description", desc)
            formData.append("short_description", short_description)
            $.ajax({
                url: "/admin/career/update/" + id,
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
                        window.location.assign('{{ route('career_list') }}');
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

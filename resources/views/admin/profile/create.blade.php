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
                                <h3 class="m-0">Update Profile</h3>
                            </div>
                                <a href="/admin/seo/update/CdProfile/{{$item->id}}" title="Add Seo Data" class="btn btn-primary"> Update SEO </a>
                        </div>
                    </div>
                    <hr>
                    <form id="AdminForm">
                        @csrf

                        @if(isset($item->id))
                        <input type="hidden" name="profile_id" value="{{ $item->id }}">
                        @endif
                        <div class="white_card_body">
                            <div class="row">

                                <div class="col-lg-6">
                                    <label>FaceBook Link</label>
                                    <div class="common_input mb_15">
                                        <input type="text" name="facebook_link" placeholder="Enter facebook link"
                                            autocomplete="off"
                                            value="{{ $item ? $item->facebook_link : '' }}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <label>Email</label>
                                    <div class="common_input mb_15">
                                        <input type="email" name="email" placeholder="Enter Email No" autocomplete="off"
                                            value="{{ $item ? $item->email : '' }}">
                                    </div>
                                </div>
                            
                            <div class="col-lg-6">
                                <label>Address</label>
                                <div class="common_input mb_15">
                                    <input type="text" name="address" placeholder="Enter Address" autocomplete="off"
                                        value="{{ isset($item) && !empty($item) ? $item->address : '' }}">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <label>Location</label>
                                <div class="common_input mb_15">
                                    <input type="text" name="location" placeholder="Enter location" autocomplete="off"
                                        value="{{ isset($item) && !empty($item) ? $item->location : '' }}">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <label>Youtube Link</label>
                                <div class="common_input mb_15">
                                    <input type="text" name="youtube_link" placeholder="Enter youtube link"
                                        autocomplete="off" value="{{ isset($item) && !empty($item) ? $item->youtube_link : '' }}">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <label>Google Link</label>
                                <div class="common_input mb_15">
                                    <input type="text" name="google_link" placeholder="Enter google link"
                                        autocomplete="off" value="{{ isset($item) && !empty($item) ? $item->google_link : '' }}">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <label>Instagram Link</label>
                                <div class="common_input mb_15">
                                    <input type="text" name="instagram_link" placeholder="Enter instagram link"
                                        autocomplete="off" value="{{ isset($item) && !empty($item) ? $item->instagram_link : '' }}">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <label>Twitter Link</label>
                                <div class="common_input mb_15">
                                    <input type="text" name="twitter_link" placeholder="Enter twitter link"
                                        autocomplete="off" value="{{ isset($item) && !empty($item) ? $item->twitter_link : '' }}">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <label>Open Days</label>
                                <div class="common_input mb_15">
                                    <input type="text" name="open_days" placeholder="Enter Open Days" autocomplete="off"
                                        value="{{ isset($item) && !empty($item) ? $item->open_days : '' }}">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <label>Open Time</label>
                                <div class="common_input mb_15">
                                    <input type="text" name="open_time" placeholder="Enter Open Time" autocomplete="off"
                                        value="{{ isset($item) && !empty($item) ? $item->open_time : '' }}">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <label>Contact</label>
                                <div class="common_input mb_15">
                                    <input type="text" name="contact" placeholder="Enter Contact" autocomplete="off"
                                        value="{{ isset($item) && !empty($item) ? $item->contact : '' }}">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <label>Contact2</label>
                                <div class="common_input mb_15">
                                    <input type="text" name="contact_2" placeholder="Enter Contact2" autocomplete="off"
                                        value="{{ isset($item) && !empty($item) ? $item->contact_2 : '' }}">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <label>Email 2</label>
                                <div class="common_input mb_15">
                                    <input type="email" name="email_2" placeholder="Enter Email 2" autocomplete="off"
                                        value="{{ isset($item) && !empty($item) ? $item->email_2 : '' }}">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <label>Address 2</label>
                                <div class="common_input mb_15">
                                    <input type="text" name="address_2" placeholder="Enter Address 2"
                                        autocomplete="off" value="{{ isset($item) && !empty($item) ? $item->address_2 : '' }}">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <label>Fax</label>
                                <div class="common_input mb_15">
                                    <input type="text" name="fax" placeholder="Enter Fax"
                                        autocomplete="off" value="{{ isset($item) && !empty($item) ? $item->fax : '' }}">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <label>Description</label>
                                <div class="common_input mb_15">
                                    <input type="text" name="description" placeholder="Enter Description"
                                        autocomplete="off" value="{{ isset($item) && !empty($item) ? $item->description : '' }}">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex gap-5  align-items-center h-100">
                                    <div class="fileupload btn btn_1 radius_btn btn-anim"><i
                                            class="fa fa-upload"></i><span class="btn-text">Upload new image</span>
                                        <input type="file" class="upload" name="image" id="uploadFilesingle"
                                            accept="image/*">
                                    </div>
                                    <div class="img-upload-wrap">
                                        <div id="imagePreview">
                                            @if($item)
                                            <img src="/{{ __($item->image) }}" class="image-list" alt="upload_img">
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <label>alt</label>
                                <div class="common_input mb_15">
                                    <input type="text" name="alt" value="{{ $item ? $item->alt :'' }}"
                                        placeholder="Enter ALt of Image for SEO" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex gap-5  align-items-center h-100">
                                    <div class="fileupload btn btn_1 radius_btn btn-anim"><i
                                            class="fa fa-upload"></i><span class="btn-text">Upload large logo</span>
                                        <input type="file" class="upload" name="large_logo" id="uploadFilesingle"
                                            accept="image/*">
                                    </div>
                                    <div class="img-upload-wrap">
                                        <div id="imagePreview">
                                            @if($item)
                                            <img src="/{{ __($item->large_logo) }}" class="image-list" alt="upload_img">
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class="row">
                                <div class="col-12">
                                    <div class="create_report_btn mt_30">
                                        <button type="submit" class="btn_1 radius_btn d-block text-center"
                                            id="updatebtn">Update</button>
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
                url: "/admin/company-profile/create",
                method: "POST",
                data: formData,
                contentType: false, //this is ed please see answers above
                processData: false,
                success: function(data) {
                    $("#spinner").hide();
                    $("#updatebtn").text("");
                    $("#updatebtn").append("Update")
                    console.log(data.message);
                    if (data.message != "") {
                        popup(data.message, true);
                        location.reload(true);
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

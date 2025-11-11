@extends('admin.includes.main')

@section('body')

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="white_card card_height_100 mb_30">
                <div class="white_card_header">
                    <div class="box_header m-0">
                        <div class="main-title">
                            <h3 class="m-0">Update Header</h3>
                        </div>
                    </div>
                </div>
                <div class="white_card_body">
                    <form id="CircleForm">
                        @csrf 
                        <input type="hidden" value="{{ $menu->id }}" id="header_id">

                        <div class="row">
                            <!-- Title -->
                            <div class="col-lg-6">
                                <label>Title</label>
                                <div class="common_input mb_15">
                                    <input type="text" name="title" value="{{ $menu->title }}" placeholder="Title" required>
                                </div>
                            </div>

                            <!-- Slug -->
                            <div class="col-lg-6">
                                <label>Slug</label>
                                <div class="common_input mb_15">
                                    <input type="text" name="slug" value="{{ $menu->slug }}" placeholder="Slug" required>
                                </div>
                            </div>

                            <!-- Icon -->
                            <div class="col-lg-6">
                                <label>Icon</label>
                                <div class="common_input mb_15">
                                    <input type="text" name="icon" value="{{ $menu->icon }}" autocomplete="off" required>
                                </div>
                            </div>

                            <!-- Submit -->
                            <div class="col-12">
                                <div class="create_report_btn mt_30">
                                    <button class="btn_1 radius_btn d-block text-center" type="submit" id="updatebtn">Update</button>
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
        $("#updatebtn").html("<i class='fa fa-spinner fa-spin' style='padding:0px;margin-right:10px' id='spinner'></i>Waiting..")

        var formData = new FormData(form[0]);
        var id = $("#header_id").val();

        $.ajax({
            url: "/admin/header/update/"+id,
            method: "POST",
            data: formData,
            contentType: false,
            processData: false,
            success: function(data) {
                $("#spinner").hide();
                $("#updatebtn").text("Update");
                if (data.message != "") {
                    popup(data.message, true);
                    window.location.assign('{{ route("header_list") }}');
                }
            },
            error: function(data) {
                $("#spinner").hide();
                $("#updatebtn").text("Update");
                var array = $.map(data.responseJSON, function(value, index) {
                    return [value];
                });
                array.forEach(element => popup(element));
            }
        });
    });
</script>
@stop

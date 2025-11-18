@extends('admin.includes.main')

@section('body')

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="white_card card_height_100 mb_30">
                <div class="white_card_header">
                    <div class="box_header m-0">
                        <div class="main-title">
                            <h3 class="m-0">Update Skills</h3>
                        </div>
                    </div>
                </div>

                <div class="white_card_body">
                    <form id="CircleForm">
                        @csrf 
                        <input type="hidden" value="{{ $menu->id }}" id="header_id">

                        <div class="row">

                            <!-- TITLE -->
                            <div class="col-lg-6">
                                <label>Title</label>
                                <div class="common_input mb_15">
                                    <input type="text" name="title" value="{{ $menu->title }}" placeholder="Title" required>
                                </div>
                            </div>

                            <!-- PERCENTAGE -->
                            <div class="col-lg-6">
                                <label>Percentage</label>
                                <div class="common_input mb_15">
                                    <input type="text" name="percentage" value="{{ $menu->percentage }}" autocomplete="off" required>
                                </div>
                            </div>

                            <!-- OPTIONAL DESCRIPTION -->
                            <div class="col-lg-6">
                                <label>Description (Optional)</label>
                                <div class="common_input mb_15">
                                    <input 
                                        type="text" 
                                        name="description" 
                                        value="{{ $menu->description }}" 
                                        placeholder="Description (optional)">
                                </div>
                            </div>

                            <!-- OPTIONAL POSITION -->
                            <div class="col-lg-6">
                                <label>Position (Optional)</label>
                                <div class="common_input mb_15">
                                    <input 
                                        type="text" 
                                        name="position" 
                                        value="{{ $menu->position }}" 
                                        placeholder="Position (optional)">
                                </div>
                            </div>

                            <!-- SUBMIT BUTTON -->
                            <div class="col-12">
                                <div class="create_report_btn mt_30">
                                    <button type="submit" class="btn_1 radius_btn d-block text-center" id="updatebtn">
                                        Update
                                    </button>
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
        $("#updatebtn").html("<i class='fa fa-spinner fa-spin' style='margin-right:10px'></i>Waiting..");

        var formData = new FormData(form[0]);
        var id = $("#header_id").val();

        $.ajax({
            url: "/admin/skills/update/" + id,
            method: "POST",
            data: formData,
            contentType: false,
            processData: false,
            success: function(data) {
                $("#updatebtn").html("Update");
                if (data.message) {
                    popup(data.message, true);
                    window.location.assign('{{ route("skills_list") }}');
                }
            },
            error: function(data) {
                $("#updatebtn").html("Update");
                var array = $.map(data.responseJSON, function(value) { return [value]; });
                array.forEach(element => popup(element));
            }
        });
    });
</script>
@stop

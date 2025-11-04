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
                                <h3 class="m-0">Create Users</h3>
                            </div>
                        </div>
                    </div>
                    <form id="AdminForm">
                        @csrf
                        <div class="white_card_body">
                            <div class="row">
                                
                                <div class="col-lg-6">
                                    <label>Name</label>
                                    <div class="common_input mb_15">
                                        <input type="text" name="name" placeholder="Enter Name"
                                            autocomplete="off">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <label>Email</label>
                                    <div class="common_input mb_15">
                                        <input type="email" name="email" placeholder="Enter Email No"
                                            autocomplete="off">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                              
                                <div class="col-lg-6">
                                    <label>Password</label>
                                    <div class="common_input mb_15">
                                        <input type="password" name="password" placeholder="******"
                                            autocomplete="off">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <label>Role</label>
                                    <div class="common_input mb_15">
                                        <select id="inputState" class="nice_Select2 wide form-control" name="role">
                                            <option selected="">Choose...</option>
                                            @foreach ($roles as $item)
                                                <option value="{{ __($item->id) }}">{{ __($item->name) }}</option>
                                            @endforeach
                                        </select>
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
                url: "/admin/user/create",
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
                        window.location.assign('{{ route('user_list') }}');
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

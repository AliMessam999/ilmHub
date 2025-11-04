@extends('admin.includes.main')

@section('body')

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="white_card card_height_100 mb_30">
                    <div class="white_card_header">
                        <div class="box_header m-0">
                            <div class="main-title">
                                <h3 class="m-0">Create Role</h3>
                            </div>
                        </div>
                    </div>
                    <form id="RoleForm">
                        @csrf
                        <div class="white_card_body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <label>Name</label>
                                    <div class="common_input mb_15">
                                        <input type="text" name="name" placeholder="Name" required>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <table class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Module
                                                    <div class="checkbox_wrap d-flex align-items-center">
                                                        <label class="form-label lms_checkbox_1" for="checkAll">
                                                            <input type="checkbox" id="checkAll" onclick="checkAll(this)"  />
                                                            <div class="slider-check round"></div>
                                                        </label>
                                                    </div>
                                                    </td>

                                                </th>
                                                <th>Create</th>
                                                <th>Read</th>
                                                <th>Update</th>
                                                <th>Delete</th>
                                                <th>Approve</th>
                                                <th>All</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($permissions as $index=>$module)
                                            <tr>
                                                <th class="text-capitalize">{{ $module['module']}}</th>
                                                @foreach($module['permissions'] as $subindex => $permission)
                                                {{-- {{ dd($permission)}} --}}
                                                <td class="text-center">
                                                    
                                                    <div class="checkbox_wrap d-flex align-items-center">
                                                        <label class="form-label lms_checkbox_1">
                                                            
                                                            <input type="checkbox"  class="permissionCheckbox" name="permissions[]" value="{{ $permission['id'] }}" @if(($permission['id'] || (isset($permission['name']) && strpos($permission['name'], 'all') !== false)) && $permission['selected'] == 'Yes')
                                                            checked
                                                            @endif/>
                                                            <div class="slider-check round"></div>
                                                        </label>
                                                    </div>
                                                </td>
                                            @endforeach
                                                
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
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
        function checkAll(source) {
        var checkboxes = document.querySelectorAll('.permissionCheckbox');
        checkboxes.forEach(function(checkbox) {
            checkbox.checked = source.checked;
        });
    }
        $("#RoleForm").on("submit", function(e) {
            e.preventDefault();
            var form = $("#RoleForm");
            $("#updatebtn").html(
                "<i class='fa fa-spinner fa-spin' style='padding:0px;margin-right:10px' id='spinner'></i>Waiting.."
            )

            var formData = new FormData(form[0]);
            // console.log(form);return;
            $.ajax({
                url: "/admin/role/create",
                method: "POST",
                data: formData,
                contentType: false,
                processData: false,
                success: function(data) {
                    $("#spinner").hide();
                    $("#updatebtn").text("");
                    $("#updatebtn").append("Create")
                    console.log(data.message);
                    if (data.message != "") {
                        popup(data.message, true);
                        window.location.assign('{{ route('role_list') }}');
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

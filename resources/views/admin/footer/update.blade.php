@extends('admin.includes.main')

@section('body')

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="white_card card_height_100 mb_30">
                <div class="white_card_header">
                    <div class="box_header m-0">
                        <div class="main-title">
                            <h3 class="m-0">Update Footer</h3>
                        </div>
                    </div>
                </div>

                <div class="white_card_body">
                    <form id="FooterForm">
                        @csrf

                        <input type="hidden" id="footer_id" value="{{ $footer->id }}">

                        <div class="row">
                            <div class="col-lg-6">
                                <label>Title</label>
                                <div class="common_input mb_15">
                                    <input type="text" name="title" value="{{ $footer->title }}" required>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <label>Menu</label>
                                <div class="common_input mb_15">
                                    <select class="form-control nice_Select2 wide" name="menu_id" required>
                                        <option value="" disabled>Select Menu</option>
                                        @foreach($menus as $menu)
                                            <option value="{{ $menu->id }}" 
                                                {{ $menu->id == $footer->menu_id ? 'selected' : '' }}>
                                                {{ $menu->id }} | {{ $menu->title }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">

                            <div class="col-lg-6">
                                <label>Category</label>
                                <div class="common_input mb_15">
                                    <select class="form-control nice_Select2 wide" name="category_id">
                                        <option value="">None</option>
                                        @foreach($categories as $cat)
                                            <option value="{{ $cat->id }}"
                                                {{ $cat->id == $footer->category_id ? 'selected' : '' }}>
                                                {{ $cat->id }} | {{ $cat->title }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <label>Sub Category</label>
                                <div class="common_input mb_15">
                                    <select class="form-control nice_Select2 wide" name="sub_category_id">
                                        <option value="">None</option>
                                        @foreach($categories as $cat)
                                            <option value="{{ $cat->id }}"
                                                {{ $cat->id == $footer->sub_category_id ? 'selected' : '' }}>
                                                {{ $cat->id }} | {{ $cat->title }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="create_report_btn mt_30">
                                    <button class="btn_1 radius_btn d-block text-center" 
                                            type="submit" id="updatebtn">
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
    $("#FooterForm").on("submit", function(e) {
        e.preventDefault();

        var form = $("#FooterForm");
        $("#updatebtn").html("<i class='fa fa-spinner fa-spin' style='margin-right:10px'></i>Waiting..");

        var formData = new FormData(form[0]);
        var id = $("#footer_id").val();

        $.ajax({
            url: "/admin/footer/update/" + id,
            method: "POST",
            data: formData,
            contentType: false,
            processData: false,

            success: function(res) {
                $("#updatebtn").text("Update");

                popup(res.message, true);
                window.location.assign('{{ route("footer_list") }}');
            },

            error: function(err) {
                $("#updatebtn").text("Update");

                var errors = $.map(err.responseJSON, function(value) {
                    return [value];
                });
                
                errors.forEach((msg) => popup(msg));
            }
        });
    });
</script>
@stop
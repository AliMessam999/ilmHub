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
                            <h3 class="m-0">Create Category</h3>
                        </div>
                    </div>
                </div>
                <form id="AdminForm">
                    @csrf
                    <div class="white_card_body">
                        <div class="row">

                            <!-- Title -->
                            <div class="col-lg-6">
                                <label>Title</label>
                                <div class="common_input mb_15">
                                    <input type="text" name="title" id="titleInput" placeholder="Title" autocomplete="off" required>
                                </div>
                            </div>

                            <!-- Slug -->
                            <div class="col-lg-6">
                                <label>Slug</label>
                                <div class="common_input mb_15">
                                    <input type="text" name="slug" id="slugInput" placeholder="Slug (optional)">
                                    <p style="color: #999;">Leave empty to auto-generate from title</p>
                                </div>
                            </div>

                            <!-- Menu -->
                            <div class="col-lg-6">
                                <label>Menu</label>
                                <div class="common_input mb_15">
                                    <select class="form-control nice_Select2 wide" name="menu_id" required>
                                        <option value="" disabled selected>Select Menu</option>
                                        @foreach($menus as $menu)
                                            <option value="{{ $menu->id }}">{{ $menu->id }} | {{ $menu->title }}</option>
                                        @endforeach
                                    </select>                                
                                </div>
                            </div>

                            <!-- Description -->
                            <div class="col-lg-12">
                                <label>Description</label>
                                <div class="common_input mb_15">
                                    <textarea name="description"  id="ckeditor" style="height:100%"></textarea>
                                </div>
                            </div>

                            <!-- Submit -->
                            <div class="col-12">
                                <div class="create_report_btn mt_30">
                                    <button type="submit" class="btn_1 radius_btn d-block text-center" id="updatebtn">Create</button>
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
    // Function to generate slug like Laravel Str::slug
    function slugify(text) {
        return text.toString().normalize('NFD')
            .replace(/[\u0300-\u036f]/g, '')
            .toLowerCase().trim()
            .replace(/\s+/g, '-')
            .replace(/[^\w\-]+/g, '')
            .replace(/\-\-+/g, '-')
            .replace(/^-+/, '')
            .replace(/-+$/, '');
    }

    const titleInput = document.getElementById('titleInput');
    const slugInput = document.getElementById('slugInput');
    let slugManuallyModified = false;

    titleInput.addEventListener('input', function() {
        if (!slugManuallyModified) slugInput.value = slugify(this.value);
    });

    slugInput.addEventListener('input', function() {
        slugManuallyModified = this.value.trim() !== '';
    });

    slugInput.addEventListener('change', function() {
        if (this.value.trim() === '') {
            slugManuallyModified = false;
            slugInput.value = slugify(titleInput.value);
        }
    });

    // AJAX submit
    $("#AdminForm").on("submit", function(e) {
        e.preventDefault();
        var form = $("#AdminForm");
        $("#updatebtn").html("<i class='fa fa-spinner fa-spin' style='padding:0px;margin-right:10px' id='spinner'></i>Waiting..");

        var formData = new FormData(form[0]);
        var desc = CKEDITOR.instances.ckeditor.getData();
        formData.append("description", desc);

        $.ajax({
            url: "/admin/category/create",
            method: "POST",
            data: formData,
            contentType: false,
            processData: false,
            success: function(data) {
                $("#spinner").hide();
                $("#updatebtn").text("Create");
                if (data.message != "") {
                    popup(data.message, true);
                    window.location.assign('{{ route("category_list") }}');
                }
            },
            error: function(data) {
                $("#spinner").hide();
                $("#updatebtn").text("Create");
                var array = $.map(data.responseJSON, function(value) { return [value]; });
                array.forEach(element => popup(element));
            }
        });
    });
</script>
@stop

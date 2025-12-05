@extends('admin.includes.main')

@section('body')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="white_card card_height_100 mb_30">
                <div class="white_card_header">
                    <div class="box_header m-0">
                        <div class="main-title">
                            <h3 class="m-0">Update Category</h3>
                        </div>
                    </div>
                </div>
                <div class="white_card_body">
                    <form id="CircleForm">
                        @csrf 
                        <input type="hidden" value="{{ $category->id }}" id="category_id">

                        <div class="row">
                            <!-- Title -->
                            <div class="col-lg-6">
                                <label>Title</label>
                                <div class="common_input mb_15">
                                    <input type="text" name="title" id="titleInput" value="{{ $category->title }}" placeholder="Title" required>
                                </div>
                            </div>

                            <!-- Slug -->
                            <div class="col-lg-6">
                                <label>Slug</label>
                                <div class="common_input mb_15">
                                    <input type="text" name="slug" id="slugInput" value="{{ $category->slug }}" placeholder="Slug (optional)">
                                    <p style="color: #999;">Leave empty to auto-generate from title</p>
                                </div>
                            </div>

                            <!-- Menu -->
                            <div class="col-lg-6">
                                <label>Menu</label>
                                <div class="common_input mb_15">
                                    <select class="form-control nice_Select2 wide" name="menu_id" required>
                                        <option value="" disabled>Select Menu</option>
                                        @foreach($menuItems as $menuItem)
                                            <option value="{{ $menuItem->id }}" {{ $category->menu_id == $menuItem->id ? 'selected' : '' }}>
                                                {{ $menuItem->id }} | {{ $menuItem->title }}
                                            </option>
                                        @endforeach
                                    </select>                                
                                </div>
                            </div>

                            <!-- Image -->
                            <div class="col-lg-6">
                                <label>Image</label>
                                <div class="d-flex gap-5 align-items-center h-100">
                                    <div class="fileupload btn btn_1 radius_btn btn-anim">
                                        <i class="fa fa-upload"></i>
                                        <span class="btn-text">Upload Image</span>
                                        <input type="file" class="upload" name="image" accept="image/*">
                                    </div>
                                    @if($category->image)
                                        <div class="img-upload-wrap">
                                            <div class="image-preview" style="position: relative; display: inline-block; margin: 5px;">
                                                <img src="{{ asset($category->image) }}" class="image-list" alt="Current Image" style="height:100px; width:100px; object-fit:cover; border-radius:5px;">
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>

                            <!-- Description -->
                            <div class="col-lg-12">
                                <label>Description</label>
                                <div class="common_input mb_15">
                                    <textarea name="description" id="ckeditor" style="height:100%">{{ $category->description }}</textarea>
                                </div>
                            </div>

                            <!-- Submit -->
                            <div class="col-12">
                                <div class="create_report_btn mt_30">
                                    <button type="submit" class="btn_1 radius_btn d-block text-center" id="updatebtn">Update</button>
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
    // Slugify function like Laravel Str::slug
    function slugify(text) {
        return text
            .toString()
            .normalize('NFD')
            .replace(/[\u0300-\u036f]/g, '')
            .toLowerCase()
            .trim()
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
        if (!slugManuallyModified) {
            slugInput.value = slugify(this.value);
        }
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

    // AJAX form submission
    $("#CircleForm").on("submit", function(e) {
        e.preventDefault();
        var form = $("#CircleForm");
        $("#updatebtn").html("<i class='fa fa-spinner fa-spin' style='padding:0px;margin-right:10px' id='spinner'></i>Waiting..");

        var formData = new FormData(form[0]);
        var id = $("#category_id").val();
        var desc = CKEDITOR.instances.ckeditor.getData();
        formData.append("description", desc);

        $.ajax({
            url: "/admin/category/update/" + id,
            method: "POST",
            data: formData,
            contentType: false,
            processData: false,
            success: function(data) {
                $("#spinner").hide();
                $("#updatebtn").text("Update");
                if (data.message != "") {
                    popup(data.message, true);
                    window.location.assign('{{ route("category_list") }}');
                }
            },
            error: function(data) {
                $("#spinner").hide();
                $("#updatebtn").text("Update");
                var array = $.map(data.responseJSON, function(value) { return [value]; });
                array.forEach(element => popup(element));
            }
        });
    });

    // Image preview functionality
    $('input[name="image"]').on('change', function(event) {
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                $('.img-upload-wrap').html(`
                    <div class="image-preview" style="position: relative; display: inline-block; margin: 5px;">
                        <img src="${e.target.result}" class="image-list" alt="Selected Image" style="height:100px; width:100px; object-fit:cover; border-radius:5px;">
                    </div>
                `);
            };
            reader.readAsDataURL(file);
        }
    });
</script>
@stop

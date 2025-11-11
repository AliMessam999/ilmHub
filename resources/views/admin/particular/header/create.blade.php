@extends('admin.includes.main')

@section('body')

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="white_card card_height_100 mb_30">
                <div class="white_card_header">
                    <div class="box_header m-0">
                        <div class="main-title">
                            <h3 class="m-0">Create Header</h3>
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
                                    <input type="text" name="title" id="titleInput" placeholder="Title" required>
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

                            <!-- Icon -->
                            <div class="col-lg-6">
                                <label>Icon</label>
                                <div class="common_input mb_15">
                                    <input type="text" name="icon" placeholder="Icon" autocomplete="off" required>
                                    <p style="color: #999;">Select <a href="https://fontawesome.com/v5/search" target="_blank" style="color: #007bff; text-decoration: none;" title="Click me">icons</a> (Only free FontAwesome icons allowed)</p>
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
    // Match Laravel's Str::slug behavior exactly
    function slugify(text) {
        return text
            .toString()
            .normalize('NFD')               // Normalize Unicode
            .replace(/[\u0300-\u036f]/g, '') // Remove accent characters
            .toLowerCase()
            .trim()
            .replace(/\s+/g, '-')           // Replace spaces with -
            .replace(/[^\w\-]+/g, '')       // Remove all non-word chars except -
            .replace(/\-\-+/g, '-')         // Replace multiple - with single -
            .replace(/^-+/, '')             // Trim - from start
            .replace(/-+$/, '');            // Trim - from end
    }

    const titleInput = document.getElementById('titleInput');
    const slugInput = document.getElementById('slugInput');

    // Auto-fill slug only if slug field is empty or hasn't been manually modified
    let slugManuallyModified = false;

    titleInput.addEventListener('input', function() {
        if (!slugManuallyModified) {
            slugInput.value = slugify(this.value);
        }
    });

    // Track if user manually modifies the slug
    slugInput.addEventListener('input', function() {
        slugManuallyModified = this.value.trim() !== '';
    });

    // If user clears slug field, resume auto-generation
    slugInput.addEventListener('change', function() {
        if (this.value.trim() === '') {
            slugManuallyModified = false;
            slugInput.value = slugify(titleInput.value);
        }
    });

    // AJAX form submission
    $("#AdminForm").on("submit", function(e) {
        e.preventDefault();
        var form = $("#AdminForm");
        $("#updatebtn").html("<i class='fa fa-spinner fa-spin' style='padding:0px;margin-right:10px' id='spinner'></i>Waiting..");

        var formData = new FormData(form[0]);

        $.ajax({
            url: "/admin/header/create",
            method: "POST",
            data: formData,
            contentType: false,
            processData: false,
            success: function(data) {
                $("#spinner").hide();
                $("#updatebtn").text("Create");
                if (data.message != "") {
                    popup(data.message, true);
                    window.location.assign('{{ route("header_list") }}');
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
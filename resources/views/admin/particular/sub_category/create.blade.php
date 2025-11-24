@extends('admin.includes.main')

@section('body')

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="white_card card_height_100 mb_30">
                <div class="white_card_header">
                    <div class="box_header m-0">
                        <div class="main-title">
                            <h3 class="m-0">Create SubCategory</h3>
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
                                    <input type="text" name="slug" id="slugInput" placeholder="/sub-divisions/slug-name">
                                    <p style="color: #999;">Leave empty to auto-generate from title</p>
                                </div>
                            </div>

                            <!-- Parent -->
                            <div class="col-lg-6">
                                <label>Parent</label>
                                <div class="common_input mb_15">
                                    <select class="form-control nice_Select2 wide" name="parent" required>
                                        <option value="" disabled selected>Select Parent</option>
                                        @foreach($parents as $parent)
                                            <option value="{{ $parent->id }}">{{ $parent->id }} | {{ $parent->title }}</option>
                                        @endforeach
                                    </select>                                
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

    function generateFullSlug(title) {
        const baseSlug = slugify(title);
        return '/sub-divisions/' + baseSlug;
    }

    const titleInput = document.getElementById('titleInput');
    const slugInput = document.getElementById('slugInput');
    let slugManuallyModified = false;

    titleInput.addEventListener('input', function() {
        if (!slugManuallyModified) {
            slugInput.value = generateFullSlug(this.value);
        }
    });

    slugInput.addEventListener('input', function() {
        // Check if user manually removed the /sub-divisions/ prefix
        if (!this.value.startsWith('/sub-divisions/')) {
            slugManuallyModified = true;
        } else {
            slugManuallyModified = this.value.trim() !== '/sub-divisions/';
        }
    });

    slugInput.addEventListener('change', function() {
        if (this.value.trim() === '' || this.value === '/sub-divisions/') {
            slugManuallyModified = false;
            slugInput.value = generateFullSlug(titleInput.value);
        }
    });

    // Initialize with empty slug that includes the prefix
    document.addEventListener('DOMContentLoaded', function() {
        if (!slugManuallyModified && titleInput.value === '') {
            slugInput.value = '/sub-divisions/';
        }
    });

    // AJAX form submission
    $("#AdminForm").on("submit", function(e) {
        e.preventDefault();
        var form = $("#AdminForm");
        $("#updatebtn").html("<i class='fa fa-spinner fa-spin' style='padding:0px;margin-right:10px' id='spinner'></i>Waiting..");

        var formData = new FormData(form[0]);

        $.ajax({
            url: "/admin/sub_category/create",
            method: "POST",
            data: formData,
            contentType: false,
            processData: false,
            success: function(data) {
                $("#spinner").hide();
                $("#updatebtn").text("Create");
                if (data.message != "") {
                    popup(data.message, true);
                    window.location.assign('{{ route("sub_category_list") }}');
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
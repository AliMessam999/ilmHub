@extends('admin.includes.main')

@section('body')

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="white_card card_height_100 mb_30">
                <div class="white_card_header">
                    <div class="box_header m-0">
                        <div class="main-title">
                            <h3 class="m-0">Update SubCategory</h3>
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
                                <input type="text" name="title" id="titleInput" value="{{ $menu->title }}" placeholder="Title" required>
                            </div>
                        </div>

                        <!-- Slug -->
                        <div class="col-lg-6">
                            <label>Slug</label>
                            <div class="common_input mb_15">
                                <input type="text" name="slug" id="slugInput" value="{{ $menu->slug }}" placeholder="Slug (optional)">
                                <p style="color:#999;">Leave empty to auto-generate from title</p>
                            </div>
                        </div>

                        <!-- Parent -->
                        <div class="col-lg-6">
                            <label>Parent</label>
                            <div class="common_input mb_15">
                                <select class="form-control nice_Select2 wide" name="parent" required>
                                    <option value="" disabled>Select Parent</option>
                                    @foreach($parents as $parent)
                                    <option value="{{ $parent->id }}" {{ $parent->id == $menu->parent ? 'selected' : '' }}>
                                        {{ $parent->id }} | {{ $parent->title }}
                                    </option>
                                    @endforeach
                                </select>
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
    // Slug generation function (matches Laravel's Str::slug)
    function slugify(text) {
        return text.toString().normalize('NFD').replace(/[\u0300-\u036f]/g, '')
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

    // Auto-generate slug while typing title
    titleInput.addEventListener('input', function() {
        if (!slugManuallyModified) {
            slugInput.value = slugify(this.value);
        }
    });

    // Track manual slug editing
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
        var id = $("#header_id").val();

        $.ajax({
            url: "/admin/sub_category/update/" + id,
            method: "POST",
            data: formData,
            contentType: false,
            processData: false,
            success: function(data) {
                $("#spinner").hide();
                $("#updatebtn").text("Update");
                if (data.message != "") {
                    popup(data.message, true);
                    window.location.assign('{{ route("sub_category_list") }}');
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
</script>
@stop

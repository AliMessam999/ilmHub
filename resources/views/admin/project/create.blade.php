@extends('admin.includes.main')

@section('body')
    <style>
        .ck.ck-editor__main>.ck-editor__editable {
            height: 300px !important;
        }

        .customer-service-row {
            border-radius: 5px;
            position: relative;
            width: 100%;
        }

        .remove-service {
            background: #ff5a5a;
            color: white;
            border: none;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            font-size: 24px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-left: 10px;
        }

        .add-service-btn, .add-faq-btn {
            background: #4CAF50;
            color: white;
            border: none;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            font-size: 24px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-left: 10px;
            margin-top: 26px;
        }

        .remove-faq {
            background: #ff5a5a;
            color: white;
            border: none;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            font-size: 24px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-left: 10px;
        }

        .service-row-container {
            display: flex;
            align-items: flex-start;
        }
    </style>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="white_card card_height_100 mb_30">
                    <div class="white_card_header">
                        <div class="box_header m-0">
                            <div class="main-title">
                                <h3 class="m-0">Create Solution</h3>
                            </div>
                        </div>
                    </div>
                    <form id="AdminForm">
                        @csrf
                        <div class="white_card_body">
                            <div class="row">
                                <!-- ✅ Solution Title Added -->
                                <div class="col-lg-6">
                                    <label>Solution Title</label>
                                    <div class="common_input mb_15">
                                        <input type="text" name="title" id="titleInput" placeholder="Enter title for solution"
                                            autocomplete="off">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <label>Sub Category</label>
                                    <div class="common_input mb_15">
                                        <select id="inputState" class="nice_Select2 wide form-control" name="category_id">
                                            <option selected="">Choose...</option>
                                            @foreach ($sub_categories as $item)
                                                <option value="{{ __($item->id) }}">{{ __($item->title) }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="d-flex gap-5 align-items-center h-100">
                                        <div class="fileupload btn btn_1 radius_btn btn-anim">
                                            <i class="fa fa-upload"></i><span class="btn-text">Upload new image</span>
                                            <input type="file" class="upload" name="image" id="uploadFilesingle"
                                                accept="image/*">
                                        </div>
                                        <div class="img-upload-wrap">
                                            <div id="imagePreview"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <label>alt</label>
                                    <div class="common_input mb_15">
                                        <input type="text" name="alt" placeholder="Enter Alt text for SEO"
                                            autocomplete="off">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <label>Slug</label>
                                    <div class="common_input mb_15">
                                        <input type="text" name="slug" id="slugInput" placeholder="/sub-divisions/solution-name">
                                        <p style="color: #999; font-size: 12px; margin-top: 5px;">Leave empty to auto-generate from title</p>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <label>Description</label>
                                    <div class="common_input mb_15">
                                        <textarea name="description" id="ckeditor" placeholder="Enter Description of Project" style="height:100%"></textarea>
                                    </div>
                                </div>

                                <!-- ✅ Customer Services Section -->
                                <div class="col-12">
                                    <div class="main-title mt_30">
                                        <h4>Add Customer Services</h4>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="service-row-container">
                                        <div id="customer-services-container" style="width: 80%;">
                                            <div class="customer-service-row">
                                                <div class="row">
                                                    <div class="col-lg-2">
                                                        <label>Service Title</label>
                                                        <div class="common_input mb_15">
                                                            <input type="text" name="service_titles[]"
                                                                placeholder="Enter Service Title" autocomplete="off">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <label>Service Label</label>
                                                        <div class="common_input mb_15">
                                                            <select name="service_labels[]" class="nice_Select2 wide form-control">
                                                                <option value="withImage">withImage</option>
                                                                <option value="withoutImage">withoutImage</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <label>Service Description</label>
                                                        <div class="common_input mb_15">
                                                            <input type="text" name="service_descriptions[]"
                                                                placeholder="Enter Service Description" autocomplete="off">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <label>Service Image</label>
                                                        <div class="fileupload btn btn_1 radius_btn btn-anim mb_15" style="white-space: nowrap; display: block;">
                                                            <i class="fa fa-upload"></i><span class="btn-text">Upload Image</span>
                                                            <input type="file" class="upload" name="service_images[]" accept="image/*">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-1">
                                                        <button type="button" class="add-service-btn" id="add-service-btn">+</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- ✅ FAQs Section -->
                                <div class="col-12">
                                    <div class="main-title mt_30">
                                        <h4>Add FAQs</h4>
                                    </div>
                                </div>

                               <div class="col-12">
                                    <div class="service-row-container">
                                        <div id="faqs-container" style="width: 80%;">
                                            <div class="faq-row">
                                                <div class="row">
                                                    <div class="col-lg-5">
                                                        <label>FAQ Title</label>
                                                        <div class="common_input mb_15">
                                                            <input type="text" name="faq_titles[]"
                                                                placeholder="Enter FAQ Title" autocomplete="off">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <label>FAQ Description</label>
                                                        <div class="common_input mb_15">
                                                            <input type="text" name="faq_descriptions[]"
                                                                placeholder="Enter FAQ Description" autocomplete="off">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-1">
                                                        <button type="button" class="add-faq-btn" id="add-faq-btn">+</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
            if (!title || title.trim() === '') {
                return '/sub-divisions/';
            }
            const baseSlug = slugify(title);
            return '/sub-divisions/' + baseSlug;
        }

        // Auto-slug generation
        $(document).ready(function() {
            const titleInput = document.getElementById('titleInput');
            const slugInput = document.getElementById('slugInput');
            let slugManuallyModified = false;

            // Initialize slug field
            slugInput.value = '/sub-divisions/';

            // Title input event
            titleInput.addEventListener('input', function() {
                if (!slugManuallyModified) {
                    slugInput.value = generateFullSlug(this.value);
                }
            });

            // Slug input event - detect manual modification
            slugInput.addEventListener('input', function() {
                const currentValue = this.value;
                const autoGeneratedSlug = generateFullSlug(titleInput.value);
                
                // If user modifies the slug differently from auto-generated
                if (currentValue !== autoGeneratedSlug) {
                    slugManuallyModified = true;
                }
            });

            // Slug change event - reset if empty
            slugInput.addEventListener('change', function() {
                if (this.value.trim() === '' || this.value === '/sub-divisions/') {
                    slugManuallyModified = false;
                    slugInput.value = generateFullSlug(titleInput.value);
                }
            });
        });

        // Remove service row
        document.addEventListener('click', function(e) {
            if (e.target.classList.contains('remove-service')) {
                e.target.closest('.customer-service-row').remove();
            }
        });

        // Alternative Customer Services Dynamic Add/Remove
        document.getElementById('add-service-btn').addEventListener('click', function() {
            const container = document.getElementById('customer-services-container');
            const newRow = document.createElement('div');
            newRow.className = 'customer-service-row';
            newRow.innerHTML = `
                <div class="row">
                    <div class="col-lg-2">
                        <div class="common_input mb_15">
                            <input type="text" name="service_titles[]" placeholder="Enter Service Title" autocomplete="off">
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="common_input mb_15">
                            <select name="service_labels[]" class="nice_Select2 wide form-control">
                                <option value="withImage">withImage</option>
                                <option value="withoutImage">withoutImage</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="common_input mb_15">
                            <input type="text" name="service_descriptions[]" placeholder="Enter Service Description" autocomplete="off">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="fileupload btn btn_1 radius_btn btn-anim mb_15" style="white-space: nowrap; display: block;">
                            <i class="fa fa-upload"></i><span class="btn-text">Upload Image</span>
                            <input type="file" class="upload" name="service_images[]" accept="image/*">
                        </div>
                    </div>
                    <div class="col-lg-1">
                        <button type="button" class="remove-service">×</button>
                    </div>
                </div>
            `;
            container.appendChild(newRow);

            newRow.querySelector('.remove-service').addEventListener('click', function() {
                container.removeChild(newRow);
            });
        });

        document.querySelectorAll('.remove-service').forEach(button => {
            button.addEventListener('click', function() {
                this.closest('.customer-service-row').remove();
            });
        });

        // FAQ Dynamic Add/Remove
        document.getElementById('add-faq-btn').addEventListener('click', function() {
            const container = document.getElementById('faqs-container');
            const newRow = document.createElement('div');
            newRow.className = 'faq-row';
            newRow.innerHTML = `
                <div class="row">
                    <div class="col-lg-5">
                        <div class="common_input mb_15">
                            <input type="text" name="faq_titles[]" placeholder="Enter FAQ Title" autocomplete="off">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="common_input mb_15">
                            <textarea name="faq_descriptions[]" rows="3" placeholder="Enter FAQ Description"></textarea>
                        </div>
                    </div>
                    <div class="col-lg-1">
                        <button type="button" class="remove-faq">×</button>
                    </div>
                </div>
            `;
            container.appendChild(newRow);

            newRow.querySelector('.remove-faq').addEventListener('click', function() {
                container.removeChild(newRow);
            });
        });

        // Remove FAQ row
        document.addEventListener('click', function(e) {
            if (e.target.classList.contains('remove-faq')) {
                e.target.closest('.faq-row').remove();
            }
        });

        // ✅ Form Submit via AJAX
        $("#AdminForm").on("submit", function(e) {
            e.preventDefault();
            var form = $("#AdminForm");
            $("#updatebtn").html(
                "<i class='fa fa-spinner fa-spin' style='padding:0px;margin-right:10px' id='spinner'></i>Waiting.."
                );

            var formData = new FormData(form[0]);
            var desc = CKEDITOR.instances.ckeditor.getData();
            formData.append("description", desc);

            $.ajax({
                url: "/admin/project/create",
                method: "POST",
                data: formData,
                contentType: false,
                processData: false,
                success: function(data) {
                    $("#spinner").hide();
                    $("#updatebtn").text("Create");
                    if (data.message != "") {
                        popup(data.message, true);
                        window.location.assign('{{ route('project_list') }}');
                    }
                },
                error: function(data) {
                    $("#spinner").hide();
                    $("#updatebtn").text("Create");
                    var array = $.map(data.responseJSON, function(value, index) {
                        return [value];
                    });
                    array.forEach(element => {
                        popup(element);
                    });
                }
            });
        });
    </script>
@stop
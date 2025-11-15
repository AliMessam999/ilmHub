@extends('admin.includes.main')

@section('body')
    <style>
        .ck.ck-editor__main>.ck-editor__editable {
            height: 300px !important;
        }

        .customer-service-row {
            /* margin-bottom: 15px; */
            /* padding: 15px; */
            /* border: 1px solid #e0e0e0; */
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
            /* margin-top: 26px; */
            /* position: absolute;
            top: 10px;
            right: 10px;
            background: #ff5a5a;
            color: white;
            border: none;
            border-radius: 50%;
            width: 25px;
            height: 25px;
            cursor: pointer;
            display: none; */
        }

        /* .customer-service-row:hover .remove-service {
            display: block;
        } */

        .add-service-btn {
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
                                        <input type="text" name="title" placeholder="Enter title for solution"
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
                                        <input type="text" name="slug" placeholder="Slug">
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
                                                    <div class="col-lg-5">
                                                        <label>Service Title</label>
                                                        <div class="common_input mb_15">
                                                            <input type="text" name="service_titles[]"
                                                                placeholder="Enter Service Title" autocomplete="off">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <label>Service Description</label>
                                                        <div class="common_input mb_15">
                                                            <input type="text" name="service_descriptions[]"
                                                                placeholder="Enter Service Description" autocomplete="off">
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
        document.getElementById('add-service-btn').addEventListener('click', function() {
            let container = document.getElementById('customer-services-container');

            // Clone the first row
            let firstRow = container.querySelector('.customer-service-row');
            let newRow = firstRow.cloneNode(true);

            // Clear input values
            newRow.querySelectorAll('input').forEach(i => i.value = '');

            // Show remove button on new rows
            newRow.querySelector('.remove-service').style.display = 'block';

            // Hide add button inside cloned row (if any)
            if (newRow.querySelector('.add-service-btn')) {
                newRow.querySelector('.add-service-btn').style.display = 'none';
            }

            container.appendChild(newRow);
        });

        // Remove service row
        document.addEventListener('click', function(e) {
            if (e.target.classList.contains('remove-service')) {
                e.target.closest('.customer-service-row').remove();
            }
        });
    </script>
    <script>
        // ✅ Customer Services Dynamic Add/Remove
        document.getElementById('add-service-btn').addEventListener('click', function() {
            const container = document.getElementById('customer-services-container');
            const newRow = document.createElement('div');
            newRow.className = 'customer-service-row';
            newRow.innerHTML = `
                <div class="row">
                    <div class="col-lg-5">
                        <div class="common_input mb_15">
                            <input type="text" name="service_titles[]" placeholder="Enter Service Title" autocomplete="off">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="common_input mb_15">
                            <input type="text" name="service_descriptions[]" placeholder="Enter Service Description" autocomplete="off">
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

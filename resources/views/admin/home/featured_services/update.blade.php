@extends('admin.includes.main')

@section('body')

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="white_card card_height_100 mb_30">
                    <div class="white_card_header">
                        <div class="box_header m-0">
                            <div class="main-title">
                                <h3 class="m-0">Update Case Study</h3>
                            </div>
                        </div>
                    </div>
                    <div class="white_card_body">
                        <form id="CircleForm">
                            @csrf
                            <input type="hidden" value="{{ __($menu->id) }}" id="header_id">
                            <div class="row">
                                <div class="col-lg-6">
                                    <label>Title</label>
                                    <div class="common_input mb_15">
                                        <input type="text" name="title" value="{{ __($menu->title) }}"
                                            placeholder="Title" required>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <label>Sub Categories</label>
                                    <div class="common_input mb_15">
                                        <select class="form-control nice_Select2 wide" name="sub_category_ids[]" multiple>
                                            @foreach ($categories as $subcategory)
                                                <option value="{{ $subcategory->id }}"
                                                    {{ in_array($subcategory->id, $menu->subCategories->pluck('id')->toArray()) ? 'selected' : '' }}>
                                                    {{ $subcategory->title }}
                                                </option>
                                            @endforeach
                                        </select>
                                        <small class="text-muted">Hold Ctrl/Cmd to select multiple categories</small>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <label>Client Name</label>
                                    <div class="common_input mb_15">
                                        <input type="text" name="client_name" value="{{ $menu->client_name }}"
                                            placeholder="Enter Client Name" autocomplete="off">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <label>Funded By</label>
                                    <div class="common_input mb_15">
                                        <input type="text" name="funded_by" value="{{ $menu->funded_by }}"
                                            placeholder="Enter Funding Source" autocomplete="off">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <label>Location</label>
                                    <div class="common_input mb_15">
                                        <input type="text" name="location" value="{{ $menu->location }}"
                                            placeholder="Enter Location" autocomplete="off">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <label>Industry</label>
                                    <div class="common_input mb_15">
                                        <input type="text" name="industry" value="{{ $menu->industry }}"
                                            placeholder="Enter Industry" autocomplete="off">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <label>Website</label>
                                    <div class="common_input mb_15">
                                        <input type="text" name="website" value="{{ $menu->website }}"
                                            placeholder="Enter Website URL" autocomplete="off">
                                    </div>
                                </div>


                                <div class="col-lg-6">
                                    <label>Icon</label>
                                    <div class="common_input mb_15">
                                        <input type="text" name="icon" value="{{ __($menu->icon) }}"
                                            autocomplete="off" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <label>Main Alt Text</label>
                                    <div class="common_input mb_15">
                                        <input type="text" name="alt" value="{{ __($menu->alt) }}"
                                            placeholder="Enter Main Alt Text for SEO" autocomplete="off">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="main-title mt_30">
                                        <h4>Gallery Images</h4>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="service-row-container">
                                        <div id="images-container" style="width: 80%;">
                                            @if($menu->images && $menu->images->count() > 0)
                                                @foreach($menu->images as $image)
                                                <div class="image-row">
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <div style="position: relative; display: inline-block; margin: 5px;">
                                                                <img src="/{{ $image->image }}" alt="{{ $image->alt }}"
                                                                    style="height:100px; width:100px; object-fit:cover; border-radius:5px;">
                                                                <input type="hidden" name="existing_images[]" value="{{ $image->id }}">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <label>New Image (Optional)</label>
                                                            <div class="fileupload btn btn_1 radius_btn btn-anim mb_15" style="white-space: nowrap; display: block;">
                                                                <i class="fa fa-upload"></i><span class="btn-text">Replace Image</span>
                                                                <input type="file" class="upload" name="images[]" accept="image/*">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <label>Alt Text</label>
                                                            <div class="common_input mb_15">
                                                                <input type="text" name="alts[]" value="{{ $image->alt }}" placeholder="Enter Alt Text for SEO" autocomplete="off">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-1">
                                                            <button type="button" class="remove-image" style="background: #ff5a5a; color: white; border: none; border-radius: 50%; width: 40px; height: 40px; font-size: 24px; cursor: pointer; display: flex; align-items: center; justify-content: center;">×</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                            @endif
                                            <div class="image-row">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <label>Add New Image</label>
                                                        <div class="fileupload btn btn_1 radius_btn btn-anim mb_15" style="white-space: nowrap; display: block;">
                                                            <i class="fa fa-upload"></i><span class="btn-text">Upload Image</span>
                                                            <input type="file" class="upload" name="images[]" accept="image/*">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-5">
                                                        <label>Alt Text</label>
                                                        <div class="common_input mb_15">
                                                            <input type="text" name="alts[]" placeholder="Enter Alt Text for SEO" autocomplete="off">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-1">
                                                        <button type="button" class="add-image-btn" id="add-image-btn" style="background: #4CAF50; color: white; border: none; border-radius: 50%; width: 40px; height: 40px; font-size: 24px; cursor: pointer; display: flex; align-items: center; justify-content: center; margin-top: 26px;">+</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <label>Description</label>
                                    <div class="common_input mb_15">
                                        <textarea name="description" id="ckeditor" placeholder="Enter Description" style="height:100%">{{ __($menu->description) }}</textarea>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="create_report_btn mt_30">
                                        <button class="btn_1 radius_btn d-block text-center"
                                            type="submit" id="updatebtn">Update</button>
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
        $("#CircleForm").on("submit", function(e) {
            e.preventDefault();
            console.log('Form submitted');
            
            var form = $("#CircleForm");
            $("#updatebtn").html(
                "<i class='fa fa-spinner fa-spin' style='padding:0px;margin-right:10px' id='spinner'></i>Waiting.."
            )

            var formData = new FormData(form[0]);
            var desc = CKEDITOR.instances.ckeditor.getData();
            formData.append("description", desc)
            var id = $("#header_id").val();
            
            console.log('Form ID:', id);
            console.log('Description:', desc);
            
            // Log all form data
            for (var pair of formData.entries()) {
                console.log(pair[0] + ': ' + pair[1]);
            }
            $.ajax({
                url: "/admin/featured/update/" + id,
                method: "POST",
                data: formData,
                contentType: false, //this is requireded please see answers above
                processData: false,
                success: function(data) {
                    console.log('Success response:', data);
                    $("#spinner").hide();
                    $("#updatebtn").text("");
                    $("#updatebtn").append("Update")
                    console.log(data.message);
                    if (data.message != "") {
                        popup(data.message, true);
                        window.location.assign('{{ route('featured_list') }}');
                    }
                },
                error: function(data) {
                    console.log(data.status)
                    $("#spinner").hide();
                    $("#updatebtn").text("");
                    $("#updatebtn").append("Update")
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

        // Dynamic Image Add/Remove
        document.getElementById('add-image-btn').addEventListener('click', function() {
            const container = document.getElementById('images-container');
            const newRow = document.createElement('div');
            newRow.className = 'image-row';
            newRow.innerHTML = `
                <div class="row">
                    <div class="col-lg-6">
                        <div class="fileupload btn btn_1 radius_btn btn-anim mb_15" style="white-space: nowrap; display: block;">
                            <i class="fa fa-upload"></i><span class="btn-text">Upload Image</span>
                            <input type="file" class="upload" name="images[]" accept="image/*">
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="common_input mb_15">
                            <input type="text" name="alts[]" placeholder="Enter Alt Text for SEO" autocomplete="off">
                        </div>
                    </div>
                    <div class="col-lg-1">
                        <button type="button" class="remove-image" style="background: #ff5a5a; color: white; border: none; border-radius: 50%; width: 40px; height: 40px; font-size: 24px; cursor: pointer; display: flex; align-items: center; justify-content: center;">×</button>
                    </div>
                </div>
            `;
            container.appendChild(newRow);

            newRow.querySelector('.remove-image').addEventListener('click', function() {
                container.removeChild(newRow);
            });
        });

        // Remove image row
        document.addEventListener('click', function(e) {
            if (e.target.classList.contains('remove-image')) {
                const imageRow = e.target.closest('.image-row');
                const hiddenInput = imageRow.querySelector('input[name="existing_images[]"]');
                
                if (hiddenInput) {
                    // Mark existing image for deletion
                    const deletedInput = document.createElement('input');
                    deletedInput.type = 'hidden';
                    deletedInput.name = 'deleted_images[]';
                    deletedInput.value = hiddenInput.value;
                    document.getElementById('CircleForm').appendChild(deletedInput);
                }
                
                imageRow.remove();
            }
        });
    </script>
@stop

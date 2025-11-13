@extends('admin.includes.main')

@section('body')

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="white_card card_height_100 mb_30">
                <div class="white_card_header">
                    <div class="box_header m-0">
                        <div class="main-title">
                            <h3 class="m-0">Update Global Content</h3>
                        </div>
                    </div>
                </div>
                <div class="white_card_body">
                    <form id="CircleForm">
                        @csrf 
                        <input type="hidden" value="{{ __($menu->id) }}" id="offer_id">
                    <div class="row">
                        <div class="col-lg-6">
                            <label>Title</label>
                            <div class="common_input mb_15">
                                <input type="text" name="title" value="{{__($menu->title)}}" placeholder="Title" required>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex gap-5  align-items-center h-100">

                                <div class="fileupload btn btn_1 radius_btn btn-anim"><i
                                        class="fa fa-upload"></i><span class="btn-text">Upload new image</span>
                                    <input type="file" class="upload" name="image" id="uploadFilesingle"
                                         accept="image/*">

                                </div>
                                <div class="img-upload-wrap">
                                    <div id="imagePreview">
                                     <img src="/{{__($menu->image)}}" class="image-list" alt="upload_img">
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <label>alt</label>
                                <div class="common_input mb_15">
                                    <input type="text" name="alt" value="{{__($menu->alt)}}" placeholder="Enter ALt of Image for SEO"
                                        autocomplete="off">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                    <label>Type (For multiple section)</label>
                                    <div class="common_input mb_15">
                                    <select class="form-control nice_Select2 wide" name="category_id" required>
                                            <option value="" disabled selected>Select Category</option>
                                            @foreach ($categories as $category)
                                                @if ($category->allCategories && $category->allCategories->isNotEmpty())
                                                    @foreach ($category->allCategories as $all_category)
                                                        <option value="{{ $all_category->id }}" {{ $menu->category_id == $all_category->id ? 'selected':'' }}>{{ $all_category->id }} |
                                                            {{ $all_category->title }}</option>
                                                    @endforeach
                                                @else
                                                    <option value="{{ $category->id }}" {{ $menu->category_id == $category->id ? 'selected':'' }}>{{ $category->id }} |
                                                        {{ $category->title }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <label>Type (For multiple section)</label>
                                    <div class="common_input mb_15">
                                    <select class="form-control nice_Select2 wide" name="position" required>
                                            <option value="" disabled selected>Select Position</option>
                                            <option value="top" {{ $menu->position == 'top' ? 'selected':'' }}>Top</option>
                                            <option value="bottom" {{ $menu->position == 'bottom' ? 'selected':'' }}>Bottom</option>
                                        </select>
                                    </div>
                                </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <label>Description</label>
                                <div class="common_input mb_15">
                                    <textarea name="description" id="ckeditor" placeholder="Enter Description of offer" style="height:100%">{{__($menu->description)}}</textarea>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="create_report_btn mt_30">
                                    <button href="#" class="btn_1 radius_btn d-block text-center" type="submit" id="updatebtn">Update</button>
                                </div>
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
      var form = $("#CircleForm");
      $("#updatebtn").html("<i class='fa fa-spinner fa-spin' style='padding:0px;margin-right:10px' id='spinner'></i>Waiting..")

      var formData = new FormData(form[0]);
      var id = $("#offer_id").val();
      var desc = CKEDITOR.instances.ckeditor.getData();
        formData.append("description", desc)
      // console.log(form);
      $.ajax({
        url: "/admin/offer/update/"+id,
        method: "POST",
        data: formData,
        contentType: false, //this is requireded please see answers above
        processData: false,
        success: function(data) {
          $("#spinner").hide();
          $("#updatebtn").text("");
          $("#updatebtn").append("Update")
          console.log(data.message);
          if (data.message != "") {
            popup(data.message, true);
            window.location.assign('{{ route("offer_list") }}');
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
  </script>
@stop

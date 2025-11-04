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
                        <input type="hidden" value="{{ __($menu->id) }}" id="header_id">
                    <div class="row">
                        <div class="col-lg-6">
                            <label>Title</label>
                            <div class="common_input mb_15">
                                <input type="text" name="title" value="{{__($menu->title)}}" placeholder="Title" required>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <label>Parent</label>
                            <div class="common_input mb_15">
                                {{-- <input type="text" name="title" value="{{__($menu->parent)}}" placeholder="Title" required> --}}
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
                        <div class="col-12">
                            <div class="create_report_btn mt_30">
                                <button href="#" class="btn_1 radius_btn d-block text-center" type="submit" id="updatebtn">Update</button>
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
      var id = $("#header_id").val();
      // console.log(form);
      $.ajax({
        url: "/admin/sub_category/update/"+id,
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
            window.location.assign('{{ route("sub_category_list") }}');
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

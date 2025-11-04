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
                            <div class="col-lg-6">
                                <label>Title</label>
                                <div class="common_input mb_15">
                                    <input type="text" name="title" placeholder="Title" autocomplete="off" required>
                                </div>
                            </div>
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
    $("#AdminForm").on("submit", function(e) {
      e.preventDefault();
      var form = $("#AdminForm");
      $("#updatebtn").html("<i class='fa fa-spinner fa-spin' style='padding:0px;margin-right:10px' id='spinner'></i>Waiting..")

      var formData = new FormData(form[0]);
      // console.log(form);
      $.ajax({
        url: "/admin/sub_category/create",
        method: "POST",
        data: formData,
        contentType: false, //this is requireded please see answers above
        processData: false,
        success: function(data) {
          $("#spinner").hide();
          $("#updatebtn").text("");
          $("#updatebtn").append("Create")
          if (data.message != "") {
            popup(data.message, true);
            window.location.assign('{{ route("sub_category_list") }}');
          }
        },
        error: function(data) {
          $("#spinner").hide();
          $("#updatebtn").text("");
          $("#updatebtn").append("Create")
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

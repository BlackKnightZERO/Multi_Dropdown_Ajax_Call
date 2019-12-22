@extends('master')
@section('title', 'Submit Disease')
@section('page-content')
<!-- Modal -->
<form method="POST" action="{{ route('addDisease') }}">
    @csrf
<div class="modal fade" id="AddDiseasesModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="col-11 modal-title text-center" id="exampleModalLabel">Apply For Feedback</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" name="name">
                  </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">D.O.B</label>
                    <div id="datepicker" class="input-group date" data-date-format="mm-dd-yyyy">
                        <input class="form-control" type="text" readonly / name="dob">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                    </div>
                  </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Dieses</label>
                    <input type="text" class="form-control" name="dieses">
                  </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Cell</label>
                    <input type="text" class="form-control" name="cell" onkeypress="return isNumber(event)">
                  </div>
            </div>
        </div>
        <hr>
        <label for="exampleInputEmail1">Address</label>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <select class="form-control form-control-sm" name="division" id="division">
                        @foreach($divisions as $key => $value)
                      <option value="{{ $value->id }}">{{ $value->name }}</option>
                      @endforeach
                    </select>
                  </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <select class="form-control form-control-sm" name="district" id="district">
                      
                    </select>
                  </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <select class="form-control form-control-sm" name="thana" id="thana">
                      
                    </select>
                  </div>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </div>
</div>
</form>
<!-- Modal -->
<script type="text/javascript">

    $(function () {
      $("#datepicker").datepicker({ 
            autoclose: true, 
            todayHighlight: true
      }).datepicker('update', new Date());
    });

    function isNumber(evt)
  {
     var charCode = (evt.which) ? evt.which : event.keyCode
     if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;

     return true;
  }

    $(document).ready(function() {
        $('#division').click(function(){
            //alert('!');
            $("#district option").remove(); 
            $("#upazila option").remove();
            var id = $("#division").val();
            // console.log(id);
            // var dataId={'id':id};
            $.ajax({
                type :'GET',
                url :'getDist/'+id,
                dataType :"json",
                // data :{id:dataId},
                data :{},
                success:function(data) {
                    // console.log(data);
                    $.each( data, function(k, v) {
               // $('#district').append($('<option>', {value:v.id, text:v.name}));
                $('#district').append($('<option>', {value:v.id, text:v.name}));
                 // console.log(v.id);
                });

                 },
                  error: function()
                 {
                     alert('error...');
                     //console.log(v.id);
                 }
            });

        });
     });    

     $(document).ready(function() {
        $('#district').click(function(){
            //alert('!');
            $("#thana option").remove();
            var id = $("#district").val();
            // console.log(id);
            // var dataId={'id':id};
            $.ajax({
                type :'GET',
                url :'getTha/'+id,
                dataType :"json",
                data :{},
                success:function(data) {
                     // console.log(data);
                    $.each( data, function(k, v) {
                $('#thana').append($('<option>', {value:v.id, text:v.name}));
                 // console.log(v.id);
                });

                },
                  error: function()
                 {
                     alert('error...');
                     //console.log(v.id);
                 }
            });

        });
    });  
</script>

@endsection

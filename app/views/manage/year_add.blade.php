@extends('manage.layout')
@section('title')
ปีการศึกษา
@stop
@section('subtitle')
จัดการปีการศึกษา
@stop
@section('content')
<form class="add-new-post" method="post" autocomplete="off" >
  <div class="row">
    <div class="col-lg-3 col-md-12">
      <!-- Add New Post Form -->
      <div class="card card-small mb-3">
        <div class="card-body">
          <form class="form-horizontal" autocomplete="off" enctype="multipart/form-data" method="post">
              <div class="col">
                <div class="form-group">
                    <label for="name">ปีการศึกษา</label>
                    <input type="text" class="form-control" id="year" name="year" value="{{$text_year}}" placeholder ="ปีการศึกษา" >
                    <small class="form-text text-danger">{{$errors->first('year')}}</small>
                </div>
              </div>
          <button class="btn btn-outline-success ml-auto float-right">
            <i class="material-icons">save</i> บันทึก
          </button>
      
          </form>
        </div>
      </div>
      <!-- / Add New Post Form -->
    </div>
  </div>
</form>

@stop
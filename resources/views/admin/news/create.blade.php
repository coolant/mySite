@extends('layouts.admin.panel')
@section('content')
<div class="card" style="margin: 20px;">
  <div class="card-header">Create News</div>
  <div class="card-body">
       
      <form action="{{route('admin.news.post')}}" method="post" enctype="multipart/form-data">
        @csrf
        <label>Name</label></br>
        <input type="text" name="title" id="title" class="form-control"></br>
        <label>Address</label></br>
        <input type="text" name="content" id="content" class="form-control"></br>
        <label>Mobile</label></br>
        <!-- <input type="text" name="mobile" id="mobile" class="form-control"></br> -->
        <input class="form-control" name="photo" type="file" id="photo">
 
         
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
@endsection
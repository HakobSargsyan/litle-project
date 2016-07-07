@extends('layouts.layout')

@section('content')
<div class="container" style="margin-top: 15px;">
<div class="col-md-8">
<div class="panel panel-default">
  <div class="panel-heading"><h1>{{$subCat->sub_category_name}}</h1></div>
  <div class="panel-body">

        <blockquote class="blockquote">
      <img class="img-rounded" width="250px;" src="{{url('subCatImages/'.$subCat->path)}}" alt = "">
          <p class="m-b-0">{{$subCat->descripton}}</p>
        </blockquote>
  </div>
</div>
</div>
  

</div>
@stop
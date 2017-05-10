@extends('layouts/default')
@section('title')
  Items Remove
@endsection
@section('content')

@if(!isset($item))
  @php
    $id_value="";
    $name_value="";
    $description_value="";
    $price_value="";
    $action="create";
    $btn_value="create";
  @endphp

@else
  @php
    $id_value=$item->id;
    $name_value=$item->name;
    $description_value=$item->description;
    $price_value=$item->price;
    $action="../remove";
    $btn_value="remove";
  @endphp
@endif

  <h2 class="title">Item!</h2>
  <br/>
	<form class="col-sm-6" action="{{$action}}" method="post">
    <input type="hidden" name="id" value="{{$id_value}}" readonly>
    <div class="form-group">
      	Name: <input type="text" name="name" value="{{$name_value}}" readonly>
    </div>
	   <div class="form-group">
	     Description: <input type="text" name="description" value="{{$description_value}}" readonly>
	   </div>
	  <div class="form-group">
	   Price: <input type="text" name="price" value="{{$price_value}}" readonly>
	  </div>
		<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>" />
		<input class="btn btn-success btn-default btn-danger" type="submit" value="{{$btn_value}}" readonly>
	</form>
  @if(count($errors) > 0)
  		<div class="errors">
  			<ul>
  			@foreach($errors->all() as $error)
  				<li style="color:red;">{{$error}}</li>
  			@endforeach
  			</ul>
  		</div>
  	@endif
@endsection

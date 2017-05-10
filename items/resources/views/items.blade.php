@extends('layouts/default')
@section('title')
  Testing items
@endsection

@section('content')
    <h2 class="title">Testing CRUD<small> with laravel</small></h2>
    <br>
    <table class="table">
    	<tr>
    		<th>Name</th>
    		<th>Description</th>
    		<th>Price</th>
    	</tr>
    		@foreach($items as $item)
    			<tr>
    			<td>{{$item->name}}</td>
          <td>{{$item->description}}</td>
          <td>{{$item->price}}</td>
          <td><a href="items/update/{{$item->id}}" class="btn btn-default">Modify</a></td>
          <td><a href="items/remove/{{$item->id}}" class="btn btn-danger">Remove</a></td>
          </tr>
        @endforeach
    </table>
    <a href="items/create" class="btn btn-primary">New item</a>
@endsection

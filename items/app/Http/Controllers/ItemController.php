<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemController extends Controller
{
    function list(){
      $items = \App\Item::all();
      return view('items', ['items' => $items]);
    }

    function create(){
      return view('formitem');
    }

    function store(Request $request){
      $this->validate($request, [
				'name' => 'required|min:5',
				'description' => 'required|min:8',
				'price' => 'required|min:0'
			]);

			\App\Item::create($request->all());
			return redirect('/');
    }

    function updateForm($id){
      $item = \App\Item::find($id);
      return view('formitem', ['item' => $item]);
    }

    function removeConf($id){
      $item = \App\Item::find($id);
      return view('confirmdelete', ['item' => $item]);
    }

    function remove(Request $request){
      $id = $request->input('id');
      $item = \App\Item::find($id);
      $item->delete();
      return redirect('/');
    }

    function update(Request $request){
      $this->validate($request, [
				'name' => 'required|min:5',
				'description' => 'required|min:8',
				'price' => 'required|min:0'
			]);

    		$id = $request->input('id');

    		$item = \App\Item::find($id);
    		$item->name = $request->input('name');
    		$item->description = $request->input('description');
    		$item->price = $request->input('price');

    		$item->save();

        return redirect('/');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index()
    {
    	$data=[];
        $data['rows'] = Product::all();
        // dd($data);
    	return view('admin.product.index', compact('data'));
    }

    public function create()
    {
    	return view('admin.product.create');
    }

    public function store(Request $request)
    {

     	$row = new Product();
        // dd($request->all());
        $row->title = $request->get('title');
        $row->description = $request->get('description');
        $row->save();
        return redirect ('admin/product');
    }

    public function edit($id)
    {
    	$data = [];
        $data['row'] = Product::find($id);
        // return view ('admin/post/edit', compact('data'));
    	return view('admin.product.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
    	$row = Product::find($id);
        $row->title=$request->get('title');
        $row->description=$request->get('description');
        $row->save();
        return redirect ('admin/product');
    }

    public function destroy($id)
    {
    	$row = Product::find($id);
        $row->delete();
        return redirect ('admin/product');
    }

}



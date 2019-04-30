<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index()
    {
    	return view('admin.product.index');
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
        return redirect ('admin/product	');
    }

    public function edit($id)
    {

    }

    public function update(Request $request, $id)
    {

    }

    public function destroy($id)
    {

    }

}



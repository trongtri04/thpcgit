<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class productController extends Controller
{
    public function add_product()
    {
        return view('admin.product.add', [
            'title' => 'Thêm sản phẩm'
        ]);
    }
    public function insert_product(Request $request)
    {
        $product = new product();
        $product->name = $request->input('name');
        $product->loai = $request->input('loai');
        $product->price_nomal = $request->input('price_nomal');
        $product->price_sale = $request->input('price_sale');
        $product->description = $request->input('description');
        $product->baohanh = $request->input('baohanh');
        $product->hangsx = $request->input('hangsx');
        $product->image = $request->input('image');
        $product->save();
        return Redirect()->back();
    }
    public function list_product()
    {
        $product = DB::table('products')->paginate(50);
        // $product = product::all();

        return view('admin.product.list', [
            'title' => 'Danh sách sản phẩm',
            'products' => $product
        ]);
    }
    public function delete_product(Request $request)
    {
        product::find($request->product_id)->delete();
        return response()->json([
            'success' => true
        ]);
    }
    public function edit_product(Request $request)
    {
        $product = product::find($request->id);

        return view('admin.product.edit', [
            'title' => 'Sửa sản phẩm',
            'product' => $product
        ]);
    }
    public function update_product(Request $request)
    {
        $product = product::find($request->id);
        $product->name = $request->input('name');
        $product->loai = $request->input('loai');
        $product->price_nomal = $request->input('price_nomal');
        $product->price_sale = $request->input('price_sale');
        $product->description = $request->input('description');
        $product->baohanh = $request->input('baohanh');
        $product->hangsx = $request->input('hangsx');
        $product->image = $request->input('image');
        $product->save();
        return Redirect('/admin/product/list');
    }
}

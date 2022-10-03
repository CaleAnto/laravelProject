<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\shop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class shopController extends Controller
{

    public function index()
    {
        $allstoks = shop::all();
        return view('ProductV',  ['product' => $allstoks]);

    }

    public function viewProduct( int $id) {
        $prodV = DB::table('products')->where('IDProduct', $id)->first();
        $shopV = DB::table('shops')->where('id', $id)->first();

        return view('viewProduct', ['shop' => $shopV, 'product' => $prodV]);
    }

    public function createShop(Request $requests)
    {
        shop::create([
            'Name' => $requests->name,
            'Price' => $requests->price,
            'Count' => $requests->count
        ]);

        return view('createProduct');
    }

    public function createProduct(Request $requests)
    {
        Product::create([
            'Composition' => $requests->composition,
            'Manufacturer' => $requests->manuf,
            'PurchasePrice'=> $requests->purchase,
            'Stock' => $requests->id
        ]);

        return redirect('/view');
    }

    public function editShop(int $id){
        $shop = DB::table('shops')->where('id', $id)->first();
        return view('updateShop', ['shop' => $shop]);
    }

    public function updateShop(Request $request, int $id){
        DB::table('shops')->where('id', $id)->update([
            'Name' => $request->name,
            'Price' => $request->price,
            'Count' => $request->count
        ]);

        return redirect('/view');
    }

    public function editProduct(int $id){
        $product = DB::table('products')->where('IDProduct', $id)->first();
        return view('updateProduct', ['product' => $product]);
    }

    public function updateProduct(Request $requests, int $pid){
        DB::table('products')->where('IDProduct', $pid)->update([
            'Composition' => $requests->composition,
            'Manufacturer' => $requests->manuf,
            'PurchasePrice'=> $requests->purchase,
            'Stock' => $requests->id
        ]);

        return redirect('/view');
    }

    public function destroyProduct(int $id){
        DB::table('products')->where('IDProduct', $id)->delete();
        DB::table('shops')->where('id', $id)->delete();

        return redirect('/view');
    }


}

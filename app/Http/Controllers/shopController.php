<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\shop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\File;

class shopController extends Controller
{

    public function index()
    {
        $allstoks = shop::all();
        return view('ProductV',  ['product' => $allstoks]);
    }

    public function viewProduct( int $id) {
        $prodV = DB::table('products')->where('id', $id)->first();
        $shopV = DB::table('shops')->where('id', $id)->first();
        $stockV = DB::table('stocks')->where('id', $prodV->stock_id)->first();

        return view('viewProduct', ['shop' => $shopV, 'product' => $prodV, 'stock' => $stockV]);
    }

    public function createShop(Request $requests)
    {

        Product::create([
            'Composition' => $requests->composition,
            'Manufacturer' => $requests->manuf,
            'PurchasePrice'=> $requests->purchase,
            'stock_id' => $requests->idstock
        ]);

        $prod = DB::table('products')->orderBy('id', 'desc')->first();
        $path = $requests -> file('image')->store('images', 'public');

        shop::create([
            'image' => $path,
            'Name' => $requests->name,
            'Price' => $requests->price,
            'Count' => $requests->count,
            'product_id' => $prod->id
        ]);

        return redirect('/view');
    }

    public function editShop(int $id){
        $shop = DB::table('shops')->where('id', $id)->first();
        $product = DB::table('products')->where('id', $id)->first();
        $stock = DB::table('stocks')->select('*')->get();
        return view('updateShop', ['shop' => $shop, 'product' => $product, 'stock' => $stock]);
    }

    public function updateShop(Request $request, int $id){
        DB::table('shops')->where('id', $id)->update([
            'Name' => $request->name,
            'Price' => $request->price,
            'Count' => $request->count
        ]);
        DB::table('products')->where('id', $id)->update([
            'Composition' => $request->composition,
            'Manufacturer' => $request->manuf,
            'PurchasePrice'=> $request->purchase,
            'stock_id' => $request->stock
        ]);

        return redirect('/view');
    }

    public function destroyProduct(int $id){
        $product = shop::find($id);
        unlink(public_path('/storage/'.$product->image));
        $product -> delete();

        DB::table('products')->where('id', $id)->delete();

        return redirect('/view');
    }


}

<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use Illuminate\Http\Request;

class StockController extends Controller
{

    public function main(){
        $allstoks = Stock::all();
        return view('main',  ['stock' => $allstoks]);
    }


    public function createStock(Request $request){
        Stock::create([
            'Address' => $request->address,
            'FreeCounts' => $request->count,
        ]);

        return redirect('/index');
    }

    public function editStock(Stock $stock){
        return view('editStock', ['stock' => $stock]);
    }

    public function updateStock(Request $request, Stock $stock){
        $stock->update([
            'Address' => $request->address,
            'FreeCounts' => $request->count
        ]);

        return redirect('/index');
    }

    public function destroyStock(Stock $stock){
        $stock->delete();

        return redirect('/index');
    }

}

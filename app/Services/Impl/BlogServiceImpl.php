<?php

namespace App\Services\Impl;

use App\Models\Stock;
use App\Services\BlogService;
use Illuminate\Http\Request;

class BlogServiceImpl implements BlogService
{
    public function getAll()
    {
        $stock = Stock::all();

        if(!$stock) {
            throw new \Exception('Таблица склады пусьътая!', 404);
        }

        return $stock;
    }

    public function create(Request $request){
        $r = $request->validate([
            'Address' => 'required|string|max:255',
            'FreeCounts' => 'required|integer'
        ]);

        $stock = Stock::create($r);
        return $stock;
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'Address' => 'required|string|max:255',
            'FreeCounts' => 'required|integer'
        ]);

        $stock = Stock::find($id);
        $stock->update($validated);

        return $stock;
    }

    public function delete($id)
    {
        $stock = Stock::find($id);
        $stock->destroy($id);
    }
}

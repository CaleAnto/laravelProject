<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\StockResource;
use App\Models\Stock;
use App\Services\BlogService;
use App\Services\Impl\BlogServiceImpl;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    protected $blogService;

    public function __construct(BlogService $blogService) {
        $this->blogService = $blogService;
    }

    public function show(){
        $stock = $this->blogService->getAll();

        return StockResource::collection($stock);
    }

    public function store(Request $request){
        $stock = $this->blogService->create($request);

        return new StockResource($stock);
    }

    public function update(Request $request, $id){
        $stock = $this->blogService->update($request, $id);
        return new StockResource($stock);
    }

    public function destroy($id){
        $this->blogService->delete($id);
    }



}

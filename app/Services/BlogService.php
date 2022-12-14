<?php

namespace App\Services;

use Illuminate\Http\Request;

interface BlogService
{
        public function getAll();
        public function create(Request $request);
        public function update(Request $request, $id);
        public function delete($id);
}

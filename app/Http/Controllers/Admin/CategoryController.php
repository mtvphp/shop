<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function create()
    {
        $categories = Category::all();

        return view('admin.category.create', [
            'categories' => $categories,
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [

        ]);

        $request->data = json_decode($request->data);

        if($request->data) {
            foreach ($request->data as $d) {
                echo 'id:' . $d->id . ',';
            }
        }
    }

}

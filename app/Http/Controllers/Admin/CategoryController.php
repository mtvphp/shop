<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function create()
    {
        return view('admin.category.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|min:3'
        ]);

        Category::create([
            'title' => $request->title
        ]);

        return redirect()->back();
    }
}

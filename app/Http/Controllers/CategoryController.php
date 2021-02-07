<?php

namespace App\Http\Controllers;

class CategoryController extends Controller
{

    public function index()
    {
        return view("site.category.index");
    }

    public function show(string $slug)
    {
        return view("site.category.show", ["slug" => $slug]);
    }
}

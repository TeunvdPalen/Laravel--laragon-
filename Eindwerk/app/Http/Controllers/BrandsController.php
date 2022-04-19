<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandsController extends Controller
{
    public function index()
    {
        $brands = Brand::all()->sortBy('name');
        return view('brands.index', [
            'brands' => $brands
        ]);
    }

    public function show(Brand $brand)
    {
        return view('brands.show', ['brand' => $brand]);
    }
}

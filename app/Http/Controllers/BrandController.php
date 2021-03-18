<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Brand;
use App\Traits\DeleteModelTrait;
use Illuminate\Http\Request;

class BrandController extends Controller
{

    use DeleteModelTrait;
    private $brand;

    public function __construct(Brand $brand)
    {
        $this->brand = $brand;
    }

    public function AllBrandProduct()
    {
        $cate = Product::all()->sortBy('brand_id');
        return view('pages.productlist', compact('cate'));
    }

    public function ProductByBrand($brand_id)
    {
        $cate = Product::where('brand_id', $brand_id)->get();
        return view('pages.productlist', compact('cate'));
    }


    // admin
    public function index()
    {
        $brand = $this->brand->latest()->simplePaginate(5);
        return \view('admin.brand.index')->with('brands', $brand);
    }

    public function addBrand()
    {
        return \view('admin.brand.addBrand');
    }

    public function store(Request $request)
    {
        $this->brand->create([
            'name' => $request->name
        ]);
        // $categories = new \Categories();
        // $categories->name = $request->name;
        // $categories->save();
        return \redirect()->route('brands.index');
    }

    public function edit($id)
    {
        $brand = $this->brand->find($id);
        return \view('admin.brand.editbrand', \compact('brand'));
    }

    public function update(Request $request, $id)
    {
        $this->brand->find($id)->update(
            ['name' => $request->name]
        );
        return \redirect()->route('brands.index');
    }

    public function delete($id)
    {
        return $this->deleteModelTrait($id, $this->brand);
    }
}

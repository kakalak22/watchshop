<?php

namespace App\Http\Controllers;
use App\Models\Categories;

use App\Models\Product;
use App\Models\Brand;
use App\Traits\DeleteModelTrait;
use Illuminate\Http\Request;

class BrandController extends Controller
{

    use DeleteModelTrait;
    private $brand;
    private $product;
    public function __construct(Brand $brand, Product $product)
    {
        $this->brand = $brand;
        $this->product = $product;
    }

    public function AllBrandProduct(Request $request)
    {
        $cate_name = Categories::all();
        $brand_name = Brand::all();
        $category = $request->category;
        $brand = $request->brand;
        if(isset($category)){
            if(isset($brand)){
                $cate = Product::whereIN('brand_id', explode(',', $brand))->whereIN('category_id',explode(',', $category))->paginate(8);
                response()->json($cate);
                return view('pages.productlist',compact('cate','cate_name','brand_name'));
            }else{
            $cate = Product::whereIN('category_id', explode(',', $category))->paginate(8);
            response()->json($cate);
            return view('pages.productlist',compact('cate','cate_name','brand_name'));
            }
        }else if(isset($brand)){
            $cate = Product::whereIN('brand_id', explode(',',$brand))->paginate(8);
            response()->json($cate);
            return view('pages.productlist',compact('cate','cate_name','brand_name'));
        }else{
            $cate = Product::orderBy('brand_id','ASC')->paginate(8);
            return view('pages.productlist', compact('cate','cate_name','brand_name'));
        }
    }

    public function ProductByBrand($brand_id)
    {
        $cate = Product::where('brand_id', $brand_id)->paginate(6);
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
        $countCate = $this->getCountBrandByProduct($id);
        if ($countCate > 0) {
            \dd(1232);
        } else {
            return $this->deleteModelTrait($id, $this->brand);
        }
    }

    public function getCountBrandByProduct($brand_id)
    {
        $cate = Product::where('brand_id', $brand_id)->with('brand')->count();
        return $cate;
    }
}
